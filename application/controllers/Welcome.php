<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 * 
	 * 
	 */
	 
	function _construct()
	{
	    parent:: _construct();
	    
	    
	}
	public function index($slug='index')
	{
		$data = $this->db->where('slug', $slug)->get('pages')->row();
		if($data)
		{
			$data->popular_blog = $this->logics->get_posts('','date_add', 4,0);
			$this->load->view('includes/header', $data);
			if($slug=='index' && !isset($_SESSION['user_session_id']))
			{
					$this->load->view('templates/banner');
			}
			if(!isset($_SESSION['user_session_id']))
				{
						$_SESSION['user_session_id'] = rand(100000,999999);
				}
			$this->load->view('templates/navbar');
			$this->load->view('pages/'.$slug, $data);
			$this->load->view('templates/widgets');
			$this->load->view('includes/footer');
		}
		else
		{
			show_404();
		}
	}

	function show_blog($slug='')
	{
		$data = $this->db->where('slug', $slug)->get('posts')->row();
		if($data)
		{
			$data->popular_blog = $this->logics->get_posts('','date_add', 4,0);
			$this->load->view('includes/header', $data);
			$this->load->view('templates/navbar');
			$this->load->view('pages/blog-single', $data);
			$this->load->view('templates/widgets');
			$this->load->view('includes/footer');
		}
		else
		{
			show_404();
		}
	}
}
