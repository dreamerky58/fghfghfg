<?php 
require_once '../inc/header.php'; 


echo ' <div id="podstranka">
<div style="margin-top: 50px;" class="container">
<h1>'. $sitename .' partnery  </h1>
</div> 
</div> 
';


echo ' 
<div style="margin-bottom: 20%;" class="container">
<div class="row"> 
';

echo ' 
<div class="col-sm-12">
<h3 style="font-size: 40px" class="cosmic">Hlavný partner:</h3>
<div class="hr"></div>
</div>
';

    
echo ' 
<div class="col-sm-3"> 
<a style="text-decoration:none" href="https://hostsoft.eu"><img src="'. $linkwebu .'assets/img/hostsoft-black.png">  
</div>
';

echo ' 
<div class="col-sm-3">
<a style="color:gray;font-weight:bold; font-size: 30px; text-decoration: none;" href="https://www.insites.sk"> <font style="color:orange">In</font>Sites.sk </a>
</div> 
';



echo ' 
<div style="margin-top: 4%;" class="col-sm-12">
<h3 style="font-size: 40px" class="cosmic">Vedlajší partner:</h3>
<div class="hr"></div>
</div>
';

echo ' 
<div class="col-sm-3">
<a href="http://www.serverbook.cz"><img src="http://www.serverbook.cz/images/cernybanner.png" alt="ServerBook.cz"></a></br>
</div> 
';

echo ' </div> ';
echo ' </div> ';


require_once '../inc/footer.php';
?>