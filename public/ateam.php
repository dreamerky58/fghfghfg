<?php
require_once '../inc/header.php';


echo ' <div id="podstranka"> ';
echo ' <div class="container"> ';
echo ' <p>&nbsp</p><p>&nbsp</p> ';
echo ' <h1>Tím '. $sitename .'</h1> ';
echo ' </div> ';
echo ' </div> ';

echo ' <div class="content"> ';
echo ' <div class="container"> ';
        
echo ' <div class="staff-team">';
?>

<?php
$sql = "SELECT uuid, username, primary_group   FROM luckperms_players";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if ( $row["primary_group"] == 'Majitel') {
echo '
	<div>
	    <h2><a style="text-decoration:none" href="https://sk.namemc.com/profile/'. $row["username"] .'.1">'. ucfirst($row["username"]) .'</a></h2>
	    <img src="https://minotar.net/helm/'. $row["username"] .'">
	    <div style="margin-top:10px;font-weight:bold;" class="owner">'. $row["primary_group"] .'</div>
	</div>
';
    	}

        if ( $row["primary_group"] == 'sp.majitel') {
echo '
	<div>
	    <h2><a style="text-decoration:none" href="https://sk.namemc.com/profile/'. $row["username"] .'.1">'. ucfirst($row["username"]) .'</a></h2>
	    <img src="https://minotar.net/helm/'. $row["username"] .'">
	    <div style="margin-top:10px;font-weight:bold;" class="owner">'. $row["primary_group"] .'</div>
	</div>
';
    	}
        if ( $row["primary_group"] == 'vedenie') {
echo '
	<div>
	    <h2><a style="text-decoration:none" href="https://sk.namemc.com/profile/'. $row["username"] .'.1">'. ucfirst($row["username"]) .'</a></h2>
	    <img src="https://minotar.net/helm/'. $row["username"] .'">
	    <div style="margin-top:10px;font-weight:bold;" class="vedenie">'. $row["primary_group"] .'</div>
	</div>
';
    	}
if ( $row["primary_group"] == 'developer') {
echo '
	<div>
	    <h2><a style="text-decoration:none" href="https://sk.namemc.com/profile/'. $row["username"] .'.1">'. ucfirst($row["username"]) .'</a></h2>
	    <img src="https://minotar.net/helm/'. $row["username"] .'">
	    <div style="margin-top:10px;font-weight:bold;" class="dev">'. $row["primary_group"] .'</div>
	</div>
';
    	}
        if ( $row["primary_group"] == 'hl.admin') {
echo '
	<div>
	    <h2><a style="text-decoration:none" href="https://sk.namemc.com/profile/'. $row["username"] .'.1">'. ucfirst($row["username"]) .'</a></h2>
	    <img src="https://minotar.net/helm/'. $row["username"] .'">
	    <div style="margin-top:10px;font-weight:bold;" class="adm">'. $row["primary_group"] .'</div>
	</div>
';
    	}
        if ( $row["primary_group"] == 'hl.helper') {
echo '
	<div>
	    <h2><a style="text-decoration:none" href="https://sk.namemc.com/profile/'. $row["username"] .'.1">'. ucfirst($row["username"]) .'</a></h2>
	    <img src="https://minotar.net/helm/'. $row["username"] .'">
	    <div style="margin-top:10px;font-weight:bold;" class="help">'. $row["primary_group"] .'</div>
	</div>
';
    	}
        if ( $row["primary_group"] == 'hl.builder') {
echo '
	<div>
	    <h2><a style="text-decoration:none" href="https://sk.namemc.com/profile/'. $row["username"] .'.1">'. ucfirst($row["username"]) .'</a></h2>
	    <img src="https://minotar.net/helm/'. $row["username"] .'">
	    <div style="margin-top:10px;font-weight:bold;" class="buil">'. $row["primary_group"] .'</div>
	</div>
';
    	}
        if ( $row["primary_group"] == 'admin') {
echo '
	<div>
	    <h2><a style="text-decoration:none" href="https://sk.namemc.com/profile/'. $row["username"] .'.1">'. ucfirst($row["username"]) .'</a></h2>
	    <img src="https://minotar.net/helm/'. $row["username"] .'">
	    <div style="margin-top:10px;font-weight:bold;" class="adm">'. $row["primary_group"] .'</div>
	</div>
';
    	}
        if ( $row["primary_group"] == 'helper') {
echo '
	<div>
	    <h2><a style="text-decoration:none" href="https://sk.namemc.com/profile/'. $row["username"] .'.1">'. ucfirst($row["username"]) .'</a></h2>
	    <img src="https://minotar.net/helm/'. $row["username"] .'">
	    <div style="margin-top:10px;font-weight:bold;" class="help">'. $row["primary_group"] .'</div>
	</div>
';
    	}
        if ( $row["primary_group"] == 'builder') {
echo '
	<div>
	    <h2><a style="text-decoration:none" href="https://sk.namemc.com/profile/'. $row["username"] .'.1">'. ucfirst($row["username"]) .'</a></h2>
	    <img src="https://minotar.net/helm/'. $row["username"] .'">
	    <div style="margin-top:10px;font-weight:bold;" class="buil">'. $row["primary_group"] .'</div>
	</div>
';
    	}
        if ( $row["primary_group"] == 'eventer') {
echo '
	<div>
	    <h2><a style="text-decoration:none" href="https://sk.namemc.com/profile/'. $row["username"] .'.1">'. ucfirst($row["username"]) .'</a></h2>
	    <img src="https://minotar.net/helm/'. $row["username"] .'">
	    <div style="margin-top:10px;font-weight:bold;" class="mod">'. $row["primary_group"] .'</div>
	</div>
';
    	}
    }
} else {
    echo "V databázi sa nenachádza nič!";
}
$conn->close();


echo ' </div> ';


echo ' <div style="margin-bottom:50%;">';
echo ' <h4 style="font-size: 35px;" class="cosmic">Kontakt</h4> ';
echo ' Vedenie serveru môžete kontaktovať na Email <a>'. $mail .'</a></p>
Pokiaľ budete mať dotaz, problém ohladne serveru kontaktuj nás na našom TS3: </font> <a href="ts3server://'.$ts3_ip.'/?port='.$ts3_port.'&nickname='.$ts3_web_name.'" style="color:#007acc">'.$ts3_ip.'</a>
<p>&nbsp;</p>';
echo ' </div> ';
echo ' </div> ';
echo ' </div> ';
echo ' </div> ';

require_once '../inc/footer.php';
?>