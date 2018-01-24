<?php

namespace Mindk\Framework\Routing;

/**
 * Class Router
 * @package Mindk\Framework\Routing
 */
class Router
{
    /**
     * @var Request instance
     */
    protected $request;

    /**
     * @var Route map cache
     */
    protected $map;

    /**
     * Router constructor.
     *
     * @param $mapping Route mapping
     */
    public function __construct(array $mapping)
    {
        $this->currentUri = $_SERVER['REQUEST_URI'];
        $this->map = $mapping;
    }

    /**
     * Find matching route, using routing map
     */
    public function findRoute(){
        $result = null;

        if(!empty($this->map)){
            foreach ($this->map as $name => $routeData){
                $pattern = $this->transformToRegexp($routeData['path']);
                if(preg_match($pattern, $this->currentUri)){
                    $result = $routeData;
                    break;
                }
            }
        }

        return $result;
    }

    /**
     * Build route (link)
     *
     * @param   string
     * @param   array
     *
     * @return  string
     */
    public function buildRoute($name, $params = []): string{
        // @TODO: Implement this
    }

    /**
     *
     */
    private function transformToRegexp(string $path): string {
        $regexp = '/^' . addslashes($path) . '[\/]*$/';

        return $regexp;
    }

}