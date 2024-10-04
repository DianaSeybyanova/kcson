  <!DOCTYPE html>
  <html lang="ru">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="description" content="КЦСОН | Новости" />
      <link rel="icon" href="../images/logo_white.png">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <title>КЦСОН | Новости</title>
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
                  <li class="breadcrumb-item active" aria-current="page">Новости</li>
              </ol>
          </nav>
          <div class="about__title pb-4"><strong>Новости</strong></div>

          <section class="articles mt-4">
              <div class="container-small articles__inner">
                  <div class="articles__blocks">
                      <a href="" class="articles__blocks-link">
                          <div class="articles__blocks-image"><img src="/images/news.png" alt="" class="blocks__image"></div>
                          <div class="articles__blocks-text">Учимся, играючи</div>
                          <div class="articles__blocks-date">12 апреля 2024</div>
                      </a>
                      <a href="" class="articles__blocks-link">
                          <div class="articles__blocks-image"><img src="/images/news.png" alt="" class="blocks__image"></div>
                          <div class="articles__blocks-text">Обман и игра воображения</div>
                          <div class="articles__blocks-date">12 апреля 2024</div>
                      </a>
                      <a href="" class="articles__blocks-link">
                          <div class="articles__blocks-image"><img src="/images/news.png" alt="" class="blocks__image"></div>
                          <div class="articles__blocks-text">Столкнулись с жестоким обращением?</div>
                          <div class="articles__blocks-date">09 апреля 2024</div>
                      </a>
                  </div>
              </div>
          </section>




      </main>







      <?php include "../containers/footer.php"; ?>

  </body>

  </html>