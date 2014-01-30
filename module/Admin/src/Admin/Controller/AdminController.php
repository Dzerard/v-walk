<?php

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Admin\Model\Contact;        //Contact
use Admin\Model\Care;           //Care
use Admin\Model\Client;         //Client
use Admin\Model\Notification;   //Noification
use Admin\Model\Personel;       //Personel
use Admin\Model\Candidates;     //Candidates
use Admin\Model\News;           //News
use Admin\Model\Offer;          //Offer
use Admin\Model\User;           //User
use Admin\Model\Info;           //User

use Admin\Form\NewsForm;
use Admin\Form\OfferForm;
use Admin\Form\UserForm;
use Admin\Form\InfoForm;

use Admin\Help\Help;            //helpers
use Admin\Mail\Mailer;          //Sending e-mail
use Zend\Validator\File\Size;   //checkin file size
use Zend\Validator\File\Extension; //file extension

class AdminController extends AbstractActionController
{
  //  protected $aboutTable;
    
    protected $contactTable;
    protected $careTable;
    protected $clientTable;
    protected $notificationTable;
    protected $personelTable;
    protected $candidatesTable;
    protected $newsTable;
    protected $offerTable;
    protected $infoTable;
    
//    <------------------
//    auth
    protected $form;
    protected $storage;
    protected $authservice;
     
    public function getAuthService()
    {
        if (! $this->authservice) {
            $this->authservice = $this->getServiceLocator()
                                      ->get('AuthService');
        }
         
        return $this->authservice;
    }
     
    public function getSessionStorage()
    {
        if (! $this->storage) {
            $this->storage = $this->getServiceLocator()
                                  ->get('Admin\Model\MyAuthStorage');
        }
         
        return $this->storage;
    }
        
    public function loginAction() 
    {
        if ($this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('admin');
        }
        
        $form = new UserForm();
        return array(
            'form'     => $form,
            'messages' =>  $this->flashmessenger()->getMessages()            
        );
      
    }
    
    public function authenticateAction()
    {
        $form     = new UserForm(); 
         
        $request = $this->getRequest();
        
        if ($request->isPost()){
            
            $user = new User();
            $form->setInputFilter($user->getInputFilter());
            $form->setData($request->getPost());
            
            if ($form->isValid()){
                //check authentication...
                $this->getAuthService()->getAdapter()
                                       ->setIdentity($request->getPost('userName'))
                                       ->setCredential($request->getPost('userPassword'));
                                        
                $result = $this->getAuthService()->authenticate();
                
                //troche słabe te errory ...
                foreach($result->getMessages() as $message)
                {                    
                    //custom message switcher                                
                    $this->flashmessenger()->addMessage(Help::MessageSwitcher($message));
                }
                 
                if ($result->isValid()) {
                    //$redirect = 'home';
                    //check if it has rememberMe :
                    if ($request->getPost('rememberme') == 1 ) {
                        $this->getSessionStorage()
                             ->setRememberMe(1);
                        //set storage again 
                        $this->getAuthService()->setStorage($this->getSessionStorage());
                    }
                    $this->getAuthService()->getStorage()->write($request->getPost('userName'));                    
                    
                    return $this->redirect()->toRoute('admin', array('action' => 'settings'));
                }
            }
            
        }
        
        return $this->redirect()->toRoute('admin', array('action' => 'login'));
    }
    
    public function logoutAction()
    {
        $this->getSessionStorage()->forgetMe();
        $this->getAuthService()->clearIdentity();
         
        $this->flashmessenger()->addMessage("Zostałeś wylogowany z panelu admina !");
        return $this->redirect()->toRoute('admin', array('action'=> 'login'));
    }
    
    
    
//    end auth
//    ---------------------->
    
    public function indexAction() 
    {
        //check
        if (! $this->getServiceLocator()->get('AuthService')->hasIdentity()){
            return $this->redirect()->toRoute('admin', array('action' => 'login'));
        }
        
        return new ViewModel();       
    }
    
   
    
    
    
