<h1>Médico cadastrar</h1>
<form action="?page=medico-salvar" method="POST">
<input type="hidden" name="acao" value="cadastrar">
    <div class="form-group">
		<label>Nome da Clinica</label>
		<?php
			$sql = "SELECT * FROM clinica";
			$res = $conn->query($sql) or die($conn->error);
			$qtd = $res->num_rows;

			if($qtd>0){
				print "<select name='clinica_id_clinica' class='form-control'>";	
				print "<option> -= Selecione =- </option>";			
				while($row = $res->fetch_object()){
					print "<option value='".$row->id_clinica."'>".$row->nome_clinica."</option>";
				}
				print "</select>";
			}else{
				print "<div class='alert alert-danger'>Nenhum dado encontrado.</div>";
			}
		?>
	</div>
    <div class="form-group">
    <label>Nome</label>
    <input type="text" name="nome_medico" class="form-control">
    </div>
    <div class="form-group">
    <label>CRM</label>
    <input type="text" name="crm_medico" class="form-control">
    </div>
    <div class="form-group">
    <label>Especialidade</label>
    <input type="text" name="especialidade_medico" class="form-control">
    </div>

    <div class="form-group">
    <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>