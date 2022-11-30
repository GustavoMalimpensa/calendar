<?php
// Incluímos nosso arquivo de configuração
include 'config.php'; 
// Instrução SQL para buscar os agendamentos do banco de dados
$sql="SELECT * FROM agenda"; 
// Verificamos se há dados
if ($conexion->query($sql)->num_rows)
{ 
    // criamos uma matriz
    $datos = array(); 
    //Salvamos todos os dados da consulta em um array multidimensional
    $i=0; 
    // Nós executamos nossa sentença sql
    $e = $conexion->query($sql); 
    while($row=$e->fetch_array()) // Realizamos um loop while para buscar as agendas encontradas no banco de dados
    {
        // Alimentamos o array com os dados da agenda
        $datos[$i] = $row; 
        $i++;
    }

    // Transformamos os dados encontrados no banco de dados para o formato JSON
        echo json_encode(
                array(
                    "success" => 1,
                    "result" => $datos
                )
            );
    }
    else
    {
        // Se não houver agenda, mostramos esta mensagem.
        echo "No hay datos"; 
    }

?>  