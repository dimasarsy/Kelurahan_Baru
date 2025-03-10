<?php

class Laporan extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Laporan';

        $this->load->view('templates/header', $data);
        $this->load->view('User/laporan/index');
        $this->load->view('templates/footer');
    }
}
