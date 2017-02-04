<?php

require_once "model/shop.php";

// $shop_model = new shop_model();
class shop_controller
{
    // $shop_model = new shop_model();
    private $shop_info;
    // public function __construct()
    // {
    //     // 全件のお店情報を取得
    //     $this->shop_info = $shop_model->select_all_shop_info();
    // }
    
    public function shop_info()
    {
        $shop_model = new shop_model();

        $this->shop_info = $shop_model->select_shop_info();

        return $this->shop_info;
    }
    
}