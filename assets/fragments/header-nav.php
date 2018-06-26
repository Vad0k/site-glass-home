<!-- ГЛАВНАЯ НАВИГАЦИЯ (ШАПКА) -->
<header id="header-nav">
    <div class="logo-box">
        <div class="icon-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <img src="assets/images/logo.svg" alt="Пластиковые окна и двери" class="logo" />
        <strong>Glass House</strong>
    </div>
    <a href="tel:+79212312321" class="phone">+7 (921) 231-23-21</a>
    <nav class="nav">
        <a href="">Контакты</a>
        <a href="">Отзывы</a>
        <a href="">О Компании</a>
        <div class="item">
            <img src="assets/images/icon-header-calc.svg" alt="калькулятор синий" />
            <a href="">Калькулятор<br />стоимости</a>
        </div>
        <div class="item">
            <img src="assets/images/icon-order-size.svg" alt="метр" />
            <a href="">Вызов<br />замерщика</a>
        </div>
    </nav>
    <nav class="nav-bar">
        <div class="panel-title">
            <img src="assets/images/logo.svg" alt="логотип" /><span>Glass House</span>
        </div>
        <div class="icon-open">
            <span></span>
            <span></span>
        </div>
        <ol>
            <li><a href="">Главная</a></li>
            <li>
                <div class="icon-open icon-close">
                    <span></span>
                    <span></span>
                </div>
                <span>Окна</span>
                <ol>
                    <li><a href="">Окна</a></li>
                    <li><a href="">Окна</a></li>
                    <li><a href="">Окна</a></li>
                </ol>
            </li>
            <li>
                <div class="icon-open icon-close">
                    <span></span>
                    <span></span>
                </div>
                <span>Двери</span>
                <ol>
                    <li><a href="">Двери</a></li>
                    <li><a href="">Двери</a></li>
                    <li>
                        <div class="icon-open icon-close">
                            <span></span>
                            <span></span>
                        </div>
                        <span>LuckyFox</span>
                        <ol>
                            <li><a href="">LuckyFox</a></li>
                            <li><a href="">LuckyFox</a></li>
                            <li><a href="">LuckyFox</a></li>
                        </ol>

                    </li>
                </ol>
            </li>
            <li><a href="">Цены</a></li>
            <li><a href="">Дополнительные услуги</a></li>
            <li><a href="">Полезно знать</a></li>
            <li><a href="">О компании</a></li>
        </ol>
    </nav>
</header>



<script>
    window.onload = function(){

        $('#header-nav .logo-box .icon-menu').click(function(){
            $('#header-nav .nav-bar').addClass('transform-open');
        });
        $('#header-nav .nav-bar > .icon-open').click(function(){
            $(this).parent().removeClass('transform-open');
        });


        $('#header-nav .nav-bar .icon-open').click(function(){
            $(this).parent().removeClass('active');
        });

        $('#header-nav .nav-bar ol li > span').click(function(){

            if($(this).parent().hasClass('active')){
                $(this).parent().parent().find('li').removeClass('active');
            }else{
                $(this).parent().parent().find('li').removeClass('active');
                $(this).parent().addClass('active');
            }
        });

    }
</script>

<!-- ГЛАВНАЯ НАВИГАЦИЯ (ШАПКА) -->