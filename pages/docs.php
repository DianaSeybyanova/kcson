<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="КЦСОН | Документы" />
    <link rel="icon" href="../images/logo_white.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>КЦСОН | Документы</title>
    <link rel="stylesheet" href="http://seybyanova.ru/dist/css/bvi.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css">

    <script language="JavaScript" type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>

<body>
    <?php include "../containers/navigation.php"; ?>

    <main class="container pt-3 main">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Документы</li>
            </ol>
        </nav>
        <div>
            <h2 class="text-center pb-3">Документы</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col-12 col-md-5 nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="docs-tab active" id="docs-btn-tab-1" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-1" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                    Уставные документы</button>
                <button class="docs-tab" id="docs-btn-tab-2" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-2" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    Образовательная деятельность</button>

                <div class="accordion " id="accordionExample">
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Отчетная документация
                            </button>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body  nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                                <button class="docs-tab" id="docs-btn-tab-3-1" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-3-1" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    Отчеты по материально техническому обеспечению</button>
                                <button class="docs-tab" id="docs-btn-tab-3-2" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-3-2" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    Отчеты по основной деятельности</button>
                                <button class="docs-tab" id="docs-btn-tab-3-3" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-3-3" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    Финансовая отчетность</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion " id="accordion4">
                    <div class="accordion-item">
                        <div class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseOne">
                                Охрана труда
                            </button>
                        </div>
                        <div id="collapse4" class="accordion-collapse collapse " aria-labelledby="heading4" data-bs-parent="#accordion4">
                            <div class="accordion-body  nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                                <button class="docs-tab" id="docs-btn-tab-4-1" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-4-1" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    Нормативно правовая основа деятельности службы ОТ</button>
                                <button class="docs-tab" id="docs-btn-tab-4-2" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-4-2" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    Положение о службе ОТ</button>
                                <button class="docs-tab" id="docs-btn-tab-4-3" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-4-3" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    В помощь сотруднику по ОТ</button>
                                <button class="docs-tab" id="docs-btn-tab-4-4" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-4-4" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    В помощь сотруднику по пожарной безопасности</button>
                                <button class="docs-tab" id="docs-btn-tab-4-5" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-4-5" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    Инструкции по ОТ для сотрудников (специалистов, служб)</button>
                                <button class="docs-tab" id="docs-btn-tab-4-6" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-4-6" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    Месячник по ОТ</button>
                                <button class="docs-tab" id="docs-btn-tab-4-7" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-4-7" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    Планы работы отдела ОТ на период 2022 - 2023 - 2024 годы</button>
                                <button class="docs-tab" id="docs-btn-tab-4-8" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-4-8" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    Актуальные новости ОТ 2024</button>
                                <button class="docs-tab" id="docs-btn-tab-4-9" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-4-9" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    Декларации соответствий условий труда</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="docs-tab" id="docs-btn-tab-4" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-4" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                    Охрана труда</button> -->
                <button class="docs-tab" id="docs-btn-tab-5" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-5" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                    Попечительский совет</button>
                <button class="docs-tab" id="docs-btn-tab-6" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-6" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                    Локальные нормативно-правовые акты</button>
                <button class="docs-tab" id="docs-btn-tab-7" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-7" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                    Дополнительная информация</button>
                <button class="docs-tab" id="docs-btn-tab-8" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-8" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                    Законодательство</button>
                <button class="docs-tab" id="docs-btn-tab-9" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-9" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                    Защита персональных данных</button>

                <div class="accordion" id="accordionExample2">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button  " id="docs-btn-tab-10" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Противодействие коррупции
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                            <div class="accordion-body  nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                                <button class="docs-tab" id="docs-btn-tab-10-1" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-10-1" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    Нормативно-правовые акты</button>
                                <button class="docs-tab" id="docs-btn-tab-10-2" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-10-2" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    Методические материалы</button>
                                <button class="docs-tab" id="docs-btn-tab-10-3" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-10-3" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    Формы документов</button>
                                <button class="docs-tab" id="docs-btn-tab-10-4" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-10-4" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    Комиссия по противодействию коррупции</button>
                                <button class="docs-tab" id="docs-btn-tab-10-5" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-10-5" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    Локальные нормативно-правовые акты</button>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="docs-tab" id="docs-btn-tab-11" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-11" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                    Антитеррористическая защищенность</button>
                <button class="docs-tab" id="docs-btn-tab-12" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-12" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                    Независимая оценка качества</button>
                <!-- <button class="docs-tab" id="docs-btn-tab-8" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-8" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                    Дополнительно</button>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed docs-tab" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Отчетная документация
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body  nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                                <button class="docs-tab" id="docs-btn-tab-9" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-9" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                    9</button>
                                <button class="docs-tab" id="docs-btn-tab-10" data-bs-toggle="pill" data-bs-target="#docs-tab-panel-10" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                    10</button>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="col-12 col-md-7 tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="docs-tab-panel-1" role="tabpanel" aria-labelledby="docs-btn-tab-1">
                    <div class="text-block">
                        <p><a href="/docs/1. Уставные документы/Выписка из реестра поставщиков социальных услуг.pdf" target="_blank">Выписка из реестра поставщиков социальных услуг</a></p>
                        <p><a href="/docs/1. Уставные документы/ЕГРЮЛ.pdf" target="_blank">ЕГРЮЛ</a></p>
                        <p><a href="/docs/1. Уставные документы/Извещение о зарктытии лицевого счета.pdf" target="_blank">Извещение о зарктытии лицевого счета</a></p>
                        <p><a href="/docs/1. Уставные документы/Извещение об откритии лицевого счета.pdf" target="_blank">Извещение об откритии лицевого счета</a></p>
                        <p><a href="/docs/1. Уставные документы/Изменения в Устав от 03.06.2024.pdf" target="_blank">Изменения в Устав от 03.06.2024</a></p>
                        <p><a href="/docs/1. Уставные документы/Изменения в Устав от 05.07.2019.pdf" target="_blank">Изменения в Устав от 05.07.2019</a></p>
                        <p><a href="/docs/1. Уставные документы/Изменения в Устав от 08.07.2022.pdf" target="_blank">Изменения в Устав от 08.07.2022</a></p>
                        <p><a href="/docs/1. Уставные документы/Изменения в Устав от 15.09.2020.PDF" target="_blank">Изменения в Устав от 15.09.2020</a></p>
                        <p><a href="/docs/1. Уставные документы/Изменения в Устав от 31.01.2022.pdf" target="_blank">Изменения в Устав от 31.01.2022</a></p>
                        <p><a href="/docs/1. Уставные документы/Коллективный договор - продление до 2027.pdf" target="_blank">Коллективный договор - продление до 2027</a></p>
                        <p><a href="/docs/1. Уставные документы/Коллективный договор.pdf" target="_blank">Коллективный договор</a></p>
                        <p><a href="/docs/1. Уставные документы/Назначение директора.pdf" target="_blank">Назначение директора</a></p>
                        <p><a href="/docs/1. Уставные документы/ОГРН.pdf" target="_blank">ОГРН</a></p>
                        <p><a href="/docs/1. Уставные документы/Организационная структура Учреждения.pdf" target="_blank">Организационная структура Учреждения</a></p>
                        <p><a href="/docs/1. Уставные документы/Постановление Правительства о реорганизации.pdf" target="_blank">Постановление Правительства о реорганизации</a></p>
                        <p><a href="/docs/1. Уставные документы/Постановление Правительства о штатной численности.pdf" target="_blank">Постановление Правительства о штатной численности</a></p>
                        <p><a href="/docs/1. Уставные документы/Правила внутреннего трудового распорядка для ПСУ.doc" target="_blank">Правила внутреннего трудового распорядка для ПСУ</a></p>
                        <p><a href="/docs/1. Уставные документы/Правила внутреннего трудового распорядка.pdf" target="_blank">Правила внутреннего трудового распорядка</a></p>
                        <p><a href="/docs/1. Уставные документы/Приказ о переименовании Учреждения.pdf" target="_blank">Приказ о переименовании Учреждения</a></p>
                        <p><a href="/docs/1. Уставные документы/Распоряжение о передаче Учреждения.pdf" target="_blank">Распоряжение о передаче Учреждения</a></p>
                        <p><a href="/docs/1. Уставные документы/Семья.pdf" target="_blank">Семья</a></p>
                        <p><a href="/docs/1. Уставные документы/Устав Учреждения.pdf" target="_blank">Устав Учреждения</a></p>


                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-2" role="tabpanel" aria-labelledby="docs-btn-tab-2">
                    <div class="text-block">
                        <p><a href="/docs/2. Образовательная деятельность/Лицензия на осуществление образовательной деятельности.pdf" target="_blank">Лицензия на осуществление образовательной деятельности</a></p>
                        <p><a href="/docs/2. Образовательная деятельность/Положение о аттестации обучающихся.pdf" target="_blank">Положение о аттестации обучающихся</a></p>
                        <p><a href="/docs/2. Образовательная деятельность/Положение о методическом совете.pdf" target="_blank">Положение о методическом совете</a></p>
                        <p><a href="/docs/2. Образовательная деятельность/Положение о режиме занятий обучающихся.pdf" target="_blank">Положение о режиме занятий обучающихся</a></p>
                        <p><a href="/docs/2. Образовательная деятельность/Положение о совете обучающихся.pdf" target="_blank">Положение о совете обучающихся</a></p>
                        <p><a href="/docs/2. Образовательная деятельность/Положение о совете родителей обучающихся.pdf" target="_blank">Положение о совете родителей обучающихся</a></p>
                        <p><a href="/docs/2. Образовательная деятельность/Положение об оформлении отношений с обучающимися и их родителями.pdf" target="_blank">Положение об оформлении отношений с обучающимися и их родителями</a></p>
                        <p><a href="/docs/2. Образовательная деятельность/Правила внутреннего распоярдка обучающихся.pdf" target="_blank">Правила внутреннего распоярдка обучающихся</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-3-1" role="tabpanel" aria-labelledby="docs-btn-tab-3-1">
                    <div class="text-block">
                        <p><a href="/docs/3. Отчетная документация/Отчеты по МТО/Материально-техническое оснащение.jpg" target="_blank">Материально-техническое оснащение</a></p>

                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-3-2" role="tabpanel" aria-labelledby="docs-btn-tab-3-2">
                    <div class="text-block">
                        <p><a href="/docs/3. Отчетная документация/Отчеты по основной деятельности/Сведения о проведенных проверках 2019.pdf" target="_blank">Сведения о проведенных проверках 2019</a></p>
                        <p><a href="/docs/3. Отчетная документация/Отчеты по основной деятельности/Сведения о проведенных проверках 2020.pdf" target="_blank">Сведения о проведенных проверках 2020</a></p>
                        <p><a href="/docs/3. Отчетная документация/Отчеты по основной деятельности/Сведения о проведенных проверках 2021.pdf" target="_blank">Сведения о проведенных проверках 2021</a></p>
                        <p><a href="/docs/3. Отчетная документация/Отчеты по основной деятельности/Сведения о проведенных проверках 2022.pdf" target="_blank">Сведения о проведенных проверках 2022</a></p>
                        <p><a href="/docs/3. Отчетная документация/Отчеты по основной деятельности/Сведения о проведенных проверках 2023.pdf" target="_blank">Сведения о проведенных проверках 2023</a></p>
                        <p><a href="/docs/3. Отчетная документация/Отчеты по основной деятельности/Численность ПСУ 2019.pdf" target="_blank">Численность ПСУ 2019</a></p>
                        <p><a href="/docs/3. Отчетная документация/Отчеты по основной деятельности/Численность ПСУ 2020.pdf" target="_blank">Численность ПСУ 2020</a></p>
                        <p><a href="/docs/3. Отчетная документация/Отчеты по основной деятельности/Численность ПСУ 2021.pdf" target="_blank">Численность ПСУ 2021</a></p>
                        <p><a href="/docs/3. Отчетная документация/Отчеты по основной деятельности/Численность ПСУ 2022.pdf" target="_blank">Численность ПСУ 2022</a></p>
                        <p><a href="/docs/3. Отчетная документация/Отчеты по основной деятельности/Численность ПСУ 2023.pdf" target="_blank">Численность ПСУ 2023</a></p>
                        <p><a href="/docs/3. Отчетная документация/Отчеты по основной деятельности/Численность ПСУ за 2 квартала 2024.pdf" target="_blank">Численность ПСУ за 2 квартала 2024</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-3-3" role="tabpanel" aria-labelledby="docs-btn-tab-3-3">
                    <div class="text-block">
                        <p><a href="/docs/3. Отчетная документация/Финансовая отчетность/Баланс главного распорядителя 2019.pdf" target="_blank">Баланс главного распорядителя 2019</a></p>
                        <p><a href="/docs/3. Отчетная документация/Финансовая отчетность/Баланс главного распорядителя 2020.pdf" target="_blank">Баланс главного распорядителя 2020</a></p>
                        <p><a href="/docs/3. Отчетная документация/Финансовая отчетность/Баланс главного распорядителя 2021.pdf" target="_blank">Баланс главного распорядителя 2021</a></p>
                        <p><a href="/docs/3. Отчетная документация/Финансовая отчетность/Баланс главного распорядителя 2022.pdf" target="_blank">Баланс главного распорядителя 2022</a></p>
                        <p><a href="/docs/3. Отчетная документация/Финансовая отчетность/Баланс главного распорядителя 2023.pdf" target="_blank">Баланс главного распорядителя 2023</a></p>
                        <p><a href="/docs/3. Отчетная документация/Финансовая отчетность/Отчет о финансовых результатах деятельности 2019.pdf" target="_blank">Отчет о финансовых результатах деятельности 2019</a></p>
                        <p><a href="/docs/3. Отчетная документация/Финансовая отчетность/Отчет о финансовых результатах деятельности 2020.pdf" target="_blank">Отчет о финансовых результатах деятельности 2020</a></p>
                        <p><a href="/docs/3. Отчетная документация/Финансовая отчетность/Отчет о финансовых результатах деятельности 2021.pdf" target="_blank">Отчет о финансовых результатах деятельности 2021</a></p>
                        <p><a href="/docs/3. Отчетная документация/Финансовая отчетность/Отчет о финансовых результатах деятельности 2022.pdf" target="_blank">Отчет о финансовых результатах деятельности 2022</a></p>
                        <p><a href="/docs/3. Отчетная документация/Финансовая отчетность/Отчет о финансовых результатах деятельности 2023.pdf" target="_blank">Отчет о финансовых результатах деятельности 2023</a></p>
                        <p><a href="/docs/3. Отчетная документация/Финансовая отчетность/Отчет об исполнении бюджета 2019.pdf" target="_blank">Отчет об исполнении бюджета 2019</a></p>
                        <p><a href="/docs/3. Отчетная документация/Финансовая отчетность/Отчет об исполнении бюджета 2020.pdf" target="_blank">Отчет об исполнении бюджета 2020</a></p>
                        <p><a href="/docs/3. Отчетная документация/Финансовая отчетность/Отчет об исполнении бюджета 2021.pdf" target="_blank">Отчет об исполнении бюджета 2021</a></p>
                        <p><a href="/docs/3. Отчетная документация/Финансовая отчетность/Отчет об исполнении бюджета 2022.pdf" target="_blank">Отчет об исполнении бюджета 2022</a></p>
                        <p><a href="/docs/3. Отчетная документация/Финансовая отчетность/Отчет об исполнении бюджета 2023.pdf" target="_blank">Отчет об исполнении бюджета 2023</a></p>
                        <p><a href="/docs/3. Отчетная документация/Финансовая отчетность/Справка о наличии имущества на забалансных счетах 2022 (Ф).pdf" target="_blank">Справка о наличии имущества на забалансных счетах 2022 (Ф)</a></p>
                        <p><a href="/docs/3. Отчетная документация/Финансовая отчетность/Справка о наличии имущества на забалансных счетах 2022.pdf" target="_blank">Справка о наличии имущества на забалансных счетах 2022</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-4-1" role="tabpanel" aria-labelledby="docs-btn-tab-4-1">
                    <div class="text-block">
                        <p><a href="/docs/4. Охрана труда/1 Нормативно правовая основа деятельности службы ОТ/Письмо_МТ_РФ_по_внеплан_СОУТ_от_30_марта_2021_N_15_2_дробь_ООГ_946.docx" target="_blank">Письмо_МТ_РФ_по_внеплан_СОУТ_от_30_марта_2021_N_15_2_дробь_ООГ_946</a></p>
                        <p><a href="/docs/4. Охрана труда/1 Нормативно правовая основа деятельности службы ОТ/Постановление Правительства РФ от 24.12.2021 N 2464 О порядке обучения по охране труда и проверки (1).docx" target="_blank">Постановление Правительства РФ от 24.12.2021 N 2464 О порядке обучения по охране труда и проверки</a></p>
                        <p><a href="/docs/4. Охрана труда/1 Нормативно правовая основа деятельности службы ОТ/Постановление Правительства РФ от 25.02.2000 N 163 Об утверждении перечня тяжелых работ и работ с.docx" target="_blank">Постановление Правительства РФ от 25.02.2000 N 163 Об утверждении перечня тяжелых работ и работ с</a></p>
                        <p><a href="/docs/4. Охрана труда/1 Нормативно правовая основа деятельности службы ОТ/Приказ Минздрава РФ от 20.05.2022 N 342Н Об утверждении порядка прохождения обязательного.docx" target="_blank">Приказ Минздрава РФ от 20.05.2022 N 342Н Об утверждении порядка прохождения обязательного</a></p>
                        <p><a href="/docs/4. Охрана труда/1 Нормативно правовая основа деятельности службы ОТ/Приказ Минздрава РФ от 28.01.2021 N 29Н Об утверждении Порядка проведения обязательных.docx" target="_blank">Приказ Минздрава РФ от 28.01.2021 N 29Н Об утверждении Порядка проведения обязательных</a></p>
                        <p><a href="/docs/4. Охрана труда/1 Нормативно правовая основа деятельности службы ОТ/Приказ_Минздрава_России_от_28_01_2021_N_29н_мед_осмотры.docx" target="_blank">Приказ_Минздрава_России_от_28_01_2021_N_29н_мед_осмотры</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-4-2" role="tabpanel" aria-labelledby="docs-btn-tab-4-2">
                    <div class="text-block">
                        <p><a href="/docs/4. Охрана труда/2 Положение о службе ОТ/Приказ 81.pdf" target="_blank">Приказ 81</a></p>
                        <p><a href="/docs/4. Охрана труда/2 Положение о службе ОТ/Приказ №127 от 31.08.2023 г. с Приложениями (Об утверждении норм выдачи СИЗ и смывающих средств).pdf" target="_blank">Приказ №127 от 31.08.2023 г. с Приложениями (Об утверждении норм выдачи СИЗ и смывающих средств)</a></p>
                        <p><a href="/docs/4. Охрана труда/2 Положение о службе ОТ/Приказ №164 от 30.10.2023 г. (Об утверждении Положения об отделе ОТ).pdf" target="_blank">Приказ №164 от 30.10.2023 г. (Об утверждении Положения об отделе ОТ)</a></p>
                        <p><a href="/docs/4. Охрана труда/2 Положение о службе ОТ/Приказ №165 от 30.10.2023 г. (Об утверждении Положения о СУОТ).pdf" target="_blank">Приказ №165 от 30.10.2023 г. (Об утверждении Положения о СУОТ)</a></p>
                        <p><a href="/docs/4. Охрана труда/2 Положение о службе ОТ/Приказ №167 от 30.10.2023 г. (Об утверждении Положения о порядке обучения требованиям ОТ).pdf" target="_blank">Приказ №167 от 30.10.2023 г. (Об утверждении Положения о порядке обучения требованиям ОТ)</a></p>
                        <p><a href="/docs/4. Охрана труда/2 Положение о службе ОТ/Приказ №168 от 30.10.2023 (Об утверждении положения об микротравмах).pdf" target="_blank">Приказ №168 от 30.10.2023 (Об утверждении положения об микротравмах)</a></p>
                        <p><a href="/docs/4. Охрана труда/2 Положение о службе ОТ/Приказ №186 от 15.11.2023 г. (О проведении СОУТ).pdf" target="_blank">Приказ №186 от 15.11.2023 г. (О проведении СОУТ)</a></p>
                        <p><a href="/docs/4. Охрана труда/2 Положение о службе ОТ/Приложение № 1 к Пр.№186 от 15.11.2023 г. (Схематический план условного размещения РМ).pptx" target="_blank">Приложение № 1 к Пр.№186 от 15.11.2023 г. (Схематический план условного размещения РМ)</a></p>
                        <p><a href="/docs/4. Охрана труда/2 Положение о службе ОТ/Приложение № 1 к приказу № 167 от 30.10.2023.pdf" target="_blank">Приложение № 1 к приказу № 167 от 30.10.2023</a></p>
                        <p><a href="/docs/4. Охрана труда/2 Положение о службе ОТ/Приложение № 2 к приказу № 167 от 30.10.2023.pdf" target="_blank">Приложение № 2 к приказу № 167 от 30.10.2023</a></p>
                        <p><a href="/docs/4. Охрана труда/2 Положение о службе ОТ/Приложение № 3 к приказу № 167 от 30.10.2023.pdf" target="_blank">Приложение № 3 к приказу № 167 от 30.10.2023</a></p>
                        <p><a href="/docs/4. Охрана труда/2 Положение о службе ОТ/Приложение № 4 к приказу № 167 от 30.10.2023.pdf" target="_blank">Приложение № 4 к приказу № 167 от 30.10.2023</a></p>
                        <p><a href="/docs/4. Охрана труда/2 Положение о службе ОТ/Приложение № 5 к приказу № 167 от 30.10.2023.pdf" target="_blank">Приложение № 5 к приказу № 167 от 30.10.2023</a></p>
                        <p><a href="/docs/4. Охрана труда/2 Положение о службе ОТ/Приложение № 6 к приказу № 167 от 30.10.2023.pdf" target="_blank">Приложение № 6 к приказу № 167 от 30.10.2023</a></p>
                        <p><a href="/docs/4. Охрана труда/2 Положение о службе ОТ/Приложение № 7 к приказу № 167 от 30.10.2023.pdf" target="_blank">Приложение № 7 к приказу № 167 от 30.10.2023</a></p>
                        <p><a href="/docs/4. Охрана труда/2 Положение о службе ОТ/Приложение № 8 к приказу № 167 от 30.10.2023.pdf" target="_blank">Приложение № 8 к приказу № 167 от 30.10.2023</a></p>
                        <p><a href="/docs/4. Охрана труда/2 Положение о службе ОТ/Приложение № 9 к приказу № 167 от 30.10.2023.pdf" target="_blank">Приложение № 9 к приказу № 167 от 30.10.2023</a></p>
                        <p><a href="/docs/4. Охрана труда/2 Положение о службе ОТ/Приложение №1 к Пр. №164 от 30.10.2023 г. (Положение об отделе охраны труда).pdf" target="_blank">Приложение №1 к Пр. №164 от 30.10.2023 г. (Положение об отделе охраны труда)</a></p>
                        <p><a href="/docs/4. Охрана труда/2 Положение о службе ОТ/Приложение №1 к Пр. №167 от 30.10.2023 г. (Положение о порядке обучения и проверке знаний требований ОТ) Утверждаю.pdf" target="_blank">Приложение №1 к Пр. №167 от 30.10.2023 г. (Положение о порядке обучения и проверке знаний требований ОТ) Утверждаю</a></p>
                        <p><a href="/docs/4. Охрана труда/2 Положение о службе ОТ/Приложение №1 № 165 от 30.10.2023 г. (Положение о системе управления охраной труда(СУОТ)).pdf" target="_blank">Приложение №1 № 165 от 30.10.2023 г. (Положение о системе управления охраной труда(СУОТ))</a></p>
                        <p><a href="/docs/4. Охрана труда/2 Положение о службе ОТ/Приложение №2 к Пр№186 от 15.11.2023 г. (График проведения работ по СОУТ).pdf" target="_blank">Приложение №2 к Пр№186 от 15.11.2023 г. (График проведения работ по СОУТ)</a></p>
                        <p><a href="/docs/4. Охрана труда/2 Положение о службе ОТ/Программа «Требования охраны труда – основные изменения в трудовом законодательстве на 01.03.2022 г.».pdf" target="_blank">Программа «Требования охраны труда – основные изменения в трудовом законодательстве на 01.03.2022 г.»</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-4-3" role="tabpanel" aria-labelledby="docs-btn-tab-4-3">
                    <div class="text-block">
                        <p><a href="/docs/4. Охрана труда/3 В помощь сотруднику по ОТ/1.Общие вопросы охраны труда и СУОТ.pptx" target="_blank">1. Общие вопросы охраны труда и СУОТ</a></p>
                        <p><a href="/docs/4. Охрана труда/3 В помощь сотруднику по ОТ/2.Безопасные методы и приемы при ВОПФ.pptx" target="_blank">2. Безопасные методы и приемы при ВОПФ</a></p>
                        <p><a href="/docs/4. Охрана труда/3 В помощь сотруднику по ОТ/3. Оказание первой помощи пострадавшим_обучение.pptx" target="_blank">3. Оказание первой помощи пострадавшим_обучение</a></p>
                        <p><a href="/docs/4. Охрана труда/3 В помощь сотруднику по ОТ/4. СИЗ.pptx" target="_blank">4. СИЗ</a></p>
                        <p><a href="/docs/4. Охрана труда/3 В помощь сотруднику по ОТ/Памятка день здоровья.docx" target="_blank">Памятка день здоровья</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-4-4" role="tabpanel" aria-labelledby="docs-btn-tab-4-4">
                    <div class="text-block">
                        <p><a href="/docs/4. Охрана труда/4 В помощь сотруднику по пожарной безопасности/Лекции по процессу горения.ppt" target="_blank">Лекции по процессу горения</a></p>
                        <p><a href="/docs/4. Охрана труда/4 В помощь сотруднику по пожарной безопасности/Первичные средства тушения.ppt" target="_blank">Первичные средства тушения</a></p>
                        <p><a href="/docs/4. Охрана труда/4 В помощь сотруднику по пожарной безопасности/Презентация по организауии противопожарной защиты.ppt" target="_blank">Презентация по организауии противопожарной защиты</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-4-5" role="tabpanel" aria-labelledby="docs-btn-tab-4-5">
                    <div class="text-block">
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №1 о мерах пожарной безопасности.pdf" target="_blank">Инструкция №1 о мерах пожарной безопасности</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №2 по содержанию и применению первичных средств пожаротушения.pdf" target="_blank">Инструкция №2 по содержанию и применению первичных средств пожаротушения</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №3 по эксплуатации внутреннего противопожарного водопровода.pdf" target="_blank">Инструкция №3 по эксплуатации внутреннего противопожарного водопровода</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №4 проведения вводного инструктажа.pdf" target="_blank">Инструкция №4 проведения вводного инструктажа</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №5 по охране труда при работе на ПК.pdf" target="_blank">Инструкция №5 по охране труда при работе на ПК</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №6 при работе на копировально-множительной технике.pdf" target="_blank">Инструкция №6 при работе на копировально-множительной технике</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №7 при применении микроволновой печи.pdf" target="_blank">Инструкция №7 при применении микроволновой печи</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №8 при работе с аппаратом для приготовления кофе.pdf" target="_blank">Инструкция №8 при работе с аппаратом для приготовления кофе</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №9 при использовании технических средств обучения.pdf" target="_blank">Инструкция №9 при использовании технических средств обучения</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №10 для работников неэлектротехнического персонала, которым присваивается I группа электробезопасности.pdf" target="_blank">Инструкция №10 для работников неэлектротехнического персонала, которым присваивается I группа электробезопасности</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №11 по охране труда для водителя автомобиля.pdf" target="_blank">Инструкция №11 по охране труда для водителя автомобиля</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №12 по охране труда для дворника.pdf" target="_blank">Инструкция №12 по охране труда для дворника</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №13 по охране труда для делопроизводителя.pdf" target="_blank">Инструкция №13 по охране труда для делопроизводителя</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №14 по охране труда для директора.pdf" target="_blank">Инструкция №14 по охране труда для директора</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №15 по охране труда для документоведа.pdf" target="_blank">Инструкция №15 по охране труда для документоведа</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №16 по охране труда для заведующего отделением дневного прибывания для граждан пожилого возраста и инвалидов.pdf" target="_blank">Инструкция №16 по охране труда для заведующего отделением дневного прибывания для граждан пожилого возраста и инвалидов</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №17 по охране труда для заведующего отделением методической и информационно-аналитической работы.pdf" target="_blank">Инструкция №17 по охране труда для заведующего отделением методической и информационно-аналитической работы</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №18 по охране труда для заведующего отделением по организации отдыха и оздоровления детей.pdf" target="_blank">Инструкция №18 по охране труда для заведующего отделением по организации отдыха и оздоровления детей</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №19 по охране труда для заведующего отделением предоставления социальных услуг детям и семьям.pdf" target="_blank">Инструкция №19 по охране труда для заведующего отделением предоставления социальных услуг детям и семьям</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №20 по охране труда для заведующего отделением срочных услуг для детей и семей.pdf" target="_blank">Инструкция №20 по охране труда для заведующего отделением срочных услуг для детей и семей</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №21 по охране труда для заведующего отделением социальной реабилитации пожилых граждан и инвалидов.pdf" target="_blank">Инструкция №21 по охране труда для заведующего отделением социальной реабилитации пожилых граждан и инвалидов</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №22 по охране труда для заведующего отделением срочных услуг для пожилых граждан и инвалидов.pdf" target="_blank">Инструкция №22 по охране труда для заведующего отделением срочных услуг для пожилых граждан и инвалидов</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №23 по охране труда для заведующего хозяйством.pdf" target="_blank">Инструкция №23 по охране труда для заведующего хозяйством</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №24 по охране труда для заместителя директора (руководителя подразделения).pdf" target="_blank">Инструкция №24 по охране труда для заместителя директора (руководителя подразделения)</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №25 по охране труда для заместителя директора.pdf" target="_blank">Инструкция №25 по охране труда для заместителя директора</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №26 по охране труда для кладовщика.pdf" target="_blank">Инструкция №26 по охране труда для кладовщика</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №27 по охране труда для культорганизатора.pdf" target="_blank">Инструкция №27 по охране труда для культорганизатора</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №28 по охране труда для логопеда.pdf" target="_blank">Инструкция №28 по охране труда для логопеда</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №29 по охране труда для методиста.pdf" target="_blank">Инструкция №29 по охране труда для методиста</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №30 по охране труда для начальника отдела информационного обеспечения.pdf" target="_blank">Инструкция №30 по охране труда для начальника отдела информационного обеспечения</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №31 по охране труда для начальника отдела кадров.pdf" target="_blank">Инструкция №31 по охране труда для начальника отдела кадров</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №32 по охране труда для начальника отдела охраны труда.pdf" target="_blank">Инструкция №32 по охране труда для начальника отдела охраны труда</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №33 по охране труда для начальника отдела правового обеспечения.pdf" target="_blank">Инструкция №33 по охране труда для начальника отдела правового обеспечения</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №34 по охране труда для начальника отдела финансового обеспечения.pdf" target="_blank">Инструкция №34 по охране труда для начальника отдела финансового обеспечения</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №35 по охране труда для начальника отдела хозяйственного обеспечения.pdf" target="_blank">Инструкция №35 по охране труда для начальника отдела хозяйственного обеспечения</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №36 по охране труда для начальника планово-экономического отдела.pdf" target="_blank">Инструкция №36 по охране труда для начальника планово-экономического отдела</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №37 по охране труда для начальника службы материально-технического обеспечения.pdf" target="_blank">Инструкция №37 по охране труда для начальника службы материально-технического обеспечения</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №38 по охране труда для педагога-логопеда.pdf" target="_blank">Инструкция №38 по охране труда для педагога-логопеда</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №39 по охране труда для подсобного рабочего.pdf" target="_blank">Инструкция №39 по охране труда для подсобного рабочего</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №40 по охране труда для программиста.pdf" target="_blank">Инструкция №40 по охране труда для программиста</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №41 по охране труда для психолога.pdf" target="_blank">Инструкция №41 по охране труда для психолога</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №42 по охране труда для рабочего по комплексному обслуживанию и ремонту зданий.pdf" target="_blank">Инструкция №42 по охране труда для рабочего по комплексному обслуживанию и ремонту зданий</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №43 по охране труда для слесаря-сантехника.pdf" target="_blank">Инструкция №43 по охране труда для слесаря-сантехника</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №44 по охране труда для соц. педагога.pdf" target="_blank">Инструкция №44 по охране труда для соц. педагога</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №45 по охране труда для социолога.pdf" target="_blank">Инструкция №45 по охране труда для социолога</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №46 по охране труда для специалиста по закупкам.pdf" target="_blank">Инструкция №46 по охране труда для специалиста по закупкам</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №47 по охране труда для специалиста по кадрам.pdf" target="_blank">Инструкция №47 по охране труда для специалиста по кадрам</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №48 по охране труда для специалиста по охране труда.pdf" target="_blank">Инструкция №48 по охране труда для специалиста по охране труда</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №49 по оране труда для специалиста по соц. работе.pdf" target="_blank">Инструкция №49 по оране труда для специалиста по соц. работе</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №50 по охране труда для сторожа (вахтера).pdf" target="_blank">Инструкция №50 по охране труда для сторожа (вахтера)</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №51 по охране труда для СМТО.pdf" target="_blank">Инструкция №51 по охране труда для СМТО</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №52 по охране труда для уборщика служебных помещений.pdf" target="_blank">Инструкция №52 по охране труда для уборщика служебных помещений</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №53 по охране труда для учителя-дефектолога.pdf" target="_blank">Инструкция №53 по охране труда для учителя-дефектолога</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №54 по охране труда для учителя-логопеда.pdf" target="_blank">Инструкция №54 по охране труда для учителя-логопеда</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №55 по охране труда для экономиста.pdf" target="_blank">Инструкция №55 по охране труда для экономиста</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №56 по охране труда для электромонтера по ремонту и обслуживанию электрооборудования.pdf" target="_blank">Инструкция №56 по охране труда для электромонтера по ремонту и обслуживанию электрооборудования</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №57 по охране труда для юрисконсульта.pdf" target="_blank">Инструкция №57 по охране труда для юрисконсульта</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №58 по охране труда по оказанию первой помощи пострадавшему при несчастном случае.pdf" target="_blank">Инструкция №58 по охране труда по оказанию первой помощи пострадавшему при несчастном случае</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №59 по содержанию и применению средств индивидуальной защиты.pdf" target="_blank">Инструкция №59 по содержанию и применению средств индивидуальной защиты</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №60 по охране труда при работе с моющими средствами.pdf" target="_blank">Инструкция №60 по охране труда при работе с моющими средствами</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №61 при работе с инструментом и приспособлениями.pdf" target="_blank">Инструкция №61 при работе с инструментом и приспособлениями</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №62 при работе с ручным слесарным инструментом.pdf" target="_blank">Инструкция №62 при работе с ручным слесарным инструментом</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №63 при работе с переносным электроинструментом и ручными электрическими машинами (электроинструментом).pdf" target="_blank">Инструкция №63 при работе с переносным электроинструментом и ручными электрическими машинами (электроинструментом)</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №64 при работе с лестниц и стремянок.pdf" target="_blank">Инструкция №64 при работе с лестниц и стремянок</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №65 при выполнении окрасочных работ.pdf" target="_blank">Инструкция №65 при выполнении окрасочных работ</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №66 при производстве земляных работ.pdf" target="_blank">Инструкция №66 при производстве земляных работ</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №67 по охране труда о порядке обращения с отходами производства и потребления.pdf" target="_blank">Инструкция №67 по охране труда о порядке обращения с отходами производства и потребления</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №68 при очистке крыш, проходов, территории вручную от снега.pdf" target="_blank">Инструкция №68 при очистке крыш, проходов, территории вручную от снега</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №69 по охране труда при проведении субботника.pdf" target="_blank">Инструкция №69 по охране труда при проведении субботника</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №70 по охране труда при проведении культурно-массовых мероприятий, экскурсий и туристических походов.pdf" target="_blank">Инструкция №70 по охране труда при проведении культурно-массовых мероприятий, экскурсий и туристических походов</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №71 по охране труда о мерах пожарной безопасности при проведении Новогодних и Рождественских праздников.pdf" target="_blank">Инструкция №71 по охране труда о мерах пожарной безопасности при проведении Новогодних и Рождественских праздников</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №72 при организации временной занятости несовершеннолетних лиц.pdf" target="_blank">Инструкция №72 при организации временной занятости несовершеннолетних лиц</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №73 по гражданской обороне и действиям персонала при угрозе чрезвычайных ситуаций.pdf" target="_blank">Инструкция №73 по гражданской обороне и действиям персонала при угрозе чрезвычайных ситуаций</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №74 по охране труда при выполнении работ в период пандемии.pdf" target="_blank">Инструкция №74 по охране труда при выполнении работ в период пандемии</a></p>
                        <p><a href="/docs/4. Охрана труда/5 Инструкции по ОТ для сотрудников (специалистов, служб)/Инструкция №75 по охране труда при дистанционной (удаленной) работе.pdf" target="_blank">Инструкция №75 по охране труда при дистанционной (удаленной) работе</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-4-6" role="tabpanel" aria-labelledby="docs-btn-tab-4-6">
                    <div class="text-block">
                        <p><a href="/docs/4. Охрана труда/6 Месячник по ОТ/Аптечка нормы.pdf" target="_blank">Аптечка нормы</a></p>
                        <p><a href="/docs/4. Охрана труда/6 Месячник по ОТ/КВЕСТ Веселая-охрана-труда 2024.pdf" target="_blank">КВЕСТ Веселая-охрана-труда 2024</a></p>
                        <p><a href="/docs/4. Охрана труда/6 Месячник по ОТ/План Месячник ОТ 2024.pdf" target="_blank">План Месячник ОТ 2024</a></p>
                        <p><a href="/docs/4. Охрана труда/6 Месячник по ОТ/Положение Конкурс по ОТ 2024.pdf" target="_blank">Положение Конкурс по ОТ 2024</a></p>
                        <p><a href="/docs/4. Охрана труда/6 Месячник по ОТ/Приказ 51 Месячник ОТ 2024.pdf" target="_blank">Приказ 51 Месячник ОТ 2024</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-4-7" role="tabpanel" aria-labelledby="docs-btn-tab-4-7">
                    <div class="text-block">
                        <p><a href="/docs/4. Охрана труда/7 Планы работы отдела ОТ на период 2022 - 2023 - 2024 годы/1 План отдела на 2022.doc" target="_blank">1 План отдела на 2022</a></p>
                        <p><a href="/docs/4. Охрана труда/7 Планы работы отдела ОТ на период 2022 - 2023 - 2024 годы/2 План по улучшению и оздоровлению УТ на 2022.doc" target="_blank">2 План по улучшению и оздоровлению УТ на 2022</a></p>
                        <p><a href="/docs/4. Охрана труда/7 Планы работы отдела ОТ на период 2022 - 2023 - 2024 годы/3 ПЛАН отдела на 2023.docx" target="_blank">3 ПЛАН отдела на 2023</a></p>
                        <p><a href="/docs/4. Охрана труда/7 Планы работы отдела ОТ на период 2022 - 2023 - 2024 годы/4 ПЛАН  работы отдела ОТ на  2024.docx" target="_blank">4 ПЛАН работы отдела ОТ на 2024</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-4-8" role="tabpanel" aria-labelledby="docs-btn-tab-4-8">
                    <div class="text-block">
                        <p><a href="/docs/4. Охрана труда/8 Актуальные новости Охраны труда 2024/Мед осмотры Рязанова О.Ю..pptx" target="_blank">Мед осмотры Рязанова О.Ю.</a></p>
                        <p><a href="/docs/4. Охрана труда/8 Актуальные новости Охраны труда 2024/ОТ Васюхин Д.В. обучение.pptx" target="_blank">ОТ Васюхин Д.В. обучение</a></p>
                        <p><a href="/docs/4. Охрана труда/8 Актуальные новости Охраны труда 2024/Приказ 127 от 27.08.2024 Комиссия проверка знаний.pdf" target="_blank">Приказ 127 от 27.08.2024 Комиссия проверка знаний</a></p>
                        <p><a href="/docs/4. Охрана труда/8 Актуальные новости Охраны труда 2024/Приказ 132 - 2 инструктаж ППП 001.jpg" target="_blank">Приказ 132 - 2 инструктаж ППП 001</a></p>
                        <p><a href="/docs/4. Охрана труда/8 Актуальные новости Охраны труда 2024/Приказ 132 инструктаж ППП 001.jpg" target="_blank">Приказ 132 инструктаж ППП 001</a></p>
                        <p><a href="/docs/4. Охрана труда/8 Актуальные новости Охраны труда 2024/Приказ 73 Закрепление объектов за ОТ.pdf" target="_blank">Приказ 73 Закрепление объектов за ОТ</a></p>
                        <p><a href="/docs/4. Охрана труда/8 Актуальные новости Охраны труда 2024/Приказ 81 О закреплении функционала.pdf" target="_blank">Приказ 81 О закреплении функционала</a></p>
                        <p><a href="/docs/4. Охрана труда/8 Актуальные новости Охраны труда 2024/Приказ 90 О работе в жару.pdf" target="_blank">Приказ 90 О работе в жару</a></p>
                        <p><a href="/docs/4. Охрана труда/8 Актуальные новости Охраны труда 2024/Приказ № 97 о повторном инструктаже.pdf" target="_blank">Приказ № 97 о повторном инструктаже</a></p>
                        <p><a href="/docs/4. Охрана труда/8 Актуальные новости Охраны труда 2024/Распоряжение об ограничительных мерах.pdf" target="_blank">Распоряжение об ограничительных мерах</a></p>
                        <p><a href="/docs/4. Охрана труда/8 Актуальные новости Охраны труда 2024/СИЗ Агеев Д.С..pptx" target="_blank">СИЗ Агеев Д.С.</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-4-9" role="tabpanel" aria-labelledby="docs-btn-tab-4-9">
                    <div class="text-block">
                        <p><a href="/docs/4. Охрана труда/9 Декларации соответствий условий труда/Декларация соответствия условий труда - Алексея Толстого 2023.pdf" target="_blank">Декларация соответствия условий труда - Алексея Толстого 2023</a></p>
                        <p><a href="/docs/4. Охрана труда/9 Декларации соответствий условий труда/Декларация соответствия условий труда - подразделения 2022.pdf" target="_blank">Декларация соответствия условий труда - подразделения 2022</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-5" role="tabpanel" aria-labelledby="docs-btn-tab-5">
                    <div class="text-block">
                        <p><a href="/docs/5. Попечительский совет/Отчет о работе 2019.pdf" target="_blank">Отчет о работе 2019</a></p>
                        <p><a href="/docs/5. Попечительский совет/Отчет о работе 2022.pdf" target="_blank">Отчет о работе 2022</a></p>
                        <p><a href="/docs/5. Попечительский совет/Отчет о работе 2023.pdf" target="_blank">Отчет о работе 2023</a></p>
                        <p><a href="/docs/5. Попечительский совет/Приказ и положение о попечительском совете.pdf" target="_blank">Приказ и положение о попечительском совете</a></p>
                        <p><a href="/docs/5. Попечительский совет/Приказ о назначении куратора.jpg" target="_blank">Приказ о назначении куратора</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-6" role="tabpanel" aria-labelledby="docs-btn-tab-6">
                    <div class="text-block">
                        <p><a href="/docs/6. Локальные нормативно-правовые акты/Положение о комнате социально-бытовой адаптации.pdf" target="_blank">Положение о комнате социально-бытовой адаптации</a></p>
                        <p><a href="/docs/6. Локальные нормативно-правовые акты/Положение о мультидисциплинарной бригаде.pdf" target="_blank">Положение о мультидисциплинарной бригаде</a></p>
                        <p><a href="/docs/6. Локальные нормативно-правовые акты/Положение о пункте проката ТСР.pdf" target="_blank">Положение о пункте проката ТСР</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-7" role="tabpanel" aria-labelledby="docs-btn-tab-7">
                    <div class="text-block">
                        <p><a href="/docs/7. Дополнительная информация/Информация об опыте работы учреждения за 5 лет.pdf" target="_blank">Информация об опыте работы учреждения за 5 лет</a></p>
                        <p><a href="/docs/7. Дополнительная информация/Количество свободных мест для приема ПСУ 2021.pdf" target="_blank">Количество свободных мест для приема ПСУ 2021</a></p>
                        <p><a href="/docs/7. Дополнительная информация/Количество свободных мест для приема ПСУ 2023.pdf" target="_blank">Количество свободных мест для приема ПСУ 2023</a></p>
                        <p><a href="/docs/7. Дополнительная информация/Количество свободных мест для приема ПСУ за 1 полугодие 2024.pdf" target="_blank">Количество свободных мест для приема ПСУ за 1 полугодие 2024</a></p>
                        <p><a href="/docs/7. Дополнительная информация/Перечень предоставляемых социальных услуг.pdf" target="_blank">Перечень предоставляемых социальных услуг</a></p>
                        <p><a href="/docs/7. Дополнительная информация/План работы учреждение 2019.pdf" target="_blank">План работы учреждение 2019</a></p>
                        <p><a href="/docs/7. Дополнительная информация/План работы учреждение 2020.pdf" target="_blank">План работы учреждение 2020</a></p>
                        <p><a href="/docs/7. Дополнительная информация/План работы учреждение 2021.pdf" target="_blank">План работы учреждение 2021</a></p>
                        <p><a href="/docs/7. Дополнительная информация/Положение о единой учетной политике ОИВ СО.pdf" target="_blank">Положение о единой учетной политике ОИВ СО</a></p>
                        <p><a href="/docs/7. Дополнительная информация/Прогнозируемое количество предоставляемых социальных услуг 2022-2024 г.pdf" target="_blank">Прогнозируемое количество предоставляемых социальных услуг 2022-2024 г</a></p>
                        <p><a href="/docs/7. Дополнительная информация/Условия предоставления социальных услуг Учреждением.pdf" target="_blank">Условия предоставления социальных услуг Учреждением</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-8" role="tabpanel" aria-labelledby="docs-btn-tab-8">
                    <div class="text-block">
                        <p><a href="/docs/8. Законодательство/120-ФЗ.docx" target="_blank">120-ФЗ</a></p>
                        <p><a href="/docs/8. Законодательство/136-ГД.pdf" target="_blank">136-ГД</a></p>
                        <p><a href="/docs/8. Законодательство/152-ФЗ.docx" target="_blank">152-ФЗ</a></p>
                        <p><a href="/docs/8. Законодательство/2733-ФЗ.docx" target="_blank">2733-ФЗ</a></p>
                        <p><a href="/docs/8. Законодательство/442-ФЗ.rtf" target="_blank">442-ФЗ</a></p>
                        <p><a href="/docs/8. Законодательство/59-ФЗ.docx" target="_blank">59-ФЗ</a></p>
                        <p><a href="/docs/8. Законодательство/863-ГД.pdf" target="_blank">863-ГД</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-9" role="tabpanel" aria-labelledby="docs-btn-tab-9">
                    <div class="text-block">
                        <p><a href="/docs/9. Защита персональных данных/Приказ и положение о политике в отношении обработки персональных данных.pdf" target="_blank">Приказ и положение о политике в отношении обработки персональных данных</a></p>
                        <p><a href="/docs/9. Защита персональных данных/Приказ и положение об обработке персональных данных.pdf" target="_blank">Приказ и положение об обработке персональных данных</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-10-1" role="tabpanel" aria-labelledby="docs-btn-tab-10-1">
                    <div class="text-block">
                        <p><a href="/docs/10. Противодействие коррупции/1. НПА/Закон Самарской области от 10.03.2009 № 23-ГД.docx" target="_blank">Закон Самарской области от 10.03.2009 № 23-ГД</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/1. НПА/Постановление правительства РФ от 08.09.2010 № 700.rtf" target="_blank">Постановление правительства РФ от 08.09.2010 № 700</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/1. НПА/Постановление Правительства РФ от 21.01.2015 N 29.rtf" target="_blank">Постановление Правительства РФ от 21.01.2015 N 29</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/1. НПА/Приказ Минсоцдем от 28.04.2020 № 195.pdf" target="_blank">Приказ Минсоцдем от 28.04.2020 № 195</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/1. НПА/Приказ Минсоцдем от 28.04.2020 № 199.pdf" target="_blank">Приказ Минсоцдем от 28.04.2020 № 199</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/1. НПА/Приказ Минсоцдем от 28.04.2020 № 200.pdf" target="_blank">Приказ Минсоцдем от 28.04.2020 № 200</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/1. НПА/Приказ Минтруда от 07.09.2013 № 530н (под вопросом).rtf" target="_blank">Приказ Минтруда от 07.09.2013 № 530н (под вопросом)</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/1. НПА/Приказ Минтруда от 31.12.2013 № 792 (с кодексом).doc" target="_blank">Приказ Минтруда от 31.12.2013 № 792 (с кодексом)</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/1. НПА/Указ президента от 08.03.2015 № 120.rtf" target="_blank">Указ президента от 08.03.2015 № 120</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/1. НПА/Указ президента от 16.08.2021 № 478.pdf" target="_blank">Указ президента от 16.08.2021 № 478</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/1. НПА/Указ президента от 19.05.2008 № 815.rtf" target="_blank">Указ президента от 19.05.2008 № 815</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/1. НПА/Указ президента от 21.07.2010 N 925.rtf" target="_blank">Указ президента от 21.07.2010 N 925</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/1. НПА/Федеральный закон от 25.12.2008 № 278.rtf" target="_blank">Федеральный закон от 25.12.2008 № 278</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-10-2" role="tabpanel" aria-labelledby="docs-btn-tab-10-2">
                    <div class="text-block">
                        <p><a href="/docs/10. Противодействие коррупции/2. ММ/Памятка для сотрудников.doc" target="_blank">Памятка для сотрудников</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/2. ММ/Памятка о коррупции с контактами 2.pdf" target="_blank">Памятка о коррупции с контактами 2</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/2. ММ/Памятка о коррупции с контактами.pdf" target="_blank">Памятка о коррупции с контактами</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/2. ММ/Памятка о урегулировании конфликта интересов.pdf" target="_blank">Памятка о урегулировании конфликта интересов</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/2. ММ/Памятка Общественной палаты.doc" target="_blank">Памятка Общественной палаты</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/2. ММ/Памятка с определениями.doc" target="_blank">Памятка с определениями</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-10-3" role="tabpanel" aria-labelledby="docs-btn-tab-10-3">
                    <div class="text-block">
                        <p><a href="/docs/10. Противодействие коррупции/3. Формы документов/Сообщение о заинтересованности.pdf" target="_blank">Сообщение о заинтересованности</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/3. Формы документов/Уведомление о нарушении.pdf" target="_blank">Уведомление о нарушении</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/3. Формы документов/Уведомление о подарке.pdf" target="_blank">Уведомление о подарке</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/3. Формы документов/Уведомление о склонении.pdf" target="_blank">Уведомление о склонении</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-10-4" role="tabpanel" aria-labelledby="docs-btn-tab-10-4">
                    <div class="text-block">
                        <p><a href="/docs/10. Противодействие коррупции/Комиссия по противодействию коррупции/Отчет о выполнении плана 2022.pdf" target="_blank">Отчет о выполнении плана 2022</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Комиссия по противодействию коррупции/Отчет о выполнении плана 2023.pdf" target="_blank">Отчет о выполнении плана 2023</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Комиссия по противодействию коррупции/План мероприятий 2022.pdf" target="_blank">План мероприятий 2022</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Комиссия по противодействию коррупции/План мероприятий 2023.pdf" target="_blank">План мероприятий 2023</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Комиссия по противодействию коррупции/План мероприятий 2024.pdf" target="_blank">План мероприятий 2024</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Комиссия по противодействию коррупции/План работы 2022.pdf" target="_blank">План работы 2022</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Комиссия по противодействию коррупции/План работы 2023.pdf" target="_blank">План работы 2023</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Комиссия по противодействию коррупции/План работы 2024.pdf" target="_blank">План работы 2024</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Комиссия по противодействию коррупции/Положение о конфликте интересов.pdf" target="_blank">Положение о конфликте интересов</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Комиссия по противодействию коррупции/Протокол 1 2022.pdf" target="_blank">Протокол 1 2022</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Комиссия по противодействию коррупции/Протокол 1 2023.pdf" target="_blank">Протокол 1 2023</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Комиссия по противодействию коррупции/Протокол 1 2024.pdf" target="_blank">Протокол 1 2024</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Комиссия по противодействию коррупции/Протокол 2 2022.pdf" target="_blank">Протокол 2 2022</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Комиссия по противодействию коррупции/Протокол 2 2023.pdf" target="_blank">Протокол 2 2023</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Комиссия по противодействию коррупции/Протокол 2 2024.pdf" target="_blank">Протокол 2 2024</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Комиссия по противодействию коррупции/Протокол 3 2022.pdf" target="_blank">Протокол 3 2022</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Комиссия по противодействию коррупции/Протокол 3 2023.pdf" target="_blank">Протокол 3 2023</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Комиссия по противодействию коррупции/Протокол 3 2024.pdf" target="_blank">Протокол 3 2024</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-10-5" role="tabpanel" aria-labelledby="docs-btn-tab-10-5">
                    <div class="text-block">
                        <p><a href="/docs/10. Противодействие коррупции/Локальные НПА/Кодекс этики и служебного поведения.pdf" target="_blank">Кодекс этики и служебного поведения</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Локальные НПА/Комиссия о противодействии коррупции.pdf" target="_blank">Комиссия о противодействии коррупции</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Локальные НПА/Положение Минсоцдем о запрете подарков.pdf" target="_blank">Положение Минсоцдем о запрете подарков</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Локальные НПА/Положение о конфликте интересов.pdf" target="_blank">Положение о конфликте интересов</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Локальные НПА/Приказ от 29.05.2020 № 89.pdf" target="_blank">Приказ от 29.05.2020 № 89</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Локальные НПА/Приказ от 29.05.2020 № 90.pdf" target="_blank">Приказ от 29.05.2020 № 90</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Локальные НПА/Приказ от 29.05.2020 № 93.pdf" target="_blank">Приказ от 29.05.2020 № 93</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Локальные НПА/Приказ от 29.05.2020 № 94.pdf" target="_blank">Приказ от 29.05.2020 № 94</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Локальные НПА/Приказ от 29.05.2020 № 95.pdf" target="_blank">Приказ от 29.05.2020 № 95</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Локальные НПА/Приказ от 29.05.2020 № 96.pdf" target="_blank">Приказ от 29.05.2020 № 96</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Локальные НПА/Приказ от 29.05.2020 № 97.pdf" target="_blank">Приказ от 29.05.2020 № 97</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Локальные НПА/Приказ от 21.06.2021 № 97.pdf" target="_blank">Приказ от 21.06.2021 № 97</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Локальные НПА/Приказ от 22.09.2023 № 143.pdf" target="_blank">Приказ от 22.09.2023 № 143</a></p>
                        <p><a href="/docs/10. Противодействие коррупции/Локальные НПА/Приказ от 29.09.2023 № 148.pdf" target="_blank">Приказ от 29.09.2023 № 148</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-11" role="tabpanel" aria-labelledby="docs-btn-tab-11">
                    <div class="text-block">
                        <p><a href="/docs/11. Антитеррористическая защищенность/Комплексный план противодействия идеологии торроризма 2024-2028.pdf" target="_blank">Комплексный план противодействия идеологии торроризма 2024-2028</a></p>
                        <p><a href="/docs/11. Антитеррористическая защищенность/Перечень мероприятий по противодействию терроризму 2024-2028.pdf" target="_blank">Перечень мероприятий по противодействию терроризму 2024-2028</a></p>
                        <p><a href="/docs/11. Антитеррористическая защищенность/План дополнительных мероприятий на 2 квартал 2024.pdf" target="_blank">План дополнительных мероприятий на 2 квартал 2024</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="docs-tab-panel-12" role="tabpanel" aria-labelledby="docs-btn-tab-12">
                    <div class="text-block">
                        <p><a href="/docs/12. Независимая оценка качества/Порядок подачи обращения, жалобы, отзыва.pdf" target="_blank">Порядок подачи обращения, жалобы, отзыва</a></p>
                        <p><a href="/docs/12. Независимая оценка качества/Рейтинг организаций социального обслуживания Самарской области.pdf" target="_blank">Рейтинг организаций социального обслуживания Самарской области</a></p>
                        <p><a href="/docs/12. Независимая оценка качества/презентация лучших практик.docx" target="_blank">Рейтинг организаций социального обслуживания Самарской области</a></p>
                        <p><a href="/docs/12. Независимая оценка качества/оставить отзыв на сайте httpsbus.gov.ru.docx" target="_blank">Рейтинг организаций социального обслуживания Самарской области</a></p>
                        <h4 class="text-center">2021</h4>
                        <p><a href="/docs/12. Независимая оценка качества/2021/Независимая оценка качества условий оказания услуг организациями социального обслуживания 2021.pdf" target="_blank">Рейтинг организаций социального обслуживания Самарской области</a></p>
                        <h4 class="text-center">2019</h4>
                        <p><a href="/docs/12. Независимая оценка качества/2019/Количественные результаты независимой оценки качества оказания услуг организациями 2019.xls" target="_blank">Рейтинг организаций социального обслуживания Самарской области</a></p>
                        <p><a href="/docs/12. Независимая оценка качества/2019/Отчет по сбору и обощению информации о качестве условий оказания услуг 2019.pdf" target="_blank">Рейтинг организаций социального обслуживания Самарской области</a></p>
                        <p><a href="/docs/12. Независимая оценка качества/2019/План по устранению недостатков 2019.pdf" target="_blank">Рейтинг организаций социального обслуживания Самарской области</a></p>
                        <h4 class="text-center">2017</h4>
                        <p><a href="/docs/12. Независимая оценка качества/2017/Итоговый отчет по результатм проведения независимой оценки качества 2017.pdf" target="_blank">Рейтинг организаций социального обслуживания Самарской области</a></p>
                        <p><a href="/docs/12. Независимая оценка качества/2017/Итоговый рейтинг организаций полустационарного социального обслуживания 2017.pdf" target="_blank">Рейтинг организаций социального обслуживания Самарской области</a></p>
                        <p><a href="/docs/12. Независимая оценка качества/2017/Предложения по улучшению качества работы организаций социального обслуживания населения 2017.pdf" target="_blank">Рейтинг организаций социального обслуживания Самарской области</a></p>
                        <h4 class="text-center">2016</h4>
                        <p><a href="/docs/12. Независимая оценка качества/2016/Итоговый рейтинг организаций социального обслуживания населения 2016.pdf" target="_blank">Рейтинг организаций социального обслуживания Самарской области</a></p>
                        <p><a href="/docs/12. Независимая оценка качества/2016/Отчет по проведению независимой оценки качества 2016.pdf" target="_blank">Рейтинг организаций социального обслуживания Самарской области</a></p>
                        <p><a href="/docs/12. Независимая оценка качества/2016/Предложения по улучшению качества работы организаций социального обслуживания населения 2016.pdf" target="_blank">Рейтинг организаций социального обслуживания Самарской области</a></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        // $(document).ready(function() {
        //     if (hash = window.location.hash) {
        //         document.getElementById(hash).click();
        //         // $('button[id="' + hash + '"]').tab('show');
        //     }
        // });
        // var someTabTriggerEl = document.querySelector(window.location.hash);
        // var tab = new bootstrap.Tab(someTabTriggerEl);
        // tab.show();


        let tab = document.querySelectorAll('.docs-tab');


        tab.forEach(item => {
            item.addEventListener('click', e => {

                tab.forEach(e => e.classList.remove('active'));
                e.target.classList.add('active');
                let mainNav = document.querySelector('#mainNav');
                let mainNavHeight = mainNav.offsetHeight;
                // head.scrollIntoView({
                //     behavior: 'smooth',
                //     block: 'start',
                //     inline: 'start'
                // })
                if (mainNav.classList.contains('is-pinned')) {
                    if (window.innerWidth >= 768) {
                        window.scrollTo({
                            top: mainNavHeight,
                            left: 0,
                            behavior: 'smooth'
                        });
                    } else {
                        window.scrollTo({
                            top: document.querySelector('#v-pills-tab').offsetHeight +
                                document.querySelector('#v-pills-tab').offsetTop - mainNavHeight,
                            left: 0,
                            behavior: 'smooth'
                        });
                    }
                }

            });
        });

        if (window.location.hash) {
            let hashValue = window.location.hash.slice(1);
            tab.forEach(e => e.classList.remove('active'));
            //document.getElementById(hashValue).click();
            $(document).ready(function() {
                $('.nav-pills button[id="' + hashValue + '"]').tab('show');
            });
            history.replaceState(null, null, ' ');

            /*var tab = new bootstrap.Tab(document.getElementById(hashValue));
            tab.show()*/
            /*document.getElementById(hashValue).click();*/
        }
    </script>




    <?php include "../containers/footer.php"; ?>

</body>

</html>