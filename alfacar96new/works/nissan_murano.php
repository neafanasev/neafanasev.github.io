<?php 
    $home = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Работы - Детейлинг-центр «AlfaCar»</title>

    <!-- css -->
    <link rel="stylesheet" href="<?php echo $home;?>geometria.css">
    <link rel="stylesheet" href="<?php echo $home;?>fonts/stylesheet.css">
    <link rel="stylesheet" href="<?php echo $home;?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $home;?>css/style.css">



</head>

<body>

    <header>
        <?php
            require("../../topbar.php");
        ?>

        <nav class="navbar navbar-expand-lg navbar-default">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"/></svg>
                    </span>
                </button>
                
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
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $home;?>actions">Акции</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $home;?>news">Новости</a>
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
            <div id="works_page_works">

                <div id="works_carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#works_carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#works_carousel" data-slide-to="1"></li>
                        <li data-target="#works_carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo $home;?>img/works/6/1.jpg" class="d-block w-100 unselectable">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo $home;?>img/works/6/2.jpg" class="d-block w-100 unselectable">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo $home;?>img/works/6/3.jpg" class="d-block w-100 unselectable">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#works_carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#works_carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


                <div class="h2box">
                    <h2>
                        Nissan Murano
                    </h2>
                </div>

                <div class="textbox">
                    <p>
                        <b>Цель обращения:</b>
                        <br>
                            Защитный детейлинг, восстановительный детейлинг.
                    </p>
                    <p>
                        <b>Возраст автомобиля:</b>
                        <br>
                            1 год.
                    </p>
                    <p>
                        <b>Работы по кузову: </b>
                        <br>
                            Детейлинг мойка, полировка кузова и оптики с последующим
                            нанесением керамического покрытия.
                    </p>
                    <p>
                        <b>Работы по салону: </b>
                        <br>
                            Химчистка салона.
                    </p>
                    <p>
                        <b>Срок выполнения работ: </b>
                        <br>
                            3 дня.
                    </p>
                </div>



            </div>
        </div>

    </main>

    <?php
        require("../../footer.php")
    ?>

    <script src="<?php echo $home;?>js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo $home;?>js/bootstrap.min.js"></script>
    <script src="<?php echo $home;?>js/common.js"></script>
</body>

</html>