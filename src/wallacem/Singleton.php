<?php
namespace WallaceAndrade;

class Singleton
{
    public static function resolve($className, ...$constructArgs)
    {
        if (!isset($GLOBALS['singletonInstances'])) {
            $GLOBALS['singletonInstances'] = [];
        }
        $instances = &$GLOBALS['singletonInstances'];
        $instanceHash = md5($className.serialize($constructArgs));
        
        if (!isset($instances[$instanceHash]))
            $instances[$instanceHash] = (new $className(...$constructArgs));
        return $instances[$instanceHash];
    }
}