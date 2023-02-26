<?php

namespace NehalPatel\FirstPackage\View;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public function render()
    {
        return view('first-package::layouts.app');
    }

}