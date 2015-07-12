<?php
if ( PHP_SAPI !== 'cli' ) exit('No web access allowed');

class Migrate extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('migration');
  }

  public function index()
  {
//    $this->migration->version(1);
    $this->migration->current();
  }
}