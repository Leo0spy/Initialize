<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			$this->load->model('Blog_model', 'BlogManager');
			$this->load->helper('blog');
			$this->load->helper('pagination');
	}

	public function index()
	{
		$this->home();
	}

	public function home($page = '1')
	{
		$data['nbr_page'] = ceil($this->BlogManager->count_news() / $this->config->item('limit_news'));
		if($page > $data['nbr_page']){
			redirect('blog/');
		}
		elseif(!is_numeric($page) || $page <= 0){
			redirect('blog/');
		}
		$epp = ($page - 1) * $this->config->item('limit_news');
		$data['current'] = $page;
		$data['news'] = $this->BlogManager->get_news($epp, $this->config->item('limit_news'));
		$this->layout->view('blog/list', $data);
	}

	public function view($id, $page = '1')
	{
		if(empty($id) || !is_numeric($id) || $id < 1){
			redirect('blog/');
		}
		else{
			$data['nbr_page'] = ceil($this->BlogManager->count_comments($id) / 10);
			if($page > $data['nbr_page']){
				$page = 1;
			}
			elseif(!is_numeric($page) || $page <= 0){
				redirect('blog/');
			}
			$epp = ($page - 1) * 10;
			$data['current'] = $page;
			$data['news'] = $this->BlogManager->get_info_news($id);
			$data['comments'] = $this->BlogManager->get_comments($id);
			$data['last_news'] = $this->BlogManager->get_news(0, 4);
			$this->layout->view('blog/view', $data);
			if(isset($_POST['send'])){
				$content = nl2br(post($this->input->post('content')));
				if(!$this->session->has_userdata('Id')){
					show_msg('2', 'Você precisa estar logado para postar um comentário.', site_url('blog/view/'.$id), '3');
				}
				else{
					if(empty($content) || strlen($content) < 4 || strlen($content) > 300){
						show_msg('2', 'O seu comentário é inválido.', site_url('blog/view/'.$id), '3');
					}
					else{
						$this->BlogManager->add_comment($id, date('Y-m-d'), $this->session->userdata('Id'), $content);
						show_msg('1', 'O seu comentário foi postado, aguarde o redirecionamento ...', site_url('blog/view/'.$id), '3');
					}
				}
			}
		}
	}
}
