<?php 
    $home = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Примеры наших работ по нанесению антигравийной плёнки, полировке кузова и фар, тонировки стёкол, нанесения керамического покрытия.">
    <title>Работы - Детейлинг-центр «AlfaCar»</title>

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
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $home;?>services">Услуги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $home;?>prices">Цены</a>
                        </li>
                        <li class="nav-item active">
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
            <div id="works_page">

                <div class="h1box">
                    <h1>
                        Наши работы
                    </h1>
                </div>

                <div class="row">

                    <div class="col-12">
                        <div class="imgbox">
                            <img src="<?php echo $home;?>img/works/11.png" class="unselectable">
                        </div>
                        <div class="textbox">
                            <div class="text">
                                <h5>Toyota LC Prado</h5>
                                <p>
                                    Цель обращения: восстановительный детейлинг.
                                </p> 
                            </div>
                            <div class="button">
                                <button class="btn" type="button" data-toggle="modal" data-target="#toyota_prado">Подробнее</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="imgbox">
                            <img src="<?php echo $home;?>img/works/10.png" class="unselectable">
                        </div>
                        <div class="textbox">
                            <div class="text">
                                <h5>Toyota RAV 4</h5>
                                <p>
                                    Цель обращения: восстановительный детейлинг.
                                </p> 
                            </div>
                            <div class="button">
                                <button class="btn" type="button" data-toggle="modal" data-target="#toyota_rav4">Подробнее</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="imgbox">
                            <img src="<?php echo $home;?>img/works/9.png" class="unselectable">
                        </div>
                        <div class="textbox">
                            <div class="text">
                                <h5>Volkswagen Touareg</h5>
                                <p>
                                    Представительский автомобиль, который безусловно нуждается в достойном уходе и при желании, в эксклюзивном стайлинге.
                                </p> 
                            </div>
                            <div class="button">
                                <button class="btn" type="button" data-toggle="modal" data-target="#volkswagen_touareg">Подробнее</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="imgbox">
                            <img src="<?php echo $home;?>img/works/8.png" class="unselectable">
                        </div>
                        <div class="textbox">
                            <div class="text">
                                <h5>Audi A5</h5>
                                <p>
                                    Цель обращения: ежегодная коррекция ЛКП, полировка кузова, обновление гидрофобного слоя</p> 
                            </div>
                            <div class="button">
                                <button class="btn" type="button" data-toggle="modal" data-target="#audi_a5">Подробнее</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="imgbox">
                            <img src="<?php echo $home;?>img/works/1.png" class="unselectable">
                        </div>
                        <div class="textbox">
                            <div class="text">
                                <h5>Porshe Cayenne</h5>
                                <p>
                                    Цель обращения: максимальная защита автомобиля от воздействия агрессивных факторов окружающей среды, сохранение ЛКП кузова,  сохранение салонона.</p> 
                            </div>
                            <div class="button">
                                <button class="btn" type="button" data-toggle="modal" data-target="#porshe_cayenne">Подробнее</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="imgbox">
                            <img src="<?php echo $home;?>img/works/3.png" class="unselectable">
                        </div>
                        <div class="textbox">
                            <div class="text">
                                <h5>Range Rover Sport</h5>
                                <p>
                                    Цель обращения: восстановительный детейлинг.
                                </p> 
                            </div>
                            <div class="button">
                                <button class="btn" type="button" data-toggle="modal" data-target="#range_rover_sport">Подробнее</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="imgbox">
                            <img src="<?php echo $home;?>img/works/4.png" class="unselectable">
                        </div>
                        <div class="textbox">
                            <div class="text">
                                <h5>Mercedes-Benz GLK</h5>
                                <p>
                                    Цель обращения: восстановительный детейлинг.
                                </p> 
                            </div>
                            <div class="button">
                                <button class="btn" type="button" data-toggle="modal" data-target="#mercedes_benz_glk">Подробнее</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="imgbox">
                            <img src="<?php echo $home;?>img/works/5.png" class="unselectable">
                        </div>
                        <div class="textbox">
                            <div class="text">
                                <h5>Аudi Q5</h5>
                                <p>
                                    Цель обращения: восстановительный детейлинг.
                                </p> 
                            </div>
                            <div class="button">
                                <button class="btn" type="button" data-toggle="modal" data-target="#audi_q5">Подробнее</button>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-12">
                        <div class="imgbox">
                            <img src="<?php echo $home;?>img/works/6.png" class="unselectable">
                        </div>
                        <div class="textbox">
                            <div class="text">
                                <h5>Nissan Murano</h5>
                                <p>
                                    Цель обращения: защитный детейлинг, восстановительный детейлинг.
                                </p> 
                            </div>
                            <div class="button">
                                <button class="btn"><a href="<?php echo $home;?>works/6">Подробнее</a></button>
                            </div>
                            
                        </div>
                    </div> -->

                    <div class="col-12">
                        <div class="imgbox">
                            <img src="<?php echo $home;?>img/works/7.png" class="unselectable">
                        </div>
                        <div class="textbox">
                            <div class="text">
                                <h5>Lexus LX 570</h5>
                                <p>
                                    Цель обращения: восстановительный детейлинг.
                                </p> 
                            </div>
                            <div class="button">
                                <button class="btn" type="button" data-toggle="modal" data-target="#lexus_lx_570">Подробнее</button>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>

    </main>

    <?php
        require("../php/footer.php")
    ?>

    <?php
        require("volkswagen_touareg.php")
    ?>

    <?php
        require("audi_a5.php")
    ?>

    <?php
        require("porshe_cayenne.php")
    ?>

    <?php
        require("range_rover_sport.php")
    ?>

    <?php
        require("mercedes_benz_glk.php")
    ?>

    <?php
        require("audi_q5.php")
    ?>

    <?php
        require("lexus_lx_570.php")
    ?>

    <?php
        require("toyota_rav4.php")
    ?>

    <?php
        require("toyota_prado.php")
    ?>

    <?php
        require("../php/js.php")
    ?>
</body>

</html>