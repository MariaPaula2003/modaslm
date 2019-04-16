<?php

function visualizar() {
    
    $dados = array();
    $dados["nome"] = 'Pijama de Unicornio';
    $dados["descricao"] = 'Pijama infantil feito de poliéster de ótima qualidade';
    $dados["preco"] = 'R$ 56,90';
    
    exibir("produtos/visualizar", $dados);
}