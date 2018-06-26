$('#index-slider').mobilyslider({
    content: '.slider', // селектор для слайдера
    children: 'li', // селектор для дочерних элементов
    transition: 'fade', // переходы: horizontal, vertical, fade
    animationSpeed: 300, // скорость перехода в миллисекундах
    autoplay: true,
    autoplaySpeed: 4000, // время между переходами (миллисекунды)
    pauseOnHover: true, // останавливать навигацию при наведении на слайдер: false, true
    bullets: true, // генерировать навигацию (true/false, class: sliderBullets)
    arrows: true, // генерировать стрелки вперед и назад (true/false, class: sliderArrows)
    arrowsHide: false, // показывать стрелки только при наведении
    prev: 'prev', // название класса для кнопки назад
    next: 'next', // название класса для кнопки вперед
    animationStart: function(){}, // вызывать функцию при старте перехода
    animationComplete: function(){} // вызывать функцию когда переход завершен
});

$('#slider-works .slider').mobilyslider({
    content: '.content', // селектор для слайдера
    children: 'li', // селектор для дочерних элементов
    transition: 'fade', // переходы: horizontal, vertical, fade
    animationSpeed: 300, // скорость перехода в миллисекундах
    autoplay: true,
    autoplaySpeed: 4000, // время между переходами (миллисекунды)
    pauseOnHover: false, // останавливать навигацию при наведении на слайдер: false, true
    bullets: false, // генерировать навигацию (true/false, class: sliderBullets)
    arrows: true, // генерировать стрелки вперед и назад (true/false, class: sliderArrows)
    arrowsHide: false, // показывать стрелки только при наведении
    prev: 'prev', // название класса для кнопки назад
    next: 'next', // название класса для кнопки вперед
    animationStart: function(){}, // вызывать функцию при старте перехода
    animationComplete: function(){} // вызывать функцию когда переход завершен
});


