<?php 
    session_start();
    $app = new \Slim\Slim();
    $app->add(new \Slim\Middleware\SessionCookie(array('secret' => 'sewasankalp')));
	 
    $REQUEST = $app->request();
    $pdo = new PDO("mysql:host=localhost;dbname=sewa_admin", 'root', '');
    
    define( 'SITENAME','Sewa Sankalp' );
    define( 'SITEROOT',$REQUEST->getRootUri() );
    define( 'RESOURCEURI',$REQUEST->getResourceUri() );
        
    $array_resource_uri = explode( '/',RESOURCEURI );
    $base_file = empty($array_resource_uri[1])?'home':$array_resource_uri[1];
    
    $host = $_SERVER['HTTP_HOST'];
    
    define( 'BASEFILE',$base_file );
    define( 'HOST',$host );            
    
    $db = new NotORM($pdo);        
    //$home_settings = ['plugins'=>['inline']];        
      
?>