    public function settingsAction()
    {   
        //check
        if (! $this->getServiceLocator()->get('AuthService')->hasIdentity()){
            return $this->redirect()->toRoute('admin', array('action' => 'login'));
        }
        
        $id = 1;        
        try {
            $info = $this->getInfoTable()->getInfo($id);
        }
        catch (\Exception $ex) {
            return $this->redirect()->toRoute('admin', array('action' => 'settings'));
        }

        $form  = new infoForm();
        $form->bind($info);          

        $request = $this->getRequest();        
        if ($request->isPost()) {
            
          
            //zapisywanie danych kontaktowych
            if ($request->getPost('submitInfo')) {           
                
                    $form->setInputFilter($info->getInputFilter());
                    $form->setData($request->getPost());
 
                if ($form->isValid()) {     
                    
                    // Redirect to list of albums                            
                    $this->getInfoTable()->saveInfo($info);                      
                }                                    
                
                $this->flashmessenger()->addMessage("Dane kontaktowe zostały zapisane.");
                return $this->redirect()->toRoute('admin', array('action'=>'settings'));
            }
            
            //zapisywanie plików tłumaczeń 
            if ($request->getPost('saveFiles')) {               
               
                //check if file exist and delete
                $name = $request->getPost('languageName'); //pl, eng, deu
                
                //usuwanie plików
                if($name) {
                    //*.po
                    if(is_file('./public/language/'.$name.'.po')) {
                        unlink ('./public/language/'.$name.'.po');
                    }
                    //*.mo
                     if(is_file('./public/language/'.$name.'.mo')) {
                        unlink ('./public/language/'.$name.'.mo');
                    }
                }
         
                   $File = $request->getFiles()->toArray();   
                   
                   if($File['transaltionFilePo']['name'] != '' && $File['transaltionFileMo']['name'] != '')  {    
                        
                        $poFile = $File['transaltionFilePo']['name'];  
                        $moFile = $File['transaltionFileMo']['name'];  

                        $adapter = new \Zend\File\Transfer\Adapter\Http();

                        //zmiana nazwy
                        if($File['transaltionFilePo']) {

                           $poExt = pathinfo($poFile, PATHINFO_EXTENSION);
                           $fileName = $name.'.'.$poExt;                                 
                           $adapter->addFilter('Rename', './public/language/'.$fileName, $File['transaltionFilePo']['name']);
                           if($poExt=='po') {
                                  $adapter->setDestination('./public/language/');   

                                   if($adapter->receive($File['transaltionFilePo']['name'])) {                            
                                       
                                       $statusPo = true;                                        
                                   }
                           }
                        }

                        if($File['transaltionFileMo']) {

                           $moExt = pathinfo($moFile, PATHINFO_EXTENSION);
                           $fileName = $name.'.'.$moExt;                                 
                           $adapter->addFilter('Rename', './public/language/'.$fileName, $File['transaltionFileMo']['name']);
                           if($moExt=='mo') {
                                  $adapter->setDestination('./public/language/');   

                                   if($adapter->receive($File['transaltionFileMo']['name'])) {                            

                                          $statusMo = true;                                                
                                   }
                           }
                        }                                 
                   }
                   
                   if($statusPo && $statusMo) {
                       $this->flashmessenger()->addMessage('Plik .po i plik .mo został zapisany.');
                   } 
                   else {
                       $this->flashmessenger()->addMessage('Wystapił błąd, pliki tłumaczeń nie zostały zapisane.');
                   }
                   
                }
                
            //przywracanie domyslnych plikow tlumaczen 
            if($request->getPost('defaultLang'))
            {
                //check if file exist and delete
                $name = $request->getPost('languageNameInput'); //pl, eng, deu
                
                //usuwanie plików
                if($name) {                    
                            
                    try {
                        //*.po        
                        unlink ('./public/language/'.$name.'.po');
                        if (copy('./public/language/default/'.$name.'.po', './public/language/'.$name.'.po')) {
                            $poFile = true;
                        }                    
                    
                        //*.mo                
                        unlink ('./public/language/'.$name.'.mo');
                        if (copy('./public/language/default/'.$name.'.mo', './public/language/'.$name.'.mo')) {
                            $moFile = true;
                        }                          
                    }
                    catch(\Exception $ex)     {}
                }
                
                if ($poFile && $moFile) {
                    $this->flashmessenger()->addMessage('Przywrócono domyślny język ');
                }
                else {
                    $this->flashmessenger()->addMessage('Coś poszło nie tak ...');
                }
                                
               
                
                
            }
            unset($_FILES);
            return $this->redirect()->toRoute('admin', array('action'=>'settings'));  
        }
        
        return new ViewModel(array(
          'info' => $info,
          'form' => $form,
          'messages' =>  $this->flashmessenger()->getMessages()
        )              
      );
        
       
    }
    
    public function contactAction() 
    {
        //check
        if (! $this->getServiceLocator()->get('AuthService')->hasIdentity()){
            return $this->redirect()->toRoute('admin', array('action' => 'login'));
        }
        
        $id = (int) $this->params()->fromRoute('id', 0);
        
        if (!$id) {
            $paginator = $this->getContactTable()->fetchAll(true);
            $paginator->setCurrentPageNumber((int) $this->params()->fromQuery('page', 1));
            $paginator->setItemCountPerPage(10);

            return new ViewModel(array(
            'paginator' => $paginator,
            'link'      => 'contact',
            ));      
      
        }
        else {
            try {
                $contact = $this->getContactTable()->getContact($id);
            }
            catch (\Exception $ex) {
                return $this->redirect()->toRoute('admin', array(
                    'action' => 'contact'
                ));
            }

            return new ViewModel(array(
                'contact' => $contact,               
                ));
        
        }
    }
    
    public function clientAction() 
    {
        //check
        if (! $this->getServiceLocator()->get('AuthService')->hasIdentity()){
            return $this->redirect()->toRoute('admin', array('action' => 'login'));
        }
        
        $id = (int) $this->params()->fromRoute('id', 0);
        
        if (!$id) {
            $paginator = $this->getClientTable()->fetchAll(true);
            $paginator->setCurrentPageNumber((int) $this->params()->fromQuery('page', 1));
            $paginator->setItemCountPerPage(10);

            return new ViewModel(array(
            'paginator' => $paginator,
            'link'      => 'client',
            ));      
      
        }
        else {
            try {
                $client = $this->getClientTable()->getClient($id);
            }
            catch (\Exception $ex) {
                return $this->redirect()->toRoute('admin', array(
                    'action' => 'client'
                ));
            }

            return new ViewModel(array(
                'client' => $client,
                ));
        
        }
    }
    
    public function notificationAction() 
    {
        //check
        if (! $this->getServiceLocator()->get('AuthService')->hasIdentity()){
            return $this->redirect()->toRoute('admin', array('action' => 'login'));
        }
        
        $id = (int) $this->params()->fromRoute('id', 0);
        
        if (!$id) {
            $paginator = $this->getNotificationTable()->fetchAll(true);
            $paginator->setCurrentPageNumber((int) $this->params()->fromQuery('page', 1));
            $paginator->setItemCountPerPage(10);

            return new ViewModel(array(
            'paginator' => $paginator,
            'link'      => 'notification',
            ));      
      
        }
        else {
            try {
                $notification = $this->getNotificationTable()->getNotification($id);
            }
            catch (\Exception $ex) {
                return $this->redirect()->toRoute('admin', array(
                    'action' => 'notification'
                ));
            }

            return new ViewModel(array(
                'notification' => $notification,
                ));
        
        }
    }
    
