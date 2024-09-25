<?php
require_once('config/status_codes.php');
$question=htmlspecialchars($_POST['answer'], ENT_QUOTES);
$select_option=htmlspecialchars($_POST['option'], ENT_QUOTES);


if(!$select_option){header('Location:index.php');}

foreach($status_codes as $status_code){
    if((string)$question===(string)$status_code['code']){
        $description=$status_code['description'];
        $result=(string)$select_option===(string)$status_code['code'];
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/result.css">
</head>
<body>
    <header class="header">
        <div class="header-inner">
            <a class="header-logo" href="index.php">Status Code Quiz</a>
        </div>
    </header>
    <main>
        <div class="content">
            <div class="answer-text">
                <?php if($result):?>
                <p class="correct">正解</p>
                <?php else:?>
                <p class="incorrect">不正解</p>
                <?php endif;?>
            </div>
            <div class="content-table">
                <table class="table">
                    <tr class="tr">
                        <th class="table-head">ステータスコード</th>
                        <td class="table-description"><?php echo $question ;?></td>
                    </tr>
                    <tr class="tr">
                        <th class="table-head">説明</th>
                        <td class="table-description"><?php echo $description;?></td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>
</html>