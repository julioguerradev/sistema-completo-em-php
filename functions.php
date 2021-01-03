<?php
	function limpaCPF($cpf){
		$caracteres = array(".","-"," ");
		$cpf = str_replace($caracteres, "", $cpf);
		return $cpf;
    }
?>
