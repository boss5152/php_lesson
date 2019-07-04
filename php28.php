<?php
    $dstW = 240 ;
    $dstH = 240 ;
    $scr = ImageCreateFromJpeg("upload/coffee.jpg");
    $srcW = ImageSX($src);
    $srcH = ImageSY($src);

    $dst = ImageCreate($dstW,$dstW);

    if($srcW > $srcH){
        $dstX = $dstW;
        $dstY = $dstH * $srcH / $srcW;
    }else {
        $dstY = $dstH;
        $dstX = $dstW * $srcW / $srcH;
    }

   

    imagecopyresampled($dst,$src,
        0 , 0 ,
        0 , 0 ,
        $dstX , $dstY ,
        $srcw , $srcH);

    ImageDestroy($src);
    ImageDestroy($dst);

?>