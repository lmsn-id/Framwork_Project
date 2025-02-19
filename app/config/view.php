<?php

namespace App\Config;

class View
{
    public static function render($view, $data = [])
    {
        extract($data);
        ob_start();
        include __DIR__ . '/../views/' . $view . '.php';
        return ob_get_clean();
    }
}
