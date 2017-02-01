<?php
namespace application\dto;

class About_Us_Principles_DTO {
    private $id;
    private $principleHeader;
    private $principleDescription;
    private $aboutUsId;

    public function __construct(){
        log_message('info', 'About_Us_Principles_DTO constructor called');
    }

    public function __destruct(){
        log_message('info', 'About_Us_Principles_DTO destructor called');
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


} 