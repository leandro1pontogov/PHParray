<?php

$action = $_GET["action"];

$nomes = [
      "Leandro",
      "Joao",
      "Danrley",
      "Andre",
      "Jorge",
      "Matheus",
      "Otavio"
    ];

  $alunos = [
            "101" => ["nome" => "Ana", "idade" => 20, "nota" => 8.5],
            "102" => ["nome" => "Bruno", "idade" => 22, "nota" => 7.0],
            "103" => ["nome" => "Carla", "idade" => 21, "nota" => 9.2],
            "104" => ["nome" => "Leandro", "idade" => 25, "nota" => 6],
          ];

$removido = $alunos["104"];
unset($alunos["104"]);

switch ($action) {

 case "listaMercado":

  $comidas = 
  [
    "arroz", 
    "feijao", 
    "bolacha", 
    "agua", 
    "pao"
  ];

  $mensagem = "";

  array_push($comidas, "cebola", "alface");
  array_shift($comidas);

  $quantidade = 0;
  foreach ($comidas as $comida) {
    $mensagem .= "<li>$comida</li>";
    $quantidade++;
  }

  $mensagem .= "<br> Voce possui " . $quantidade . " itens na lista";

  $resposta = ["data" => $mensagem];
  echo json_encode($resposta);
  break;

  case "listaNome":

    $mensagem = "";

    foreach($nomes as $nome){
      $mensagem .= "<li>$nome</li>";
    }

    $resultado = ["data" => $mensagem];
    echo json_encode($resultado);
    break;

    case "listaNomeAlfabetica":

     $mensagem = ""; 
     asort($nomes);

     foreach($nomes as $nome){
      $mensagem .= "<li>$nome</li>";
    }
     
    $resultado = ["data" => $mensagem];
    echo json_encode($resultado);
    break;

    case "listaNomeDecrescente":

     $mensagem = ""; 
     $nomesInvertido = array_reverse($nomes);

     foreach($nomesInvertido as $nome){
      $mensagem .= "<li>$nome</li>";
    }
     
    $resultado = ["data" => $mensagem];
    echo json_encode($resultado);
    break;

    case "numerosPares":

      $numeros = [];
      $numerosPares = [];
      $soma = 0;

      $mensagem = "";
      $mensagem2 = "";

      for($i = 1; $i <= 20; $i++){
       $mensagem .= " " . $numeros[] = $i;
      }

      foreach($numeros as $numero){
        if($numero % 2 == 0){
          $mensagem2 .= " " . $numerosPares[] = $numero;
          $soma += $numero;
        }
      }

      echo "Seu array e: " . $mensagem . "<br><br> Os numeros pares sao: " . $mensagem2 . "<br><br> A soma deu: " . $soma;
      break;

      case "procurandoFruta":

        $frutas = [
          "banana",
          "maca",
          "goiaba",
          "mamao",
          "uva",
          "morango"
        ];

        $frutaDigitada = $_POST["fruta"];

        $mensagem = "Fruta nao encontrada!";

        foreach($frutas as $fruta){
          if(strtolower($frutaDigitada) == strtolower($fruta)) {
            $mensagem = "Fruta encontrada!";
            break;
          }
        }

        $resultado = ["data" => $mensagem];
        echo json_encode($resultado);
        break;

        case "mesclandoArrays":

          $comida = [
            "arroz",
            "feijao",
            "macarrao",
            "bolacha"
          ];

          $preco = [
            "5.50",
            "7.20",
            "4.80",
            "3.10"
          ];

          $mesclados = array_combine($comida, $preco);
          $mensagem = "";

          foreach($mesclados as $comida => $preco){
            $mensagem .= "Comida: ". $comida . " | Valor: " . $preco . "<br>";
          }

          $resultado = ["data" => $mensagem];
          echo json_encode($resultado);
          break;

          case "listaAlunos":

            $mensagem = "";

            foreach($alunos as $aluno => $dados){
              $mensagem .= "Nome: {$dados['nome']}" . " | Idade: {$dados['idade']}" . "<br>";
            }

            $resultado = ["data" => $mensagem];
            echo json_encode($resultado);
            break;

          case "adicionarAluno":

            $alunos["104"] = $removido;
            $mensagem = $removido;

            $mensagem .= "Nome: {$dados['nome']}" . " | Idade: {$dados['idade']}" . "<br>";

            $resultado = ["data" => $mensagem];
            echo json_encode($resultado);

}

