<?php defined('BASEPATH') or exit('No direct script access allowed');

class Terbaru extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Terbaru';
        $data['active'] = 'terbaru';

        $this->load->view('templates/header', $data);
        $this->load->view('User/Terbaru/index');
        $this->load->view('templates/footer');
    }
}
