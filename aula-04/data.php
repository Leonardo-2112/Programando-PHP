<?php
//Trabalhando com datas no PHP
//echo date("d/m/y");



// $data = date("d/m/Y");
// echo("Data de hoje: ".$data);


//d -> dia
//m -> mês
//Y -> ano
//H -> hora
//i -> minutos
//s -> segundos


//Definir um fuso horário
// date_default_timezone_set("America/Sao_Paulo");
// echo date("d/m/Y H:i:s");

//Forma moderna de trabalhar com date
// $data = new DateTime();      //Criando Objeto da classe DateTime.
// echo $data->format("d/m/Y"); // "->" para utilizar uma função/método do objeto.
                                // "format" função/método da classe DateTime que está atribuida em $data por meio do objeto.


//Passando parâmetros
// $data1 = new DateTime("2026-04-01");
// $data2 = new DateTime("2026-04-15");

// $diferenca = $data1->diff($data2); // "diff" cálcula a diferença 
// echo $diferenca->days." dias";     // "->" para utilizar uma função/método da classe


// $dataNascimento = new DateTime("2000-05-10");   //Criando objeto de DateTime e atribuindo a $dataNascimento
// $hoje = new DateTime();                         //Criando objeto de DateTime e atribuindo a $hoje
// $idade = $hoje->diff($dataNascimento);          //Calculando a diferença entre $dataNascimento e $hoje e atribuindo a $idade
// echo "Idade: ".$idade->y." anos";               //Exibindo a diferença em anos ($idade->y)