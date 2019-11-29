<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $n = rand(1,100);
        $k = rand(1,$n);
        
        echo 'n = '. $n . ' k = ' . $k;
        $numbers = range(1,$n);
        echo '<br>';
        sort($numbers,SORT_LOCALE_STRING);
        for($i = 0; $i < $n; $i++) {
            if ($numbers[$i] == $k)
                echo ++$i;
        }
        ?>
    </body>
</html>
