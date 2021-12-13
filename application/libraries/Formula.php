<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formula
{
    //discount formula by showing the result
    //discount and price must be numeric format
    public function Discount($discount_percentage, $price)
    {
        if(is_numeric($discount_percentage) && is_numeric($price)){
            $result = ($discount_percentage / 100) * $price;
        } else{
            echo 'discount percentage and price must be numeric format';
        }
        return $result;
    }
}
