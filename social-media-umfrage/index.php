<?php
require_once 'mobile-detect/Mobile_Detect.php';

$detect = new Mobile_Detect;

if ( $detect->isMobile() ) {
    header('location: m/index.php');
}else {
    header('location: index_1.php');
}


?>