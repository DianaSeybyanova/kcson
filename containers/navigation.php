<header class="header mt-4">
    <div class=" header__inner container">
        <div class="header__top row">
            <!-- <ul class="header__social">
                <li class="header__social-item">
                    <a href="#" class="header__social-link">
                        <img src="../images/vk-svgrepo-com.svg" alt="" class="header__social-img">
                    </a>
                </li>
                <li class="header__social-item">
                    <a href="#" class="header__social-link">
                        <img src="../images/telegram-svgrepo-com.svg" alt="" class="header__social-img">
                    </a>
                </li>
            </ul> -->
            <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPhones" aria-controls="navbarPhones" aria-expanded="false" aria-label="Переключатель навигации">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarPhones">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="#">Главная</a>
                            <a class="nav-link" href="#">Рекомендуемые</a>
                            <a class="nav-link" href="#">Цена</a>
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Отключенная</a>
                        </div>
                    </div>
                </div>
            </nav> -->
            <ul class="col-7 d-flex row row-cols-1 row-cols-lg-3 ">
                <li class="text-center col d-grid align-content-around text-block">
                    <a href="tel:+78002000122" class="noline">
                        <div class="lh-1 nav_phones_text_sm">Детский телефон доверия</div>
                        <div><b>8 800 200 01 22</b></div>
                    </a>

                </li>
                <li class="text-center col d-grid align-content-around text-block">
                    <a href="tel:+78001002115" class="noline">
                        <div class="lh-1 nav_phones_text_sm">Экстренная психологическая помощь</div>
                        <div><b>8 800 100 21 15</b></div>
                    </a>

                </li>
                <li class="text-center col d-grid align-content-around text-block">
                    <a href="tel:+78469582258" class="noline">
                        <div class="lh-1 nav_phones_text_sm">Экстренная психологическая помощь для жертв насилия</div>
                        <div><b>8 846 958 22 58</b></div>
                    </a>

                </li>
            </ul>

            <ul class="col-5 d-flex row row-cols-1 row-cols-lg-3 g-2">
                <li class="text-center col d-grid align-content-around ">
                    <!-- <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search">
                        <button class="btn btn-outline-success colorGreen" type="submit">Найти</button>
                    </form> -->
                    <!-- <a href="" class="header__functions-link">
                        <img src="images/search_8094123.png" alt="" class="header__functions-img">Найти
                    </a> -->
                    <!-- <a href="/pages/questions.php" class="header__functions-link center">
                        Найти
                    </a> -->
                    <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                        Найти
                    </a>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Поиск по сайту
                            </h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
                        </div>
                        <div class="offcanvas-body">
                            <form class="d-flex" target="_blank" method="POST">
                                <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск">
                                <input type="submit" value="Поиск" id="submitBtn" />

                                <!-- <button class="btn btn-outline-success" type="submit">Поиск</button> -->
                                <script>
                                    document.getElementById("submitBtn").addEventListener("click", myFunction);

                                    function myFunction() {
                                        window.location.href = "/pages/search.php";
                                    }
                                </script>
                            </form>




                        </div>
                    </div>
                </li>
                <li class="text-center col d-grid align-content-around ">
                    <a href="/pages/questions.php" class="">
                        Задать вопрос
                        <!-- <img src="../images/1904660-email-envelope-letter-mail-message-post-send_122510 (1).png" alt="" class="header__functions-img"> Задать вопрос -->
                    </a>
                </li>
                <li class="text-center col d-grid align-content-around ">
                    <a href="#" class="bvi-open " title="Версия сайта для слабовидящих">
                        <!-- <img src="../images/eye_visible_hide_hidden_show_icon_145988.png" alt="" class="header__functions-img"> -->
                        Версия для слабовидящих</a>

                </li>
                <!-- <li class="header__functions-item">
                    <a href="" class="header__functions-link">
                        <img src="../images/eye_visible_hide_hidden_show_icon_145988.png" alt="" class="header__functions-img">Для слабовидящих
                    </a>
                </li> -->
                <!-- <li class="header__functions-item">
                    <a href="#" class="bvi-open" title="Версия сайта для слабовидящих">Версия сайта для слабовидящих</a> -->
                <!-- <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                        Ссылка
                    </a>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Настройка отображения сайта</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
                        </div>
                        <div class="offcanvas-body">
                            <h4 class="text-center">Тема оформления сайта</h4>

                            <h4 class="text-center">Размер шрифта</h4>
                            <div>
                                <input type="button" value="100%" onclick="fontSize100()">
                                <input type="button" value="150%" onclick="fontSize150()">
                                <input type="button" value="200%" onclick="fontSize200()">
                                
                                <button>150%</button>
                                <button>200%</button>
                            </div>
                            <h4 class="text-center">Межбуквенный интервал</h4>
                            <h4 class="text-center">Интервал между строчками</h4>
                            <h4 class="text-center">Шрифт</h4>
                            <h4 class="text-center">Изображения</h4>


                        </div>
                    </div> -->
                <!-- <a href="#" class="bvi-open" title="Версия сайта для слабовидящих">Версия сайта для слабовидящих</a> -->

                <!-- <a id="specialButton" href="#"><img src="https://lidrekon.ru/images/special.png" id='glazd' alt="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" title="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" /></a>
                    <style>
                        @media screen and (max-width: 980px) {
                            #glazd {
                                position: absolute;
                                top: 10px;
                                right: 100px;
                                z-index: 99999;
                                width: 50px;
                            }
                        }

                        @media screen and (min-width: 980px) {
                            #glazd {
                                position: absolute;
                                top: 20px;
                                left: 50px;
                                z-index: 99999;
                                width: 50px;
                            }
                        }
                    </style> -->
                <!-- </li> -->
            </ul>

        </div>
    </div>
