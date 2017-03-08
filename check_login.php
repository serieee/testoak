<?php
/**
 * Created by PhpStorm.
 * User: ibase
 * Date: 6/2/2560
 * Time: 15:44
 */
header("Content-type: text/html; charset=utf-8");
session_start();
include ('connect.php');
function login($username_chk,$passwd_chk,$conn){
    $sql = "SELECT * FROM members WHERE username='$username_chk' and passwd='$passwd_chk'";
    $res = $conn->query($sql);
    if($user = $res->fetch(PDO::FETCH_ASSOC)){
        $_SESSION["member_info"] = true;
        header('location:checkout_cart.php');
        exit();
    }else{
        //echo "<scrip> alert('ไม่ USER ผิด ก็ PASSWORD ผิดแหละ')";
        header('location:index.php?error=1');
        exit();
    }
}
if (isset($_POST["login"])){
    login($_POST["username"],$_POST["password"],$conn);
}
if(isset($_POST["logout"])){
    session_unset();
    session_destroy();
    if (ini_get("session.use_cookies")) {
    setcookie(session_name(),'',time() - 3600,"/");
    }
        echo "Session deleted";
        header('location:index.php');
        exit();
}
if (!isset($_SESSION["member_info"])){
    header('location: index.php');
    exit();
}

?>

