<?php
	$sql = "INSERT INTO cirurgia (
				medico_id_medico,
				cliente_id_cliente,
				data_cirurgia,
				tipo_cirurgia 
			)VALUES(
				".$_POST["medico_id_medico"].",
				".$_POST["cliente_id_cliente"].",
				'".date("Y-m-d")."',
				'".$_POST["tipo_cirurgia"]."'
			)";

	$res = $conn->query($sql) or die($conn->error);

	if($res==true){
		print "<script>alert('Foi cadastrado com sucesso!');</script>";
		print "<script>location.href='?page=cirurgia-consultar';</script>";
	}else{
		print "<script>alert('Não foi possível cadastrar');</script>";
		print "<script>location.href='?page=cirurgia-consultar';</script>";
	}
?>