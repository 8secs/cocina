<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 11/01/15
 * Time: 20:20
 */

class ContactPage extends Page{

    static $db = array(
        'Mailto' => 'Varchar(100)',
        'SubmitText' => 'Text',
        'Titulo' => 'Text',
        'Subtitulo' => 'Text'
    );

    function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab("Root.OnSubmission", new TextField('Mailto', 'Enviar email a'));
        $fields->addFieldToTab("Root.OnSubmission", new TextareaField('SubmitText', 'Texto en el envio'));

        $fields->addFieldToTab('Root.Main', new TextField("Titulo", "Titulo"));
        $fields->addFieldToTab('Root.Main', new TextField("Subtitulo", "Subtitulo"));
        $fields->removeFieldFromTab("Root.Main", "Content");

        return $fields;
    }

}

class ContactPage_Controller extends Page_Controller{

    public function init(){
        parent::init();

        Requirements::javascript("https://maps.googleapis.com/maps/api/js");

        Requirements::javascript("themes/simple/javascript/map.js");
    }

    static $allowed_actions = array(
        'ContactForm'
    );

    public $SubmitText;

    private $subjects = array(
        'Quiero recibir un presupuesto personalizado',
        'Tengo un problema con la web',
        'Otros'
    );

    function ContactForm() {

        $fields = new FieldList(
            new DropdownField('Subject', 'Asunto', $this->subjects),
            new TextField('Name', 'Nombre*'),
            new TextField('Surname', 'Apellidos*'),
            new EmailField('Email', 'Email*'),
            new TextField('Phone', 'Móvil'),
            new TextareaField('Comments','Comentario*')
        );

        $actions = new FieldList(
            new FormAction('SendContactForm', 'Enviar')
        );

        $validator = new RequiredFields('Name', 'Surname', 'Email', 'Comments');

        return new Form($this, 'ContactForm', $fields, $actions, $validator);
    }

    function SendContactForm($data, $form) {
        $From = $data['Email'];
        $To = $this->Mailto;
        //$To = "andres@laclaqueta.com";
        $Subject = $this->subjects[$data['Subject']];
        $email = new Email($From, $To, $Subject);
        $email->setTemplate('ContactEmail');
        $email->populateTemplate($data);
        $email->send();
        //$this->SubmitText = "Los datos se ha enviado correctamente";
        $this->redirect($this->Link("?success=1"));
    }

    public function Success()
    {
        return isset($_REQUEST['success']) && $_REQUEST['success'] == "1";
    }

}