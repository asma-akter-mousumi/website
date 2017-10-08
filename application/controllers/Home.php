<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  
  function index(){
$data['title'] = "newsRoom-KiteBd";
        $this->load->view('inc/header', $data);
        $this->load->view('home');
        $this->load->view('inc/footer', $data);
    }    
}
  