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
// double quotes (variabel bisa diproses)
$datastring = "AKU MC KALIAN SEMUA HANYA FIGURAN."; 
echo $datastring; // menampilkan isi string

echo "</br> </br>"; 

// single quotes (variabel tidak diproses)
echo 'Anjay single quotes!!!'; // output teks biasa
$namastring = 'yokosho';
echo 'variabel $namastring tidak akan di proses'; // tidak menampilkan isi variabel, hanya teks mentah

echo "</br> </br>"; 

// escape karakter (quotes di dalam quotes)
echo '</br> it\'s my toy!!!' . "\n"; // gunakan backslash (\) untuk menampilkan tanda kutip di dalam string

echo "</br> </br>";

// tipe data boolean 
$jokowi = true;  // bernilai true
$prabowo = false;   // bernilai false

if ($jokowi) {
    // kondisi true, maka teks ini tampil
    echo "LATIHAN YOSHIMITSU SAMPE TEPAR.<br>";
}

if ($prabowo) {
    // kondisi false, maka tidak dijalankan
    echo "GA YOSHI GAK ASIK.<br>";
} else {
    // karena false, maka bagian else dijalankan
    echo "TEKAD ADALAH KOENJI.<br>";
}

echo "</br> </br>";

// tipe data array
$teks = array("Musnahkan", "DPR", "korup", "adili", "dengan", "sangat", "adil"); // array indeks numerik
$tulisan = array("pertama" => "HIDUP", "kedua" => "BLONDE"); // array asosiatif
echo "$tulisan[pertama] " . "$tulisan[kedua]"; // akses array asosiatif
echo "</br> </br>";

// contoh for loop (dikomentari)
// for($i=0;$i<=6;$i++){
//     echo "$teks[$i]";
// }

// langsung cetak semua isi array manual dengan spasi
echo $teks[0] . " " . $teks[1] . " " . $teks[2] . " " . $teks[3] . " " . $teks[4] . " " . $teks[5] . " " . $teks[6];

echo "</br> </br>";

// tipe data null
$nilai = null; // variabel bernilai NULL

if (is_null($nilai)) {
    // true karena $nilai = null
    echo "Tabungan masih kosong (NULL)";
} else {
    echo "Tabungan sudah berisi";
}

echo "</br> </br>";

// tipe data resource (contoh koneksi database)
$host = "localhost"; // host server
$user = "root";      // user database
$pass = "";          // password database
$db   = "data_mahasiswa"; // nama database

$koneksi = mysqli_connect($host, $user, $pass, $db); // membuat koneksi ke database

if (!$koneksi) {
    // jika gagal konek tampil error
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "Koneksi berhasil!"; // tampil kalau koneksi berhasil

mysqli_close($koneksi); // menutup koneksi database

echo "</br> </br>";

// casting tipe data (contoh dikomentari)
// $umur = (int) "20";
// $harga = (float) $angka;
// $inibenar = (bool) $sesuatu;

//  OPERATORS PHP

// arithmetic operators
$a = 20;
$b = 5;

// operasi aritmatika dasar
echo "$a + $b = " . ($a + $b); // penjumlahan
echo "</br>";
echo "$a - $b = " . ($a - $b); // pengurangan
echo "</br>";
echo "$a * $b = " . ($a * $b); // perkalian
echo "</br>";
echo "$a / $b = " . ($a / $b); // pembagian
echo "</br>";
echo "$a % $b = " . ($a % $b); // modulus (sisa bagi)
echo "</br>";

echo "</br> </br>";

// assignment operators

// basic assignment
$p = 5; 
echo "\$p = " . $p; // menampilkan nilai p = 5
$q = ($p = 10); // $p diubah jadi 10, lalu disimpan juga ke $q
echo  "</br> \n\$p = " . $p . "</br>"; // hasil $p = 10
echo "\n\$q = " . $q; // hasil $q = 10 juga

echo "</br> </br>";

// combined assignment
$s = 3;
echo ($s += 4) . "</br>"; // $s = 3+4 = 7
echo ($s -= 2) . "</br>"; // $s = 7-2 = 5
echo ($s *= 2) . "</br>"; // $s = 5*2 = 10
echo ($s /= 5) . "</br>"; // $s = 10/5 = 2
echo ($s %= 9) . "</br>"; // $s = 2%9 = 2

echo "</br> </br>";

// other combined operators
$g = 5;
$h = 3;
echo ($g**=$h) . "</br>"; // $g = 5**3 = 125 (pangkat)
echo $h**=2; // $h = 3**2 = 9

echo "</br> </br>";

// comparison operators
$r = 5;
$w = '5';

if ($r == $w){
    echo 'r sama dengan w </br>'; // true karena nilai sama
}
if ($r === $w){
    echo 'r identik dengan w'; // false karena tipe beda (int vs string)
}
if ($r != $w){
    echo 'r tidak sama dengan w </br>'; // false
}
if ($r <> $w){
    echo 'r tidak sama dengan w </br>'; // false
}
if ($r !== $w){
    echo 'r tidak identik dengan w </br>'; // true
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
echo ++$k . "\n </br>"; // pre-increment, tambah dulu baru cetak → 3
echo --$k . "\n </br>"; // pre-decrement, kurang dulu baru cetak → 2
echo $k++ . "\n </br>"; // post-increment, cetak 2 lalu $k jadi 3
echo $k-- . "\n </br>"; // post-decrement, cetak 3 lalu $k jadi 2 lagi

echo "</br> </br>";

// Logical Operators
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

// string operators
// cara 1 (penggabungan string)
$namadepan = "michael";
$namabelakang = "jordhan";
$namalengkap = $namadepan . " "  . $namabelakang;
echo $namalengkap . "</br>"; // hasil: "michael jordhan"

// cara 2 (penggabungan banyak string)
$teks1 = "bapakku ";
$teks2 = "garena ";
$teks3 = "bapakmu apa?";
$hasil = "oiii " . $teks1 . $teks2 . $teks3;
echo $hasil; // hasil: "oiii bapakku garena bapakmu apa?"

echo "</br> </br>";

// Array operators
// UNION OPERATORS (menggabungkan array)
$buah1 = ["apel", "jeruk", "mangga"];
$buah2 = ["apel", "mangga", "buah naga"];
$kombinasibuah = $buah1 + $buah2; // penggabungan array
var_dump($kombinasibuah);

echo "</br> </br>"; 

// INTERSECTION OPERATORS (irisan array)
$buah3 = ["apel", "jeruk", "mangga"];
$buah4 = ["apel", "mangga", "buah naga"];
$kombinasibuah1 = array_intersect($buah3,$buah4); // hanya ambil yang sama
var_dump($kombinasibuah1);

echo "</br> </br>"; 

// DIFFERENCE OPERATORS (selisih array)
$buah5 = ["apel", "jeruk", "mangga"];
$buah6 = ["apel", "mangga", "buah naga"];
$kombinasibuah2 = array_diff($buah5,$buah6); // hanya ambil beda
var_dump($kombinasibuah2) . "</br>";

echo "</br> </br>";

// array comparison operators
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

// conditional assignment operators
// contoh 1 (ternary)
$harga = 30000;
$itumahal = ($harga >= 30000) ? 'yes' : 'no'; // jika harga >= 30000 maka 'yes'
echo "Apakah harga ini terbilang mahal? $itumahal";

echo "</br>";

// contoh 2 (null coalescing)
$namapanggilan = $_GET['namapengguna'] ?? 'guest'; // jika tidak ada input, default = guest
echo "selamat datang, $namapanggilan!";
?>
