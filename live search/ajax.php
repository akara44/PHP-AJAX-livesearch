<?php 
require_once "connection.php";

if (isset($_POST["liveSearch"])) {
    $value =$_POST["value"];
    
    $urun_sor = $baglanti->prepare("SELECT * FROM urunler WHERE anahtar_kelime LIKE ?");
    $urun_sor->execute(["%$value%"]);
    while ($urunsorcek =  $urun_sor->fetch(PDO::FETCH_ASSOC)) {
        
    
echo'  
<tr>
  <td>'. $urunsorcek["anahtar_kelime"].'</td>
</tr>';
 
    } 

}

?>