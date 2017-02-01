<?php
namespace application\dto;

class About_Us_Page_VO {
    public $id;
    public $moduleName;
    public $moduleDescription;
    public $aboutUsDescription1;
    public $aboutUsDescription2;
    public $aboutUsDescription3;
    public $principles;

    public function __construct(){
        $this->id = "";
        $this->moduleName = "";
        $this->moduleDescription = "";
        $this->aboutUsDescription1 = "";
        $this->aboutUsDescription2 = "";
        $this->aboutUsDescription3 = "";
        $this->principles = array();
    }

    public function __toString(){
        return ".$this->id.\n\n.$this->moduleName.\n\n.$this->aboutUsDescription1.";
    }
}