<?php
    $comment = $_GET["comment/"];
    chmod('kadai_6_written.txt', 0777);
    file_put_contents('kadai_6_written.txt',$comment. PHP_EOL,FILE_APPEND);
    //file_put_contents('kadai_6_written.txt','<br />',FILE_APPEND);
    
    echo "出力完了"
?>