<?php
//MATERI PPT PERTEMUAN 3

//IF ELSE STATEMENT
$angka = 20;
$batas = 18;
if ($angka >= $batas) {
    echo "Point anda sudah cukup!";
} else {
    echo "Point anda kurang mencukupi!";
}

echo "</br>  </br>";

//ELSIF STATEMENT

var_dump($nilai = 60);
if ($nilai >= 85) {
    echo "Sangat baik";
} elseif ($nilai >= 75) {
    echo "Baik";
} elseif ($nilai >= 65) {
    echo "Cukup";
} else {
    echo "Mohon mengulang kembali";
}

echo "</br>  </br>";

//NESTED STATEMENT

$umur = 20;
$batas = 18;
if ($umur >= $batas) {
    echo "Anda berhak untuk masuk!";

    if ($umur > 30) {
        echo "(Terlalu tua!)";
    } elseif ($umur < 20) {
        echo "(Terlalu muda!)";
    } else {
        echo "(Usia pas)";
    }
} else {
    echo "Anda tidak berhak untuk masuk!";
}

echo "</br>  </br>";

//SWITCH CASE STATEMENT

$hari = "rabu";
switch ($hari) {
    case "senin";
        echo "Mulai bekerja!";
        break;
    case "rabu";
        echo "Rapat Mingguan!";
        break;
    case "jumat";
        echo "Evaluasi akhir pekan!";
        break;
}

echo "</br>  </br>";

//TERNARY OPERATOR
$a = 1;
$b = 2;
echo ($a > $b) ? "a lebih besar dari pada b" : "a lebih kecil dari pada b";

echo "</br>  </br>";

//FOR LOOP STATEMENT

for ($i = 1; $i <= 5; $i++) {
    echo "Perulangan ke-$i</br>";
}

echo "</br>  </br>";

//WHILE LOOP STATEMENT

$nilaii = 1;
while ($nilaii <= 5) {
    echo "Nilai sekarang: $nilaii </br>";
    $nilaii++;

echo "</br>  </br>";

//DO-WHILE LOOP STATEMEN

}
