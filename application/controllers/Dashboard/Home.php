<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_admin();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['judul'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('dashboard/templates/header', $data);
        $this->load->view('dashboard/templates/sidebar_admin.php', $data);
        $this->load->view('dashboard/templates/topbar', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('dashboard/templates/footer', $data);
    }
}
