<?php

// Avalie os dados inseridos pelo usuário e remova caracteres indesejados
function evaluar($valor) 
{
	$nopermitido = array("'",'\\','<','>',"\"");
	$valor = str_replace($nopermitido, "", $valor);
	return $valor;
}

// Formate uma data para microhora para adicionar ao evento, digite 1401517498985.
function _formatear($fecha)
{
	return strtotime(substr($fecha, 6, 4)."-".substr($fecha, 3, 2)."-".substr($fecha, 0, 2)." " .substr($fecha, 10, 6)) * 1000;
}
 ?>