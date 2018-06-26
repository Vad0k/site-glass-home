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

        <main id="window-profile">
            <div class="sub-container">
            <?php for($i = 0; $i < 9; $i++):?>
            <a href="" class="item">
                <img src="assets/images/products/profiles/WDS-500.png" alt="Профиль" />
                <h2>WDS 400</h2>
                <ul class="params">
                    <li>Толщина стеклопакета - <span>24-32 мм</span></li>
                    <li>Контуры уплотнения - <span>2</span></li>
                    <li>Ширина профиля - <span>60 мм</span></li>
                    <li>Количество камер - <span>4</span></li>
                    <li>Теплоизоляция (мс2С/Вт) - <span>0,81</span></li>
                </ul>
            </a>
            <?php endfor;?>
            </div>




            <aside id="block-best-pvh" class="block-banner orange">
                <p class="title">Вы сделаете правильный выбор заказав у нас ПВХ окна и двери!</p>
                <a href="" class="window"><img src="assets/images/icon-window-orange.svg" alt="окно" />Посмотреть окна</a>
                <a href=""><img src="assets/images/icon-door-orange.svg" alt="двери" />Посмотреть двери</a>
                <img src="assets/images/block-best-girl.png" alt="девушка" class="image" height="298" />
            </aside>


            <aside id="block-best-free" class="block-banner blue">
                <p class="title">Закажи окна прямо сейчас и получи бесплатную доставку.</p>
                <a href="" class="window btn-white">Заказать звонок</a>
                <a href="" class="btn-white">Перейти в каталог</a>
                <img src="assets/images/man-ingeneer.png" alt="мужчина монтажник окон" class="image" height="298" />
            </aside>

            <aside id="block-best-defend" class="block-banner orange">
                <p class="title">Безопасные окна для детей с замками блокирораторами</p>
                <a href="" class="window"><img src="assets/images/icon-window-orange.svg" alt="окно" />Посмотреть окна</a>
                <a href=""><img src="assets/images/icon-door-orange.svg" alt="двери" />Посмотреть двери</a>
                <img src="assets/images/kid-smart-defend.png" alt="умный ребенок" class="image" height="298" />
            </aside>


            <aside id="block-best-gazebo" class="block-banner orange">
                <p class="title">строим беседки любого размера и формы от восьмиугольника до прямоугольника</p>
                <a href="">Заказать беседку</a>
                <img src="assets/images/block-girl-builder.png" alt="женщина монтажник окон и дверей" class="image" height="298" />
            </aside>


            <aside id="block-build-window" class="orange">
                <img src="assets/images/block-build-window.png" alt="изготовление окон" class="image" />
                <p class="title">Любые типы открытия</p>
                <p class="description">При заказе окон вы можете выбрать любой тип открытия для каждой створки окна</p>
                <a href="" class="btn-white">Посмотреть подукцию</a>
                <a href="" class="call-me">Перезвоните мне</a>
            </aside>



        </main>


    </div>
    <?php require_once 'assets/fragments/footer.php'?>


</body>
</html>