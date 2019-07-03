<?php
    $img = ImageCreateTrueColor(400,20);
    $yellow = imagecolorallocate($img,255,255,0);
    imagefilledrectangle($img,0,0,400,20,$yellow);

    header("Content-type: image/jpeg");
    imagejpeg($img);

    ImageDestroy($img);
?>