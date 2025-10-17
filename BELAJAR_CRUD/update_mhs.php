<?php

include 'class_mhs.php';

$mahasiswa = new Mahasiswa();
$data = $mahasiswa->update($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Mahasiswa</title>
</head>
<body>
    
    <form action="proses_create.php" method="POST">
        <label>Nama Lengkap</label>
        <input type="text" name="nama_mhs" value="<?php echo $data['nama']; ?>">
        <br>
        <?php
        $selectsti = $selectdm = '';
        if($data['prodi'] == "Sistem Teknologi dan Informasi"){
            $selectsti = '$selected';
        }elseif($data['prodi'] == "Desain Mode"){
            $selectdm = 'selected';
        }
        ?>

        <select name="prodi_mhs">
            <option value="Sistem Teknologi dan Informasi" <?php echo $selectsti ?>>STI</option>
            <option value="Desain Mode" <?php echo $selectdm ?>>DM</option>
        </select>
        <br>
        <label>NIM</label>
        <input type="number" name="nim_mhs" <?php echo $data['nim'] ?>/>
        <br>
        
        <label>Aktif</label>
        <input type="radio" name="sts_mhs" value="Aktif"/>
        <br>
        <label>Non-Aktif</label>
        <input type="radio" name="sts_mhs" value="Non-Aktif"/><br>
        <input type="submit" value="Submit Data"/>
    </form>

</body>
</html>