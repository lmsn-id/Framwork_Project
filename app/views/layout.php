<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="icon" href="<?= $icon ?>" type="image/webp">
    <link rel="stylesheet" href="/css/tailwindcss.css">

</head>

<body>

    <main>
        <?= $content ?? '' ?>
    </main>

</body>

</html>