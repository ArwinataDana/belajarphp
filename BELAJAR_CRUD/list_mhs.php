<?php

include 'class_mhs.php';

$mahasiswa = new mahasiswa();
$data = $mahasiswa->read();
?>

<!DOCTYPE html>
<html lang="en">
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mahasiswa</title>
</head>

<body>

    <table style="width:100%">
        <thead>
            <th>ID</th>
            <th>Nama Mahasiswa</th>
            <th>Program Studi</th>
            <th>NIM</th>
            <th>Status</th>
            <th>Aksi</th>
        </thead>

        <tbody>
            <?php
            foreach ($data as $mahasiswa){
                echo "<tr>
                    <td>" . $mahasiswa['id'] . "</td>
                    <td>" . $mahasiswa['nama'] . "</td>
                    <td>" . $mahasiswa['prodi'] . "</td>
                    <td>" . $mahasiswa['nim'] . "</td>
                    <td>" . $mahasiswa['sts'] . "</td>
                    <td>
                        <a href='update_mhs.php?id=" . $mahasiswa['id'] . "'>Update</a>
                        <a href='update_mhs.php?id=" . $mahasiswa['id'] . "'>Delete</a>
                    </td>
            </tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>