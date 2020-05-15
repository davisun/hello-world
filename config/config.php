<?php
	
	define('DEBUG', true);
	define('DB_NAME', 'posmodel'); // database name
	define('DB_USER', 'root'); // database user
	define('DB_PASSWORD', ''); // database password
	define('DB_HOST', '127.0.0.1'); // database host *** use ip address to avoid DNS lookup
	
	define('DEFAULT_CONTROLLER', 'Home'); //default controller if there isn't one defined in the url
	define('DEFAULT_LAYOUT', 'default'); // if no layout is set in the controller use this layout

	define('PROOT', '/POS/'); // set '/POS/'' to '/' for a live server

	define('SITE_TITLE', 'POS Framework'); // this will be used if no site title is set
	
	define('CURRENT_USER_SESSION_NAME', 'lskfndmldfnmTPWLADHGTW'); // session name for logged in user
	define('REMEMBER_ME_COOKIE_NAME', 'QPOFJFNkdnow2438921nchue'); // cookie name for logged in user remember me
	define('REMEMBER_ME_COOKIE_EXPIRY', 2592000); // time in seconds for cookie to live (30 days);

	define('ACCESS_RESTRICTED', 'Restricted'); // controller name for the restricted redirect
	