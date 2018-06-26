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


        <aside id="breadcrumbs">
            <nav class="top">
                <ul>
                    <li><a href="">Полезно знать</a></li>
                    <li><a href="">Письмо директору</a></li>
                </ul>
            </nav>
            <nav class="bottom">
                <a href="" class="active">Письмо директору</a>
            </nav>
        </aside>


        <main class="bg-white" id="message-director">
            <form action="" method="post">
                <h1 class="title">От меня</h1>
                <p>Уважаемые клиенты, благодарю Вас за сотрудничество с компанией “Glass house”.
                Ежедневно специалисты нашей компании устанавливают в среднем по 120 окон в день.
                К сожалению, у меня нет возможности обзванивать всех клиентов нашей компании, но мне очень важно знать Ваше мнение о качестве предоставляемых услуг и о работе всех специалистов компании.</p>

                <p>Буду очень Вам благодарен, если вы напишете мне пару строк о том, как у Вас прошла установка окон или балконов, что Вам понравилось в работе и чтобы вы рекомендовали улучшить.</p>

                <p>Обязательно напишите, если у Вас есть какие-либо жалобы.
                Все письма доставляются напрямую мне. Укажите, пожалуйста, Ваши контакты, чтобы у меня была возможность связаться с Вами лично!</p>

                <div class="list-rows">
                    <input type="text" placeholder="Ваше имя" />
                    <input type="tel" placeholder="Телефон" />
                    <input type="email" placeholder="Почта" />
                </div>

                <textarea name="message" placeholder="Текст письма"></textarea>
                <button class="btn-orange">Отправить</button>

            </form>
            <div class="photo"></div>
        </main>

        <aside id="breadcrumbs">
            <a href="" class="btn-blue">Перейти в галерею</a>
            <nav class="top">
                <ul>
                    <li><a href="">Портфолио</a></li>
                </ul>
            </nav>
            <nav class="bottom">
                <a href="" class="active">Последние проекты</a>
            </nav>
        </aside>



        <aside id="catalog-projects">
            <div class="gallery">
                <?php for($i = 0; $i < 3; $i++):?>

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
        </aside>


    </div>

    <?php require_once 'assets/fragments/footer.php'; ?>


</body>
</html>