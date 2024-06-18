<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Website Admin karate-do gojukai</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-image: url('profil_karate.jpg');
            background-size: cover ;
            background-position: relative;
            background-repeat: no-repeat;
        }

        .table-container {
            margin: 0 auto;
            width: 100%;
            overflow-x: auto;
            background:rgba(12, 11, 9, 0.6);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            text-align: left;
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
            background: rgba(12, 11, 9, 0.6);
        }

        th, td {
            padding: 12px 15px;
        }

        th {
            background-color: #009879;
            color: #DEB887;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background: rgba(12, 11, 9, 0.6);
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<?php session_start();
    if(($_SESSION['status'])!="login"){
        header("location:index.php?pesan=belum_login");
    }
?>
<body>

      <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0 ">Daftar Siswa Karate-Do Gojukai DIY</h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
            <li><a class="nav-link scrollto" href="daftar_siswa.php">Siswa Baru</a></li>
            <li><a class="nav-link scrollto" href="daftar_latihan.php">Latihan</a></li>
            <li><a class="nav-link scrollto" href="daftar_pertandingan.php">Pertandingan</a></li>
            <li><a class="nav-link scrollto" href="daftar_contact.php">Contact</a></li>
            </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
      <a href="session.php" class="book-a-table-btn scrollto d-none d-lg-flex">Home</a>

    </div>
  </header><!-- End Header -->

    <br><br><br><br><br>
    <div class="table-container">
        <table>
            <thead>
                <tr class= "text-center">
                <td> No</td>
                <td> Nama</td>
                <td> Email</td>
                <td> Telepon</td>
                <td> Tanggal Lahir </td>
                <td> Umur</td>
                <td> Alamat </td>
                </tr>
            </thead>
            <?php
                include 'koneksi.php';
                $query=mysqli_query($connection, "select * from daftar_karate");
                while($data=mysqli_fetch_array($query))
                {?>
                    <tr>
                        <td class="text-center"> <?php echo $data['id_daftar']; ?></td>
                        <td> <?php echo $data['Nama']; ?></td>
                        <td> <?php echo $data['Email']; ?></td>
                        <td class="text-center"> <?php echo $data['Telepon']; ?></td>
                        <td class="text-center"> <?php echo $data['Tgl_lahir']; ?></td>
                        <td class="text-center"> <?php echo $data['Umur']; ?></td>
                        <td> <?php echo $data['Alamat']; ?></td>
            <?php 
        }?>
        </table>
    </div>
</body>
</html>




