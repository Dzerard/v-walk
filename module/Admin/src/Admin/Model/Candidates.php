<?php
namespace Admin\Model;

use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class Candidates 
{
    public $candidatesId;
    public $candidatesName;    
    public $candidatesPhone;
    public $candidatesEmail;
    public $candidatesAttach;
    public $candidatesSubject;
    public $candidatesMessage;
    public $candidatesInsert;
    
    protected $inputFilter;

   
    public function exchangeArray($data)
    {
        
        $this->candidatesId         = (!empty($data['candidatesId'])) ? $data['candidatesId'] : null;
        $this->candidatesName       = (!empty($data['candidatesName'])) ? $data['candidatesName'] : null;
        $this->candidatesPhone      = (!empty($data['candidatesPhone'])) ? $data['candidatesPhone'] : null;
        $this->candidatesEmail      = (!empty($data['candidatesEmail'])) ? $data['candidatesEmail'] : null;        
        $this->candidatesAttach     = (!empty($data['candidatesAttach'])) ? $data['candidatesAttach'] : null;
        $this->candidatesSubject    = (!empty($data['candidatesSubject'])) ? $data['candidatesSubject'] : null;
        $this->candidatesMessage    = (!empty($data['candidatesMessage'])) ? $data['candidatesMessage'] : null;      
        $this->candidatesInsert     = (!empty($data['candidatesInsert'])) ? $data['candidatesInsert'] : null;              

    }
  
}