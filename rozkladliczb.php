<?php

    function prime($number)
    {
        if ($number==0||$number==1) return 0;
        for ($i=2;$i<$number;$i++)
        {
            if ($number%$i==0) {return 0; break;}
        }
        return 1;
    }

    function rozklad ($number)
    {
        while ($number!=1)
        {
            for($i=2;$i<=$number;$i++)
            {
                if (prime($i)&&$number%$i==0)
                {
                    $number/=$i;
                    echo "$i";
                    if ($number != 1) echo "*";
                    break;
                }
            }
        }
    }
    $number=$_GET['number'];
    echo "$number"."=";
    rozklad($number);

?>
