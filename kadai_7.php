<?php
    /* file関数で配列を取得*/
    $words = file('kadai_6_written.txt');
    foreach ($words as $word) :
        echo $word.'<br />';
    endforeach;

?>