    public function newsAction() 
    {
        //check
        if (! $this->getServiceLocator()->get('AuthService')->hasIdentity()){
            return $this->redirect()->toRoute('admin', array('action' => 'login'));
        }
        
        $id = (int) $this->params()->fromRoute('id', 0);
        
        if (!$id) {
            $paginator = $this->getNewsTable()->fetchAll(true);
            $paginator->setCurrentPageNumber((int) $this->params()->fromQuery('page', 1));
            $paginator->setItemCountPerPage(10);

            return new ViewModel(array(
            'paginator' => $paginator,
            'link'      => 'news',
            ));      
      
        }
        else {
            
            $id = (int) $this->params()->fromRoute('id', 0);
            if (!$id) {
                return $this->redirect()->toRoute('admin', array(
                    'action' => 'news'
                ));
            }

            try {
                $news = $this->getNewsTable()->getNews($id);
            }
            catch (\Exception $ex) {
                return $this->redirect()->toRoute('admin', array('action' => 'news'));
            }

            $form  = new NewsForm();
            $form->bind($news);
           // $form->get('submit')->setAttribute('value', 'Edit');

            $request = $this->getRequest();
            if ($request->isPost()) {
                
                //usuwanie zdjecia
                if ($request->getPost('del-picture'))
                {
                     //usuwanie zalacznika
                    if($news->newsPicture != '') {
                         unlink ('./public/upload/news/'.$news->newsPicture);
                    }
                    
                    $news->newsPicture = '';
                    $this->getNewsTable()->saveNews($news);
                    return $this->redirect()->toRoute('admin', array('action'=>'news', 'id' => $id));
                }        
                    
                //edycja newsa
                if ($request->getPost('submit')) {  
                    
                    $form->setInputFilter($news->getInputFilter());
                    $form->setData($request->getPost());

                    if ($form->isValid()) {
               
                               
                        $nonFile = $request->getPost()->toArray(); 
                        $File = $request->getFiles()->toArray();   

                        if($File['newsPicture']['name'] != '') {    

                                 //validators
                                 $size = new Size(array('max'=>5242880));
                                 //$extension = new Extension(array('jpg','png'), true);

                                 $opis = $File['newsPicture']['name'];  
                                 $adapter = new \Zend\File\Transfer\Adapter\Http();
                                //zmiana nazwy
                                 $fileExt = pathinfo($opis, PATHINFO_EXTENSION);
                                 $fileName = 'news_'.date("H_i_d_m_y").'_s'.date("s").'.'.$fileExt;
                                 $adapter->addFilter('Rename', './public/upload/news/'.$fileName, $File['newsPicture']['name']);

                                   //maybe fix
                                 $adapter->setValidators(array($size), $File['newsPicture']['size']);
                                 //$adapter->setValidators(array($extension), $fileExt);

                                 if($fileExt=='jpg' || $fileExt=='png' || $fileExt=='PNG' || $fileExt=='JPG') {

                                    $adapter->setDestination('./public/upload/news');   

                                    if($adapter->receive($File['newsPicture']['name'])) {                            

                                           $data = array_merge($nonFile, array('newsPicture' => $fileName));

                                           $news->exchangeArray($data);  
                                           $this->getNewsTable()->saveNews($news);   
                                    }

                                 return $this->redirect()->toRoute('admin', array('action'=>'news', 'id'=> $id));  

                                 }
                                 else {

                                    //$form->setMessages(array('newsPicture'=>"Prawdopopodobnie plik nie spełnia wymagań ... Spróbuj jeszcze raz :)" ));
                                    return array(
                                        'id' => $id,
                                        'form' => $form,
                                        'news' => $news,
                                    );                        
                                }

                        }
                        else {
                            
                            $this->getNewsTable()->saveNews($news);
                            // Redirect to list of albums
                            return $this->redirect()->toRoute('admin', array('action'=>'news'));
                        }
                    }
                }
            }

            return array(
                'id' => $id,
                'form' => $form,
                'news' => $news,
            );
        }
    }
    
    
    public function editOfferAction() {
        //check
        if (! $this->getServiceLocator()->get('AuthService')->hasIdentity()){
            return $this->redirect()->toRoute('admin', array('action' => 'login'));
        }
        $id = (int) $this->params()->fromRoute('id', 0);
         
        if (!$id) {
            return $this->redirect()->toRoute('admin', array(
                'action' => 'offer'
            ));
        }

        try {
            //tutaj inne zpaytnako z joinem :)
            $offer = $this->getOfferTable()->getOffer($id);
            $allLocations = $this->getOfferTable()->fetchAllLocations();
                     
        }
        catch (\Exception $ex) {
            return $this->redirect()->toRoute('admin', array('action' => 'offer'));
        }       
        
        $form  = new OfferForm();
        $form->bind($offer);         
       
        $request = $this->getRequest();
        if ($request->isPost()) {
             
            //save
            $data = $request->getPost()->toArray();
            $offer->offerNumber = $data['offerNumber'];
        
            $this->getOfferTable()->saveOffer($offer);  
          
            //message
            $this->flashmessenger()->addMessage('Poprawnie zapisano.');
            //redirect
            return $this->redirect()->toRoute('admin', array('action'=>'editOffer', 'id'=> $id));
        }
       
        return array(
            'id'    => $id,        
            'offer' => $offer,
            'allLocations' => $allLocations,            
            'form'         => $form,
            'messages'     =>  $this->flashmessenger()->getMessages()  
        );
    }
    /**
     * @todo FIX walidatorów dla każdego uploadu :)
     * 
     * 
     */
    
