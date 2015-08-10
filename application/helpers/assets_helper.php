<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('css_url'))
{
	function css_url($name)
	{
		return base_url().'assets/css/'.$name.'.css';
	}
}

if(!function_exists('js_url'))
{
	function js_url($name)
	{
		return base_url().'assets/js/'.$name.'.js';
	}
}

if(!function_exists('img_url'))
{
	function img_url($name)
	{
		return base_url().'assets/img/'.$name;
	}
}

if(!function_exists('img'))
{
	function img($name)
	{
		return '<img src="'.img_url($name).'" />';
	}
}

if(!function_exists('plug_url'))
{
	function plug_url($name)
	{
		return base_url().'assets/plugins/'.$name;
	}
}

if(!function_exists('swf_url'))
{
	function swf_url($name)
	{
		return base_url().'assets/ankama/'.$name;
	}
}