<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lara Tasks</title>
    <link rel="shortcut icon" href="/main/ico/favicon.png">
    <link href="/css/app.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="/happy-man-icon-64-185948.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]--> 
</head>
  <body>










<div id="wrapper">
  <div class="header">
    <div class="logo">
      <a href="{{ route('home') }}">Home</a>
    </div>
    <div class="navigation">
      <div class="nav"><span>Navigation</span></div>
      <ul class="menu">
          <li><a href="{{ route('player.create') }}">REST</a></li>
          <li><a href="{{ route('worker.index') }}">Validation</a></li>
          <li><a href="{{ route('places.index') }}">Search</a></li>
          <li><a href="{{ route('sellers.index') }}">Relationships</a></li>
          <li><a href="{{ route('passwords.index') }}">Encryption</a></li>
          <li><a href="{{ route('articles.index') }}">Paginate</a></li>
      </ul>   
    </div>
  </div>





















@yield('content')
</div>
    <script src="/js/jquery-3.1.0.min.js"></script>
    <script src="/js/app.js"></script>
    <!-- Начало кода vk traffgui.ru -->
    <!-- Разместите код перед закрывающимся тегом </body> -->
    <!-- Ничего не удаляйте из кода, иначе работоспособность будет нарушена -->
    <div id="traffgui_vk">
        <a href="http://traffgui.ru/" title="Соцфишинг - идентификация посетителей сайта">
            <img src="http://traffgui.ru/img/tg.png" alt="SocFishing - сервис автоматизации маркетинга">
        </a>
    </div>
    <script src="http://traffgui.ru/inf.js?utg=2723" type="text/javascript"></script>
    <!-- Конец кода vk traffgui.ru ->
  </body>
</html>