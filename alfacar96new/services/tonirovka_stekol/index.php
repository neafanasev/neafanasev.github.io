<?php 
    $home = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Тонировка стекол в Екатеринбурге. Тонировка задней полусферы, боковых и лобовых стекол. Тонирование атермальной пленкой. Llumar, Ultravision, SunTek.">
    <title>Тонировка стёкол - Детейлинг-центр «AlfaCar»</title>

    <!-- css -->
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
                            <img src="<?php echo $home;?>img/services/page/tonirovka_stekol/ultra_vision.png"
                                alt="">
                            <p id='max'><b>UltraVision</b> — Тонировочная плёнка для автомобиля от известного производителя
                             UltraVision отличается наличием широкого диапазона светопропускания и высокими атермальными свойствами.
                             Главное её достоинство – это удачное соотношение цены и качества.
                            </p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <img src="<?php echo $home;?>img/services/page/keramicheskoe_pokrytie/plenki/llumar.svg"
                                alt="">
                            <p>
                                <b>LLumar®</b> — Известный бренд премиальных тонировочных пленок 
                                американского производства проверенный временем. Идеальный вариант для тонировки стекол 
                                любой марки автомобиля.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="classes">
                    <div class="h2box">
                        <h2>
                            Сколько стоит тонирование?
                        </h2>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <h5>
                                <b>Задняя полусфера</b>
                            </h5>
                            <img src="<?php echo $home;?>img/services/page/tonirovka_stekol/1.png" alt="" class="unselectable width">
                            <p>
                                от 2 490 руб.
                            </p>
                        </div>
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <h5>
                                <b>Боковые стёкла</b>
                            </h5>
                            <img src="<?php echo $home;?>img/services/page/tonirovka_stekol/2.png" alt="" class="unselectable width">
                            <p>
                                от 990 руб.
                            </p>
                        </div>
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <h5>
                                <b>Атермальная плёнка</b>
                            </h5>
                            <img src="<?php echo $home;?>img/services/page/tonirovka_stekol/3.png" alt="" class="unselectable width">
                            <p>
                                от 2 990 руб.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="advantages">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <h5 class='text-center'>
                                Достоинства тонировки
                            </h5>
                            <p>
                                <img src="<?php echo $home;?>img/tick.svg" alt="">
                                <b>Защита</b> от УФ-излучения
                            </p>
                            <p>
                                <img src="<?php echo $home;?>img/tick.svg" alt="">
                                <b>Приватность</b> салона и личных вещей
                            </p>
                            <p>
                                <img src="<?php echo $home;?>img/tick.svg" alt="">
                                <b>Удержание осколков</b> при повреждении стекла 
                            </p>
                            <p>
                                <img src="<?php echo $home;?>img/tick.svg" alt="">
                                <b>Защита</b> элементов салона от перегревания, выгорания и обесцвечивания
                            </p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <h5 class='text-center'>
                                Расчет стоимости
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
                            <a href="<?php echo $home;?>services/antigraviynaya_plenka">
                                <div class="descbox">
                                    <span class="desc">
                                        <p>Антигравийная<br>пленка</p>
                                    </span>
                                    <img src="<?php echo $home;?>img/services/5.jpg" alt="" class="unselectable">
                                </div>
                            </a>
                        </div>

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
                            <a href="<?php echo $home;?>services/tonirovka_stekol">
                                <div class="descbox">
                                    <span class="desc">
                                        <p>Тонировка стёкол</p>
                                    </span>
                                    <img src="<?php echo $home;?>img/services/6.jpg" alt="" class="unselectable">
                                </div>
                            </a>
                        </div> -->

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