<?php
    $number=$_GET['number'];
    echo "$number ";
    function prime($number)
    {
        if ($number==0||$number==1) return 0;
        for ($i=2;$i<$number;$i++)
        {
            if ($number%$i==0) {return 0; break;}
        }
        return 1;
    }

    if (prime($number))
    {
        echo "to liczba pierwsza";
    }
    else echo "nie jest liczbą pierwszą";
?>