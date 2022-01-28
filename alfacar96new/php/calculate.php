<?php
    header("Content-Type: text/html; charset=utf-8");
?>

<?php
    $f1 = '://';
    $f2 = 'href';
    $f3 = '.com';
    $f4 = '.ru';
    $f5 = '.biz';
    $f6 = '.net';
    $f7 = '.рф';
    $f8 = '.org';
    $mark = $_POST['mark'];

    $c1 = strpos($mark, $f1);
    $c2 = strpos($mark, $f2);
    $c3 = strpos($mark, $f3);
    $c4 = strpos($mark, $f4);
    $c5 = strpos($mark, $f5);
    $c6 = strpos($mark, $f6);
    $c7 = strpos($mark, $f7);
    $c8 = strpos($mark, $f8);



    if ($_POST['name'] != '' and 
    $_POST['phone'] != '' and 
    trim($_POST['mark']) != '' and 
    $_POST['check'] == 'codeword' and
    ( $c1 == false and $c2 == false and $c3 == false and $c4 == false and $c5 == false and $c6 == false and $c7 == false  and $c8 == false) ) {
    
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8";

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $mark = $_POST['mark'];

        $name = htmlspecialchars($name);
        $phone = htmlspecialchars($phone);
        $mark = htmlspecialchars($mark);

        $name = urldecode($name);
        $phone = urldecode($phone);
        $mark = urldecode($mark);

        $name = trim($name);
        $phone = trim($phone);
        $mark = trim($mark);

        $from = "neafanasev@gmail.com";

        // alfacar96@yandex.ru
        // nikitin242003@gmail.com

        if (mail("nikitin242003@gmail.com", "Заявка с сайта", "".$name." хочет рассчитать стоимость для ".$mark.", Номер телефона: ".$phone ,"From:".$from, $headers)){
            mail("xiv506@yandex.ru", "Заявка с сайта", "".$name." хочет рассчитать стоимость для ".$mark.", Номер телефона: ".$phone ,"From:".$from, $headers);
            mail("alfacar96@yandex.ru", "Заявка с сайта", "".$name." хочет рассчитать стоимость для ".$mark.", Номер телефона: ".$phone ,"From:".$from, $headers);
            echo "Сообщение успешно отправлено";
            header('Location: https://alfacar96.ru/');
        } else {
            echo "При отправке сообщения возникли ошибки. Убедитесь в том, что вы корректно заполнили все поля формы обратной связи";
        }
    }

?>