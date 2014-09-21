<?php
 
//! Base controller
class Controller {

	protected $db;
    
	//! Instantiate class
	function __construct() {
		$app=Base::instance(); 
		
        // Connect to the database
		$db=new DB\SQL(
            'mysql:host='   . $app->get('db.host') . 
            ';port='        . $app->get('db.port') . 
            ';dbname='      . $app->get('db.name') , 
            $app->get('db.user'), 
            $app->get('db.password')
        ); 
		$this->db=$db;
        
        // Install the database
		if (file_exists('setup.sql')) {
			// Initialize database with default setup
			$db->exec(explode(';',$app->read('setup.sql')));
			// Make default setup inaccessible
			rename('setup.sql','setup.$ql');
		}
	}

	//! HTTP route pre-processor
	function beforeroute($app) {
	   
	}

	//! HTTP route post-processor
	function afterroute($app) {
		if( $app->get('apiCall') ){
			// Api REST Call.
		} else {
            // Ordinary GET call.
			//echo Template::instance()->render('layout.htm');
		}
	}
   
}