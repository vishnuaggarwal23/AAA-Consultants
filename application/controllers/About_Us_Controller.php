<?php

include APPPATH . 'dto/About_Us_Page_VO.php';

class About_Us_Controller extends CI_Controller{

    public function __construct(){
        log_message('info', 'About_Us_Controller constructor called');
        parent::__construct();
        $this->load->model('about_Us_Model');
        $this->load->model('about_Us_Principles_Model');
    }

    public function index(){
        log_message('info', 'About_Us_Controller index method called');
        $aboutUsPageVO = new \application\dto\About_Us_Page_VO();
        $aboutUsDTO = $this->about_Us_Model->fetchAboutUs();
        if(!is_null($aboutUsDTO)){
            $aboutUsPrinciples = $this->about_Us_Principles_Model->fetchAboutUsPrinciples($aboutUsDTO->getId());
            if(!is_null($aboutUsPrinciples)){
                $aboutUsPageVO->id = $aboutUsDTO->getId();
                $aboutUsPageVO->aboutUsDescription1 = $aboutUsDTO->getAboutUsDescription1();
                $aboutUsPageVO->aboutUsDescription2 = $aboutUsDTO->getAboutUsDescription2();
                $aboutUsPageVO->aboutUsDescription3 = $aboutUsDTO->getAboutUsDescription3();
                $aboutUsPageVO->moduleName = $aboutUsDTO->getModuleName();
                $aboutUsPageVO->moduleDescription = $aboutUsDTO->getModuleDescription();
                $aboutUsPageVO->principles = $aboutUsPrinciples;
            }
        }
        $data['aboutUs'] = $aboutUsPageVO;
        echo $aboutUsPageVO;
    }
} 