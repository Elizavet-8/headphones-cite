<?
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")&&(isset($_POST['city'])&&$_POST['city']!="")&&(isset($_POST['mailnumber'])&&$_POST['mailnumber']!="")&&(isset($_POST['prodId'])&&$_POST['prodId']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'hawkstyle.order@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Заказ с сайта'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['phone'].'</p>   
                        <p>Город: '.$_POST['city'].'</p>
                        <p>Номер отделения: '.$_POST['mailnumber'].'</p>   
                        <p>Модель наушников: Apple AirPods Pro</p>                      
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>
<?
if((isset($_POST['name2'])&&$_POST['name2']!="")&&(isset($_POST['phone2'])&&$_POST['phone2']!="")&&(isset($_POST['city2'])&&$_POST['city2']!="")&&(isset($_POST['mailnumber2'])&&$_POST['mailnumber2']!="")&&(isset($_POST['prodId2'])&&$_POST['prodId2']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'hawkstyle.order@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Обратный звонок'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name2'].'</p>
                        <p>Телефон: '.$_POST['phone2'].'</p>   
                        <p>Город: '.$_POST['city2'].'</p>
                        <p>Номер отделения: '.$_POST['mailnumber2'].'</p>     
                        <p>Модель наушников: Apple AirPods 2</p>                      
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>