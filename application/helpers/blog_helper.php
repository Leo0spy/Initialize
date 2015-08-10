<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

function convert_date($date)
{
	$date = explode('-', $date);//[0]=year, [1]=month, [2]=day
	$year = $date[0];
	$month = $date[1];
	$day = $date[2];
	switch($month)
	{
		case 1: $month = 'Janeiro'; break;
		case 2: $month = 'Fevereiro'; break;
		case 3: $month = 'Março'; break;
		case 4: $month = 'Abril'; break;
		case 5: $month = 'Maio'; break;
		case 6: $month = 'Junho'; break;
		case 7: $month = 'Julho'; break;
		case 8: $month = 'Agosto'; break;
		case 9: $month = 'Setembro'; break;
		case 10: $month = 'Otubro'; break;
		case 11: $month = 'Novembro'; break;
		case 12: $month = 'Dezembro'; break;
	}
	echo $day.' '.$month.' '.$year;
}

function limit_text($text, $limit = '244', $end = '...')
{
	if(strlen($text) >= $limit){
		$text = substr($text, 0, $limit);
		$text .= $end;
	}
	return $text;
}

function type_news($type)
{
	switch($type)
	{
		case 1: echo '<span class="magazine-badge magazine-badge-red">Anúncio</span>'; break;
		case 2: echo '<span class="magazine-badge magazine-badge-blue">Desenvolvimento</span>'; break;
		case 3: echo '<span class="magazine-badge magazine-badge-green">Comunidade</span>'; break;
	}
}