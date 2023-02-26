<?php

namespace NehalPatel\FirstPackage\Http\Controllers;

use NehalPatel\FirstPackage\Facades\FirstPackage;

class HelloController
{
    public function index()
    {
//        return FirstPackage::greet();
        return view('first-package::home', [
            'message' => FirstPackage::greet()
        ]);
    }
}