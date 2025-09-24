<?php
// -- tipe data integer
$kodebarang = 5; // variabel integer
$hargabarang = 5000; // variabel integer

echo "Kode barang " . $kodebarang; // menampilkan "Kode barang 5"
echo "</br>";
echo "dengan harga " . $hargabarang; // menampilkan "dengan harga 5000"

echo "</br> </br>";

// tipe data float
$nilaimtk = 65.5;    // float
$nilaiipa = 71.1;    // float
$nilaiips = 85.7;    // float
$nilaiagama = 80.4;  // float
$nilaipenjas = 92.5; // float

// menampilkan nilai float
echo "Total nilai matematika " . $nilaimtk; // tampil nilai matematika
echo "</br>";
echo "Total nilai ilmu pengetahuan agama " . $nilaiipa; // tampil nilai IPA
echo "</br>";
echo "Total nilai ilmu pengetahuan sosial " . $nilaiips; // tampil nilai IPS
echo "</br>";
echo "Total nilai agama " . $nilaiagama; // tampil nilai Agama
echo "</br>";
echo "Total nilai pendidikan jasmani " . $nilaipenjas; // tampil nilai Penjas

echo "</br> </br>";

// tipe data string
//double quotes
$datastring = "AKU MC KALIAN SEMUA HANYA FIGURAN."; 
echo $datastring; // menampilkan isi string

//single quotes
echo 'Anjay single quotes!!!'; //output single quotes
$namastring = 'yokosho';
echo 'variabel $namastring tidak akan di proses'; //variabel $namastring tidak akan di proses

echo "</br> </br>";

// tipe data boolean 
$jokowi = true;  // bernilai true
$prabowo = false;   // bernilai false

if ($jokowi) {
    // karena true, maka teks ini akan tampil
    echo "LATIHAN YOSHIMITSU SAMPE TEPAR.<br>";
}

if ($prabowo) {
    // tidak dieksekusi karena false
    echo "GA YOSHI GAK ASIK.<br>";
} else {
    // else jalan, menampilkan teks berikut
    echo "TEKAD ADALAH KOENJI.<br>";
}

echo "</br> </br>";

// tipe data array
$teks = array("Musnahkan", "DPR", "korup", "adili", "dengan", "sangat", "adil");

// contoh for loop (dikomentari)
// for($i=0;$i<=6;$i++){
//     echo "$teks[$i]";
// }

// langsung cetak semua isi array manual dengan spasi
echo $teks[0] . " " . $teks[1] . " " . $teks[2] . " " . $teks[3] . " " . $teks[4] . " " . $teks[5] . " " . $teks[6];

echo "</br> </br>";

// tipe data null
$nilai = null;

if (is_null($nilai)) {
    // true karena $nilai = null
    echo "Tabungan masih kosong (NULL)";
} else {
    echo "Tabungan sudah berisi";
}

echo "</br> </br>";

// tipe data resource
// Membuat koneksi ke database
$host = "localhost"; // host server
$user = "root";      // user database
$pass = "";          // password database
$db   = "data_mahasiswa"; // nama database

$koneksi = mysqli_connect($host, $user, $pass, $db); // membuat koneksi

