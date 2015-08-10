<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('color_line')){

	function color_line($pos)
	{
		switch($pos)
		{
			case 1: return"<tr class='success'>"; break;
			case 2: return"<tr class='info'>"; break;
			case 3: return"<tr class='danger'>"; break;
			default: return "<tr>"; break;
		}
	}
}