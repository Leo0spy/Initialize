<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ladder extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			$this->load->model('Ladder_model', 'LadderManager');
			$this->load->helper('ladder');
			$this->load->helper('player');
			$this->load->helper('guild');
	}

	public function index()
	{
		$this->pvm();
	}

	public function pvm()
	{
		$data['pvm'] = $this->LadderManager->pvm($this->config->item('limit_ladder'));
		$this->layout->view('ladder/pvm', $data);
	}

	public function pvp()
	{
		$data['pvp'] = $this->LadderManager->pvp($this->config->item('limit_ladder'));
		$this->layout->view('ladder/pvp', $data);
	}

	public function guild()
	{
		if($this->config->item('ladder_guilds') == FALSE){
			redirect('ladder/');
		}
		else{
			$data['guilds'] = $this->LadderManager->guild($this->config->item('limit_ladder'));
			$this->layout->view('ladder/guild', $data);
		}
	}


	public function vote()
	{
		$data['vote'] = $this->LadderManager->vote($this->config->item('limit_ladder'));
		$this->layout->view('ladder/vote', $data);
	}
}