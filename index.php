<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>เข้าสู่ระบบ</title>


    <style>
        body{background-image: url("background2.jpg")}
        a{text-decoration: none;}
        .btn{
            border-radius: 6px;
            height: 30px;
            width: 150px;
            margin-top: 10px;
            background-color: beige;
            cursor: pointer;
        }
        .btn:hover
        {
            background-color: dodgerblue;
            color: white;
        }
        input{
            border: solid 1px darkgray;
            border-radius: 4px;
            font-size: 14px;
            padding-top: 0.35em;
            padding-bottom: 0.35em;
            padding-left: 0.75em;
            padding-right: 0.75em;
        }
    </style>
</head>
<?php
session_start();

    if (isset($_GET["error"])){
        echo "<script type='text/javascript' >alert('ชื่อผู้ใช้หรือรหัสผ่านผิด กรุณากรอกใหม่ค่ะ')</script>";
    }
    if (isset($_SESSION["member_info"])){
        header('location:checkout_cart.php');
        exit();
    }
?>

<body style="background-attachment: fixed">
<div style="margin-top:10%">
    <center>
        <form id="loginform" method="post" name="login" action="check_login.php">
            <fieldset style=" width: 200px; border-color: orange; border-radius: 10px;">
                <legend style="color: white"><h2><b>Log In</b></h2></legend>
                <div align="center">

                    <label for="username" style="color: white">ชื่อผู้ใช้</label>
                    <input type="text" name="username" id="username" maxlength="16"/></p>
                </div>
                <div align="center">
                    <label for="password" style="color: white">รหัสผ่าน</label>
                    <input type="password"  name="password" id="password" maxlength="16" ></p>
                </div>
                <div align="center">
                    <input class="btn" type="submit" name="login" id="login" value="Login" style="cursor:hand;">
                </div>

            </fieldset>
        </form></p>
    </center>
</div>
</body>
</html>
<?php show_source("index.php"); ?>