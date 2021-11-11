<?php

declare ( strict_types = 1 );

namespace App\Controller;

use App\Abstract\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return $this->render('home.index');
    }
}
