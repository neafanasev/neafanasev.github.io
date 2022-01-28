<?php 
    $home = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='description' content="Профессиональная полировка кузова автомобиля в Екатеринбурге. Обработка керамическим покрытием и жидким стеклом. Удаление царапин и сколов. Керамика для авто и мотоциклов. Покрытие керамикой дисков, стекол и пластика.">
    <title>Полировка кузова - Детейлинг-центр «AlfaCar»</title>

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

                <div class="advantages">
                    <div class="h2box">
                        <h2>
                            Полировка кузова
                        </h2>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <img src="<?php echo $home;?>img\services\page\polirovka_kuzova\1.jpg" alt=""
                                class="unselectable">
                            <div class="btnbox">
                                <button class="btn" type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#calculate">
                                    Рассчитать стоимость
                                </button>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <h5>
                                Этапы детейлинг-полировки:
                            </h5>
                            <p>
                                <img src="<?php echo $home;?>img/tick.svg" alt="">
                                Тщательная <b>детейлинг-мойка</b> кузова
                            </p>
                            <p>
                                <img src="<?php echo $home;?>img/tick.svg" alt="">
                                Глубокая <b>очистка ЛКП</b> (удаление битума, тополиных почек, металлических вкраплений)
                            </p>
                            <p>
                                <img src="<?php echo $home;?>img/tick.svg" alt="">
                                <b>Подготовка</b> автомобиля (маскировка пластиковых, резиновых и хромированных элементов)
                            </p>
                            <p>
                                <img src="<?php echo $home;?>img/tick.svg" alt="">
                                <b>Полировка ЛКП</b> автомобиля
                            </p>
                            <p>
                                <img src="<?php echo $home;?>img/tick.svg" alt="">
                                <b>Удаление</b> сколов и глубоких царапин
                            </p>
                            <p>
                                <img src="<?php echo $home;?>img/tick.svg" alt="">
                                <b>Обезжиривание</b> кузова
                            </p>
                        </div>
                    </div>
                </div>

                <div class="classes">
                    <div class="h2box">
                        <h2>
                            Стоимость услуги
                        </h2>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <h5>
                                <b>I класс</b> - седан
                            </h5>
                            <img src="<?php echo $home;?>img/services/classes/1.png" alt="" class="unselectable">
                            <p>
                                11 990 руб.
                            </p>
                        </div>
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <h5>
                                <b>II класс</b> - кроссовер
                            </h5>
                            <img src="<?php echo $home;?>img/services/classes/2.png" alt="" class="unselectable">
                            <p>
                                13 990 руб.
                            </p>
                        </div>
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <h5>
                                <b>III класс</b> - внедорожник
                            </h5>
                            <img src="<?php echo $home;?>img/services/classes/3.png" alt="" class="unselectable">
                            <p>
                                15 990 руб.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="using">
                    
                    <div class="h2box">
                        <h2>
                            Защитное покрытие для кузова
                        </h2>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <h5>Керамическое покрытие</h5>

                            <img src="<?php echo $home;?>img/services/page/keramicheskoe_pokrytie/1.jpg" alt="">

                            <button class='btn'><l>от 25 990 руб.</l> <br> от 14 990 руб. </button>

                            <div class="btnbox">
                                <button class="btn" type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#calculate">
                                    Рассчитать стоимость
                                </button>
                            </div>


                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <h5>
                                Мы используем <b>Ceramic Pro</b> 
                            </h5>
                            <img src="<?php echo $home;?>img/services/page/polirovka_kuzova/ceramic_pro.png" alt="">
                            <p>
                                <img src="<?php echo $home;?>img/tick.svg" alt="">
                                <b>Обеспечит</b> надежную защиту лако-красочного покрытия от химических реагентов и царапин
                            </p>
                            <p>
                                <img src="<?php echo $home;?>img/tick.svg" alt="">
                                <b>Самый высокий</b> гидрофобный эффект в мире
                            </p>
                            <p>
                                <img src="<?php echo $home;?>img/tick.svg" alt="">
                                <b>Обновляет</b> внешний вид автомобиля, дает превосходный блеск
                            </p>
                            <p>
                                <img src="<?php echo $home;?>img/tick.svg" alt="">
                                <b>Сохранит ЛКП</b> автомобиля от УФ-излучения
                            </p>
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
                            <img src="<?php echo $home;?>img/works/8.png" alt="" class="unselectable">
                            <p>Audi A5</p>
                            <button class="btn" type="button" data-toggle="modal" data-target="#audi_a5">
                                Подробнее
                            </button>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <img src="<?php echo $home;?>img/works/1.png" alt="" class="unselectable">
                            <p>Porsсhe Cayenne</p>
                            <button class="btn" type="button" data-toggle="modal" data-target="#porshe_cayenne">
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

                        <!-- <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <a href="<?php echo $home;?>services/polirovka_kuzova">
                                <div class="descbox">
                                    <span class="desc">
                                        <p>Полировка кузова</p>
                                    </span>
                                    <img src="<?php echo $home;?>img/services/1.jpg" alt="" class="unselectable">
                                </div>
                            </a>
                        </div> -->

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
        require("../../works/audi_a5.php")
    ?>

    <?php
        require("../../php/js.php")
    ?>
</body>

</html>