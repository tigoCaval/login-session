<?php
namespace Tigo\LoginSession\Config;

/**
 * This is a test class to simulate login.
 */
class TestMatrix
{
        
    /**
     * table
     *
     * @return array
     */
    public static function table() 
    {
        return [
            1=> (object) ["user"=>"admin","password"=>md5("123")],
            2=> (object) ["user"=>"admin2","password"=>md5("1234")],
            3=> (object) ["user"=>"admin3","password"=>md5("12345")]
        ];
    }


}