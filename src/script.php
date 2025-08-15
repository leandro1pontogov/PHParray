<?php

$action = $_GET["action"];

$comidas = [
  "arroz", 
  "feijao", 
  "bolacha", 
  "agua", 
  "pao"
];

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

  $mensagem = "";

  array_push($comidas, "cebola", "alface");

  foreach ($comidas as $comida) {
    $mensagem .= "<li>$comida</li>";
    $quantidade++;
  }

  $resposta = ["data" => $mensagem];
  echo json_encode($resposta);
break;

case "removerMercado":

  $mensagem = "";

  array_push($comidas, "cebola", "alface");
  array_shift($comidas);

  foreach($comidas as $comida){
    $mensagem .= "<li>$comida</li>";
  }

  $resultado = ["data" => $mensagem];
  echo json_encode($resultado);
  break;

case "mostrarQuantidade":

  $mensagem = "";

  array_push($comidas, "cebola", "alface");
  array_shift($comidas);

  $quantidade = 0;
  foreach ($comidas as $comida) {
    $mensagem .= "<li>$comida</li>";
    $quantidade++;
  }

  $mensagem .= "<br> Voce possui " . $quantidade . " itens na lista";

  $resultado = ["data" => $mensagem];
  echo json_encode($resultado);
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

case "mostrarNumeros":

  $numeros = [];

  $mensagem = "";
  $mensagem2 = "";

  for($i = 1; $i <= 20; $i++){
    $mensagem .= " " . $numeros[] = $i;
  }

  echo "Seu array e: " . $mensagem;
break;

case "numerosPares":

  $mensagem = "";

  $numeros = [];
  $numerosPares = [];

  $mensagem = "";
  $mensagem2 = "";
  $mensagemFinal = "";

  for($i = 1; $i <= 20; $i++){
    $mensagem .= " " . $numeros[] = $i;
  }

  foreach($numeros as $numero){
    if($numero % 2 == 0){
      $mensagem2 .= " " . $numerosPares[] = $numero;
    }
  }

  $mensagemFinal .= "Seu array e: " . $mensagem . "<br><br> Os numeros pares sao: " . $mensagem2;

  $resultado = ["data" => $mensagemFinal];
  echo json_encode($resultado);
break;

case "mostrarSoma":

  $mensagem = "";

  $numeros = [];
  $numerosPares = [];
  $soma = 0;

  $mensagem = "";
  $mensagem2 = "";
  $mensagemFinal = "";

  for($i = 1; $i <= 20; $i++){
    $mensagem .= " " . $numeros[] = $i;
  }

  foreach($numeros as $numero){
    if($numero % 2 == 0){
      $mensagem2 .= " " . $numerosPares[] = $numero;
      $soma += $numero;
    }
  }

  $mensagemFinal .= "Seu array e: " . $mensagem . "<br><br> Os numeros pares sao: " . $mensagem2 . "<br><br> A soma deu: " . $soma;

  $resultado = ["data" => $mensagemFinal];
  echo json_encode($resultado);
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

  foreach($frutas as $indice => $fruta){
    if(strtolower($frutaDigitada) == strtolower($fruta)) {
      $mensagem = "Fruta encontrada! <br> No indice: " . $indice;
      break;
    }
  }

  $resultado = ["data" => $mensagem];
  echo json_encode($resultado);
break;

case "primeiroArray":

  $comida = [
    "arroz",
    "feijao",
    "macarrao"
  ];

  $mensagem = "";

  foreach($comida as $c){
    $mensagem .= "Comida: ". $c . "<br>";
  }

  $resultado = ["data" => $mensagem];
  echo json_encode($resultado);
break;

case "segundoArray":

  $preco = [
    "5.50",
    "7.20",
    "4.80"
  ];

  $mensagem = "";

  foreach($preco as $p){
    $mensagem .= "Preco: ". $p . "<br>";
  }

  $resultado = ["data" => $mensagem];
  echo json_encode($resultado);
break;

case "mesclandoArrays":

  $comida = [
    "arroz",
    "feijao",
    "macarrao"
  ];

  $preco = [
    "5.50",
    "7.20",
    "4.80"
  ];

  $mesclados = array_combine($comida, $preco);
  $mensagem = "";

  foreach($mesclados as $comida => $preco){
    $mensagem .= "Comida: ". $comida . " | Valor: " . $preco . "<br>";
  }

  $resultado = ["data" => $mensagem];
  echo json_encode($resultado);
break;

case "adicionarValor":

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
    $mensagem .= "Nome: {$dados['nome']}" . " | Nota: {$dados['nota']}" . "<br>";
  }

  $resultado = ["data" => $mensagem];
  echo json_encode($resultado);
break;

case "adicionarAluno":

  $alunos["104"] = $removido;

  foreach($alunos as $removido => $dados){
    $mensagem .= "Nome: {$dados['nome']}" . " | Nota: {$dados['nota']}" . "<br>";
  }

  $resultado = ["data" => $mensagem];
  echo json_encode($resultado);
break;

case "atualizarNotaAluno":
  
  $alunos["102"]["nota"] = 5;
  $alunos["104"] = $removido;

    foreach($alunos as $removido => $dados){
    $mensagem .= "Nome: {$dados['nome']}" . " | Nota: {$dados['nota']}" . "<br>";
  }

  $resultado = ["data"=> $mensagem];
  echo json_encode($resultado);
break;

case "calcularMedia":

  $mensagem = "";

  $alunos["102"]["nota"] = 5;
  $alunos["104"] = $removido;

    foreach($alunos as $removido => $dados){
    $mensagem .= "Nome: {$dados['nome']}" . " | Nota: {$dados['nota']}" . "<br>";
  }

  foreach($alunos as $id => $aluno){
    $soma += $aluno["nota"];
  }

  $media = $soma / count($alunos);

  $mensagem .= "<br> A media das notas e: " . $media;

  $resultado = ["data"=> $mensagem];
  echo json_encode($resultado);
break;

case "ordenarNotas":

  $mensagem = "";

  $alunos["102"]["nota"] = 5;
  $alunos["104"] = $removido;

  usort($alunos, function($a, $b) {
      return ($a["nota"] > $b["nota"]) ? -1 : 1;
  });

  foreach($alunos as $aluno){
    $mensagem .= "Nome: {$aluno['nome']}" . " | Nota: {$aluno['nota']}" . "<br>";
  };

  $resultado = ["data"=> $mensagem];
  echo json_encode($resultado);
break;

case "mediaMaior":

  $mensagem = "";

  $alunos["102"]["nota"] = 5;
  $alunos["104"] = $removido;

  foreach($alunos as $aluno){
    if($aluno['nota'] > 8){
      $mensagem .= "Nome: {$aluno['nome']}" . " | Nota: {$aluno['nota']}" . "<br>";
    } 
  }

  $resultado = ["data" => $mensagem];
  echo json_encode($resultado);
break;
}

