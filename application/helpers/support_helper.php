<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('tickets_label'))
{
	function tickets_label($label)
	{
		switch($label)
		{
			case 1: return '<span class="badge badge-purple rounded-2x">Jogo</span>'; break;
			case 2: return '<span class="badge badge-blue rounded-2x">Forum</span>'; break;
			case 3: return '<span class="badge badge-red rounded-2x">Site</span>'; break;
			case 4: return '<span class="badge badge-green rounded-2x">Outro</span>'; break;
		}
	}
}

if(!function_exists('already_voted')){

	function already_voted($chain, $guid)
	{
		$e = explode('|', $chain);
		foreach($e as $exp){
			if($exp == $guid){
				return TRUE;
			}
		}
	}
}

if(!function_exists('color_line')){

	function color_line($pos)
	{
		switch($pos)
		{
			case 1: return 'class="success"'; break;
			case 2: return 'class="info"'; break;
			case 3: return 'class="danger"'; break;
			default: return ''; break;
		}
	}
}