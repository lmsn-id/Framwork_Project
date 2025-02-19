<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Config\View;


class HomeController
{
    public function index(Request $request)
    {
        $content = View::render('home', [
            'message' => 'Hello, World!'
        ]);

        $response = new Response($content);
        $response->send();
    }
}
