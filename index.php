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
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include "./containers/navigation.php"; ?>

    <main class="main container">
        <section class="first mt-3">
            <div class="first__inner">
                <h1 class="text-center">Кому мы помогаем?</h1>
                <div class="first__blocks">
                    <a href="" class="first__blocks-link ">
                        <div class="first__blocks-image card-hover"><img src="images/family.png" alt="" class="blocks__image">
                        </div>
                        <div class="first__blocks-text">Семьям</div>
                    </a>
                    <a href="" class="first__blocks-link">
                        <div class="first__blocks-image card-hover"><img src="images/baby.png" alt="" class="blocks__image"></div>
                        <div class="first__blocks-text">Детям</div>
                    </a>
                    <a href="" class="first__blocks-link">
                        <div class="first__blocks-image card-hover"><img src="images/grandparents.png" alt="" class="blocks__image"></div>
                        <div class="first__blocks-text">Пожилым</div>
                    </a>
                    <a href="" class="first__blocks-link">
                        <div class="first__blocks-image card-hover"><img src="images/disabled2.png" alt="" class="blocks__image">
                        </div>
                        <div class="first__blocks-text">Инвалидам</div>
                    </a>
                </div>


            </div>
        </section>

        <section class="first mt-3">
            <div class="container-small first__inner">
                <h1 class="text-center">Как мы помогаем?</h1>
                <div class="first__blocks">
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
                </div>
            </div>
        </section>

        <section class="articles mt-4">
            <div class="container-small articles__inner">
                <h1><a href="">Статьи</a></h1>
                <div class="articles__blocks">
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
                </div>
            </div>
        </section>

        <section class="articles my-4">
            <div class="container-small articles__inner">
                <h1><a href="">Новости</a></h1>
                <div class="articles__blocks">
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
                </div>
            </div>
        </section>

        <section>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/carousel4.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/carousel5.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p></p>
                        </div>
                    </div>
                    <!-- <div class="carousel-item">
                        <img src="/images/carousel3.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Метка третьего слайда</h5>
                            <p>Некоторый репрезентативный заполнитель для третьего слайда.</p>
                        </div>
                    </div> -->
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