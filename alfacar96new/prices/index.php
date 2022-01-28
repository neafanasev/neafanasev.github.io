<?php 
    $home = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Цены - Детейлинг-центр «AlfaCar»</title>

    <!-- css -->
    <link rel="stylesheet" href="<?php echo $home;?>geometria.css">
    <link rel="stylesheet" href="<?php echo $home;?>fonts/stylesheet.css">
    <link rel="stylesheet" href="<?php echo $home;?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $home;?>css/style.css">



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
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo $home;?>prices">Цены</a>
                        </li>
                        <li class="nav-item ">
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


        <div class="container-fluid">

            <div id="prices">
                

                <div class="h1box">
                    <h1>
                        Цены
                    </h1>
                </div>

                <div class="choose input-group">
                    <select class="custom-select" id="autotype">
                        <option selected>Выбрать тип автомобиля</option>
                        <option value="1"><img src="<?php echo $home;?>img/prices/1.svg">Седан</option>
                        <option value="2"><img src="<?php echo $home;?>img/prices/4.svg">Кроссовер</option>
                        <option value="3"><img src="<?php echo $home;?>img/prices/5.svg">Внедорожник</option>
                    </select>
                </div>

                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">Услуга</th>
                            <th scope="col" class="td1"><img src="<?php echo $home;?>img/prices/1.svg" alt=""></th>
                            <th scope="col" class="td2"><img src="<?php echo $home;?>img/prices/4.svg" alt=""></th>
                            <th scope="col" class="td3"><img src="<?php echo $home;?>img/prices/5.svg" alt=""></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Покрытие антигравийной пленкой <br> полностью кузов</th>
                            <td class="td1">90000₽</td>
                            <td class="td2">100000₽</td>
                            <td class="td3">110000₽</td>
                        </tr>
                        <tr>
                            <th scope="row">Покрытие антигравийной пленкой <br> фары (за шт.) </th>
                            <td class="td1">2000₽</td>
                            <td class="td2">2000₽</td>
                            <td class="td3">2000₽</td>
                        </tr>
                        <tr>
                            <th scope="row">Покрытие антигравийной пленкой <br> капот</th>
                            <td class="td1">15000₽</td>
                            <td class="td2">16000₽</td>
                            <td class="td3">17000₽</td>
                        </tr>
                        <tr>
                            <th scope="row">Покрытие антигравийной пленкой <br> бампер</th>
                            <td class="td1">13000₽</td>
                            <td class="td2">14000₽</td>
                            <td class="td3">15000₽</td>
                        </tr>

                        <tr>
                            <th><br></th>
                        </tr>

                        
                        <tr>
                            <th scope="row">Оклейка плёнкой «Лайт»<br> (Spectroll/Lumar)</th>
                            <td class="td1">от 47000₽</td>
                            <td class="td2">от 47000₽</td>
                            <td class="td3">от 47000₽</td>
                        </tr>
                        <tr>
                            <th scope="row">Оклейка плёнкой «Стандарт»<br> (Spectroll/Lumar)</th>
                            <td class="td1">от 55000₽</td>
                            <td class="td2">от 55000₽</td>
                            <td class="td3">от 55000₽</td>
                        </tr>
                        <tr>
                            <th scope="row">Оклейка плёнкой «Авто полностью»<br> (Spectroll/Lumar) Без крыши</th>
                            <td class="td1">от 160000₽</td>
                            <td class="td2">от 160000₽</td>
                            <td class="td3">от 160000₽</td>
                        </tr>
                        
                        <tr>
                            <th scope="row">Оклейка плёнкой «Авто полностью»<br> (Spectroll/Lumar) С крышей</th>
                            <td class="td1">от 175000₽</td>
                            <td class="td2">от 175000₽</td>
                            <td class="td3">от 175000₽</td>
                        </tr>
                        
                        <tr>
                            <th scope="row">Оклейка фар</th>
                            <td class="td1">4000₽</td>
                            <td class="td2">4500₽</td>
                            <td class="td3">5000₽</td>
                        </tr>
                        
                        <tr>
                            <th scope="row">Оклейка капота (Spectroll/Lumar)</th>
                            <td class="td1">от 18000₽</td>
                            <td class="td2">от 18000₽</td>
                            <td class="td3">от 18000₽</td>
                        </tr>
                        
                        <tr>
                            <th scope="row">Оклейка бампера (Spectroll/Lumar)</th>
                            <td class="td1">от 18000₽</td>
                            <td class="td2">от 18000₽</td>
                            <td class="td3">от 18000₽</td>
                        </tr>
                        
                        <tr>
                            <th scope="row">Оклейка крыла (1 шт.) (Spectroll/Lumar)</th>
                            <td class="td1">от 7500₽</td>
                            <td class="td2">от 7500₽</td>
                            <td class="td3">от 7500₽</td>
                        </tr>
                        
                        <tr>
                            <th scope="row">Оклейка двери (1 шт.) (Spectroll/Lumar)</th>
                            <td class="td1">от 12000₽</td>
                            <td class="td2">от 12000₽</td>
                            <td class="td3">от 12000₽</td>
                        </tr>
                        
                        <tr>
                            <th scope="row">Оклейка крыши (полоса 30см)<br></th>
                            <td class="td1">3500₽</td>
                            <td class="td2">3500₽</td>
                            <td class="td3">3500₽</td>
                        </tr>
                        
                        <tr>
                            <th scope="row">Оклейка передних стоек<br></th>
                            <td class="td1">4000₽</td>
                            <td class="td2">4000₽</td>
                            <td class="td3">4000₽</td>
                        </tr>
                        
                        <tr>
                            <th scope="row">Оклейка зон под ручками (1 шт)<br></th>
                            <td class="td1">500₽</td>
                            <td class="td2">500₽</td>
                            <td class="td3">500₽</td>
                        </tr>
                        
                        <tr>
                            <th scope="row">Оклейка внешних лакированных накладок (1 шт)<br></th>
                            <td class="td1">1000₽</td>
                            <td class="td2">1000₽</td>
                            <td class="td3">1000₽</td>
                        </tr>
                        
                        <tr>
                            <th scope="row">Оклейка зоны погрузки<br></th>
                            <td class="td1">3000₽</td>
                            <td class="td2">3000₽</td>
                            <td class="td3">3000₽</td>
                        </tr>
                        
                        <tr>
                            <th scope="row">Оклейка зеркал<br></th>
                            <td class="td1">4000₽</td>
                            <td class="td2">4000₽</td>
                            <td class="td3">4000₽</td>
                        </tr>


                        <tr>
                            <th><br></th>
                        </tr>

                        <tr>
                            <th scope="row">Полировка кузова</th>
                            <td class="td1">12000₽</td>
                            <td class="td2">14000₽</td>
                            <td class="td3">16000₽</td>
                        </tr>
                        <tr>
                            <th scope="row">Полировка кузова <br> Керамика 2 слоя</th>
                            <td class="td1">26000₽</td>
                            <td class="td2">28000₽</td>
                            <td class="td3">30000₽</td>
                        </tr>
                        <tr>
                            <th scope="row">Полировка фар (2 шт.)</th>
                            <td class="td1">1000₽</td>
                            <td class="td2">1000₽</td>
                            <td class="td3">1000₽</td>
                        </tr>
                        <tr>
                            <th scope="row">Полировка одной детали</th>
                            <td class="td1">от 1500₽</td>
                            <td class="td2">от 1500₽</td>
                            <td class="td3">от 1500₽</td>
                        </tr>
                        <tr>
                            <th scope="row">Покрытие жидким стеклом</th>
                            <td class="td1">4000₽</td>
                            <td class="td2">5000₽</td>
                            <td class="td3">6000₽</td>
                        </tr>


                        <tr>
                            <th><br></th>
                        </tr>

                        <tr>
                            <th scope="row">Удаление вмятин без покраски</th>
                            <td class="td1">от 2000₽</td>
                            <td class="td2">от 2000₽</td>
                            <td class="td3">от 2000₽</td>
                        </tr>

                        <tr>
                            <th><br></th>
                        </tr>

                        <tr>
                            <th scope="row">Покрытие стекл «Антидождь» (полусфера)</th>
                            <td class="td1">2000₽</td>
                            <td class="td2">2000₽</td>
                            <td class="td3">2000₽</td>
                        </tr>

                        <tr>
                            <th><br></th>
                        </tr>

                        <tr>
                            <th scope="row">Защитный состав на диски (4 шт.)</th>
                            <td class="td1">10000₽</td>
                            <td class="td2">10000₽</td>
                            <td class="td3">10000₽</td>
                        </tr>

                        <tr>
                            <th scope="row">Химчистка дисков (4 шт.)</th>
                            <td class="td1">2000₽</td>
                            <td class="td2">2000₽</td>
                            <td class="td3">2000₽</td>
                        </tr>

                        <tr>
                            <th><br></th>
                        </tr>

                        <tr>
                            <th scope="row">Химчистка салона (с разбором)</th>
                            <td class="td1">10000₽</td>
                            <td class="td2">12000₽</td>
                            <td class="td3">15000₽</td>
                        </tr>

                        <tr>
                            <th scope="row">Защитная обработка кожи салона</th>
                            <td class="td1">7000₽</td>
                            <td class="td2">8000₽</td>
                            <td class="td3">11000₽</td>
                        </tr>

                        <tr>
                            <th scope="row">Защитная обработка велюра, <br> текстиля салона</th>
                            <td class="td1">7000₽</td>
                            <td class="td2">8000₽</td>
                            <td class="td3">10000₽</td>
                        </tr>
                        
                        <tr>
                            <th><br></th>
                        </tr>

                        
                        <tr>
                            <th scope="row">Тонирование стекол (полусфера)</th>
                            <td class="td1">3500₽</td>
                            <td class="td2">4000₽</td>
                            <td class="td3">5000₽</td>
                        </tr>
                                
                        <tr>
                            <th><br></th>
                        </tr>

                        
                        <tr>
                            <th scope="row">Детейлинг мойка</th>
                            <td class="td1">1200₽</td>
                            <td class="td2">1400₽</td>
                            <td class="td3">1600₽</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <?php
        require("../php/footer.php")
    ?>

    <script src="<?php echo $home;?>js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo $home;?>js/bootstrap.min.js"></script>
    <script src="<?php echo $home;?>js/common.js"></script>
</body>

</html>