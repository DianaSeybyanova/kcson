  <!DOCTYPE html>
  <html lang="ru">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="description" content="КЦСОН | Сервисы" />
      <link rel="icon" href="../images/logo_white.png">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <title>КЦСОН | Сервисы</title>
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

          <?php
            if (isset($_GET["id"])) {
                $mysqli = @new mysqli('localhost', 'u2606745_default', 'cHWcis8Iy3qIBe84', 'u2606745_test_data06112024');
                $mysqli->query('SET NAMES utf8');

                /*$mysqli = @new mysqli('localhost', 'u2606745_test_us', 'test_semya', 'u2606745_test_semya');*/
                if (mysqli_connect_errno()) {
                    /*echo "Подключение невозможно: " . mysqli_connect_error();*/
                }

                /*$result_set = $mysqli->query('SELECT * FROM `lq_articles` ORDER BY `lq_articles`.`id` DESC');*/

                $id = $mysqli->real_escape_string($_GET["id"]);
                $sql = "SELECT * FROM `services` WHERE id = '$id'";

                if ($result = $mysqli->query($sql)) {
                    if ($result->num_rows > 0) {
                        foreach ($result as $row) {
                            $name = $row["name"];
                            //$title = $row["title"];
                            $text = $row["text"];

            ?>

                          <nav aria-label=" breadcrumb">
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="../index.php">Главная</a></li>
                                  <li class="breadcrumb-item"><a href="/pages/services.php">Сервисы</a></li>
                                  <li class="breadcrumb-item active" aria-current="page"><?php print_r(html_entity_decode($name)); ?></li>
                              </ol>
                          </nav>
                          <div>
                              <h2 class="text-center pb-3"><?php print_r(html_entity_decode($name)); ?></h2>
                          </div>
                          <div class="text-block">
                              <?php print html_entity_decode($text);
                                /*echo mb_convert_encoding( htmlspecialchars( $text, ENT_QUOTES, 'UTF-8' ), 'HTML-ENTITIES', 'UTF-8' );*/
                                /*echo mb_convert_encoding($text, 'utf-8', 'utf-8');*/
                                /*print $text;*/
                                /*echo htmlentities($text, ENT_QUOTES, 'UTF-8');*/ ?>
                          </div>

          <?php
                        }
                    } else {
                        echo '<nav aria-label=" breadcrumb">
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="../index.php">Главная</a></li>
                                  <li class="breadcrumb-item"><a href="/pages/media.php">Медиа</a></li>
                                  <li class="breadcrumb-item"><a href="/pages/articles.php">Новости</a></li>
                              </ol>
                          </nav>
                        <div>Статья не найдена</div>';
                    }
                    $result->free();
                } else {
                    echo "Ошибка: " . $mysqli->error;
                }
                $mysqli->close();
            }
            ?>

      </main>







      <?php include "../containers/footer.php"; ?>

  </body>

  </html>