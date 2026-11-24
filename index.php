<?php
require_once 'datahewan.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Hewan</title>
</head>
<body>

    <h2>DATA HEWAN</h2>

    <h3>Hewan 1</h3>
    Nama: <?php echo $kucing->getNama(); ?><br>
    Umur: <?php echo $kucing->getUmur(); ?> Tahun<br>
    Jenis: Kucing<br>
    Suara: <?php echo $kucing->getSuara(); ?><br>

    <hr>

    <h3>Hewan 2</h3>
    Nama: <?php echo $anjing->getNama(); ?><br>
    Umur: <?php echo $anjing->getUmur(); ?> Tahun<br>
    Jenis: Anjing<br>
    Suara: <?php echo $anjing->getSuara(); ?><br>

</body>
</html>