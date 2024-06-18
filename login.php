<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website karate-do gojukai</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/icon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('profil_karate.jpg');
            background-size: cover ;
        }

        .container {
            background: rgba(0, 0, 0, 0.7);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            color: white;
            width: 300px;
            text-align: center;
        }

        .login-box h2 {
            margin: 0 0 20px;
        }

        .textbox {
            margin: 10px 0;
        }

        .textbox input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
            color: black;
        }

        .btn {
            width: 100%;
            background: #333;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            color: white;
            font-size: 16px;
        }

        .btn:hover {
            background: #555;
        }
    </style>
</head>
<body>
    <div class="container">
    <form id="request" form action="cek_login.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
        <div class="login-box">
            <h2>Login</h2>
            <form>
                <div class="textbox">
                    <input type="text" name="username" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="textbox">
                    <input type="password" class="form-control" name="password" id="email" placeholder="Password" data-rule="email" data-msg="Please enter a valid email">
                    <div class="validate"></div>
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </div>
</body>
</html>


