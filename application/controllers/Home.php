<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function Home()
    {        
        parent::__construct();   
		$this->lang->load('lt', 'lt'); 		
		$this->load->model('home_model', 'home_model');
    }
    
    function index(){
        $this->home_page();
    }
        
    function home_page (){
		$this->load->view('header_view'); 
		$this->load->view('slide_view');
		$this->load->view('body_view');
		$this->load->view('processing_view');
		$this->load->view('materials_view');
		$this->load->view('about_my_view');
		$this->load->view('gallery_view');
		$this->load->view('contact_view');
		$this->load->view('footer_view');   		
    }
	
	function saveContact (){
		$data['name'] = $_POST['name'];
        $data['city'] = $_POST['city'];
        $data['phone'] = $_POST['phone'];
		$this->home_model->insertContactForm($data);
		
		//redirect(base_url().'paysera/paysera/index', 'refresh');
		$this->index();
    }
	
	
}
