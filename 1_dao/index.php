<?php
    include_once("db.php")


?>

<h1>Inisira um carro:</h1>
<form action="process.php" method="POST">
    <div>
        <label for="brand">Marca do carro</label>
        <input type="text" name="brand" id="" placeholder="insira a marca">
    </div>

    <div>
        <label for="km">Kilometragem</label>
        <input type="text" name="km" id="" placeholder="insira a Kilometragem">
    </div>

    <div>
        <label for="color">Cor do carro</label>
        <input type="text" name="color" id="" placeholder="insira a cor do carro">
    </div>

    <input type="submit" value="Salvar">
</form>
