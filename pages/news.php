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
      <link rel="stylesheet" href="http://seybyanova.ru/dist/css/bvi.min.css" type="text/css">
      <link rel="stylesheet" href="../css/style.css">

      <script language="JavaScript" type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script language="JavaScript" type="text/javascript" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script language="JavaScript" type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

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
          <div>
              <h2 class="text-center pb-3">Новости</h2>
          </div>

          <?php
            $mysqli = @new mysqli('localhost', 'u2606745_default', 'cHWcis8Iy3qIBe84', 'u2606745_test_data06112024');
            $mysqli->query('SET NAMES utf8');
            /*$mysqli = @new mysqli('localhost', 'u2606745_test_us', 'test_semya', 'u2606745_test_semya');*/
            if (mysqli_connect_errno()) {
                /*echo "Подключение невозможно: " . mysqli_connect_error();*/
            }
            $result_set = $mysqli->query('SELECT * FROM `lq_news` ORDER BY `lq_news`.`id` DESC');
            ?>



          <div class="row row-cols-1 row-cols-md-3 g-2 g-lg-5">
              <?php
                while ($row = $result_set->fetch_assoc()) {
                    /*print_r($row);
            echo "<br />";*/

                ?>
                  <div class="col">
                      <a href="/pages/news_view.php?id=<?php print_r($row["id"]); ?>">
                          <div class="card card-hover rounded-3 h-100">
                              <!-- <div class="articles__blocks-image2">
                                  <img src="/images/news.png" alt="" class=" blocks__image">
                              </div> -->
                              <div class=" text-center p-1">
                                  <small class="text-muted"><?php print_r(DateTime::createFromFormat('Y-m-d H:i:s', $row["date"])->format('d.m.Y')); ?></small>
                              </div>
                              <div class="card-body pt-0">
                                  <h4 class="card-title text-center"><?php print_r(html_entity_decode($row["name"])); ?></h4>
                                  <!--<p class="card-text fw-bold"><?php /*print_r(html_entity_decode($row["name"]));*/ ?></p>-->
                                  <p class="card-text text-muted"><?php print_r(html_entity_decode($row["text_m"])); ?></p>
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

          <!-- <section class="articles mt-4">
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
          </section> -->




      </main>







      <?php include "../containers/footer.php"; ?>

  </body>

  </html>