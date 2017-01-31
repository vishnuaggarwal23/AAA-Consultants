<?php

class About_Us_Model extends \core\Base_Model{

    private $aboutUsDescription1;
    private $aboutUsDescription2;
    private $aboutUsDescription3;
    private $principles;

    public function __construct(){
        log_message('info','About_Us_Model constructor called');
        parent::__construct();
    }

    public function __destruct(){
        log_message('info','About_Us_Model destructor called');
        parent::__destruct();
    }

    public function __toString()
    {
        $parentToString = parent::__toString();
        return "
            .$parentToString.\n
            aboutUsDescription1 = .$this->aboutUsDescription1.\n
            aboutUsDescription2 = .$this->aboutUsDescription2.\n
            aboutUsDescription3 = .$this->aboutUsDescription3.\n
            principles = .$this->principles.\n
        ";
    }

    /**
     * @param mixed $aboutUsDescription1
     */
    public function setAboutUsDescription1($aboutUsDescription1)
    {
        $this->aboutUsDescription1 = $aboutUsDescription1;
    }

    /**
     * @return mixed
     */
    public function getAboutUsDescription1()
    {
        return $this->aboutUsDescription1;
    }

    /**
     * @param mixed $aboutUsDescription2
     */
    public function setAboutUsDescription2($aboutUsDescription2)
    {
        $this->aboutUsDescription2 = $aboutUsDescription2;
    }

    /**
     * @return mixed
     */
    public function getAboutUsDescription2()
    {
        return $this->aboutUsDescription2;
    }

    /**
     * @param mixed $aboutUsDescription3
     */
    public function setAboutUsDescription3($aboutUsDescription3)
    {
        $this->aboutUsDescription3 = $aboutUsDescription3;
    }

    /**
     * @return mixed
     */
    public function getAboutUsDescription3()
    {
        return $this->aboutUsDescription3;
    }

    /**
     * @param mixed $principles
     */
    public function setPrinciples($principles)
    {
        $this->principles = $principles;
    }

    /**
     * @return mixed
     */
    public function getPrinciples()
    {
        return $this->principles;
    }
}