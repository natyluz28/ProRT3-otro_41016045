<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= lang('Errors.pageNotFound') ?></title>
    <style>
        body {
            height: 100%;
            background-color: #fafafa;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            color: #777;
            font-weight: 300;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .logo {
            height: 200px;
            width: 155px;
            opacity: 0.08;
            position: absolute;
            top: 2rem;
            left: 50%;
            transform: translateX(-50%);
        }

        .wrap {
            max-width: 1024px;
            margin: 5rem auto;
            padding: 2rem;
            background-color: #fff;
            text-align: center;
            border: 1px solid #efefef;
            border-radius: 0.5rem;
            position: relative;
        }

        h1 {
            font-size: 3rem;
            color: #222;
            margin: 0;
            font-weight: lighter;
        }

        p {
            margin-top: 1.5rem;
        }

        pre {
            white-space: pre-wrap;
            margin-top: 1.5rem;
        }

        code {
            background-color: #fafafa;
            border: 1px solid #efefef;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            display: block;
        }

        .footer {
            margin-top: 2rem;
            border-top: 1px solid #efefef;
            padding: 1em 2em 0 2em;
            font-size: 0.85rem;
            color: #999;
        }

        a {
            color: #dd4814;
            text-decoration: none;
        }

        a:active, a:link, a:visited {
            color: #dd4814;
        }
    </style>
</head>
<body>
    <div class="logo">
        <!-- Optional logo image -->
    </div>
    <div class="wrap">
        <h1>404</h1>
        <p>
            <?php if (ENVIRONMENT !== 'production') : ?>
                <?= nl2br(esc($message)) ?>
            <?php else : ?>
                <?= lang('Errors.sorryCannotFind') ?>
            <?php endif; ?>
        </p>
    </div>
</body>
</html>
