<?php
class GoodByWeight extends AbstractGood {
  function getFinalCoast(): int {
    return $this->getCoast();
  }
}