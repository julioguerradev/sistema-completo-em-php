<h1>Consultar Cirurgia</h1>
<div class="row">
	<div class="col-lg4 offset-lg-8">
		<form action="?page=cirurgia-consultar" method="POST" class="form-inline my-2 my-lg-0">
			<input type="text" name="pesquisa" class="form-control" placeholder="Pesquisar...">&nbsp;
			<button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
		</form>
	</div>
</div>
<?php
if (@$_REQUEST["pesquisa"]) {
	$sql = "SELECT * FROM cirurgia AS ci
			INNER JOIN medico AS me
			ON ci.medico_id_medico = me.id_medico
			INNER JOIN cliente AS cl
			ON ci.cliente_id_cliente = cl.id_cliente WHERE tipo_cirurgia LIKE '%" . $_REQUEST["pesquisa"] . "%'";
} else {
	$sql = "SELECT * FROM cirurgia AS ci
			INNER JOIN medico AS me
			ON ci.medico_id_medico = me.id_medico
			INNER JOIN cliente AS cl
			ON ci.cliente_id_cliente = cl.id_cliente";
}
/*INNER JOIN clinica AS cli
			ON ci.clinica_id_clinica = cli.id_clinica"*/
$res = $conn->query($sql) or die($conn->error);
$qtd = $res->num_rows;

if ($qtd > 0) {
	print "<p>Encontrou <b>$qtd</b> resultado(s)";
	print "<table class='table table-bordered table-striped table-hover'>";
	print "<tr>";
	print "<th>#</th>";
	print "<th>Médico</th>";
	print "<th>Paciente</th>";
	print "<th>Marca para</th>";
	print "<th>Qual cirurgia</th>";
	print "</tr>";
	while ($row = $res->fetch_object()) {
		print "<tr>";
		print "<td>" . $row->id_cirurgia . "</td>";
		print "<td>" . $row->nome_medico . "</td>";
		print "<td>" . $row->nome_cliente . "</td>";
		print "<td>" . $row->data_cirurgia . "</td>";
		print "<td>" . $row->tipo_cirurgia . "</td>";
		print "</tr>";
	}
	print "</table>";
} else {
	print "<p>Não encontrou resultados</p>";
}
?>