<h1>Cliente Pacientes</h1>
<?php
	$sql_1 = "SELECT * FROM cliente WHERE id_cliente = ".$_REQUEST["id_cliente"];
	$res_1 = $conn->query($sql_1) or die($conn->error);
	$row_1 = $res_1->fetch_object();
?>

<form action="?page=cliente-salvar" method="POST">
<input type="hidden" name="acao" value="editar">
<input type="hidden" name="id_cliente" value="<?php print $_REQUEST["id_cliente"];?>">
    
    <div class="form-group">
    <label>Nome do Paciente</label>
    <input type="text" name="nome_cliente" class="form-control">
    </div>

    <div class="form-group">
		<label>Nome da Clinica</label>
		<?php
			$sql = "SELECT * FROM medico";
			$res = $conn->query($sql) or die($conn->error);
			$qtd = $res->num_rows;

			if($qtd>0){
				print "<select name='medico_id_medico' class='form-control'>";	
				print "<option> -= Selecione =- </option>";			
				while($row = $res->fetch_object()){
					if ($row->id_medico == $row_1->medico_id_medico) {
                        print "<option value='".$row->id_medico."' selected>".$row->nome_medico."</option>";
                    }else {
                        print "<option value '".$row->id_medico."'>".$row->nome_medico."</option>";
                    }
				}
				print "</select>";
			}else{
				print "<div class='alert alert-danger'>Nenhum dado encontrado.</div>";
			}
		?>
	</div>

    <div class="form-group">
    <label>Data de nascimento</label>
    <input type="date" name="dt_nsc_cliente" class="form-control">
    </div>
    
    <div class="form-group">
    <label>Primeira consulta</label>
    <input type="date" name="dt_prim_cliente" class="form-control">
    </div>

    <div class="form-group">
    <label>Remédio</label>
    <input type="text" name="remedio_cliente" class="form-control">
    </div>

    <div class="form-group">
    <label>Contato</label>
    <input type="text" name="contato_cliente" class="form-control">
    </div>

    <div class="form-group">
    <label>Forma de pagamento</label>
    <input type="text" name="pagamento_cliente" class="form-control">
    </div>

    <div class="form-group">
    <button type="submit" class="btn btn-primary">Enviar</button>
    </div>>