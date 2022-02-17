<?php
    include_once "../../share/base.php";

    // dd($_POST);
    $name = explode(".",$_POST['img'])[1];
    $origin_w = getimagesize("../../img/headshot/".$_POST['img'])[0];
    $origin_h = getimagesize("../../img/headshot/".$_POST['img'])[1];

    


    switch($name){
        case 'jpg':
            $src = imagecreatefromjpeg("../../img/headshot/".$_POST['img']);
            break;
        case 'png':
            $src = imagecreatefrompng("../../img/headshot/".$_POST['img']);
            break;
        case 'gif':
            break;
    }
    $img_w = floor((100/500)*$origin_w);
    $img_h = floor((100/$_POST['h'])*$origin_h);

    $dest = imagecreatetruecolor( $img_w, $img_h);
    $start_x = floor(($_POST['x']/500)*$origin_w);
    $start_y = floor(($_POST['y']/$_POST['h'])*$origin_h);
    imagecopy($dest, $src, 0, 0, $start_x, $start_y,  $img_w, $img_h);

//     // Output and free from memory
    header('Content-Type: image/gif');

    switch($name){
        case 'jpg':
            imagejpeg($dest, '../../img/headshot/small_'.$_POST['img']);
            break;
        case 'png':
            imagepng($dest, '../../img/headshot/small_'.$_POST['img']);
            break;
        case 'gif':
            break;
    }
    imagedestroy($dest);
    imagedestroy($src);

?>