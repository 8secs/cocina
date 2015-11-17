<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 30/1/15
 * Time: 9:35
 */

class ChefAccountForm extends Form {

    public function __construct($controller, $name) {
        $member = Member::currentUser();
        $requiredFields = null;
        if($member && $member->exists()) {

            $fields = new FieldList();
            $fields->add(new HeaderField('AddressHeader', _t('Addressable.ADDRESSHEADER', 'Avatar / Description')));
            $uploadField = new UploadField('Avatar', 'Select avatar');
            $uploadField->setCanAttachExisting(false);
            $comment = new TextareaField('Description','Description*');
            $email = EmailField::create('Email', _t('CheckoutField.EMAIL', 'Email'));
            $fields->add($uploadField);
            $fields->add($comment);
            $fields->add($email);

            $requiredFields = $member->getValidator();
            $requiredFields->addRequiredField('Avatar', 'Description', 'Email');
        } else {
            $fields = new FieldList();
        }
        if(get_class($controller) == 'ChefAccountPage_Controller'){
            $actions = new FieldList(new FormAction('submit', _t('MemberForm.SAVE', 'Save Changes')));
        }

        parent::__construct($controller, $name, $fields, $actions, $requiredFields);
        if($member){
            $member->Password = ""; //prevents password field from being populated with encrypted password data
            $this->loadDataFrom($member);
        }
        if($record = $controller->data()){
            $record->extend('updateChefAccountForm', $fields, $actions, $requiredFields);
        }
    }

    /**
     * Save the changes to the form
     */
    public function submit($data, $form, $request) {
        $member = Member::currentUser();
        if(!$member) return false;

        $form->saveInto($member);
        $member->write();

        if($chefGroup = DataObject::get_one('Group', "Code = 'chef'")){
            $chefGroupId = $chefGroup->ID;
            if(!$member->inGroup($chefGroupId)){
                $chefGroup->Members()->add($member);
            }
        }

        $form->sessionMessage(_t("MemberForm.DETAILSSAVED", 'Your details have been saved'), 'good');

        Controller::curr()->redirectBack();
        return true;
    }
}

class ChefAccountFormValidator extends RequiredFields{

    /**
     * Ensures member unique id stays unique.
     */
    public function php($data) {
        $valid = parent::php($data);
        $field = Member::get_unique_identifier_field();
        if(isset($data[$field])){
            $uid = $data[Member::get_unique_identifier_field()];
            $currentmember = Member::currentUser();
            //can't be taken
            if(DataObject::get_one('Member', "$field = '$uid' AND ID != ".$currentmember->ID)){
                $this->validationError(
                    $field,
                    "\"$uid\" is already taken by another member. Try another.",
                    "required"
                );
                $valid = false;
            }
        }
        return $valid;
    }

}