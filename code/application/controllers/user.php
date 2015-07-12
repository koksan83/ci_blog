<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('UserModel');
    $this->load->library('form_validation');
    $this->load->library('session');
  }


  public function index()
  {
    echo 'Todo: Add functionality to show all posts by a user';
  }

  public function register()
  {
    $this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[20]|xss_clean');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[20]|matches[password_cfm]');
    $this->form_validation->set_rules('password_cfm', 'Password Confirmation');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('form_register_view.php');
    }

    else
    {
      $this->UserModel->add_user();
      $msg['msg'] = 'User registered!';
      $this->load->view('message_success_view.php', $msg);
    }
  }

  public function login()
  {
    if ($this->input->post() === FALSE)
    {
      $this->load->view('form_login_view.php');
    }

    else
    {
      $this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[20]|xss_clean');
      $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[20]');

      if ($this->form_validation->run() === FALSE)
      {
        $this->load->view('form_login_view');
      }
      else
      {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $login_result = $this->UserModel->login($username, $password);

        if ($login_result > 0)
        {
          $session_data = array(
              'username' => $username,
              'logged_in' => TRUE
            );
          $this->session->set_userdata($session_data);
          redirect('/');
        }
        else
        {
          redirect('user/login');
        }
      }
    }
  }

  public function logout()
  {
    $session_data = array(
        'username' => '',
        'logged_in' => FALSE
      );

    $this->session->unset_userdata($session_data);
    $this->session->sess_destroy();
    redirect('/');
  }



}