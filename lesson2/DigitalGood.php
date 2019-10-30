<?php
class DigitalGood extends AbstractGood {
  function getFinalCoast(): int {
    return $this->getCoast() / 2;
  }
}