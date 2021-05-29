<?php
namespace App;

/**
 * trait fot good luck
 */
trait GoodLuck
{
    public function goodLuck($name)
    {
        if (is_noll($name)) 
        {
            echo "Good Luck>";
        } 
        else 
        {
            echo "Good Luck".$name, "<br>";
        }
    }
}