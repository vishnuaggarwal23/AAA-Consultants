<?php

class Services_Model extends \core\Base_Model{

    private $serviceHeader;
    private $serviceDescription;

    public function __construct(){
        log_message('info','Services_Model constructor called');
        parent::__construct();
    }

    public function __destruct(){
        log_message('info','Services_Model destructor called');
        parent::__destruct();
    }

    public function __toString()
    {
        $parentToString = parent::__toString();
        return "
            .$parentToString.\n
            serviceHeader = .$this->serviceHeader.\n
            serviceDescription = .$this->serviceDescription.\n
        ";
    }

    /**
     * @param mixed $serviceDescription
     */
    public function setServiceDescription($serviceDescription)
    {
        $this->serviceDescription = $serviceDescription;
    }

    /**
     * @return mixed
     */
    public function getServiceDescription()
    {
        return $this->serviceDescription;
    }

    /**
     * @param mixed $serviceHeader
     */
    public function setServiceHeader($serviceHeader)
    {
        $this->serviceHeader = $serviceHeader;
    }

    /**
     * @return mixed
     */
    public function getServiceHeader()
    {
        return $this->serviceHeader;
    }
}