<?php
function spiltURL(){
    $url= $_GET['url']??'home';
    $url=explode("/",$url);
    return $url;
}

function show($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function loadController(){
    $url = spiltURL()??'home';

    $filename="../app/controllers/".ucfirst($url[0]).".php";
    if(file_exists($filename)){
        require $filename;
    }
    else{
        $filename="../app/controllers/".ucfirst("404").".php";
        require $filename;
    }
}

loadController();

?>