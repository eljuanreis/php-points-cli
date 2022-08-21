<?php
namespace elJuanReis\ScorePoints\Entity;

use elJuanReis\ScorePoints\Services\CreatePointsService;
use elJuanReis\ScorePoints\Services\GetRankingService;
use elJuanReis\ScorePoints\Validations\isValidOptionValidation;

class CliEntity
{
  const OPTIONS = [1 => 'Cadastrar pontuação', 2 => 'Ranking de pontuação'];

  protected $option = null;
  public $pontos = [];

  public function __construct()
  {
    $this->sendInitialMessage();

    $this->sendSelector();
  }

  private function sendInitialMessage() : void
  {
    $message = "Bem-vindo ao gerenciador de pontos! \n Opções disponíveis: \n";

    foreach(self::OPTIONS as $option => $optionLabel)
    {
      $message .= "[$option] - $optionLabel \n";
    }

    echo $message;
  }

  public function sendSelector() : void
  {
    while($this->option === null)
    {
      $line = trim(fgets(STDIN)); // Lê uma linha do STDIN

      if(isValidOptionValidation::isValidOption($line, self::OPTIONS))
      {
        $this->option = $line;

          switch($this->option):
            case 1:
              //Criando Pontuação
                $createPoints = new CreatePointsService();
                $this->pontos[] = $createPoints->createUserPoints();
              break;
            case 2:
              if($this->pontos)
              {
                new GetRankingService($this->pontos);
              }
              break;

          endswitch;
      }

      $this->option = null;
      $this->sendInitialMessage();
    }

  }
}