<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model
{
  public function __construct()
  {
    $this->load->database();
  }

  public function add_user()
  {
    $sql = array(
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password'),
      );
    $this->db->insert('users', $sql);
  }

  public function if_user_exists($username)
  {
    $sql = array('username' => $username);
    $query = $this->db->get_where('users', $sql);
    return $query->row_array();
  }

  public function login($usr, $pwd)
  {
    $sql = array(
        'username' => $usr,
        'password' => $pwd
      );

    $query = $this->db->get_where('users', $sql);
    return $query->num_rows();
  }
}