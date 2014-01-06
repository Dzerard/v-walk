<?php
namespace Admin\Model;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class Offer implements InputFilterAwareInterface
{
    public $offerId;
    public $offerTitle;    
    public $offerDesc;
    public $offerRequire;
    public $offerExtraInfo;
    public $offerType;
    public $offerCountry;
    public $offerCity;
    public $offerCompany;
    public $offerNumber;	
    public $offerCategory;
    public $offerWebPage;
    public $offerEmail;
    public $offerPhone;
    public $offerImage;
    public $offerInsert;
    
    protected $inputFilter;


    public function exchangeArray($data)
    {
        
        $this->offerId         = (!empty($data['offerId'])) ? $data['offerId'] : null;
        $this->offerTitle      = (!empty($data['offerTitle'])) ? $data['offerTitle'] : null;
        $this->offerDesc       = (!empty($data['offerDesc'])) ? $data['offerDesc'] : null;
        $this->offerRequire    = (!empty($data['offerRequire'])) ? $data['offerRequire'] : null;
        $this->offerExtraInfo  = (!empty($data['offerExtraInfo'])) ? $data['offerExtraInfo'] : null;
        $this->offerType       = (!empty($data['offerType'])) ? $data['offerType'] : null;
        $this->offerCountry    = (!empty($data['offerCountry'])) ? $data['offerCountry'] : null;              
        $this->offerCity       = (!empty($data['offerCity'])) ? $data['offerCity'] : null;
        $this->offerCompany    = (!empty($data['offerCompany'])) ? $data['offerCompany'] : null;
        $this->offerNumber     = (!empty($data['offerNumber'])) ? $data['offerNumber'] : null;
        $this->offerCategory   = (!empty($data['offerCategory'])) ? $data['offerCategory'] : null;
        $this->offerWebPage    = (!empty($data['offerWebPage'])) ? $data['offerWebPage'] : null;
        $this->offerEmail      = (!empty($data['offerEmail'])) ? $data['offerEmail'] : null;
        $this->offerPhone      = (!empty($data['offerPhone'])) ? $data['offerPhone'] : null;
        $this->offerImage      = (!empty($data['offerImage'])) ? $data['offerImage'] : null;
        $this->offerInsert     = (!empty($data['offerInsert'])) ? $data['offerInsert'] : null;

    }
    
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }
    
    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new \Exception("Not used");
    }
/**
 * 
 * @todo 
 * reszta walidacji
 */
    public function getInputFilter()
    {
        if (!$this->inputFilter) {
            $inputFilter = new InputFilter();

            $inputFilter->add(array(
                'name'     => 'offerId',
                'required' => true,
                'filters'  => array(
                    array('name' => 'Int'),
                ),
            ));

            $inputFilter->add(array(
                'name'     => 'offerTitle',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 5,
                           
                        ),
                    ),
                ),
            ));
            
            $inputFilter->add(array(
                'name'     => 'offerDesc',   
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 5,
                           
                        ),
                    ),
                ),
            ));

            $inputFilter->add(array(
                'name'     => 'offerRequire',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                            
                        ),
                    ),
                ),
            ));
            
            $inputFilter->add(array(
                'name'     => 'offerExtraInfo',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                            
                        ),
                    ),
                ),
            ));
            
            $inputFilter->add(array(
                'name'     => 'offerType',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                           
                        ),
                    ),
                ),
            ));
            
            $inputFilter->add(array(
                'name'     => 'offerCity',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                           
                        ),
                    ),
                ),
            ));
            
            $inputFilter->add(array(
                'name'     => 'offerCompany',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                            
                        ),
                    ),
                ),
            ));
            
            $inputFilter->add(array(
                'name'     => 'offerNumber',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                           
                        ),
                    ),
                ),
            ));
            
            $inputFilter->add(array(
                'name'     => 'offerCategory',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                            
                        ),
                    ),
                ),
            ));
            
            $inputFilter->add(array(
                'name'     => 'offerWebPage',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                           
                        ),
                    ),
                ),
            ));
            
            $inputFilter->add(array(
                'name'     => 'offerEmail',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'EmailAddress',
                        'options' => array(
                            'encoding' => 'UTF-8', 
                            'min'      => 5, 
                            'max'      => 255, 
                            'messages' => array( 
                                \Zend\Validator\EmailAddress::INVALID_FORMAT => 'Email jest niepoprawny' 
                            ) 
                        ),
                    ),
                ),
            ));
            
            $inputFilter->add(array(
                'name'     => 'offerPhone',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                            'max'      => 100,
                        ),
                    ),
                ),
            ));
          
//            
//            dodac walidacje pliku
//            $inputFilter->add(array(
//                'name'     => 'offerImage',
//                'required' => false,
//               
//            ));

            $this->inputFilter = $inputFilter;
        }

        return $this->inputFilter;
        
    }
}