<?php
    //Require the autoload file
    error_reporting('E_ALL');
    require_once('vendor/autoload.php');
    session_start();
    
    //Create an instance of the Base class
    $f3 = Base::instance();
    
    
    $f3->route('GET /', function($f3) { 
       //save variables 
       $f3->set('username', 'jshmo'); 
       $f3->set('password', sha1('Password01')); 
       $f3->set('title', 'Working with Templates');
       $f3->set('temp', 68);
       $f3->set('color', 'purple');
       $f3->set('radius', 10);
       $f3->set('bookmarks' , array('http://cnn.com', 'http://espn.com', 'http://pear.com'));
       $f3->set('address', array('primary' => '100 Apple ln Seattlem, Wa',
                                 'secondary' => '2510 100th Court Tax, Wa 9000'));
        $f3->set('desserts', array('chocolate' => 'choclate mouse',
                                 'vanilla' => 'Vanilla Custard',
                                  'strawberry' => 'Starberry Cake'));
        
        $f3->set('preferredCustomer', true);
        $f3->set('lastLogin', strtotime('-1 week'));
        
        
        $pet = new Pet('Fido', 'Pink');
        $f3->set('mypet', $pet);
        
        $pet = new Pet('Herientta', 'purple');
        $f3->set('mypet1', $pet);
        
        
        
        
       //load a template 
       echo Template::instance()->render('pages/info.html'); 
    }); 

    //Run fat free
    $f3->run();
    
