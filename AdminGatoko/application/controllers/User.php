<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
    }

    public function index()
    {
        if (($this->session->userdata('user_name') != "")) {
            $this->welcome();
        } else {
//             echo "lol";
            $data['title'] = 'Home';
            $this->load->view('header.php', $data);
            $this->load->view("home.php", $data);
            // $this->load->view('footer_view.php',$data);
        }
    }

    public function welcome()
    {

//         echo "lolol";
        $data['title'] = 'Welcome';

        $this->load->view('header_admin.php', $data);
        $this->load->view('home.php', $data);

    }

    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $result = $this->User_model->login($email, $password);
        if ($result) $this->welcome();
        else        $this->index();
    }

    public function thank()
    {
        $data['title'] = 'Thank';
        $this->load->view('header_view', $data);
        $this->load->view('thank_view.php', $data);
        $this->load->view('footer_view', $data);
    }

    public function registration()
    {
        $this->load->library('form_validation');
        // field name, error message, validation rules
        $this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
        $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $this->User_model->add_user();
            $this->thank();
        }
    }

    public function logout()
    {
        // $newdata = array(
        // 'user_id'   =>'',
        // 'user_name'  =>'',
        // 'user_email'     => '',
        // 'logged_in' => FALSE,
        // );
        // $this->session->unset_userdata($newdata );
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function profil(){
//        $this->User_model->getProfil("100103");
        $this->load->view('header_admin.php');
        $this->load->view('prof.php');
    }
}

?>
  
