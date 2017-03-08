<?php
function calp($pro1)
{
    $sum1[0] = 0; $sum1[1] = 0; $sum1[2] = 0;
    for($i=0;$i<5;$i++)
    {
        if(isset($pro1[$i]) && $pro1[$i] != 0 && $pro1[$i] != "")
        {
            $sum1[0] = ($pro1[$i]['0'] * $pro1[$i]['1']) + $sum1[0];
        }
    }
    $sum1[1] = $sum1[0] * 1.07;
    $sum1[2] = $sum1[1] - $sum1[0];
    return ($sum1);
}
//*************************************************************
function creta($pro2,$pro3,$sum1)
{
    echo "<table border='1'><tr><th>Name</th><th>Unit</th><th>Quantity</th><th>Amount</th></tr>";
    for($i=0;$i<count($pro3);$i++)
    {
        if($pro3[$i]['1'] != null && $pro3[$i]['1'] != 0 )
        {
            echo "<tr><td>";
            echo $pro2[$i][0];
            echo "</td><td>";
            echo $pro2[$i][2];
            echo "</td><td>";
            echo $pro3[$i][1];
            echo "</td><td>";
            echo $pro2[$i][2] * $pro3[$i][1];
            echo "</td></tr>";
        }
    }
    echo "<tr><td colspan='3'>Total</td><td>$sum1[0]</td></tr>";
    echo "<tr><td colspan='3'>Vat(7%)</td><td>$sum1[2]</td></tr>";
    echo "<tr><td colspan='3'>Sub Total</td><td>$sum1[1]</td></tr>";
    echo "</table>";
}
//************************************************************


?>
