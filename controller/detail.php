<?php

require_once (dirname(__FILE__)."../../model/shop.php");

class detail_controller
{

    private $shop_info;

    public function shop_detail($id)
    {
        $shop_model = new shop_model();
        
        $this->shop_info = $shop_model->select_all_shop_info($id);
        
        return $this->shop_info;
    }
    
}