<?php
namespace Tigo\LoginSession\Job;

use Tigo\LoginSession\Interfaces\LoginInterface;
use Tigo\LoginSession\Interfaces\LoginSubjectInterface;

/**
 * LoginAdapter
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class LoginAdapter implements LoginInterface
{
   
   /**
    * login
    *
    * @var LoginSubjectInterface
    */
   protected $login;

   public function __construct(LoginSubjectInterface $login)
   {
      $this->login = $login;
   }
   
   /**
    * Validate login post
    *
    * @return bool
    */
   public function validate()
   {
      return $this->login->validate();
   }
   
   /**
    * Check if authentication is true
    *
    * @return mixed
    */
   public function auth()
   {
      return $this->login->auth();
   }
   
   /**
    * Destroy login session
    *
    */
   public function logout()
   {
      return $this->login->logout();
   }
   
   /**
    * Get data from logged in user
    *
    * @return mixed
    */
   public function user()
   {
      return $this->login->user();
   }
}
