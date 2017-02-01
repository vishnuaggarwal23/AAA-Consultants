<?php

include APPPATH . 'dto/About_Us_Principles_DTO.php';

class About_Us_Principles_Model extends CI_Model{
    private $id;
    private $principleHeader;
    private $principleDescription;
    private $aboutUsId;

    public function __construct(){
        log_message('info', 'About_Us_Principles_Model constructor called');
        parent::__construct();
        $this->load->database();
    }

    public function __destruct(){
        log_message('info', 'About_Us_Principles_Model destructor called');
        $this->db->close();
    }

    /**
     * @param mixed $aboutUsId
     */
    public function setAboutUsId($aboutUsId)
    {
        $this->aboutUsId = $aboutUsId;
    }

    /**
     * @return mixed
     */
    public function getAboutUsId()
    {
        return $this->aboutUsId;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $principleDescription
     */
    public function setPrincipleDescription($principleDescription)
    {
        $this->principleDescription = $principleDescription;
    }

    /**
     * @return mixed
     */
    public function getPrincipleDescription()
    {
        return $this->principleDescription;
    }

    /**
     * @param mixed $principleHeader
     */
    public function setPrincipleHeader($principleHeader)
    {
        $this->principleHeader = $principleHeader;
    }

    /**
     * @return mixed
     */
    public function getPrincipleHeader()
    {
        return $this->principleHeader;
    }

    public function fetchAboutUsPrinciples($aboutUsId){
        log_message('info', 'Fetch About Us Principles Called');
        $query = $this->db->query("SELECT * FROM aaa_consultants.about_us_principles WHERE aaa_consultants.about_us_principles.about_us_id =$aboutUsId");
        $aboutUsPrinciples = null;
        $result = $query->result();
        if(sizeof($result) > 0){
            $aboutUsPrinciples = array();
            foreach($result as $aboutUsPrinciple){
                $principle = new \application\dto\About_Us_Principles_DTO();
                $principle->setId($aboutUsPrinciple->id);
                $principle->setAboutUsId($aboutUsPrinciple->about_us_id);
                $principle->setPrincipleHeader($aboutUsPrinciple->principle_name);
                $principle->setPrincipleDescription($aboutUsPrinciple->principle_description);
                array_push($aboutUsPrinciples, $principle);
            }
        }
        return $aboutUsPrinciples;
    }
}