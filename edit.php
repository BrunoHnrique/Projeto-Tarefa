<?php include_once("templates/header.php") ?>

<div class="container">
    <h1>Editar tarefa</h1>

    <form action="config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $contact["id"]?>">
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo:</label>
            <input type="text" name = "titulo" class="form-control" id="titulo" aria-describedby="emailHelp" value="<?= $contact["titulo"]?>">
        </div>
        <div class="mb-3">
            <label for="tarefa" class="form-label">tarefa:</label>
            <input type="text" name = "tarefa" class="form-control" id="tarefa" aria-describedby="emailHelp" value="<?= $contact["tarefa"]?>">
        </div>
        <input class="btn btn-primary" type="submit" value="Confirmar">
    </form>


</div>

</body>
</html>