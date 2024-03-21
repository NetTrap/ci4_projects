<?php

namespace App\Controllers;

use PHPUnit\Util\PHP\DefaultPhpProcess;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}