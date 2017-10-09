<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {
  
  function index(){
$data['title'] = "team-KiteBd";
        $this->load->view('inc/header', $data);
        $this->load->view('inc/header-slider', $data);
        $this->load->view('team');
        $this->load->view('inc/footer', $data);
    }    
}
  