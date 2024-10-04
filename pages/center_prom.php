<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="КЦСОН | Промышленный район" />
    <link rel="icon" href="../images/logo_white.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>КЦСОН | Центры</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php include "../containers/navigation.php"; ?>

    <main class="container pt-3 main">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php">Главная</a></li>
                <li class="breadcrumb-item"><a href="/pages/centers.php">Центры</a></li>
                <li class="breadcrumb-item active" aria-current="page">Промышленный район</li>
            </ol>
        </nav>
        <div class="about__title pb-5"><strong>Промышленный район</strong></div>

        <div class="">
            <div class="row  nav   nav-pills" id="v-pills-tab" role="tablist">
                <button class="col mx-2 docs-tab active" id="docs-btn-tab-1" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-1" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Семье и детям</button>
                <button class="col mx-2 docs-tab" id="docs-btn-tab-2" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-2" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Пожилым и инвалидам</button>
                <!-- <button class="docs-tab" id="docs-btn-tab-3" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-3" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Численность</button> -->

            </div>
            <div class="tab-content mt-3" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="docs-tab-panel-1" role="tabpanel" aria-labelledby="docs-btn-tab-1">


                    <div class="row">
                        <div class="col-6">
                            <p><b>Юридический адрес:</b> 443029, Самарская область, г. Самара, ул. Солнечная, д.21

                                8 (846) 200-08-98 – вахта/специалисты</p>

                            <p> <b>Место нахождения:</b> 443087, Самарская область, г. Самара, пр. Кирова, д. 242</br>

                                8 (846) 956-46-66 – специалисты</p>

                            <p> <b>e-mail:</b> centersemya_prom@mail.ru</p>
                        </div>
                        <div class="col-6">
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Af9152d233088b50a8d5fea8436b34d59c4984910aefb5fcd7908132efb9c3e3d&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="docs-tab-panel-2" role="tabpanel" aria-labelledby="docs-btn-tab-2">
                    <div class="row">
                        <div class="col-6">
                            <p><b>Юридический адрес:</b> 443063, г. Самара, ул. Средне-Садовая, 42</p>

                            <p> <b>Место нахождения:</b> 443063, г. Самара, ул. Средне-Садовая, 42</br></p>

                            <p> <b>Телефон:</b> 8(846) 250 51 50</p>

                            <p> <b>e-mail:</b> centersemya_prom@mail.ru</p>
                            <p>
                                <b>Режим работы:</b></br>
                                понедельник – четверг - 8.30 - 17.30</br>
                                пятница - 8.30 - 16.30</br>
                                (перерыв с 12.42 до 13.30)
                            </p>
                        </div>
                        <div class="col-6">
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A25769fe85cd222a1d2fb984aff57ae055917a80fa2e5dc59928bae6fc854105d&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
                <!-- <div class="tab-pane fade" id="docs-tab-panel-3" role="tabpanel" aria-labelledby="docs-btn-tab-3">
                    <div class="text-block">

                    </div>
                </div> -->

            </div>
            <div class="text-block">
                <a href="/files/sot-promishl-2-2023.pdf">Список сотрудников подразделения</a>
                <p><b>Заместитель директора: Шаталова Анастасия Юрьевна</b></p>
                <p><b>Часы приема:</b> первый и третий четверг месяца с 14.00 до 16.00,
                    предварительная запись по телефону: 8 (846) 956-46-66</p>

            </div>
        </div>



    </main>


    <script>
        var tab = window.location.hash;
        if (tab == "#2") {
            let elem = document.getElementById('docs-btn-tab-2');
            elem.classList.add("active");
            let elem2 = document.getElementById('docs-btn-tab-1');
            elem2.classList.remove("active");
            let elemTab = document.getElementById('docs-tab-panel-2');
            elemTab.classList.add("show", "active");
            let elemTab2 = document.getElementById('docs-tab-panel-1');
            elemTab2.classList.remove("show", "active");
        }
    </script>


    <?php include "../containers/footer.php"; ?>

</body>

</html>