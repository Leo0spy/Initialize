<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			$this->load->model('User_model', 'UserManager');
			$this->load->helper('user');
	}

	public function index()
	{
		redirect('home/');
	}

	public function login()
	{
	if($this->session->has_userdata('Id')){
		redirect('home/');
	}
	else{
		$this->layout->view('user/login');
		if(isset($_POST['connect'])){
			$login = post($this->input->post('login'));
			$pass = md5(post($this->input->post('password')));
			if(!empty($login) && !empty($pass)){
				if($this->UserManager->account_exist($login, $pass) == TRUE){
					$account = $this->UserManager->get_informations($login);
					if($account->IsBanned == '1'){
						show_msg('2', 'Essa conta está banida.', site_url('user/login'), '3');
					}
					else{
						$this->session->set_userdata(array(
							'Id' => $account->Id,
							'Login' => $account->Login,
							'Role' => $account->Role,
							'cms_avatar' => $account->cms_avatar,
							'Nickname' => $account->Nickname,
						));
						show_msg('1', 'Conectando...', site_url('home/'), '3');
					}
				}
				else{
					show_msg('2', 'Senha incorreta.', site_url('user/login'), '3');
				}
			}
			else{
				show_msg('2', 'Campo(s) vazio(s).', site_url('user/login'), '3');
			}
		}
	}
	}

	public function logout()
	{
		if(!$this->session->has_userdata('Id')){
			redirect('home/');
		}
		else{
			$this->layout->view('user/logout');
			$this->session->sess_destroy();
		}
	}

	public function register()
	{
	if($this->session->has_userdata('Id')){
		redirect('home/');
	}
	else{
		$this->layout->view('user/register');
		if(isset($_POST['register'])){
			$login = post($this->input->post('login'));
			$pass = post($this->input->post('password'));
			$conf_pass = post($this->input->post('conf_password'));
			$pseudo = post($this->input->post('pseudo'));
			$email = post($this->input->post('mail'));
			$question = post($this->input->post('question'));
			$answer = post($this->input->post('answer'));
			$captcha = $this->input->post('g-recaptcha-response');
			$answer_captha = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$this->config->item('private_key')."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
			if(empty($login) || empty($pass) || empty($conf_pass) || empty($pseudo) || empty($email) || empty($question) || empty($answer) || empty($captcha)){
				show_msg('2', 'Campo(s) vazio(s).', site_url('user/register'), '3');
			}
			elseif($answer_captha['success'] == FALSE){
				show_msg('2', 'Captcha incorreto.', site_url('user/register'), '3');
			}
			else{
				if($pass != $conf_pass){
					show_msg('2', 'As senhas são diferentes.', site_url('user/register'), '3');
				}
				elseif(strlen($login) < 4 || strlen($login) > 30){
					show_msg('2', 'Login incorreto.', site_url('user/register'), '3');
				}
				elseif(strlen($question) < 4 || strlen($answer) < 4){
					show_msg('2', 'Pergunta incorreta.', site_url('user/register'), '3');
				}
				elseif(strlen($pseudo) < 4){
					show_msg('2', 'Apelido incorreto.', site_url('user/register'), '3');
				}
				elseif(strlen($pass) < 4){
					show_msg('2', 'Senha incorreta.', site_url('user/register'), '3');
				}
				else{
					if($this->UserManager->already_mail($email) == TRUE){
						show_msg('2', 'Email incorreto.', site_url('user/register'), '3');
					}
					elseif($this->UserManager->already_login($login) == TRUE){
						show_msg('2', 'Login incorreto.', site_url('user/register'), '3');
					}
					elseif($this->UserManager->already_pseudo($pseudo) == TRUE){
						show_msg('2', 'Apelido incorreto.', site_url('user/register'), '3');
					}
					elseif(verif_mail($email) == FALSE){
						show_msg('2', 'Email incorreto.', site_url('user/register'), '3');
					}
					else{
						$this->UserManager->add_account($login, md5($pass), $pseudo, $email, $question, $answer);
						show_msg('1', 'Cadastro concluido, aguarde o redirecionamento...', site_url('home/'), '3');
					}
				}
			}
		}
	}
	}

	public function account()
	{
		if(!$this->session->has_userdata('Id')){
			redirect('home/');
		}
		else{
			$this->load->helper('player');
			$data['account'] = $this->UserManager->get_info($this->session->userdata('Id'));
			$data['players'] = $this->UserManager->get_players($this->session->userdata('Id'));
			$this->layout->view('user/account', $data);
			//Change mail
			if(isset($_POST['change_mail'])){
				$mail = post($this->input->post('new_mail'));
				if(empty($mail)){
					show_msg('2', 'Campo vazio.', site_url('user/account'), '3');
				}
				elseif(verif_mail($mail) == FALSE){
					show_msg('2', 'Email incorreto.', site_url('user/account'), '3');
				}
				else{
					$this->UserManager->update_mail($this->session->userdata('Id'), $mail);
					show_msg('1', 'Email alterado.', site_url('user/account'), '3');
				}
			}
			//Change password
			if(isset($_POST['change_pass'])){
				$pass = post($this->input->post('new_pass'));
				$conf_pass = post($this->input->post('conf_pass'));
				$old_pass = post($this->input->post('old_pass'));
				if(empty($pass) || empty($conf_pass)){
					show_msg('2', 'Campo(s) vazio(s).', site_url('user/account'), '3');
				}
				elseif($pass != $conf_pass){
					show_msg('2', 'Senhas diferentes.', site_url('user/account'), '3');
				}
				elseif(strlen($pass) < 4){
					show_msg('2', 'Senha incorreta.', site_url('user/account'), '3');
				}
				elseif(md5($old_pass) != $data['account']->PasswordHash){
					show_msg('2', 'Senha anterior incorreta.', site_url('user/account'), '3');
				}
				else{
					$this->UserManager->update_pass($this->session->userdata('Id'), md5($pass));
					show_msg('1', 'Senha alterada.', site_url('user/account'), '3');
				}
			}
		}
	}

	public function galery()
	{
		if(!$this->session->has_userdata('Id')){
			redirect('home/');
		}
		else{
			$this->layout->view('user/galery');
			if(isset($_POST['change'])){
				$avatar = post($this->input->post('avatar'));
				if(empty($avatar) || $avatar == '0'){
					show_msg('2', 'Avatar não selecionado.', site_url('user/galery'), '3');
				}
				else{
					$this->UserManager->update_avatar($this->session->userdata('Id'), $avatar);
					show_msg('1', 'Avatar modificado, aguarde o redirecionamento...', site_url('user/account'), '3');
				}
			}
		}
	}
}