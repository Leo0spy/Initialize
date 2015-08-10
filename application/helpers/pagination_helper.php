<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('pagination')){

	function pagination($url, $total, $current, $filter = '', $adj = 3)
	{
		$next = $current + 1;
		$prev = $current - 1;
		$last = $total;
		$pagination = '';
		if($total > 1){
			$pagination .= '<ul class="pagination">';
			//Prev button
			if($current == 2){
				$pagination .= '<li><a href="'.$url.'/'.$filter.'">&laquo;</a></li>';
			}
			elseif($current > 2){
				$pagination .= '<li><a href="'.$url.'/'.$filter.$prev.'">&laquo;</a></li>';
			}
			else{
				$pagination .= '<li><a>&laquo;</a></li>';
			}
			//Start pagination
			//First case
			//Lest 12 pages
			if($total < 7 + ($adj * 2)){
				if($current == 1){
					$pagination .= '<li class="active"><a>1</a></li>';
				}
				else{
					$pagination .= '<li><a href="'.$url.'/'.$filter.'">1</a></li>';
				}
				for($i = 2; $i <= $total; $i++){
					if($i == $current){
						$pagination .= '<li class="active"><a>'.$i.'</a></li>';
					}
					else{
						$pagination .= '<li><a href="'.$url.'/'.$filter.$i.'">'.$i.'</a></li>';
					}
				}
			}
			//Second case
			//More 13 pages
			else{
				//Example : 1 2 3 4 5 6 7 8 9 ... 15
				if($current < 2 + ($adj * 2)){
					if($current == 1){
						$pagination .= '<li class="active"><a>1</a></li>';
					}
					else{
						$pagination .= '<li><a href="'.$url.'/'.$filter.'">1</a></li>';
					}
					for($i = 2; $i < 4 + ($adj * 2); $i++){
						if($i == $current){
							$pagination .= '<li class="active"><a>'.$i.'</a></li>';
						}
						else{
							$pagination .= '<li><a href="'.$url.'/'.$filter.$i.'">'.$i.'</a></li>';
						}
					}
					$pagination .= '<li><a>&hellip;</a></li>';
					$pagination .= '<li><a href="'.$url.'/'.$filter.$last.'">'.$last.'</a></li>';
				}
				//Example : 1 ... 5 6 7 8 9 10 11 ... 15
				elseif((($adj * 2) + 1 < $current) && ($current < $total - ($adj * 2))){
					$pagination .= '<li><a href="'.$url.'/'.$filter.'">1</a></li>';
					$pagination .= '<li><a>&hellip;</a></li>';
					for($i = $current - $adj; $i <= $current + $adj; $i++){
						if($i == $current){
							$pagination .= '<li class="active"><a>'.$i.'</a></li>';
						}
						else{
							$pagination .= '<li><a href="'.$url.'/'.$filter.$i.'">'.$i.'</a></li>';
						}
					}
					$pagination .= '<li><a>&hellip;</a></li>';
					$pagination .= '<li><a href="'.$url.'/'.$last.'">'.$last.'</a></li>';
				}
				//Example : 1 ... 9 10 11 12 13 14 15
				else{
					$pagination .= '<li><a href="'.$url.'/'.$filter.'">1</a></li>';
					$pagination .= '<li><a>&hellip;</a></li>';
					for($i = $total - (2 + ($adj * 2)); $i <= $total; $i++){
						if($i == $current){
							$pagination .= '<li class="active"><a>'.$i.'</a></li>';
						}
						else{
							$pagination .= '<li><a href="'.$url.'/'.$filter.$i.'">'.$i.'</a></li>';
						}
					}
				}
			}
			//Next button
			if($current == $total){
				$pagination .= '<li><a>&raquo;</a></li>';
			}
			else{
				$pagination .= '<li><a href="'.$url.'/'.$filter.$next.'">&raquo;</a></li>';
			}
			$pagination .= '</ul>';
		}
		return $pagination;
	}
}