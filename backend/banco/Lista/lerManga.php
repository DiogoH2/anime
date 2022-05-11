<?php

function lerManga(){
    $conn = include_once ('conn.php');
    $sql = "SELECT * FROM assistidos where tipo = 'manga' ";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}