<?php 
$buahBuahRujak = ['mangga','jambu','pepaya','bengkoang','kedongdong','mentimun','nanas','apel'];

echo "Campuran buah"." ". $buahBuahRujak[1].",". $buahBuahRujak[0].",". $buahBuahRujak[2].",". $buahBuahRujak[3];

for($i=0;$i<=3;$i++){
    echo "</br> $buahBuahRujak[$i]";
}
?>