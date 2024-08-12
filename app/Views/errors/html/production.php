<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc(lang('Errors.whoops')) ?></title>
    <style>
        <?= preg_replace('#[\r\n\t ]+#', ' ', file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'debug.css')) ?>
    </style>
</head>
<body>
    <div class="container text-center">
        <h1 class="headline"><?= esc(lang('Errors.whoops')) ?></h1>
        <p class="lead"><?= esc(lang('Errors.weHitASnag')) ?></p>
    </div>
</body>
</html>
