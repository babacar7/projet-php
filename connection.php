<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>page d'acceuil</title>
    <link rel="stylesheet" href="logpass.php">
</head>
<body>
    <h1>page de connection</h1>
<form method="post">
    admin:<input type="text" name="admin"/></br>
    user:<input type="text" name="user"/></br>
    password:<input type="password" name="mot de passe"/></br>
    <input type="submit" name="connexion" value="connexion">
</form>
<?php
  extract($_POST);
  if(isset($connexion)
  )
  
  if($login=="admin" && $pass=="admin" && $user=="babacar"){
  header('location:gueye.php');
  }
  
  else
  {
  echo("login or password incorrect");
  }
  else{
    $date = date("d-m-Y");
    $heure = date("H:i");
    echo("Nous sommes le $date il est $heure");
  }
  
?>
</body>
</html>

   