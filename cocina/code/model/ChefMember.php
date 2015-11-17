<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 30/1/15
 * Time: 8:47
 */

class ChefMember extends DataExtension {

    private static $db = array(
        'Description' => 'HTMLText'
    );

    private static $has_many = array(
        'AddressBook' => 'Address',
        'Products' => 'Product'
    );

    private static $has_one = array(
        'Avatar' => 'Image',
        'DefaultShippingAddress' => 'Address',
        'DefaultBillingAddress' => 'Address'
    );

    public function updateCMSFields(FieldList $fields) {
        $fields->removeByName('Country');
        $fields->removeByName("DefaultShippingAddressID");
        $fields->removeByName("DefaultBillingAddressID");
        $fields->addFieldToTab('Root.Main',
            new DropdownField('Country', 'Country',
                SiteConfig::current_site_config()->getCountriesList()
            )
        );
    }

    public function updateMemberFormFields($fields) {
        $fields->removeByName('DefaultShippingAddressID');
        $fields->removeByName('DefaultBillingAddressID');
        if($gender=$fields->fieldByName('Gender')){
            $gender->setHasEmptyDefault(true);
        }
    }

} 