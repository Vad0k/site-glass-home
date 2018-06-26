<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="container">

    <?php require_once 'assets/fragments/header-nav.php';?>

    <!-- СЛАЙДЕР НА ГЛАВНОЙ -->
    <div id="index-slider">
        <ul class="slider">
            <li class="blue">
                <h1 class="title">Настала пора менять окна и двери?</h1>
                <p class="description">Не следует, однако, забывать о том, что постоянный количественный рост и сфера нашей активности требует от нас анализа модели развития! </p>
                <img src="assets/images/sliders/window.png" alt="Заказать окно" class="image" height="384" />
            </li>
            <li class="orange">
                <h2 class="title">Настала пора менять окна и двери?</h2>
                <p class="description">Не следует, однако, забывать о том, что постоянный количественный рост и сфера нашей активности требует от нас анализа модели развития! </p>
                <img src="assets/images/sliders/window.png" alt="Заказать окно" class="image" height="384" />
            </li>
            <li class="orange">
                <h2 class="title">Настала пора менять окна и двери?</h2>
                <p class="description">Не следует, однако, забывать о том, что постоянный количественный рост и сфера нашей активности требует от нас анализа модели развития! </p>
                <img src="assets/images/sliders/window.png" alt="Заказать окно" class="image" height="384" />
            </li>
            <li class="blue">
                <h2 class="title">Настала пора менять окна и двери?</h2>
                <p class="description">Не следует, однако, забывать о том, что постоянный количественный рост и сфера нашей активности требует от нас анализа модели развития! </p>
                <img src="assets/images/sliders/window.png" alt="Заказать окно" class="image" height="384" />
            </li>
        </ul>

        <div class="info">
            <p>Что будем менять?</p>
            <a href="" class="btn-white"><img src="assets/images/index-slider-windows.svg" alt="Окна" />Окна</a>
            <a href="" class="btn-white"><img src="assets/images/index-slider-doors.svg" alt="Двери" />Двери</a>
            <a href="">Перейти в каталог</a>
        </div>

    </div>
    <!-- СЛАЙДЕР НА ГЛАВНОЙ -->

    <!-- БЛОКИ ИНФОРМАЦИИ И ТЕЛЕФОН -->
    <div id="index-section-info-1" class="section-info-blocks">
        <article class="item history">
            <h3 class="title">Мы устанавливаем окна с 1990 года и делаем это качественно, и с душой.</h3>
            <p>Мы с трепетом относимся к каждому клиенту и стремимся превзойти ожидания по каждому проекту. Если у васвозникли вопросы, мы вам позвоним и поможем.</p>
            <form action="#" method="post" class="form-phone">
                <img src="assets/images/index-phone-fast-call.svg" alt="телефон" class="phone" />
                <div class="input-row">
                    <div class="error"><span>Вы ввели не все цифры</span></div>
                    <input type="tel" placeholder="+7(999) 999-23-21" name="phone">
                </div>
                <button class="btn-orange">Заказать звонок</button>
            </form>
        </article>
        <article class="item orange girl">
            <h3 class="title">Расчет стоимости<br />окон онлайн</h3>
            <a href="" class="btn-white">Расчитать стоимость</a>
        </article>
    </div>
    <!-- БЛОКИ ИНФОРМАЦИИ И ТЕЛЕФОН -->

    <!-- БЛОКИ ПАГИНАЦИИ И НАВИГАЦИИ -->
    <header id="breadcrumbs">
        <a href="" class="btn-blue">Перейти в каталог</a>
        <nav class="top">
            <ul>
                <li><a href="">Полезно знать</a></li>
                <li><a href="">Новости</a></li>
                <li><a href="">Название какой либо статьи</a></li>
            </ul>
        </nav>
        <nav class="bottom">
            <a href="">Окна</a>
            <a href="" >Двери</a>
            <a href="">Балконы и лоджии</a>
            <a href="" class="active">Профили</a>
            <a href="">Подоконники</a>
            <a href="">Откосы</a>
            <a href="">Безопасность для детей</a>
        </nav>
    </header>
    <!-- БЛОКИ ПАГИНАЦИИ И НАВИГАЦИИ -->

    <!-- СЕКЦИЯ ТОВАРОВ -->
    <div id="product-list-window">
        <article class="item">
            <img src="assets/images/products/windows/window-enwin.jpg" alt="окно Enwin" />
            <h3>Двухстворчатое окно<br /><span>Профиль - </span>Enwin</h3>
            <ul>
                <li>6 камер</li>
                <li>Тройной стеклопакет</li>
            </ul>
            <div class="panel">
                <div>Цена: <span>10 650 ₽</span></div>
                <a href="" class="btn-orange">Заказать</a>
            </div>
        </article>

        <article class="item">
            <img src="assets/images/products/windows/window-enwin.jpg" alt="" />
            <h3>Двухстворчатое окно<br /><span>Профиль - </span>Enwin</h3>
            <ul>
                <li>6 камер</li>
                <li>Тройной стеклопакет</li>
            </ul>
            <div class="panel">
                <div>Цена: <span>10 650 ₽</span></div>
                <a href="" class="btn-orange">Заказать</a>
            </div>
        </article>

        <article class="item">
            <img src="assets/images/products/windows/window-enwin-3x.jpg" alt="" />
            <h3>Двухстворчатое окно<br /><span>Профиль - </span>Enwin</h3>
            <ul>
                <li>6 камер</li>
                <li>Тройной стеклопакет</li>
            </ul>
            <div class="panel">
                <div>Цена: <span>10 650 ₽</span></div>
                <a href="" class="btn-orange">Заказать</a>
            </div>
        </article>

    </div>
    <!-- СЕКЦИЯ ТОВАРОВ -->

    <?php require_once 'assets/fragments/block-free-delivery.php';?>

    <!-- БЛОК О КОМПАНИИ И ТЕХНОЛОГИЯ ПРОИЗВОДСТВА -->
    <div id="index-section-info-2" class="section-info-blocks">
        <article class="item">
            <h3 class="title">О нашей компании<br />Glass House</h3>
            <p>Уважаемые клиенты, благодарю Вас за сотрудничество с компанией “Glass house”. Ежедневно специалисты нашей компании устанавливают в среднем по 120 окон в день.</p>
            <p>К сожалению, у меня нет возможности обзванивать всех клиентов нашей компании, но мне очень важно знать Ваше мнение о качестве предоставляемых услуг и о работе всех специалистов компании.</p>
            <a href="" class="btn-blue">Подробне о нас</a>
        </article>
        <article class="item blue technology">
            <ul>
                <li>
                    <img src="assets/images/index-technology.svg" alt="производство окон" />
                    <h4>Собственное производство</h4>
                    <p>Уважаемые клиенты, благодарю Вас за сотрудничество с компанией “Glass house”.</p>
                </li>
                <li>
                    <img src="assets/images/index-rocket.svg" alt="скорость выполнения" />
                    <h4>Работаем с 1990 года</h4>
                    <p>Уважаемые клиенты, благодарю Вас за сотрудничество с компанией “Glass house”.</p>
                </li>
                <li>
                    <img src="assets/images/index-engineer.svg" alt="профессионал, инженер" />
                    <h4>Команда профессионалов</h4>
                    <p>Уважаемые клиенты, благодарю Вас за сотрудничество с компанией “Glass house”.</p>
                </li>
            </ul>

        </article>
    </div>
    <!-- БЛОК О КОМПАНИИ И ТЕХНОЛОГИЯ ПРОИЗВОДСТВА -->

    <!-- БЛОК УСЛУГ -->
    <div id="index-section-info-3" class="section-info-blocks">
        <article class="item">
            <h3 class="title">Мы предоставляем следующие<br />продукты и услуги</h3>
            <p>Уважаемые клиенты, благодарю Вас за сотрудничество с компанией “Glass house”. Ежедневно специалисты нашей компании устанавливают в среднем по 120 окон в день.</p>
            <p>К сожалению, у меня нет возможности обзванивать всех клиентов нашей компании, но мне очень важно знать Ваше мнение о качестве предоставляемых услуг и о работе всех специалистов компании.</p>
        </article>
        <article class="item service">
            <ol>
                <li>Металлопластиковые окна</li>
                <li>Металлопластиковые двери</li>
                <li>Остекленение балконов</li>
                <li>Производство офисных перегородок</li>
                <li>Беседки из ПВХ</li>
                <li>Ремонт окон ПВХ</li>
                <li>Установка пластиковых окон</li>
                <li>Доставка</li>
            </ol>
        </article>
    </div>
    <!-- БЛОК УСЛУГ -->

    <?php require_once 'assets/fragments/slider-work.php';?>


    <?php require_once 'assets/fragments/block-create-windows-and-doors.php';?>

    <?php require_once 'assets/fragments/section-last-comments.php';?>

    <!-- ЗАЯВКА НА ВСЁ -->
    <aside id="section-order-all">
        <ol>
            <li>
                <img src="assets/images/icon-order-calc.svg" alt="щеты" />
                <h5 class="title">Заявка на расчет<br />стоимости</h5>
                <a href="">Заказать расчет</a>
            </li>
            <li>
                <img src="assets/images/icon-order-size.svg" alt="линейка, метр" />
                <h5 class="title">Заявка на вызов<br />замерщика</h5>
                <a href="">Заявка на вызов замерщика</a>
            </li>
            <li>
                <img src="assets/images/icon-order-calc-full.svg" alt="калькулятор" />
                <h5 class="title">Калькулятор<br />стоимости</h5>
                <a href="">Расчитать стоимость</a>
            </li>
            <li>
                <img src="assets/images/icon-order-phone.svg" alt="телефон" />
                <h5 class="title">Перезвоните<br />мне</h5>
                <a href="">Заказать звонок</a>
            </li>
        </ol>
    </aside>
    <!-- ЗАЯВКА НА ВСЁ -->
</div>

<?php require_once('assets/fragments/footer.php');?>




<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="assets/js/mobilyslider.js"></script>
<script src="assets/js/functions.js"></script>
</body>
</html>