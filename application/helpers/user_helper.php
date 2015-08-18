<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('verif_mail')){

	function verif_mail($mail)
	{
		$syntaxe = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#'; 
   		if(preg_match($syntaxe, $mail)){
      		return TRUE; 
  	 	}
   		else{
     		return FALSE;
   		}
	}
}

if(!function_exists('account_role')){

	function account_role($level)
	{
		switch($level)
		{
			case 0: return 'Jogador'; break;
			case 1: return 'Jogador'; break;
			case 2: return 'Moderador'; break;
			case 3: return 'Moderador Master'; break;
			case 4: return 'Desenvolvedor'; break;
			case 5: return 'Fundador'; break;
		}
	}
}

if(!function_exists('account_vip')){

	function account_vip($vip)
	{
		switch($vip)
		{
			case 0: return 'Não'; break;
			case 1: return 'Sim'; break;
		}
	}
}

if(!function_exists('get_title')){

	function get_title($title_chain, $model)
	{
		$titles = explode('|', $title_chain);
		foreach($titles as $title_id){
			if(!empty($title_id)){
				$title = $model->info_title($title_id);
				echo '<option value="'.$title->title_id.'">'.$title->title.'</option>';
			}
		}
	}
}

if(!function_exists('get_morph')){

	function get_morph($morph_chain, $model)
	{
		$morphs = explode('|', $morph_chain);
		foreach($morphs as $morph_id){
			if(!empty($morph_id)){
				$morph = $model->info_morph($morph_id);
				return '<option value="'.$morph->morph_id.'">'.$morph->name.'</option>';
			}
		}
	}
}