<?php


class Router{
    /**
     * Associative Array of routes (the routing table)
     * @var array
     */
    protected $routes = [];
    /**
     * Parameters from the matched route
     * @var array
     */
    protected $params = [];


    /**
     * Adds a route to the routing table
     *
     * @param string    $route  The route URL
     * @param array     $params Controller, action, etc
     */
    public function add($route, $params){
        $this->routes[$route] = $params;
    }

    /**
     * Get routes from the routing table
     * @return array
     */
    public function getRoutes(){
        return $this->routes;
    }

    /**
     * Match the route to the routes in the routing table.
     *  If a route is found, $params is set.
     *
     * @param string $url   The route URL
     *
     * @return boolean  true if a match is found, otherwise false
     */
    public function match($url){
        foreach($this->routes as $route => $params){
            if ($url === $route){
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    /**
     * Gets the currently matched parameters
     *
     * @return array
     */
    public function getParams(){
        return $this->params;
    }

}