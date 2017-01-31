<?php

class Practices_Model extends \core\Base_Model{

    private $practiceHeader;
    private $practiceDescription;

    public function __construct(){
        log_message('info','Practices_Model constructor called');
        parent::__construct();
    }

    public function __destruct(){
        log_message('info','Practices_Model destructor called');
        parent::__destruct();
    }

    public function __toString()
    {
        $parentToString = parent::__toString();
        return "
            .$parentToString.\n
            practiceHeader = .$this->practiceHeader.\n
            practiceDescription = .$this->practiceDescription.\n
        ";
    }

    /**
     * @param mixed $practiceDescription
     */
    public function setPracticeDescription($practiceDescription)
    {
        $this->practiceDescription = $practiceDescription;
    }

    /**
     * @return mixed
     */
    public function getPracticeDescription()
    {
        return $this->practiceDescription;
    }

    /**
     * @param mixed $practiceHeader
     */
    public function setPracticeHeader($practiceHeader)
    {
        $this->practiceHeader = $practiceHeader;
    }

    /**
     * @return mixed
     */
    public function getPracticeHeader()
    {
        return $this->practiceHeader;
    }
}