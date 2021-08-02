<?php
namespace Tigo\LoginSession;
use Tigo\LoginSession\Job\LoginAdapter;
use Tigo\LoginSession\Job\LoginSubject;

/**
 * Login 
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class Login
{

    protected $ls;
    protected $la;

    public function __construct()
    {
        $this->ls = new LoginSubject();
        $this->la = new LoginAdapter($this->ls);
    }
    
    /**
     * Validate login post
     *
     * @return bool
     */
    public function validate()
    {
        return $this->la->validate();
    }
    
    /**
     * Check if authentication is true
     *
     * @return mixed
     */
    public function auth()
    {
        return $this->la->auth();
    }
    
    /**
     * Destroy login session
     *
     */
    public function logout()
    {
        return $this->la->logout();
    }
    
    /**
     * Get data from logged in user
     *
     * @return mixed
     */
    public function user()
    {
        return $this->la->user();
    }
}
