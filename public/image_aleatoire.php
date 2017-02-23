<?php
header('Cache-Control: no-cache');
$imgs = array(
                'image1.jpg',
                'image2.jpg',
                'image3.jpg',
                'image4.jpg'
        );
$img_id = mt_rand(0,(count($imgs)-1));
header('Location: '.$imgs[$img_id]);
?>