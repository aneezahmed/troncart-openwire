<?php

namespace App\Controllers;

class Solutions extends BaseController
{
    public function index(): string
    {
        return view('solutions');
    }
}
