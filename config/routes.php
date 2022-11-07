<?php 

// de web/index.php es mirarà la URL marcada p.ex. www.index.php/test (dirige la app)

/**
 * Used to define the routes in the system.
 * 
 * A route should be defined with a key matching the URL and an
 * controller#action-to-call method. E.g.:
 * 
 * '/' => 'index#index',
 * '/calendar' => 'calendar#index' 
 */
$routes = array(
	'/test' => 'test#index'
);
