<?php
require_once __DIR__ . '/../config/config.php';

function connect()
{

    $pdo = new PDO(DSN, LOGIN, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    return $pdo;
}