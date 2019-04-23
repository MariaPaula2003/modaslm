<?php

function cadastro() {
    if (ehPost()){
       $nome = $_POST["nome"];
       $cpf = $_POST["cpf"];
       $tel = $_POST["tel"];
       $s = $_POST["sexo"];
       $email = $_POST["email"];
       $senha = $_POST["senha"];
       $repetirsenha = $_POST["repetirsenha"];
        
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
        
        print_r($_POST);
    } else {
        exibir("cliente/contato");
    }
}