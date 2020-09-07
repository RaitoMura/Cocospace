<?php
    $comment = $_GET["comment/"];
    chmod('kadai_5_written.txt', 0777);
    file_put_contents('kadai_5_written.txt',$comment);
    echo "出力完了"

?>