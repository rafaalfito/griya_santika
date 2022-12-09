<?php
defined('BASEPATH') or exit('No direct script access allowed');

class test_unit extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
    }

    private function calculateDiscount($discountRate, $originalPrice)
    {
        $discount = $originalPrice * $discountRate / 100;
        return $originalPrice - $discount;
    }
    public function testDiscount()
    {
        $test = $this->calculateDiscount(50, 50000);
        $expected_result = 25000;
        $test_name = 'test perumahan';
        echo $this->unit->run($test, $expected_result, $test_name);
    }
}
