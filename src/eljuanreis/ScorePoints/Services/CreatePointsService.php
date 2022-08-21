<?php

namespace elJuanReis\ScorePoints\Services;

use elJuanReis\ScorePoints\Entity\UserRankingEntity;

class CreatePointsService
{
  protected $usersList = [];

  public function createUserPoints() : UserRankingEntity
  {
    echo "Digite o nome do jogador: \n";
    $name = trim(fgets(STDIN)); // Lê uma linha do STDIN

    echo "Digite os pontos do jogador: \n";
    $points = trim(fgets(STDIN)); // Lê uma linha do STDIN

    $user = new UserRankingEntity($name, $points);
    
    echo "\n ******************* \n Pontos cadastrados com sucesso! Redirecionando ao menu! \n";
    return $user;
  }
}