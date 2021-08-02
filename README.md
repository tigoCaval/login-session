# Login Session
Creating session for login in PHP

- MIT license. ***Feel free to use this project***. ***Leave a star :star: !***
- Download package: ```composer require tigo/login-session```

*If you found this project useful, consider making a donation to support the developer.*

[![paypal](https://www.paypalobjects.com/pt_BR/i/btn/btn_donate_SM.gif)](https://www.paypal.com/donate?hosted_button_id=7GRD56DFDZWR4)
|
[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif)](https://www.paypal.com/donate?hosted_button_id=6QVW2XQEATS3U)

## Introduction
Somewhere in your project, you may need to use autoload
 ```php
 include __DIR__ ."/vendor/autoload.php";
 ```
 ### Example
 
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

## License
MIT license. See the archive [License](https://github.com/tigoCaval/login-session/blob/main/LICENSE)
