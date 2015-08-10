<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('check_code')){

	function check_code($idd, $idp, $code)
	{
		$ident = $idp.";;".$idd;
		$codes = $code;
		$get_f =@ file("http://script.starpass.fr/check_php.php?ident=".$ident."&codes=".$codes); 
		$tab = explode('|', $get_f[0]);
		if(substr($tab[0],0,3) == 'NON'){ 
       		return FALSE;
		} 
		else{ 
      		return TRUE;
		} 
	}
} 