<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>page d'acceuil</title>
    <link rel="stylesheet" href="dent.php">
</head>
<body>
<form method="post" action="mespages.php">
    <div align="center">
<h1>bienvenue veiller entrer votre mot de pass et votre nom d'utilisateur</h></br>
    admin:<input type="text" name="admin"/></br>
    password:<input type="password" name="password"/></br>
    <input type="submit" name="connexion" value="connexion"></br>
</form>
<?php 
  extract($_POST);
if(isset($connexion)
)

if($admin=="admin" && $password=="admin"){
header('location:dent.php');
}

else
{
echo("login or password incorrect");
}


  ?>          

</body>              
</html>
               