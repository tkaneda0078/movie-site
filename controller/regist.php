<?php
session_start();
require_once "validation.php";
require_once "../../model/shop.php";

class regist_controller
{
    public function regist_post($shop_info, $shop_image)
    {
        $val = new validation();
        
        $error_message = array();
        
        // バリデーションチェック
        $error_message["name"]     = $val->name_check($shop_info["name"]);
        $error_message["address"]  = $val->address_check($shop_info["address"]);
        $error_message["overview"] = $val->overview_check($shop_info["overview"]);

        move_uploaded_file($shop_image["image1"]['tmp_name'], '../../img/'.$shop_image["image1"]['name']);
        move_uploaded_file($shop_image["image2"]['tmp_name'], '../../img/'.$shop_image["image2"]['name']);
        move_uploaded_file($shop_image["image3"]['tmp_name'], '../../img/'.$shop_image["image3"]['name']);

        foreach ($error_message as $value)
        {
            if ( ! is_null($value))
            {
                return $error_message;
            }
        }

        // 画像の有無を確認
        foreach ($shop_image as $key => $value)
        {
            if ($value["name"] != "")
            {
                $_SESSION[$key] = $value["name"];
            }
        }

        $_SESSION["name"]      = $shop_info["name"];
        $_SESSION["address"]   = $shop_info["address"];
        $_SESSION["overview"]  = $shop_info["overview"];
        
        header("Location: confirm.php");
    }
    
    // 入力データをDBに登録
    public function complete($shop_info)
    {
        $db_insert = new shop_model();

        $name     = $shop_info["name"];
        $address  = $shop_info["address"];
        $overview = $shop_info["overview"];
        $image1   = $shop_info["image1"];
        if (isset($shop_info["image2"]))
        {
            $image2   = $shop_info["image2"];
        }
        else
        {
            $image2 = null;
        }
        
        if (isset($shop_info["image3"]))
        {
            $image3   = $shop_info["image3"];
        }
        else
        {
            $image3 = null;
        }
        
        $db_insert->insert_shop_info($name, $address, $overview);
        $db_insert->insert_shop_img($image1, $image2, $image3);
        
        session_destroy();
        header("Location: ../../index.php");
        
    }
    
    
}
?>