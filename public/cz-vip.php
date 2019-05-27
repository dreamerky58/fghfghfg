<?php
require_once '../inc/header.php';


echo '
<div style="margin-top:50px;" id="podstranka">
<div class="container">
<h1>Česká republika <a style="color:gold;font-weight:bold;">VIP</a></h1>
</div>
</div>
';

$a = $_GET[a];


echo ' <div class="container">';

echo '
<div class="col-sm-12"> 
<div class="panel panel-custom-once">
<div class="panel-body"> 

<h4>Tebou zadaný nick: <font style="color:#ff8080">'. $a .'</font></h4>

</div> 
</div> 
</div>
';


echo '
<div class="col-md-6 col-sm-12 col-xs-12 clearfix"> 
<div class="panel panel-custom-once">
<div class="panel-heading"><h3 class="cosmic"><font style="color:gold">VIP</font> na 30 dní</h3></div> 
<div class="panel-body"> 

<p>Tvar SMS: <font style="color:#428bca">HS 130 2 </font><font style="color:#ff8080">'. $a .'</font></p> 
<p>Na číslo: <font style="color:#428bca">8866</font></p> 
<hr>
<p>Server: <font style="color:#428bca">Survival, Minigames, Economy</font></p> 
<hr>
<p>Trvanie: <font style="color:#428bca">30dní</font></p> 
<p>Cena: <font style="color:#428bca">50kč</font></p> 

</div> 
</div>
</div> 
';


echo '
<div class="col-md-6 col-sm-12 col-xs-12 clearfix"> 
<div class="panel panel-custom-once">
<div class="panel-heading"><h3 class="cosmic"><font style="color:gold">VIP</font> Navždy</h3></div>
<div class="panel-body"> 

<p>Tvar SMS: <font style="color:#428bca">HS 120 4 </font><font style="color:#ff8080">'. $a .'</font></p> 
<p>Na číslo: <font style="color:#428bca">8866</font></p> 
<hr>
<p>Server: <font style="color:#428bca">Survival, Minigames, Economy</font></p> 
<hr>
<p>Trvanie: <font style="color:#428bca">30dní</font></p> 
<p>Cena: <font style="color:#428bca">100kč</font></p> 

</div>
</div>
</div>
';



echo '
<div class="col-sm-12"> 
<div class="panel panel-custom-once">
<div class="panel-body"> 

<h3>Podmienky platby</h3>
<p>&nbsp;</p>
<p>
<li style="color:#ff8080">Odoslaním SMS vyjadrujete súhlas s nižšie uvedeními podmienkami.</li>
<li>Pred odoslaním SMS si poriadne prekontrolujte text sms, za zle odoslanu SMS portál '. $sitename .' neručí!</li>
<li>Po odoslaní sms sa zriekate práva na vrátenie peňazí.</li>
<li>Po odoslaní sms je na majitelovy portálu '. $sitename .' ako s peniazmi bude hospodáriť, nemáte nárok rozhodovať ako sa s penizmi bude narábať!</li>
</p>

</div> 
</div> 
</div>
</div>
';


echo ' <div style="margin-bottom:10%"> </div> ';
require_once '../inc/footer.php';
?>