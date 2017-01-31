<?php
namespace core;

class Base_Model extends \CI_Model{

    private $id;
    private $createdBy;
    private $createdDate;
    private $lastUpdatedBy;
    private $lastUpdatedDate;
    private $isDeleted;
    private $isApproved;
    private $uiVisible;
    private $moduleName;
    private $moduleDescription;

    public function __construct(){
        log_message('info','Base_Model constructor called');
        parent::__construct();
        $this->load->database();
    }

    public function __destruct(){
        log_message('info','Base_Model destructor called');
        $this->db->close();
    }

    public function __toString()
    {
        return "
            id = .$this->id.\n
            createdBy = .$this->createdBy.\n
            createdDate = .$this->createdDate.\n
            lastUpdatedBy = .$this->lastUpdatedBy.\n
            lastUpdatedDate = .$this->lastUpdatedDate.\n
            isDeleted = .$this->isDeleted.\n
            isApproved = .$this->isApproved.\n
            uiVisible = .$this->uiVisible.\n
            moduleName = .$this->moduleName.\n
            moduleDescription = .$this->moduleDescription.\n
        ";
    }

    /**
     * @param mixed $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param mixed $createdDate
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
    }

    /**
     * @return mixed
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
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
     * @param mixed $isApproved
     */
    public function setIsApproved($isApproved)
    {
        $this->isApproved = $isApproved;
    }

    /**
     * @return mixed
     */
    public function getIsApproved()
    {
        return $this->isApproved;
    }

    /**
     * @param mixed $isDeleted
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
    }

    /**
     * @return mixed
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * @param mixed $lastUpdatedBy
     */
    public function setLastUpdatedBy($lastUpdatedBy)
    {
        $this->lastUpdatedBy = $lastUpdatedBy;
    }

    /**
     * @return mixed
     */
    public function getLastUpdatedBy()
    {
        return $this->lastUpdatedBy;
    }

    /**
     * @param mixed $lastUpdatedDate
     */
    public function setLastUpdatedDate($lastUpdatedDate)
    {
        $this->lastUpdatedDate = $lastUpdatedDate;
    }

    /**
     * @return mixed
     */
    public function getLastUpdatedDate()
    {
        return $this->lastUpdatedDate;
    }

    /**
     * @param mixed $uiVisible
     */
    public function setUiVisible($uiVisible)
    {
        $this->uiVisible = $uiVisible;
    }

    /**
     * @return mixed
     */
    public function getUiVisible()
    {
        return $this->uiVisible;
    }

    /**
     * @param mixed $moduleDescription
     */
    public function setModuleDescription($moduleDescription)
    {
        $this->moduleDescription = $moduleDescription;
    }

    /**
     * @return mixed
     */
    public function getModuleDescription()
    {
        return $this->moduleDescription;
    }

    /**
     * @param mixed $moduleName
     */
    public function setModuleName($moduleName)
    {
        $this->moduleName = $moduleName;
    }

    /**
     * @return mixed
     */
    public function getModuleName()
    {
        return $this->moduleName;
    }
}