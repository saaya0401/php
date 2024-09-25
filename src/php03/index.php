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
      <a class="header-logo" href="index.php">World Clock</a>
    </div>
  </header>
  <main>
    <div class="main-content">
      <h1 class="content-ttl">日本と世界の時間を比較</h1>
      <div class="form-area">
        <form class="form" action="result.php" method="GET">
          <select name="select" class="select">
            <option value="シドニー">シドニー</option>
            <option value="上海">上海</option>
            <option value="モスクワ">モスクワ</option>
            <option value="ロンドン">ロンドン</option>
            <option value="ヨハネスブルグ">ヨハネスブルグ</option>
            <option value="ニューヨーク">ニューヨーク</option>
          </select>
          <button class="button" type="submit">検索</button>
        </form>
      </div>
    </div>

  </main>
</body>
</html>