<?php
session_start();

$con = mysqli_connect('localhost','root','','rumahsakit');
if(mysqli_connect_errno()) {
    echo mysqli_connect_error();
}

function base_url($url = null){
    $base_url = "http://localhost:7882/rumahsakit/";
    if($url != null) {
        return $base_url."/".$url;
    } else {
        return $base_url;
    }
}
?> 