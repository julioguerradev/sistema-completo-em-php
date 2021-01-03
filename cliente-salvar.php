<?php
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            $medico      =$_POST["medico_id_medico"];
            $nome        =$_POST["nome_cliente"];
            $nascimento  =$_POST["dt_nsc_cliente"];
            $primeira    =$_POST["dt_prim_cliente"];
            $remedio     =$_POST["remedio_cliente"];
            $contato     =$_POST["contato_cliente"];
            $pagamento   =$_POST["pagamento_cliente"];
            
            $sql = "INSERT INTO cliente (medico_id_medico, nome_cliente, dt_nsc_cliente, dt_prim_cliente, remedio_cliente, contato_cliente, pagamento_cliente)
            VALUES ({$medico}, '{$nome}', '{$nascimento}', '{$primeira}', '{$remedio}', '{$contato}', '{$pagamento}')";

            $res= $conn->query($sql) or die($conn->error);

            if($res==true){
				print "<script>alert('Cadastrado com sucesso!');</script>";
				print "<script>location.href='?page=cliente-consultar';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}
            break;

        case 'editar':
            $sql = "UPDATE cliente SET
						nome_cliente='".$_POST["nome_cliente"]."',
						dt_nsc_cliente='".$_POST["dt_nsc_cliente"]."',	
						dt_prim_cliente='".$_POST["dt_prim_cliente"]."',	
						remedio_cliente='".$_POST["remedio_cliente"]."',
						contato_cliente='".$_POST["contato_cliente"]."',
                        pagamento_cliente='".$_POST["pagamento_cliente"]."'
					WHERE
						id_cliente=".$_REQUEST["id_cliente"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editado com sucesso!');</script>";
				print "<script>location.href='?page=cliente-consultar';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar.</div>";
			}
        break;

        case 'excluir':
            $sql = "DELETE FROM cliente WHERE id_cliente=".$_REQUEST["id_cliente"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluído com sucesso!');</script>";
				print "<script>location.href='?page=cliente-consultar';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir.</div>";
			}
        break;
        }
?>