# Login Session
Creating session for login in PHP

- MIT license. ***Feel free to use this project***. ***Leave a star :star: !***
- Download package: ```composer require tigo/login-session```

*If you found this project useful, consider making a donation to support the developer.*

[![paypal](https://www.paypalobjects.com/pt_BR/i/btn/btn_donate_SM.gif)](https://www.paypal.com/donate?hosted_button_id=6QVW2XQEATS3U)
|
[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif)](https://www.paypal.com/donate?hosted_button_id=7GRD56DFDZWR4)

## Introduction
Somewhere in your project, you may need to use autoload
 ```php
 include __DIR__ ."/vendor/autoload.php";
 ```
 ### Example
 - Configuration: 
``` 
 In the src/config/Standard.php directory
 ```
 - In the Standard class there is a method called postLogin(), it is through it that you will implement your logic.
 - By default the postLogin() method has an implemented logic which receives data from an array, to perform post validation
 ```php
 // the function must return a boolean value.
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
 ```
 Method TestMatrix::table()
  ```php
    public static function table() 
    {
        return [
            1=> (object) ["user"=>"admin","password"=>md5("123")],
            2=> (object) ["user"=>"admin2","password"=>md5("1234")],
            3=> (object) ["user"=>"admin3","password"=>md5("12345")]
        ];
    }
  ````
  Example methods
  ```php
 use Tigo\LoginSession\Login; // import class
 $login = new Login();
 $login->validate();
 ```
 <table style="width:100%">
  <tr>
    <th>Method</th>
    <th>Description</th>
  </tr>
  <tr>
    <td>validate()</td>
    <td>This method is responsible for validating the login.</td>
  </tr>
  <tr>
    <td>auth()</td>
    <td>On a private page where the user must be logged in, you can use this method in the page controller or on the page itself.</td>
  </tr>
  <tr>
    <td>logout()</td>
    <td>Use this method to destroy session or logout.</td>
  </tr>
  <tr>
    <td>user()</td>
    <td>Use this method to collect session information.</td>
  </tr> 
</table>

## Problems
If you discover any issues, please contact my email or issue tracker and post the details.

## Contributors
 - [List of contributors](https://github.com/tigoCaval/login-session/graphs/contributors)

## License
MIT license. See the archive [License](https://github.com/tigoCaval/login-session/blob/main/LICENSE)
