<?php

namespace Care\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Care\Model\Care;          // <-- Add this import
use Care\Form\CareForm;       // <-- Add this import

class CareController extends AbstractActionController
{
  //  protected $aboutTable;
    
    public function indexAction() 
    {
        return new ViewModel();
    }
    
    public function faqAction()
    {
        return new ViewModel();        
    }
    
    public function offerAction()
    {
        return new ViewModel();        
    }
    
    public function questionAction()
    {
        return new ViewModel();        
    }
    
    public function personelAction()
    {
        return new ViewModel();        
    }
   
    public function departureAction()
    {
        return new ViewModel();        
    }

    
}


