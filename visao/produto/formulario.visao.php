<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Cadastrar Produto</h2>
        <form action="" method="POST">
            Nome: <input type="text" name="nome" value="<?=@$produto['nome']?>"><br><br>
            Descricao: <input type="text" name="descricao" value="<?=@$produto['descricao']?>"><br><br>
            Preço: <input type="text" name="preco" value="<?=@$produto['preco']?>"><br>
            Categoria: <select name="cod_categoria">
            <option value="default"></option>
            <?php foreach ($categorias as $categoria): ?>
            <option value="<?=@$cod_categoria['cos_categoria']?>"><?=@$categoria['nome']?>"></option>
            <?php endforeach;?>
            </select><br><br>
            Imagem: <input type="text" name="imagem" value="<?=@$produto['imagem']?>"><br><br>
            Estoque Máximo: <input type="text" name="estoque_maximo" value="<?=@$produto['estoque_maximo']?>"><br><br>
            Estoque Mínimo: <input type="text" name="estoque_minimo" value="<?=@$produto['estoque_minimo']?>"><br><br>
            
            <?php
            if(ehPost()){
                foreach($erros as $erro){
                    echo "$erro<br>";
                }
            }
        ?>
            
            <br>
            
            <button>Enviar</button>
        </form>
    </body>
</html>