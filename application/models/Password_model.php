<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Password_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function check_login($login)
    {
    	$query = $this->db->select('*')
    					  ->from('accounts')
    					  ->where('Login', $login)
    					  ->get();
    	if($query->num_rows() > 0){
    		return TRUE;
    	}
    }

    public function get_info($login)
    {
    	return $this->db->select('*')
    					->from('accounts')
    					->where('Login', $login)
    					->get()
    					->first_row();
    }

    public function update_pass($guid, $pass)
    {
    	$data = array(
    		'PasswordHash' => $pass,
    	);
    	return $this->db->where('Id', $guid)
    					->update('accounts', $data);
    }

    public function update_log($type, $date, $p0, $p1, $p2)
    {
    	$data = array(
    		'type' => $type,
    		'date' => $date,
    		'param0' => $p0,
    		'param1' => $p1,
    		'param2' => $p2,
    	);
    	return $this->db->insert('cms_logs', $data);
    }
}