<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="КЦСОН | Поиск по сайту" />
    <link rel="icon" href="../images/logo_white.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>КЦСОН | Поиск по сайту</title>
    <link rel="stylesheet" href="http://seybyanova.ru/dist/css/bvi.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css">

    <script language="JavaScript" type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>

<body>
    <?php include "../containers/navigation.php"; ?>

    <main class="main container pt-3 w-75">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Поиск по сайту</li>
            </ol>
        </nav>


        <section class="first">
            <div class="container-small first__inner">
                <div class="about__title"><strong>Поиск по сайту</strong></div>

            </div>
        </section>

        <section>
            <form class="d-flex mt-5" target="_blank" method="POST">
                <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск">
                <input type="submit" value="Поиск" id="submitBtn" />

                <!-- <button class="btn btn-outline-success" type="submit">Поиск</button> -->
                <script>
                    document.getElementById("submitBtn").addEventListener("click", myFunction);

                    function myFunction() {
                        window.location.href = "http://localhost:63249/index.php";
                    }
                </script>
            </form>

        </section>

    </main>




    <?php include "../containers/footer.php"; ?>
</body>

</html>