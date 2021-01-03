<?php
    define("HOST", "localhost");//banco
    define("USER", "root");//usuario
    define("PASS", "");//senha
    define("BASE", "clinica");//base

    $conn = new mysqli(HOST, USER, PASS, BASE) or die(mysqli_error($conn));
    
    //mudar a data para o formato pt-BR
	function ExibeData($data){
		return  date("d/m/Y", strtotime($data));
	}    
?>