<?php 
    $home = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='description' content="Оклейка антигравийной пленкой автомобиля в Екатеринбурге. Llumar и Spectroll. Самая надежная защита от сколов и царапин. Оклейка  капота авто, бампера, фар, зеркал и автомобиля целиком. Находимся в центре Екатеринбурга.">
    <title>Антигравийная плёнка - Детейлинг-центр «AlfaCar»</title>
    

    <!-- css -->
    <link rel="stylesheet" href="<?php echo $home;?>css/smartphoto.css">
    <link rel="stylesheet" href="<?php echo $home;?>geometria.css">
    <link rel="stylesheet" href="<?php echo $home;?>fonts/stylesheet.css">
    <link rel="stylesheet" href="<?php echo $home;?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $home;?>css/style.css">

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(68961433, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
    });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/68961433" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

</head>

<body>

    <header>
        <?php
            require("../../php/topbar.php");
        ?>

        <nav class="navbar navbar-expand-lg navbar-default">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img"
                            focusable="false">
                            <title>Menu</title>
                            <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"
                                d="M4 7h22M4 15h22M4 23h22" />
                        </svg>
                    </span>
                </button>

                <p><a href="tel:83433199044">+7 (343) 319-90-44</a></p>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo $home;?>">Главная</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo $home;?>services">Услуги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $home;?>prices">Цены</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $home;?>works">Работы</a>
                        </li>
                        <li class="nav-item" id='feedback'>
                            <a class="nav-link" href="<?php echo $home;?>#flamp">Отзывы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $home;?>contacts">Контакты</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

    </header>

    <main>

        <div class="container">
            <div id="services_page_services">

                <div class="twocol">
                    <div class="h2box">
                        <h2>
                            С какими пленками мы работаем?
                        </h2>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <img src="<?php echo $home;?>img/services/page/keramicheskoe_pokrytie/plenki/spectroll.svg"
                                alt="">
                            <p class="h"><b>Spectroll Paint Protection Film</b> — Современная защитная полиуретановая пленка корейского производства.
                             Имеет защитный top coat слой и гидрофоб. Не имеет шагрени.
                            </p>
                            <p class="text-center m-0">
                                <b>Отличный бюджетный вариант защиты автомобиля.</b>
                            </p>
                            <div class="box">
                                <div class="row">
                                    <div class="col-6">
                                        <p>
                                            <b>180 мкм</b> <br>
                                            Толщина плёнки
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <p>
                                            <b>5 лет</b><br>
                                            Гарантия
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <img src="<?php echo $home;?>img/services/page/keramicheskoe_pokrytie/plenki/llumar.svg"
                                alt="">
                            <p id='max' class="h"><b>LLumar® Paint Protection Film</b> — Премиальная защитная полиуретановая пленка известного американского
                            бренда. Твердый защитный top coat и гидрофобный слой. Не имеет шагрени, устойчива к растворителям и любым 
                            другим хим. составам.
                            <p class="text-center m-0">
                                <b>Вариант для идеальной защиты кузова автомобиля.</b>
                            </p>
                            <div class="box">
                                <div class="row">
                                    <div class="col-6">
                                        <p>
                                            <b>200 мкм</b> <br>
                                            Толщина плёнки
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <p>
                                            <b>10 лет</b><br>
                                            Гарантия
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="price">
                    <div class="h2box">
                        <h2>
                            Сколько стоит оклейка?
                        </h2>
                    </div>

                    <div class="row">

                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <img src="<?php echo $home;?>img/services/page/keramicheskoe_pokrytie/price/1.png" alt="">

                            <h5>Пакет «Минимум»</h5>

                            <div class="row">
                                <div class="col-6">
                                    <img src="<?php echo $home;?>img/tick.svg" alt="">
                                    <p>
                                        Бампер
                                    </p>
                                </div>
                                <div class="col-6">
                                    <img src="<?php echo $home;?>img/tick.svg" alt="">
                                    <p>
                                        Фары
                                    </p>
                                </div>
                                <div class="col-6">
                                    <img src="<?php echo $home;?>img/tick.svg" alt="">
                                    <p>
                                        Передние стойки
                                    </p>
                                </div>
                                <div class="col-6">
                                    <img src="<?php echo $home;?>img/tick.svg" alt="">
                                    <p>
                                        Зоны под ручками
                                    </p>
                                </div>
                                <div class="col-6">
                                    <img src="<?php echo $home;?>img/tick.svg" alt="">
                                    <p>
                                        Зеркала
                                    </p>
                                </div>
                                <div class="col-6">
                                    <img src="<?php echo $home;?>img/tick.svg" alt="">
                                    <p>
                                        Капот (полоса)
                                    </p>
                                </div>
                                <div class="col-6 unselectable">
                                    <p>
                                        Капот (полоса)
                                    </p>
                                </div>
                                <div class="col-6 unselectable">
                                    <p>
                                        Капот (полоса)
                                    </p>
                                </div>
                            </div>

                            <button class='btn'>от 47 000 руб.</button>

                            <div class="btnbox">
                                <button class="btn" type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#calculate">
                                    Рассчитать стоимость
                                </button>
                            </div>


                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <img src="<?php echo $home;?>img/services/page/keramicheskoe_pokrytie/price/2.png" alt="">

                            <h5>Пакет «Стандарт»</h5>

                            <div class="row" id='max'>
                                <div class="col-6">
                                    <img src="<?php echo $home;?>img/tick.svg" alt="">
                                    <p>
                                        Бампер
                                    </p>
                                </div>
                                <div class="col-6">
                                    <img src="<?php echo $home;?>img/tick.svg" alt="">
                                    <p>
                                        Фары
                                    </p>
                                </div>
                                <div class="col-6">
                                    <img src="<?php echo $home;?>img/tick.svg" alt="">
                                    <p>
                                        Передние стойки
                                    </p>
                                </div>
                                <div class="col-6">
                                    <img src="<?php echo $home;?>img/tick.svg" alt="">
                                    <p>
                                        Зоны под ручками
                                    </p>
                                </div>
                                <div class="col-6">
                                    <img src="<?php echo $home;?>img/tick.svg" alt="">
                                    <p>
                                        Зеркала
                                    </p>
                                </div>
                                <div class="col-6">
                                    <img src="<?php echo $home;?>img/tick.svg" alt="">
                                    <p>
                                        Капот
                                    </p>
                                </div>
                                <div class="col-6">
                                    <img src="<?php echo $home;?>img/tick.svg" alt="">
                                    <p>
                                        Крылья
                                    </p>
                                </div>
                                <div class="col-6">
                                    <img src="<?php echo $home;?>img/tick.svg" alt="">
                                    <p>
                                        Крыша (полоса)
                                    </p>
                                </div>
                            </div>

                            <button class='btn maxbtn'><l>от 75 000</l> <br> от 55 000 руб.</button>

                            <div class="btnbox">
                                <button class="btn" type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#calculate">
                                    Рассчитать стоимость
                                </button>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <img src="<?php echo $home;?>img/services/page/keramicheskoe_pokrytie/price/3.png" alt="">

                            <h5>Пакет «Максимум»</h5>

                            <div class="row">
                                <div class="col-12">
                                    <p>
                                        <img src="<?php echo $home;?>img/tick.svg" alt="">
                                        <b>Полная оклейка автомобиля</b>
                                    </p>
                                </div>
                            </div>

                            <button class='btn'>от 160 000 руб.</button>

                            <div class="btnbox">
                                <button class="btn" type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#calculate">
                                    Рассчитать стоимость
                                </button>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="numbers">

                    <div class="h2box">
                        <h2>
                            Ваша выгода в цифрах
                        </h2>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm col-md col-lg col-xl">
                            <h6>
                                <span class="u100">100</span>%
                            </h6>
                            <p>
                                Защита ЛКП автомобиля
                            </p>
                        </div>
                        <div class="col-12 col-sm col-md col-lg col-xl">
                            <h6>
                                +<span class="u100">15</span>%
                            </h6>
                            <p>
                                Стоимость при последующей продаже автомобиля
                            </p>
                        </div>
                        <div class="col-12 col-sm col-md col-lg col-xl">
                            <h6>
                                -<span class="u100">20</span>%
                            </h6>
                            <p>
                                Наши условия выгоднее средних по рынку
                            </p>
                        </div>
                        <div class="col-12 col-sm col-md col-lg col-xl">
                            <h6>
                                <span class="u100">100</span>%
                            </h6>
                            <p>
                                Оригинальные пленки напрямую от производителя
                            </p>
                        </div>
                        <div class="col-12 col-sm col-md col-lg col-xl">
                            <h6>
                                <span class="u100">10</span> лет
                            </h6>
                            <p>
                                Гарантия качества и срока эксплуатации пленки
                            </p>
                        </div>
                    </div>
                </div>

                <div class="advantages">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <h5>
                                Антигравийная плёнка имеет ряд приемуществ:
                            </h5>
                            <p>
                                <img src="<?php echo $home;?>img/tick.svg" alt="">
                                <b>Защита</b> от сколов и царапин
                            </p>
                            <p>
                                <img src="<?php echo $home;?>img/tick.svg" alt="">
                                Защита от птичьего помета и химических реагентов
                            </p>
                            <p>
                                <img src="<?php echo $home;?>img/tick.svg" alt="">
                                Имеет высокий <b>блеск</b> и абсолютную <b>прозрачность</b>
                            </p>
                            <p>
                                <img src="<?php echo $home;?>img/tick.svg" alt="">
                                <b>Безопасна</b> для ЛКП и при удалении не оставляет следов
                            </p>
                            <p>
                                <img src="<?php echo $home;?>img/tick.svg" alt="">
                                <b>Не</b> отслаивается и <b>не</b> желтеет
                            </p>
                            <p>
                                <img src="<?php echo $home;?>img/tick.svg" alt="">
                                <b>Можно</b> мыть и полировать
                            </p>
                            <p>
                                <img src="<?php echo $home;?>img/tick.svg" alt="">
                                <b>Имеет</b> верхний лаковый гидрофобный слой
                            </p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xl-6">
                            <h5>
                                Профессиональный расчет стоимости:
                            </h5>
                            <form action="<?php echo $home;?>php/calculate.php" method="post">

                                <div class="form-group">
                                    <label>Марка и модель автомобиля*</label>
                                    <input class="form-control" type="text" placeholder="Введите телефон" name="mark">
                                </div>

                                <div class="form-group">
                                    <label>Ваше имя*</label>
                                    <input class="form-control" type="text" placeholder="Введите имя" name="name">
                                </div>

                                <div class="form-group">
                                    <label>Телефон*</label>
                                    <input class="form-control" type="text" placeholder="Введите телефон" name="phone">
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="yes" name="rules">
                                    <label class="form-check-label">
                                        Я принимаю условия соглашения
                                    </label>
                                </div>

                                <input style="display:none" type="text" name="check" id="check" value="">

                                <div class="btnbox">
                                    <button type="submit" class="btn">Отправить заявку</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="works">
                        
                    <div class="h2box">
                        <h2>
                            Наши работы
                        </h2>
                    </div>

                    <div class="row">

                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <img src="<?php echo $home;?>img/works/1.png" alt="" class="unselectable">
                            <p>Porsсhe Cayenne</p>
                            <button class="btn" type="button" data-toggle="modal" data-target="#porshe_cayenne">
                                Подробнее
                            </button>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <img src="<?php echo $home;?>img/works/9.png" alt="" class="unselectable">
                            <p>Volkswagen Touareg</p>
                            <button class="btn" type="button" data-toggle="modal" data-target="#volkswagen_touareg">
                                Подробнее
                            </button>
                        </div>

                    </div>
                </div>

                <div id="flamp">
                    <div class="h2box">
                        <h2>
                            Отзывы о нас
                        </h2>
                    </div>
                    <a class="flamp-widget"
                        href="//ekaterinburg.flamp.ru/firm/alfacar_detejjling_centr-70000001042676377"
                        data-flamp-widget-type="responsive-new" data-flamp-widget-id="70000001042676377"
                        data-flamp-widget-width="100%" data-flamp-widget-count="3">Отзывы о нас на Флампе</a>
                </div>

                <div id="services" class="page">

                    <div class="h2box">
                        <h2>
                            Другие услуги
                        </h2>
                    </div>

                    <div class="row">

                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <a href="<?php echo $home;?>services/polirovka_kuzova">
                                <div class="descbox">
                                    <span class="desc">
                                        <p>Полировка кузова</p>
                                    </span>
                                    <img src="<?php echo $home;?>img/services/1.jpg" alt="" class="unselectable">
                                </div>
                            </a>
                        </div>

                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <a href="<?php echo $home;?>services/himchistka_salona">
                                <div class="descbox">
                                    <span class="desc">
                                        <p>Химчистка салона</p>
                                    </span>
                                    <img src="<?php echo $home;?>img/services/3.jpg" alt="" class="unselectable">
                                </div>
                            </a>
                        </div>

                        <!-- <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <a href="<?php echo $home;?>services/antigraviynaya_plenka">
                                <div class="descbox">
                                    <span class="desc">
                                        <p>Антигравийная<br>пленка</p>
                                    </span>
                                    <img src="<?php echo $home;?>img/services/5.jpg" alt="" class="unselectable">
                                </div>
                            </a>
                        </div> -->

                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <a href="<?php echo $home;?>services/tonirovka_stekol">
                                <div class="descbox">
                                    <span class="desc">
                                        <p>Тонировка стёкол</p>
                                    </span>
                                    <img src="<?php echo $home;?>img/services/6.jpg" alt="" class="unselectable">
                                </div>
                            </a>
                        </div>

                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <a href="<?php echo $home;?>services/detailing_moika">
                                <div class="descbox">
                                    <span class="desc">
                                        <p>Детейлинг мойка</p>
                                    </span>
                                    <img src="<?php echo $home;?>img/services/4.jpg" alt="" class="unselectable">
                                </div>
                            </a>
                        </div>

                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <a href="<?php echo $home;?>services/vypravlenie_vmyatin">
                                <div class="descbox">
                                    <span class="desc">
                                        <p>Выправление вмятин</p>
                                    </span>
                                    <img src="<?php echo $home;?>img/services/9.jpg" alt="" class="unselectable">
                                </div>
                            </a>
                        </div>

                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <a href="<?php echo $home;?>services">
                                <div class="descbox">
                                    <span class="desc">
                                        <p>Все услуги</p>
                                    </span>
                                    <img src="<?php echo $home;?>img/services/5.jpg" alt="" class="unselectable">
                                </div>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>


    </main>


    <?php
        require("../../php/calculate_modal.php")
    ?>

    <?php
        require("../../php/footer.php")
    ?>

    <?php
        require("../../works/porshe_cayenne.php")
    ?>

    <?php
        require("../../works/volkswagen_touareg.php")
    ?>

    <?php
        require("../../php/js.php")
    ?>
</body>

</html>