<?php
namespace Tigo\LoginSession\Config;
use Tigo\LoginSession\Config\TestMatrix;

/**
 * Standard
 */
class Standard
{

    const USER = "name"; //form input name
    const PW = "password"; //form input name
    const SESSION = "user"; //input session
   
    /**
     * Get post login, the function must return a boolean value.
     *
     * @return bool
     */
    public function postLogin() 
    {
        $user = isset($_POST[self::USER]) ? $_POST[self::USER] : false;
        $pw =   isset($_POST[self::PW]) ? md5($_POST[self::PW]) : false; 
        $table = TestMatrix::table();
        foreach ($table as $key => $item) {

             if($user == $item->user && $pw == $item->password){
                $_SESSION[self::SESSION] = $_POST[self::USER];
                return true;
             }
        }
        return false;
    }

}