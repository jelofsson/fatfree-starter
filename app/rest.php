<?php
 
class REST extends Controller {
	  
	function beforeroute($app) {  
		$app->set('menu', array());
		$app->set('usermenu', array()); 
		$app->set('breadcrumbs',array()); 
	}
	 
	function show($app, $args){
		
		$app->set('posts',$posts);
		$app->set('widgets',array('main/index.htm' => '12')); 
	}
	