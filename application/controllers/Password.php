<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Password extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			$this->load->model('Password_model', 'PasswordManager');
	}

	public function index()
	{
		redirect('home/');
	}

	public function forgot()
	{
		if($this->session->has_userdata('Id')){
			redirect('home/');
		}
		else{
			$this->layout->view('password/forgot');
			if(isset($_POST['change'])){
				$login = post($this->input->post('login'));
				$captcha = $this->input->post('g-recaptcha-response');
				$answer = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$this->config->item('private_key')."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
				if($answer['success'] == FALSE){
					show_msg('2', 'Captcha incorreto', site_url('password/forgot/'), '3');
				}
				elseif(empty($login)){
					show_msg('2', 'Campos vazios.', site_url('password/forgot/'), '3');
				}
				else{
					if($this->PasswordManager->check_login($login) != TRUE){
						show_msg('2', 'Conta inexistente.', site_url('password/forgot/'), '3');
					}
					else{
						show_msg('1', 'Passo confirmado, redirecionando para a próxima etapa...', site_url('password/change/'.$login), '3');
					}
				}
			}
		}
	}

	public function change($login)
	{
		$login = post($login);
		if(empty($login) || $this->PasswordManager->check_login($login) != TRUE){
			redirect('home/');
		}
		elseif($this->session->has_userdata('Id')){
			redirect('home/');
		}
		else{
			$data['account'] = $this->PasswordManager->get_info($login);
			$this->layout->view('password/change', $data);
			if(isset($_POST['change'])){
				$anwser = post($this->input->post('answer'));
				$pass = post($this->input->post('password'));
				$conf_pass = post($this->input->post('conf_password'));
				if(empty($answer) || empty($pass) || empty($conf_pass)){
					show_msg('2', 'Campo(s) vazio(s).', site_url('password/forgot/'), '3');
				}
				elseif($data['account']->SecretAnswer != $answer){
					show_msg('2', 'Resposta incorreta', site_url('password/forgot/'), '3');
				}
				elseif($pass != $conf_pass){
					show_msg('2', 'Senhas diferentes.', site_url('password/forgot/'), '3');
				}
				elseif($data['account']->PasswordHash == md5($pass)){
					show_msg('2', 'Senha incorreta.', site_url('password/forgot/'), '3');
				}
				elseif(strlen($pass) < 4 || strlen($pass) > 30){
					show_msg('2', 'Senha incorreta.', site_url('password/forgot/'), '3');
				}
				else{
					$this->PasswordManager->update_pass($data['account']->Id, md5($pass));
					$this->PasswordManager->update_logs('Alteração de senha', date('Y-m-d H:i:s'), $data['account']->Id, $data['account']->Nickname, $pass);
					show_msg('1', 'Senha alterada, aguarde o redirecionamento...', site_url('home/'), '3');
				}
			}
		}
	}
}