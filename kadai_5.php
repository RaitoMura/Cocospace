<?php
/* GETにてフォームを回収・フォームはkadai_4_form.html*/
    $comment = $_GET["comment/"];
    chmod('kadai_5_written.txt', 0777);// パーミッションの設定
/*kadai_5_written.tetに出力 */
    file_put_contents('kadai_5_written.txt',$comment);
    echo "出力完了"//出力確認用

?>