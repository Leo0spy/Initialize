<?php

if(!function_exists('guild_level')){
	
	function guild_level($xp, $Model)
	{
		if($xp <= 0){
			$level = 1;
		}
		elseif($xp >= $Model->get_last_level()->GuildExp){
			$level = $Model->get_last_level()->Level;
		}
		else{
			foreach($Model->get_level() as $AllLevel){
				if($xp >= $AllLevel->GuildExp){
					$level = $AllLevel->Level;
				}
			}
		}
		return $level;
	}
}

if(!function_exists('guild_emblem')){
	
	function guild_emblem($EBS, $EBC, $EFS, $EFC, $height = '33', $width = '33')
	{
		echo '<center><param name="movie" value="'.swf_url('swf/DofusGuildes.swf').'" />
						<param name="play" value="true" />
						<param name="flashvars" value="bcgSrc='.$EBS.'&bcgColor='.$EBC.'&frtSrc='.$EFS.'&frtColor='.$EFC.'" />
						<param name="loop" value="true" />
						<param name="quality" value="high" />
						<param name="wmode" value="transparent" />
						<!--[if !IE]>-->
					<object id="logo_guilde_container" type="application/x-shockwave-flash" data="'.swf_url('swf/DofusGuildes.swf').'".swf" width="'.$width.'" height="'.$height.'">
						<param name="play" value="true" />
						<param name="flashvars" value="bcgSrc='.$EBS.'&bcgColor='.$EBC.'&frtSrc='.$EFS.'&frtColor='.$EFC.'" />						
						<param name="loop" value="true" />
						<param name="quality" value="high" />
						<param name="wmode" value="transparent" />
						<!--<![endif]-->
						<a href="http://www.adobe.com/go/getflashplayer">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
						</a>
						<!--[if !IE]>-->
					</object>
					<!--<![endif]-->
					</object></center>';
	}
}

if(!function_exists('guild_rank')){

	function guild_rank($rank)
	{
		switch($rank)
		{
			case 1: echo"Líder"; break;
			case 2: echo"Segundo em Comando"; break;
			case 3: echo"Tesoureiro"; break;
			case 4: echo"Protetor"; break;
			case 5: echo"Artesão"; break;
			case 6: echo"Reservista"; break;
			case 7: echo"Servo"; break;
			case 8: echo"Guarda"; break;
			case 9: echo"Batedor"; break;
			case 10: echo"Espião"; break;
			case 11: echo"Diplomata"; break;
			case 12: echo"Secretário"; break;
			case 13: echo"Penitente"; break;
			case 14: echo"Perturbador"; break;
			case 15: echo"Desertor"; break;
			case 16: echo"Carrasco"; break;
			case 17: echo"Aprendiz"; break;
			case 18: echo"Mercador"; break;
			case 19: echo"Criador"; break;
			case 20: echo"Oficial de Recrutamento"; break;
			case 21: echo"Guia"; break;
			case 22: echo"Mentor"; break;
			case 23: echo"O Escolhido"; break;
			case 24: echo"Conselheiro"; break;
			case 25: echo"Musa"; break;
			case 26: echo"Governador"; break;
			case 27: echo"Infiltrador"; break;
			case 28: echo"Iniciado"; break;
			case 29: echo"Gatuno"; break;
			case 30: echo"Caçador de tesouros"; break;
			case 31: echo"Caçador ilegal"; break;
			case 32: echo"Traidor"; break;
			case 33: echo"Caçador de Mascotes"; break;
			case 34: echo"Mascote"; break;
			case 35: echo"Caçador"; break;
			default: echo"Em avaliação";
		}
	}
}