<?php
declare(strict_types=1);

class Punkt {

  function __construct(protected float $x = 0, protected float $y = 0)
  {
    // 
  }

  function __toString()
  {
    return "($this->x / $this->y)";
  }

  function verschieben(float $x, float $y) {
    $this->x += $x;
    $this->y += $y;
  }
}