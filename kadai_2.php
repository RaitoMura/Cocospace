<?php
/* 課題2 kadai_2_written.txtに出力*/
    chmod('kadai_2_written.txt', 0777); //パーミッションの設定
    file_put_contents('kadai_2_written.txt','Hello COCOOSPACE!');

?>