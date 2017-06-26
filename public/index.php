<?php
echo "Hello from $_SERVER[DOCUMENT_ROOT] <br/>";
echo "Request URL = '$_SERVER[QUERY_STRING]' <hr/>";
//var_dump($_SERVER);

/**
 * Routing
 */
require '../Core/Router.php';

$router = new Router();
//echo get_class($router);

$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('posts/new', ['controller' => 'Posts', 'action' => 'new']);
//var_dump($router->getRoutes());

$url = $_SERVER['QUERY_STRING'];

if ($router->match($url)){
    var_dump($router->getParams());
} else {
    echo "404: '$url' not found";
}