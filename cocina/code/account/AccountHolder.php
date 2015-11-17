<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 28/01/15
 * Time: 18:29
 */

class AccountHolder extends Page {
    private static $allowed_children = array('ChefAccountPage', 'AccountPage');
}

class AccountHolder_Controller extends Page_Controller {

    public function init(){
        parent::init();

        if(!Member::currentUserID()) {
            $messages = array(
                'default' => _t(
                    'AccountPage.LOGIN',
                    'You\'ll need to login before you can access the account page.
                    If you are not registered, you won\'t be able to access it until
                    you make your first order, otherwise please enter your details below.'),
                'logInAgain' => _t(
                    'AccountPage.LOGINAGAIN',
                    'You have been logged out. If you would like to log in again,
                    please do so below.')
            );
            Security::permissionFailure($this, $messages);
            return false;
        }

    }


}