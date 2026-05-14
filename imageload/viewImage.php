<?php

$imagePath = "QRimg.png";

header("Content-Type: image/png");

readfile($imagePath);

?>