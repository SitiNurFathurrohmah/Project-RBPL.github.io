<?php
include "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nama = isset($_POST['Nama']) ? $_POST['Nama'] : '';
    $Email = isset($_POST['Email']) ? $_POST['Email'] : '';
    $Subjek = isset($_POST['Subjek']) ? $_POST['Subjek'] : '';
    $Pesan = isset($_POST['Pesan']) ? $_POST['Pesan'] : '';

    include 'koneksi.php'; // Sertakan file koneksi

    $sql = "INSERT INTO contact (Nama, Email, Subjek, Pesan) VALUES ('$Nama', '$Email', '$Subjek', '$Pesan')";

    if ($connection->query($sql) === TRUE) {
        echo "Terima kasih! Pendaftaran Anda telah terkirim.";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();
    header("Location: index.html");
    exit(); // Pastikan tidak ada kode ekstra yang dieksekusi setelah header
}
?>