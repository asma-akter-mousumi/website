<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  
  function index(){
$data['title'] = "Home-KiteBd";
        $this->load->view('inc/header', $data);
         $this->load->view('inc/header-slider');
        $this->load->view('home');
        $this->load->view('inc/footer', $data);
    }    
}
  