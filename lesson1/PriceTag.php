<?php

class PriceTag {
  public $name;
  public $amount;
  public $id;

  public function __construct(string $name, int $amount) {
    $this->name = $name;
    $this->amount = $amount;
    $this->id = rand(1, 1000);
  }

  public function showInfo() {
    print ($this->id . ' ' . $this->name . ': ' . $this->amount . "$<br>");
  }
}

class PriceTagRubles extends PriceTag {
  public function __construct(string $name, int $amount) {
    parent::__construct($name, $amount);
  }

  public function showInfo() {
    print ($this->id . ' ' . $this->name . ': ' . $this->amount . "руб.<br>");
  }
}