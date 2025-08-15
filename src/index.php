<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
		integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <style>
    #linha{
      border: 1px dashed black;
      margin-top: 15px;
      margin-bottom: 15px;
      width: 70%;
    }
    #conteudo{
      align-items: center;
      display: flex;
      flex-direction: column;
    }
  </style>
<script>
$(document).ready(function() {
  $("#BtnEnviar").click(function(){
    $.post(
      "script.php?action=listaMercado",
      {
        
      },
      function(response){
        $("#listaMercado").html(response.data);
        $("#BtnRemoverMercado").show()
        $("#BtnEnviar").hide()
        console.log(response.data)
      },
   "json"
    )
  })
  $("#BtnRemoverMercado").click(function(){
    $.post(
      "script.php?action=removerMercado",
      {
        
      },
      function(response){
        $("#listaMercado").html(response.data);
        $("#BtnRemoverMercado").hide()
        $("#BtnQuantidadeMercado").show()
        console.log(response.data)
      },
   "json"
    )
  })
  $("#BtnQuantidadeMercado").click(function(){
    $.post(
      "script.php?action=mostrarQuantidade",
      {
        
      },
      function(response){
        $("#listaMercado").html(response.data);
        $("#BtnQuantidadeMercado").show()
        console.log(response.data)
      },
   "json"
    )
  })
  $("#BtnEnviarNome").click(function(){
    $("#BtnOrdenarAlfabetica").show()
    $("#BtnOrdenarDecrescente").show()
    $("#BtnEnviarNome").show(false)
    $.post(
      "script.php?action=listaNome",
      {
        
      },
      function(response){
        $("#listaNome").html(response.data);
        $("#BtnEnviarNome").hide()
        console.log(response.data)
      },
   "json"
    )
  })
  $("#BtnOrdenarAlfabetica").click(function(){
    $.post(
      "script.php?action=listaNomeAlfabetica",
      {
        
      },
      function(response){
        $("#listaNome").html(response.data);
        console.log(response.data)
      },
   "json"
    )
  })
  $("#BtnOrdenarDecrescente").click(function(){
    $.post(
      "script.php?action=listaNomeDecrescente",
      {
        
      },
      function(response){
        $("#listaNome").html(response.data);
        console.log(response.data)
      },
   "json"
    )
  })
  $("#BtnEnviarNumero").click(function(){
    $.post(
      "script.php?action=mostrarNumeros",
      {
        
      },
      function(response){
        $("#listaNumero").html(response);
        $("#BtnNumerosPares").show()
        $("#BtnEnviarNumero").hide()
        console.log(response)
      },
    )
  })
  $("#BtnNumerosPares").click(function(){
    $.post(
      "script.php?action=numerosPares",
      {
        
      },
      function(response){
        $("#listaNumero").html(response.data);
        $("#BtnNumerosPares").hide()
        $("#BtnNumerosParesSoma").show()
        console.log(response.data)
      },
      "json"
    )
  })
  $("#BtnNumerosParesSoma").click(function(){
    $.post(
      "script.php?action=mostrarSoma",
      {
        
      },
      function(response){
        $("#listaNumero").html(response.data);
        $("#BtnNumerosParesSoma").hide()
        console.log(response.data)
      },
      "json"
    )
  })
  $("#BtnEnviarFruta").click(function(){
    $.post(
      "script.php?action=procurandoFruta",
      {
       fruta: $("#fruta").val(),
      },
      function(response){
        $("#respostaFruta").html(response.data);
        $("#fruta").val("");
        console.log(response)
      },
      "json"
    )
  })
  $("#BtnMostrarLista").click(function(){
    $.post(
      "script.php?action=mesclandoArrays",
      {
        
      },
      function(response){
        $("#mostrar").html(response.data);
        $("#BtnMostrarLista").hide()
        console.log(response.data)
      },
      "json"
    )
  })
  $("#BtnMostrarAlunos").click(function(){
    $.post(
      "script.php?action=listaAlunos",
      {

      },
      function(response){
        $("#mostrarAlunos").html(response.data);
        $("#BtnAdicionarAluno").show()
        $("#BtnMostrarAlunos").hide()
        console.log(response.data)
      },
      "json"
    )
  })
   $("#BtnAdicionarAluno").click(function(){
    $.post(
      "script.php?action=adicionarAluno",
      {
        
      },
      function(response){
        $("#mostrarAlunos").html(response.data);
        $("#BtnAdicionarAluno").hide()
        $("#BtnAtualizarNotaAluno").show()
        console.log(response.data)
      },
      "json"
    )
  })
  $("#BtnAtualizarNotaAluno").click(function(){
    $.post(
      "script.php?action=atualizarNotaAluno",
      {
        
      },
      function(response){
        $("#mostrarAlunos").html(response.data);
        $("#BtnAtualizarNotaAluno").hide()
        $("#BtnCalcularMediaAluno").show()
        console.log(response.data)
      },
      "json"
    )
  })
  $("#BtnCalcularMediaAluno").click(function(){
    $.post(
      "script.php?action=calcularMedia",
      {
        
      },
      function(response){
        $("#mostrarAlunos").html(response.data);
        $("#BtnCalcularMediaAluno").hide()
        $("#BtnOrdenarNota").show()
        console.log(response.data)
      },
      "json"
    )
  })
  $("#BtnOrdenarNota").click(function(){
    $.post(
      "script.php?action=ordenarNotas",
      {
        
      },
      function(response){
        $("#mostrarAlunos").html(response.data);
        $("#BtnOrdenarNota").hide()
        $("#BtnMedia").show()
        console.log(response.data)
      },
      "json"
    )
  })
  $("#BtnMedia").click(function(){
    $.post(
      "script.php?action=mediaMaior",
      {
        
      },
      function(response){
        $("#mostrarAlunos").html(response.data);
        $("#BtnMedia").hide()
        console.log(response.data)
      },
      "json"
    )
  })
})
</script>
</head>

