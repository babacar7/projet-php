<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bienvenue dans mon site</title>
</head>
<body>
<form method="post">
    nombre1:<input type="number" name="number1"/>
    nombre2:<input type="number" name="number2"/>       
    <select name="operat">
        <option value="">selectionner un oppérateur</option>
        <option value="+"> + </option>
        <option value="-"> - </option>
        <option value=":"> : </option>
        <option value="x"> x </option>
    </select>
        <input type="submit" value="calculer" name="calculer"/>
</form>
<?php
    if(isset($_POST['calculer']))
    {
        extract($_POST);
        if($operat=="")
        {
            echo("Sélectionner un opérateur");
        }
        if($operat=='+')
        {
            echo("$number1 + $number2 = ".($number1+$number2));
        }
        if($operat=='-')
        {
            echo("$number1 - $number2 = ".($number1-$number2));
        }
        if($operat=='x')  
        {
            echo("$number1 x $number2 = ".($number1*$number2));
        }     
        if($operat==':') 
        {
            echo("$number1 : $number2 = ".($number1/$number2));
        }
    }          
?>
</body>
</html>