<?php
 echo "<br>";
    $n = 2000;
    $keo = $n/200;
    $vo = $keo;
    $total = $keo;
    do{
        $doi = $vo/2 - $vo%2/2;
        $total += $doi;
        $vo = $doi + $vo % 2;
    }while ($vo>1);
    echo "Total Candy: " . $total;
?>