<body>

  <div id="conteudo">
    <ul id="listaMercado">
      <li>arroz</li>
      <li>feijao</li>
      <li>bolacha</li>
      <li>agua</li>
      <li>pao</li>
    </ul>
    <input id="BtnEnviar" type="button" value="Adicionar 2 itens">
    <input id="BtnRemoverMercado" type="button" value="Remover primeiro intem" hidden>
    <input id="BtnQuantidadeMercado" type="button" value="Mostrar quantidade de itens" hidden>

    <div id="linha"></div>

    <ul id="listaNome">
      
    </ul>
    <input id="BtnEnviarNome" type="button" value="Mostrar Lista Nome">
    <input id="BtnOrdenarAlfabetica" type="button" value="Ordem Alfabetica" hidden>
    <input id="BtnOrdenarDecrescente" type="button" value="Ordem Descrescente" hidden>

    <div id="linha"></div>

    <ul id="listaNumero">
      
    </ul>

    <input id="BtnEnviarNumero" type="button" value="Mostrar Lista Numero">
    <input id="BtnNumerosPares" type="button" value="Mostrar Numeros Pares" hidden>
    <input id="BtnNumerosParesSoma" type="button" value="Mostrar Soma" hidden>

    <div id="linha"></div>

    <label for="fruta">Diga uma fruta:</label>
    <input type="text" id="fruta">
    <input id="BtnEnviarFruta" type="button" value="Enviar">
    <div id="respostaFruta"></div>

    <div id="linha"></div>

    <input id="BtnMostrarLista" type="button" value="Mostrar Lista">
    <div id="mostrar"></div>

    <div id="linha"></div>

    <input id="BtnMostrarAlunos" type="button" value="Mostrar Lista Alunos">
    <div id="mostrarAlunos"></div>

    <input id="BtnAdicionarAluno" type="button" value="Adicionar Aluno" hidden>

    <input id="BtnAtualizarNotaAluno" type="button" value="Atualizar Nota Aluno" hidden>

    <input id="BtnCalcularMediaAluno" type="button" value="Calcular Media" hidden>

    <input id="BtnMedia" type="button" value="Media maior que 8" hidden>

    <input id="BtnOrdenarNota" type="button" value="Ordenar por Nota" hidden>


  </div>

</body>

</html>

<?php



  