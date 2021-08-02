<?php
namespace Tigo\LoginSession\Config;

/**
 * Warning
 */
class Warning
{

    protected $message = [
       401 => "Not authorized"
    ];

    public function abort($data)
    {
        exit($this->message[$data]);
    }

}