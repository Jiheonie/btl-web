<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit.css">
    <link href="/fontawesome-free-6.1.1-web/css/all.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nuosu+SIL&family=Raleway:wght@100&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php
        if(isset($_POST['submit'])){
            run();
        }
        function run(){
            $account = $_POST['account'];
            $pass = $_POST['password'];
            if(strlen($account) == 0)
            {
                echo "<script>alert('Bạn chưa nhập thông tin trong ô Tên đăng nhập');</script>";
                return;
            }
            if(strlen($pass) == 0)
            {
                echo "<script>alert('Bạn chưa nhập thông tin trong ô Mật khẩu');</script>";
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
            $add="SELECT username, fullname, pass, email, phone_number, address FROM User WHERE username = '$account' AND pass = '$pass'";
            $result=$connect->query($add);
            if ($result->num_rows ===1 )
            {
                echo "Đăng nhập thành công!";
                $connect->close();
            }
            else
            {
                echo "Error: " . $add . "<br>" . $connect->error;
                $connect->close();
                header("Location: /btl_web/login_form/index.php");
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
        <div class="head"></div>
        <div class="body">
            <div class="column-left">
                <div class="first">
                    <h1>Nguyễn Vinh</h1>
                </div>
                <div class="list-of-information">
                    <a href="#" class="list" id="list_main">Thông tin cá nhân</a>
                    <a href="#" class="list">Danh sách đơn hàng</a>
                    <a href="#" class="list">Đánh giá</a>
                    <a href="#" class="list">Tủ đồ định kỳ</a>
                    <a href="#" class="list">Ví Voucher</a>
                    <a href="#" class="list">Gửi ý kiến cho Coolmate</a>
                    <a href="#" class="list">Thoát</a>
                </div>
            </div>
            <div class="horizon"></div>
            <div class="column-right">
                <div class="second">
                    <h1>Thông tin tài khoản</h1>
                </div>
                <div class="fill-in">
                    <p>Họ Tên</p>
                    <input type="text" placeholder="Họ và tên của bạn" style="margin-left: 138px"
                    <?php
                        if(!empty($_POST['account'])&&!empty($_POST['password'])){
                            $account = $_POST['account'];
                            $pass = $_POST['password'];
                            $connect = new mysqli('localhost', 'root', '', 'database');
                            $add="SELECT username, fullname, pass, email, phone_number, address FROM user WHERE username = '$account' AND pass = '$pass'";
                            $result=$connect->query($add);
                            $row=$result->fetch_assoc();
                            if ($result->num_rows > 0){
                                echo "value='".$row["fullname"] ."'";
                            }
                            else echo "";
                            $connect->close();
                        }
                    ?>>
                </div>
                <div class="fill-in">
                    <p>Email</p>
                    <input type="email" placeholder="Email của bạn" style="margin-left: 150px"
                    <?php
                        if(!empty($_POST['account']) && !empty($_POST['password'])){
                            $account = $_POST['account'];
                            $pass = $_POST['password'];
                            $connect = new mysqli('localhost', 'root', '', 'database');
                            $add="SELECT username, fullname, pass, email, phone_number, address FROM user WHERE username = '$account' AND pass = '$pass'";
                            $result=$connect->query($add);
                            $row=$result->fetch_assoc();
                            if ($result->num_rows > 0){
                                echo "value='".$row["email"] ."'";
                            }
                            else echo "";
                            $connect->close();
                        }
                    ?>
                    >
                </div>
                <div class="fill-in">
                    <p>Số điện thoại</p>
                    <input type="number" placeholder="SĐT của bạn" style="margin-left: 92px"
                    <?php
                        if(!empty($_POST['account']) && !empty($_POST['password'])){
                            $account = $_POST['account'];
                            $pass = $_POST['password'];
                            $connect = new mysqli('localhost', 'root', '', 'database');
                            $add="SELECT username, fullname, pass, email, phone_number, address FROM user WHERE username = '$account' AND pass = '$pass'";
                            $result=$connect->query($add);
                            $row=$result->fetch_assoc();
                            if ($result->num_rows > 0){
                                echo "value='".$row["phone_number"] ."'";
                            }
                            else echo "";
                            $connect->close();
                        }
                    ?>
                    >
                </div>
                <div class="fill-in">
                    <p>Địa chỉ</p>
                    <input type="text" placeholder="Địa chỉ" style="margin-left: 140px"
                    <?php
                        if(!empty($_POST['account']) && !empty($_POST['password'])){
                            $account = $_POST['account'];
                            $pass = $_POST['password'];
                            $connect = new mysqli('localhost', 'root', '', 'database');
                            $add="SELECT username, fullname, pass, email, phone_number, address FROM user WHERE username = '$account' AND pass = '$pass'";
                            $result=$connect->query($add);
                            $row=$result->fetch_assoc();
                            if ($result->num_rows > 0){
                                echo "value='".$row["address"] ."'";
                            }
                            else echo "";
                            $connect->close();
                        }
                    ?>
                    >
                </div>
                <div class="fill-in">
                    <p>Ngày sinh</p>
                    <input type="date" style="margin-left: 115px" >
                </div>
                <div class="fill-in">
                    <p>Giới tính</p>
                    <input type="radio" style="margin-top: 5px; margin-left: 130px; margin-right: 20px;">
                    <p>Nam</p>
                    <input type="radio" style="margin-top: 5px; margin-left: 50px; margin-right: 20px;">
                    <p>Nữ</p>
                </div>
                <div class="fill-in">
                    <p>Cân nặng</p>
                    <input type="number" name="" id="" class="range" style="margin-left: 125px">
                    <p style="margin-left: 10px">kg</p>
                </div>
                
                <div class="fill-in">
                    <p>Chiều cao</p>
                    <input type="number" name="" id="" class="range" style="margin-left: 120px">
                    <p style="margin-left: 10px">cm</p>
                </div>
                <input type="submit" value="Cập nhật tài khoản">
            </div>
        </div>
        <div class="footer"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="./function.js"></script>
</body>
</html>