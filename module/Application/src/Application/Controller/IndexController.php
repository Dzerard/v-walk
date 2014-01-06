<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;    
use Zend\Http\Header\SetCookie;
use Zend\Http\Header;

class IndexController extends AbstractActionController
{
    //przyda sie cachowanie
    
    protected $lastNews;
    protected $lastOffer;    
    protected $langs = array('pl','eng','deu');    
      
    //zmiana jezyka
    public function  langSwitch() {
        
        if(isset($_COOKIE['wincklerLang'])) {
            
            $langFile = $_COOKIE['wincklerLang'];
            $translator = $this->getServiceLocator()->get('translator');
            $translator->setLocale($langFile);
        }    
    }    
    
    //ustawianie cookies
    public function setCookies($value) {
        
        $cookie = new SetCookie('wincklerLang', $value, time() + 365 * 60 * 60 * 24); // now + 1 year
        $response = $this->getResponse()->getHeaders();
        $response->addHeader($cookie);
    }         
    //setting cookie
    public function languageFunction($lang) {
             
        if($lang) {      
            
            if(in_array($lang, $this->langs)) {
                 $this->setCookies($lang);
            }
            else {
                $this->setCookies('pl');
            }                        
           
            return $this->redirect()->toRoute('home');
        }        
        else {
            
            return $this->redirect()->toRoute('home');
        }       
    }
    
    public function indexAction()
    {
        //langSwithing
        //  $this->langSwitch();  now in Module (Application)     
        $request = $this->getRequest();        
        if($request->isPost()) {
           
            $this->languageFunction($request->getPost('buttonLang'));
        }

        return new ViewModel(array(
            'home'  => TRUE,
            'news'  => $this->getNewsTable()->fetchLimit(),
            'offer' => $this->getOfferTable()->fetchLimit(),
        ));
    }
    
    
    public function getNewsTable()
    {
        if (!$this->lastNews) {
            $sm = $this->getServiceLocator();
            $this->lastNews = $sm->get('Admin\Model\NewsTable');
        }
        return $this->lastNews;
    }
    
    public function getOfferTable()
    {
        if (!$this->lastOffer) {
            $sm = $this->getServiceLocator();
            $this->lastOffer = $sm->get('Admin\Model\OfferTable');
        }
        return $this->lastOffer;
    }
    
}
