<?php
/**
 * Created by PhpStorm.
 * User: dimmask
 * Date: 27.12.17
 * Time: 20:20
 */

namespace Mindk\Framework\Routing;

/**
 * Class Router
 * @package Mindk\Framework\Routing
 */
class Router
{
    protected $request;

    protected $map;

    public function __construct($mapping)
    {
        $this->request = $_SERVER['REQUEST_URI'];
        $this->map = $mapping;
    }

    public function findRoute(){
        //@TODO: Find rel.
    }

}