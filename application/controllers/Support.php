<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Support extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			$this->load->model('Support_model', 'SupportManager');
			$this->load->helper('support');
	}

	public function index()
	{
		redirect('home/');
	}

	public function faq()
	{
		$this->layout->view('support/faq');
	}

	public function ticket()
	{
		if(!$this->session->has_userdata('Id')){
			redirect('home/');
		}
		else{
			$data['account'] = $this->SupportManager->get_info($this->session->userdata('Id'));
			$data['tickets_o'] = $this->SupportManager->get_tickets_open($data['account']->Id);
			$data['tickets_c'] = $this->SupportManager->get_tickets_close($data['account']->Id);
			$this->layout->view('support/ticket', $data);
		}
	}

	public function post()
	{
		if(!$this->session->has_userdata('Id')){
			redirect('home/');
		}
		else{
			$data['account'] = $this->SupportManager->get_info($this->session->userdata('Id'));
			$this->layout->view('support/new', $data);
			if(isset($_POST['post'])){
				$title = post($this->input->post('title'));
				$content = post(nl2br($this->input->post('content')));
				if(empty($title) || empty($title)){
					show_msg('2', 'Campos vazios.', site_url('support/post'), '3');
				}
				elseif(strlen($title) < 5 || strlen($title) > 50){
					show_msg('2', 'O comprimento do seu título está incorreto.', site_url('support/post'), '3');
				}
				elseif(strlen($content) < 10){
					show_msg('2', 'O comprimento do seu problema está incorreto.', site_url('support/post'), '3');
				}
				else{
					$this->SupportManager->add_ticket($title, date('Y-m-d'), $data['account']->Id, post($this->input->post('label')), $content);
					show_msg('1', 'Ticket postado, aguarde o redirecionamento...', site_url('support/ticket'), '3');
				}
			}
		}
	}

	public function view($id)
	{
		$id = post($id);
		if(!$this->session->has_userdata('Id') || empty($id) || !is_numeric($id) || $this->SupportManager->check_ticket($id) != TRUE){
			redirect('home/');
		}
		else{
			$data['account'] = $this->SupportManager->get_info($this->session->userdata('Id'));
			$data['ticket'] = $this->SupportManager->get_info_ticket($id);
			if($data['account']->Id != $data['ticket']->author){
				redirect('support/ticket');
			}
			else{
				$data['answers'] = $this->SupportManager->get_answers($id);
				$this->layout->view('support/view', $data);
				if(isset($_POST['post'])){
					$content = post(nl2br($this->input->post('content')));
					if(empty($content)){
						show_msg('2', 'Campos vazios.', site_url('support/view/'.$data['ticket']->id), '3');
					}
					elseif(strlen($content) < 10){
						show_msg('2', 'O comprimento da sua resposta está incorreta', site_url('support/view/'.$data['ticket']->id), '3');
					}
					else{
						$this->SupportManager->add_answer($data['ticket']->id, $content, date('Y-m-d'), $data['account']->Id);
						show_msg('1', 'Resposta enviada, aguarde o redirecionamento...', site_url('support/view/'.$data['ticket']->id), '3');
					}
				}
				if(isset($_POST['close'])){
					$this->SupportManager->close_ticket($data['ticket']->id);
					show_msg('1', 'Ticket fechado, aguarde o redirecionamento...', site_url('support/ticket'), '3');
				}
			}
		}
	}

	public function bugtracker()
	{
		if($this->session->has_userdata('Id')){
			$data['account'] = $this->SupportManager->get_info($this->session->userdata('Id'));
		}
		else{
			$data = array();
		}
		$data['bugtrackers'] = $this->SupportManager->get_bugtrackers();
		$this->layout->view('support/bugtracker', $data);
		foreach($data['bugtrackers'] as $bugtracker){
			if(isset($_POST['vote'])){
				if(!$this->session->has_userdata('Id')){
					redirect('home/');
				}
				else{
					$this->SupportManager->add_vote($bugtracker->id, $bugtracker->vote_account.$data['account']->Id.'|', $bugtracker->vote + 1);
					show_msg('1', 'Vote accepté, redirection en cours...', site_url('support/bugtracker'), '3');
				}
			}
		}
		if(isset($_POST['post'])){
			if(!$this->session->has_userdata('Id')){
				redirect('home/');
			}
			else{
				$title = post($this->input->post('title'));
				$content = post(nl2br($this->input->post('content')));
				if(empty($title) || empty($content)){
					show_msg('2', 'Campos vazios.', site_url('support/bugtracker'), '3');
				}
				elseif(strlen($title) > 50 || strlen($title) < 5){
					show_msg('2', 'O comprimento do seu título está incorreto.', site_url('support/bugtracker'), '3');
				}
				elseif(strlen($content) < 10){
					show_msg('2', 'O comprimento do seu problema está incorreto.', site_url('support/bugtracker'), '3');
				}
				else{
					$this->SupportManager->add_bugtracker($data['account']->Id, $title, $data['account']->Id.'|', $content);
					show_msg('1', 'Bug postado, aguarde o redirecionamento...', site_url('support/bugtracker'), '3');
				}
			}
		}
	}
}