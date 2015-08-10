<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			$this->load->model('Home_model', 'HomeManager');
	}

	public function index()
	{
		$data['sliders'] = $this->HomeManager->sliders();
		$data['screenshots'] = $this->HomeManager->screenshots();
		$this->layout->view('home/home', $data);
	}

	public function join()
	{
		$data['screenshots'] = $this->HomeManager->screenshots();
		$this->layout->view('home/join', $data);
	}

	public function staff()
	{
		$data['staffs'] = $this->HomeManager->staff();
		$this->layout->view('home/staff', $data);
	}

	public function cgu()
	{
		$this->layout->view('home/cgu');
	}
}
