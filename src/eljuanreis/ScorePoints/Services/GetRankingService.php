<?php

namespace elJuanReis\ScorePoints\Services;

use elJuanReis\ScorePoints\Entity\CliEntity;
use elJuanReis\ScorePoints\Entity\UserRankingEntity;

class GetRankingService
{
  protected array $userPoints;

  public function __construct(array $UserRankingEntity)
  {
    $this->userPoints = $UserRankingEntity;

    $contador = 1;
    foreach($this->userPoints as $user)
    {
     echo $contador . "º - " . $user->getName() . " - Pontos: " . $user->getPoints() . "\n";
     $contador++;
    }

  }
}