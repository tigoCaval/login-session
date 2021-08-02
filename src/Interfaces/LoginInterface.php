<?php
namespace Tigo\LoginSession\Interfaces;
 
interface LoginInterface
{
    public function validate();
    public function auth();
    public function logout();
    public function user();
}