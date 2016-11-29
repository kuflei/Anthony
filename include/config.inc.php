<?php session_start();
	$ss = session_id();
	error_reporting(0);
	error_reporting(E_ERROR | E_PARSE);
	ini_set("display_errors","on");
	//set_time_limit(0);
	global $config;
	$config['site_name']  = "Anthony-wilson-rd"; 			## Site Name.
	/****************************************************
		Set email Id.
	****************************************************/
	$ip=$_SERVER['REMOTE_ADDR'];
	
	$config['admin_email'] 			= "info@weightlosshappens.com"; 				## Admin Mail.
	$config['info_email']  			= "info@weightlosshappens.com"; 					## Info Mail.
	$config['info_name']  			= "Anthony-wilson-rd"; 					## Info Mail.
	$config['contact_email']  		= "info@weightlosshappens.com"; 			## Contact Mail.
	$config['support_email']  		= "info@weightlosshappens.com"; 			## Support Mail.
	$config['newsletter_email']  	= "info@weightlosshappens.com"; 			## Contact Mail.
	$config['verficationSenderId']  = "Anthony Wilson RD"; 			## Contact Mail.
	$config['support_name']  		= "Anthony Wilson RD"; 			## Contact Mail.
	/****************************************************
		Set item per page for paging.
	****************************************************/
	$config['item_per_page'] = 10; 								## Setting items to show per page.
	/****************************************************
		Set max & min length for user & password.
	****************************************************/
	$config['min_password_length']="6"; 						## Setting minimum password length.
	$config['min_username_length']="6"; 						## Setting minimum user name length.
	$config['max_password_length']="12"; 						## Setting maximum password length.
	$config['max_username_length']="12"; 						## Setting maximum user name length.
	/****************************************************
		Assign table prefix. 
	****************************************************/
	$config['tbl_prefix']="rd_";
	/****************************************************
		Assign max file size. 
	****************************************************/
	$config['MAX_FILE_SIZE'] = 50000000;
	/****************************************************
		Initializing database connection variables.
	****************************************************/

if($_SERVER['HTTP_HOST']=="server")
	{
		$config['site_url']="http://server/Anthony-wilson-rd/"; ## Site absolute URL
		$config['admin_site_url']="http://server/Anthony-wilson-rd/ardadmin/"; ## Site absolute URL
		$config['absolute_path']='F:/wamp/www/Anthony-wilson-rd/';
		$config['admin_absolute_path']='F:/wamp/www/Anthony-wilson-rd/ardadmin/';
	}
	elseif($_SERVER['HTTP_HOST']=="weightlosshappens.com"  || $_SERVER['HTTP_HOST']=="www.weightlosshappens.com")
	{
		$naConfig_host="mysql55.web15.luxsci.com";
		$local=false;
		$config['site_url']="http://www.weightlosshappens.com/"; ## Site absolute URL
		$config['admin_site_url']="http://www.weightlosshappens.com/ardadmin/"; ## Site absolute URL
		$config['home_site_url']="http://www.weightlosshappens.com/";		
		$config['absolute_path']='/xd1/homes/hash/72/22/a12272/42/26/u112642/weightlosshappens.com/www/';
		
		$config['admin_absolute_path']='/xd1/homes/hash/72/22/a12272/42/26/u112642/weightlosshappens.com/www/ardadmin/';
	}
	elseif($_SERVER['HTTP_HOST']=="antony.local")
	{
		$local=false;
		$config['site_url']="http://antony.local/"; ## Site absolute URL
		$config['admin_site_url']="http://antony.local/ardadmin/"; ## Site absolute URL
		$config['home_site_url']="http://antony.local/";		
		$config['absolute_path']='/home/olia/Projects/antony/';
		
		$config['admin_absolute_path']='/home/olia/Projects/antony/ardadmin/';
	}
	else
	{
		$naConfig_host="localhost";
		$local=false;
		$config['site_url']="http://localhost/anthony/"; ## Site absolute URL
		$config['admin_site_url']="http://localhost/anthony/ardadmin/"; ## Site absolute URL
		$config['home_site_url']="http://localhost/anthony/";
		$config['absolute_path']='D:\\Sites\anthony\\';
		$config['admin_absolute_path']='/home/showproj/public_html/projects/weightlosshappens/ardadmin/';
	}

?>
