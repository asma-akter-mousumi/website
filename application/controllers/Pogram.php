<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Pogram extends CI_Controller {
 
  function index(){
       $data['title'] = "Program-KiteBd";
        $this->load->view('inc/header', $data);
        $this->load->view('program');
        $this->load->view('inc/footer', $data);
   
    }

}