if (!$koneksi) {
    // jika gagal konek tampil error
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "Koneksi berhasil!"; // tampil kalau koneksi berhasil

mysqli_close($koneksi); // menutup koneksi database

echo "</br> </br>";

// arithmetic operators
$a = 20;
$b = 5;

// operasi aritmatika dasar
echo "$a + $b = " . ($a + $b); // 25
echo "</br>";
echo "$a - $b = " . ($a - $b); // 15
echo "</br>";
echo "$a * $b = " . ($a * $b); // 100
echo "</br>";
echo "$a / $b = " . ($a / $b); // 4
echo "</br>";
echo "$a % $b = " . ($a % $b); // 0 (sisa bagi)
echo "</br>";

echo "</br> </br>";

// assignment operators

// basic assignment
$p = 5; 
echo "\$p = " . $p; // menampilkan 5
$q = ($p = 10); // $p diubah jadi 10, lalu nilai juga disimpan ke $q
echo "</br>" . "\n\$p = " . $p . "</br>"; // 10
echo "\n\$q = " . $q; // 10 juga

echo "</br> </br>";

// combined assignment
$s = 3;
echo ($s += 4) . "</br>"; // 3+4 = 7
echo ($s -= 2) . "</br>"; // 7-2 = 5
echo ($s *= 2) . "</br>"; // 5*2 = 10
echo ($s /= 5) . "</br>"; // 10/5 = 2
echo ($s %= 9) . "</br>"; // 2%9 = 2

echo "</br> </br>";

// other combined
$g = 5;
$h = 3;
echo ($g**=$h) . "</br>"; // 5**3 = 125
echo $h**=2; // 3**2 = 9

echo "</br> </br>";

// comparison operators
$r = 5;
$w = '5';

if ($r == $w){
    echo 'r sama dengan w </br>'; // true karena nilainya sama
}
if ($r === $w){
    echo 'r identik dengan w'; // false, tidak dieksekusi (tipe berbeda: int vs string)
}
if ($r != $w){
    echo 'r tidak sama dengan w </br>'; // false
}
if ($r <> $w){
    echo 'r tidak sama dengan w </br>'; // false
}
if ($r !== $w){
    echo 'r tidak identik dengan w </br>'; // true, karena tipe beda
}
if ($r < $w){
    echo 'r kurang dari w </br>'; // false
}
if ($r > $w){
    echo 'r lebih dari w </br>'; // false
}
if ($r <= $w){
    echo 'r kurang dari atau sama dengan w </br>'; // true
}
if ($r >= $w){
    echo 'r lebih dari satu atau sama dengan w '; // true
}

echo "</br> </br>";

// increment & decrement operators
$k = 2;
echo $k . "\n </br>";   // cetak 2
echo ++$k . "\n </br>"; // pre-increment, cetak 3
echo --$k . "\n </br>"; // pre-decrement, cetak 2
echo $k++ . "\n </br>"; // post-increment, cetak 2 tapi $k jadi 3
echo $k-- . "\n </br>"; // post-decrement, cetak 3 tapi $k jadi 2 lagi

echo "</br> </br>";

//Logical Operators
$aa = true;
$bb = false;
if ($aa and $bb){
    echo "kedua variabel bernilai true.";
} else {
    echo "salah satu atau kedua variabel bernilai false. </br>";
}
if ($aa && $bb){
    echo "kedua variabel bernilai true.";
} else {
    echo "salah satu atau kedua variabel bernilai false. </br>";
}
if ($aa or $bb){
    echo "kedua variabel bernilai true.";
} else {
    echo "salah satu atau kedua variabel bernilai false. </br>";
}
if ($aa || $bb){
    echo "kedua variabel bernilai true.";
} else {
    echo "salah satu atau kedua variabel bernilai false. </br>";
}
if ($aa xor $bb){
    echo "</br> kedua variabel bernilai true.";
} else {
    echo "salah satu atau kedua variabel bernilai false.";
}
if (!$aa){
    echo "kedua variabel bernilai true. </br>";
} else {
    echo "salah satu atau kedua variabel bernilai false.";
}

echo "</br> </br>";

//string operators
//cara 1
$namadepan = "michael";
$namabelakang = "jordhan";
$namalengkap = $namadepan . " "  . $namabelakang;
echo $namalengkap . "</br>"; // gabungan string depan + belakang


//cara 2
$teks1 = "bapakku ";
$teks2 = "garena ";
$teks3 = "bapakmu apa?";
$hasil = "oiii " . $teks1 . $teks2 . $teks3;
echo $hasil; // gabungan beberapa string

echo "</br> </br>";

//array comparasion operators
$satu = [4,5];
$dua = [4,5];
var_dump($satu == $dua); // true karena nilai sama

echo "</br>";

$tiga = [4,5];
$empat = [5,4];
var_dump($tiga === $empat); // false karena urutan berbeda

echo "</br>";

$lima = [4,5];
$enam = [5,4];
var_dump($lima != $enam); // true karena isi berbeda

echo "</br>";

$tujuh = [4,5];
$delapan = [4,"5"];
var_dump($tujuh !== $delapan); // true karena tipe berbeda (int vs string)

echo "</br> </br>";

//conditional assigment operators
//contoh 1
$harga = 30000;
$itumahal = ($harga >= 30000) ? 'yes' : 'no'; // operator ternary
echo "Apakah harga ini terbilang mahal? $itumahal";

echo "</br>";

//contoh 2
$namapanggilan = $_GET['namapengguna'] ?? 'guest'; // null coalescing (jika kosong = guest)

echo "selamat datang, $namapanggilan!";
?>
