<?php

namespace NehalPatel\FirstPackage;

class Hello
{
    public function greet($name = "Nehal")
    {
        return "Hello world from the Hello Class, {$name}";
    }
}