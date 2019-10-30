<?php

trait SingletonTrait {

  private static $instance;

  public static function single() {
    if (!isset(self::$instance)) {
      self::$instance = new static;
    }

    return self::$instance;
  }
}

class Test {
  use SingletonTrait;

  public $value = 0;
}

$first = Test::single();
$second = Test::single();

$first->testVal = 777;
echo $second->testVal;
