<?php
$随机数=rand(0,360);
$随机数=$随机数*60;

$url = file_get_contents('http://image.so.com/j?q=%E5%8A%A8%E6%BC%AB%E5%A3%81%E7%BA%B8&src=tab_image&bz_parent='.$_GET['type'].'&bz_child=%E5%85%A8%E9%83%A8&bz_color=&bz_width=1920&bz_height=1080&box=box_bz&bz_type=pc&correct=%E5%8A%A8%E6%BC%AB%E5%A3%81%E7%BA%B8&pn=60&ch=&sn='.$总数.'&sid=95263e9e9cb9fc8e754eb95642ffc93a&ran=0&ras=0&cn=0&gn=0&kn=0');
$arr = json_decode($url, true);

//循环列表并提取img
$总数=count($arr["list"])-1;
$随机数=rand(0,$总数);
$img=$arr["list"][$随机数][img];
header("location:$img");