<?php 

$nama = "Faizal Dwi Al Farizi";
$kelas = "Sistem Informasi B";
$nim = "B21055";
$semester = 2;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webcam</title>
</head>
<body>
    <h1>Biodataku</h1>
    <hr>
    <div class="isi">
        <p>Nama     : <?= $nama; ?></p>
        <p>Kelas    : <?= $kelas; ?></p>
        <p>Semester : <?= $semester; ?></p>
        <p>NIM      : <?= $nim; ?></p>
    </div><p>Terima kasih</p>
</body>
</html>
