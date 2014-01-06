<?php

namespace Client\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Client\Model\Client;          // <-- Add this import
use Client\Form\ClientForm;       // <-- Add this import

class ClientController extends AbstractActionController
{
  //  protected $aboutTable;
    
    public function indexAction() 
    {
        return new ViewModel();
    }
    
    public function workAction()
    {
        return new ViewModel();        
    }
    
    public function orderAction()
    {
        return new ViewModel();
    }

    
}


