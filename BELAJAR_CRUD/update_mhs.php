<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="proses_create.php" method="POST">
        <label>Nama Lengkap</label>
        <input type="text" name="nama_mhs">
        <br>
        <select name="prodi_mhs">
            <option value="Sistem Teknologi dan Informasi">STI</option>
            <option value="Desain Mode">DM</option>
        </select>
        <br>
        <label>NIM</label>
        <input type="number" name="nim_mhs"/>
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