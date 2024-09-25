<?php
function CityTime($city_name){
  require('config/cities.php');
  foreach($cities as $city){
    if((string)$city_name===(string)$city['name']){
        $city_time=new DateTime('now', new DateTimeZone($city['time_zone']));
        $city['time']=$city_time->format('H:i');
        return $city;
    }
  }
}

