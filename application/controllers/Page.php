<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			$this->load->model('Page_model', 'PageManager');
			$this->load->helper('guild');
			$this->load->helper('player');	
	}

	public function guild($id)
	{
		$id = post($id);
		if(empty($id) || !is_numeric($id) || $id <= 0 || $this->PageManager->check_guild($id) != TRUE){
			redirect('home/');
		}
		else{
			$data['guild'] = $this->PageManager->get_info_guild($id);
			$data['members'] = $this->PageManager->get_guild_members($id);
			$data['menor'] = $this->PageManager->get_info_menor($id);
			$this->layout->view('page/guild', $data);
		}
	}

	public function character($id)
	{
		$id = post($id);
		if(empty($id) || !is_numeric($id) || $id <= 0 || $this->PageManager->check_player($id) != TRUE){
			redirect('home/');
		}
		else{
			$data['player'] = $this->PageManager->get_info_player($id);
			$data['spells'] = $this->PageManager->get_spells_player($id);
			if($this->PageManager->player_has_guild($id) == TRUE){
				$data['guild'] = $this->PageManager->get_info_guild($this->PageManager->get_info_guild_members($id)->GuildId);
			}
			if($this->session->has_userdata('Id')){
				$data['account'] = $this->PageManager->get_info($this->session->userdata('Id'));
			}
			$this->layout->view('page/character', $data);
			if(isset($_POST['view_armor'])){
				if($data['player']->cms_view_armor == '0'){
					$this->PageManager->change_view_armor($data['player']->Id, '1');
				}
				else{
					$this->PageManager->change_view_armor($data['player']->Id, '0');
				}
				show_msg('1', 'Privacidade alterada, aguarde o redirecionamento...', site_url('page/character/'.$data['player']->Id), '3');
			}
			if(isset($_POST['message'])){
				$content = post(nl2br($this->input->post('content')));
				if(empty($content) || strlen($content) < '10'){
					show_msg('2', 'Campos vazios ou incorretos.', site_url('page/character/'.$data['player']->Id), '3');
				}
				else{
					$this->PageManager->change_message($data['player']->Id, $content);
					show_msg('1', 'Mensagem alterada, aguarde o redirecionamento...', site_url('page/character/'.$data['player']->Id), '3');
				}
			}
		}
	}
}
