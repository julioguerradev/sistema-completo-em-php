<h1>Cadastrar Cirurgia</h1>
<form action="?page=cirurgia-salvar" method="POST">
	<div class="form-group">
		<label>Nome do Médico</label>
		<?php
			$sql_1 = "SELECT * FROM medico";
			$res_1 = $conn->query($sql_1);
			print "<select name='medico_id_medico' class='form-control'>";
			print "<option>- Selecione um Médico -</option>";
			while($row_1 = $res_1->fetch_object()){
				print "<option value='".$row_1->id_medico."'>".$row_1->nome_medico."</option>";
			}
			print "</select>";
		?>
	</div>
	<div class="form-group">
		<label>Nome do Paciente</label>
		<?php
			$sql_2 = "SELECT * FROM cliente";
			$res_2 = $conn->query($sql_2);
			print "<select name='cliente_id_cliente' class='form-control'>";
			print "<option>- Selecione uma cliente -</option>";
			while($row_2 = $res_2->fetch_object()){
				print "<option value='".$row_2->id_cliente."'>".$row_2->nome_cliente."</option>";
			}
			print "</select>";
		?>
	</div>
    <!--<div class="form-group">
		<label>Local onde será efetuada a Cirurgia</label>
		<?php
			$sql_2 = "SELECT * FROM clinica";
			$res_2 = $conn->query($sql_2);
			print "<select name='clinica_id_clinica' class='form-control'>";
			print "<option>- Selecione o local da cirurgia -</option>";
			while($row_2 = $res_2->fetch_object()){
				print "<option value='".$row_2->id_clinica."'>".$row_2->nome_clinica."</option>";
			}
			print "</select>";
		?>
	</div>-->
	<div class="form-group">
		<label>Informe qual cirurgia</label>
		<input type="text" name="tipo_cirurgia" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>