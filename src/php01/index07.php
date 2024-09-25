<?php
$people=array(
    ['Taro',25,'men'],
    ['Jiro',20,'men'],
    ['Hanako',16,'women']
);

foreach ($people as $person){
    print $person[0] . '(' . $person[1] . '歳' . $person[2] . ')' . '<br />';
}