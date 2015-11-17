<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 27/1/15
 * Time: 15:22
 */

class CocinaLoginForm extends MemberLoginForm{

    private static $cocinaLoginFormTemplate = "Form";

    function forTemplate(){
        return $this->renderWith(array($this->class, self::$cocinaLoginFormTemplate));
    }

    static function setFormTemplate($newCocinaLoginFormTemplate){
        self::$cocinaLoginFormTemplate = $newCocinaLoginFormTemplate;
    }

    public function dologin($data) {
        if($this->performLogin($data)) {
            if(!$this->redirectByGroup($data))
                $this->getController()->redirect(Director::baseURL());
        } else {
            if($badLoginURL = Session::get("BadLoginURL")) {
                $this->getController()->redirect($badLoginURL);
            } else {
                $this->getController()->redirectBack();
            }
        }
    }

    public function redirectByGroup($data) {
        $member = Member::currentUser();
        $Groups = DataObject::get("Group");

        foreach($Groups as $Group) {
            if($member && $member->inGroup($Group->ID) && $Group->GoToAdmin) {
                return $this->getController()->redirect(Director::baseURL() . 'admin' );
            }
            elseif($member && $member->inGroup($Group->ID)  && $Page = $Group->LinkedPage()) {
                $pageLink = str_replace("/", "", $Page->Link());
                $url = Director::baseURL() . $pageLink;
                return $this->getController()->redirect($url);
            }
        }
        return false;
    }

} 