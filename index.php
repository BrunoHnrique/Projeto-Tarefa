
<?php include_once("templates/header.php") ?>
    
<?php if(count($contact) <= 0 ):?>
    <h1 class="main-title">Voce nao tem Tarefas deseja <a href="create.php">adicionar</a></h1>
<?php endif; ?>
<div class ="container">
    <h1 class="main-title">Tarefas</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tarefas</th>
        <th scope="col">Descricao</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <?php foreach($contact as $contato): ?>
    <tbody>
      <tr>
          <th scope="row"><?= $contato["id"] ?></th>
          <td><?= $contato["titulo"] ?></td>
          <td><?= $contato["tarefa"] ?></td>
          <td><a href="tarefa.php?id=<?= $contato["id"] ?>"><i class="fa-solid fa-eye"></i></a></td>
          <td><a href="edit.php?id=<?= $contato["id"] ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
          <form action="config/process.php" method="POST">
            <input type="hidden" name="type" value="delete">
            <input type="hidden" name="id" value="<?= $contato["id"]?>">
            <td><button type ="submit"><a href=""><i class="fa-solid fa-trash"></i></a></button></td>
          </form>
      </tr>
    </tbody>
    <?php endforeach; ?>
  </table>
</div>
</body>
</html>