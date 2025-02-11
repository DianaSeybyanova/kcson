<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./images/logo_white.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>КЦСОН</title>

    <link rel="stylesheet" href="/dist/css/bvi.min.css" type="text/css">
    <link rel="stylesheet" href="/css_new/style.css">

    <script language="JavaScript" type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>

<body>
    <?php include "./containers/navigation.php"; ?>

    <!-- <section>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/carousel01.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5></h5>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/images/carousel03.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5></h5>
                        <p></p>
                    </div>
                </div>
                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>
    </section> -->

    <main class="main container">
        <div class="row justify-content-center first mt-5">
            <section class="col-12 col-lg-8 col-xl-8">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="7000">
                            <img src="/images/carousel01.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="7000">
                            <img src="/images/carousel03.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Следующий</span>
                    </button>
                </div>
            </section>
            <section class="col-12 col-md-8 col-lg-4 col-xl-4">
                <!-- <h4 class="text-center  mb-4">Нормативно правовые акты</h4> -->
                <div class="p-2 pt-lg-0 pt-xxl-3">
                    <a class="btn docs-tab w-100 main-btn p-2 p-xl-3" href="/pages/docs.php#docs-btn-tab-8" role="button">Законодательство</a>
                    <a class="btn docs-tab w-100 main-btn p-2 p-xl-3" href="/pages/docs.php#docs-btn-tab-9" role="button">Защита персональных данных</a>
                    <a class="btn docs-tab w-100 main-btn p-2 p-xl-3" href="/pages/docs.php#docs-btn-tab-10-1" role="button">Противодействие коррупции</a>
                    <a class="btn docs-tab w-100 main-btn p-2 p-xl-3" href="/pages/docs.php#docs-btn-tab-11" role="button">Антитеррористическая защищённость</a>
                    <a class="btn docs-tab w-100 main-btn p-2 p-xl-3" href="/pages/docs.php#docs-btn-tab-12" role="button">Независимая оценка качества</a>
                </div>
            </section>
        </div>

        <div class="first mt-5">
            <section>
                <div class="first__inner">
                    <h2 class="text-center pb-4">Кому мы помогаем?</h2>

                    <!-- <div class="row row-cols-2 row-cols-md-4 g-5">
                        <div class="col">
                            <div class="card card-hover h-100">
                                <img src="images/family.png" class="card-img-top p-3" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Семьям</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-hover h-100">
                                <img src="images/baby.png" class="card-img-top p-3" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Детям</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-hover h-100">
                                <img src="images/grandparents.png" class="card-img-top p-3" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Пожилым</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-hover h-100">
                                <img src="images/disabled2.png" class="card-img-top p-3" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Инвалидам</h5>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4">
                        <div class="col">
                            <a href="" class="first__blocks-link">
                                <div class="first__blocks-image card-hover"><img src="images/family.png" alt="" class="blocks__image">
                                </div>
                                <div class="first__blocks-text">Семьям</div>
                            </a>
                        </div>

                        <a href="" class="first__blocks-link col">
                            <div class="first__blocks-image card-hover"><img src="images/baby.png" alt="" class="blocks__image"></div>
                            <div class="first__blocks-text">Детям</div>
                        </a>
                        <a href="" class="first__blocks-link col">
                            <div class="first__blocks-image card-hover"><img src="images/grandparents.png" alt="" class="blocks__image"></div>
                            <div class="first__blocks-text">Пожилым</div>
                        </a>
                        <a href="" class="first__blocks-link col">
                            <div class="first__blocks-image card-hover"><img src="images/disabled2.png" alt="" class="blocks__image">
                            </div>
                            <div class="first__blocks-text">Инвалидам</div>
                        </a>
                    </div>
                    <!-- <div class="row row-cols-1 row-cols-md-2 row-cols-xl-2">
                        <a href="" class="col d-flex flex-column align-items-center">
                            <div class="first__blocks-image card-hover"><img src="images/family.png" alt="" class="blocks__image">
                            </div>
                            <div class="first__blocks-text">Семьям</div>
                        </a>
                        <a href="" class="col d-flex flex-column align-items-center">
                            <div class="first__blocks-image card-hover"><img src="images/baby.png" alt="" class="blocks__image"></div>
                            <div class="first__blocks-text">Детям</div>
                        </a>
                        <a href="" class="col d-flex flex-column align-items-center">
                            <div class="first__blocks-image card-hover"><img src="images/grandparents.png" alt="" class="blocks__image"></div>
                            <div class="first__blocks-text">Пожилым</div>
                        </a>
                        <a href="" class="col d-flex flex-column align-items-center">
                            <div class="first__blocks-image card-hover"><img src="images/disabled2.png" alt="" class="blocks__image">
                            </div>
                            <div class="first__blocks-text">Инвалидам</div>
                        </a>
                    </div> -->

                </div>
            </section>
            <!-- <section class="col-4">
                <h4 class="text-center  mb-4">Нормативно правовые акты</h4>
                <div>
                    <a class="btn docs-tab w-100 main-btn" href="#" role="button">Порядок рассмотрений обращений граждан</a>
                    <a class="btn docs-tab w-100 main-btn" href="#" role="button">Политика обработки персональных данных</a>
                    <a class="btn docs-tab w-100 main-btn" href="#" role="button">Противодействие коррупции</a>
                    <a class="btn docs-tab w-100 main-btn" href="#" role="button">Антитеррористическая защищённость</a>
                    <a class="btn docs-tab w-100 main-btn" href="#" role="button">Нормативные документы</a>
                </div>
            </section> -->
        </div>


        <section class="first mt-4">
            <div class="first__inner">
                <h2 class="text-center py-4">Как мы помогаем?</h2>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4">
                    <a href="" class="first__blocks-link col">
                        <div class="first__blocks-image card-hover">
                            <div class="first__blocks-text">Школа приёмных родителей</div>
                        </div>
                    </a>
                    <a href="" class="first__blocks-link col">
                        <div class="first__blocks-image card-hover">
                            <div class="first__blocks-text">Школа родственного ухода</div>
                        </div>
                    </a>
                    <a href="" class="first__blocks-link col">
                        <div class="first__blocks-image card-hover">
                            <div class="first__blocks-text">Центры дневного пребывания</div>
                        </div>
                    </a>
                    <a href="" class="first__blocks-link col">
                        <div class="first__blocks-image card-hover">
                            <div class="first__blocks-text">Центры активного долголетия</div>
                        </div>
                    </a>
                </div>

                <!-- <div class="first__blocks">
                    <a href="" class="first__blocks-link">
                        <div class="first__blocks-image">
                            <div class="first__blocks-text">Школа приёмных родителей</div>
                        </div>
                    </a>
                    <a href="" class="first__blocks-link">
                        <div class="first__blocks-image">
                            <div class="first__blocks-text">Школа родственного ухода</div>
                        </div>
                    </a>
                    <a href="" class="first__blocks-link">
                        <div class="first__blocks-image">
                            <div class="first__blocks-text">Центры дневного пребывания</div>
                        </div>
                    </a>
                    <a href="" class="first__blocks-link">
                        <div class="first__blocks-image">
                            <div class="first__blocks-text">Центры активного долголетия</div>
                        </div>
                    </a>
                </div> -->
            </div>
        </section>

        <section class="articles mt-4">
            <div class="container-small articles__inner">
                <h2><a href="/pages/articles.php">Статьи</a></h2>



                <?php
                $mysqli = @new mysqli('localhost', 'u2606745_default', 'cHWcis8Iy3qIBe84', 'u2606745_test_data06112024');
                $mysqli->query('SET NAMES utf8');
                /*$mysqli = @new mysqli('localhost', 'u2606745_test_us', 'test_semya', 'u2606745_test_semya');*/
                if (mysqli_connect_errno()) {
                    echo "Подключение невозможно: " . mysqli_connect_error();
                }
                $result_set = $mysqli->query('SELECT * FROM `lq_articles` ORDER BY `lq_articles`.`id` DESC LIMIT 3');
                ?>



                <div class="row row-cols-1 row-cols-md-3 g-2 g-lg-5">
                    <?php
                    while ($row = $result_set->fetch_assoc()) {
                        /*print_r($row);
            echo "<br />";*/

                    ?>
                        <div class="col">
                            <a href="/pages/article.php?id=<?php print_r($row["id"]); ?>">
                                <div class="card card-noborder h-100">
                                    <div class="articles__blocks-image2">
                                        <img src="images/article.png" alt="" class=" blocks__image">
                                    </div>
                                    <div class=" text-center p-1">
                                        <small class="text-muted"><?php print_r(DateTime::createFromFormat('Y-m-d H:i:s', $row["date"])->format('d.m.Y')); ?></small>
                                    </div>
                                    <div class="card-body pt-0">
                                        <p class="card-text"><?php print_r(html_entity_decode($row["name"])); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    $result_set->close();
                    $mysqli->close();
                    ?>
                </div>


                <!-- <div class="row row-cols-1 row-cols-md-3 g-2 g-lg-5">
                    <div class="col">
                        <div class="card card-noborder h-100">
                            <div class="articles__blocks-image2">
                                <img src="images/article.png" alt="" class=" blocks__image">
                            </div>
                            <div class=" text-center p-1">
                                <small class="text-muted">29 декабря 2022</small>
                            </div>
                            <div class="card-body pt-0">
                                <p class="card-text">Подведены итоги конкурса статей «Волонтёр - звучит гордо»</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-noborder h-100">
                            <div class="articles__blocks-image2">
                                <img src="images/article.png" alt="" class=" blocks__image">
                            </div>
                            <div class=" text-center p-1">
                                <small class="text-muted">28 октября 2022</small>
                            </div>
                            <div class="card-body pt-0">
                                <p class="card-text">По зову сердца</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-noborder h-100">
                            <div class="articles__blocks-image2">
                                <img src="images/article.png" alt="" class=" blocks__image">
                            </div>
                            <div class=" text-center p-1">
                                <small class="text-muted">27 октября 2022</small>
                            </div>
                            <div class="card-body pt-0">
                                <p class="card-text">«Волонтёр - звучит гордо»</p>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="articles__blocks">
                    <a href="" class="articles__blocks-link">
                        <div class="articles__blocks-image"><img src="images/article.png" alt="" class="blocks__image"></div>
                        <div class="articles__blocks-text">Подведены итоги конкурса статей «Волонтёр - звучит гордо»</div>
                        <div class="articles__blocks-date">29 декабря 2022 </div>
                    </a>
                    <a href="" class="articles__blocks-link">
                        <div class="articles__blocks-image"><img src="images/article.png" alt="" class="blocks__image"></div>
                        <div class="articles__blocks-text">По зову сердца</div>
                        <div class="articles__blocks-date">28 октября 2022</div>
                    </a>
                    <a href="" class="articles__blocks-link">
                        <div class="articles__blocks-image"><img src="images/article.png" alt="" class="blocks__image"></div>
                        <div class="articles__blocks-text">"Волонтёр - звучит гордо"</div>
                        <div class="articles__blocks-date">27 октября 2022</div>
                    </a>
                </div> -->
            </div>
        </section>

        <section class="articles my-4">
            <div class="container-small articles__inner">
                <h2><a href="/pages/news.php">Новости</a></h2>

                <?php
                $mysqli = @new mysqli('localhost', 'u2606745_default', 'cHWcis8Iy3qIBe84', 'u2606745_test_data06112024');
                $mysqli->query('SET NAMES utf8');
                /*$mysqli = @new mysqli('localhost', 'u2606745_test_us', 'test_semya', 'u2606745_test_semya');*/
                if (mysqli_connect_errno()) {
                    /*echo "Подключение невозможно: " . mysqli_connect_error();*/
                }
                $result_set = $mysqli->query('SELECT * FROM `lq_news` ORDER BY `lq_news`.`id` DESC LIMIT 3');
                ?>



                <div class="row row-cols-1 row-cols-md-3 g-2 g-lg-5">
                    <?php
                    while ($row = $result_set->fetch_assoc()) {
                        /*print_r($row);
            echo "<br />";*/

                    ?>
                        <div class="col">
                            <a href="/pages/news_view.php?id=<?php print_r($row["id"]); ?>">
                                <div class="card card-noborder h-100">
                                    <div class="articles__blocks-image2">
                                        <img src="/images/news.png" alt="" class=" blocks__image">
                                    </div>
                                    <div class=" text-center p-1">
                                        <small class="text-muted"><?php print_r(DateTime::createFromFormat('Y-m-d H:i:s', $row["date"])->format('d.m.Y')); ?></small>
                                    </div>
                                    <div class="card-body pt-0">
                                        <p class="card-text"><?php print_r(html_entity_decode($row["name"])); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    $result_set->close();
                    $mysqli->close();
                    ?>
                </div>

                <!-- <div class="row row-cols-1 row-cols-md-3 g-2 g-lg-5">
                <div class="col">
                    <div class="card card-noborder h-100">
                        <div class="articles__blocks-image2">
                            <img src="images/news.png" alt="" class=" blocks__image">
                        </div>
                        <div class="card-body">
                            <p class="card-text">Учимся, играючи</p>
                        </div>
                        <div class=" text-center">
                            <p><small class="text-muted">12 апреля 2024</small></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-noborder h-100">
                        <div class="articles__blocks-image2">
                            <img src="images/news.png" alt="" class=" blocks__image">
                        </div>
                        <div class="card-body">
                            <p class="card-text">Обман и игра воображения</p>
                        </div>
                        <div class=" text-center">
                            <p><small class="text-muted">12 апреля 2024</small></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-noborder h-100">
                        <div class="articles__blocks-image2">
                            <img src="images/news.png" alt="" class=" blocks__image">
                        </div>
                        <div class="card-body">
                            <p class="card-text">Столкнулись с жестоким обращением?</p>
                        </div>
                        <div class=" text-center">
                            <p><small class="text-muted">09 апреля 2024</small></p>
                        </div>
                    </div>
                </div>
            </div> -->

                <!-- <div class="articles__blocks">
                    <a href="" class="articles__blocks-link">
                        <div class="articles__blocks-image"><img src="images/news.png" alt="" class="blocks__image"></div>
                        <div class="articles__blocks-text">Учимся, играючи</div>
                        <div class="articles__blocks-date">12 апреля 2024</div>
                    </a>
                    <a href="" class="articles__blocks-link">
                        <div class="articles__blocks-image"><img src="images/news.png" alt="" class="blocks__image"></div>
                        <div class="articles__blocks-text">Обман и игра воображения</div>
                        <div class="articles__blocks-date">12 апреля 2024</div>
                    </a>
                    <a href="" class="articles__blocks-link">
                        <div class="articles__blocks-image"><img src="images/news.png" alt="" class="blocks__image"></div>
                        <div class="articles__blocks-text">Столкнулись с жестоким обращением?</div>
                        <div class="articles__blocks-date">09 апреля 2024</div>
                    </a>
                </div> -->
            </div>
        </section>



        <!-- <section class="banner">
            <div class="container-small banner__inner">
                <div class="banner__blocks">
                    <a href="" class="banner__blocks-link">
                        <div class="banner__blocks-image"><img src="" alt="" class="blocks__image">Телефоны "горячих линий":<br>Министерство труда, занятости и миграционной политики Самарской области<br>
                            <b>8(846)334-58-92</b>Государственная инспекция труда в Самарской области<br><b>8(846)263-52-17</b>
                        </div>
                    </a>
                    <a href="" class="banner__blocks-link">
                        <div class="banner__blocks-image"><img src="" alt="" class="blocks__image">Детский телефон доверия<br>
                            <b>8(800)2000-122</b>или на номер 124<br>Звонок бесплатный и анонимный
                        </div>
                    </a>
                </div>
            </div>
        </section> -->


        <!-- <section class="bottom">
            <div class="container-small bottom__inner">
                <div class="bottom__rows">
                    <a href="http://minsocdem.samregion.ru/" class="bottom__link"><img src="images/main_bottom/msdr-bnr.png" alt="" class="bottom__image"></a>
                    <a href="http://samregion.ru" class="bottom__link"><img src="images/main_bottom/regportgosuslug.png" alt="" class="bottom__image"></a>
                    <a href="http://gosuslugi.ru" class="bottom__link"><img src="images/main_bottom/gosuslugi.png" alt="" class="bottom__image"></a>
                    <a href="http://egov.samregion.ru" class="bottom__link"><img src="images/main_bottom/cifrregion.png" alt="" class="bottom__image"></a>
                </div>
                <div class="bottom__rows">
                    <a href="https://mintrud.gov.ru/" class="bottom__link"><img src="images/main_bottom/mintrud.png" alt="" class="bottom__image"></a>
                    <a href="http://government.ru/" class="bottom__link"><img src="images/main_bottom/govru.png" alt="" class="bottom__image"></a>
                    <a href="http://usinovi-samregion.ru/" class="bottom__link"><img src="images/main_bottom/usinovi.png" alt="" class="bottom__image"></a>
                    <a href="https://reabilit.samregion.ru/" class="bottom__link"><img src="images/main_bottom/reabilit.png" alt="" class="bottom__image"></a>
                </div>
            </div>
        </section> -->
    </main>

    <?php include "./containers/footer.php"; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->

</body>

</html>