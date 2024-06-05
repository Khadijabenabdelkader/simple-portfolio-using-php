<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Name Example</title>
    <link rel="stylesheet" href="style.css"> 
    <script>
        function showMessage() {
            alert("Message received");
        }
    </script>
</head>
<?php
include "cnx.php";
if(isset($_GET["nom"]) && isset($_GET["message"]))
{
    $nom=$_GET["nom"];
    $msg=$_GET["message"];
      

    $req=mysqli_query($link, "insert into user(nom,message) values ('$nom','$msg')");

    if ($req)
    {
        
        echo "<script>showMessage();</script>";
            
}
    else 
    {
        echo "  erreur d'insertion ";
    }
}
?>