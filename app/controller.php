<?php
 
//! Base controller
class Controller {

	protected $db;

	//! HTTP route pre-processor
	function beforeroute($app) {
	
	}

	//! HTTP route post-processor
	function afterroute($app) { 
	
		if( $app->get('apiCall') ){
			// Api REST Call.
		} else {
			echo Template::instance()->render('layout.htm');
		}
	}

	//! Instantiate class
	function __construct() {
		$app=Base::instance(); 
		// Connect to the database
		//$db=new DB\SQL('mysql:host=;port=;dbname=', '', ''); 
		//$this->db=$db;
	}
   
}