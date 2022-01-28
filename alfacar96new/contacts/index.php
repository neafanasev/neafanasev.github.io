<?php 
    $home = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Контакты детейлинг-центра Alfacar. Телефон, почта, форма обратной связи, альфакар на карте">
    <title>Контакты - Детейлинг-центр «AlfaCar»</title>

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
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo $home;?>contacts">Контакты</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

    </header>

    <main>

        <div class="container">
            <div id="contacts_page">

                <div class="h1box">
                    <h1>
                        Контакты
                    </h1>
                </div>

                <div class="row">

                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="feedback">
                            <form action="php/calculate.php" method="post">
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
                                    <input class="form-check-input" type="checkbox" value="1">
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

                                <button type="submit" class="btn">Отправить заявку</button>

                            </form>
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="text">
                            <p>
                               <b>Телефон:<br>+7 (343) 319-90-44<br>+7 (922) 616-04-11</b>
                            </p>
                            <p>
                               <b>E-mail:</b><br>alfacar96@yandex.ru
                            </p>
                            <p>
                                <b>Адрес:</b><br>г. Екатеринбург, ул. Артинская, 17а
                            </p>
                            <p>
                                <b>Режим работы:</b><br> пн-пт с 10:00 до 19:00 <br> сб-вc - выходной
                            </p>
                            <p>
                                <b>Отзывы о нас:</b><br> <a href="https://clck.ru/RFZcW">flamp.ru</a>
                            </p>
                            
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="mapbox">
                                <div class="inner">
                                    <div class="map">
                                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa13f290f8e276df2665815d2c0649512f74551a5971e2b700e8b5972b8f2df20&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </main>

    <?php
        require("../php/calculate_modal.php")
    ?>

    <?php
        require("../php/js.php")
    ?>
</body>

</html>