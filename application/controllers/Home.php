<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $data['active'] = 'home';


        $this->load->view('templates/header', $data);
        $this->load->view('User/home/index');
        $this->load->view('templates/footer');
    }
}
