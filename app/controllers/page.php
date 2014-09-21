<?php
 
class PAGE extends Controller {
	  
	function beforeroute($app) {  
        
		$app->set('menu', array());
		$app->set('usermenu', array()); 
		$app->set('breadcrumbs',array()); 
        
        echo Template::instance()->render('header.htm');
	}
    
	function afterroute($app) {  
        echo Template::instance()->render('footer.htm');
	}
    
	function welcome($app, $args){
        echo Template::instance()->render('welcome.htm');
	}
	 
	function show($app, $args){
        $page = isset($args['page']) ? $args['page'].'.htm' : ''; 
        echo Template::instance()->render($page);
	}
    
}