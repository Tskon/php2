<?php
class Good extends AbstractGood {
  function getFinalCoast(): int {
    return $this->getCoast();
  }
}