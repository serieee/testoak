<?php
/**
 * Created by PhpStorm.
 * User: ibase
 * Date: 6/2/2560
 * Time: 15:37
 */

include ("header.php");
include ("get_product.php");
include ("check_login.php");
include ("helper_func.inc.php");

$unit = $_POST['amount'];
$pro = $_SESSION['product'];
for($i=0;$i<count($unit);$i++)
{
    if(isset($unit[$i]) && $unit[$i] != null)
    {
        $duct[$i] = array("0"=>$pro[$i][2],"1"=>$unit[$i]);
    }
}
for ($i=0;$i<count($pro);$i++)
{
    $duct2[$i] = array("0"=>$pro[$i][1],"1"=>$unit[$i]);
}
$sell = calp($duct);
?>
<center><h2>ใบเสร็จ</h2>
<?php
creta($pro,$duct2,$sell);
?>
    <form action="checkout_cart.php">
        <input class="btn-orange" type="submit" name="back" id="back" value="Back"/>

    </form>
</center></br>
<?php
include ("footer.php");
?>