<?php

/**
 * undocumented class
 */
class Admin extends My_Controller
{
  function __construct()
  {
    parent :: __construct();
    
    $this->is_logged_in();
  }
  function index($slug="dashboard")
  {
    $data = array(
      'title' => 'Dashboard', 
      'blogs' => $this->logics->get_posts(),
      'newss' => $this->logics->get_news(),
    );
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar',$data);
    $this->load->view('admin/'.$slug,$data);
    $this->load->view('admin/footer',$data);
  }
}
