<?php
namespace Tigo\LoginSession\Interfaces;

interface LoginSubjectInterface
{
    public function validate();
    public function auth();
    public function logout();
    public function user();
}