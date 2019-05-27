<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'password';
$dbname = 'name';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$conn->set_charset("utf8");


$linkwebu = 'http://uprava.insites.sk/'; //Odkaz na web koli css, js scriptom
$sitename = 'InSites.sk'; //Názov tvojho portálu
$podnadpis = 'Portál kde ti zábava zaručene neújde!';  // slogan tvojho portálu 
$mail = 'info@gamingzone.sk';  //email tvojho portálu
$ts3_ip = 'ts3.gamingzone.sk';  //ts3 ip tvojho TeamSpeak3 serveru
$ts3_port= '1341';  //port pre ts3 (niektorím ľudom nefunguje bez portu)
$ts3_web_name = ''. $sitename .' Web_User';  //meno cz ktoré sa návštevník pripojí na TS po kliknutí na ip na webe
$facebook_link = 'http://facebook.com/gamingzonesk';  // facebook link na vášu FB stránku
$unreg = 'Unregister GZ';  //veta pri unregister č napíše daný hráč na orogo serveri pre overenie originálneho účtu
?>