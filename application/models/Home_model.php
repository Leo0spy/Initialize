<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function screenshots()
    {
    	return $this->db->select('*')
    					->from('cms_screenshots')
    					->order_by('id', 'ASC')
    					->limit(5)
    					->get()
    					->result();
    }

    public function sliders()
    {
    	return $this->db->select('*')
    					->from('cms_sliders')
    					->order_by('id', 'ASC')
    					->get()
    					->result();
    }

    public function staff()
    {
    	return $this->db->select('*')
    					->from('cms_staff')
    					->order_by('id', 'ASC')
    					->get()
    					->result();
    }
}