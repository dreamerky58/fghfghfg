<?php 
require_once '../inc/header.php';

echo '
<div style="margin-top:50px;" id="podstranka">
<div class="container">
<h1>Unregister Origo/Warez na  <?php echo $sitename ;?></h1>
</div>
</div>
';


echo '
<div class="container">
<div class="row">
';

echo '
<div style="margin-top: 2%;" class="col-sm-12">
<h1>Unregister Originál Minecraft</h1>
</div>

<div class="col-sm-12">
<p><font style="color:red">1.</font> Prihlásiť sa na server <font style="color:#428bca">EU.MINEPLEX.COM</font></p>
<p><font style="color:red">2.</font> Napísať do chatu <font style="color:#428bca">'. $unreg .'</font></p>
<p><font style="color:red">3.</font> Pomocou <font style="color:#428bca">F5</font> sa preklikaj na 3 osobu, budeš sledovať svoj skin. A vytvor screen pomocou <font style="color:#428bca">F2</font>.</p>
<p><font style="color:red">4.</font> Po screene pojdeme do <font style="color:#428bca">štart menu</font> a tam napíšeme <font style="color:#428bca">%appdata%</font> dáme ENTER, pojdeme do zložky <font style="color:#428bca">.minecraft -> screenshots</font></p>
<p><font style="color:red">5.</font> Nájdeme daný obrázok a UPLOADNEME ho na túto adresu <a href="http://leteckaposta.cz/">SEM UPLOADNI</a></p>
<p><font style="color:red">6.</font> Ďalej pojdeme na <a href="https://account.mojang.com/login">Mojang</a> a prihlásime sa.</p>
<p><font style="color:red">7.</font> Po prihlasení vytvoríme takýto screen (screen vytvoríš pomocou tlačítka <font style="color:#428bca">PrtScr/SysRq</font>): </br>
<img style="width:60%; height:auto;" src="'. $linkwebu .'assets/img/unregister.png"></p>
<p><font style="color:red">8.</font> Screen pridáme na <a href="https://ctrlv.cz/">CTRL+V</a> a to tak že stlačís CTRL+V :D</p>
<p><font style="color:red">9.</font> Potom pojdeme na náš Email a napíšeš ná email <font style="color:#428bca">'. $mail .'</font> v ktorom uvedieš tieto <font style="color:#428bca">ODKAZY</font>, a z akého dôvoru žiadaš o unregister!</p>
<p>( Vzorová žiadosť <a href="'. $linkwebu .'public//download/vzor_origo.txt" download>Sťiahnúť )</a>
</div>
</div>
';

echo '
<div style="margin-top: 2%;" class="col-sm-12">
<h1>Unregister Warez Minecraft</h1>
</div>

<p><font style="color:red">1.</font> Napíš nám email na <font style="color:#428bca">'. $mail .'</font> kde zadáš čo najpodrobnejšie opísaný tvoj účet (Gemy, Coiny, Money, poprípade štatistiky minihier).</p>
<p><font style="color:red">2.</font> Budeme potrebovať aj tovju ip zistíš ju <a href="https://www.whatismyip.com/">TU</a> IP uveď v tvojom správe na email.</p>
<p><font style="color:red">3.</font> Pokial vlastníš nejaký zo screenov z daného účtu pridaj ho <a href="https://ctrlv.cz/">SEM</a> a to tak že stlačís CTRL+V :D</p>
<p><font style="color:red">4.</font> Potom pojdeme na náš Email a napíšeš ná email <font style="color:#428bca">'. $mail .'</font> v ktorom uvedieš poprípade nejaké <font style="color:#428bca">ODKAZY</font>, a z akého dôvoru žiadaš o unregister!</p>
<p><font style="color:red">5.</font> <font style="color:#ff6666">Pokial zadaná IP v správe na emaily nebude súhlasíť s IP na serveri Unregister bude ZAMIETNUTY!</font></p>
<p>( Vzorová žiadosť <a href="'. $linkwebu .'public/download/vzor_warez.txt" download>Sťiahnúť )</a>
</div>
';


echo ' <div style="margin-bottom:10%"> </div> ';
require_once '../inc/footer.php';
?>