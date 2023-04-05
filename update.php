<?php 

require_once __DIR__ . "/connectiondb.php";
require_once __DIR__ . "/functions.php";


$sqlu = "UPDATE cars SET brand = :brand, model = :model, year = :year WHERE id = :id";

$statement = $pdoconn->prepare($sqlu);
$statement->execute([
    // gi zemam od formata edit.php od name=""
    'brand' => $_POST['brand'],
    'model' => $_POST['model'],
    'year'  => $_POST['year'],  
    'id'    => decrypt($_POST['id'])]);
header("Location: index.php");
die();




?>