<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Points extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			$this->load->model('Points_model', 'PointsManager');
			$this->load->helper('points');
	}

	public function index()
	{
		redirect('home/');
	}

	public function vote()
	{
		if($this->session->has_userdata('Id')){
			$data['account'] = $this->PointsManager->get_info($this->session->userdata('Id'));
			$data['bonus'] = $this->config->item('points_per_vote');
			$data['points_after'] = $data['account']->Tokens + $data['bonus'];
		}
		else{
			$data = array();
		}
		$this->layout->view('points/vote', $data);
		if(isset($_POST['vote'])){
			if($this->session->has_userdata('Id')){
				$current_ip = $this->input->server('REMOTE_ADDR');
				$date = time();
				$time_vote_account = ($date - $data['account']->cms_heurevote) / 60;
				if($this->PointsManager->check_ip($current_ip) == TRUE){
					$data['cms_ip'] = $this->PointsManager->get_info_ip($current_ip);
					$time_vote = ($date - $data['cms_ip']->heurevote) / 60;
					if($time_vote > (60 * $this->config->item('time_vote'))){
						$this->PointsManager->accept_vote($current_ip, $date);
						$this->PointsManager->add_vote($data['account']->Id, $data['account']->cms_votes + 1, $data['points_after'], $date);
						show_msg('1', 'Voto aceito, aguarde o redirecionamento...', $this->config->item('link_vote'), '3');
					}
					else{
						$time_out = round((60 * $this->config->item('time_vote')) - $time_vote, 0);
						show_msg('2', 'Você deve esperar '.$time_out.' minutos antes de votar.', site_url('points/vote'), '3');
					}
				}
				elseif($time_vote_account < (60 * $this->config->item('time_vote'))){
					$time_out = round((60 * $this->config->item('time_vote')) - $time_vote, 0);
					show_msg('2', 'Você deve esperar '.$time_out.' minutos antes de votar.', site_url('points/vote'), '3');
				}
				else{
					$this->PointsManager->add_vote_ip($current_ip, $date);
					show_msg('1', 'Voto aceito, aguarde o redirecionamento...', site_url('points/vote'), '3');
				}
			}
			else{
				show_msg('1', 'Voto aceito, aguarde o redirecionamento... Você não está logado, não serão contados os pontos'.$this->config->item('name_point'), $this->config->item('link_vote'), '3');
			}
		}
	}

	public function buy()
	{
		if(!$this->session->has_userdata('Id')){
			redirect('home/');
		}
		else{
			$data['account'] = $this->PointsManager->get_info($this->session->userdata('Id'));
			$data['bonus'] = $this->config->item('points_per_buy');
			$data['points_after'] = $data['account']->Tokens + $data['bonus'];
			$this->layout->view('points/buy', $data);
			if(isset($_POST['buy'])){
				$code = post($this->input->post('code'));
				if(empty($code)){
					show_msg('2', 'Campos vazios.', site_url('points/buy'), '3');
				}
				elseif(strlen($code) != 8){
					show_msg('2', 'Código incorreto.', site_url('points/buy'), '3');
				}
				else{
					if(check_code($this->config->item('starpass_id'), $this->config->item('starpass_idp'), $code) != TRUE){
						show_msg('2', 'Código incorreto.', site_url('points/buy'), '3');
					}
					else{
						$this->PointsManager->add_points($data['account']->Id, $data['account']->cms_votes, $data['points_after']);
						$this->PointsManager->add_logs('Compra de pontos', date('Y-m-d H:i:s'), $data['account']->Id, $data['account']->Nickname, $code);
						show_msg('1', 'Código aceito, conta creditada. Redirecionado...', site_url('home/'), '3');
					}
				}
			}
		}
	}

	public function script()
	{
		$this->load->view('points/script');
	}
}