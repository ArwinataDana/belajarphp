<?php
// -- tipe data integer
$kodebarang = 5;
$hargabarang = 5000;

echo "Kode barang" . $kodebarang;
echo "</br>";
echo "dengan harga" . $hargabarang;

echo "</br> </br>";

// tipe data float
$nilaimtk = 65.5;
$nilaiipa = 71.1;
$nilaiips = 85.7;
$nilaiagama = 80.4;
$nilaipenjas = 92.5;

echo "Total nilai matematika " . $nilaimtk;
echo "</br>";
echo "Total nilai ilmu pengetahuan agama " . $nilaiipa;
echo "</br>";
echo "Total nilai ilmu pengetahuan sosial " . $nilaiips;
echo "</br>";
echo "Total nilai agama " . $nilaiagama;
echo "</br>";
echo "Total nilai pendidikan jasmani " . $nilaipenjas;

echo "</br> </br>";

// tipe data string
$datastring = "AKU MC KALIAN SEMUA HANYA FIGURAN.";
echo $datastring;

echo "</br> </br>";

// tipe data bolean 
$isRaining = true;
$isSunny = false;

if ($isRaining) {
    echo "LATIHAN YOSHIMITSU SAMPE TEPAR.<br>";
}

if ($isSunny) {
    echo "GA YOSHI GAK ASIK.<br>";
} else {
    echo "TEKAD ADALAH KUNCI.<br>";
}

echo "</br> </br>";

// tipe data array
$teks = array("Musnahkan", "DPR", "korup", "adili", "dengan", "sangat", "adil");
// for($i=0;$i<=6;$i++){
//     echo "$teks[$i]";
// }
echo $teks[0] . " " . $teks[1] . " " . $teks[2] . " " . $teks[3] . " " . $teks[4] . " " . $teks[5] . " " . $teks[6];

echo "</br> </br>";

// tipe data null
$nilai = null;

if (is_null($nilai)) {
    echo "Tabungan masih kosong (NULL)";
} else {
    echo "Tabungan sudah berisi";
}

echo "</br> </br>";

// tipe data resouce



?>