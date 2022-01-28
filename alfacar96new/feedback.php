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
        $info = $_POST['info'];

        $check1 = strpos($info, $h);
        $check2 = strpos($info, $href);


        if ($_POST['name'] != '' and 
        $_POST['phone'] != '' and 
        $_POST['check'] == 'codeword' and
        ( $check1 == false and $check2 == false) ) {
        
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8";

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $info = $_POST['info'];

        $name = htmlspecialchars($name);
        $phone = htmlspecialchars($phone);
        $info = htmlspecialchars($info);

        $name = urldecode($name);
        $phone = urldecode($phone);
        $info = urldecode($info);

        $name = trim($name);
        $phone = trim($phone);
        $info = trim($info);

        $from = "neafanasev@gmail.com";

        // alfacar96@yandex.ru
        // nikitin242003@gmail.com

        if (mail("nikitin242003@gmail.com", "Заявка с сайта", "Имя: ".$name.", Телефон: ".$phone.", Дополнительная информация: ".$info ,"From:".$from, $headers)){
            mail("xiv506@yandex.ru", "Заявка с сайта", "".$name." хочет рассчитать стоимость для ".$mark.", Номер телефона: ".$phone ,"From:".$from, $headers);
            mail("alfacar96@yandex.ru", "Заявка с сайта", "".$name." хочет рассчитать стоимость для ".$mark.", Номер телефона: ".$phone ,"From:".$from, $headers);
            echo "Сообщение успешно отправлено";
            header('Location: https://alfacar96.ru/');
        } else {
            echo "При отправке сообщения возникли ошибки. Убедитесь в том, что вы корректно заполнили все поля формы обратной связи";
        }

    } else {
        echo "Что-то пошло не так";
    }

?>