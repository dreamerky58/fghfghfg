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
<h3 style="font-size: 40px" >Bans <br />
<small>Veberte: 
<a style="text-decoration:none;" href="'. $linkwebu .'public/bans_kick">kick</a>, 
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
<th scope="col">Zabanovaný dňa</th>
<th scope="col">Banoval</th>
<th scope="col">UnBanoval</th>
<th scope="col">Aktivita</th>
</tr>
</thead>
<tbody>
';

$sql = "SELECT * FROM litebans_bans";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

echo '
    <tr>
      <th scope="row">'. $row["id"] .'</th>
      <td><a href="https://sk.namemc.com/profile/'. $row["uuid"] .'">'. $row["uuid"] .'</a></td>
      <td>'. $row["reason"] .'</td>
      <td>'. $row["removed_by_date"] .'</td>
      <td>'. $row["banned_by_name"] .'</td>';
      if ($row["removed_by_name"]) {
      	echo '<td>'. $row["removed_by_name"] .'</td>';
      }else{
        echo '<td>-/-</td>';
      }

      if ($row["active"] == 1) {
      	echo '<td style="color:#ff6666">Aktívny</td>';
      }else{
      	echo '<td style="color:#3385ff">Vypršal</td>';
      }

    echo ' </tr> ';

    }
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