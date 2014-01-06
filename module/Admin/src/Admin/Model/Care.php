<?php
namespace Admin\Model;

class Care
{
    public $careId;
    public $careName;    
    public $careDate;
    public $careCellphone;
    public $carePhone;
    public $careEmail;
    public $careRegion;
    public $careCity;
    public $careExp;
    public $careSmoke;
    public $careDriving;
    public $careLanguage;
    public $careChange;
    public $careExtraPhone;
    public $careSex;
    public $careWhenStart;
    public $careInsert;

   
    public function exchangeArray($data)
    {
        
        $this->careId           = (!empty($data['careId'])) ? $data['careId'] : null;
        $this->careName         = (!empty($data['careName'])) ? $data['careName'] : null;
        $this->careDate         = (!empty($data['careDate'])) ? $data['careDate'] : null;
        $this->careCellphone    = (!empty($data['careCellphone'])) ? $data['careCellphone'] : null;
        $this->carePhone        = (!empty($data['carePhone'])) ? $data['carePhone'] : null;
        $this->careEmail        = (!empty($data['careEmail'])) ? $data['careEmail'] : null;
        $this->careRegion       = (!empty($data['careRegion'])) ? $data['careRegion'] : null;
        $this->careCity         = (!empty($data['careCity'])) ? $data['careCity'] : null;
        $this->careExp          = (!empty($data['careExp'])) ? $data['careExp'] : null;
        $this->careSmoke        = (!empty($data['careSmoke'])) ? $data['careSmoke'] : null;
        $this->careDriving      = (!empty($data['careDriving'])) ? $data['careDriving'] : null;
        $this->careLanguage     = (!empty($data['careLanguage'])) ? $data['careLanguage'] : null;
        $this->careChange       = (!empty($data['careChange'])) ? $data['careChange'] : null;
        $this->careExtraPhone	= (!empty($data['careExtraPhone'])) ? $data['careExtraPhone'] : null;
        $this->careSex          = (!empty($data['careSex'])) ? $data['careSex'] : null;
        $this->careWhenStart    = (!empty($data['careWhenStart'])) ? $data['careWhenStart'] : null;
        $this->careInsert       = (!empty($data['careInsert'])) ? $data['careInsert'] : null;              

    }
}