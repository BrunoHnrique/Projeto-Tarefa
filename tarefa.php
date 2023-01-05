<?php include_once("templates/header.php") ?>

<div class="container">
    <h1 class="main-title">Tarefa <?= $id?></h1>

    <label for="titulo">Titulo:</label>
    <p id="titulo"><?= $contact["titulo"]?></p>
    <p>Tarefa: <?= $contact["tarefa"]?></p>

</div>

</body>
</html>