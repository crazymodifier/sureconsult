<?php

/**
 * undocumented class
 */
class Login extends My_Controller
{
  function index()
  {
    $data = array(
      'title' => 'Login', 
    );
    $this->load->view('includes/header',$data);
    $this->load->view('pages/login',$data);
    $this->load->view('includes/footer',$data);
  }

  function login_me()
  {
    if($this->input->post('username') == 'admin@example.com' && $this->input->post('password') == 'admin@123')
    {
      $this->session->set_userdata('logged_in', TRUE);
      redirect('admin/dashboard');
    }
    else{
      $this->index();
    }
  }
}
