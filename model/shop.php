<?php

class shop_model 
{
    private $db;
    
    public function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=favorite_shop;charset=utf8;','root','');
        } 
        catch (PDOException $e) 
        {
            exit('データベース接続失敗。'.$e->getMessage());
        }
    }
    
    // 詳細画面用
    public function select_all_shop_info($id)
    {
        $stt = $this->db->prepare
        ('
          SELECT info.shop_info_id, info.shop_name, info.shop_address, info.shop_overview, info.registrated_time, img.image1, img.image2, img.image3
          FROM shop_info as info
          INNER JOIN shop_image as img
          ON info.id = img.id
          WHERE info.id = :id
        ');
        
        $stt->bindParam(":id", $id);
        $stt->execute();
        
        return $stt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // TOP画面用
    public function select_shop_info()
    {
        $stt = $this->db->prepare
        ('
           SELECT info.id, info.shop_info_id, info.shop_name, info.shop_address, info.registrated_time, img.image1
           FROM shop_info as info
           INNER JOIN shop_image as img
           ON info.id = img.id
           ORDER BY info.registrated_time DESC;
        ');
        
        $stt->execute();
        
        return $stt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function insert_shop_info($name, $address, $overview)
    {
        try
        {
            //トランザクション開始
            $this->db->beginTransaction();
            
            $stt = $this->db->prepare
            ('
                INSERT
                INTO shop_info(shop_name, shop_address, shop_overview, registrated_time)
                VALUES(:shop_name, :shop_address, :shop_overview, now())
            ');
            
            $stt->bindParam(":shop_name", $name);
            $stt->bindParam(":shop_address", $address);
            $stt->bindParam(":shop_overview", $overview);
            
            $stt->execute();
            //コミット
            $this->db->commit();
        }
        catch (PDOException $e)
        {
            //ロールバック
            $this->db->rollBack();
            echo "mistake" . $e->getMessage();
        }
    }
    
    public function insert_shop_img($image1, $image2, $image3)
    {
        try
        {
            //トランザクション開始
            $this->db->beginTransaction();
            
            $stt = $this->db->prepare
            ('
                INSERT
                INTO shop_image(image1, image2, image3)
                VALUES(:image1, :image2, :image3)
            ');
            
            $stt->bindParam(":image1", $image1);
            $stt->bindParam(":image2", $image2);
            $stt->bindParam(":image3", $image3);
            
            $stt->execute();
            //コミット
            $this->db->commit();
        }
        catch (PDOException $e)
        {
            //ロールバック
            $this->db->rollBack();
            echo "mistake" . $e->getMessage();
        }
    }
    
    
}