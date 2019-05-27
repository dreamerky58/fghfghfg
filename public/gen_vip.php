<?php 
require_once '../inc/header.php';


echo '
<div style="margin-top:50px;" id="podstranka">
<div class="container">
<h1>VIP generátor SMS</h1>
</div>
</div>
';


echo ' <div class="container"> ';

echo '
<div class="col-md-6 col-sm-12 col-xs-12 clearfix"> 
<div class="panel panel-custom-once"> 
<div class="panel-heading"><h4 style="font-size: 30px" class="cosmic">Česká republika</h4></div>   
<div class="panel-body">
'; 


echo '
<form action="cz-vip.php" method="get"> 
<div class="form-group has-feedback"> 
<div class="input-group"> <span class="input-group-addon spanINPUT">Nick</span> <input class="form-control formINPUT" type="text" name="a" value="" placeholder="Sem zadaj tvoj herný nick" required> 
</div> 
</div> 
<button type="submit" class="btn btn-info btn-sm center-block btn-block steamBTN"> <strong>Generovať SMS</strong> </button>
</form> 
</div>  
</div>  
</div>
';  

echo '
<div class="col-md-6 col-sm-12 col-xs-12 clearfix"> 
<div class="panel panel-custom-once"> 
<div class="panel-heading"><h4 style="font-size: 30px" class="cosmic">Slovenská Republika</h4></div>  
<div class="panel-body">
'; 

echo '
<form action="sk-vip.php" method="get"> 
<div class="form-group has-feedback"> 
<div class="input-group"> <span class="input-group-addon spanINPUT">Nick</span> <input class="form-control formINPUT" type="text" name="a" value="" placeholder="Sem zadaj tvoj herný nick" required> 
</div> 
</div> 
<button type="submit" class="btn btn-info btn-sm center-block btn-block steamBTN"> <strong>Generovať SMS</strong> </button>
</form> 
</div>  
</div>  
</div>
';  

echo '
<div class="col-md-6 col-sm-12 col-xs-12 clearfix"> 
<div class="panel panel-custom-once"> 
<div class="panel-heading"><h4 class="cosmic" style="font-size: 30px">Výhody</h4></div>  
<div class="panel-body"> 
<h5 style="font-weight:bold">1. Prefix <font style="color:gold">VIP</font> v tabe, chate.</h5>
<h5 style="font-weight:bold">2. Može použť  <font style="color:#428bca">/sethome</font> až 3x.</h5>
<h5 style="font-weight:bold">3. Môže si vytvoriť residenciu o velkosti <font style="color:#428bca">256x256x256</font> a može si ju vytvoriť 2x a ktomu 5x subresiek.</h5>
<h5 style="font-weight:bold">4. Može použť  <font style="color:#428bca">/wb</font> (Cestovný crafting).</h5>
<h5 style="font-weight:bold">5. Može použť  <font style="color:#428bca">/ec</font> (Cestovna enderchest).</h5>
<h5 style="font-weight:bold">6. Može použť  <font style="color:#428bca">/fly</font> a lietať si po svete.</h5>
<h5 style="font-weight:bold">7. Može použť  <font style="color:#428bca">/setwarp</font> a to 2x.</h5>
<h5 style="font-weight:bold">8. Može použť  <font style="color:#428bca">/music</font> a prehrávať si neobičajnú hudbu !</h5>
<h5 style="font-weight:bold">9. A oveľa viac vymožeností len na <font style="color:#428bca">'. $sitename .'</font></h5>
</div>  
</div>  
</div> 
</div>
';

echo ' <div style="margin-bottom:10%"> </div> ';
require_once '../inc/footer.php';
?>