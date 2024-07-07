<?php

namespace App\support;

class Session 
{
  public static function set(string $name, mixed $value) 
  {
    if(!self::has($name)) {
      $_SESSION[$name] = $value;
    }
  }

  public static function get(string $name) 
  {
    if(self::has($name)) {
      return $_SESSION[$name];
    }
  }

  public static function has(string $name) 
  {
    if(array_key_exists($name, $_SESSION)) {
      return true;
    }
  }

  public static function delete(string $name) 
  {
    if(self::has($name)) {
      unset($_SESSION[$name]);
    }
  }

  public static function deleteAll() 
  {
    session_reset();
    session_unset();
    session_destroy();
  }

}