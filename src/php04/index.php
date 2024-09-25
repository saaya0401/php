<?php
require_once('config/status_codes.php');
$random_numbers=array_rand($status_codes, 4);
foreach ($random_numbers as $index){
    $options[]=$status_codes[$index];
}

$answer=array_rand($options, 1);
$answer_code=$options[$answer];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <header class="header">
    <div class="header-inner">
      <a class="header-logo" href="index.php">Status Code Quiz</a>
    </div>
  </header>
  <main>
    <div class="main-content">
      <div class="quiz">
        <p class="quiz-text">
          Q. 以下の内容に当てはまるステータスコードを選んでください。
        </p>
        <p class="question"><?php echo $answer_code['description'];?> </p>
      </div>
      <div class="form-area">
        <form action="result.php" class="form" method="POST">
          <input type="hidden" name="answer" value="<?php echo $answer_code['code'];?>">
          <div class="form-item__group">
            <?php foreach($options as $option):?>
            <div class="form-item">
              <input type="radio" name="option" class="radio" value="<?php echo $option['code'];?>" id="<?php echo $option['code'];?>">
              <label for="<?php echo $option['code'];?>" class="label">
                <?php echo $option['code'];?>
              </label>
            </div>
            <?php endforeach;?>
          </div>
          <div class="submit">
              <button type="submit" class="button">
            回答
          </button>
          </div>
        </form>
      </div>
    </div>
  </main>
</body>
</html>