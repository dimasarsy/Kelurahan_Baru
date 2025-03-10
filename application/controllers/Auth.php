<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Kelurahan Palmerah | Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            // validasinya success
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // jika usernya ada
        if ($user) {

            // cek password
            if (password_verify($password, $user['password'])) {
                $data = [
                    'name' => $user['name'],
                    'nik' => $user['nik'],
                    'image' => $user['image'],
                    'email' => $user['email'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                if ($user['role_id'] == 1) {
                    redirect('dashboard');
                } else {
                    redirect('Home');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('auth');
        }
    }

    public function registration()
    {

        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');



        if ($this->form_validation->run() == false) {
            $data['title'] = 'Kelurahan Palmerah | Register';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/register');
            $this->load->view('templates/auth_footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nik' => $this->input->post('nik', true),
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'status' => 0,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);

            $data = [
                'nik' => $this->input->post('nik', true),
                'name' => htmlspecialchars($this->input->post('name', true)),
                'image' => 'default.jpg',

            ];
            $this->db->insert('tbl_warga', $data);

            // $this->db->insert('user_token', $user_token);

            // $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please activate your account</div>');
            redirect('auth');
        }
    }

    public function regis_admin()
    {

        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');



        if ($this->form_validation->run() == false) {
            $this->load->view('dashboard/templates/header', $title);
            $this->load->view('dashboard/templates/sidebar_admin.php', $data);
            $this->load->view('dashboard/templates/topbar', $data);
            $this->load->view('dashboard/user/view_users.php', $data);
            $this->load->view('dashboard/templates/footer', $data);
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nik' => $this->input->post('nik', true),
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'status' => 0,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);

            $data = [
                'nik' => $this->input->post('nik', true),
                'name' => htmlspecialchars($this->input->post('name', true)),
                'image' => 'default.jpg',

            ];
            $this->db->insert('tbl_warga', $data);

            // $this->db->insert('user_token', $user_token);

            // $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please activate your account</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('auth');
    }
}
