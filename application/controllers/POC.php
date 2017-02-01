<?php
/**
 * Created by PhpStorm.
 * User: Vishnu
 * Date: 31/1/17
 * Time: 11:02 PM
 */

class POC extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('about_Us_Principles_Model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['aboutUsPrinciples'] = $this->about_Us_Principles_Model->fetchAboutUsPrinciples();
        $data['title'] = 'Models POC';

        $this->load->view('templates/header', $data);
        $this->load->view('poc/index', $data);
        $this->load->view('templates/footer');

    }

    public function view($page = 'home'){
        if ( ! file_exists(APPPATH.'views/poc/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('poc/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
} 