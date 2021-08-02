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
 ```
 <table style="width:100%">
  <tr>
    <th>Method</th>
    <th>Description</th>
  </tr>
  <tr>
    <td>validate( )</td>
    <td>This method is responsible for validating the login</td>
  </tr>
  <tr>
    <td>auth( )</td>
    <td>On a private page where the user must be logged in, you can use this method in the page controller or on the page itself.</td>
  </tr>
  <tr>
    <td>find($id)</td>
    <td>Find entry by id</td>
  </tr>
  <tr>
    <td>update($id, array $data)</td>
    <td>Update or edit existing entries</td>
  </tr> 
</table>
