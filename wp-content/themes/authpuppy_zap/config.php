<?php
	/* Configuration of theme */

	//Get it at http://code.google.com/intl/fr-FR/apis/maps/signup.html with your domain name
	define('GMAPS_KEY', 'ABQIAAAAWlR6Le6HePpq4aKBf3PW7RQ-p3Er3g5sGpjPR_tvtZurdiTaVRSTTRwKpqwboTP1aYFmSdvR12Rpkw');

	//URL of Hotspot status XML
	define('HOTSPOT_XML', 'http://auth.ilesansfil.org/authpuppy/hotspot_status.php?format=XML');
		
	//Main Infos
	define('WHO_ARE_YOU', 'Activit�e');
	define('WHERE_ARE_YOU', network_home_url().'activity/');
	
	//Authpuppy Menu
	define('MENU_1_WHAT', 'Accueil');
	define('MENU_1_LINK', network_home_url());
	
	//bp_loggedin_user_domain() need login => add MENU_2_LOGIN == true
	//if user is not logged in we display the login screen
	//else we display the MENU_2_LINK
	define('MENU_2_WHAT', 'Votre profil');
	//define('MENU_2_LINK', bp_loggedin_user_domain());
	define('MENU_2_LOGIN', TRUE);
	
	define('MENU_3_WHAT', 'Membres');
	define('MENU_3_LINK', network_home_url().'members/');
	
	define('MENU_4_WHAT', 'Groupes');
	define('MENU_4_LINK', network_home_url().'groups/');
	
	define('MENU_5_WHAT', '&Icirc;le Sans Fil');
	define('MENU_5_LINK', 'http://www.ilesansfil.org/');
	
?>