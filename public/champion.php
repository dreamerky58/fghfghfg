<?php 
require_once '../inc/header.php';


echo '
<div style="margin-top:50px;" id="podstranka">
<div class="container">
<h1>Champions '. date("Y") .'</h1>
</div>
</div>
';


echo '
<div class="container">
<div class="panel-heading"><h3 style="font-size: 40px" >Rozpis súťaží</h3></div>  
';

echo '
<table style="margin-top: 2%;" class="table table-striped">
<thead>
<tr>
<th>Typ súťaže</th>
<th>Konanie</th>
<th>Dátum</th>
</tr>
</thead>
<tbody>
<tr>
<td>Minecraft <font style="color:green;font-weight:bold;">Survival</font></td>
<td>Bude sa konať v pvp aréne!</td>
<td>-/-</td>
</tr>
<tr>
<td>TeamSpeak3 <font style="color:#428bca;font-weight:bold;">DJRoom #1</font></td>
<td>Bude sa konať DJ súboj!</td>
<td>-/-</td>
</tr>
</tbody>
</table>
';

echo '        
<div class="col-md-6 col-sm-12 col-xs-12 clearfix"> 
<div class="panel panel-custom-once"> 
<div class="panel-heading"><h3 style="font-size: 40px">Minecraft Survival PvP</h3></div>  
<div class="panel-body">
<p>Ďakujeme všetkým zúčastneným a hlavne gratulujeme výhercom, do budúcna pripravujeme kopec podobních súťaží!</p>
';

echo '
<h4 class="cosmic">Výhercovia:</h4>

<h5 style="font-weight:bold;"><font style="color:gold">1. Miesto: -/-</font> [<font style="color:green">K:0</font> | <font style="color:red">D:0</font>] </h5>

<h5 style="font-weight:bold;"><font style="color:orange">2. Miesto: -/-</font> [<font style="color:green">K:0</font> | <font style="color:red">D:0</font>] </h5>

<h5 style="font-weight:bold;"><font style="color:red">3. Miesto: -/-</font> [<font style="color:green">K:0</font> | <font style="color:red">D:0</font>] </h5>
';

echo '
<h4 style="margin-top:8%;" class="cosmic">Výsvetlivka pojmov</h4> 
<p><font style="color:green">Kills => K</font></br>
<font style="color:red">Deaths => D</font></p>
</div>  
</div>  
</div> 
';

echo '
<div class="col-md-6 col-sm-12 col-xs-12 clearfix"> 
<div class="panel panel-custom-once"> 
<div class="panel-heading"><h3 style="font-size: 40px">TeamSpeak3 DJBattle</h3></div>
<div class="panel-body">
<p>Ďakujeme všetkým zúčastneným a hlavne gratulujeme výhercom, do budúcna pripravujeme kopec podobních súťaží!</p>

<h4 class="cosmic">Výhercovia:</h4>

<h5 style="font-weight:bold;"><font style="color:gold">1. Miesto: -/-</font></h5>

<h5 style="font-weight:bold;"><font style="color:orange">2. Miesto: -/-</font></h5>

<h5 style="font-weight:bold;"><font style="color:red">3. Miesto: -/-</font></h5>
';

echo '
</div>  
</div>  
</div>   
</div>
';

echo ' <div style="margin-bottom:10%"> </div> ';

require_once '../inc/footer.php';
?>