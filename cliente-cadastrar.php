<h1>Paciente cadastrar</h1>
<form action="?page=cliente-salvar" method="POST">
<input type="hidden" name="acao" value="cadastrar">
    
    
    <div class="form-group">
    <label>Nome do Paciente</label>
    <input type="text" name="nome_cliente" class="form-control">
    </div>

    <div class="form-group">
    <label>Consultado(a) por:</label>
		<?php
        $sql_1 = "SELECT * FROM medico";
        $res_1 = $conn->query($sql_1);
        print "<select name='medico_id_medico' class='form-control'>";
        print "<option>- Selecione um médico -</option>";
        while($row_1 = $res_1->fetch_object()){
            print "<option value='".$row_1->id_medico."'>".$row_1->nome_medico."</option>";
        }
        print "</select>";
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
    </div>
</form>