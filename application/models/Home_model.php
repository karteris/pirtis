<?php
class Home_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function insertContactForm($data){
        $this->db->query("INSERT INTO buyer (name, city, phone)
                          VALUES (
								  '" . $data['name'] . "',
                                  '" . $data['city'] . "',
                                  '" . $data['phone'] . "'
								  )
						");

		            			
    }
}