<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('show_msg')){

	function show_msg($type, $message, $url, $time = '10')
	{
		/*
		Type of messages :
		1 => success
		2 => error
		3 => warning

		Example of use :
			show_msg('1', 'Bravo', 'http://dozenofelites.com', '5');
		*/

		$obj =& get_instance();
		$path = VIEWPATH.'errors'.DIRECTORY_SEPARATOR.'pers'.DIRECTORY_SEPARATOR;

		switch($type)
		{
			case 1: $type_e = 'success'; $icon = 'check'; break;
			case 2: $type_e = 'danger'; $icon = 'exclamation'; break;
			case 3: $type_e = 'warning'; $icon = 'exclamation'; break;
		}
		
		if(ob_get_level() > 1){
			ob_end_flush();
		}

		ob_start();
		include($path.'error.php');
		$buffer = ob_get_contents();
		ob_end_clean();
		echo $buffer;
		exit(4);
	}
}

if(!function_exists('post')){

	function post($word)
	{
		return htmlspecialchars(trim(addslashes($word)));
	}
}

if(!function_exists('get')){

	function get($word)
	{
		return htmlentities(stripslashes($word));
	}
}

if(!function_exists('content')){

	function content($word)
	{
		return htmlspecialchars_decode(stripslashes($word));
	}
}