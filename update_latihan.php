<?php session_start();
    if(($_SESSION['status'])!="login"){
        header("location:index.php?pesan=belum_login");
    }

    include "koneksi.php";

    $id_latihan = $_POST['id_latihan'];
    $Hari = $_POST['Hari'];
    $Jam = $_POST['Jam'];
    $Tempat = $_POST['Tempat'];

    $query=mysqli_query($connection, "UPDATE latihan SET 
                     Hari='$Hari',Jam='$Jam',Tempat='$Tempat' where id_latihan='$id_latihan'")
    or die(mysqli_error($connection));
    if($query)
    {
        echo "Proses update berhasil, ingin lihat hasil
        <a href='tampil.php'> disini </a>";
        echo "<br>";
    }
    else
    {
        echo "Proses update gagal";
        echo "<br>";
    }
?>