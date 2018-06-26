<!doctype html>
<html lang="ru">
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
                    <li><a href="">Портфолио</a></li>
                </ul>
            </nav>
            <nav class="bottom">
                <a href="" class="active">Галерея наших работ</a>
            </nav>
        </aside>


        <?php require_once 'assets/fragments/slider-work.php';?>



        <aside id="pagination-projects" class="pagination-filter">
            <nav>
                <a class="active" href="">Стандартные окна</a>
                <a href="">Нестандартные окна</a>
            </nav>

            <form action="" method="post" class="select">
                <label for="profile">Профиль:</label>
                <select name="profile" id="profile">
                    <option>Категория</option>
                    <option>Категория</option>
                    <option>Категория 5s</option>
                </select>

                <select name="year">
                    <option>2018</option>
                    <option>2017</option>
                    <option>2016</option>
                </select>
            </form>

            <div class="col-right">
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
        </aside>



        <main id="catalog-projects">
            <div class="gallery">
                <?php for($i = 0; $i < 10; $i++):?>

                    <div class="item">
                        <div class="image" style="background-image: url('assets/images/gallery/1.jpg');">
                            <div class="box">
                                <small>Еще 5 фото</small>
                                <a href="">Смотреть все</a>
                            </div>
                            <h2><span>Какое нибудь название проекта Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, voluptas.</span></h2>
                        </div>

                        <div class="info">
                            <div>
                                <small>Категория:</small>
                                <span>Балконы</span>
                            </div>
                            <div>
                                <small>Дата:</small>
                                <time datetime="1999-03-12">12 февраля 1992</time>
                            </div>
                        </div>
                    </div>

                <?php endfor;?>
            </div>
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