<?php

// Include da conexão com banco de dados
include 'conexao.php';

try{
    // exibe as variaveis globais recebidas via POST
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";
    
    // variaveis que recebm os dados enviados via POST
    $produto = $_POST['produto'];
    $categoria = $_POST['categoria'];
    $fabricante = $_POST['fabricante'];
    $valor = $_POST['valor'];
    $validade = $_POST['validade'];

    // variavel que recebe a querry SQL que será executada no BD
    $sql = "INSERT INTO
                tb_viagens
            (
                `produto`,
                `categoria`,
                `fabricante`,
                `valor`,
                `validade`
            )
            VALUES
            (
                '$produto',
                '$categoria',
                '$fabricante',
                '$valor',
                '$validade'
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

}

// Final da conexão
?>