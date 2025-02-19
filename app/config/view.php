<?php

namespace App\Config;

use App\Config\Env;

class View
{
    public static function render($view, $data = [])
    {
        $data['title'] = $data['title'] ?? Env::get('APP_NAME', 'Default PHP Framework');
        $data['icon'] = $data['icon'] ?? Env::get('APP_ICON', '/LMSN.webp');

        $pagesDir = realpath(__DIR__ . "/../views/pages/");
        $viewPath = realpath(__DIR__ . "/../views/pages/{$view}.php");

        if (strpos($view, '..') !== false) {
            return self::renderError("forbidden");
        }

        if (!$viewPath || strpos($viewPath, $pagesDir) !== 0) {
            return self::renderError("forbidden");
        }

        if (!file_exists($viewPath)) {
            return self::renderError("notfound");
        }

        $content = file_get_contents($viewPath);
        if (stripos($content, '<template>') === false) {
            return self::renderError("template");
        }

        extract($data);
        ob_start();
        include $viewPath;
        $content = ob_get_clean();

        ob_start();
        include __DIR__ . '/../views/layout.php';
        return ob_get_clean();
    }

    protected static function renderError($errorType)
    {
        $errorPath = __DIR__ . "/../views/error/{$errorType}.php";
        if (!file_exists($errorPath)) {
            die("Error file not found: {$errorType}.php");
        }

        ob_start();
        include $errorPath;
        return ob_get_clean();
    }
}


?>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let template = document.querySelector("template");
        if (template) {
            document.querySelector("main").innerHTML = template.innerHTML;
        }
    });
</script>