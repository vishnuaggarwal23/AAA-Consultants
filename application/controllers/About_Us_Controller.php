<?php

include APPPATH . 'dto/About_Us_Page_VO.php';
include APPPATH . 'utils/CoreUtil.php';

class About_Us_Controller extends CI_Controller{

    public function __construct(){
        log_message('info', 'About_Us_Controller constructor called');
        parent::__construct();
        $this->load->model('about_Us_Model');
        $this->load->model('about_Us_Principles_Model');
        $this->load->helper("url");
    }

    public function index($page = 'aboutUs'){
        log_message('info', 'About_Us_Controller index method called');
        $aboutUsPageVO = new \application\dto\About_Us_Page_VO();
        $aboutUsDTO = $this->about_Us_Model->fetchAboutUs();
        \application\utils\CoreUtil::load404IfViewDoesNotExists($page);
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
        $data['title'] = 'AAA-Consultants | About Us';
        $data['moduleImage'] = $this->config->item('base_uri').'assets\images\logo.png';
        $this->load->view('templates/header', $data);
        $this->load->view($page, $data);
        $this->load->view('templates/footer', $data);
    }
} 