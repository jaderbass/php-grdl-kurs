<?php

require_once __DIR__ . '/Polygon.php';

class PolygonGefuellt extends Polygon {

  public $color;

  function __construct($coords, $color)
  {
    $this->color = $color;
    parent::__construct($coords);
  }

  function __toString()
  {
    return parent::__toString() . ' / ' . $this->color;
  }

  function faerben($color) {
    $this->color = $color;
  }

}