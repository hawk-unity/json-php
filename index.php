<?php 
echo "<center><h2>cybercoder.faruk Json Api Çekme</center></h2> ";
echo "<center><h4>Başkalarının Rest Apilerini kullanın sizin kendi apiniz yok :D </center></h4> ";
$site="http://demo.farukdeveloper.online/database.json";
$hawkapi=file_get_contents($site);
$hawkrest=json_decode($hawkapi,true);
foreach ($hawkrest as $key => $value){
    echo "<big>Post Başlık = >" .  $hawkapi=$value["title"];
    echo"<br>";
    echo "Post Yazısı  = >" .  $hawkapi=$value["post"];
    echo"<br>";
	echo "Postun yazarı = >" .  $hawkapi=$value["yazar"];
    echo"<big>";
    echo"<br>";
}
?> 