    public function offerAction() 
    {
        //check
        if (! $this->getServiceLocator()->get('AuthService')->hasIdentity()){
            return $this->redirect()->toRoute('admin', array('action' => 'login'));
        }
        
        $id = (int) $this->params()->fromRoute('id', 0);
        
        if (!$id) {
            $paginator = $this->getOfferTable()->fetchAll(true);
            $paginator->setCurrentPageNumber((int) $this->params()->fromQuery('page', 1));
            $paginator->setItemCountPerPage(10);

            return new ViewModel(array(
            'paginator' => $paginator,
            'link'      => 'offer',
            'messages'  => $this->flashmessenger()->getMessages() 
            ));      
      
        }
        else {
            
            $id = (int) $this->params()->fromRoute('id', 0);
            if (!$id) {
                return $this->redirect()->toRoute('admin', array(
                    'action' => 'offer'
                ));
            }

            try {
                $offer = $this->getOfferTable()->getOffer($id);
            }
            catch (\Exception $ex) {
                return $this->redirect()->toRoute('admin', array('action' => 'offer'));
            }

            $form  = new OfferForm();
            $form->bind($offer);          

            $request = $this->getRequest();
            if ($request->isPost()) {
                
                   //usuwanie zdjecia
                if ($request->getPost('del-picture'))
                {
                     //usuwanie zalacznika
                    if($offer->offerImage != '') {
                         unlink ('./public/upload/offer/'.$offer->offerImage);
                    }
                    
                    $offer->offerImage = '';
                    $this->getOfferTable()->saveOffer($offer);
                    $this->flashmessenger()->addMessage('Zdjęcie zostało usunięte');
                    return $this->redirect()->toRoute('admin', array('action'=>'offer', 'id' => $id));
                }  
                
                //zapisywanie 
                if($request->getPost('submit')) {
                    
                    $form->setInputFilter($offer->getInputFilter());
                    $form->setData($request->getPost());
                    
                    if ($form->isValid()) {
                        
                        $nonFile = $request->getPost()->toArray(); 
                        $File = $request->getFiles()->toArray(); 
                        
                        if($File['offerImage']['name'] != '') {    
                            
                            //validators
                            $size = new Size(array('max'=>5242880));                            

                            $opis = $File['offerImage']['name'];  
                            $adapter = new \Zend\File\Transfer\Adapter\Http();
                            
                            //zmiana nazwy
                            $fileExt = pathinfo($opis, PATHINFO_EXTENSION);
                            $fileName = 'offer_'.date("H_i_d_m_y").'_s'.date("s").'.'.$fileExt;
                            $adapter->addFilter('Rename', './public/upload/offer/'.$fileName, $File['offerImage']['name']);

                            //maybe fix
                            $adapter->setValidators(array($size), $File['offerImage']['size']);
                            
                            if($fileExt=='jpg' || $fileExt=='png' || $fileExt=='PNG' || $fileExt=='JPG') {

                                    $adapter->setDestination('./public/upload/offer');   

                                    if($adapter->receive($File['offerImage']['name'])) {                            

                                           $data = array_merge($nonFile, array('offerImage' => $fileName));
                                           
                                           //save
                                           $offer->exchangeArray($data);  
                                           $this->getOfferTable()->saveOffer($offer);   
                                    }

                                 return $this->redirect()->toRoute('admin', array('action'=>'offer', 'id'=> $id));  

                            }
                            else {
                                  
                                return array(
                                    'id' => $id,
                                    'form' => $form,
                                    'offer' => $offer,
                                );                        
                            }                   
                        }
                        
                        else {
                            
                            $this->getOfferTable()->saveOffer($offer);
                            $this->flashmessenger()->addMessage('Poprawnie zapisano.');
                            // Redirect to list of albums
                            return $this->redirect()->toRoute('admin', array('action'=>'offer', 'id'=> $id));
                        }
                    }                
                }    
            }

            return array(
                'id' => $id,
                'form' => $form,
                'offer' => $offer,
                'messages' =>  $this->flashmessenger()->getMessages()  
            );
            
        }
    }
    
    public function personelAction() 
    {
        //check
        if (! $this->getServiceLocator()->get('AuthService')->hasIdentity()){
            return $this->redirect()->toRoute('admin', array('action' => 'login'));
        }
        
        $id = (int) $this->params()->fromRoute('id', 0);
        
        if (!$id) {
            $paginator = $this->getPersonelTable()->fetchAll(true);
            $paginator->setCurrentPageNumber((int) $this->params()->fromQuery('page', 1));
            $paginator->setItemCountPerPage(10);

            return new ViewModel(array(
            'paginator' => $paginator,
            'link'      => 'personel',
            ));      
      
        }
        else {
            try {
                $personel = $this->getPersonelTable()->getPersonel($id);
            }
            catch (\Exception $ex) {
                return $this->redirect()->toRoute('admin', array(
                    'action' => 'personel'
                ));
            }

            return new ViewModel(array(
                'personel' => $personel,
                ));
        
        }
    }
    
    public function candidatesAction() 
    {
        //check
        if (! $this->getServiceLocator()->get('AuthService')->hasIdentity()){
            return $this->redirect()->toRoute('admin', array('action' => 'login'));
        }
        
        $id = (int) $this->params()->fromRoute('id', 0);
        
        if (!$id) {
            $paginator = $this->getCandidatesTable()->fetchAll(true);
            $paginator->setCurrentPageNumber((int) $this->params()->fromQuery('page', 1));
            $paginator->setItemCountPerPage(10);

            return new ViewModel(array(
            'paginator' => $paginator,
            'link'      => 'candidates',
            ));      
      
        }
        else {
            try {
                $candidates = $this->getCandidatesTable()->getCandidates($id);
            }
            catch (\Exception $ex) {
                return $this->redirect()->toRoute('admin', array(
                    'action' => 'candidates'
                ));
            }

            return new ViewModel(array(
                'candidates' => $candidates,
                ));
        
        }
    }
    
    public function careAction()
    {
        //check
        if (! $this->getServiceLocator()->get('AuthService')->hasIdentity()){
            return $this->redirect()->toRoute('admin', array('action' => 'login'));
        }
        
        $id = (int) $this->params()->fromRoute('id', 0);
        
        if (!$id) {
            $paginator = $this->getCareTable()->fetchAll(true);
            $paginator->setCurrentPageNumber((int) $this->params()->fromQuery('page', 1));
            $paginator->setItemCountPerPage(10);

            return new ViewModel(array(
            'paginator' => $paginator,
            'link'      => 'care',
            ));      
      
        }
        else {
            try {
                $care = $this->getCareTable()->getCare($id);
            }
            catch (\Exception $ex) {
                return $this->redirect()->toRoute('admin', array(
                    'action' => 'care'
                ));
            }

            return new ViewModel(array(
                'care' => $care,
                ));
        
        }
        
    }
    
