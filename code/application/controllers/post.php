<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('PostModel');
    $this->load->library('form_validation');
    $this->load->library('session');

    if (isset($this->session->userdata['logged_in']))
    {
      $this->load->view('top_menu_logged_view');
    }
    else
    {
      $this->load->view('top_menu_view');
    }
  }

  public function index()
  {
    redirect('/');
  }

  public function create()
  {
    if (!isset($this->session->userdata['logged_in']))
    {
      redirect('user/login');
 //     $this->load->view('form_new_post_view.php');
    }
    if ($this->input->post())
    {
      $this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[1]|max_length[100]');
      $this->form_validation->set_rules('content', 'Content', 'required');

      if ($this->form_validation->run() === FALSE)
      {
        $this->load->view('form_new_post_view.php');
      }

      else
      {
        $username = $this->session->userdata['username'];
        $this->PostModel->add_post($username);
        $msg['msg'] = 'Post created!';
        $this->load->view('message_success_view.php', $msg);
      }

    }
    else
    {
      $this->load->view('form_new_post_view.php');
    }
  }

  public function edit($slug=FALSE)
  {
    if ($this->input->post())
    {
      $data = $this->input->post();
      unset($data['submit']);
      $data['content'] = $data['content'];

      $result = $this->PostModel->edit_post($data);
      
      if ($result)
      {
        $data['post'] = $this->PostModel->get_post($slug);
        redirect("post/$slug");
      }
    }

    else
    {
      $data['post'] = $this->PostModel->get_post($slug);

      if (isset($this->session->userdata['logged_in']))
      {
        if ($this->session->userdata['username'] == $data['post']['author'])
        {
          $this->load->view('form_edit_post_view', $data);
        }
      }

      else
      {
        redirect("post/$slug");
      }
      
    }
  }

  public function delete($slug)
  {
    if (isset($this->session->userdata['logged_in']))
    {
      $data['post'] = $this->PostModel->get_post($slug);

      if ($this->session->userdata['username'] == $data['post']['author'])
      {
        if ($this->PostModel->delete_post($slug))
        {
          $msg['msg'] = 'Post deleted!';
          $this->load->view('message_success_view.php', $msg);
        }
      }
    }
    
    redirect("post/$slug");
  }  
}