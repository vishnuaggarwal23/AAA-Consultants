<?php
/**
 * Created by PhpStorm.
 * User: Vishnu
 * Date: 31/1/17
 * Time: 11:17 PM
 */

class POCModel extends \CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function getNews(){
        $query = $this->db->get(POC_TABLE);
        return $query->result_array();
    }
}