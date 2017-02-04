<?php

mb_language("ja");
mb_internal_encoding("UTF-8");

class Validation
{
    public function name_check($val)
    {
        if (empty($val))
        {
            return "kara";
        }
        
        if (mb_strlen($val) >= 64)
        {
            return "nagai";
        }
    }
    
    public function address_check($val)
    {
        if (empty($val))
        {
            return "kara";
        }
        
        if (mb_strlen($val) >= 255)
        {
            return "nagai";
        }
    }
    
    public function overview_check($val)
    {
        if (empty($val))
        {
            return "kara";
        }
        
        if (mb_strlen($val) >= 255)
        {
            return "nagai";
        }
    }
    
    
}