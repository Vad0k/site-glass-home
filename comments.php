<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="assets/js/mobilyslider.js"></script>
    <script src="assets/js/functions.js"></script>
</head>
<body>



<div class="container">
    <?php require_once 'assets/fragments/header-nav.php';?>

    <aside id="breadcrumbs">
        <nav class="top">
            <ul>
                <li><a href="">Отзывы</a></li>
            </ul>
        </nav>
        <nav class="bottom">
            <a href="" class="active">Отзывы</a>
        </nav>
    </aside>


    <div id="comments">
        <div class="col-right">
            <div class="banner blue">
                <h3 class="title">Оставить отзыв<br/>о нашей работе</h3>
                <a href="" class="btn-orange">Написать</a>
                <img src="assets/images/comment-girl-builder.png" alt="дувушка строитель" />
            </div>
            <div class="banner orange">
                <h3 class="title">Посмотреть нашу<br/>продукцию</h3>
                <a href="" class="btn-white">Перейти в каталог</a>
                <img src="assets/images/comment-window.png" alt="окно" />
            </div>
        </div>

        <article class="list">
            <?php for($i = 0; $i < 5; $i++):?>
            <section class="item">
                <h2>Анастасия Николаева</h2>
                <p>Уважаемые клиенты, благодарю Вас за сотрудничество с компанией “Glass house”. Ежедневно специалисты нашей компании устанавливают в среднем по 120 окон в день. К сожалению, у меня нет возможности обзванивать всех клиентов нашей компании, но мне очень важно знать Ваше мнение о качестве предоставляемых услуг и о работе всех специалистов компании.</p>
                <footer>
                    <time datetime="1923-01-12">12 февраля 1923</time>
                    <address>Симферополь</address>
                </footer>
            </section>
            <?php endfor;?>
        </article>

    </div>


    <div id="pagination-bottom">
        <span>Показано 1 - 6 из 25</span>
        <ol class="pagination-pages">
            <li class="prev"></li>
            <li class="active"><a href="">2</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li class="next"></li>
        </ol>
        <span>Или</span>
        <a href="" class="btn-gray">Показать еще 4 отзыва</a>
        <div class="clear"></div>
    </div>


</div>

<?php require_once 'assets/fragments/footer.php';?>
</body>
</html>