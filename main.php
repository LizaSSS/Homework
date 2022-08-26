<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пробный проект по PHP</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <div class="flex-container">

        <div class="header">
            <?php include 'logo.inc.php' ?>
            <?php include 'menu.inc.php' ?>
        </div>

        <div class="about_me">

            <h1> <?php echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php echo '<img src="./img/php.jpg">'; ?>
                </div>



                <div class="fullname">
                    <p> Меня зовут
                        <?php echo $name, ' ', $surname . '<br>';

                        echo 'Город', ' ', $city; ?>
                    </p>

                    <p> Мне
                        <?php echo $age;   ?>
                        лет </p>
                    <p> Я научилась создавать переменные </p>
                    <p> Изучила простые операции с ними </p>
                    <p> И именно так я выглядела, пока пыталась понять, что к чему при создании этой странички </p>
                </div>
            </div>

            <div class="knowledge">

                <?php include 'knowledge.inc.php'; ?>
                <?php echo $a, ' ', $b, ' ', $c; ?> <br>

                <?php
                $a = 7;
                $b = 8;
                $c = $a * $b;
                echo 'Операция умножения ', $a, ' и ', $b, ' равна = ', $c;
                ?>
                <br>
                <?php
                echo $d;
                ?>

            </div>

            <div class="article">
                <p class="text">

                    <strong>Изученное во втором и третьем блоках<br>
                        <br>
                        Циклы и условия <br>
                        Функциональное программирование <br>
                        HTML <br>
                        CSS <br>
                        Java Script <br>
                        PHP <br>
                </p>
            </div>

        </div>

        <?php include 'footer.inc.php' ?>

    </div>

</body>

</html>