<?php
    $img = imagecreatefromjpeg("upload/coffee.jpg");

    $yellow = ImageColorAllocate($img,255,255,0);
    imagettftext($img,36,0,100,100,$yellow,"C:/xampp/htdocs/php_lesson/fonts/Bondi.ttf","Hello World");

    header("Content-type: image/jpeg");
    ImageJpeg($img);

    ImageDestroy($img);
?>