<?php
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $clinica       = $_POST["clinica_id_clinica"];
            $nome          = $_POST["nome_medico"];
            $crm           = $_POST["crm_medico"];
            $especialidade = $_POST["especialidade_medico"];

            $sql = "INSERT INTO medico (clinica_id_clinica, nome_medico, crm_medico, especialidade_medico)
            VALUES ({$clinica}, '{$nome}','{$crm}', '{$especialidade}')";

            $res = $conn->query($sql) or die($conn->error);

            if($res==true){
                print "<script>alert('Cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=medico-consultar';</script>";
            }else{
                print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
            }
            break;
        
            case 'editar':
                $sql = "UPDATE medico SET
                            clinica_id_clinica=".$_POST["clinica_id_clinica"].",
                            nome_medico='".$_POST["nome_medico"]."',
                            crm_medico='".$_POST["crm_medico"]."',
                            especialidade_medico='".$_POST["especialidade_medico"]."'
                        WHERE
                            id_medico=".$_REQUEST["id_medico"];
    
                $res = $conn->query($sql) or die($conn->error);
    
                if($res==true){
                    print "<script>alert('Editado com sucesso!');</script>";
                    print "<script>location.href='?page=medico-consultar';</script>";
                }else{
                    print "<div class='alert alert-danger'>Não foi possível editar.</div>";
                }
            break;
        case 'excluir':

            $sql = "DELETE FROM medico WHERE id_medico=".$_REQUEST["id_medico"];
            $res = $conn->query($sql) or die ($conn->error);

            if ($res==true) {
                print "<script>alert('Deletado com sucesso!');</script>";
                print "<script>location.href='?page=medico-consultar';</script>";
            }else{
                print "<div class='alert alert-danger'>Não foi possível deletar</div>";
            }
            break;
    }
?>