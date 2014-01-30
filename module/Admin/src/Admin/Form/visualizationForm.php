<?php

namespace Admin\Form;

use Zend\Form\Form;

/**
 * Description of visualizationForm
 *
 * @author Łukasz
 */
class visualizationForm extends Form
{
    public function __construct($name = null)
    {
       
        parent::__construct('admin');

        $this->add(array(
            'name' => 'visualizationId',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'visualizationElement',
            'type' => 'Text',
//            'options' => array(),          
//            'attributes' => array(
//                  'id'          => 'offerTitle',    
//                  'class'       => 'form-control',
//                  'placeholder' => 'wpisz treść ...',
//                ),
        ));
    }
}

?>
