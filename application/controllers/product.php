<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
  
  function index(){
  $data['title'] = "Product-KiteBd";
        $this->load->view('inc/header', $data);
        $this->load->view('inc/header-slider');
        $this->load->view('product');
        $this->load->view('inc/footer', $data);
    }    
}
  
