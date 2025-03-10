<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_user();
        $this->load->library('form_validation');
        $this->load->model('m_crud');
    }

    public function index()
    {
        $this->load->model('m_crud');

        $data['title'] = 'My Profile';
        $data['judul'] = 'My Profile';
        $data['warga'] = $this->m_crud->readBy('tbl_warga', ['nik' => $this->session->userdata('nik')])[0];

        $this->load->view('dashboard/templates/header', $data);
        $this->load->view('dashboard/templates/sidebar', $data);
        $this->load->view('dashboard/templates/topbar', $data);
        $this->load->view('User/profil/index', $data);
        $this->load->view('dashboard/templates/footer', $data);
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['judul'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('dashboard/templates/header', $data);
            $this->load->view('dashboard/templates/sidebar', $data);
            $this->load->view('dashboard/templates/topbar', $data);
            $this->load->view('User/profil/edit', $data);
            $this->load->view('dashboard/templates/footer', $data);
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('user');
        }
    }

    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['judul'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('dashboard/templates/header', $data);
            $this->load->view('dashboard/templates/sidebar', $data);
            $this->load->view('dashboard/templates/topbar', $data);
            $this->load->view('User/profil/changepassword', $data);
            $this->load->view('dashboard/templates/footer', $data);
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                    redirect('user/changepassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password changed!</div>');
                    redirect('user/changepassword');
                }
            }
        }
    }

    function profil()
    {

        is_user();

        $data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
        $data['warga'] = $this->m_crud->readBy('tbl_warga', ['nik' => $this->session->userdata('nik')])[0];
        $data['judul'] = 'Surat KTP';

        $data['d_jk'] = JK;
        $data['d_goldar'] = GOLDAR;
        $data['d_agama'] = AGAMA;
        $data['d_pendidikan'] = PENDIDIKAN;
        $data['d_pekerjaan'] = PEKERJAAN;
        $data['d_rw'] = DUSUN;

        $this->load->view('dashboard/templates/header', $data);
        $this->load->view('dashboard/templates/sidebar', $data);
        $this->load->view('dashboard/templates/topbar', $data);
        $this->load->view('user/profil/edit_profil', $data);
        $this->load->view('dashboard/templates/footer', $data);
    }

    function edit_profil()
    {

        $data['title'] = 'Change Profil';
        $data['judul'] = 'Change Profil';
        $data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();

        $default_img = "default.jpg";
        $nik = $this->session->userdata('nik');

        $config['upload_path']   = "./assets/img/profile/";
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']      = 2048;

        $data = array(
            'name' => $this->input->post('name'),
            'no_telp' => $this->input->post('no_telp'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jk' => $this->input->post('jk'),
            'goldar' => $this->input->post('goldar'),
            'pendidikan' => $this->input->post('pendidikan'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'agama' => $this->input->post('agama'),
            'kawin' => $this->input->post('kawin'),
            'alamat' => $this->input->post('alamat'),
            'rw' => $this->input->post('rw'),
            'rt' => $this->input->post('rt'),
        );

        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/img/profile/';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('image')) {
                $old_image = $data['user']['image'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/profile/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                var_dump($this->upload->display_errors());
            }
        }

        $upload_file_ktp = $_FILES['ktp_file']['name'];

        if ($upload_file_ktp) {
            $config['allowed_types'] = 'gif|jpg|png|pdf';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/img/profile/';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('ktp_file')) {
                $old_file = $data['tbl_warga']['ktp_file'];
                if ($old_file != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/profile/' . $old_file);
                }
                $new_file = $this->upload->data('file_name');
                $this->db->set('ktp_file', $new_file);
            } else {
                var_dump($this->upload->display_errors());
            }
        }
        $upload_file_kk = $_FILES['kk_file']['name'];

        if ($upload_file_kk) {
            $config['allowed_types'] = 'gif|jpg|png|pdf';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/img/profile/';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('kk_file')) {
                $old_file = $data['tbl_warga']['kk_file'];
                if ($old_file != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/profile/' . $old_file);
                }
                $new_file = $this->upload->data('file_name');
                $this->db->set('kk_file', $new_file);
            } else {
                var_dump($this->upload->display_errors());
            }
        }


        $this->db->set($data);
        $this->db->where('nik', $nik);
        $this->db->update('tbl_warga');

        $data = [
            'name' => $this->input->post('name'),
        ];
        $this->db->set($data);
        $this->db->where('nik', $nik);
        $this->db->update('user');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data has been changed</div>');
        redirect('user');
    }
}
