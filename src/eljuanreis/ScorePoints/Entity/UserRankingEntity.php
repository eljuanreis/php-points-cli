<?php

namespace elJuanReis\ScorePoints\Entity;

class UserRankingEntity
{
  protected $name, $points;

  public function __construct($name, $points)
  {
    $this->name = $name;
    $this->points = $points;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getPoints()
  {
    return $this->points;
  }
}