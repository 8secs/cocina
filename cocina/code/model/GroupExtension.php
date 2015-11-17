<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 28/1/15
 * Time: 12:36
 */

class GroupExtension extends DataExtension {

    static $db = array(
        'GoToAdmin' => "Boolean"
    );

    static $has_one = array(
        "LinkedPage" => "SiteTree"
    );

    public function updateCMSFields(FieldList $fields) {
        $fields->addFieldToTab("Root.Members", new CheckboxField("GoToAdmin", " Go to Admin area"), 'Members');
        $fields->addFieldToTab("Root.Members", new TreeDropdownField("LinkedPageID", "Or select a Page to redirect to", "SiteTree"), 'Members');
    }
} 