<?php

$banners = [23, 45, 63, 15];

$count = 4;

foreach ($banners as $banner => $count) {
    
    echo "<p>$banner</p>";
}

echo $banners[] . PHP_EOL;