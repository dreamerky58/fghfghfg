<?php 
require_once 'config.php';
require_once 'ts3/TeamSpeak3.php';

echo ' <!DOCTYPE html> ';
echo ' <html> ';
echo ' <head> ';
echo ' <title>'. $sitename. ' | '. date("Y") .'</title> ';
echo ' <meta name="keywords" content="gamingzone, h1p3rx, moj-mc-webo"> ';
echo ' <meta name="description" content=""> ';
echo ' <meta name="author" content="Denis Mihál http://gamingzone.sk/user/h1p3rx"> ';
echo ' <meta name="viewport" content="width=device-width, initial-scale=1.0"> ';
echo ' <link href="'. $linkwebu .'assets/css/bootstrap.css" rel="stylesheet"> ';
echo ' <link href="'. $linkwebu .'assets/css/style.css" rel="stylesheet"> ';
echo ' <link href="'. $linkwebu .'assets/img/favicon.ico" rel="icon" type="image/x-icon" /> ';
echo ' <link rel="stylesheet" type="text/css" href="'. $linkwebu .'assets/css/app.min.css"> ';
echo ' <script type="text/javascript" href="'. $linkwebu .'assets/js/app.min.js"></script> ';
echo ' <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script> ';
echo ' <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet"> ';
echo ' </head> ';
echo ' <body> ';

  if($_SERVER['REQUEST_URI'] == "/public/home"){
    echo '<header class="about">';
      echo '<div class="container">';
        echo '<center>';
            echo '<h2>'. $sitename .'</h2>';
            echo '<h3>'. $podnadpis .'</h3>';
            echo '<div style="margin-top:30px;">';
            echo '</div>';
            echo '<div class="skroler">';
              echo '<a href="#about"><i class="glyphicon fas fa-sort-down"></i></a>';
            echo '</div>';
        echo '</center>';
      echo '</div>';
    echo '</header>';
    }


echo ' <div id="nav"> ';
echo ' <nav class="navbar navbar-default navbar-static " role="navigation"> ';
echo ' <div class="container"> ';
echo ' <div class="navbar-header"> ';
echo ' <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> ';
echo ' <span class="sr-only">Toggle navigation</span> ';
echo ' <span class="icon-bar"></span> ';
echo ' <span class="icon-bar"></span> ';
echo ' <span class="icon-bar"></span> ';
echo ' </button> ';
echo ' <div class="cosmic"> ';
echo ' <a class="navbar-brand" href="'. $linkwebu .'index">'. $sitename .'</a> ';
echo ' </div> ';
echo ' </div> ';

echo ' <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> ';
echo ' <ul class="nav navbar-nav"> ';
echo ' </ul> ';
echo ' <ul class="nav navbar-nav navbar-right"> ';

if ($page["name"] == 'home') {
	echo ' <li style="background:rgba(3, 92, 181, 1)"><a href="'. $linkwebu .'home"><i class="fas fa-home"></i> Domovská stránka</a></li> ';
}else{
	echo ' <li><a href="'. $sitelink .'home"><i class="fas fa-home"></i> Domovská stránka</a></li> ';
}

echo ' <li class="dropdown"> ';
echo ' <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-tasks"></i> O nás <b class="caret"></b></a> ';
echo ' <ul class="dropdown-menu"> ';
echo ' <li><a href="'. $sitelink .'ateam"><i class="fas fa-users"></i> Tím</a></li> ';
echo ' <li><a href="'. $sitelink .'spolupraca"><i class="fab fa-stripe-s"></i> Spolupráca</a></li> ';
echo ' </ul> ';
echo ' </li> ';

if ($page["name"] == 'champion') {
	echo ' <li style="background:rgba(3, 92, 181, 1)"><a href="'. $sitelink .'champion"><i class="fas fa-trophy"></i> Champions</a></li> ';
}else{
	echo ' <li><a href="'. $sitelink .'champion"><i class="fas fa-trophy"></i> Champions</a></li> ';
}

if ($page["name"] == 'vip') {
	echo ' <li style="background:rgba(3, 92, 181, 1)"><a style="color:gold" href="'. $sitelink .'gen_vip"><i class="far fa-gem"></i> VIP</a></li> ';
}else{
	echo ' <li><a style="color:gold" href="'. $sitelink .'gen_vip"><i class="far fa-gem"></i> VIP</a></li> ';
}


echo ' <li class="dropdown"> ';
echo ' <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-plus-circle"></i> Ostatné<b class="caret"></b></a> ';
echo ' <ul class="dropdown-menu"> ';
echo ' <li><a href="'. $sitelink .'unregister"><i class="fab fa-uniregistry"></i> Un Register</a></li> ';
echo ' <li><a href="'. $sitelink .'bans_ban"><i class="fas fa-ban"></i> Banlist</a></li> ';
echo ' </ul> ';
echo ' </li> ';

echo ' </ul> ';
echo ' </div> ';
echo ' </div> ';
echo ' </nav> ';
echo ' </div> ';
?>