</header>

<!-- header__nav mx-5 my-3 -->

<nav id="mainNav" class=" navbar navbar-expand-xl navbar-light navbar-green sticky-top container-fluid header__nav px-5 py-3">
    <div class="container">

        <div class="header__logo ">
            <a href="/index.php" class="logo__link">
                <!-- <span class="logo__name">Комплексный<br>центр<br>социального<br>обслуживания<br>населения</span> -->
                <img src="../images/logo_main.png" alt="" class="logo__img">
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerMain" aria-controls="navbarTogglerMain" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end " id="navbarTogglerMain">
            <ul class="navbar-nav navbar-nav-scroll header__nav-list">
                <a href="/pages/about.php" class="nav__list-link">
                    <li class="nav__list-item">О нас</li>
                </a>
                <a href="/pages/centers.php" class="nav__list-link">
                    <li class="nav__list-item">Подразделения
                        <div class="dropdown d-inline pb-3">
                            <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuCenters" data-bs-toggle="dropdown" aria-expanded="false">

                            </a>

                            <ul class="dropdown-menu dropdown-menu-end nav__list-link" aria-labelledby="dropdownMenuCenters">
                                <li><a class="dropdown-item nav__list-item-dropdown" href="../pages/center_zhd.php">Железнодорожное</a></li>
                                <li><a class="dropdown-item nav__list-item-dropdown" href="../pages/center_kirov.php">Кировское</a></li>
                                <li><a class="dropdown-item nav__list-item-dropdown" href="../pages/center_krasn.php">Красноглинское</a></li>
                                <li><a class="dropdown-item nav__list-item-dropdown" href="../pages/center_kuib.php">Куйбышевское</a></li>
                                <li><a class="dropdown-item nav__list-item-dropdown" href="../pages/center_oct.php">Октябрьское</a></li>
                                <li><a class="dropdown-item nav__list-item-dropdown" href="../pages/center_prom.php">Промышленное</a></li>
                                <li><a class="dropdown-item nav__list-item-dropdown" href="../pages/center_samlen.php">Самарское-Ленинское</a></li>
                                <li><a class="dropdown-item nav__list-item-dropdown" href="../pages/center_sov.php">Советское</a></li>
                            </ul>
                        </div>
                    </li>
                </a>
                <!-- <a href="/pages/uslugi.php" class="nav__list-link">
                    <li class="nav__list-item">Услуги</li>
                </a> -->
                <a href="/pages/services.php" class="nav__list-link">
                    <li class="nav__list-item">Сервисы</li>
                </a>
                <a href="/pages/docs.php" class="nav__list-link">
                    <li class="nav__list-item">Документы</li>
                </a>
                <!-- <a href="/pages/media.php" class="nav__list-link">
                    <li class="nav__list-item">Медиа</li>
                </a> -->
                <a href="/pages/media.php" class="nav__list-link">
                    <li class="nav__list-item ">Медиа
                        <div class="dropdown d-inline pb-3">
                            <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">

                            </a>

                            <ul class="dropdown-menu dropdown-menu-end nav__list-link" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item nav__list-item-dropdown" href="/pages/articles.php">Статьи</a></li>
                                <li><a class="dropdown-item nav__list-item-dropdown" href="/pages/news.php">Новости</a></li>
                                <li><a class="dropdown-item nav__list-item-dropdown" href="/pages/achievements.php">Наши достижения</a></li>
                                <li><a class="dropdown-item nav__list-item-dropdown" href="/pages/materials.php">Полезная информация</a></li>

                            </ul>
                        </div>
                    </li>
                </a>

                <!-- <div class="dropdown nav__list-item">
                    <a class="dropdown-toggle dropdown-toggle-split nav__list-link " href="/pages/media.php" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Медиа
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Действие</a></li>
                        <li><a class="dropdown-item" href="#">Другое действие</a></li>
                        <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
                    </ul>
                </div> -->

                <!-- <a href="/pages/questions.php" class="nav__list-link">
                    <li class="nav__list-item">Вопросы</li>
                </a> -->
            </ul>
        </div>


    </div>
</nav>
<!-- <script src="../js/scripts.js"></script>
<script src="../js/themes_for_visual.js"></script> -->

<script>
    const el = document.querySelector(".header__nav")
    const observer = new IntersectionObserver(
        ([e]) => e.target.classList.toggle("is-pinned", e.intersectionRatio < 1), {
            threshold: [1]
        }
    );

    observer.observe(el);
</script>

<!--
Сохраняю как работало

<nav id="mainNav" class=" navbar sticky-top container-fluid header__nav px-5 py-3">
    <div class="container">

        <div class="header__logo">
            <a href="/index.php" class="logo__link">
                <span class="logo__name">Комплексный<br>центр<br>социального<br>обслуживания<br>населения</span>
                <img src="../images/logo.jpg" alt="" class="logo__img">
            </a>
        </div>

        <ul class="header__nav-list">
            <li class="nav__list-item">
                <a href="/pages/about.php" class="nav__list-link">О нас</a>
            </li>
            <li class="nav__list-item">
                <a href="/pages/centers.php" class="nav__list-link">Центры</a>
            </li>
            <li class="nav__list-item">
                <a href="/pages/uslugi.php" class="nav__list-link">Услуги</a>
            </li>
            <li class="nav__list-item">
                <a href="" class="nav__list-link">Сервисы</a>
            </li>
            <li class="nav__list-item">
                <a href="/pages/docs.php" class="nav__list-link">Документы</a>
            </li>
            <li class="nav__list-item">
                <a href="/pages/media.php" class="nav__list-link">Медиа</a>
            </li>
            <li class="nav__list-item">
                <a href="" class="nav__list-link">Вопросы</a>
            </li>
        </ul>
    </div>
</nav> -->