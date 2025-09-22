<?php
// -- tipe data integer
$kodebarang = 5;
$hargabarang = 5000;

echo "Kode barang " . $kodebarang;
echo "</br>";
echo "dengan harga " . $hargabarang;

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
    echo "TEKAD ADALAH KOENJI.<br>";
}

echo "</br> </br>";

// tipe data array
$teks = array("Musnahkan", "DPR", "korup", "adili", "dengan", "sangat", "adil");

// for($i=0;$i<=6;$i++){
    // echo "$teks[$i]";
// }
// sintaks di atas fungsinya sama dengan yang di bawah bedanya tidak bisa berisi space 

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

// Membuat koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "data_mahasiswa";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "Koneksi berhasil!";

mysqli_close($koneksi);

echo "</br> </br>";

// arithmetic operators
$a = 20;
$b = 5;

echo "$a + $b = " . ($a + $b); // penjumlahan
echo "</br>";
echo "$a - $b = " . ($a - $b); // pengurangan
echo "</br>";
echo "$a * $b = " . ($a * $b); // perkalian
echo "</br>";
echo "$a / $b = " . ($a / $b); // pembagian
echo "</br>";
echo "$a % $b = " . ($a % $b); // modulus/sisa hasil bagi
echo "</br>";

echo "</br> </br>";

//assignment operators

// basic assignment
$p = 5;
echo "\$p = " . $p;
$q = ($p = 10);
echo "</br>" . "\n\$p = " . $p . "</br>";
echo "\n\$q = " . $q;

echo "</br> </br>";

//combined assignment
$s = 3;
echo ($s += 4) . "</br>";
echo ($s -= 2) . "</br>";
echo ($s *= 2) . "</br>";
echo ($s /= 5) . "</br>";
echo ($s %= 9) . "</br>";

echo "</br> </br>";

//other combined
$g = 5;
$h = 3;
echo ($g**=$h) . "</br>";
echo $h**=2;

echo "</br> </br>";

//comparison operators

?>