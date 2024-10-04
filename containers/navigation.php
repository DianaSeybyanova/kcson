<header class="header mt-4">
    <div class=" header__inner container">
        <div class="header__top">
            <ul class="header__social">
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
            </ul>

            <ul class="header__functions">
                <li class="header__functions-item">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search">
                        <button class="btn btn-outline-success colorGreen" type="submit">Найти</button>
                    </form>
                    <!-- <a href="" class="header__functions-link">
                        <img src="images/search_8094123.png" alt="" class="header__functions-img">Найти
                    </a> -->
                </li>
                <li class="header__functions-item">
                    <a href="" class="header__functions-link">
                        <img src="../images/1904660-email-envelope-letter-mail-message-post-send_122510 (1).png" alt="" class="header__functions-img"> Задать вопрос
                    </a>
                </li>
                <li class="header__functions-item">
                    <a href="" class="header__functions-link">
                        <img src="../images/eye_visible_hide_hidden_show_icon_145988.png" alt="" class="header__functions-img">Для слабовидящих
                    </a>
                </li>
            </ul>

        </div>
    </div>
</header>

<!-- header__nav mx-5 my-3 -->

<nav id="mainNav" class=" navbar navbar-expand-xl sticky-top container-fluid header__nav px-5 py-3">
    <div class="container">

        <div class="header__logo">
            <a href="/index.php" class="logo__link">
                <span class="logo__name">Комплексный<br>центр<br>социального<br>обслуживания<br>населения</span>
                <img src="../images/logo.jpg" alt="" class="logo__img">
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerMain" aria-controls="navbarTogglerMain" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerMain">
            <ul class="navbar-nav header__nav-list">
                <a href="/pages/about.php" class="nav__list-link">
                    <li class="nav__list-item">О нас</li>
                </a>
                <a href="/pages/centers.php" class="nav__list-link">
                    <li class="nav__list-item">Центры</li>
                </a>
                <a href="/pages/uslugi.php" class="nav__list-link">
                    <li class="nav__list-item">Услуги</li>
                </a>
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
                                <li><a class="dropdown-item nav__list-item" href="/pages/articles.php">Статьи</a></li>
                                <li><a class="dropdown-item nav__list-item" href="/pages/news.php">Новости</a></li>
                                <li><a class="dropdown-item nav__list-item" href="#">Полезная информация</a></li>
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

                <a href="/pages/questions.php" class="nav__list-link">
                    <li class="nav__list-item">Вопросы</li>
                </a>
            </ul>
        </div>


    </div>
</nav>
<script src="../js/scripts.js"></script>

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