<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/fontawesome-free-6.1.1-web/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="./style-sign-up.css">
</head>
<body>
    <?php
        if(isset($_POST['sign-in'])){
            run();
        }
        function run(){
            $count=0;
            $account = $_POST['account'];
            $name = $_POST['full-name'];
            $pass = $_POST['password'];
            $second_pass = $_POST['2nd-password'];
            $email = $_POST['email'];
            $phone = $_POST['phone-number'];
            $address = $_POST['address'];
            if((strlen($account)>0&&strlen($account) < 5) || strlen($account) > 50)
            {
                echo "<script>alert('Độ dài của tên có độ dài từ 5 đến 50 kí tự!');</script>";
                return;
            }
            else if(strlen($account)==0){
                echo "<script>alert('Bạn phải nhập thông tin ở ô Tên Đăng Nhập');</script>";
                return;
            }
            if((strlen($pass)>0 && strlen($pass) < 5) || strlen($pass) > 40)
            {
                echo "<script>alert('Độ dài của password có độ dài từ 8 đến 32 kí tự!');</script>";
                return;
            }
            else if(strlen($pass)==0){
                echo "<script>alert('Bạn phải nhập thông tin ở ô Mật Khẩu');</script>";
                return;
            }
            if((strlen($second_pass)>0 && strlen($second_pass) < 5) || strlen($second_pass) > 40)
            {
                echo "<script>alert('Độ dài của password có độ dài từ 8 đến 32 kí tự!');</script>";
                return;
            }
            else if(strlen($second_pass)==0){
                echo "<script>alert('Bạn phải nhập thông tin ở ô Nhập lại Mật Khẩu');</script>";
                return;
            }
            if((strlen($name)>0&&strlen($name) < 3) || strlen($name) > 50)
            {
                echo "<script>alert('Độ dài của tên có độ dài từ 3 đến 50 kí tự!');</script>";
                return;
            }
            else if(strlen($name)==0){
                echo "<script>alert('Bạn phải nhập thông tin ở ô Họ Và Tên');</script>";
                return;
            }
            if (strlen($phone)==0)
            {
                echo "<script>alert('Bạn phải nhập thông tin ở ô Số điện thoại');</script>";
                return;
            }
            for($i=0;$i<strlen($email);$i++){
                if($email[$i]=="@"||$email[$i]=="."){
                    $count++;
                }
            }
            if(strlen($email)==0){
                echo "<script>alert('Bạn phải nhập thông tin ở ô Email.');</script>";
                return;
            }
            else if($count<2){
                echo "<script>alert('Email phải có dạng là <sth>@<sth>.<sth>.');</script>";
                return;
            }
            if(strlen($address)==0){
                echo "<script>alert('Bạn phải nhập thông tin ở ô Địa chỉ liên lạc.');</script>";
                return;
            }
            $server = "localhost";
            $username = "root";
            $password = "";
            $database = "database";
            $connect = new mysqli($server, $username, $password, $database);
            if($connect==false){
                die("Connect failed: " .mysqli_connect_error());
            }
            $add="INSERT INTO user (username, fullname, pass, email, phone_number, address) VALUES ('$account','$name', '$pass','$email','$phone','$address')";
            if ($connect->query($add) === TRUE)
            {
                echo "Đăng ký thành công!";
                $connect->close();
                header("Location:/btl_web/login_form/index.php");
            }
            else
            {
                echo "Error: " . $add . "<br>" . $connect->error;
                $connect->close();
                header("Location: form đăng ký.php");
            }
        }
    ?>
    <div class="main">
        <?php
            $username = 'root';
            $password = '';
            $database = 'database';
            $connect = new mysqli('localhost', $username, $password, $database);
            if($connect==false) {
                die("Connection failed: ".mysqli_connect_error());
            }
        ?>
        <form action="" id="form-dang-nhap" method="post">
            <div class="form-header">
                <h1>Đăng ký</h1>
            </div>
            <div class="form-input">
                <i class="fa-solid fa-a"></i>
                <input class="input-field" type="text" placeholder="Họ và Tên" name="full-name">
            </div>
            <div class="form-input">
                <i class="fa-solid fa-user"></i>
                <input class="input-field" type="text" placeholder="Tên đăng nhập" name="account">
            </div>
            <div class="form-input">
                <i class="fa-solid fa-key"></i>
                <div id="password">
                    <input class="input-field" type="password" placeholder="Mật khẩu" name="password">
                </div>
                <div id="first-password">
                    <i class="fa-solid fa-eye"></i>
                </div>
            </div>
            <div class="form-input">
                <i class="fa-solid fa-check"></i>
                <div id="check-password">
                    <input class="input-field" type="password" placeholder="Nhập lại Mật khẩu" name="2nd-password">
                </div>
                <div id="second-password">
                    <i class="fa-solid fa-eye"></i>
                </div>
            </div>
            <div class="form-input">
                <i class="fa-solid fa-phone"></i>
                <input class="input-field" type="number" placeholder="Số điện thoại" name="phone-number">
            </div>
            <div class="form-input">
                <i class="fa-solid fa-envelope"></i>
                <input class="input-field" type="email" placeholder="Email" name="email">
            </div>
            <div class="form-input">
                <i class="fa-solid fa-address-card"></i>
                <input class="input-field" type="text" placeholder="Địa chỉ liên lạc" name="address">
            </div>
            <input class="input_submit" type="submit" value="Đăng ký" name="sign-in">
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="sign-up.js"></script>
</body>
</html>