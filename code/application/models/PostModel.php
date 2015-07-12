<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PostModel extends CI_Model
{
  public function __construct()
  {
    $this->load->database();
  }

  public function get_post($slug = FALSE)
  {
    if ($slug === FALSE)
    {
      $query = $this->db->get('posts');
      return $query->result_array();
    }
    else
    {
      $sql = array('slug' => $slug);
      $query = $this->db->get_where('posts', $sql);
      return $query->row_array();
    }

  }

  public function add_post($author)
  {
    $slug = rawurlencode($this->input->post('title'));

    $sql = array(
        'author' => $author,
        'title' => $this->input->post('title'),
        'slug' => $slug,
        'content' => $this->input->post('content')
      );

    $this->db->insert('posts', $sql);
  }

  public function edit_post($data)
  {
    $this->db->where('slug', $data['slug']);
    $result = $this->db->update('posts', $data);
    return $result;
  }

  public function delete_post($slug)
  {
    $this->db->where('slug', $slug);
    $result = $this->db->delete('posts');
    return $result;
  }
}