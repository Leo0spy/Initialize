<?php

if(!function_exists('player_level')){
	
	function player_level($xp, $Model)
	{
		if($xp <= 0){
			$level = 1;
		}
		elseif($xp >= $Model->get_last_level()->CharacterExp){
			$level = $Model->get_last_level()->Level;
		}
		else{
			foreach($Model->get_level() as $AllLevel){
				if($xp >= $AllLevel->CharacterExp){
					$level = $AllLevel->Level;
				}
			}
		}
		return $level;
	}
}

if(!function_exists('player_class')){

	function player_class($class)
	{
		switch($class)
		{
			case 1: echo "Feca"; break;
			case 2: echo "Osamodas"; break;
			case 3: echo "Enutrof"; break;
			case 4: echo "Sram"; break;
			case 5: echo "Xelor"; break;
			case 6: echo "Ecaflip"; break;
			case 7: echo "Eniripsa"; break;
			case 8: echo "Iop"; break;
			case 9: echo "Cra"; break;
			case 10: echo "Sadida"; break;
			case 11: echo "Sacrier"; break;
			case 12: echo "Pandawa"; break;
			case 13: echo "Roublard"; break;
			case 14: echo "Zobal"; break;
			case 15: echo "Steamer"; break;
		}
	}
}

if(!function_exists('player_align')){

	function player_align($align)
	{
		switch($align)
		{
			case 0: echo "Neutro"; break;
			case 1: echo "Bontariano"; break;
			case 2: echo "Brakmariano"; break;
			case 3: echo "Mercenário"; break;
		}
	}
}

if(!function_exists('player_grade')){

	function player_grade($honor, $Model)
	{
		if($honor <= 0){
			$grade = 1;
		}
		elseif($honor >= $Model->get_last_level_honor()->AlignmentHonor){
			$grade = $Model->get_last_level_honor()->Level;
		}
		else{
			foreach($Model->get_level_honor() as $level){
				if($honor >= $level->AlignmentHonor){
					$grade = $level->Level;
				}
			}
		}
		return $grade;
	}
}

if(!function_exists('preview_item')){

	function preview_item($x, $y, $type, $id ='')
	{
		if($id == ''){
			echo '<div style="position:absolute;z-index:3;margin-left:'.$x.'px;margin-top:'.$y.'px;display:inline-block;border:4px solid;border-color:#b1ac9c #c9c6bb #dfdbcd;height:72px;width:72px;background:transparent url('.img_url('perso/armu/'.$type.'.jpg').') no-repeat scroll 0 0;"></div>';
		}
		else{
			$CI =& get_instance();
			$CI->load->model('Page_model', 'PageManager');
			$CI->load->helper('items');
			?>
			<div style="position:absolute;z-index:3;margin-left:<?= $x; ?>px;margin-top:<?= $y; ?>px;display:inline-block;border:4px solid;border-color:#b1ac9c #c9c6bb #dfdbcd;height:72px;width:72px;background:transparent url(<?= img_url('perso/armu/'.$type.'.jpg'); ?>) no-repeat scroll 0 0;"><img src="<?= img_url('items/'.$CI->PageManager->get_info_item($id)->IconId.'.png'); ?>" width=65 class="tooltipster-left" title="<div style=&quot;box-sizing: border-box;clear: both;display: table;content: '';&quot;&gt;
					<div style=&quot;float: left;box-sizing: border-box;padding-left: 1px;padding-right: 1px;&quot;>
						<object width=&quot;100&quot; height=&quot;100&quot; type=&quot;application/x-shockwave-flash&quot; data=&quot;<?= swf_url('items/'.$CI->PageManager->get_info_item($id)->IconId.'.swf'); ?>&quot; bgcolor=&quot;EDEDED&quot;/>
							<param name=&quot;movie&quot; value=&quot;<?= swf_url('items/'.$CI->PageManager->get_info_item($id)->IconId.'.swf'); ?>&quot; bgcolor=&quot;EDEDED&quot; />
							<param name=&quot;bgcolor&quot; value=&quot;EDEDED&quot;/>
						</object>
					</div>
					<div style=&quot;float: left;box-sizing: border-box;color: rgb(255, 255, 255);padding-left: 15px;padding-right: 15px;padding-top: 15px;width:240px;text-align:left;vertical-align:middle;height:50px&quot;&gt;
						<p><strong><?= $CI->PageManager->get_name($CI->PageManager->get_info_item($id)->NameId)->French; ?></strong></p>
						<p><?= item_type($CI->PageManager->get_info_item($id)->TypeId); ?></p>
						<p>Niveau <?= $CI->PageManager->get_info_item($id)->Level; ?></p>
					</div>
				</div>">
			</div>
<?php	}
	}
}

