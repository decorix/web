<?php
 $db = new PDO("mysql:host=std-1957.ist.mospolytech.ru;dbname=std_1957_web", "std", "28102017");
 $info = [];
 if($query = $db->query("SELECT * FROM tshirt")) {
     $info = $query->fetchAll(PDO::FETCH_ASSOC);
 } else {
    print_r($db->errorInfo());
}
//  $connect = mysqli_connect('std-1957.ist.mospolytech.ru', 'std', '28102017', 'std_1957_web');
//  if (!$connect) {
//      echo 'eror';
//  }
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles/styles.css" />
    <title>Футболки</title>
</head>

<body>
    <div class="page">
        <header>
            <div class="header_section">
                <div class="headerlogo">RD</div>
                <div class="header_item headerButton">
                    <a href="index.html">Главная</a>
                </div>
                <div class="header_item headerButton">
                    <a href="index2.html">Каталог</a>
                </div>
                <div class="header_item headerButton">
                    <a href="index3.html">О нас</a>
                </div>
            </div>
            <div class="header_section">
                <div class="header_item headerButton">
                    <a href="index4.html">Вход/Регистрация</a>
                </div>
            </div>
        </header>

        <footer>
            <div class="information">
                <div class="contacts">
                    <p>Contacts: <br> +79212360692
                        <br> polevg2015@yandex.ru
                    </p>
                </div>
                <div class="social-network">
                    <p>Social network:
                        <ul class="network">
                            <li><a class="vk-network" href="https://vk.com/jpull1" target="_blank">Vk</a></li>
                            <li><a class="github-network" href="https://github.com/decorix" target="_blank">GitHub</a></li>
                        </ul>
                    </p>
                </div>

            </div>
            <div class="copyright">
                <p>(С) 2022 Поляков Е.А.</p>
            </div>
        </footer>
    </div>
</body>

</html>