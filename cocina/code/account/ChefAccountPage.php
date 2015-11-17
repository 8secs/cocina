<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 30/1/15
 * Time: 8:59
 */

class ChefAccountPage extends Page {

    public function canCreate($member = null) {
        return !self::get()->exists();
    }

    public static function find_link($urlSegment = false) {
        $page = self::get_if_account_page_exists();
        return ($urlSegment) ? $page->URLSegment : $page->Link();
    }

    protected static function get_if_account_page_exists() {
        if($page = DataObject::get_one('ChefAccountPage')) {
            return $page;
        }
        user_error('No ChefAccountPage was found. Please create one in the CMS!', E_USER_ERROR);
    }
}

class ChefAccountPage_Controller extends Page_Controller {

    private static $url_segment = 'chef-account';
    private static $allowed_actions = array(
        'addressbook',
        'CreateAddressForm',
        'DefaultAddressForm',
        'editprofile',
        'EditChefAccountForm',
        'addproduct',
        'AddChefProductForm'
    );

    protected $member;

    public function init() {
        parent::init();
        if(!Member::currentUserID()) {
            $messages = array(
                'default' => _t(
                    'AccountPage.LOGIN',
                    'You\'ll need to login before you can access the chef account page.
					If you are not registered, you won\'t be able to access it , otherwise please enter your details below.'),
                'logInAgain' => _t(
                    'AccountPage.LOGINAGAIN',
                    'You have been logged out. If you would like to log in again,
					please do so below.')
            );
            Security::permissionFailure($this, $messages);
            return false;
        }
        $this->member = Member::currentUser();
    }

    public function getTitle() {
        if($this->dataRecord && $title = $this->dataRecord->Title){
            return $title;
        }
        return _t('AccountPage.Title', "Account");
    }

    public function getMember() {
        return $this->member;
    }

    public function addressbook() {
        return array(
            'DefaultAddressForm' => $this->DefaultAddressForm(),
            'CreateAddressForm' => $this->CreateAddressForm()
        );
    }

    public function DefaultAddressForm() {
        $addresses = $this->member->AddressBook()->sort('Created', 'DESC');
        if($addresses->exists()){
            $fields = new FieldList(
                DropdownField::create(
                    "DefaultShippingAddressID",
                    _t("Address.ShippingAddress", "Shipping Address"),
                    $addresses->map('ID', 'toString')->toArray()
                ),
                DropdownField::create(
                    "DefaultBillingAddressID",
                    _t("Address.BillingAddress", "Billing Address"),
                    $addresses->map('ID', 'toString')->toArray()
                )
            );
            $actions = new FieldList(
                new FormAction("savedefaultaddresses", _t("Address.SaveDefaults", "Save Defaults"))
            );
            $form = new Form($this, "DefaultAddressForm", $fields, $actions);
            $form->loadDataFrom($this->member);

            return $form;
        }

        return false;
    }

    public function savedefaultaddresses($data,$form) {
        $form->saveInto($this->member);
        $this->member->write();
        $this->redirect($this->Link('addressbook'));
    }

    public function CreateAddressForm() {
        $singletonaddress = singleton('Address');
        $fields = $singletonaddress->getFrontEndFields();
        $actions = new FieldList(
            new FormAction("saveaddress", _t("Address.SaveNew", "Save New Address"))
        );
        $validator = new RequiredFields($singletonaddress->getRequiredFields());

        return new Form($this, "CreateAddressForm", $fields, $actions, $validator);
    }

    public function saveaddress($data,$form) {
        $member = $this->getMember();
        $address = new Address();
        $form->saveInto($address);
        $address->MemberID = $member->ID;
        $address->write();
        if(!$member->DefaultShippingAddressID){
            $member->DefaultShippingAddressID = $address->ID;
            $member->write();
        }
        if(!$member->DefaultBillingAddressID){
            $member->DefaultBillingAddressID = $address->ID;
            $member->write();
        }
        $this->redirect($this->Link('addressbook'));
    }

    public function editprofile() {
        return array();
    }

    public function EditChefAccountForm() {
        return new ChefAccountForm($this, 'EditChefAccountForm');
    }

    public function addproduct(){
        return array();
    }

    public function AddChefProductForm(){
        return new ChefProductForm($this, 'AddChefProductForm');

    }

}