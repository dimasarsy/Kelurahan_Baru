<?php defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Berita';
        $data['active'] = 'berita';

		$data['berita'] = $this->m_crud->read('tbl_terbaru');

        $this->load->view('templates/header', $data);
        $this->load->view('User/berita/index', $data);
        $this->load->view('templates/footer');
    }

    function detail($id_terbaru)
	{
		$data['judul'] = "Detail Berita";
        $data['active'] = 'berita';

		
		$berita = $this->m_crud->readBy('tbl_terbaru', array('id_terbaru' => $id_terbaru));
		$data['berita'] = $berita[0];

        $this->load->view('templates/header', $data);
        $this->load->view('User/berita/detail', $data);
        $this->load->view('templates/footer');
	}
}
