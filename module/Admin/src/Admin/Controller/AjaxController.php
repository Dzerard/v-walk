<?php
/**
 * Description of AjaxController
 *
 * @author Łukasz
 */

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Admin\Model\Contact;        //Contact
use Admin\Mail\Mailer;          //Sending e-mail

class AjaxController extends AbstractActionController
{
    protected $contactTable;
    
    public function __construct() {
        //konstruktor
    }
    
    public function indexAction() {
        return;
    }
    
     //wysyłanie i dodawnie wiadmości z formularza konatktowego :)
    public function addAction() 
    {
        $response = $this->getResponse();
        $response->setStatusCode(200);
        
        $request = $this->getRequest();  

            if ($request->isPost()) {          
                
                try {
                    $contact = new Contact();              
                    $contact->exchangeArray($request->getPost());                
                    $this->getContactTable()->saveContact($contact);    
                    $response->setContent("true"); 
                    
                } catch (Exception $e) {
                  //fix obsługa błędów                   
                }                   
               
                // sending e-mails
                
//                $mail = new Mailer();
//                $mail->sendContactMail($request->getPost());    
                
            }        
           
        return $response;  
        
    }
    
    public function getContactTable()
    {
        if (!$this->contactTable) {
            $sm = $this->getServiceLocator();
            $this->contactTable = $sm->get('Admin\Model\ContactTable');
        }
        return $this->contactTable;
    }
  
}

?>
