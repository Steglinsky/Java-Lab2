<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Liczby Lucasa</title>
    <style>
        table,
        th,
        td { 
		    text-align: center;
            border: 1px solid black;
            border-collapse: collapse;
            min-width: 30px;
           }
    </style>
</head>

<body>
    <?php

    $liczba = $_GET['liczba'];
    if ($liczba == null || $liczba < 4 || $liczba > 44) 
	{
        $liczba = 10;
    }
    function liczbyLucasa($liczba)
    {
        if ($liczba == 0) return 2;
        else if ($liczba == 1) return 1;
        else return liczbyLucasa($liczba - 1) + liczbyLucasa($liczba - 2);
    }

    echo "liczba (n): " . $liczba . "<br><br>";
    echo <<< EOT
     <table>
     <tr>
        <th> n </th>
        <th>L<sub>n</sub></th>
     </tr>
EOT;    
    for ($i = 0; $i <= $liczba; $i++) {
        $wynik = liczbyLucasa($i);
        echo "<tr><td>$i</td><td>$wynik</td></tr>";
    }
    echo "</table>";
    ?>
</body>

</html>