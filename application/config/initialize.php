<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
---------------------------
| Initialize'CMS v2
| Par Liox
| Partage exclusif à la communauté de DozenOfElites.com
| Partage non-autorisé
---------------------------
| Merci de respecter mon travail et de laisser mon nom.
| Cordialement, Liox.
---------------------------
*/

//Base de donnée
$config['host'] = 'localhost';
$config['user'] = 'root';
$config['pass'] = '';
$config['name_db_auth'] = 'st_auth';
$config['name_db_world'] = 'st_world';

//General
$config['name'] = 'Initialize';//Nom du serveur
$config['title'] = 'Le meilleur 2.0...';//Slogan
$config['base_url'] = 'http://localhost/Stump/CI/';//Lien (complet) pour accéder au site
$config['link_forum'] = 'http://dozenofelites.com/';//Lien (complet) pour accéder au forum
$config['link_dl'] = '#';//Lien (complet) pour télécharger le launcher
$config['link_vote'] = 'http://dozenofelites.com/';//Lien (complet) RPG
$config['mail'] = 'test@gmail.com';//Mail pour joindre le serveur

//Ladder
$config['limit_ladder'] = '50';//Limite de personnages affichés sur les LADDER
$config['ladder_guilds'] = TRUE;//Si on active le ladder Guilde

//Socials
$config['fb_link'] = 'https://www.facebook.com/';
$config['twt_link'] = 'https://www.twitter.com/';
$config['twt_id'] = '589392385072885760';//IDD twitter
$config['twt_name'] = 'Initialize';//Nom d'utilisateur

//Points
$config['name_point'] = 'Doplons';//Nom des points
$config['time_vote'] = '3';//Temps d'attente entre chaque vote (3h)
$config['points_per_vote'] = '30';//Points attribué lors d'un vote
$config['points_per_buy'] = '100';//Points attribué lors d'un achat de type starpass

//Starpass
$config['starpass_id'] = '266446';
$config['starpass_idp'] = '163780';

//Google Recaptcha API
//Inscription requise
$config['public_key'] = '6LemSgETAAAAALBhM7C9BB6uDWkvQN3uc3PTSsV5';
$config['private_key'] = '6LemSgETAAAAABpuROucaKRtQJy-ZyluRyXVUjUt';

//Panel Admin
$config['panel_level'] = '3';//Level min. pour accéder au panel admin

//Blog
$config['limit_news'] = '6';//Nombre de news par page