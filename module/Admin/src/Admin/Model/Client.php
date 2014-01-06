<?php
namespace Admin\Model;

use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class Client 
{
    public $clientId;
    public $clientName;    
    public $clientPhone;
    public $clientEmail;
    public $clientAttach;
    public $clientMessage;
    public $clientInsert;
    
    protected $inputFilter;

   
    public function exchangeArray($data)
    {
        
        $this->clientId         = (!empty($data['clientId'])) ? $data['clientId'] : null;
        $this->clientName       = (!empty($data['clientName'])) ? $data['clientName'] : null;
        $this->clientPhone      = (!empty($data['clientPhone'])) ? $data['clientPhone'] : null;
        $this->clientEmail      = (!empty($data['clientEmail'])) ? $data['clientEmail'] : null;        
        $this->clientAttach     = (!empty($data['clientAttach'])) ? $data['clientAttach'] : null;
        $this->clientMessage    = (!empty($data['clientMessage'])) ? $data['clientMessage'] : null;      
        $this->clientInsert     = (!empty($data['clientInsert'])) ? $data['clientInsert'] : null;              

    }
    
//    public function setInputFilter(InputFilterInterface $inputFilter) {
//        throw new \Exception('Format pliku nieobsługiwany !');
//    }
    
    
//    public function getInputFilter() {
//        
//        if($this->inputFilter) {
//            $inputFilter = new InputFilter();
//            $factory = new InputFactory();
//            
//            $inputFilter->add(
//                    $factory->createInput(array(
//                        'name' => 'clientName',
//                        'required' => true,
//                        'filters' => array(
//                            array('name' => 'StripTags'),
//                            array('name' => 'StripTrim'),  
//                        ),
//                        'validators' => array(
//                            array(
//                                'name' => 'StringLength',
//                                'options' => array(
//                                    'encoding' => 'UTF-8',
//                                    'min' => 1,
//                                    'max' => 100,
//                                ),
//                            ),
//                        ),                        
//                    ))
//                 );
//                 $inputFilter->add(
//                         $factory->createInput(array(
//                             'name' => 'fileupload',
//                             'required' => true,
//                         )                                 
//                     )
//                 );   
//                 
//                 $this->inputFilter = $inputFilter;
//            
//        }
//        
//        return $this->inputFilter;
//    }
}