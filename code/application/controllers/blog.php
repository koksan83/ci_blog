<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('PostModel');

    if (isset($this->session->userdata['logged_in']))
    {

      $this->load->view('top_menu_logged_view');
    }
    else
    {
      $this->load->view('top_menu_view');
    }
  }

  public function index($slug = FALSE)
  {
     $data['posts'] = $this->PostModel->get_post();
     $this->load->view('blog_view', $data);
  }

  public function post($slug = FALSE)
  {
    if ($slug !==FALSE)
    {
      $result = $data['post'] = $this->PostModel->get_post($slug);

      if (count($result) > 0)
      {
        $this->load->view('post_view', $data);
      }

      else
      {
        redirect('/');
      }
      
    }
  }
}