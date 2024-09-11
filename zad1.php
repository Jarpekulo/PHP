<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pierwszy skrypt php </title>
</head>
<body>
    <?php
    
echo"<h1> Moj pierwszy skrypt php";


    $napis="dowolny tekst";
    $dl=strlen($napis);
    echo"<table border=1>
    <tr>";
    for($i=0;$i<$dl;$i++)
    {
        echo"<td>",$napis[$i],"</td>";

    }

    echo"</td></table>";

    echo"<br><br>";

    echo"<table border=1>
    <tr>";
    for($i=0;$i<$dl;$i++)
    {
        if($i%2!=0)
        {
        echo"<tr><td class=czarna>",$napis[$i],"</td></tr>";
        }
        else
        echo"<tr><td>",$napis[$i],"</td></tr>";

    }

    echo"</td></table>";

    echo"<br><br>";


    echo"<table border=1>";
    for($j=0;$j<8;$j++)
    {
    echo"<tr>";

    for($i=0;$i<8;$i++)
    {
    if($j%2!=0){
        if($i%2!=0)
        echo"<td></td>";
        else
        echo"<td class=czarna></td>";
    }
    else{
    if($i%2!=0)
    echo"<td class=czarna></td>";
    else
    echo"<td></td>";
    }
    }
    echo"</tr>";
    }
    echo"</td></table>";



    ?>
    <style>
        .czarna{
            background-color:black;
            color:white;
        }
        td{
            width:50px;
            height:50px;

        }
        table{
            border-collapse:collapse;
        }
    </style>
</body>
</html>