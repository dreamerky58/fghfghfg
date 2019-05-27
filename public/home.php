<?php
require_once '../inc/header.php';
require_once '../inc/ts3/TeamSpeak3.php';
require_once '../inc/function.php';

echo ' 
<div id="about" class="container">
<h3>Server Status:</h3>
<table class="table table-hover">
<thead>
<tr>
<th scope="col">Server</th>
<th scope="col">Názov</th>
<th scope="col">IP</th>
<th scope="col">Hráči</th>
<th scope="col">Verzia</th>
<th scope="col">Status</th>
</tr>
</thead>
  <tbody>
';

$sql = "SELECT * FROM servers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	
if ($row["type"] == 'mc') {

//Minecraft status 
$ping = json_decode(file_get_contents('http://api.minetools.eu/ping/' . $row["ip"] . '/' . $row["c_port"] . ''), true);
$query = json_decode(file_get_contents('http://api.minetools.eu/query/' . $row["ip"] . '/' . $row["q_port"] . ''), true);

if(empty($ping['error'])) { 
	$version = $ping['version']['name'];
	$online = $ping['players']['online'];
	$max = $ping['players']['max'];
	$motd = $ping['description'];
	$favicon = $ping['favicon'];
}

if(empty($query['error'])) {
	$playerlist = $query['Playerlist'];
}
    echo '
        <tr>
            <th style="color:green; font-weight:bold" scope="row">Minecraft</th>
            <td>'. $motd .'</td>
            <td>'. $row["ip"] .':'. $row["c_port"] .'</td>
            <td>'. $online .'/'. $max .'</td>
            <td>'. $version .'</td>';
            if ($version) {
            	echo '<td style="color:#3385ff">ONLINE</td>';
            }else{
            	echo ' <td style="color:#ff6666">OFFLINE</td>';
            }

        echo '</tr>';
    	}
if ($row["type"] == 'ts3') {
    try {
        $ts3_VirtualServer = TeamSpeak3::factory('serverquery://'. $row["q_user"] .':'. $row["q_pass"] .''. $row["ip"] .':'. $row["q_port"].' /?server_port='. $row["c_port"] .'');
    echo '
        <tr>
            <th style="color:#0099ff; font-weight:bold" scope="row">TeamSpeak3</th>
            <td>'. $ServerName = $ts3_VirtualServer->virtualserver_name .'</td>
            <td>'. $row["ip"] .':'. $row["c_port"] .'</td>
            <td>'. $ts3_VirtualServer->virtualserver_clientsonline .'/'. $ts3_VirtualServer->virtualserver_maxclients .'</td>
            <td>'. $ServerVersion = TeamSpeak3_Helper_Convert::versionShort($ts3_VirtualServer->virtualserver_version) .'</td>    ';
            if($ts3_VirtualServer->virtualserver_clientsonline == 0){
               echo ' <td style="color:#ff6666">OFFLINE</td>';
            }else{
            	echo '<td style="color:#3385ff">ONLINE</td>';
            	}

        echo '</tr>';
            }

    catch(Exception $e){
    }


    	}
    }
} else {
    echo "V databázi sa nenachádza nič!";
}
$conn->close();

echo '   
</tbody>
</table>
</div>';
?>
    <div id="onas">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="../assets/img/steave.png" width="100%" height="100%" class="img-mockup">
          </div>
          <div class="col-md-6 feature">
            <div class="row">
              <div class="col-md-2">
                <center><i style="font-size: 50px;" class="fas fa-users"></i></center>
              </div>
              <div class="col-md-10">
                <h4>Náš tím</h4>
                Náš tím sa skladá s profesionálnych hráčov hry Minecraft. Na serveri vám vedia zaručiť nepretržitú zábavu vo forme Eventov a mnoho ďalšieho!
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <center><i style="font-size: 50px;" class="fas fa-server"></i></center>
              </div>
              <div class="col-md-10">
                <h4>Zaručená kvalita</h4>
                Servery hostujeme u hostingu <a style="color:#008ae6; text-decoration:none" href="https://hostsoft.eu">HostSoft.eu</a> ktorí zabezpečuje ceý chod naších serverov bez lagóv a hlavne proti DDOS útokom!
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <center><i style="font-size: 50px;" class="fas fa-trophy"></i></center>
              </div>
              <div class="col-md-10">
                <h4>Súťaže</h4>
                Tak ako každý server tak aj na našom sa konajú rôzne súťaže na jednom z herných serverov, tak neváhaj a zapoj sa! :)
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section id="galeria">
      <div class="container">
      	<p>&nbsp;</p>
        <h3 style="color:gray">Galeria fotografii zo servera:</h3>
        <p>&nbsp;</p>
        <div class="row">
          <div class="col-md-4">
            <a href="">
            <div class="thumbnail">
              <div class="caption">
                Sem pridajte popis situacie, súťaže, obrázku!
              </div>
              <img src="../assets/img/galeria/img-1.jpg" width="100%" height="100%">
            </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
            <div class="thumbnail">
              <div class="caption">
                Sem pridajte popis situacie, súťaže, obrázku!
              </div>
              <img src="../assets/img/galeria/img-2.jpg" width="100%" height="100%">
            </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
            <div class="thumbnail">
              <div class="caption">
               Sem pridajte popis situacie, súťaže, obrázku!
              </div>
              <img src="../assets/img/galeria/img-3.jpg" width="100%" height="100%">
            </div>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <a href="">
            <div class="thumbnail">
              <div class="caption">
                Sem pridajte popis situacie, súťaže, obrázku!
              </div>
              <img src="../assets/img/galeria/img-4.jpg" width="100%" height="100%">
            </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
            <div class="thumbnail">
              <div class="caption">
                Sem pridajte popis situacie, súťaže, obrázku!
              </div>
              <img src="../assets/img/galeria/img-5.jpg" width="100%" height="100%">
            </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
            <div class="thumbnail">
              <div class="caption">
                Sem pridajte popis situacie, súťaže, obrázku!
              </div>
              <img src="../assets/img/galeria/img-6.jpg" width="100%" height="100%">
            </div>
            </a>
          </div>
        </div>
      </div>
    </div>

  <div id="sponzor">
    <div class="container">
      <h3>Sponzor</h3>
      Naše servery sú sponzorované od málo známeho hostingu <a style="color:#008ae6; text-decoration:none" href="https://hostsoft.eu">HostSoft.eu</a> Ktorí ponúka to najlepšie zázemie pre náš projekt. Podpora hostingu chýchla, ochotná pômocť s kadím problémom! Hosting Ponúka mnoho serverov na rôzne hry! NEW: Na hosting bolo pridane nove rozhranie inštalacii herných serverov a to predinštalované servery. Stačí si kúpiť server vybrať z predinštalovaných serverov aký máte záujem (napr: Server Survival, BedWars, Zombie Apocalipse..) A omnoho viac! :)
      <p>&nbsp;</p>
      <p>&nbsp;</p>  
        <div class="row">
        <div class="col-md-3">
          <img src="../assets/img/hostsoft.png">
        </div>
        <div class="col-md-3">
          <img src="../assets/img/hostsoft.png">
        </div>
        <div class="col-md-3">
          <img src="../assets/img/hostsoft.png">
        </div>
        <div class="col-md-3">
          <img src="../assets/img/hostsoft.png">
        </div>
      </div>
    </div>
  </div>

<?php 
require_once '../inc/footer.php';
;?>