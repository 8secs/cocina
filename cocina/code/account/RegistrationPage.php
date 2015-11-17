<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 27/1/15
 * Time: 12:33
 */

class RegistrationPage extends Page{

}

class RegistrationPage_Controller extends Page_Controller{

    static $allowed_actions = array(
        'RegistrationForm'
    );

    function RegistrationForm(){

        $fields = new FieldList(
            new TextField('FirstName', _t("REGISTRATION.NAME",'Name*')),
            new TextField('Surname', _t("REGISTRATION.SURNAME",'Surname*')),
            new EmailField('Email', _t("REGISTRATION.EMAIL",'Email*')),
            new ConfirmedPasswordField('Password', _t("REGISTRATION.PASSWORD",'Password*'))

        );

        $actions = new FieldList(new FormAction('DoRegister', _t('REGISTRATION.SEND','Send'))
        );

        $validator = new RequiredFields('Name', 'Surname', 'Email', 'Password');

        return new Form($this, 'RegistrationForm', $fields, $actions, $validator);
    }

    public function DoRegister($data, $form){

        if($member = DataObject::get_one("Member", "`Email` = '". Convert::raw2sql($data['Email']) . "'")){
            $form->AddErrorMessage('Email', _t("REGISTRATION.EMAILEXISTS","Sorry, that email address already exists. Please choose another."), 'bad');
            Session::set("FormInfo.Form_RegistrationForm.data", $data);

            return $this->redirectBack();
        }

        $Member = new Member();
        $form->saveInto($Member);
        $Member->write();
        $Member->logIn();

        if(!$userGroup = DataObject::get_one('Group', "Code = 'register-user'")){
            $userGroup = new Group();
            $userGroup->Code = "register-user";
            $userGroup->Title = "Register-user";
            $userGroup->write();
        }
        $userGroup->Members()->add($Member);

        return $this->redirect(Director::baseURL());

    }

}