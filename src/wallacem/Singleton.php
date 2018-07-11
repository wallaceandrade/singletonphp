<?php
namespace WallaceAndrade;

class Singleton 
{
    private $instances;

    public function __construct()
    {
        $GLOBALS['singletonInstances'] = [];
        $this->instances = &$GLOBALS['singletonIstances'];
    }

    public function resolve($className, ...$constructArgs)
    {
        $instanceHash = md5($className.serialize($constructArgs));

        if (!isset($this->instances[$instanceHash])) 
            $this->instances[$instanceHash] = (new $className(...$constructArgs));
        
        return $this->instances[$instanceHash];
    }
}