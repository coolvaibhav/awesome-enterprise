<?php 


define('SITE_URL', ($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] );
define('HOME_URL', ($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] );

define( 'REDIS_HOST', '127.0.0.1' );
define( 'REDIS_PORT', '6379' );
define( 'REDIS_DATABASE_GLOBAL_CACHE', '4' );
define( 'REDIS_DATABASE_SESSION_CACHE', '5' );
define( 'REDIS_DATABASE_DB', '10' );

define('AWESOME_PATH', '/var/www/awesome-enterprise');

define('CONNECTIONS',
	array(
		'base_code'=>array(
			'connection_service'=>'folder_conn',
			'path'=>'/var/www/awnxt.thearks.in/base-code',
			'redis_db'=>101,
			'cache_expiry'=>300
		),
		'common_code'=>array(
			'connection_service'=>'wp_conn',
			'db_name'=>'alpha_wordpoets_com_Svc03jGy',
			'db_user'=>'alphawordpoecKAE',
			'db_password'=>'c6ZQpHWYoX5rqTy4nGBhwsMj',
			'db_host'=>'localhost',
			'redis_db'=>102,
			'cache_expiry'=>600

		),
		'cdn_code'=>array(
			'connection_service'=>'url_conn',
			'url'=>'https://cdn.getawesomestudio.com/code',
			'redis_db'=>103,
			'cache_expiry'=>300
		)
		
	));

//define('CODE_DEFAULT_CONNECTION','base_code');