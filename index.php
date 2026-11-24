<?php
    require 'Hewan.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan 7 - Data Hewan (OOP PHP)</title>
</head>
<body> 

    <h2>Data Hewan </h2>

    <!-- Tampilan Data Objek Kucing -->
    <div class="card">
        <h3>Data Hewan 1</h3>
        <p>Nama: <?php echo $kucing->getNama(); ?></p>
        <p>Umur: <?php echo $kucing->getUmur(); ?> Tahun</p>
        <p>Jenis: <?php echo $kucing->getJenis(); ?></p>
        <p>Suara: <?php echo $kucing->getSuara(); ?></p>
    </div>

    <!-- Tampilan Data Objek Anjing -->
    <div class="card">
        <h3>Data Hewan 2</h3>
        <p>Nama: <?php echo $anjing->getNama(); ?></p>
        <p>Umur: <?php echo $anjing->getUmur(); ?> Tahun</p>
        <p>Jenis: <?php echo $anjing->getJenis(); ?></p>
        <p>Suara: <?php echo $anjing->getSuara(); ?></p>
    </div>

</body>
</html>