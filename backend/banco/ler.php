<?php

require_once 'Lista/lerDorama.php';
require_once 'Lista/lerManga.php';


$regitroDorama = lerDorama();
$regitroManga = lerManga();

$html = ' ';
    foreach ($regitroDorama as $registros){
        $html .= "
                    {$registros['foto']}
                    {$registros['id']}
                    {$registros['email']}
                    {$registros['nome']}
                    {$registros['Tipo']}
        ";
    }



    $html = ' ';
    foreach ($registro as $registros){
        $html .= "
                    {$registros['foto']}
                    {$registros['id']}
                    {$registros['email']}
                    {$registros['nome']}
                    {$registros['Tipo']}
        ";
    }