<?php
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
    <div id="conatainer">
        <h3>Alterar Produtos</h3>
        <form action="../backend/_alter_produtos.php" method="post">

        <div id="grid-alterar">
            <div>
                <label for="">ID</label>
                <input type="text" name="id" id="id" value="<?php echo $dados[0]['id'];?>" readonly>
            </div>
            <div>
                <label for="">Título</label>
                <input type="text" name="produto" id="produto" value="<?php echo $dados[0]['produto'];?>">
            </div>
            <div>
            </div>
        </div>
        </form>
    </div>
    
</body>
</html>