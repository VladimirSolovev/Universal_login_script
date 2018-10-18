<?php

require ('db.php');

try
{
    $db = new PDO(DSN, USER, PASS);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}