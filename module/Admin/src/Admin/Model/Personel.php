<?php
namespace Admin\Model;

use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class Personel 
{
    public $personelId;
    public $personelName;    
    public $personelPhone;
    public $personelEmail;
    public $personelAttach;
    public $personelMessage;
    public $personelInsert;
    
    protected $inputFilter;

   
    public function exchangeArray($data)
    {
        
        $this->personelId         = (!empty($data['personelId'])) ? $data['personelId'] : null;
        $this->personelName       = (!empty($data['personelName'])) ? $data['personelName'] : null;
        $this->personelPhone      = (!empty($data['personelPhone'])) ? $data['personelPhone'] : null;
        $this->personelEmail      = (!empty($data['personelEmail'])) ? $data['personelEmail'] : null;        
        $this->personelAttach     = (!empty($data['personelAttach'])) ? $data['personelAttach'] : null;
        $this->personelMessage    = (!empty($data['personelMessage'])) ? $data['personelMessage'] : null;      
        $this->personelInsert     = (!empty($data['personelInsert'])) ? $data['personelInsert'] : null;              

    }
  
}