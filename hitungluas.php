<?php
// Function untuk menghitung volume limas segi empat
function volumeLimas($s, $tinggi) {
    // Hitung luas alas (persegi) = sisi × sisi
    $luasAlas = $s * $s;
    // Rumus volume limas = 1/3 × luas alas × tinggi limas
    return (1/3) * $luasAlas * $tinggi;
}

// Function untuk menghitung luas permukaan limas segi empat
function luasPermukaanLimas($s, $tinggiSegitiga) {
    // Luas alas (persegi) = sisi × sisi
    $luasAlas = $s * $s;
    // Luas 4 sisi segitiga = 4 × (1/2 × sisi alas × tinggi segitiga)
    $luasSisi = 4 * (0.5 * $s * $tinggiSegitiga);
    // Luas permukaan = luas alas + jumlah luas sisi tegak
    return $luasAlas + $luasSisi;
}

// ---------------- MAIN PROGRAM ----------------
$s = 6;              // panjang sisi alas persegi (s)
$tinggiLimas = 9;    // tinggi limas (jarak dari alas ke puncak)
$tinggiSegitiga = 8; // tinggi segitiga tegak (tinggi tiap sisi segitiga)

$pilihan = 1; // pilihan menu: 1 untuk volume, 2 untuk luas permukaan

// Percabangan untuk menentukan perhitungan berdasarkan pilihan
if ($pilihan == 1) {
    // Jika memilih 1 → tampilkan volume limas
    echo "Sisi alas = $s, Tinggi limas = $tinggiLimas<br>";
    echo "Volume Limas Segi Empat = " . volumeLimas($s, $tinggiLimas);
} elseif ($pilihan == 2) {
    // Jika memilih 2 → tampilkan luas permukaan limas
    echo "Sisi alas = $s, Tinggi segitiga sisi tegak = $tinggiSegitiga<br>";
    echo "Luas Permukaan Limas Segi Empat = " . luasPermukaanLimas($s, $tinggiSegitiga);
} else {
    // Jika memilih selain 1 dan 2 → tampilkan pesan error
    echo "Pilihan tidak valid!";
}
?>
