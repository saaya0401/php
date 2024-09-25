<?php
function triangle($base, $height){
    $area=$base*$height/2;
    return $area;
}

function squre($base, $height){
    $area=$base*$height;
    return $area;
}

function daia($top_base, $bottom_base, $height){
    $area=($top_base+$bottom_base)*$height/2;
    return $area;
}

echo '<pre>';
echo triangle(6,5);
echo squre(9,6);
echo daia(6,9,4);
echo '</pre>';

