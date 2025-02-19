<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Config\View;
use App\Config\Env;

class HomeController
{
    public function index(Request $request)
    {
        $content = View::render('home', [
            'icon' => Env::get('APP_ICON', ),
            'title' => Env::get('APP_NAME', 'Default PHP Framework'),
            'message' => 'Hello, World!'
        ]);

        $response = new Response($content);
        $response->send();
    }
}
