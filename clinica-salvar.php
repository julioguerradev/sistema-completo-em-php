<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $clinica = $_POST["nome_clinica"];

            $sql = "INSERT INTO clinica (nome_clinica) VALUES ('{$clinica}')";
            $res = $conn->query($sql) or die($conn->error);
            if ($res==true) {
                print "<script>alert('Cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=clinica-consultar'</script>";
            }else{
                print "<div class='alert alert-danger'>Não foi possível cadastrar</div>";
            }
            break;

            case 'editar':
                $sql = "UPDATE clinica 
                SET nome_clinica = '".$_POST["nome_clinica"]."' 
                WHERE id_clinica =".$_POST["id_clinica"];

                $res = $conn->query($sql) or die($conn->error);
                
                if ($res==true) {
                    print "<script>alert('Editado com sucesso!');</script>";
                    print "<script>location.href='?page=clinica-consultar';</script>";
                }else{
                    print "<div class='alert alert-danger'>Não foi possível editar</div>";
                }
                break;

            case 'excluir':
                 $sql = "DELETE FROM clinica WHERE id_clinica =".$_REQUEST["id_clinica"];
                 $res = $conn->query($sql) or die($conn->error);

                 if ($res==true) {
                    print "<script>alert('Excluído com sucesso!')</script>";
                    print "<script>location.href='?page=clinica-consultar';</script>";
                 }else{
                     print "<div class='alert alert-danger'>Não foi possível excluir.</div>";
                 }
                 break;
        
        
    }
?>