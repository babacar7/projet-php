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
             <input type="submit" name="deconnexion" value="deconnexion">
 </form>
  <?php 
  extract($_POST);
  if(isset($deconnect)
  )
  {
      echo('merci a la prochaine');
  }