    /*
     * problem z walidacją i fajnie jkaby oddzielic logike walidacji do modelu ..
     */
    //dodawanie newsow
    public function addNewsAction()
    {
        //check
        if (! $this->getServiceLocator()->get('AuthService')->hasIdentity()){
            return $this->redirect()->toRoute('admin', array('action' => 'login'));
        }
        
        $form = new NewsForm();
        $request = $this->getRequest();
        
        if ($request->isPost()) {
            
            $news = new News();
     
            $form->setInputFilter($news->getInputFilter());
            $form->setData($request->getPost());                         
                     
            if ($form->isValid()) {                
                   
                    $nonFile = $request->getPost()->toArray(); 
                    $File = $request->getFiles()->toArray();   
                    
                    if($File['newsPicture']['name'] != '') {    
                             
                             //validators
                             $size = new Size(array('max'=>5242880));
                             //$extension = new Extension(array('jpg','png'), true);

                             $opis = $File['newsPicture']['name'];  
                             $adapter = new \Zend\File\Transfer\Adapter\Http();
                            //zmiana nazwy
                             $fileExt = pathinfo($opis, PATHINFO_EXTENSION);
                             $fileName = 'news_'.date("H_i_d_m_y").'_s'.date("s").'.'.$fileExt;
                             $adapter->addFilter('Rename', './public/upload/news/'.$fileName, $File['newsPicture']['name']);

                               //maybe fix
                             $adapter->setValidators(array($size), $File['newsPicture']['size']);
                             //$adapter->setValidators(array($extension), $fileExt);
                             
                            if($fileExt=='jpg' || $fileExt=='png' || $fileExt=='PNG' || $fileExt=='JPG') {
                                 
                                $adapter->setDestination('./public/upload/news');   

                                if($adapter->receive($File['newsPicture']['name'])) {                            

                                       $data = array_merge($nonFile, array('newsPicture' => $fileName));

                                       $news->exchangeArray($data);  
                                       $this->getNewsTable()->saveNews($news);   
                                }
                                
                             return $this->redirect()->toRoute('admin', array('action'=>'news'));  
                               
                             }
                             else {
                                 
                                //$form->setMessages(array('newsPicture'=>"Prawdopopodobnie plik nie spełnia wymagań ... Spróbuj jeszcze raz :)" ));
                                return array('form' => $form);                          
                            }
                            
                    }
                    
                    else {
                        
                        $news->exchangeArray($form->getData());
                        $this->getNewsTable()->saveNews($news);
                        
                        
                        return $this->redirect()->toRoute('admin', array('action'=>'news'));                
                    }
            }
        }
        return array('form' => $form);
              
    }
    
