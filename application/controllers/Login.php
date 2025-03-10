<?php

class Layanan extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Kelurahan Palmerah | Login';
        $this->load->view('templates/header', $data);
        $this->load->view('User/login/index');
        $this->load->view('templates/footer');
    }
}