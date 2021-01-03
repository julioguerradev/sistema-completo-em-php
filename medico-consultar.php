<h1>Médico consultar</h1>
<div class="row">
    <div class="col-lg4 offset-lg-8">
        <form action="?page=medico-consultar" method="POST" class="form-inline my-2 my-lg-0">
            <input type="text" name="pesquisa" class="form-control" placeholder="Pesquisar...">&nbsp;
            <button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>
<?php
if (@$_REQUEST["pesquisa"]) {
    $sql = "SELECT * FROM medico AS m
    INNER JOIN clinica AS c
    ON c.id_clinica = m.clinica_id_clinica
    WHERE nome_medico LIKE '%" . $_REQUEST["pesquisa"] . "%'";
} else {
    $sql = "SELECT * FROM medico AS m
    INNER JOIN clinica AS c
    ON c.id_clinica = m.clinica_id_clinica";
}
$res = $conn->query($sql) or die($conn->error);
$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<p>Econtrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Clínica Pertencente</th>";
    print "<th>Nome do médico</th>";
    print "<th>CRM</th>";
    print "<th>Especialidade</th>";
    print "<th width='120'>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id_medico . "</td>";
        print "<td>" . $row->nome_clinica . "</td>";
        print "<td>" . $row->nome_medico . "</td>";
        print "<td>" . $row->crm_medico . "</td>";
        print "<td>" . $row->especialidade_medico . "</td>";
        print "<td>
        <button class='btn btn-success'  onclick=\"location.href='?page=medico-editar&id_medico=" . $row->id_medico . "';\"><i class=\"fa fa-edit\"></i></button>

        <button class='btn btn-danger'  onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=medico-salvar&acao=excluir&id_medico=" . $row->id_medico . "';}else{false;}\"><i class=\"fa fa-trash\"></i></button>
                </td>";
    }
    print "</table>";
} else {
    print "<div class='alert alert-danger'>Nenhum dado encontrado</div>";
}
?>