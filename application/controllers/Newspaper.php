<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newspaper extends CI_Controller {
  
  function index(){
  $data['title'] = "newsRoom-KiteBd";
        $this->load->view('inc/header', $data);
        $this->load->view('newspaper');
        $this->load->view('inc/footer', $data);
    }    
}
  

