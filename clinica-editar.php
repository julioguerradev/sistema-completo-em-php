<h1>Clinica Editar</h1>
<?php
    $sql = "SELECT * FROM clinica 
    WHERE id_clinica =".$_GET["id_clinica"];

    $res = $conn->query($sql) or die($conn->error);

    $row = $res->fetch_object();
?>
<form action="?page=clinica-salvar" method="POST">
<input type="hidden" name="acao" value="editar">

<input type="hidden" name="id_clinica" value="<?php print $row->id_clinica;?>">
    <div class="form-group">
    <label>Nome da Clínica</label>
    <input type="text" name="nome_clinica" value="<?php print $row->nome_clinica?>" class="form-control">
    </div>

    <div class="form-group">
    <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>