<?php 
    $home = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Широкий спектр услуг в детейлинг-центре в Екатеринбурге. Ангиравийная плёнка, полировка, мойка, керамическое покрытие, выправление вмятин, тонировка стёкол.">
    <title>Услуги - Детейлинг-центр «AlfaCar»</title>

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
            require("../php/topbar.php");
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
                        <li class="nav-item">
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
            <div id="services" class="page">

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
                    <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                        <a href="<?php echo $home;?>services/polirovka_vstavok">
                            <div class="descbox">
                                <span class="desc">
                                    <p>Полировка вставок салона</p>
                                </span>
                                <img src="<?php echo $home;?>img/services/10.png" alt="" class="unselectable">
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                        <a href="<?php echo $home;?>prices">
                            <div class="descbox">
                                <span class="desc">
                                    <p>Другие услуги</p>
                                </span>
                                <img src="<?php echo $home;?>img/services/8.jpg" alt="" class="unselectable">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </main>

    
    <?php
        require("../php/footer.php")
    ?>

    <?php
        require("../php/js.php")
    ?>
</body>

</html>