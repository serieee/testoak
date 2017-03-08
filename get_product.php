<?php
/**
 * Created by PhpStorm.
 * User: ibase
 * Date: 10/2/2560
 * Time: 11:37
 */
include ("connect.php");
function get_product($conn){
    $sql = "SELECT * FROM products ";
    $res = $conn->query($sql);
    $product = array();
    $i = 1;
    $j = 0;

        echo "<table border='5px'>";
        echo "<tr><th>ลำดับ</th><th>สินค้า</th><th>รหัสสินค้า</th><th>ราคา</th><th>จำนวน</th></tr>";

        while($user = $res->fetch(PDO::FETCH_OBJ)) {
            echo "<tr><td>$i</td><td>{$user->product_name}</td><td>{$user->product_code}</td><td>{$user->price}</td><td><input type='number' name='amount[]' min='0'></td></tr>";
            $product[$j] = array($user->product_name,$user->product_code,$user->price);
            $i++;
            $j++;
        }
        echo "</table>";
        return $product;
}
?>

