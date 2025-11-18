<?php
declare(strict_types=1);

require_once __DIR__ . '/Punkt.php';

class Polygon {
  public $coords;

  function __construct($coords = array())
  {
    $this->coords = $coords;
  }

  function __toString()
  {
    if( empty($this->coords) ) {
      return '(keine Punkte)';
    }

    return implode(' / ', $this->coords);
  }

  public function verschieben($x, $y) {
    foreach( $this->coords as $coord ) {
      $coord->verschieben($x, $y);
    }
  }
}