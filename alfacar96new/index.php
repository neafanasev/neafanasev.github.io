<?php 
    $home = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Детейлинг центр Екатеринбург. Оказываем полный спектр услуг по уходу за вашим автомобилем. Детейлинг кузова и салона авто. Высокое качество исполнения. Индивидуальных подход к каждому автомобилю. Находимся в центре Екатеринбурга."/>
    <title>Детейлинг-центр «AlfaCar»</title>

    <!-- css -->
    <link rel="stylesheet" href="<?php echo $home;?>css/smartphoto.css">
    <link rel="stylesheet" href="<?php echo $home;?>geometria.css">
    <link rel="stylesheet" href="<?php echo $home;?>fonts/stylesheet.css">
    <link rel="stylesheet" href="<?php echo $home;?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $home;?>css/style.css">


    <meta name="google-site-verification" content="Mv8nnZ51CWvj5VgARxAWd17vbyMMPZVf95pd-Z4zE3g" />
    <meta name="yandex-verification" content="d1671ebf2f1d71ce" />
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

<body class="blur">

    <div id="start-vid">
        <video class="unselectable" autoplay muted preload loop>
            <source src="<?php echo $home;?>detailing.mp4" type="video/mp4"/>
        </video>
        <div class="overlay">
            <div class="box">
                <p>
                    <b>Сделаем</b> кузов блестящим, <b>защитим</b> пленкой, <b>удалим</b> царапины и вмятины    
                </p>
                <div class="arrow">
                    <a href=''>
                        <img src="<?php echo $home;?>img/down-arrow.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="overlay2">
            <div class="box">
                <p>
                    ул. Артинская, 17А
                </p>
                <img src="<?php echo $home;?>img/logo_dark.png" alt="">
                <p>
                    +7 (343) 319-90-44
                </p>
            </div>
        </div>
    </div>

    <header id="header">
        <?php
            require("php/topbar.php");
        ?>
        <nav class="navbar navbar-expand-lg navbar-default">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"/></svg>
                    </span>
                </button>

                <p><a href="tel:83433199044">+7 (343) 319-90-44</a></p>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo $home;?>">Главная</a>
                        </li>
                        <li class="nav-item">
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


            <!-- <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="<?php echo $home;?>img/slider/1.jpg" class="d-block w-100 unselectable" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="text-box">
                                <p>
                                    Наша цель - довольный клиент
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="<?php echo $home;?>img/slider/2.jpg" class="d-block w-100 unselectable" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="text-box">
                                <p style="color: #111">
                                    Профессионализм мастера - залог успеха
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="<?php echo $home;?>img/slider/3.jpg" class="d-block w-100 unselectable" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="text-box">
                                <p>
                                    Самое популярное - керамическое покрытие кузова
                                </p>
                            </div>

                        </div>
                    </div>

                </div>
            </div> -->


            <div id="services">
                <div class="h1box">
                    <h1>
                        Наши услуги
                    </h1>
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


                </div>

                <div class="btnbox">
                    <button class="btn">
                        <a href="<?php echo $home;?>services">
                            Посмотреть все услуги
                        </a>
                    </button>
                </div>

            </div>

        </div>

        <div class="container-fluid">

            <div id="about">
                <div class="container">
                    
                    <div class="imgbox">
                        <img src="<?php echo $home;?>img/logo_dark_.png" alt="">
                    </div>

                    <p>
                        Вы вновь полюбите ваш автомобиль!
                    </p>

                </div>
            </div>

        </div>

        <div class="container">

            <div id="works">
                <div class="h1box">
                    <h1>
                        Как мы работаем
                    </h1>
                </div>

                <div id="gallery">

                    <div class="item-2">
                        <a href="<?php echo $home;?>img/works/gallery/2_1.png" class="js-smartPhoto">
                            <img src="<?php echo $home;?>img/works/gallery/2_1.png" data-group="works"/>
                        </a>
                    </div>

                    <div class="item-2">
                        <div class="item-1">
                            <a href="<?php echo $home;?>img/works/gallery/1_1.jpg" class="js-smartPhoto">
                                <img src="<?php echo $home;?>img/works/gallery/1_1.jpg" data-group="works"/>
                            </a>
                        </div>
                        <div class="item-1">
                            <a href="<?php echo $home;?>img/works/gallery/1_2.jpg" class="js-smartPhoto">
                                <img src="<?php echo $home;?>img/works/gallery/1_2.jpg" data-group="works"/>
                            </a>
                        </div>
                        <div class="item-1">
                            <a href="<?php echo $home;?>img/works/gallery/1_4.png" class="js-smartPhoto">
                                <img src="<?php echo $home;?>img/works/gallery/1_4.png" data-group="works"/>
                            </a>
                        </div>
                        <div class="item-1">
                            <a href="<?php echo $home;?>img/works/gallery/1_3.jpg" class="js-smartPhoto">
                                <img src="<?php echo $home;?>img/works/gallery/1_3.jpg" data-group="works"/>
                            </a>
                        </div>
                    </div>

                    <div class="item-2 l">
                        <div class="item-1">
                            <a href="<?php echo $home;?>img/works/gallery/1_8.jpg" class="js-smartPhoto">
                                <img src="<?php echo $home;?>img/works/gallery/1_8.jpg" data-group="works"/>
                            </a>
                        </div>
                        <div class="item-1">
                            <a href="<?php echo $home;?>img/works/gallery/1_6.jpg" class="js-smartPhoto">
                                <img src="<?php echo $home;?>img/works/gallery/1_6.jpg" data-group="works"/>
                            </a>
                        </div>
                        <div class="item-1">
                            <a href="<?php echo $home;?>img/works/gallery/1_7.jpg" class="js-smartPhoto">
                                <img src="<?php echo $home;?>img/works/gallery/1_7.jpg" data-group="works"/>
                            </a>
                        </div>
                        <div class="item-1">
                            <a href="<?php echo $home;?>img/works/gallery/1_5.png" class="js-smartPhoto">
                                <img src="<?php echo $home;?>img/works/gallery/1_5.png" data-group="works"/>
                            </a>
                        </div>
                    </div>


                    <div class="item-2 l">
                        <a href="<?php echo $home;?>img/works/gallery/2_2.jpg" class="js-smartPhoto">
                            <img src="<?php echo $home;?>img/works/gallery/2_2.jpg" data-group="works"/>
                        </a>
                    </div>

                </div>

                <!-- <div class="row">

                    <div class="col-6">
                        <a href="<?php echo $home;?>works/1">
                            <div class="descbox">
                                <span class="desc">
                                    <p>Подробнее</p>
                                </span>
                                <img src="<?php echo $home;?>img/works/1.png" alt="" class="unselectable">
                            </div>
                        </a>
                        <p>
                            Porshe Cayenne
                        </p>
                    </div>
                    <div class="col-6">
                        <a href="<?php echo $home;?>works/3">
                            <div class="descbox">
                                <span class="desc">
                                    <p>Подробнее</p>
                                </span>
                                <img src="<?php echo $home;?>img/works/3.png" alt="" class="unselectable">
                            </div>
                        </a>
                        <p>
                            Range Rover Sport
                        </p>
                    </div>
                    <div class="col-6">
                        <a href="<?php echo $home;?>works/4">
                            <div class="descbox">
                                <span class="desc">
                                    <p>Подробнее</p>
                                </span>
                                <img src="<?php echo $home;?>img/works/4.png" alt="" class="unselectable">
                            </div>
                        </a>
                        <p>
                            Mercedes-Benz GLK
                        </p>
                    </div>
                    <div class="col-6">
                        <a href="<?php echo $home;?>works/5">
                            <div class="descbox">
                                <span class="desc">
                                    <p>Подробнее</p>
                                </span>
                                <img src="<?php echo $home;?>img/works/5.png" alt="" class="unselectable">
                            </div>
                        </a>
                        <p>
                            Audi A5
                        </p>
                    </div>


                </div> -->
                
                <div class="btnbox">
                    <button class="btn">
                        <a href="works">
                            Посмотреть все работы
                        </a>
                    </button>
                </div>

                <p>Больше примеров работ вы можете увидеть в нашем <a href="https://www.instagram.com/alfacar96/?igshid=nh6p0t3pdvs4">Instagram</a></p>
            </div>

            <div id="flamp">
                <div class="h1box">
                    <h1>
                        Отзывы о нас
                    </h1>
                </div>
                <a class="flamp-widget" href="//ekaterinburg.flamp.ru/firm/alfacar_detejjling_centr-70000001042676377"  data-flamp-widget-type="responsive-new" data-flamp-widget-id="70000001042676377" data-flamp-widget-width="100%" data-flamp-widget-count="3">Отзывы о нас на Флампе</a>
            </div>

        </div>

        <div class="container-fluid">

            <div id="contact">
                <form action="feedback.php" method="post">
                    <div class="h2box">
                        <h2>
                            Форма обратной связи
                        </h2>
                    </div>

                    <div class="form-group">
                        <label >Как к Вам обращаться?*</label>
                        <input class="form-control" type="text" placeholder="Введите имя" name="name">
                    </div>

                    <div class="form-group">
                        <label >Ваш номер телефона*</label>
                        <input class="form-control" type="text" placeholder="Введите телефон" name="phone">
                    </div>

                    <div class="form-group" id="dop_info">
                        <label>Дополнительная информация</label>
                        <textarea class="form-control" rows="3" placeholder="Когда вам удобно позвонить, что конкретно хотите узнать и так далее..." name="info"></textarea>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="yes" name="rules">
                        <label class="form-check-label">
                            Я принимаю условия соглашения
                        </label>
                    </div>
                    <br>
                    <div class="form-check">
                        <label class="form-check-label">
                            Обязательные поля отмечены *
                        </label>
                    </div>

                    <input style="display:none" type="text" name="check" id="check" value="">

                    <button type="submit" class="btn" >Отправить заявку</button>

                </form>
            </div>

        </div>

        
    </main>

    <?php
        require("php/footer.php")
    ?>

    <?php
        require("php/calculate_modal.php")
    ?>

    <?php
        require("php/js.php")
    ?>

</body>

</html>