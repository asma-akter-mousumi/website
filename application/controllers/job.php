<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends CI_Controller {
  
  function index(){
$data['title'] = "job-KiteBd";
        $this->load->view('inc/header', $data);
        $this->load->view('inc/header-slider', $data);
        $this->load->view('job');
        $this->load->view('inc/footer', $data);
    }
      function job_details(){
$data['title'] = "job-details";
        $this->load->view('inc/header', $data);
        $this->load->view('inc/header-slider', $data);
        $this->load->view('job_details');
        $this->load->view('inc/footer', $data);
    }
    
}
  