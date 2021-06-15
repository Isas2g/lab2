<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/Обнуляющий файл.css">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Хусаинов Ренат Ришатович, группа 201-321. 2 лаба</title>
</head>

<body>
    <header class="header">
        <div class="container--lg">
            <div class="header__inner">
                <div class="header__logo">
                    <img src="./images/logo-neg.png" alt="Логотип">
                </div>
                <div class="header__info">
                    <p>Хусаинов Ренат Ришатович, группа 201-321. 2 лаба, вариант №1</p>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="container--md">
            <div class="main__inner">
                <?php
                $x = -10;
                $encounting = 20;
                $step = 1;
                $type = 'E';
                $min_value = 10;
                $max_value = 20;
                $count = 0;
                $i = 0;
                $f = 0;

                if ($type == 'B')
                    echo '<ul>';

                if ($type == 'C')
                    echo '<ol>';

                if ($type == 'D')
                    echo '<table border="1px" style="border-collapse: collapse;" cellpadding="10px">';

                if ($type == 'E')
                    echo '<div>';

                for ($i = 0; $i < $encounting; $i++, $x += $step) {
                    if ($x <= 10)
                        $f = 10 * $x - 5;
                    else 
                        if ($x < 20)
                        $f = ($x + 3) * $x * $x;
                    else {
                        if ($x == 25)
                            $f = 'error';
                        else
                            $f = 3 / ($x - 25) + 2;
                    }


                    if ($type == 'A') {
                        echo 'f(' . $x . ')=' . $f;
                        if ($i < $encounting - 1)
                            echo '<br>';
                    } else
                        if ($type == 'B') {

                        echo '<li>f(' . $x . ')=' . $f . '</li>';
                    } else
                        if ($type == 'C') {
                        echo '<li>f(' . $x . ')=' . $f . '</li>';
                    } else
                        if ($type == 'D') {
                        $count = $count + 1;
                        echo '<tr><td>' . $count . '</td><td>' . 'f(' . $x . ')=' . $f . '</td></tr>';
                    } else
                        if ($type == 'E') {
                        echo '<p>f(' . $x . ')=' . $f . '</p>';
                    }
                }
                if ($type == 'B')
                    echo '</ul>';
                if ($type == 'C')
                    echo '</ol>';
                if ($type == 'D')
                    echo '</table>';
                if ($type == 'E')
                    echo '</div>';
                ?>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container--lg">
            <div class="footer__inner">
                <p>
                    <?php
                    echo 'Тип верстки: ' . $type;
                    ?>
                </p>
            </div>
        </div>
    </footer>
</body>

</html>