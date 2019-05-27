<?php
require_once '../inc/header.php';
require_once '../inc/MinecraftUUID.php';
echo '
<div style="margin-top:50px;" id="podstranka">
<div class="container">
<h1>Banlist '. $sitename .'</h1>
</div>
</div>
';


echo '
<div class="container">
<div class="panel-heading">
<h3 style="font-size: 40px" >Kick <br />
<small>Veberte: 
<a style="text-decoration:none;" href="'. $linkwebu .'public/bans_ban">ban</a>,  
<a style="text-decoration:none;" href="'. $linkwebu .'public/bans_mute">mute</a>
</small>
</h3>
</div> 
';


echo '
<table class="table table-hover">
<thead>
<tr>
<th scope="col">ID</th>
<th scope="col">Zabanovaný</th>
<th scope="col">Dôvod</th>
<th scope="col">Kickoval</th>
</tr>
</thead>
<tbody>
';

$sql = "SELECT * FROM litebans_kicks";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

echo '
    <tr>
      <th scope="row">'. $row["id"] .'</th>
      <td><a href="https://sk.namemc.com/profile/'. $row["uuid"] .'">'. $row["uuid"] .'</a></td>
      <td>'. $row["reason"] .'</td>
      <td>'. $row["banned_by_name"] .'</td>';

    echo ' </tr> ';

    }
} else {
    echo "V databázi sa nenachádza nič!";
}
$conn->close();

echo '
</tbody>
</table>
</div>
';

echo ' <div style="margin-bottom:10%"> </div> ';

require_once '../inc/footer.php';
?>