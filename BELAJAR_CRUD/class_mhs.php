<?php

include 'koneksi.php';

class Mahasiswa extends Database
{

    public function create($nama, $prodi, $nim, $status)
    {
        $stmt = $this->conn->query("INSERT INTO tb_mhs(nama_mhs,prodi_mhs,nim_mhs,status_mhs) VALUES ('" . $nama . "','" . $prodi . "','" . $nim . "','" . $status . "')");

        if ($stmt == TRUE) {
            $message = "Data Berhasil Disimpan";
        } else {
            $message = "Data Tidak Disimpan";
        }
        return $message;
    }
    public function read()
    {
        $stmt = $this->conn->query("SELECT * FROM tb_mhs");
        if ($stmt->num_rows > 0) {
            $message = [];
            while ($row = $stmt->fetch_assoc()) {
                $data['id'] = $row['id_mhs'];
                $data['nama'] = $row['nama_mhs'];
                $data['prodi'] = $row['prodi_mhs'];
                $data['nim'] = $row['nim_mhs'];
                $data['sts'] = $row['status_mhs'];
                $message[] = $data;
            }
        } else {
            $message = "Tida Ada Data";
        }
        return $message;
    }
}
