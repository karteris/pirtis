<?php
class Adm_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

     public function getContactCount(){
		$contactCount = $this->db->query('SELECT count(*) as count FROM buyer');
		$result = $contactCount->result_array();
		return $result[0]['count'];
    }
	
	function getContact ($limit='10'){

       $result = $this->db->query('
            select
				name, 
				city, 
				phone
            from buyer
            LIMIT '.$limit.'
       ');

       return $result->result_array();  
    }
	
	function getSearchResult ($name){

       $result = $this->db->query("
            select
				name, 
				city, 
				phone
            from buyer
            where UPPER(name) like '%".strtoupper($name)."%'"
       );

       return $result->result_array();
    }
}