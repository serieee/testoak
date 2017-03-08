<?php
/**
 * Created by PhpStorm.
 * User: Oak
 * Date: 20/2/2560
 * Time: 13:47
 */
?>

<?php
class Product
{
    protected $name,$code,$price,$amount;
    public function __construct($name,$code,$price,$amount)
    {
        $this->name = $name;
        $this->code = $code;
        $this->price = $price;
        $this->amount = $amount;
    }
}
?>