    //dodawanie ofert
    public function addOfferAction()
    {
        //check
        if (! $this->getServiceLocator()->get('AuthService')->hasIdentity()){
            return $this->redirect()->toRoute('admin', array('action' => 'login'));
        }
        $form = new OfferForm();
     //   $form->get('submit')->setValue('Add');

        $request = $this->getRequest();
        
        if ($request->isPost()) {
            
            $offer = new Offer();
     
            $form->setInputFilter($offer->getInputFilter());
            $form->setData($request->getPost());
     
            
            if ($form->isValid()) {
                
                $offer->exchangeArray($form->getData());
                $this->getOfferTable()->saveOffer($offer);
                $this->flashmessenger()->addMessage("Firma została zapisana.");
                // Redirect to list of albums
                return $this->redirect()->toRoute('admin', array('action'=>'offer'));
            }
        }
        return array('form' => $form);
    }
    
    
    //    <----------------- Ajax ---------------------->
    //wysyłanie i dodawnie wiadmości z formularza konatktowego :)
    public function addAction() 
    {
        $response = $this->getResponse();
        $response->setStatusCode(200);
        
        $request = $this->getRequest();  

            if ($request->isPost()) {          

                $contact = new Contact();              
                $contact->exchangeArray($request->getPost());                
                $this->getContactTable()->saveContact($contact);               
                
                              
                $response->setContent("true"); 
                // sending e-mails
                
                $mail = new Mailer();
                $mail->sendContactMail($request->getPost());    
                
            }        
           
        return $response;  
        
    }
    //Ajax
    public function addCareAction() 
    {
       
         
        $response = $this->getResponse();
        $response->setStatusCode(200);
        
        $request = $this->getRequest();  

            if ($request->isPost()) {          

                $care = new Care();  
                                
                $care->exchangeArray($request->getPost());                
                $this->getCareTable()->saveCare($care);               
                
                              
                $response->setContent("true");
                // sending e-mails
                
                $mail = new Mailer();
                $mail->sendCareMail($request->getPost());    
                
            }        
           
        return $response;  
        
    }
    //Ajax
    public function addNotificationAction() 
    {       
         
        $response = $this->getResponse();
        $response->setStatusCode(200);
        
        $request = $this->getRequest();  

            if ($request->isPost()) {          

                $notification = new Notification();  
                                
                $notification->exchangeArray($request->getPost());                
                $this->getNotificationTable()->saveNotification($notification);               
                
                              
                $response->setContent("true");
                // sending e-mails
               
                $mail = new Mailer();
                $mail->sendNotificationMail($request->getPost());    
               
                
            }        
           
        return $response;  
        
    }
    //Ajax
    public function addClientAction() 
    {
         
        $response = $this->getResponse();
        $response->setStatusCode(200);
        
        $request = $this->getRequest();  
        
      
            if ($request->isPost()) {        
             
                //new client model
                $client = new Client();                
               
                $nonFile = $request->getPost()->toArray(); 
                $File = $request->getFiles()->toArray();            
                
                //check if file is posted
                if($File['clientAttach']['name'] != '') {                    
                
                    $opis = $File['clientAttach']['name'];        
         
                    //validators
                    $size = new Size(array('max'=>5242880));
                    $extension = new Extension('txt,doc,docx,pdf,jpg,png,zip');

                    $adapter = new \Zend\File\Transfer\Adapter\Http();
                    //zmiana nazwy
                     $fileExt = pathinfo($opis, PATHINFO_EXTENSION);
               //   @  $fileExt = end(explode('.', $opis));
                    $fileName = 'client_'.date("H_i_d_m_y").'_s'.date("s").'.'.$fileExt;
                    
                    $adapter->addFilter('Rename', './public/upload/client/'.$fileName, $File['clientAttach']['name']);
                    
                    //maybe fix
                    $adapter->setValidators(array($size), $File['clientAttach']['size']);
                    $adapter->setValidators(array($extension), $File['clientAttach']);

                   if(!$adapter->isValid()) {

                        $response->setContent("Prawdopopodobnie plik nie spełnia wymagań ... Spróbuj jeszcze raz :)");

                    }
                    else {
                        
                        //if ok directory to upload
                       $adapter->setDestination('./public/upload/client');      
                    
                        
                        if($adapter->receive($File['clientAttach']['name'])) {
                            
                            //$adapter->setFilters(array('name' => 'BlockCipher'));
                          //  $adapter->addFilter($filter);
                            $data = array_merge($nonFile, array('clientAttach' => $fileName));
                            $client->exchangeArray($data);  
                            $this->getClientTable()->saveClient($client);   
                            $response->setContent("true");
                            
                            // sending e-mails
                            $data['fileType'] = $File['clientAttach']['type'];
                            $mail = new Mailer();
                            $mail->sendClientMail($data);    
                        }
                    }

                }
                
                else {
                    
                     $data = array_merge($nonFile, array('clientAttach' => ' '));
                    
                     $client->exchangeArray($data);                    
                     $this->getClientTable()->saveClient($client);  
                     
                     $response->setContent("true");
                    
                     
                     // sending e-mails
                     $mail = new Mailer();
                     $mail->sendClientMail($data);  
                     
                }
              
            }        
           
        return $response;  
        
    }
    //Ajax
    public function addPersonelAction() 
    {
         
        $response = $this->getResponse();
        $response->setStatusCode(200);
        
        $request = $this->getRequest();  
        
      
            if ($request->isPost()) {        
             
                //new personel model
                $personel = new Personel();                
               
                $nonFile = $request->getPost()->toArray(); 
                $File = $request->getFiles()->toArray();            
                
                //check if file is posted
                if($File['personelAttach']['name'] != '') {                    
                
                    $opis = $File['personelAttach']['name'];        
         
                    //validators
                    $size = new Size(array('max'=>5242880));
                    $extension = new Extension('txt,doc,docx,pdf,jpg,png,zip');

                    $adapter = new \Zend\File\Transfer\Adapter\Http();
                    //zmiana nazwy
                       
                    //maybe fix
                    $adapter->setValidators(array($size), $File['personelAttach']['size']);
                    $adapter->setValidators(array($extension), $File['personelAttach']);

                   if(!$adapter->isValid()) {

                        $response->setContent("Prawdopopodobnie plik nie spełnia wymagań ... Spróbuj jeszcze raz :)");

                    }
                    else {
                        
                        $fileExt = pathinfo($opis, PATHINFO_EXTENSION);               
                        $fileName = 'personel_'.date("H_i_d_m_y").'_s'.date("s").'.'.$fileExt;

                        $adapter->addFilter('Rename', './public/upload/personel/'.$fileName, $File['personelAttach']['name']);

                        
                        //if ok directory to upload
                       $adapter->setDestination('./public/upload/personel');      
                    
                        
                        if($adapter->receive($File['personelAttach']['name'])) {
                            
                            //$adapter->setFilters(array('name' => 'BlockCipher'));
                          //  $adapter->addFilter($filter);
                            $data = array_merge($nonFile, array('personelAttach' => $fileName));
                            $personel->exchangeArray($data);  
                            $this->getPersonelTable()->savePersonel($personel);   
                            $response->setContent("true");
                            
                            // sending e-mails
                            $data['fileType'] = $File['personelAttach']['type'];
                            $mail = new Mailer();
                            $mail->sendPersonelMail($data);    
                        }
                    }

                }
                
                else {
                    
                     $data = array_merge($nonFile, array('personelAttach' => ' '));
                    
                     $personel->exchangeArray($data);                    
                     $this->getPersonelTable()->savePersonel($personel);  
                     
                     $response->setContent("true");
                    
                     
                     // sending e-mails
                     $mail = new Mailer();
                     $mail->sendPersonelMail($data);  
                     
                }
              
            }        
           
        return $response;  
        
    }
    //Ajax
    public function addCandidatesAction() 
    {
         
        $response = $this->getResponse();
        $response->setStatusCode(200);
        
        $request = $this->getRequest();  
        
     
            if ($request->isPost()) {        
             
                //new candidates model
                $candidates = new Candidates();                
               
                $nonFile = $request->getPost()->toArray(); 
                $File = $request->getFiles()->toArray();            
                
                //check if file is posted
                if($File['candidatesAttach']['name'] != '') {                    
                
                    $opis = $File['candidatesAttach']['name'];        
         
                    //validators
                    $size = new Size(array('max'=>5242880));
                    $extension = new Extension('txt,doc,docx,pdf,jpg,png,zip');

                    $adapter = new \Zend\File\Transfer\Adapter\Http();
                    //zmiana nazwy
                       
                    //maybe fix
                    $adapter->setValidators(array($size), $File['candidatesAttach']['size']);
                    $adapter->setValidators(array($extension), $File['candidatesAttach']);

                   if(!$adapter->isValid()) {

                        $response->setContent("Prawdopopodobnie plik nie spełnia wymagań ... Spróbuj jeszcze raz :)");
                        return false;
                    }
                    else {
                        
                        $fileExt = pathinfo($opis, PATHINFO_EXTENSION);               
                        $fileName = 'candidates_'.date("H_i_d_m_y").'_s'.date("s").'.'.$fileExt;

                        $adapter->addFilter('Rename', './public/upload/candidates/'.$fileName, $File['candidatesAttach']['name']);

                        
                        //if ok directory to upload
                       $adapter->setDestination('./public/upload/candidates');      
                    
                        
                        if($adapter->receive($File['candidatesAttach']['name'])) {
                            
                            //$adapter->setFilters(array('name' => 'BlockCipher'));
                          //  $adapter->addFilter($filter);
                            $data = array_merge($nonFile, array('candidatesAttach' => $fileName));
                            $candidates->exchangeArray($data);  
                            $this->getCandidatesTable()->saveCandidates($candidates);   
                            $response->setContent("true");
                            
                            // sending e-mails
                            $data['fileType'] = $File['candidatesAttach']['type'];
                            $mail = new Mailer();
                            $mail->sendCandidatesMail($data);    
                        }
                    }

                }
                
                else {
                    
                     $data = array_merge($nonFile, array('candidatesAttach' => ' '));
                    
                     $candidates->exchangeArray($data);                    
                     $this->getCandidatesTable()->saveCandidates($candidates);  
                     
                     $response->setContent("true");
                    
                     
                     // sending e-mails
                     $mail = new Mailer();
                     $mail->sendCandidatesMail($data);  
                     
                }
              
            }        
           
        return $response;  
        
    }
    
    
    //akcje do usuwania
    public function delContactAction()
    {
        //check
        if (! $this->getServiceLocator()->get('AuthService')->hasIdentity()){
            return $this->redirect()->toRoute('admin', array('action' => 'login'));
        }
        
        $id = (int) $this->params()->fromRoute('id', 0);
        
        if (!$id) {
            return $this->redirect()->toRoute('admin', array('action' => 'contact'));
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'Powrót');
            
            if ($del == 'Usuń') {
                $id = (int) $request->getPost('id');
                $this->getContactTable()->deleteContact($id);
            }

            // Redirect to list of albums
            return $this->redirect()->toRoute('admin', array(
                'action' => 'contact'
            ));
        }

