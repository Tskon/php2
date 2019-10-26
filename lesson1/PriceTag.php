<?php

class PriceTag {
  private $name;
  private $amount;
  private $id;

  public function __construct($name, $amount) {
    $this->name = $name;
    $this->amount = $amount;
    $this->id = rand(1, 1000);
  }

  public function showInfo() {
    print ($this->id.' '.$this->name.': '.$this->amount."$<br>");

  }
}