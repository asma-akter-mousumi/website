<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    function index() {
        $data['title'] = "Contact-KiteBd";
        $this->load->view('inc/header', $data);
        $this->load->view('contact');
        $this->load->view('inc/footer', $data);
    }

}
