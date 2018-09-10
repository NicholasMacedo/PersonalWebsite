<?php

$url = $_SERVER['SCRIPT_NAME'];
//echo $url;
//var_dump($_SERVER);

$url = substr($url, 1); //remove / from end

$urlMap = [
'' => 'index.html',
'about' => 'about.html'
];

if(isset($url)){
	if(!empty($urlMap[$url])){
		require($urlMap[$url]);
	}
	else{
		require("post.html");
	}
}
