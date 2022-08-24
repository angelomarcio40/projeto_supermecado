<?php 
include('../includes/conexao.php');
?>
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <div class="container">
    <div class="row centered-form">
      <div class="col-lg-12 ">
          <p><a href="index.php">Add New Record</a></p>
        <div class="panel panel-default">

          <div class="panel-heading">
            <h3 class="panel-title">CRUD Operation Using PHP PDO</h3> </div>
          <div class="panel-body">
          <?php
          $query = "SELECT * from tb_reserva";
          $res = mysqli_query($conexao,$query);

          // conta o numero de registros
          $total = mysqli_num_rows($res);

          ?>

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Produtos</th>
                  <th>Categorias</th>
                  <th>Fabricantes</th>
                  <th>Valor</th>
                  <th>Validade</th>
                  
                </tr>
              </thead>
              <tbody>
      <?php
      while($dados=mysqli_fetch_array($res)){
        $id = $dados['id']
        ?>
                  <tr>
                    <td><?php echo $dados ['Produtos'] ?></td>
                    <td><?php echo $dados ['Categorias'] ?></td>
                    <td><?php echo $dados ['Fabricantes'] ?></td>
                    <td><?php echo $dados ['Valor'] ?></td>
                    <td><?php echo $dados ['Validade'] ?></td>
                    <td><button><a href="alterar_produtos.php?idreserva=<?php echo $id;?>">Alterar</button></a></td>
                    <td><button><a href="_deletar_produtos.php?idreserva=<?php echo $id;?>">Excluir</button></a></td>
                  </tr> 
                  <?php } ?> 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style type="text/css">
  body {
    background-color: #fff;
  }
  
  .centered-form {
    margin-top: 60px;
  }
  
  .centered-form .panel {
    background: rgba(255, 255, 255, 0.8);
    box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
  }
  </style>