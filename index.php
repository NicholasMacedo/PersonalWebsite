<?php

$url = $_SERVER['SCRIPT_NAME'];
//echo $url;
//var_dump($_SERVER);
if(isset($url)){
    if(isset($_GET['dev'])){
        require(ltrim($url,'/'));
    }
	else{
        require('index.html');
    }
}