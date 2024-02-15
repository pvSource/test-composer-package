<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<main class="main">
    <h1>Библиотека для расширения возможностей \DateTime</h1>
    <section class="main__links links">
        <h2>Ссылки</h2>
        <p class="links__item">
            Github: <a href="https://github.com/pvSource/test-composer-package/">https://github.com/pvSource/test-composer-package/</a>
        </p>
        <p class="links__item">
            Packagist: <a href="#">#</a>
        </p>
    </section>
    <section class="main__example example">
        <h2>Примеры работы:</h2>
        <?php include __DIR__ . '/example.php'?>
    </section>
</main>
</body>
</html>

<style>
    .main {
        border: 1px black solid;
        padding: 10px;
    }
    .main__links {
        border: 1px blue solid;
        background-color: #AAF;
        margin-bottom: 10px;
    }

    .main__links a {
        text-decoration: none !important;
        color: black;
        font-weight: bold;
    }

    .main__example {
        border: 1px #7a551d solid;
        background-color: #f1de9e;
    }
</style>