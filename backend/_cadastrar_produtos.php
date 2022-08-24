<?php

// Include da conexão com banco de dados
include 'conexao.php';

try{
    // exibe as variaveis globais recebidas via POST
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";
    
    // variaveis que recebm os dados enviados via POST
    $produtos = $_POST['produtos'];
    $categorias = $_POST['categorias'];
    $fabricante = $_POST['fabricante'];
    $valor = $_POST['valor'];

    // variavel que recebe a querry SQL que será executada no BD
    $sql = "INSERT INTO
                tb_produtos
            (
                `produto`,
                `categoria`,
                `fabricante`,
                `valor`
            )
            VALUES
            (
                '$produtos',
                '$categorias',
                '$fabricante',
                '$valor'
                )
            ";

// prepara a execução da querry SQL acima
$comando = $con->prepare($sql);

// executa  o comando com a querryno banco de dados
$comando->execute();

// exibe msg de sucesso ao inserir
echo "Cadastro realizado com sucesso!";

// fechar a conexao
$con = null;


}catch(PDOException $erro){
    echo $erro->getMessage();
    die();

}

// Final da conexão
?>