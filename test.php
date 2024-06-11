<?php
$vname = "course";
$$vname="khan";
$$$vname="hey";
echo $khan; // hey 
$title= 'PHP Fundamentals';
echo strlen($title); // 15
$message = 'Welcome to '.$title;
//echo $message; // Welcome to PHP Fundamentals;
$doubleQuoteMessage = "Welcome to $title";
echo $doubleQuoteMessage; // Welcome to PHP Fundamentals;
$singleQuoteMessage = 'Welcome to $title';
echo $singleQuoteMessage; // Welcome to $title; Single quotes provides better performance than double quotes 
$json = <<<JSON
{"widget": {
    "debug": "on",
    "window": {
        "title": "$message",
        "name": "main_window",
        "width": 500,
        "height": 500
    },
    "image": { 
        "src": "Images/Sun.png",
        "name": "sun1",
        "hOffset": 250,
        "vOffset": 250,
        "alignment": "center"
    },
    "text": {
        "data": "Click Here",
        "size": 36,
        "style": "bold",
        "name": "text1",
        "hOffset": 250,
        "vOffset": 100,
        "alignment": "center",
        "onMouseUp": "sun1.opacity = (sun1.opacity / 100) * 90;"
    }
}}   
JSON;
echo $json; // {"widget": {"debug": "on","window": {"title": "Sample Konfabulator Widget","name": "main_window","width": 500,"height": 500},"image": { "src": "Images/Sun.png","name": "sun1","hOffset": 250,"vOffset": 250,"alignment": "center"},"text": {"data": "Click Here","size": 36,"style": "bold","name": "text1","hOffset": 250,"vOffset": 100,"alignment": "center","onMouseUp": "sun1.opacity = (sun1.opacity / 100) * 90;"}}}
?>