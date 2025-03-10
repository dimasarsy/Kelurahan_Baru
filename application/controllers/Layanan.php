<?php

class Layanan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_crud');
		$this->load->library('session');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['judul'] = 'Layanan';

		$this->load->view('templates/header', $data);
		$this->load->view('User/layanan/index', $data);
		$this->load->view('templates/footer');
	}

	function surat_kelahiran()
	{

		is_user();

		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$data['judul'] = 'Surat Kelahiran';

		$this->load->view('templates/header', $data);
		$this->load->view('User/layanan/surat_kelahiran');
		$this->load->view('templates/footer');
	}

	function in_surat_kelahiran()
	{

		$default_img = "default.jpg";
		$nik = $this->session->userdata('nik');

		$kelahiran['nik'] 			= $nik;
		$kelahiran['hubungan']      = $_POST['hubungan'];
		$kelahiran['anak']          = $_POST['anak'];
		$kelahiran['tgl_lahir']     = $_POST['tgl_lahir'];
		$kelahiran['tempat_lahir']  = $_POST['tempat_lahir'];
		$kelahiran['jk']            = $_POST['jk'];
		$kelahiran['ayah']          = $_POST['ayah'];
		$kelahiran['ibu']           = $_POST['ibu'];
		$kelahiran['rw']            = $_POST['rw'];
		$kelahiran['rt']            = $_POST['rt'];

		$config['allowed_types'] = 'jpg|png|jpeg|pdf';
		$config['max_size']      = 2048;
		$config['upload_path']   = "./assets/img/surat/kelahiran/";

		$ket_file 			= $this->m_crud->upload_file($nik, $_FILES['ket_file']['name'], "ket_file", $config);
		$kk_file 			= $this->m_crud->upload_file($nik, $_FILES['kk_file']['name'], "kk_file", $config);
		$ktp_file 			= $this->m_crud->upload_file($nik, $_FILES['ktp_file']['name'], "ktp_file", $config);
		$pengantar_file 	= $this->m_crud->upload_file($nik, $_FILES['pengantar_file']['name'], "pengantar_file", $config);

		if ($ket_file != $default_img && $kk_file != $default_img && $ktp_file != $default_img && $pengantar_file != $default_img) {
			$kelahiran['ket_file'] 	= $config['upload_path'] . $ket_file;
			$kelahiran['kk_file'] 	= $config['upload_path'] . $kk_file;
			$kelahiran['ktp_file'] 	= $config['upload_path'] . $ktp_file;
			$kelahiran['pengantar_file'] = $config['upload_path'] . $pengantar_file;

			$date = date("Y");
			$jumlah = $this->m_crud->readBy('tbl_kelahiran', array("year(tgl_buat)" => $date, "status !=" => surat_ditolak));
			$id = count($jumlah) + 1;
			$kelahiran['id_kelahiran'] = "472.11/$id/438.7.9.14/$date";

			$this->m_crud->save('tbl_kelahiran', $kelahiran);
			$this->session->set_flashdata('sukses', 'Buat Surat Sukses!');
			redirect(base_url("layanan/status_layanan"));
		}
	}
	function surat_ktp()
	{

		is_user();

		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$data['warga'] = $this->m_crud->readBy('tbl_warga', ['nik' => $this->session->userdata('nik')])[0];

		$data['judul'] = 'Surat ktp';

		$this->load->view('templates/header', $data);
		$this->load->view('User/layanan/surat_ktp');
		$this->load->view('templates/footer');
	}

	function in_surat_ktp()
	{

		$default_img = "default.jpg";
		$nik = $this->session->userdata('nik');
		$name = $this->session->userdata('name');

		$ktp['nik'] 			= $nik;
		$ktp['name'] 			= $name;
		$ktp['tgl_lahir']     = $_POST['tgl_lahir'];
		$ktp['tempat_lahir']  = $_POST['tempat_lahir'];
		$ktp['jk']            = $_POST['jk'];
		$ktp['alamat']   		= $_POST['alamat'];
		$ktp['rt']            = $_POST['rt'];
		$ktp['rw']            = $_POST['rw'];
		$ktp['ayah']          = $_POST['ayah'];
		$ktp['ibu']           = $_POST['ibu'];

		$config['allowed_types'] = 'jpg|png|jpeg|pdf';
		$config['max_size']      = 2048;
		$config['upload_path']   = "./assets/img/surat/ktp/";

		$pengantar_file 	= $this->m_crud->upload_file($nik, $_FILES['pengantar_file']['name'], "pengantar_file", $config);
		$kk_file 	= $this->m_crud->upload_file($nik, $_FILES['kk_file']['name'], "kk_file", $config);
		$akte_file 	= $this->m_crud->upload_file($nik, $_FILES['akte_file']['name'], "akte_file", $config);
		$foto_file 	= $this->m_crud->upload_file($nik, $_FILES['foto_file']['name'], "foto_file", $config);
		$tambahan_file 	= $this->m_crud->upload_file($nik, $_FILES['tambahan_file']['name'], "tambahan_file", $config);

		if ($pengantar_file != $default_img && $kk_file != $default_img && $akte_file != $default_img) {
			$ktp['pengantar_file'] 	= $config['upload_path'] . $pengantar_file;
			$ktp['kk_file'] 	= $config['upload_path'] . $kk_file;
			$ktp['akte_file'] 	= $config['upload_path'] . $akte_file;
			$ktp['foto_file'] = $config['upload_path'] . $foto_file;
			$ktp['tambahan_file'] = $config['upload_path'] . $tambahan_file;

			$date = date("Y");
			$jumlah = $this->m_crud->readBy('tbl_ktp', array("year(tgl_buat)" => $date, "status !=" => surat_ditolak));
			$id = count($jumlah) + 1;
			$ktp['id_ktp'] = "472.11/$id/438.7.9.14/$date";

			$this->m_crud->save('tbl_ktp', $ktp);
			$this->session->set_flashdata('sukses', 'Buat Surat Sukses!');
			redirect(base_url("layanan/status_layanan"));
		}
	}
	function surat_kk()
	{

		is_user();

		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$data['warga'] = $this->m_crud->readBy('tbl_warga', ['nik' => $this->session->userdata('nik')])[0];

		$data['judul'] = 'Surat kk';

		$this->load->view('templates/header', $data);
		$this->load->view('User/layanan/surat_kk');
		$this->load->view('templates/footer');
	}

	function in_surat_kk()
	{

		$default_img = "default.jpg";
		$nik = $this->session->userdata('nik');
		$name = $this->session->userdata('name');

		$kk['nik']	= $nik;
		$kk['name']	= $name;
		$kk['tgl_lahir']	= $_POST['tgl_lahir'];
		$kk['tempat_lahir']	= $_POST['tempat_lahir'];
		$kk['jk']	= $_POST['jk'];
		$kk['alamat']	= $_POST['alamat'];
		$kk['rt']	= $_POST['rt'];
		$kk['rw']   = $_POST['rw'];
		$kk['ayah']	= $_POST['ayah'];
		$kk['ibu']	= $_POST['ibu'];


		$config['allowed_types'] = 'jpg|png|jpeg|pdf';
		$config['max_size']      = 2048;
		$config['upload_path']   = "./assets/img/surat/kk/";

		$pengantar_file 	= $this->m_crud->upload_file($nik, $_FILES['pengantar_file']['name'], "pengantar_file", $config);
		$kk_file 	= $this->m_crud->upload_file($nik, $_FILES['kk_file']['name'], "kk_file", $config);
		$ktp_file 	= $this->m_crud->upload_file($nik, $_FILES['ktp_file']['name'], "ktp_file", $config);
		$tambahan_file 	= $this->m_crud->upload_file($nik, $_FILES['tambahan_file']['name'], "tambahan_file", $config);

		if ($pengantar_file != $default_img && $kk_file != $default_img && $ktp_file != $default_img && $tambahan_file != $default_img) {
			$kk['pengantar_file'] 	= $config['upload_path'] . $pengantar_file;
			$kk['ktp_file'] 		= $config['upload_path'] . $ktp_file;
			$kk['kk_file'] 			= $config['upload_path'] . $kk_file;
			$kk['tambahan_file'] 	= $config['upload_path'] . $tambahan_file;

			$date = date("Y");
			$jumlah = $this->m_crud->readBy('tbl_kk', array("year(tgl_buat)" => $date, "status !=" => surat_ditolak));
			$id = count($jumlah) + 1;
			$kk['id_kk'] = "472.12/$id/438.7.9.14/$date";

			$this->m_crud->save('tbl_kk', $kk);
			$this->session->set_flashdata('sukses', 'Buat Surat Sukses!');
			redirect(base_url("layanan/status_layanan"));
		}
	}
	function surat_sktm()
	{

		is_user();

		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$data['warga'] = $this->m_crud->readBy('tbl_warga', ['nik' => $this->session->userdata('nik')])[0];

		$data['d_jk'] = JK;
		$data['d_goldar'] = GOLDAR;
		$data['d_agama'] = AGAMA;
		$data['d_pendidikan'] = PENDIDIKAN;
		$data['d_pekerjaan'] = PEKERJAAN;
		$data['d_rw'] = DUSUN;

		$data['judul'] = 'Surat SKTM';

		$this->load->view('templates/header', $data);
		$this->load->view('User/layanan/surat_sktm');
		$this->load->view('templates/footer');
	}

	function in_surat_sktm()
	{

		$default_img = "default.jpg";
		$nik = $this->session->userdata('nik');
		$name = $this->session->userdata('name');

		$sktm['nik'] 		  	= $nik;
		$sktm['name'] 		  	= $name;
		$sktm['tgl_lahir']     	= $_POST['tgl_lahir'];
		$sktm['tempat_lahir']  	= $_POST['tempat_lahir'];
		$sktm['jk']            	= $_POST['jk'];
		$sktm['alamat']   	  	= $_POST['alamat'];
		$sktm['rt']            	= $_POST['rt'];
		$sktm['rw']            	= $_POST['rw'];
		$sktm['ayah']          	= $_POST['ayah'];
		$sktm['ibu']           	= $_POST['ibu'];

		$config['allowed_types'] = 'jpg|png|jpeg|pdf';
		$config['max_size']      = 2048;
		$config['upload_path']   = "./assets/img/surat/sktm/";

		$pengantar_file 	= $this->m_crud->upload_file($nik, $_FILES['pengantar_file']['name'], "pengantar_file", $config);
		$ktp_file 			= $this->m_crud->upload_file($nik, $_FILES['ktp_file']['name'], "ktp_file", $config);
		$kk_file 			= $this->m_crud->upload_file($nik, $_FILES['kk_file']['name'], "kk_file", $config);

		if ($pengantar_file != $default_img && $kk_file != $default_img && $ktp_file != $default_img) {
			$sktm['pengantar_file'] 	= $config['upload_path'] . $pengantar_file;
			$sktm['ktp_file'] 		= $config['upload_path'] . $ktp_file;
			$sktm['kk_file'] 			= $config['upload_path'] . $kk_file;

			$date = date("Y");
			$jumlah = $this->m_crud->readBy('tbl_sktm', array("year(tgl_buat)" => $date, "status !=" => surat_ditolak));
			$id = count($jumlah) + 1;
			$sktm['id_sktm'] = "472.11/$id/438.7.9.14/$date";

			$this->m_crud->save('tbl_sktm', $sktm);
			$this->session->set_flashdata('sukses', 'Buat Surat Sukses!');
			redirect(base_url("layanan/status_layanan"));
		}
	}
	function surat_domisili()
	{

		is_user();

		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$data['warga'] = $this->m_crud->readBy('tbl_warga', ['nik' => $this->session->userdata('nik')])[0];

		$data['d_jk'] = JK;
		$data['d_goldar'] = GOLDAR;
		$data['d_agama'] = AGAMA;
		$data['d_pendidikan'] = PENDIDIKAN;
		$data['d_pekerjaan'] = PEKERJAAN;
		$data['d_rw'] = DUSUN;

		$data['judul'] = 'Surat Domisili';

		$this->load->view('templates/header', $data);
		$this->load->view('User/layanan/surat_domisili');
		$this->load->view('templates/footer');
	}

	function in_surat_domisili()
	{

		$default_img = "default.jpg";
		$nik = $this->session->userdata('nik');
		$name = $this->session->userdata('name');

		$domisili['nik'] 		  	= $nik;
		$domisili['name'] 		  	= $name;
		$domisili['tgl_lahir']     	= $_POST['tgl_lahir'];
		$domisili['tempat_lahir']  	= $_POST['tempat_lahir'];
		$domisili['jk']            	= $_POST['jk'];
		$domisili['alamat']   	  	= $_POST['alamat'];
		$domisili['rt']            	= $_POST['rt'];
		$domisili['rw']            	= $_POST['rw'];
		$domisili['ayah']          	= $_POST['ayah'];
		$domisili['ibu']           	= $_POST['ibu'];

		$config['allowed_types'] = 'jpg|png|jpeg|pdf';
		$config['max_size']      = 2048;
		$config['upload_path']   = "./assets/img/surat/domisili/";

		$pengantar_file 	= $this->m_crud->upload_file($nik, $_FILES['pengantar_file']['name'], "pengantar_file", $config);
		$ktp_file 			= $this->m_crud->upload_file($nik, $_FILES['ktp_file']['name'], "ktp_file", $config);
		$kk_file 			= $this->m_crud->upload_file($nik, $_FILES['kk_file']['name'], "kk_file", $config);

		if ($pengantar_file != $default_img && $kk_file != $default_img && $ktp_file != $default_img) {
			$domisili['pengantar_file'] 	= $config['upload_path'] . $pengantar_file;
			$domisili['ktp_file'] 		= $config['upload_path'] . $ktp_file;
			$domisili['kk_file'] 			= $config['upload_path'] . $kk_file;

			$date = date("Y");
			$jumlah = $this->m_crud->readBy('tbl_domisili', array("year(tgl_buat)" => $date, "status !=" => surat_ditolak));
			$id = count($jumlah) + 1;
			$domisili['id_domisili'] = "472.11/$id/438.7.9.14/$date";

			$this->m_crud->save('tbl_domisili', $domisili);
			$this->session->set_flashdata('sukses', 'Buat Surat Sukses!');
			redirect(base_url("layanan/status_layanan"));
		}
	}
	function surat_skck()
	{

		is_user();

		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$data['warga'] = $this->m_crud->readBy('tbl_warga', ['nik' => $this->session->userdata('nik')])[0];

		$data['d_jk'] = JK;
		$data['d_goldar'] = GOLDAR;
		$data['d_agama'] = AGAMA;
		$data['d_pendidikan'] = PENDIDIKAN;
		$data['d_pekerjaan'] = PEKERJAAN;
		$data['d_rw'] = DUSUN;

		$data['judul'] = 'Surat SKCK';

		$this->load->view('templates/header', $data);
		$this->load->view('User/layanan/surat_skck');
		$this->load->view('templates/footer');
	}

	function in_surat_skck()
	{

		$default_img = "default.jpg";
		$nik = $this->session->userdata('nik');
		$name = $this->session->userdata('name');

		$skck['nik'] 		  	= $nik;
		$skck['name'] 		  	= $name;
		$skck['tgl_lahir']     	= $_POST['tgl_lahir'];
		$skck['tempat_lahir']  	= $_POST['tempat_lahir'];
		$skck['jk']            	= $_POST['jk'];
		$skck['alamat']   	  	= $_POST['alamat'];
		$skck['rt']            	= $_POST['rt'];
		$skck['rw']            	= $_POST['rw'];
		$skck['ayah']          	= $_POST['ayah'];
		$skck['ibu']           	= $_POST['ibu'];

		$config['allowed_types'] = 'jpg|png|jpeg|pdf';
		$config['max_size']      = 2048;
		$config['upload_path']   = "./assets/img/surat/skck/";

		$pengantar_file 	= $this->m_crud->upload_file($nik, $_FILES['pengantar_file']['name'], "pengantar_file", $config);
		$kk_file 			= $this->m_crud->upload_file($nik, $_FILES['kk_file']['name'], "kk_file", $config);
		$ktp_file 			= $this->m_crud->upload_file($nik, $_FILES['ktp_file']['name'], "ktp_file", $config);
		$foto_file 			= $this->m_crud->upload_file($nik, $_FILES['foto_file']['name'], "foto_file", $config);
		$tambahan_file 		= $this->m_crud->upload_file($nik, $_FILES['tambahan_file']['name'], "tambahan_file", $config);

		if ($pengantar_file != $default_img && $kk_file != $default_img && $ktp_file != $default_img && $foto_file != $default_img && $tambahan_file != $default_img) {
			$skck['pengantar_file'] 	= $config['upload_path'] . $pengantar_file;
			$skck['kk_file'] 			= $config['upload_path'] . $kk_file;
			$skck['ktp_file'] 			= $config['upload_path'] . $ktp_file;
			$skck['foto_file'] 			= $config['upload_path'] . $foto_file;
			$skck['tambahan_file'] 		= $config['upload_path'] . $tambahan_file;

			$date = date("Y");
			$jumlah = $this->m_crud->readBy('tbl_skck', array("year(tgl_buat)" => $date, "status !=" => surat_ditolak));
			$id = count($jumlah) + 1;
			$skck['id_skck'] = "472.11/$id/438.7.9.14/$date";

			$this->m_crud->save('tbl_skck', $skck);
			$this->session->set_flashdata('sukses', 'Buat Surat Sukses!');
			redirect(base_url("layanan/status_layanan"));
		}
	}
	function surat_kematian()
	{

		is_user();

		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$data['warga'] = $this->m_crud->readBy('tbl_warga', ['nik' => $this->session->userdata('nik')])[0];

		$data['d_jk'] = JK;
		$data['d_goldar'] = GOLDAR;
		$data['d_agama'] = AGAMA;
		$data['d_pendidikan'] = PENDIDIKAN;
		$data['d_pekerjaan'] = PEKERJAAN;
		$data['d_rw'] = DUSUN;

		$data['judul'] = 'Surat Kematian';

		$this->load->view('templates/header', $data);
		$this->load->view('User/layanan/surat_kematian');
		$this->load->view('templates/footer');
	}

	function in_surat_kematian()
	{

		$default_img = "default.jpg";
		$nik = $this->session->userdata('nik');
		$name = $this->session->userdata('name');

		$kematian['nik'] 		  	= $nik;
		$kematian['name'] 		  	= $name;
		$kematian['hubungan']     	= $_POST['hubungan'];
		$kematian['mayit']     		= $_POST['mayit'];
		$kematian['tempat_lahir']  	= $_POST['tempat_lahir'];
		$kematian['tgl_lahir']     	= $_POST['tgl_lahir'];
		$kematian['tempat_meninggal'] = $_POST['tempat_meninggal'];
		$kematian['tgl_meninggal']  = $_POST['tgl_meninggal'];
		$kematian['jk']            	= $_POST['jk'];
		$kematian['alamat']   	  	= $_POST['alamat'];
		$kematian['rt']            	= $_POST['rt'];
		$kematian['rw']            	= $_POST['rw'];

		$config['allowed_types'] = 'jpg|png|jpeg|pdf';
		$config['max_size']      = 2048;
		$config['upload_path']   = "./assets/img/surat/kematian/";

		$pengantar_file 	= $this->m_crud->upload_file($nik, $_FILES['pengantar_file']['name'], "pengantar_file", $config);
		$kk_file 			= $this->m_crud->upload_file($nik, $_FILES['kk_file']['name'], "kk_file", $config);
		$ktp_file 			= $this->m_crud->upload_file($nik, $_FILES['ktp_file']['name'], "ktp_file", $config);
		$keterangan_file 	= $this->m_crud->upload_file($nik, $_FILES['keterangan_file']['name'], "keterangan_file", $config);

		if ($pengantar_file != $default_img && $kk_file != $default_img && $ktp_file != $default_img && $keterangan_file != $default_img) {
			$kematian['pengantar_file'] 	= $config['upload_path'] . $pengantar_file;
			$kematian['kk_file'] 			= $config['upload_path'] . $kk_file;
			$kematian['ktp_file'] 			= $config['upload_path'] . $ktp_file;
			$kematian['keterangan_file'] 	= $config['upload_path'] . $keterangan_file;

			$date = date("Y");
			$jumlah = $this->m_crud->readBy('tbl_kematian', array("year(tgl_buat)" => $date, "status !=" => surat_ditolak));
			$id = count($jumlah) + 1;
			$kematian['id_kematian'] = "472.11/$id/438.7.9.14/$date";

			$this->m_crud->save('tbl_kematian', $kematian);
			$this->session->set_flashdata('sukses', 'Buat Surat Sukses!');
			redirect(base_url("layanan/status_layanan"));
		}
	}

	function surat_pindah()
	{

		is_user();

		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$data['warga'] = $this->m_crud->readBy('tbl_warga', ['nik' => $this->session->userdata('nik')])[0];

		$data['d_jk'] = JK;
		$data['d_goldar'] = GOLDAR;
		$data['d_agama'] = AGAMA;
		$data['d_pendidikan'] = PENDIDIKAN;
		$data['d_pekerjaan'] = PEKERJAAN;
		$data['d_rw'] = DUSUN;

		$data['judul'] = 'Surat Pindah';

		$this->load->view('templates/header', $data);
		$this->load->view('User/layanan/surat_pindah');
		$this->load->view('templates/footer');
	}

	function in_surat_pindah()
	{

		$default_img = "default.jpg";
		$nik = $this->session->userdata('nik');
		$name = $this->session->userdata('name');

		$pindah['nik'] 		  	= $nik;
		$pindah['name'] 		  	= $name;
		$pindah['tgl_lahir']     	= $_POST['tgl_lahir'];
		$pindah['tempat_lahir']  	= $_POST['tempat_lahir'];
		$pindah['jk']            	= $_POST['jk'];
		$pindah['alamat']   	  	= $_POST['alamat'];
		$pindah['rt']            	= $_POST['rt'];
		$pindah['rw']            	= $_POST['rw'];
		$pindah['ayah']          	= $_POST['ayah'];
		$pindah['ibu']           	= $_POST['ibu'];

		$config['allowed_types'] = 'jpg|png|jpeg|pdf';
		$config['max_size']      = 2048;
		$config['upload_path']   = "./assets/img/surat/pindah/";

		$pengantar_file 	= $this->m_crud->upload_file($nik, $_FILES['pengantar_file']['name'], "pengantar_file", $config);
		$ktp_file 			= $this->m_crud->upload_file($nik, $_FILES['ktp_file']['name'], "ktp_file", $config);
		$kk_file 			= $this->m_crud->upload_file($nik, $_FILES['kk_file']['name'], "kk_file", $config);

		if ($pengantar_file != $default_img && $kk_file != $default_img && $ktp_file != $default_img) {
			$pindah['pengantar_file'] 	= $config['upload_path'] . $pengantar_file;
			$pindah['ktp_file'] 		= $config['upload_path'] . $ktp_file;
			$pindah['kk_file'] 			= $config['upload_path'] . $kk_file;

			$date = date("Y");
			$jumlah = $this->m_crud->readBy('tbl_pindah', array("year(tgl_buat)" => $date, "status !=" => surat_ditolak));
			$id = count($jumlah) + 1;
			$pindah['id_pindah'] = "472.11/$id/438.7.9.14/$date";

			$this->m_crud->save('tbl_pindah', $pindah);
			$this->session->set_flashdata('sukses', 'Buat Surat Sukses!');
			redirect(base_url("layanan/status_layanan"));
		}
	}

	function status_layanan()
	{
		$nik = $_SESSION['nik'];
		$data['ktp'] = $this->m_crud->readBy('tbl_ktp', array('nik' => $nik));
		$data['kk'] = $this->m_crud->readBy('tbl_kk', array('nik' => $nik));
		$data['sktm'] = $this->m_crud->readBy('tbl_sktm', array('nik' => $nik));
		$data['domisili'] = $this->m_crud->readBy('tbl_domisili', array('nik' => $nik));
		$data['pindah'] = $this->m_crud->readBy('tbl_pindah', array('nik' => $nik));
		$data['skck'] = $this->m_crud->readBy('tbl_skck', array('nik' => $nik));
		$data['kelahiran'] = $this->m_crud->readBy('tbl_kelahiran', array('nik' => $nik));
		$data['kematian'] = $this->m_crud->readBy('tbl_kematian', array('nik' => $nik));

		$data['surat'] = $this;

		$data['title'] = 'My Profile';
		$title['judul'] = 'My Profile';

		$this->load->view('dashboard/templates/header', $title);
		$this->load->view('dashboard/templates/sidebar', $data);
		$this->load->view('dashboard/templates/topbar', $data);
		$this->load->view('User/profil/status_layanan', $data);
		$this->load->view('dashboard/templates/footer', $data);
	}

	function managemen_user()
	{
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$data['warga'] = $this->m_crud->readBy('tbl_warga', ['nik' => $this->session->userdata('nik')])[0];


		$data['title'] = 'My Profile';
		$title['judul'] = 'My Profile';

		$this->load->view('dashboard/templates/header', $title);
		$this->load->view('dashboard/templates/sidebar_admin.php', $data);
		$this->load->view('dashboard/templates/topbar', $data);
		$this->load->view('dashboard/user/view_users', $data);
		$this->load->view('dashboard/templates/footer', $data);
	}

	function cek_status($id)
	{
		switch ($id) {
			case 0:
				echo "Tahap Validasi";
				break;
			case 1:
				echo "Tahap Proses";
				break;
			case 2:
				echo "Selesai";
				break;
			case 3:
				echo "Selesai";
				break;
			default:
				echo "Surat Ditolak";
		}
	}

	function cetak($surat, $nik, $id)
	{
		$view = array('ktp' => 'tbl_ktp', 'kk' => 'tbl_kk', 'sktm' => 'tbl_sktm', 'domisili' => 'tbl_domisili', 'pindah' => 'tbl_pindah', 'skck' => 'tbl_skck', 'kelahiran' => 'tbl_kelahiran', 'kematian' => 'tbl_kematian');
		$hasil = $this->m_crud->readBy($view[$surat], array('id' => $id, 'nik' => $nik))[0];
		$warga = $this->m_crud->readBy('tbl_warga', array('nik' => $nik))[0];

		$data['element'] = "<div style='padding-bottom:20px; margin-right:13%; width:400px;' class='pull-right'>";
		$data['element'] .= "<h4 class='text-center'><strong>PEMERINTAH KABUPATEN SIDOARJO</strong></h4>";
		$data['element'] .= "<h4 style='margin-top:-8px;' class='text-center'><strong>KECAMATAN WONOAYU</strong></h4>";
		$data['element'] .= "<h4 style='font-size:20px; margin-top:-8px; font-weight:bold;' class='text-center'>KANTOR Kelurahan Palmerah</h4>";
		$data['element'] .= "<h5 style='margin-top:-8px;' class='text-center'>Jl. Pagerjajar No.05 - Telp. 031-867146 Fax. 031-880880</h5>";
		$data['element'] .= "<h5 style='margin-top:-8px;' class='text-center'>SIDOARJO - 61261</h5>";
		$data['element'] .= "</div>";
		$data['element'] .= "<div style='padding-bottom:20px; width:3cm; margin-right:20px;' class='pull-right'>";
		$data['element'] .= "<img src='" . base_url("assets/img/home/home.png") . "' style='width:3cm;'>";
		$data['element'] .= "</div><br/><br/>";
		$data['element'] .= "<br/><br/>";
		$data['element'] .= "<br/><br/>";
		$data['element'] .= "<div class='col-md-12 text-center' style='border-top:3px solid black; padding-top:50px;'>";
		$judul = ($surat == 'tdkmampu') ? 'TIDAK MAMPU' : $surat;

		$data['element'] .= "<h5 style='text-transform:uppercase;'><strong>SURAT KETERANGAN " . $judul . "</strong></h5>";
		if ($surat == 'kelahiran') {
			$data['element'] .= "<h5 style='letter-spacing:1.5px;'><strong>Nomor: " . $hasil->id_kelahiran . "</strong></h5>";
		} elseif ($surat == 'kematian') {
			$data['element'] .= "<h5 style='letter-spacing:1.5px;'><strong>Nomor: " . $hasil->id_kematian . "</strong></h5>";
		} elseif ($surat == 'tdkmampu') {
			$data['element'] .= "<h5 style='letter-spacing:1.5px;'><strong>Nomor: " . $hasil->id_tdk_mampu . "</strong></h5>";
		} elseif ($surat == 'biodata') {
			$data['element'] .= "<h5 style='letter-spacing:1.5px;'><strong>Nomor: " . $hasil->id_biodata . "</strong></h5>";
		} elseif ($surat == 'umum') {
			$data['element'] .= "<h5 style='letter-spacing:1.5px;'><strong>Nomor: " . $hasil->id_umum . "</strong></h5>";
		} elseif ($surat == 'domisili') {
			$data['element'] .= "<h5 style='letter-spacing:1.5px;'><strong>Nomor: " . $hasil->id_domisili . "</strong></h5>";
		}

		$data['element'] .= "</div>";
		$data['element'] .= "<div class='col-md-12' style='margin-top:30px;'>";
		$data['element'] .= "<p>Saya yang bertanda di bawah ini selaku Kepala Kelurahan Palmerah, dengan ini menerangkan bahwa pada:</p>";

		if ($surat == 'kelahiran') {
			$data['judul'] = 'Cetak Kelahiran';
			$data['element'] .= '<table class="table table-borderless">';
			$data['element'] .= '<tbody>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<th style="width:20px;border:none;">Tanggal</th>';
			$data['element'] .= '<td style="border:none;">: ' . date("D, d M Y", strtotime($hasil->tgl_lahir)) . '</td>';
			$data['element'] .= '</tr>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<th style="width:20px;border:none;">Tempat</th>';
			$data['element'] .= '<td style="border:none;">: ' . $hasil->tempat_lahir . '</td>';
			$data['element'] .= '</tr>';
			$data['element'] .= '</tbody>';
			$data['element'] .= '</table>';

			$data['element'] .= '<table class="table table-borderless">';
			$data['element'] .= '<tbody>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<th style="width:200px;border:none;">Telah Lahir Seorang Anak</th>';
			$data['element'] .= '<td style="border:none;">: ' . ($hasil->jk == 'L' ? 'Laki-laki' : 'Perempuan') . '</td>';
			$data['element'] .= '</tr>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<th style="width:20px;border:none;">Yang bernama</th>';
			$data['element'] .= '<td style="border:none;">: ' . $hasil->anak . '</td>';
			$data['element'] .= '</tr>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<th style="width:20px;border:none;">Dari seorang Ibu</th>';
			$data['element'] .= '<td style="border:none;">: ' . $hasil->ibu . '</td>';
			$data['element'] .= '</tr>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<th style="width:20px;border:none;">Istri dari</th>';
			$data['element'] .= '<td style="border:none;">: ' . $hasil->ayah . '</td>';
			$data['element'] .= '</tr>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<th style="width:20px;border:none;">Alamat</th>';
			$data['element'] .= '<td style="border:none;">: Kelurahan Palmerah, RW ' . $hasil->rw . ', RT ' . $hasil->rt . '</td>';
			$data['element'] .= '</tr>';
			$data['element'] .= '</tbody>';
			$data['element'] .= '</table>';
		} elseif ($surat == 'kematian') {
			$data['judul'] = 'Cetak Kematian';

			$data['element'] .= '<table class="table table-borderless">';
			$data['element'] .= '<tbody>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<th style="width:120px;border:none;">Nama</th>';
			$data['element'] .= '<td style="border:none; text-transform:capitalize;">: ' . $hasil->mayit . '</td>';
			$data['element'] .= '</tr>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<tr>';
			// $data['element'] .= '<th style="width:120px;border:none;">NIK</th>';
			// $data['element'] .= '<td style="border:none; text-transform:capitalize;">: '.$hasil->nik_alm.'</td>';
			$data['element'] .= '</tr>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<th style="width:120px;border:none;">Jenis Kelamin</th>';
			$data['element'] .= '<td style="border:none;">: ' . ($hasil->jk == 'L' ? 'Laki-laki' : 'Perempuan') . '</td>';
			$data['element'] .= '</tr>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<th style="width:120px;border:none;">Tanggal Lahir</th>';
			$data['element'] .= '<td style="border:none; text-transform:capitalize;">: ' . $hasil->tgl_lahir . '</td>';
			$data['element'] .= '</tr>';
			$data['element'] .= '<tr>';
			// $data['element'] .= '<th style="width:120px;border:none;">Agama</th>';
			// $data['element'] .= '<td style="border:none; text-transform:capitalize;">: '.$hasil->agama.'</td>';
			// $data['element'] .= '</tr>';
			// $data['element'] .= '<tr>';
			// $data['element'] .= '<th style="width:120px;border:none;">Pekerjaan</th>';
			// $data['element'] .= '<td style="border:none; text-transform:capitalize;">: '.$hasil->pekerjaan.'</td>';
			// $data['element'] .= '</tr>';
			// $data['element'] .= '<tr>';
			// $data['element'] .= '<th style="width:120px;border:none;">Kewarganegaraan</th>';
			// $data['element'] .= '<td style="border:none; text-transform:uppercase;">: '.$hasil->kwn.'</td>';
			$data['element'] .= '</tr>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<th style="width:120px;border:none;">Alamat</th>';
			$data['element'] .= '<td style="border:none;">: ' . $hasil->alamat . '</td>';
			$data['element'] .= '</tr>';
			$data['element'] .= '</tbody>';
			$data['element'] .= '</table>';
			$data['element'] .= "<p>Telah meninggal pada:</p>";
			$data['element'] .= '<table class="table table-borderless">';
			$data['element'] .= '<tbody>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<th style="width:120px;border:none;">Tanggal</th>';
			$data['element'] .= '<td style="border:none;">: ' . date("D, d M Y", strtotime($hasil->tgl_meninggal)) . '</td>';
			$data['element'] .= '</tr>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<th style="width:120px;border:none;">Tempat</th>';
			$data['element'] .= '<td style="border:none;">: ' . $hasil->tempat_meninggal . '</td>';
			$data['element'] .= '</tr>';
			$data['element'] .= '<tr>';
			// $data['element'] .= '<th style="width:120px;border:none;">Penyebab</th>';
			// $data['element'] .= '<td style="border:none;">: '.$hasil->penyebab.'</td>';
			// $data['element'] .= '</tr>';
			// $data['element'] .= '<tr>';
			// $data['element'] .= '<th style="width:120px;border:none;">Penentu</th>';
			// $data['element'] .= '<td style="border:none;">: '.$hasil->penentu.'</td>';
			$data['element'] .= '</tr>';
			$data['element'] .= '</tbody>';
			$data['element'] .= '</table>';
		} elseif ($surat == "tdkmampu") {
			$data['judul'] = 'Cetak Tidak Mampu';

			$data['element'] .= '<table class="table table-borderless">';
			$data['element'] .= '<tbody>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<th style="width:120px;border:none;">Nama</th>';
			$data['element'] .= '<td style="border:none;">: ' . $hasil->nama_terkait . '</td>';
			$data['element'] .= '</tr>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<th style="width:120px;border:none;">Pekerjaan</th>';
			$data['element'] .= '<td style="border:none;">: ' . $hasil->pekerjaan . '</td>';
			$data['element'] .= '</tr>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<th style="width:120px;border:none;">Alamat</th>';
			$data['element'] .= '<td style="border:none;">: ' . $hasil->alamat . '</td>';
			$data['element'] .= '</tr>';
			// $data['element'] .= '<tr>';
			// $data['element'] .= '<th style="width:120px;border:none;">Tujuan</th>';
			// $data['element'] .= '<td style="border:none;">: '.$hasil->tujuan.'</td>';
			// $data['element'] .= '</tr>';
			$data['element'] .= '</tbody>';
			$data['element'] .= '</table>';
			$data['element'] .= "<p>Yang bersangkutan benar-benar warga Kelurahan Palmerah yang tidak mampu untuk melakukan pembayaran $hasil->tujuan.</p><br/>";
		} elseif ($surat == 'biodata') {
			$data['judul'] = 'Cetak Biodata';

			$data['element'] .= '<table class="table table-borderless">';
			$data['element'] .= '<tbody>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<th style="width:150px;border:none;">Kepala Keluarga</th>';
			$data['element'] .= '<td style="border:none;">: ' . $hasil->nama_kepala . '</td>';
			$data['element'] .= '</tr>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<th style="width:150px;border:none;">Alamat</th>';
			$data['element'] .= '<td style="border:none;">: ' . $hasil->alamat . '</td>';
			$data['element'] .= '</tr>';
			$data['element'] .= '</tbody>';
			$data['element'] .= '</table>';
			$data['element'] .= "<p>Yang bersangkutan benar-benar warga Kelurahan Palmerah yang memiliki anggota keluarga sebagai berikut:.</p><br/>";
			$data['element'] .= '<table class="table table-bordered">';
			$data['element'] .= '<tbody>';
			$data['element'] .= "
			<tr>
			<th>No</th>
			<th>Nama</th>
			<th>NIK</th>
			<th>JK</th>
			<th>TTL</th>
			<th>Hubungan</th>
			<th>Pendidikan</th>
			<th>Status Kawin</th>
			<th>Pekerjaan</th>
			</tr>
			";

			$anggota = json_decode($hasil->anggota);
			foreach ($anggota as $key => $value) {
				$no = $key + 1;
				$data['element'] .= "<tr>
				<td style='text-transform:capitalize;'>$no</td>
				<td style='text-transform:capitalize;'>$value->nama</td>
				<td style='text-transform:capitalize;'>$value->nik</td>
				<td style='text-transform:capitalize;'>" . ($value->jk == 'L' ? 'Laki-laki' : 'Perempuan') . "</td>
				<td style='text-transform:capitalize;'>$value->tempat, $value->tgl</td>
				<td style='text-transform:capitalize;'>$value->hubungan</td>
				<td style='text-transform:capitalize;'>$value->pendidikan</td>
				<td style='text-transform:capitalize;'>$value->kawin</td>
				<td style='text-transform:capitalize;'>$value->pekerjaan</td>
				</tr>";
			}

			$data['element'] .= '</tbody>';
			$data['element'] .= '</table>';
		} elseif ($surat == "umum") {
			$data['judul'] = 'Cetak Tidak Mampu';

			$data['element'] .= '<table class="table table-borderless">';
			$data['element'] .= '<tbody>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<th style="width:120px;border:none;">Nama</th>';
			$data['element'] .= '<td style="border:none;">: ' . $warga->nama . '</td>';
			$data['element'] .= '</tr>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<th style="width:120px;border:none;">NIK</th>';
			$data['element'] .= '<td style="border:none;">: ' . $hasil->nik . '</td>';
			$data['element'] .= '</tr>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<th style="width:120px;border:none;">Alamat</th>';
			$data['element'] .= '<td style="border:none;">: Dusun ' . DUSUN[$warga->rw] . ' RW' . $warga->rw . '/RT' . $warga->rt . '</td>';
			$data['element'] .= '</tr>';
			// $data['element'] .= '<tr>';
			// $data['element'] .= '<th style="width:120px;border:none;">Tujuan</th>';
			// $data['element'] .= '<td style="border:none;">: '.$hasil->tujuan.'</td>';
			// $data['element'] .= '</tr>';
			$data['element'] .= '</tbody>';
			$data['element'] .= '</table>';
			$data['element'] .= "<p>Yang bersangkutan benar-benar warga Kelurahan Palmerah sedang $hasil->tujuan.</p><br/>";
		} elseif ($surat == "domisili") {
			$data['judul'] = 'Cetak Domisili';

			$data['element'] .= '<table class="table table-borderless">';
			$data['element'] .= '<tbody>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<th style="width:120px;border:none;">NIK</th>';
			$data['element'] .= '<td style="border:none;">: ' . $warga->nik . '</td>';
			$data['element'] .= '</tr>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<th style="width:120px;border:none;">Nama</th>';
			$data['element'] .= '<td style="border:none;">: ' . $warga->name . '</td>';
			$data['element'] .= '</tr>';
			$data['element'] .= '<tr>';
			$data['element'] .= '<th style="width:120px;border:none;">Alamat</th>';
			$data['element'] .= '<td style="border:none;">: ' . DUSUN[$warga->rw] . ', RT' . $warga->rt . ' RW ' . $warga->rw . '</td>';
			$data['element'] .= '</tr>';
		}

		// $data['element'] .= "<p style='margin-top:-15px;'>Surat ini dibuat atas dasar yang sebenar-benarnya berdasarkan permohonan saudara/i $warga->nama ($hasil->nik)</p>";
		$data['element'] .= "<p style='margin-top:-15px;'>Demikian surat keterangan $judul ini dibuat untuk dapat digunakan sebagaimana semestinya.</p>";
		$data['element'] .= "</div>";
		$data['element'] .= '<div class="pull-right text-center" style="width: 250px; margin-top:20px; margin-right:50px; border-bottom:1px solid black;">';
		$data['element'] .= '<h5 for="">Jakarta, ' . date("d M Y") . '</h5>';
		$data['element'] .= '<h5 for="">Lurah Kelurahan Palmerah</h5>';
		$data['element'] .= "<div style='width:7cm; display:inline-block;'>";
		if ($hasil->qrcode_file != "") {
			$data['element'] .= "<img src='" . base_url($hasil->qrcode_file) . "' style='width:2cm; float:left;'>";
		}
		if ($hasil->ttd_file != "") {
			$data['element'] .= "<img src='" . base_url($hasil->ttd_file) . "' style='width:5cm; float:right;'>";
		} else {
			$data['element'] .= "<br/><br/>";
			$data['element'] .= "<br/><br/>";
		}
		$data['element'] .= "</div>";
		$data['element'] .= '<h5><strong>Khoirul Anam, S.T, M.H</strong></h5>';
		$data['element'] .= '</div>';
		$this->load->view('v_cetak', $data);
	}
	function detail($surat, $id)
	{
		$tbl = TABEL[$surat];
		$caption = CAPTION[$surat];
		$view = array('ktp' => 'detail_ktp', 'kk' => 'detail_kk', 'sktm' => 'detail_sktm', 'domisili' => 'detail_domisili', 'pindah' => 'detail_pindah', 'skck' => 'detail_skck', 'kelahiran' => 'detail_kelahiran', 'kematian' => 'detail_kematian');

		$title['judul'] = "Detail $caption";
		$title['active'] = 'surat';
		$title['menu'] = "layanan/status_layanan";

		$detail = $this->m_crud->readBy($tbl, array('id' => $id));
		$data['detail'] = $detail[0];
		$data['judul'] = $title['judul'];
		$data['dusun'] = DUSUN;
		$data['surat'] = $surat;

		$this->load->view('dashboard/templates/header', $title);
		$this->load->view('dashboard/templates/sidebar', $title);
		$this->load->view('dashboard/templates/topbar', $data);
		$this->load->view("user/surat/$view[$surat]", $data);
		$this->load->view('dashboard/templates/footer', $data);
	}
}
