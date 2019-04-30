<?php
include("servico/validacaoServico.php");

function cadastro() {
    if (ehPost()){
       $nome = $_POST["nome"];
       $cpf = $_POST["cpf"];
       $tel = $_POST["tel"];
       $s = $_POST["sexo"];
       $email = $_POST["email"];
       $senha = $_POST["senha"];
       $repetirsenha = $_POST["repetirsenha"];
        
       echo vali_preenchido($nome). "<br>";
       echo vali_preenchido($senha). "<br>";
       echo vali_preenchido($repetirsenha). "<br>";
       echo vali_email($email). "<br>"; 
       echo vali_num($cpf). "<br>"; 
       echo vali_num($tel). "<br>"; 
       
        print_r($_POST);
    } else {
        exibir("cliente/cadastro");
    }
}

function contato(){
    if(ehPost()){
        $nome = $_POST["nome"];
        $tel = $_POST["tel"];
        $email = $_POST["email"];
        $mensagem = $_POST["msg"];
        
        echo vali_preenchido($nome). "<br>";
        echo vali_preenchido($mensagem). "<br>";
        echo vali_email($email). "<br>"; 
        echo vali_num($tel). "<br>"; 
        
        print_r($_POST);
    } else {
        exibir("cliente/contato");
    }
}