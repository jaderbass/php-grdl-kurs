<?php
declare(strict_types=1);

require_once __DIR__ . '/Punkt.php';

class Linie {

  public $start;
  public $ende;

  function __construct($start = new Punkt, $ende = new Punkt)
  {
    $this->start = $start;
    $this->ende = $ende;
  }

  public function verschieben($x, $y) {
    $this->start->verschieben($x, $y);
    $this->ende->verschieben($x, $y);
  }

  function __toString()
  {
    return "$this->start / $this->ende";
  }
}