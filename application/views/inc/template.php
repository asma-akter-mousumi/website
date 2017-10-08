<?php

class template
{
    function define($content)
    {
        $data['header'] = $this->load->views('inc/header');
        $data['footer'] = $this->load->views('inc/footer');
        $data['content'] = $this->load->views($content);
        $this->load->views('inc/index', $data);
    }
}