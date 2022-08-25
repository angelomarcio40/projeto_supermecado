<?php
// include da conexão
include '../backend/conexao.php';

//  captura a var global ID recebida via GET
$id = $_GET['id'];

try{
    // comando SQL que irá selecionar as viagen por ID
    $sql = "SELECT * FROM tb_produtos WHERE id=$id";

    $comando = $con->prepare($sql);

    $comando->execute();

    $dados = $comando->fetchAll(PDO::FETCH_ASSOC);

     echo "<pre>";
     var_dump($dados);
     echo "<?pre>";
     echo $dados[0]['valor'];

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
    <title>Alterar Produtos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div id="container">
        <h3>Alterar Produtos</h3>
        <hr>
        <a href="cadastrar_produtos.html">Cadastra Produtos</a>
        <hr>
        
        <form action="../backend/_alterar_produtos.php" method="post" enctype="multipart/form-data">

        <div id="grid-alterar">
            <div>
                <label for="">ID</label>
                <input type="text" name="id" id="id" value="<?php echo $dados[0]['id'];?>" readonly>
            </div>
            <div>
                <label for="">Produto</label>
                <input type="text" name="produto" id="produto" value="<?php echo $dados[0]['produto'];?>">
            </div>
            <div>
                <label for="local">Categoria</label> 
                <input type="text" name="local" id="local" value="<?php echo $dados[0]['categoria'];?>">
            </div>
            <div>
                <label for="">Fabricante</label>
                <input type="text" name="fabricantes" id="fabricantes" value="<?php echo $dados[0]['fabricante'];?>">
            </div>
            <div>
                <label for="imagem">Imagem</label>
                <input type="file" name="imagem" id="imagem">
                <div class="viagem">
                    <img class="img-alterar" src="../img/upload/<?php echo $dados[0]['imagen'];?>" alt="">
                </div>

                <div>
                <label for="">Validade</label>
                <input type="text" name="validade" id="validade" value="<?php echo $dados[0]['validade'];?>">
            </div>

            </div>
        </div>
        
    </div>
    </div>
    <input type="submit" value="Salvar">

        </form>
    
</body>
</html>