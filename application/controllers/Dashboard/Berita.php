<?php defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	function index()
	{
		$title['judul'] = 'Data Berita';
		$title['active'] = 'berita';

		$data['berita'] = $this->m_crud->read('tbl_terbaru');

		$this->load->view('dashboard/templates/header', $data);
        $this->load->view('dashboard/templates/sidebar_admin.php', $data);
        $this->load->view('dashboard/templates/topbar', $data);
		$this->load->view('dashboard/berita/index', $data);
        $this->load->view('dashboard/templates/footer', $data);
	}

	function detail($id_terbaru)
	{
		$title['judul'] = "Detail Berita";
		
		$berita = $this->m_crud->readBy('tbl_terbaru', array('id_terbaru' => $id_terbaru));
		$data['berita'] = $berita[0];

		$this->load->view('dashboard/templates/header', $title);
		$this->load->view('dashboard/templates/sidebar_admin', $title);
		$this->load->view('dashboard/templates/topbar', $data);
		$this->load->view("dashboard/berita/detail", $data);
		$this->load->view('dashboard/templates/footer', $data);
	}

	function tambah()
	{
		$title['judul'] = "Tambah Berita";

		$data['penulis'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();


		$this->load->view('dashboard/templates/header', $title);
		$this->load->view('dashboard/templates/sidebar_admin', $title);
		$this->load->view('dashboard/templates/topbar', $data);
		$this->load->view("dashboard/berita/tambah", $data);
		$this->load->view('dashboard/templates/footer', $data);
	}

	function in_berita()
	{

		$penulis = $this->session->userdata('name');

		$berita['penulis'] 		= $penulis;
		$berita['judul_seo']    = $_POST['judul_seo'];
		$berita['judul']  		= $_POST['judul'];
		$berita['deskripsi']    = $_POST['deskripsi'];
		
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']      = 2048;
		$config['upload_path']   = "./assets/img/berita/";

		$gambar 	= $this->m_crud->upload_file($nik, $_FILES['gambar']['name'], "gambar", $config);

		if ($gambar != $default_img) {
			$berita['gambar'] 	= $gambar;

			$this->m_crud->save('tbl_terbaru', $berita);
			$this->session->set_flashdata('sukses', 'Buat Berita Sukses!');
			redirect(base_url("dashboard/berita"));
		}
	}

	function edit($id_terbaru)
	{
		$title['judul'] = "Edit Berita";

		$data['penulis'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$data['berita'] = $this->m_crud->readBy('tbl_terbaru', array('id_terbaru' => $id_terbaru))[0];


		$this->load->view('dashboard/templates/header', $title);
		$this->load->view('dashboard/templates/sidebar_admin', $title);
		$this->load->view('dashboard/templates/topbar', $data);
		$this->load->view("dashboard/berita/edit", $data);
		$this->load->view('dashboard/templates/footer', $data);
	}

	function in_edit_berita()
	{

		// $penulis = $this->session->userdata('name');
		
		// $config['allowed_types'] = 'jpg|png|jpeg';
		// $config['max_size']      = 2048;
		// $config['upload_path']   = "./assets/img/berita/";
		
		$id_terbaru = $this->input->post('id_terbaru');

		$data = array(
            'penulis' => $this->session->userdata('name'),
            'judul_seo' => $this->input->post('judul_seo'),
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
        );

		// $berita['penulis'] 		= $penulis;
		// $berita['judul_seo']    = $_POST['judul_seo'];
		// $berita['judul']  		= $_POST['judul'];
		// $berita['deskripsi']    = $_POST['deskripsi'];
	
		$upload_image = $_FILES['gambar']['name'];
		

		if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/img/berita/';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('gambar')) {
                $old_image = $data['tbl_terbaru']['gambar'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . './assets/img/berita/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                var_dump($this->upload->display_errors());
            }
        }

		$this->db->set($data);
        $this->db->where('id_terbaru', $id_terbaru);
        $this->db->update('tbl_terbaru');

		$this->session->set_flashdata('sukses', 'Edit Berita Sukses!');
		redirect(base_url("dashboard/berita"));
	}

	public function delete($id_terbaru)
	{
		$this->m_crud->deleteBerita($id_terbaru);
		redirect(base_url('dashboard/berita'));
	}

}
