<?php

class PriceTag {
  private $name;
  private $amount;
  static $id;

  public function __construct($name, $amount) {
    $this->name = $name;
    $this->amount = $amount;
  }

  public function showInfo() {
    print ($this -> $id);
    print ($this -> $name);
    print ($this -> $amount);
  }
}