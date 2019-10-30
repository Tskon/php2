<?php


abstract class AbstractGood {
  private $label;
  private $coast;
  private $unit;
  private $unitType;

  public function getCoast() : int {
    return $this->coast;
  }

  public function __construct(string $label, int $coast, int $unit, string $unitType) {
    $this->label = $label;
    $this->coast = $coast;
    $this->unit = $unit;
    $this->unitType = $unitType;
  }

  abstract function getFinalCoast(): int;

  public function getPriceTag(): void {
    $finalCoast = $this->getFinalCoast();

    $labelString = "| $this->label $finalCoast$ за $this->unit $this->unitType |";
    $labelBorder = str_repeat('-', mb_strlen($labelString));

    echo "$labelBorder<br>$labelString<br>$labelBorder<br><br>";
  }
}