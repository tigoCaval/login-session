<?php
namespace Tigo\LoginSession\Job;

use Tigo\LoginSession\Config\Warning;
use Tigo\LoginSession\Config\Standard;
use Tigo\LoginSession\Interfaces\LoginSubjectInterface;

/**
 * Contains the main features, in obtaining login per session.
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class LoginSubject implements LoginSubjectInterface
{

   /**
    * standard
    *
    * @var Standard
    */
   protected $standard;

   /**
    * warning
    *
    * @var Warning
    */
   protected $warning;

   public function __construct()
   {
      $this->standard = new Standard();
      $this->warning = new Warning();
      if (!isset($_SESSION))
         session_start();
   }

   /**
    * Validate login post
    *
    * @return bool
    */
   public function validate()
   {
      if ($this->standard->postLogin() == true)
         return true;
      else
         return false;
   }

   /**
    * Check if authentication is true
    *
    * @return mixed
    */
   public function auth()
   {
      return isset($_SESSION[$this->standard::SESSION]) ? true  : $this->warning->abort(401);
   }

   /**
    * Destroy login session
    *
    */
    public function logout()
    {
       unset($_SESSION[$this->standard::SESSION]);
    }

   /**
    * Get data from logged in user
    *
    * @return mixed
    */
   public function user()
   {
      return isset($_SESSION[$this->standard::SESSION]) ? $_SESSION[$this->standard::SESSION] : false;
   }
}
