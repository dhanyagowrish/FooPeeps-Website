<?php

$root = '';

$path = 'images2/';


 
function getImagesFromDir($path) {
    $images = array();
    if ( $img_dir = @opendir($path) ) {
        while ( false !== ($img_file = readdir($img_dir)) ) {
            // checks for gif, jpg, png
            if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) ) {
                $images[] = $img_file;
            }
        }
        closedir($img_dir);
    }
    return $images;
}

function getRandomFromArray($ar) {
    mt_srand( (double)microtime() * 1000000 ); 
    $num = array_rand($ar);
    return $ar[$num];
}


// getting images
$imgList = getImagesFromDir($root . $path);
// select random image to display
$img = getRandomFromArray($imgList);
?> 





<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Quiz</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link href='https://fonts.googleapis.com/css?family=Kaushan Script' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Barrio' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Asul' rel='stylesheet'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Delius' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="general_stylesheet.css">
<style type="text/css">




img {   }

html, body {
        margin: 0; padding: 0;
        scroll-behavior: smooth;
        font-family: 'Roboto', sans-serif;
      }
      .animated_background {
        background:url("welcome_page_collage_edited.jpg") repeat 0 0;
        height:1450px;
        width:100%;
        margin:0;


        box-sizing: border-box;
        -webkit-animation: slide 30s linear infinite;

        

      }
      @-webkit-keyframes slide {
        from { background-position: 0 0; }
        to { background-position: -400px 0; }
    }


</style>
</head>
<body class="animated_background" style="height:100%;">

<ul class="navigation_bar">
                    <li class="nav_main"><a class="" href="index.html" style="font-family:Kaushan Script; font-size:20px;"><b>FooPeeps</b></a></li>
                    <li class="nav_icons menuBars"><a href="MenuPage.html">Menu</a></li>
                  </ul>






<div style="position:relative;left:450px;top:80px;"><img src="<?php echo $path . $img ?>" alt="" height="600" width="600"/></div>



<p>&nbsp;</p>



</body>
</html> 