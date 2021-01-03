<h1>Consultar Pacientes</h1>
<div class="row">
	<div class="col-lg-4 offset-lg-8">
		<form action="?page=cliente-consultar" method="POST" class="form-inline my-2 my-lg-0">
			<input type="text" name="pesquisa" class="form-control" placeholder="Pesquisar...">&nbsp;
			<button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
		</form>
	</div>
</div>
<?php
	if(@$_REQUEST["pesquisa"]){
		$sql = "SELECT * FROM cliente AS cli
		INNER JOIN medico AS med
		ON med.id_medico = cli.medico_id_medico
		WHERE nome_cliente LIKE '%".$_REQUEST["pesquisa"]."%'";
	}else{
		$sql = "SELECT * FROM cliente AS cli
			INNER JOIN medico AS med
			ON med.id_medico = cli.medico_id_medico";
	}
	$res = $conn->query($sql) or die($conn->error);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
        print "<th>#</th>";
        print "<th>Médico</th>";
		print "<th>Nome do Paciente</th>";
		print "<th>Data da Primeira consulta</th>";
		print "<th>Medicação</th>";
        print "<th>Pagamento</th>";
		print "<th width='120'>Ações</th>";
		while($row = $res->fetch_object()){
			print "<tr>";
            print "<td>".$row->id_cliente."</td>";
            print "<td>".$row->nome_medico."</td>";
			print "<td>".$row->nome_cliente."</td>";
			print "<td>".ExibeData($row->dt_prim_cliente)."</td>";
            print "<td>".$row->remedio_cliente."</td>";
            print "<td>".$row->pagamento_cliente."</td>";
			print "<td>
						<button class='btn btn-success' onclick=\"location.href='?page=cliente-editar&id_cliente=".$row->id_cliente."';\"><i class=\"fa fa-edit\"></i></button>

						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=cliente-salvar&acao=excluir&id_cliente=".$row->id_cliente."';}else{false;}\"><i class=\"fa fa-trash\"></i></button>
				   </td>";
			print "</tr>";
		}
		print "<table>";
	}else{
		print "<div class='alert alert-danger'>Nenhum resultado foi encontrado</div>";
	}
?>