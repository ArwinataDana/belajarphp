<?php
// IMPLEMENTASI CLASS
class Mahasiswa
{

    public $nama;
    public $nim;

    function __construct($nama, $nim)
    {
        $this->nama = $nama;
        $this->nim = $nim;
    }
    function kenalan()
    {
        echo "Nama saya adalah " . $this->nama . "</br>";
        echo "NIM saya adalah " . $this->nim . "</br>";
        $this->hobi();
        $this->prodi();
        $this->kelas();
    }
    function hobi()
    {
        echo "Hobiku adakah gelud </br>";
    }
    function prodi()
    {
        echo "Saya merupakan mahasiswa dari prodi STI </br>";
    }
    function kelas()
    {
        echo "Kelas saya adalah FBA </br>";
    }
}

$mhs01 = new Mahasiswa("Budi", 1234567890);
$mhs01->nama = "Odel";
$mhs01->kenalan();

echo "</br>";

//INHERTIANCE(PEWARIS)

class manajemenUser
{
    public $data = [
        ["nim" => 12345633, "nama" => "Mamat", "prodi" => "STI", "akses" => "admin"],
        ["nim" => 99729457, "nama" => "Mumut", "prodi" => "STI", "akses" => "admin"]
    ];


    function cariUser($nim)
    {
        $stscari = false;
        foreach ($this->data as $user) {
            if ($user['nim'] == $nim) {
                $stscari = true;
                echo "Nama adalah " . $user['nama'] . "</br>";
                echo "NIM adalah " . $user['prodi'] . "</br>";
                echo "Hak Akses adalah " . $user['akses'] . "</br>";
                break;
            }
        }
        if ($stscari == false) {
            echo "Pengguna tidak ditemukan";
        }
    }
}
class akses extends manajemenUser
{

    function cariAkses($nim)
    {
        $this->cariUser($nim);
        foreach ($this->data as $user) {
            if ($user['nim'] == $nim) {
                if ($user['akses'] == 'admin') {
                    echo "AKU ADALAH RAJA KAMU RAKYAT";
                } else {
                    echo "PEJABAT ANJENG";
                }
            }
        }
    }
}

$searchnim = new akses();
$searchnim->cariAkses(12345633);
