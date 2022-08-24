<?php
    include '../backend/conexao.php';

    try{
        $sql = "SELECT * FROM tb_produtos";

        $comando = $con->prepare($sql);

        $comando->execute();

        $dados = $comando->fetchAll(PDO::FETCH_ASSOC);

        // echo "<pre>";
        // var_dump($dados);
        // echo "</pre>";

    }catch(PDOException $erro){
        echo $erro->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Produtos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
   <div id="container">
    <h3>Gerenciar Produtos</h3>

    <div id="tabela">
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Produto</th>
                <th>Categoria</th>
                <th>Fabricante</th>
                <th>Valor</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
            <?php foreach($dados as $produto):?>
            <tr>
                <td><?php echo $produto['id']?></td>
                <td><?php echo $produto['produto']?></td>
                <td><?php echo $produto['categoria']?></td>
                <td><?php echo $produto['fabricante']?></td>
                <td><?php echo $produto['valor']?></td>
                <td>Deletar</td>
                <td>
                    <a href="../backend/_deletar_produtos.php?id=<?php echo $produto['id']?>">deletar</a>
                </td>
            </tr>

            <?php endforeach;?>
    </div>
   </div> 
</body>
</html>