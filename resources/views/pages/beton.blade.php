<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/page.css">
        <title>
            Шкаф-купе на заказ напрямую от мебельной фабрики ФЭМАС по Санкт-Петербургу и Ленинградской области
        </title>
        <style>
            body {
                background-color: white !important;
                padding-top: 54px;
            }
            .bg-img {
                background: url("/files/beton/beton-background.jpg") no-repeat;
                background-size: cover;
            }
            .bg-overlay {
                background-color: rgba(0, 0, 0, 0.5);
                color: white;
                height: 100%;
                min-height: 100%;
            }
        </style>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-99764557-1', 'auto');
          ga('send', 'pageview');

        </script>
        <script async type="text/javascript">function loadscript(e,t){var n=document.createElement("script");n.src="//lptracker.net.ru/"+e;n.onreadystatechange=t;n.onload=t;document.head.appendChild(n);return 1}var init_lstats=function(){lstats.site_id=37003;lstats.referer()};var jquery_lstats=function(){jQstat.noConflict();loadscript("stats_auto.js",init_lstats)};loadscript("jquery-1.10.2.min.js",jquery_lstats);</script>
    </head>
    <body>

        <nav class="navbar fixed-top navbar-toggleable-sm navbar-inverse bg-inverse sw" role="navigation">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand font" href="{{ url()->current() }}">Шкаф-купе</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link font" href="#video">Видео</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font" href="#type">Типы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font" href="#doors">Двери</a>
                    </li>

                </ul>
            </div>
        </nav>

        <div class="bg-img sw">
            <div class="bg-overlay">
                <div class="container font">
                    <div class="row pt-4">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-left text-lg-left text-md-left text-sm-center text-center">
                            <span class="h1 w-3">ЛЕНИНГРАДСКИЙ БЕТОННЫЙ ЗАВОД</span><br>
                            <span class="w-4">Сеть бетонных заводов</span>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-right text-lg-right text-md-right text-sm-center text-center w-4">
                            <div class="hidden-md-up">
                                <br>
                            </div>
                            <a href="tel:+78124269298" class="text-info a">+7 (812) 426-92-98</a><br>
                            <a href="mailto:info.lpio.ru@gmail.com" class="text-info a">info.lpio.ru@gmail.com</a><br>
                            п. Янино
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 offset-xl-1">
                            <h1 class="my-0 w-8">
                                Товарный бетон/раствор для стройки от завода производителя с доставкой до вашего объекта
                            </h1>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 offset-xl-1 my-0">
                            <h4 class="w-3">
                                <ul>
                                    <li>Вместимость на 20% больше стандартных шкафов<br>
                                    <li>Подбираем дизайн под любой интерьер<br>
                                    <li>Без салонной наценки напрямую с производства
                                </ul>
                            </h4>
                        </div>
                    </div>
                    <div class="row py-5">
                        <div class="col-xl-8 col-lg-8">
                            <div class="embed-responsive embed-responsive-16by9 sw" id="video">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YKsEeME2zb4?rel=0&showinfo=0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 offset-xl-0 offset-lg-0 offset-md-3">
                            <div class="container">
                                <div class="hidden-lg-up">
                                    <br>
                                </div>
                                <h4 class="w-8">
                                    Получите расчет цены шкафа-купе по вашим размерам или эскизу
                                </h4>
                                <form action="/leads" method="POST" class="pt-3">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="source" value="shkaf-kupe">
                                    <div class="form-group">
                                        <input type="text" class="font black sw form-control w-3" id="email" placeholder="Email" name="email" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="font black sw form-control w-3" id="phone" placeholder="Телефон" name="phone" required="required">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control font black w-3 sw" id="comment" rows="3" name="comment" placeholder="Размеры и комментарий"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="font sw btn btn-primary btn-block w-3" role="button">
                                            Получить расчет цены
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="type"></div>

        <div class="font">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="text-center my-0 w-8 black">
                            Изготавливаем все возможные типы шкафов-купе
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <img src="/files/shkaf-kupe/shkaf-kupe-v-prihozhuyu.jpg" class="img-fluid sw" alt="Шкаф-купе в прихожую от 45 000 р.">
                        <h4 class="py-4 my-0 text-center black w-3">
                            Шкаф-купе в прихожую от 45 000 р.
                        </h4>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <img src="/files/shkaf-kupe/vstroennyj-shkaf-kupe.jpg" class="img-fluid sw" alt="Встроенный шкаф-купе от 35 000 р.">
                        <h4 class="py-4 my-0 text-center black w-3">
                            Встроенный шкаф-купе от 35 000 р.
                        </h4>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="sw2">
                        <img src="/files/shkaf-kupe/uglovoj-shkaf-kupe.jpg" class="img-fluid sw" alt="Угловой шкаф-купе от 40 000 р.">
                    </div>
                        <h4 class="py-4 my-0 text-center black w-3">
                            Угловой шкаф-купе от 40 000 р.
                        </h4>
                    </div>
                </div>
                <div class="row pt-5 pb-5">
                    <div class="col-xl-4 col-lg-4">
                        <img src="/files/shkaf-kupe/shkaf-kupe-v-garderobnuyu-komnatu.jpg" class="img-fluid sw" alt="Шкаф-купе в гардеробную комнату от 40 000 р.">
                        <h4 class="py-4 my-0 text-center black w-3">
                            Шкаф-купе в гардеробную комнату от 40 000 р.
                        </h4>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <img src="/files/shkaf-kupe/korpusnyj-shkaf-kupe.jpg" class="img-fluid sw" alt="Корпусный шкаф-купе от 35 000 р.">
                        <h4 class="py-4 my-0 text-center black w-3">
                            Корпусный шкаф-купе от 35 000 р.
                        </h4>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <img src="/files/shkaf-kupe/radiusnyj-shkaf-kupe.jpg" class="img-fluid sw" alt="Радиусный шкаф-купе от 75 000 р.">
                        <h4 class="py-4 my-0 text-center black w-3">
                            Радиусный шкаф-купе от 75 000 р.
                        </h4>
                    </div>
                    <div class="mx-auto d-block pt-5">
                        <button class="font btn-circle btn btn-primary w-3" role="button"  data-toggle="modal" data-target="#typeFormModal">
                            Получить консультацию по типам шкафов
                        </button>
                        <div class="modal fade" id="typeFormModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h5 class="font pt-2 pb-4 my-0 weight-700 font-pt-sans text-center">
                                            Заполните форму
                                        </h5>
                                        <form action="/leads" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="source" value="shkaf-kupe">
                                            <input type="hidden" name="cta" value="Получить консультацию по типам шкафов">
                                            <div class="form-group">
                                                <input type="text" class="font black form-control w-3" id="email" placeholder="Email" name="email" required="required">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="font black form-control w-3" id="phone" placeholder="Телефон" name="phone" required="required">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control font black w-3" id="comment" rows="3" name="comment" placeholder="Размеры и комментарий"></textarea>
                                            </div>
                                            <div class="form-group mb-0">
                                                <button type="submit" class="font btn btn-primary btn-block" role="button">
                                                    Получить консультацию по типам шкафов
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-faded" id="doors">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-12 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-0 offset-lg-2">
                        <h2 class="text-center my-0 black w-8">
                            Фасады и двери для шкафа-купе на ваш выбор
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <img src="/files/shkaf-kupe/shkaf-kupe-ldsp.jpg" class="img-fluid sw" alt="Шкаф-купе ЛДСП">
                        <h4 class="py-4 my-0 text-center black w-3">
                            Ламинированное ДСП
                        </h4>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <img src="/files/shkaf-kupe/shkaf-kupe-mdf.jpg" class="img-fluid sw" alt="Шкаф-купе МДФ">
                        <h4 class="py-4 my-0 text-center black w-3">
                            Панели МДФ
                        </h4>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <img src="/files/shkaf-kupe/shkaf-kupe-zerkala.jpg" class="img-fluid sw" alt="Шкаф-купе с зеркалами">
                        <h4 class="py-4 my-0 text-center black w-3">
                            Зеркала
                        </h4>
                    </div>
                </div>
                <div class="row pt-5 pb-5">
                    <div class="col-xl-4 col-lg-4">
                        <img src="/files/shkaf-kupe/shkaf-kupe-fotopechat.jpg" class="img-fluid sw" alt="Шкаф-купе с фотопечатью">
                        <h4 class="py-4 my-0 text-center black w-3">
                            Фотопечать
                        </h4>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <img src="/files/shkaf-kupe/shkaf-kupe-peskostrujnyj-risunok.jpg" class="img-fluid sw" alt="Шкаф-купе с пескоструйным рисунком">
                        <h4 class="py-4 my-0 text-center black w-3">
                            Пескоструйный рисунок
                        </h4>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <img src="/files/shkaf-kupe/shkaf-kupe-cvetnoe-steklo.jpg" class="img-fluid sw" alt="Шкаф-купе с цветным стеклом">
                        <h4 class="py-4 my-0 text-center black w-3">
                            Цветное стекло
                        </h4>
                    </div>
                    <div class="mx-auto d-block pt-5">
                        <button class="font btn-circle btn btn-primary w-3" role="button"  data-toggle="modal" data-target="#fasadFormModal">
                            Получить консультацию по фасадам шкафов
                        </button>
                        <div class="modal fade" id="fasadFormModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h5 class="font pt-2 pb-4 my-0 weight-700 font-pt-sans text-center">
                                            Заполните форму
                                        </h5>
                                        <form action="/leads" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="source" value="shkaf-kupe">
                                            <input type="hidden" name="cta" value="Получить консультацию по фасадам шкафов">
                                            <div class="form-group">
                                                <input type="text" class="font black btn-circle form-control" id="name" placeholder="Имя" name="name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="font black btn-circle form-control" id="email" placeholder="Email" name="email" required="required">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="font black btn-circle form-control" id="phone" placeholder="Телефон" name="phone" required="required">
                                            </div>
                                            <div class="form-group mb-0">
                                                <button type="submit" class="font btn-circle btn btn-primary btn-block" role="button">
                                                    Получить консультацию по фасадам шкафов
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="white">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="text-center my-0 w-8 black">
                            Работаем по Санкт-Петербургу и Ленинградской области
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid hidden-sm-up px-0">
                <img src="/files/shkaf-kupe/shkaf-kupe-besplatnyj-vyezd-dizajnera-proektirovshchika-po-sankt-peterburgu.jpg" class="img-fluid mx-auto d-block sw" alt="Бесплатный выезд дизайнера-проектировщика по Санкт-Петербургу">
            </div>
            <div class="container hidden-xs-down px-0">
                <img src="/files/shkaf-kupe/shkaf-kupe-besplatnyj-vyezd-dizajnera-proektirovshchika-po-sankt-peterburgu.jpg" class="img-fluid mx-auto d-block sw" alt="Бесплатный выезд дизайнера-проектировщика по Санкт-Петербургу">
            </div>
            <div class="container pb-5">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2">
                        <h4 class="my-0 pt-5 w-8 black">
                            Бесплатный выезд дизайнера-проектировщика по Санкт-Петербургу
                        </h4>
                        <div class="pt-4 s-17 black">
                            Вы можете посетить производственных цех, на котором будет изготавливаться ваш шкаф по адресу Санкт-Петербург, улица Потапова, дом 2, литера М. Двухэтажное здании мебельной фабрики ФЭМАС.
                        </div>
                    </div>
                    <div class="mx-auto d-block pt-5">
                        <button class="btn btn-primary font btn-circle w-3" role="button"  data-toggle="modal" data-target="#designerFormModal">
                            Бесплатно вызвать дизайнера
                        </button>
                        <div class="modal fade" id="designerFormModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h5 class="font pt-2 pb-4 my-0 weight-700 font-pt-sans text-center">
                                            Заполните форму
                                        </h5>
                                        <form action="/leads" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="source" value="shkaf-kupe">
                                            <input type="hidden" name="cta" value="Бесплатный выезд дизайнера">
                                            <div class="form-group">
                                                <input type="text" class="font black btn-circle form-control" id="name" placeholder="Имя" name="name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="font black btn-circle form-control" id="email" placeholder="Email" name="email" required="required">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="font black btn-circle form-control" id="phone" placeholder="Телефон" name="phone" required="required">
                                            </div>
                                            <div class="form-group mb-0">
                                                <button type="submit" class="font btn-circle btn btn-primary btn-block" role="button">
                                                    Бесплатно вызвать дизайнера
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-faded">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="my-0 text-center w-8 black">
                            Гарантия на 30 000 циклов открываний механизмов
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid hidden-sm-up px-0">
                <img src="/files/shkaf-kupe/shkaf-kupe-ustanovka-za-1-den.jpg" class="img-fluid mx-auto d-block sw" alt="Установка за 1 день">
            </div>
            <div class="container hidden-xs-down px-0">
                <img src="/files/shkaf-kupe/shkaf-kupe-ustanovka-za-1-den.jpg" class="img-fluid mx-auto d-block sw" alt="Установка за 1 день">
            </div>
            <div class="container pb-5">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2">
                        <h4 class="my-0 pt-5 w-8 black">
                            Установка за 1 день
                        </h4>
                        <div class="pt-4 s-17 black">
                            Итальянские станки класса А+ SKM обеспечивают европейскую точность допусков при обработке мебельных заготовок. Поэтому панели и полки получаются ровными и шкаф-купе устанавливаются за 1 день. Каждое изделие проверяется отделом технического контроля перед отгрузкой.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="white">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="my-0 text-center w-8 black">
                            Цена ниже на 30%, чем в салонах
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid hidden-sm-up px-0">
                <img src="/files/shkaf-kupe/shkaf-kupe-c-rassrochkoj-bez-pervogo-vznosa.jpg" class="img-fluid mx-auto d-block sw" alt="Рассрочка без первого взноса">
            </div>
            <div class="container hidden-xs-down px-0">
                <img src="/files/shkaf-kupe/shkaf-kupe-c-rassrochkoj-bez-pervogo-vznosa.jpg" class="img-fluid mx-auto d-block sw" alt="Рассрочка без первого взноса">
            </div>
            <div class="container pb-5">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2">
                        <h4 class="my-0 pt-5 w-8 black">
                            Рассрочка без первого взноса
                        </h4>
                        <div class="pt-4 s-17 black">
                            Предоставляем рассрочку 0% на срок до 12 месяцев без первого взноса. Принимаем к оплате банковские карты и электронные переводы. Цена шкафа-купе в зависимости от конфигурации 34 900 до 500 000 рублей. Продажа напрямую от производителя в Санкт-Петербурге, поэтому цены ниже на 30%, чем в салонах.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-faded">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="my-0 text-center w-8 black">
                            Бесплатный 3D дизайн-проект
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid hidden-sm-up px-0">
                <img src="/files/shkaf-kupe/besplatnyj-3d-dizajn-proekt-shkafa-kupe.jpg" class="img-fluid mx-auto d-block sw" alt="Наглядная демонстрация вашего шкафа-купе">
            </div>
            <div class="container hidden-xs-down px-0">
                <img src="/files/shkaf-kupe/besplatnyj-3d-dizajn-proekt-shkafa-kupe.jpg" class="img-fluid mx-auto d-block sw" alt="Наглядная демонстрация вашего шкафа-купе">
            </div>
            <div class="container pb-5">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2">
                        <h4 class="my-0 pt-5 w-8 black">
                            Наглядная демонстрация вашего шкафа-купе
                        </h4>
                        <div class="pt-4 s-17 black">
                            Дизайнер-проектировщик подскажет какое функциональное наполнение подойдет в вашем случае в зависимости от предпочитаемой одежды. Проектирование 1 день. Изготовление 3-14 дней. Доставка и сборка 1 день. 6 вариантов шкафов: корпусные, встроенные, угловые, гардеробные, радиусные, прихожие. 6 видов фасадов: ЛСДП, МДФ, зеркала, фотопечать, пескоструйный рисунок, цветное стекло.
                        </div>
                    </div>
                    <div class="mx-auto d-block pt-5">
                        <button class="btn btn-primary font btn-circle w-3" role="button"  data-toggle="modal" data-target="#designerFormModal">
                            Бесплатно вызвать дизайнера
                        </button>
                        <div class="modal fade" id="designerFormModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h5 class="font pt-2 pb-4 my-0 weight-700 font-pt-sans text-center">
                                            Заполните форму
                                        </h5>
                                        <form action="/leads" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="source" value="shkaf-kupe">
                                            <input type="hidden" name="cta" value="Бесплатный выезд дизайнера 2">
                                            <div class="form-group">
                                                <input type="text" class="font black btn-circle form-control" id="name" placeholder="Имя" name="name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="font black btn-circle form-control" id="email" placeholder="Email" name="email" required="required">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="font black btn-circle form-control" id="phone" placeholder="Телефон" name="phone" required="required">
                                            </div>
                                            <div class="form-group mb-0">
                                                <button type="submit" class="font btn-circle btn btn-primary btn-block" role="button">
                                                    Бесплатно вызвать дизайнера
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="white">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="my-0 text-center w-8 black">
                            Гарантия 5 лет
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid hidden-sm-up px-0">
                <img src="/files/shkaf-kupe/besplatnyj-remont-v-techenii-2-dnej-shkafa-kupe.jpg" class="img-fluid mx-auto d-block sw" alt="Бесплатный ремонт в течении 2 дней">
            </div>
            <div class="container hidden-xs-down px-0">
                <img src="/files/shkaf-kupe/besplatnyj-remont-v-techenii-2-dnej-shkafa-kupe.jpg" class="img-fluid mx-auto d-block sw" alt="Бесплатный ремонт в течении 2 дней">
            </div>
            <div class="container pb-5">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2">
                        <h4 class="my-0 pt-5 w-8 black">
                            Бесплатный ремонт в течении 2 дней
                        </h4>
                        <div class="pt-4 s-17 black">
                            Надежная оригинальная фурнитура, механизмы и комплектующие Blum (Произведено в Австрии) и Hettich (Произведено в Германии). Если с изделием что-то произойдет, то к вам в течении 1-2 дней, приедет мастер по рекламации, который все исправит и при необходимости заменит вышедшие из строя детали.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-faded">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="my-0 text-center w-8 black">
                            Опыт работы дизайнеров-проектировщиков 10 лет
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid hidden-sm-up px-0">
                <img src="/files/shkaf-kupe/opyt-raboty-dizajnerov-proektirovshchikov-shkafov-kupe-10-let.jpg" class="img-fluid mx-auto d-block sw" alt="28000 шкафов-купе произвели и установили за 18 лет работы">
            </div>
            <div class="container hidden-xs-down px-0">
                <img src="/files/shkaf-kupe/opyt-raboty-dizajnerov-proektirovshchikov-shkafov-kupe-10-let.jpg" class="img-fluid mx-auto d-block sw" alt="28000 шкафов-купе произвели и установили за 18 лет работы">
            </div>
            <div class="container pb-5">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2">
                        <h4 class="my-0 pt-5 w-8 black">
                            28000 шкафов-купе произвели и установили за 18 лет работы
                        </h4>
                        <div class="pt-4 s-17 black">
                            Каждый месяц изготавливаем и устанавливаем 150+ шкафов-купе всех видов. Дизайнер-проектировщик замерит помещение. Поможет с выбором шкафа-купе и покажет в чем отличие между разными моделями. Продемонстрирует образцы материалов и каталог готовых изделий. Сделает для вас 3D дизайн-проект по вашим пожеланиям. Добавит любые нестандартные решения в конструкцию и внешнему виду. Правильно спроектирует, чтобы им было удобно пользоваться, в него поместились все ваши вещи и шкаф-купе получился красивым.
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!---
        <div id="comments"></div>

        <div class="container pt-5">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2">
                    <h2 class="text-center my-0 weight-700 font-pt-sans">
                        Оставьте размеры или эскиз вашего шкафа и мы рассчитаем стоимость
                    </h2>
                </div>
            </div>
        </div>
        <div class="container pt-5">
            <div class="row">
                <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-xs-12 offset-xl-1">
                    <div class="pt-3" id="mc-container"></div>
                    <br>
                    <script type="text/javascript">
                        cackle_widget = window.cackle_widget || [];
                        cackle_widget.push({widget: 'Comment', id: 49982});
                        (function() {
                            var mc = document.createElement('script');
                            mc.type = 'text/javascript';
                            mc.async = true;
                            mc.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cackle.me/widget.js';
                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(mc, s.nextSibling);
                        })();
                    </script>
                </div>
            </div>
        </div>
--->
        <div class="">
            <div class="container py-5 font w-4">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6 col-12 text-xl-left text-lg-left text-md-left text-sm-center text-center">
                        &#169; 2017 shkaf-kupe.lpio.ru Все права защищены
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6 col-12 text-xl-right text-lg-right text-md-right text-sm-center text-center">
                        <div class="hidden-md-up">
                            <br>
                        </div>
                        <a href="tel:+78124269298" class="a">+7 (812) 426-92-98</a>
                        <br>
                        <a href="mailto:info.lpio.ru@gmail.com" class="a">info.lpio.ru@gmail.com</a><br>
                        СПб, ул. Потапова 2 лит М
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter44736544 = new Ya.Metrika({
                            id:44736544,
                            clickmap:true,
                            trackLinks:true,
                            accurateTrackBounce:true,
                            webvisor:true,
                            trackHash:true
                        });
                    } catch(e) { }
                });

                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () { n.parentNode.insertBefore(s, n); };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/watch.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
            })(document, window, "yandex_metrika_callbacks");
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/44736544" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
    </body>
</html>