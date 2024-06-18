<?php
include "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nama = isset($_POST['Nama']) ? $_POST['Nama'] : '';
    $Email = isset($_POST['Email']) ? $_POST['Email'] : '';
    $Telepon = isset($_POST['Telepon']) ? $_POST['Telepon'] : '';
    $Tgl_lahir = isset($_POST['Tgl_lahir']) ? $_POST['Tgl_lahir'] : '';
    $Umur = isset($_POST['Umur']) ? $_POST['Umur'] : '';
    $Alamat = isset($_POST['Alamat']) ? $_POST['Alamat'] : '';

    include 'koneksi.php'; // Sertakan file koneksi

    $sql = "INSERT INTO daftar_karate (Nama, Email, Telepon, Tgl_lahir, Umur, Alamat) VALUES ('$Nama', '$Email', '$Telepon', '$Tgl_lahir','$Umur','$Alamat')";

    if ($connection->query($sql) === TRUE) {
        echo "Terima kasih! Pendaftaran Anda telah terkirim.";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();
    header("Location: index.php");
    exit(); // Pastikan tidak ada kode ekstra yang dieksekusi setelah header
}
?>
