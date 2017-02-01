<?php
namespace application\dto;

include APPPATH . 'dto/Base_DTO.php';

class About_Us_DTO extends Base_DTO {
    private $aboutUsDescription1;
    private $aboutUsDescription2;
    private $aboutUsDescription3;

    public function __construct(){
        log_message('info','About_Us_DTO constructor called');
        parent::__construct();
    }

    public function __destruct(){
        log_message('info','About_Us_DTO destructor called');
        parent::__destruct();
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


} 