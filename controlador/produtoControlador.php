<?php

function visualizar() {
    
    $dados = array();
    $dados["nome"] = 'Pijama de Unicornio';
    $dados["descricao"] = 'Pijama infantil feito de poliéster de ótima qualidade';
    $dados["preco"] = 'R$ 56,90';
    
    exibir("produtos/visualizar", $dados);
}

function adicionar() {
    if (ehPost()){
        $nome = $_POST["nome"];
        $quant = $_POST["quant"];
        $descricao = $_POST["descricao"];
        $preco = $_POST["preco"];
        
        print_r($_POST);
    } else {
        exibir("produtos/formulario");
    }
}
