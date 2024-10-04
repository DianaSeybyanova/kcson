<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="КЦСОН | Вопросы" />
    <link rel="icon" href="../images/logo_white.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>КЦСОН | Вопросы</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php include "../containers/navigation.php"; ?>

    <main class="main container pt-3 w-75">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Вопросы</li>
            </ol>
        </nav>


        <section class="first">
            <div class="container-small first__inner">
                <div class="about__title"><strong>Вопросы</strong></div>


                <div class="text-block">
                    <p>В данном разделе формируются ответы на самые распространенные вопросы. Если Вам необходимо получить ответ на Ваш вопрос в короткие сроки или Вы не хотите, чтобы Ваш вопрос публиковался на сайте, просим Вас воспользоваться формой обратной связи на нашем сайте (ответ придет Вам на электронную почту или наш специалист свяжется с Вами по телефону).
                    </p>

                </div>
            </div>
        </section>

        <section>
            <form class="row g-3  ">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">ФИО</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Email</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12 ">
                    <label for="inputAddress" class="form-label">Ваш вопрос</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="">
                </div>

                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Прислать уведомление об ответе
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
            </form>
        </section>

    </main>




    <?php include "../containers/footer.php"; ?>
</body>

</html>