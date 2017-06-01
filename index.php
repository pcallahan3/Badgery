<?php
    /*
	*Author: Nate Hascup & Patrick Callahan
	*Greenriver IT 328
	*Badgery index.php
	*/
       
    //Require the autoload file
    error_reporting('E_ALL');
    require_once('vendor/autoload.php');
    session_start();
    
    //make app full screen
    echo '<script type="text/javascript">toggleFullScreen();</script>';
    
    //Create an instance of the Base class
    $f3 = Base::instance();
    
    
    //Set debug level
    $f3->set('DEBUG', 3);
    
    
    $f3->route('GET /', function($f3) { 
       
       //load a template
       echo Template::instance()->render('pages/userHome.html'); 
    }); 

    //Run fat free
    $f3->run();
    