if(!function_exists('player_items')){

	function player_items($Id, $Model)
	{
		$items = $Model->get_items_player($Id);
		foreach($items as $item){
			switch($item->Position)
			{
				case 0: $id_amu = $item->ItemId; break;
				case 1: $id_arm = $item->ItemId; break;
				case 2: $id_anG = $item->ItemId; break;
				case 3: $id_cei = $item->ItemId; break;
				case 4: $id_anD = $item->ItemId; break;
				case 5: $id_bot = $item->ItemId; break;
				case 6: $id_cha = $item->ItemId; break;
				case 7: $id_cap = $item->ItemId; break;
				case 8: $id_fam = $item->ItemId; break;
				case 9: $id_do6 = $item->ItemId; break;
				case 10: $id_do5 = $item->ItemId; break;
				case 11: $id_do4 = $item->ItemId; break;
				case 12: $id_do3 = $item->ItemId; break;
				case 13: $id_do2 = $item->ItemId; break;
				case 14: $id_do1 = $item->ItemId; break;
				case 15: $id_bou = $item->ItemId; break;
			}
		}
		$bouclier = (isset($id_bou)) ? preview_item(80, 0, 15, $id_bou) : preview_item(80, 0, 15) ;
		echo $bouclier;
		$amulette = (isset($id_amu)) ? preview_item(80, 94, 0, $id_amu) : preview_item(80, 94, 0) ;
		echo $amulette;
		$anneau_gauche = (isset($id_anG)) ? preview_item(80, 188, 2, $id_anG) : preview_item(80, 188, 2) ;
		echo $anneau_gauche;
		$cape = (isset($id_cap)) ? preview_item(80, 282, 7, $id_cap) : preview_item(80, 282, 7) ;
		echo $cape;
		$bottes = (isset($id_bot)) ? preview_item(80, 380, 5, $id_bot) : preview_item(80, 380, 5) ;
		echo $bottes;
		$arme = (isset($id_arm)) ? preview_item(650, 0, 1, $id_arm) : preview_item(650, 0, 1) ;
		echo $arme;
		$chapeau = (isset($id_cha)) ? preview_item(650, 94, 6, $id_cha) : preview_item(650, 94, 6) ;
		echo $chapeau;
		$anneau_droit = (isset($id_anD)) ? preview_item(650, 188, 4, $id_anD) : preview_item(650, 188, 4) ;
		echo $anneau_droit;
		$ceinture = (isset($id_cei)) ? preview_item(650, 282, 3, $id_cei) : preview_item(650, 282, 3) ;
		echo $ceinture;
		$familier = (isset($id_fam)) ? preview_item(650, 380, 8, $id_fam) : preview_item(650, 380, 8) ;
		echo $familier;
		$dofus1 = (isset($id_do1)) ? preview_item(80, 474, 9, $id_do1) : preview_item(80, 474, 9) ;
		echo $dofus1;
		$dofus2 = (isset($id_do2)) ? preview_item(190, 474, 9, $id_do2) : preview_item(190, 474, 9) ;
		echo $dofus2;
		$dofus3 = (isset($id_do3)) ? preview_item(305, 474, 9, $id_do3) : preview_item(305, 474, 9) ;
		echo $dofus3;
		$dofus4 = (isset($id_do4)) ? preview_item(415, 474, 9, $id_do4) : preview_item(415, 474, 9) ;
		echo $dofus4;
		$dofus5 = (isset($id_do5)) ? preview_item(545, 474, 9, $id_do5) : preview_item(545, 474, 9) ;
		echo $dofus5;
		$dofus6 = (isset($id_do6)) ? preview_item(650, 474, 9, $id_do6) : preview_item(650, 474, 9) ;
		echo $dofus6;
	}
}