<?php

    include("resources/datalayer/datalayer.php");

    $id = $_GET["id"];


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $verwijderen=$_POST["gert"];
        
       if($verwijderen=="1"){
            trashcan($id);
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>locations</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
    <header>
        <h1>Geslaagd</h1>
        
    </header>

    <div id="container">
    <a  href="locations.php"> Terug</a>
    </div>

    <footer>&copy; Merel van de Bree 2020</footer>
</body>
</html>