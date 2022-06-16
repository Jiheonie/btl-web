<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="/fontawesome-free-6.1.1-web/css/all.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nuosu+SIL&family=Raleway:wght@100&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
    <div class="main">
        <?php
            $username = 'root';
            $password = '';
            $database = 'examples';
            $connect = new mysqli('localhost', $username, $password, $database);
            if($connect==false) {
                die("Connection failed: ".mysqli_connect_error());
            }
        ?>
        <form action="/btl_web/user_information/user_informarion.php" id="form-dang-nhap" method="post">
            <div class="form-header">
                <h1>Đăng nhập</h1>
            </div>
            <div class="form-input">
                <i class="fa-solid fa-user"></i>
                <input class="input-field" type="text" placeholder="Tên đăng nhập" name="account"
                <?php
                    if(!empty($_POST['account'])){
                        echo "value='".$_POST['account']."'";
                    }
                ?>
                >
            </div>
            <div class="form-input">
                <i class="fa-solid fa-key"></i>
                <input class="input-field" type="password" placeholder="Mật khẩu" name="password"
                <?php
                    if(!empty($_POST['password'])){
                        echo "value='".$_POST['password']."'";
                    }
                ?>
                >
                <div id="see-password">
                    <i class="fa-solid fa-eye"></i>
                </div>
            </div>
            <input class="input_submit" type="submit" value="Đăng nhập" name="submit">
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="app.js"></script>
</body>
</html>