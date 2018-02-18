<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm extends CI_Controller {
    function Adm()
    {        
        parent::__construct();   
		$this->lang->load('lt', 'lt'); 		
		$this->load->model('adm_model', 'adm_model');
    }
    
    public function index(){	   
		$contactCount = $this->adm_model->getContactCount();
		$config = $this->paginationConfigInicialize('lt', $contactCount);
		
		
		if ( (strlen($this->uri->segment(2))>0) ){
			$page = (int)($this->uri->segment(2, 0));
		}
		else {
			$page = 0;
		}
		
		$contacts = $this->adm_model->getContact($page.' , '.$config['per_page']);
		$data['contacts'] = $contacts;
		$this->load->view('adm_view', $data);
    }
	
	public function searchContact(){
		$name = $_POST['name'];
		$searchResult = $this->adm_model->getSearchResult($name);
		$data['contacts'] = $searchResult;
		$this->load->view('adm_view', $data);
	}
	
	function paginationConfigInicialize($lang, $count){
		$config['base_url'] = base_url().'adm';
		$config['total_rows'] = $count;
		$config['per_page'] = '1'; // buvo 21

		$config['full_tag_open'] = '<p class="puslapiai">';
		$config['full_tag_close'] = '</p>';

		$config['first_link'] = $this->lang->line('pagination_pirmas');
		$config['first_tag_open'] = '<b class="pslNr">';
		$config['first_tag_close'] = '</b>';

		$config['last_link'] = $this->lang->line('pagination_paskutinis');
		$config['last_tag_open'] = '<b class="pslNr">';
		$config['last_tag_close'] = '</b>';

		$config['next_link'] = $this->lang->line('pagination_toliau');
		$config['next_tag_open'] = '<b class="pslNr">';
		$config['next_tag_close'] = '</b>';

		$config['prev_link'] = $this->lang->line('pagination_atgal');
		$config['prev_tag_open'] = '<b class="pslNr">';
		$config['prev_tag_close'] = '</b>';

		$config['cur_tag_open'] = '<b class="dabartinisPsl">';
		$config['cur_tag_close'] = '</b>';

		$config['num_tag_open'] = '<b class="pslNr">';
		$config['num_tag_close'] = '</b>';

		$this->pagination->initialize($config);

		return $config;
    }
}
