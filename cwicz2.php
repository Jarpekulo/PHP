<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        color:silver;

    }
    h1,h2{
        color:silver;
    }
    input,select{
        width:200px;
        height:30px;
    }
</style>
<body style="background-color:black">
    <h1>Kalkulator</h1>
    <hr>
    <h2>Prosty</h2>
<form action="" method="post">
    <input name="liczba1">
    <select name="dzialanie">
    <option value="dodawanie">dodawanie</option>
    <option value="odejmowanie">odejmowanie</option>
    <option value="mnozenie">mnozenie</option>
    <option value="dzielenie">dzielenie</option>
    <input name="liczba2"><br><br>
    <input type="submit" name="submit1">
</form>
<?php

if(isset($_POST['liczba1']))
{
$liczba1=$_POST['liczba1'];
$liczba2=$_POST['liczba2'];
$dzialanie=$_POST['dzialanie'];

if($dzialanie=="dodawanie")
    echo"wynik:",$liczba1 + $liczba2;
else if($dzialanie=="odejmowanie")
    echo"wynik:",$liczba1-$liczba2;
else if($dzialanie=="dzielenie")
    echo"wynik:",$liczba1/$liczba2;
else if($dzialanie=="mnozenie")
    echo"wynik:",$liczba1*$liczba2;
}
?>
<hr>
<h2>Zaawansowany</h2>
<form action="" method="post">
    <input name="liczba3">
    <select name="dzialanie">
    <option value="Cosinus">Cosinus</option>
    <option value="Sinus">Sinus</option>
    <option value="Tangens">Tangens</option>
    <option value="Binarne">Binarne na dziesiętne</option>
    <option value="BinarneDzie">Dziesietne na binarne</option>
    <option value="Dziesietne">Dziesietne na szesnastkowe</option>
    <option value="Szesnastkowe">Szesnastkowe na Dziesietne</option>
    <option value="Stopnie">Stopnie na radiany</option>
    <option value="Radiany">Radiany na stopnie</option>
    <input type="submit" name="submit2">

    <?php
    $liczba3=$_POST['liczba3'];
    $dzialanie=$_POST['dzialanie'];
    if(isset($_POST['submit2']))
    {
        $liczba3=$_POST['liczba3'];
        $dzialanie=$_POST['dzialanie'];

switch ($dzialanie) ​{
    case Cosinus:
      cos(deg2rad($liczba3))
      break;

    case Sinus:
      // statements
      break;
    case Tangens:
      // statements
      break; 
    case Binarne:
      // statements
      break;        
    case BinarneDzie:
      // statements
      break;
    case Dziesietne:
      // statements
      break;
    case Szesnastkowe:
      // statements
      break;
    case Stopnie:
      // statements
      break;
    case Radiany:
      // statements
      break;

}
}
?>
</form>
</body>
</html>