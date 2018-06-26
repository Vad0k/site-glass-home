<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="assets/js/functions.js"></script>
</head>
<body>
    <div class="container">
        <?php require_once 'assets/fragments/header-nav.php';?>


        <aside id="breadcrumbs">
            <nav class="top">
                <ul>
                    <li><a href="">Каталог продукции</a></li>
                    <li><a href="">Окна</a></li>
                </ul>
            </nav>
            <nav class="bottom">
                <a href="" class="active">Окна</a>
                <a href="">Двери</a>
                <a href="">Балконы и лоджии</a>
                <a href="">Профили</a>
                <a href="">Подоконники</a>
                <a href="">Откосы</a>
                <a href="">Безопасность для детей</a>
            </nav>
        </aside>




        <aside id="pagination-projects" class="pagination-filter">
            <nav>
                <a class="active" href="">Стандартные окна</a>
                <a href="">Нестандартные окна</a>
            </nav>

            <form action="" method="post" class="select">
                <label for="profile">Профиль:</label>
                <select name="profile" id="profile">
                    <option>WDS</option>
                    <option>WDS</option>
                    <option>WDS 5s</option>
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


        <!-- СЕКЦИЯ ТОВАРОВ -->
        <main id="product-list-window">
            <?php for($i = 0; $i < 6; $i++):?>
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
            <?php endfor;?>
        </main>
        <!-- СЕКЦИЯ ТОВАРОВ -->




        <!-- ===================== -->
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
            <a href="" class="btn-gray">Показать еще 4 товара</a>
            <div class="clear"></div>
        </div>


        <?php require_once 'assets/fragments/block-create-windows-and-doors.php'?>

    </div>
    <?php require_once 'assets/fragments/footer.php';?>

</body>
</html>