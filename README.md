# Login Session
Creating session for login in PHP

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
