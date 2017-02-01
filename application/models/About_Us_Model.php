<?php

include APPPATH . 'dto/About_Us_DTO.php';
include APPPATH . 'models/core/Base_Model.php';

class About_Us_Model extends \core\Base_Model{

    private $aboutUsDescription1;
    private $aboutUsDescription2;
    private $aboutUsDescription3;

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

    public function fetchAboutUs(){
        $query = $this->db->query("SELECT * FROM aaa_consultants.about_us WHERE aaa_consultants.about_us.is_deleted = FALSE AND aaa_consultants.about_us.is_approved = TRUE AND aaa_consultants.about_us.ui_visible = TRUE");
        $row = $query->row();
        $aboutUsDTO = null;
        if(isset($row)){
            $aboutUsDTO = new \application\dto\About_Us_DTO();
            $aboutUsDTO->setId($row->id);
            $aboutUsDTO->setCreatedBy($row->created_by);
            $aboutUsDTO->setCreatedDate($row->created_date);
            $aboutUsDTO->setLastUpdatedBy($row->last_updated_by);
            $aboutUsDTO->setLastUpdatedDate($row->last_updated_date);
            $aboutUsDTO->setIsDeleted($row->is_deleted);
            $aboutUsDTO->setIsApproved($row->is_approved);
            $aboutUsDTO->setUiVisible($row->ui_visible);
            $aboutUsDTO->setModuleName($row->module_name);
            $aboutUsDTO->setModuleDescription($row->module_description);
            $aboutUsDTO->setAboutUsDescription1($row->about_us_description_1);
            $aboutUsDTO->setAboutUsDescription2($row->about_us_description_2);
            $aboutUsDTO->setAboutUsDescription3($row->about_us_description_3);
        }
        return $aboutUsDTO;
    }
}