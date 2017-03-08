<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout Cart</title>
    <style>
        a{text-decoration: none;}
        .btn-orange{
            border-radius: 6px;
            height: 30px;
            width: 150px;
            margin-top: 10px;
            background-color: coral;
            cursor: pointer;
        }
        .btn-orange:hover
        {
            background-color: yellowgreen;
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

        table{
            border: 0px;
            border-collapse: collapse;
        }

        th, td {
            border-bottom: 2px solid #ddd;
        }

        .wrapper {
            display: block;
            min-height: 100%; /* real browsers */
            height: auto !important; /* real browsers */
            height: 100%; /* IE6 bug */

        }
    </style>
</head>
<body>
<?php
include ("header.php");
include ("get_product.php");
include ("check_login.php");
?>
<div align="center">
    <h2>เลือกซื้อสินค้า</h2>
</div>
<div align="center">
    <form name="buy" action="calculate_cart.php" method="post">
        <?php
        $_SESSION['product'] = get_product($conn);
        ?></p>
    <input type="submit" name="buy" value="ซื้อสินค้า">
    </form>
</div>
<?php
include ("footer.php");
?>
</body>
</html>