<?php
require_once('functions/search_city_time.php');
$city_name=htmlspecialchars($_GET['select'], ENT_QUOTES);

$tokyo=CityTime('東京');
$country=CityTime($city_name);


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
            <a class="header-logo" href="index.php">World Clock</a>
        </div>
    </header>
    <main>
        <div class="main-content">
            <div class="cards">
                <div class="card">
                    <div class="img">
                        <img src="./img/<?php echo $tokyo['img']; ?>" alt="国旗">
                    </div>
                    <div class="text">
                        <p class="country"><?php echo $tokyo['name']; ?></p>
                        <p class="time"><?php echo $tokyo['time']; ?></p>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="./img/<?php echo $country['img'];?>" alt="国旗">
                    </div>
                    <div class="text">
                        <p class="country"><?php echo $country['name'];?></p>
                        <p class="time"><?php echo $country['time'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>