        return array(
            'id'    => $id,
            'contact' => $this->getContactTable()->getContact($id)
        );
        
    }
     //akcje do usuwania
    public function delNotificationAction()
    {
        //check
        if (! $this->getServiceLocator()->get('AuthService')->hasIdentity()){
            return $this->redirect()->toRoute('admin', array('action' => 'login'));
        }
        
        $id = (int) $this->params()->fromRoute('id', 0);
        
        if (!$id) {
            return $this->redirect()->toRoute('admin', array('action' => 'notification'));
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'Powrót');
            
            if ($del == 'Usuń') {
                $id = (int) $request->getPost('id');
                $this->getNotificationTable()->deleteNotification($id);
            }

            // Redirect to list of albums
            return $this->redirect()->toRoute('admin', array(
                'action' => 'notification'
            ));
        }

        return array(
            'id'    => $id,
            'notification' => $this->getNotificationTable()->getNotification($id)
        );
        
    }
    
    public function delClientAction()
    {
        //check
        if (! $this->getServiceLocator()->get('AuthService')->hasIdentity()){
            return $this->redirect()->toRoute('admin', array('action' => 'login'));
        }
        
        $id = (int) $this->params()->fromRoute('id', 0);
        
        if (!$id) {
            return $this->redirect()->toRoute('admin', array('action' => 'client'));
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'Powrót');
            
            if ($del == 'Usuń') {
                $id = (int) $request->getPost('id');
                
                
            try {
                $client = $this->getClientTable()->getClient($id);
            
                //usuwanie zalacznika
                if($client->clientAttach != '') {
                    unlink ('./public/upload/client/'.$client->clientAttach);
                }
         
              }
              catch (\Exception $ex) {             } 
              
                //usuwanie rekordu
                $this->getClientTable()->deleteClient($id);
                
               
            }

            // Redirect to list of albums
            return $this->redirect()->toRoute('admin', array(
                'action' => 'client'
            ));
        }

        return array(
            'id'    => $id,
            'client' => $this->getClientTable()->getClient($id)
        );
        
    }
    
    public function delCareAction()
    {
        //check
        if (! $this->getServiceLocator()->get('AuthService')->hasIdentity()){
            return $this->redirect()->toRoute('admin', array('action' => 'login'));
        }
        
        $id = (int) $this->params()->fromRoute('id', 0);
        
        if (!$id) {
            return $this->redirect()->toRoute('admin', array('action' => 'care'));
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'Powrót');
            
            if ($del == 'Usuń') {
                $id = (int) $request->getPost('id');
                $this->getCareTable()->deleteCare($id);
            }

            // Redirect to list of albums
            return $this->redirect()->toRoute('admin', array(
                'action' => 'care'
            ));
        }

        return array(
            'id'    => $id,
            'care' => $this->getCareTable()->getCare($id)
        );
        
    }
    
    public function delCandidatesAction()
    {
        //check
        if (! $this->getServiceLocator()->get('AuthService')->hasIdentity()){
            return $this->redirect()->toRoute('admin', array('action' => 'login'));
        }
        $id = (int) $this->params()->fromRoute('id', 0);
        
        if (!$id) {
            return $this->redirect()->toRoute('admin', array('action' => 'candidates'));
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'Powrót');
            
            if ($del == 'Usuń') {
                $id = (int) $request->getPost('id');
                
                
            try {
                $candidates = $this->getCandidatesTable()->getCandidates($id);
            
                //usuwanie zalacznika
                if($candidates->candidatesAttach != '') {
                    unlink ('./public/upload/candidates/'.$candidates->candidatesAttach);
                }
         
              }
              catch (\Exception $ex) {             } 
              
                //usuwanie rekordu
                $this->getCandidatesTable()->deleteCandidates($id);
                
               
            }

            // Redirect to list of albums
            return $this->redirect()->toRoute('admin', array(
                'action' => 'candidates'
            ));
        }

        return array(
            'id'    => $id,
            'candidates' => $this->getCandidatesTable()->getCandidates($id)
        );
        
    }
    
    public function delPersonelAction()
    {
        //check
        if (! $this->getServiceLocator()->get('AuthService')->hasIdentity()){
            return $this->redirect()->toRoute('admin', array('action' => 'login'));
        }
        $id = (int) $this->params()->fromRoute('id', 0);
        
        if (!$id) {
            return $this->redirect()->toRoute('admin', array('action' => 'personel'));
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'Powrót');
            
            if ($del == 'Usuń') {
                $id = (int) $request->getPost('id');
                
                
            try {
                $personel = $this->getPersonelTable()->getPersonel($id);
            
                //usuwanie zalacznika
                if($personel->personelAttach != '') {
                    unlink ('./public/upload/personel/'.$personel->personelAttach);
                }
         
              }
              catch (\Exception $ex) {             } 
              
                //usuwanie rekordu
                $this->getPersonelTable()->deletePersonel($id);
                
               
            }

            // Redirect to list of albums
            return $this->redirect()->toRoute('admin', array(
                'action' => 'personel'
            ));
        }

        return array(
            'id'    => $id,
            'personel' => $this->getPersonelTable()->getPersonel($id)
        );
        
    }
    
     
    public function delNewsAction()
    {
        //check
        if (! $this->getServiceLocator()->get('AuthService')->hasIdentity()){
            return $this->redirect()->toRoute('admin', array('action' => 'login'));
        }
        
        $id = (int) $this->params()->fromRoute('id', 0);
        
        if (!$id) {
            return $this->redirect()->toRoute('admin', array('action' => 'news'));
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'Powrót');
            
            if ($del == 'Usuń') {
                $id = (int) $request->getPost('id');
                
                
            try {
                $news = $this->getNewsTable()->getNews($id);
            
                //usuwanie zalacznika
                if($news->newsPicture != '') {
                    unlink ('./public/upload/news/'.$news->newsPicture);
                }
         
              }
              catch (\Exception $ex) {             } 
              
                //usuwanie rekordu
                $this->getNewsTable()->deleteNews($id);
                
               
            }

            // Redirect to list of albums
            return $this->redirect()->toRoute('admin', array(
                'action' => 'news'
            ));
        }

        return array(
            'id'    => $id,
            'news' => $this->getNewsTable()->getNews($id)
        );
        
    }
    
    public function delOfferAction()
    {   
        
//        // Get the "layout" view model and set an alternate template
//        $layout = $this->layout();
//        $layout->setTemplate('article/layout');

//        // Create and return a view model for the retrieved article
//        $view = new ViewModel(array('article' => $article));
//        $view->setTemplate('content/article');
//        return $view;
        
        
        //check
        if (! $this->getServiceLocator()->get('AuthService')->hasIdentity()){
            return $this->redirect()->toRoute('admin', array('action' => 'login'));
        }
        
        $id = (int) $this->params()->fromRoute('id', 0);
        
        if (!$id) {
            return $this->redirect()->toRoute('admin', array('action' => 'offer'));
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'Powrót');
            
            if ($del == 'Usuń') {
                $id = (int) $request->getPost('id');
                
                
                try {
                    $offer = $this->getOfferTable()->getOffer($id);

                    //usuwanie zalacznika
                    if($offer->offerImage != '') {
                        unlink ('./public/upload/offer/'.$offer->offerImage);
                    }
         
                }
                catch (\Exception $ex) {             } 
                          
                //usuwanie rekordu
                $this->getOfferTable()->deleteOffer($id);
                
               
            }

            // Redirect and message
            $this->flashmessenger()->addMessage('Firma została usunięta');
            return $this->redirect()->toRoute('admin', array(
                'action' => 'offer',              
            ));
        }
        //content
        $viewContent = $this->getOfferTable()->getOffer($id);

        $view = new ViewModel(array('id'=> $id,
                                    'viewContentId'  => $viewContent->offerId,
                                    'action' => 'delOffer',
                                    'back'   => 'offer',
                                    'icon'   => 'users',
                                    'title'  => $viewContent->offerTitle,
                                    'name'   => 'Firmy'
        ));
        $view->setTemplate('partial/delete');
        return $view;
        
    }
    
    
    
    
    public function getContactTable()
    {
        if (!$this->contactTable) {
            $sm = $this->getServiceLocator();
            $this->contactTable = $sm->get('Admin\Model\ContactTable');
        }
        return $this->contactTable;
    }
    
    public function getCareTable()
    {
        if (!$this->careTable) {
            $sm = $this->getServiceLocator();
            $this->careTable = $sm->get('Admin\Model\CareTable');
        }
        return $this->careTable;
    }
    
    public function getClientTable()
    {
        if (!$this->clientTable) {
            $sm = $this->getServiceLocator();
            $this->clientTable = $sm->get('Admin\Model\ClientTable');
        }
        return $this->clientTable;
    }
    
    public function getNotificationTable()
    {
        if (!$this->notificationTable) {
            $sm = $this->getServiceLocator();
            $this->notificationTable = $sm->get('Admin\Model\NotificationTable');
        }
        return $this->notificationTable;
    }
    
    public function getPersonelTable()
    {
        if (!$this->personelTable) {
            $sm = $this->getServiceLocator();
            $this->personelTable = $sm->get('Admin\Model\PersonelTable');
        }
        return $this->personelTable;
    }
    
    public function getNewsTable()
    {
        if (!$this->newsTable) {
            $sm = $this->getServiceLocator();
            $this->newsTable = $sm->get('Admin\Model\NewsTable');
        }
        return $this->newsTable;
    }
    
    public function getCandidatesTable()
    {
        if (!$this->candidatesTable) {
            $sm = $this->getServiceLocator();
            $this->candidatesTable = $sm->get('Admin\Model\CandidatesTable');
        }
        return $this->candidatesTable;
    }
    
    public function getOfferTable()
    {
        if (!$this->offerTable) {
            $sm = $this->getServiceLocator();
            $this->offerTable = $sm->get('Admin\Model\OfferTable');
        }
        return $this->offerTable;
    }
    
    public function getInfoTable()
    {
        if (!$this->infoTable) {
            $sm = $this->getServiceLocator();
            $this->infoTable = $sm->get('Admin\Model\InfoTable');
        }
        return $this->infoTable;
    }
    
    public function serviceMailAction() {
               
        $request = $this->getRequest();  

        if ($request->isPost()) {          
            //przydałaby się walidacja
            //pustych maili nie przyjmuje ;)
            if($request->getPost('emailTitle') != '' && $request->getPost('emailDesc') != '') {
                try {
                    // sending e-mails
                    $mail = new Mailer();
                    $mail->sendServiceMail($request->getPost());                   
                    //custom message switcher                                
                    $this->flashmessenger()->addMessage('Wiadomość została wysłana');
                }
                catch(\Exception $e) {
                    $this->flashmessenger()->addMessage('Niestety wystapił błąd podczas wysyłania - spróbuj jeszcze raz.');
                }
             
                return $this->redirect()->toRoute('admin', array('action' => 'settings'));         
            }
            else {
                return $this->redirect()->toRoute('admin');
            }              
        }        
        
        return $this->redirect()->toRoute('admin'); 
    }   
}


