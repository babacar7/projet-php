<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bienvenue dans mon site</title>
    <link rel="stylesheet" href="logpass.html">
</head> <h1>bienvenue dans mon site<h1><br/>
<body>
<form method="post">
  <div align="center">
    login:<input type="text" name="login"/><br/>
    password:<input type="password" name="pass"/><br/> 
             <input type="submit" name="connexion" value="connexion">
 </form>
  <?php 
  extract($_POST);
if(isset($connexion)
)

if($login=="admin" && $pass=="admin"){
header('location:gueye.php');
}

else
{
echo("login or password incorrect");
}


  ?>          
             
</body>
</html>           

     