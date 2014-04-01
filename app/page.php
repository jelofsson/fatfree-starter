<?php
 
class PAGE extends Controller {
	  
	function beforeroute($app) {  
        
		$app->set('menu', array());
		$app->set('usermenu', array()); 
		$app->set('breadcrumbs',array()); 
	}
	 
	function show($app, $args){
        
        $page = isset($args['page']) ? $args['page'].'.htm' : '';
		$app->set('content', $page); 
	}
    
}