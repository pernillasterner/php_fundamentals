<?php

namespace Core;

class App
{
  protected static $container;

  public static function setContainer($container)
  {
    static::$container = $container;
  }

  public static function container()
  {
    return static::$container;
  }
  
  public static function bind($key, $resolver)
  {
    // call the resolve function 
    static::container()->bind($key, $resolver);
  }

  public static function resolve($key)
  {
    // call the resolve function 
    return static::container()->resolve($key);
  }
}
