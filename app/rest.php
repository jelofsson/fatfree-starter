<?php
 
class REST extends Controller {
	  
	function beforeroute($app) {  
        $app->set('apiCall', true);
        //  -------------------------------------------
        // Set default API REST Headers
        // Returning JSON NO CACHE
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header( 'Last-Modified: ' . gmdate( 'D, d M Y H:i:s' ) . ' GMT' );
        header('Content-type: application/json');
        header('Pragma: no-cache');
        header('Cache-Control: no-store, no-cache, must-revalidate');
	}
	 
	function show($app, $args){
		
		$app->set('posts',$posts);
		$app->set('widgets',array('main/index.htm' => '12')); 
	}
	