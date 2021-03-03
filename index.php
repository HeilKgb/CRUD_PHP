<?php
//conexao
include_once 'php_action/db_connect.php';
//HEADER
include_once 'includes/header.php';
//mensagem
include_once 'includes/msg.php'
?>
<div class="row">
  <div class="col s-12 m6 push-m3 ">
    <h3 class="ligth"> Clientes </h3>
    <table class="striped">
      <!--deixa a tabela zebrada-->
      <thead>
        <tr>
          <th>Nome</th>
          <th>Sobrenome</th>/
          <th>Email</th>
          <th>Idade</th>

        </tr>
      </thead>
      <tbody>
        <?php
        $sql = 'SELECT * FROM clientes';
        $resultado = mysqli_query($connect, $sql);
        //mysqli_fetch_array = Obtem uma linha do resultado como uma matriz associativa, numérica, ou ambas
        if (mysqli_num_rows($resultado) > 0) :
          while ($dados = mysqli_fetch_array($resultado)) :
        ?>
            <tr>
              <td><?php echo $dados['nome']; ?></td>
              <td><?php echo $dados['sobrenome']; ?></td>
              <td><?php echo $dados['email']; ?></td>
              <td><?php echo $dados['idade']; ?></td>
              <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating teal" method="GET"><i class="material-icons">edit</i></a></td>

              <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons " name="btn-exluir">delete</i></a></td>
              <!-- Modal Structure -->
              <div id="modal<?php echo $dados['id']; ?>" class="modal">
                <div class="modal-content">
                  <h4>Opa!</h4>
                  <p>Tem certeza que deseja excluir esse cliente?</p>
                </div>
                <div class="modal-footer">
                  <form action="php_action/delete.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                    <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
                  </form>
                </div>

              </div>
            </tr>
            <?php endwhile;
        else : ?>?
            <tr>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
            </tr>
          <?php
        endif; ?>
      </tbody>
    </table>
    <br>
    <a href="add.php" class="btn">Adicionar cliente</a>
  </div>
</div>
<?php
//FOOTER
include_once 'includes/footer.php';
?>