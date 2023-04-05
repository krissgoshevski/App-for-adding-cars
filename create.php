
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" type="text/css" href="cssfiles/create.css">
    <link rel="stylesheet" type="text/css" href="cssfiles/menu.css">
</head>
<body>
<?php require_once __DIR__ . "/menu.php";?>
<div class="formone"> 
    <form method="POST" action="store.php">

    <label for="brand">Brand</label>
    <input type="text" name="brand" placeholder="enter your brand..." id="brand"/> <br>
    <label for="model">Model</label>
    <input type="text" name="model" placeholder="enter your model..." id="model" class="model"/> <br>
    <label for="year">Year</label>
   
    <select name="year" class="year">
    <?php 
    for($i = 2000; $i<=2023; $i++){
        echo "<option value='$i'>$i</option>"; // za gi lista od 0 do 23ta 
    }
    ?>
    </select> <br>
    <button>Add car</button>

    </form>
    </div>
</body>
</html>