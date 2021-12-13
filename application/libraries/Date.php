<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Date
{
    //convert 'any type of date' to 'date format that we want' 
    //e.g 'YYYY-mm-dd' to 'dd-mm-YYYY' just input the date and the format.
    public function ConvertDate($Date, $Format)
    {
        return date($Format,strtotime($Date));
    }
}
