<?php

namespace App\Controllers;

class Animales extends BaseController
{
    public function index()
    {
        return view('registroAnimales');
    }
}
