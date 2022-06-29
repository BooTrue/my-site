<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <style>
        <?php include 'css/reg_style.css'; ?>
    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="description" content="Развивай и продвигай свой бизнес в интернете. Закажи современный сайт, который будет корректно отображаться на всех устройствах.">
    <meta name="keywords" content="создание сайтов на заказ, купить сайт дешево, купить сайт недорого, закзать сайт">
    <title>Регистрация</title>
</head>
<body>
<div class="wrapper">
    <div class="registration">
        <div class="container">
            <div class="registration__titel title">
                <h2 id="contact">Регистрация нового пользователя</h2>
            </div>
            <form class="reg" method="get" name="registration" action="/moduls/registration.php">
                <div class="reg__data">
                    <input class="data_firstname" type="text" placeholder="Имя" id="firstname" name="firstname">
                    <input class="data_lastname" type="text" placeholder="Фамилия" id="lastname" name="lastname">
                    <input class="data_email" type="email" placeholder="E-mail" id="email" name="email">
                    <input class="data_password" type="password" placeholder="Пароль" id="password" name="password">
                    <input class="data_password" type="password" placeholder="Повторите пароль" id="dump-password" name="dump-password">
                </div>
                <div class="reg__btm">
                    <input type="submit" id="submit" name="submit" value="Зарегистрироваться">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>