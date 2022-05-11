<?php

function lerDorama(){
    $conn = include_once ('conn.php');
    $sql = "SELECT * FROM assistidos where tipo = 'dorama' ";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}