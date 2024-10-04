<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="КЦСОН | Статьи" />
    <link rel="icon" href="../images/logo_white.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>КЦСОН | Статьи</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php /*include "../containers/nav.php";*/ ?>
    <?php include "../containers/navigation.php"; ?>

    <main class="container pt-3 main">
        <nav aria-label=" breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php">Главная</a></li>
                <li class="breadcrumb-item"><a href="/pages/media.php">Медиа</a></li>
                <li class="breadcrumb-item"><a href="/pages/articles.php">Статьи</a></li>
                <li class="breadcrumb-item active" aria-current="page">1</li>
            </ol>
        </nav>
        <div class="about__title pb-4"><strong>Статьи</strong></div>

        <section class="articles">
            <div class="container-small articles__inner">

                <div class="articles__blocks">
                    <a href="" class="articles__blocks-link">
                        <div class="articles__blocks-image"><img src="/images/article.png" alt="" class="blocks__image"></div>
                        <div class="articles__blocks-text">Подведены итоги конкурса статей «Волонтёр - звучит гордо»</div>
                        <div class="articles__blocks-date">29 декабря 2022 </div>
                    </a>
                    <a href="" class="articles__blocks-link">
                        <div class="articles__blocks-image"><img src="/images/article.png" alt="" class="blocks__image"></div>
                        <div class="articles__blocks-text">По зову сердца</div>
                        <div class="articles__blocks-date">28 октября 2022</div>
                    </a>
                    <a href="" class="articles__blocks-link">
                        <div class="articles__blocks-image"><img src="/images/article.png" alt="" class="blocks__image"></div>
                        <div class="articles__blocks-text">"Волонтёр - звучит гордо"</div>
                        <div class="articles__blocks-date">27 октября 2022</div>
                    </a>
                </div>
            </div>
        </section>




    </main>







    <?php include "../containers/footer.php"; ?>

</body>

</html>