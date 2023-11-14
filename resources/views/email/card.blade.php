<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>СТЕЛАЖ Заказы</title>
</head>
<body>

<a style="color: red"><b>Данные по новым заказам с сайта:</b></a>

<br> <br>

'*********************************',<br>
<b>СТЕЛАЖ</b><br>
<b>Имя: </b> {{ $data['name'] }}, <br>
<b>Телефон: </b> {{ $data['phone'] }},<br>
<b>Коммент: </b> {{ $data['comment'] }},<br>
<b>Товар: </b> . {{ $data['card'] }}<br>

</body>
</html>
