<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
    <div class="container">
        <?php require_once 'assets/fragments/header-nav.php';?>

        <main id="contacts" class="bg-white">
            <h1 class="title">Наш адрес на карте</h1>
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac259d81580eb5537df277fd7cfd9ac731ff9996c45e7cab9793e3034d04985ca&amp;source=constructor" height="400" frameborder="0" class="map"></iframe>
            <div class="info-box blue">
                <div class="item">
                    <img src="assets/images/contacts-white-phone.svg" alt="телефон" />
                    <div>
                        <span>Телефон:</span>
                        <a href="tel:+79212132312">+7(921) 213-23-12</a>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/contacts-white-mail.svg" alt="почта" />
                    <div>
                        <span>Почта:</span>
                        <a href="mailto:admin@mail.ru">admin@mail.ru</a>
                    </div>
                </div>
            </div>

            <form action="" method="post" class="form">
                <div class="col-left">
                    <h3 class="title">OOO Glass House</h3>
                    <p>ИНН 1231231412 ОГРН 1231231412<br/>КПП 1231231412</p>
                    <h3 class="title">Генеральный директор</h3>
                    <p>Александр Долоков</p>
                    <h3 class="title">Юридический адрес</h3>
                    <address>г. Дамаск, ул. Артемьева, д.25, корпус 1, БЦ Ледеб, 4 этаж, офис 404</address>
                    <h3 class="title">Фактический адрес</h3>
                    <p>г. Дамаск, ул. Артемьева, д.25, корпус 1, БЦ Ледеб, 4 этаж, офис 404</p>
                    <h3 class="title">Любая другая информация</h3>
                    <p>Например всякие реквизиты банка</p>
                </div>
                <div class="col-right">
                    <h2 class="title">Связаться с нами</h2>
                    <div class="rows">
                        <div class="field-box">
                            <label for="name">Ваше имя</label>
                            <input id="name" type="text" name="name" placeholder="Например: Денис" />
                        </div>
                        <div class="field-box">
                            <label for="phone">Ваш телефон</label>
                            <input id="phone" type="tel" name="name" placeholder="Например: 8 921 232 23 11" />
                        </div>
                    </div>
                    <div class="field-box">
                        <label for="message">Сообщение</label>
                        <textarea id="message" placeholder="Любой текст"></textarea>
                    </div>
                    <button class="btn-orange">Отправить</button>
                </div>

            </form>
        </main>

        <?php require_once 'assets/fragments/section-last-comments.php'?>

    </div>
    <?php require_once 'assets/fragments/footer.php';?>
</body>
</html>