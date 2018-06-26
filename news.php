<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>

    <div class="container">

        <?php require_once 'assets/fragments/header-nav.php'?>

        <aside id="breadcrumbs">
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
        </aside>

        <div id="pagination">
            <div class="col-left">
                <span>Показано 1 - 6 из 25</span>
                <ol class="pagination-pages">
                    <li class="prev"></li>
                    <li class="active"><a href="">2</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li class="next"></li>
                </ol>
            </div>
            <div class="col-right">
                <span>Результатов:</span>
                <ol class="results pagination-pages">
                    <li class="active"><a href="">6</a></li>
                    <li><a href="">12</a></li>
                    <li><a href="">18</a></li>
                </ol>
            </div>
            <div class="clear"></div>
        </div>

        <main id="page-news-list">
            <?php for($i = 0; $i < 6; $i++):?>
            <article class="item">
                <div class="photo" style="background-image: url('assets/images/news/1.jpg');">
                    <div class="filter">
                        <h2>Название какой либо новости которое может умещаться</h2>
                        <p>Наш завод окон и дверей, создан на базе предприятие ООО «АПФ «Изумруд», работающее на строительном рынке Республики Крым с 9 января 1990 года.</p>
                    </div>
                </div>
                <div class="panel">
                    <div class="published">
                        <span>Опубликовано:</span>
                        <time datetime="1923-01-12">12 февраля 1923</time>
                    </div>
                    <div class="category">
                        <span>Категория:</span>
                        <span>Советы эксперта</span>
                    </div>
                    <a href="" class="btn-orange">Читать</a>
                </div>
            </article>
            <?php endfor;?>
        </main>

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
            <a href="" class="btn-gray">Показать еще 4 проекта</a>
            <div class="clear"></div>
        </div>

    </div>
    <?php require_once 'assets/fragments/footer.php';?>


</body>
</html>

