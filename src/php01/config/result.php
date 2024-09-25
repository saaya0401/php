<?php

$name=htmlspecialchars($_POST['name'], ENT_QUOTES);


$set=htmlspecialchars($_POST['set'],ENT_QUOTES);


$number=htmlspecialchars($_POST['number'],ENT_QUOTES);


print '私の名前は'. $name;
print 'ご希望商品は、' . $set;
print '注文数は、' . $number;