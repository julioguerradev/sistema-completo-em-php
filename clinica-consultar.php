<h1>Clinica consultar</h1>
<div class="row">
    <div class="col-lg4 offset-lg-8">
        <form action="?page=clinica-consultar" method="POST" class="form-inline my-2 my-lg-0">
            <input type="text" name="pesquisa" class="form-control" placeholder="Pesquisar...">&nbsp;
            <button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>
<?php
if (@$_REQUEST["pesquisa"]) {
    $sql = "SELECT * FROM clinica WHERE nome_clinica LIKE '%" . $_REQUEST["pesquisa"] . "%'";
} else {
    $sql = "SELECT * FROM clinica";
}
$res = $conn->query($sql) or die($conn->error);
$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<p>Econtrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-striped table-bordered table-hover'>";
    print "<tr>";
    print "<th width='50'>#</th>";
    print "<th>Nome da Clinica</th>";
    print "<th width='120'>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id_clinica . "</td>";
        print "<td>" . $row->nome_clinica . "</td>";
        print   "<td>
                    <button class='btn btn-success'  onclick=\"location.href='?page=clinica-editar&id_clinica=" . $row->id_clinica . "';\"><i class=\"fa fa-edit\"></i></button>

                    <button class='btn btn-danger'  onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=clinica-salvar&acao=excluir&id_clinica=" . $row->id_clinica . "';}else{false;}\"><i class=\"fa fa-trash\"></i></button>
                    </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<div class='alert alert-danger'>Nenhum dado encontrado</div>";
}
?>