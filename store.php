<?php 
// validacii za doma 
// val dali e POST
// val za inputs, year etc.. 

require_once __DIR__ . "/connectiondb.php";
$brand = $_POST['brand'];
$model = $_POST['model'];
$year = $_POST['year'];

// za year podatocen tip u baza prima samo 4 cifri 
// 00-69 se posle 2000ta .. od 70-99 se do 2000ta 
// 50 --> 2050
// 80 --> 1980 
// za $brand i $model se vo '' bidejki se strings


// REFACTOR --> DA SE VRAKAME CELO VREME NA KODOT DA GO NAPISEME PODOBRO, POOPTIMALNO 
$sqliud = "INSERT INTO cars (brand, model, year) 
                    VALUES(:brand, :model, :year)";

$statement = $pdoconn->prepare($sqliud); // za da ne dozvolime SQL injection
if($statement->execute(['brand' => $brand, 'model' => $model, 'year' => $year])) // za da ne dozvolime SQL injection
{
    header("Location: indexlist.php?status=success");
    die();
}

header("Location: index.php?status=error");
    die();






/*
if($pdoconn->exec($sqliud)) // vraka kolku redovi vnelo 
{
    header("Location: indexlist.php?status=success");
    die();
} 

    header("Location: index.php?status=error");
    die();

    */


?>