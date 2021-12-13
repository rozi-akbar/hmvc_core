<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('Date');
        $this->load->library('Hash');
        $this->load->library('Formula');
    }

    public function index()
    {
        echo $this->date->ConvertDate('2021-10-02 09:55:23', 'H:i:s d-m-Y');
        echo '<br>';
        echo $this->date->ConvertDate('2020-11-29 09:55:23', 'd-m-Y');
        echo '<br>';
        echo $this->hash->sha256_md5('Test');
        echo '<br>';
        echo $this->hash->safeEncrypt('Test banyak text dengan hal yang diinginkan', 'rahasia_donk');
        echo '<br>';
        echo $this->hash->safeDecrypt('zVV0Jv+EN259zaYBrVHXYXUEPGCbLXIZh1Bw4C7hWraWdpQv4qZjhL8856EbgXhT', 'rahasia_donk');
        echo '<br>';
        echo $this->formula->Discount(90, 10000);
    }
}
