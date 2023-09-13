<?php
$height = 100; // 从 URL 参数中获取球的初始高度
$total_distance = $height; // 初始化总距离为球的初始高度
$bounce_height = $height; // 初始化反弹高度为球的初始高度
for ($i = 1; $i < 10; $i++) {
    $bounce_height /= 2; // 计算反弹高度
    echo '反弹高度：' . $bounce_height . PHP_EOL;
    $total_distance += $bounce_height * 2; // 更新总距离
    echo '距离：' . $total_distance . PHP_EOL;
}
echo "第10次落地时反弹高度为：" . $bounce_height . "米<br>";
echo "10次落地时，共经过距离为：" . $total_distance . "米<br>";

