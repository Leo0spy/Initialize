<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Layout
{
	private $CI;
	private $data = array();
/*
|===============================================================================
| Constructeur
|===============================================================================
*/
	public function __construct()
	{
		$this->CI = get_instance();
		$this->CI->load->helper('assets');
		$this->data['output'] = '';
	}
	
/*
|===============================================================================
| Méthodes pour charger les vues
|	. view
|	. views
|===============================================================================
*/
	public function view($name, $data = array())
	{
		$this->data['output'] .= $this->CI->load->view($name, $data, true);
		$this->CI->load->view('../layout/layout', array('output' => $this->data['output']));
	}
	
	public function views($name, $data = array())
	{
		$this->data['output'] .= $this->CI->load->view($name, $data, true);
		return $this;
	}
}

