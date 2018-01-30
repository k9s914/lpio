@php
    $name = 'zakazat-lending';
    $image_path = "/files/zakazat-lending/zakazat-lending";
@endphp
@component('components.lp20180129')
    @slot('title')
        Заказать лендинг {{ $name }}.lpio.ru
    @endslot

    @slot('navbar')
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand light" href="#">REIN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#posadochnaya-stranica-uslugi">Услуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#posadochnaya-stranica-tovary">Товары</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#posadochnaya-stranica-opt">Опт</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#posadochnaya-stranica-proizvodstva">Производства</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#posadochnaya-stranica-nedvizhimost">Недвижимость</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#posadochnaya-stranica-kompanii">Компании</a>
                    </li>
                </ul>
            </div>
        </nav>
    @endslot

    @slot('brand')
        Павел Рейн
    @endslot

    @slot('description')
        Маркетолог и веб-разработчик
    @endslot

    @slot('header_phone')
        <a href="tel:88129672763" class="h4-a light" onclick="yaCounter44736544.reachGoal('clickPhone'); return true;">8 (812) 967 27 63</a>
    @endslot

    @slot('header_email')
        <a href="mailto:info.lpio.ru@gmail.com" onclick="yaCounter44736544.reachGoal('clickEmail'); return true;">info.lpio.ru@gmail.com</a>
    @endslot

    @slot('header_address')
        Санкт-Петербург, м. Садовая
    @endslot

    @slot('presentation')
        ../files/zakazat-lending/zakazat-lending-0.jpg
    @endslot

    @slot('lead_magnet')
        Узнайте как при помощи лендинга с продуманным лид-магнитом для вашей схемы продаж увеличить количество клиентов
    @endslot

    @slot('details')
        <ul class="mb-0">
            <li>Срок создания лендинга - от 30 минут в зависимости от наличия контента;
            <li>Стоимость - от 2 000 руб.
        </ul>
    @endslot

    @slot('button_call_to_action')
        <button type="button" class="btn btn-primary btn-block" role="button" data-toggle="modal" data-target="#formModal"  onclick="yaCounter44736544.reachGoal('clickCallToAction'); return true;">
            Получить бесплатную консультацию
        </button>
    @endslot

    @slot('popup_form_title')
        Введите телефон, чтобы мастер вам перезвонил и сказал причину поломки и цену
    @endslot

    @slot('popup_form')
        <div class="form-group">
            <input type="text" class="form-control" id="phone" placeholder="Введите телефон" name="phone" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" role="button" onclick="yaCounter44736544.reachGoal('clickSendForm'); return true;">
                Узнать причину поломки и стоимость ремонта
            </button>
        </div>
    @endslot

    @slot('examples')
        <div class="container-fluid" id="posadochnaya-stranica-uslugi">
            @component('components.header')
                @slot('title')
                    Примеры посадочных страниц (landing page) для услуг
                @endslot
            @endcomponent
            <div class="row">

                @component('components.card')
                    @slot('image')
                        {{ $image_path}}-1.jpg
                    @endslot
                    @slot('link_primer')
                        http://ashmedia-ru.lpio.ru/
                    @endslot
                    @slot('title')
                        <a href="http://ashmedia-ru.lpio.ru/" target="_blank">Создание видеороликов для бизнеса</a>
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-2.jpg
                    @endslot
                    @slot('link_primer')
                        http://zakazat-videorolik.lpio.ru/
                    @endslot
                    @slot('title')
                        <a href="http://zakazat-videorolik.lpio.ru/" target="_blank">Сценарии, съемка, монтаж и обработка видеороликов</a>
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-3.jpg
                    @endslot
                    @slot('link_primer')
                        http://remont-holodilnikov-spb.lpio.ru/
                    @endslot
                    @slot('title')
                        <a href="http://remont-holodilnikov-spb.lpio.ru/" target="_blank">Ремонт холодильников в СПб</a>
                    @endslot
                @endcomponent

            </div>

            <div class="d-none d-lg-block">
                <br>
                <br>
            </div>

            <div class="row">
                @component('components.card')
                    @slot('image')
                        {{ $image_path}}-4.jpg
                    @endslot
                    @slot('link_primer')
                        http://remont-stiralnyh-spb.lpio.ru/
                    @endslot
                    @slot('title')
                        <a href="http://remont-stiralnyh-spb.lpio.ru/" target="_blank">Ремонт стиральных машин в СПб</a>
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-5.jpg
                    @endslot
                    @slot('link_primer')
                        http://studiya-manikyura.lpio.ru/
                    @endslot
                    @slot('title')
                        <a href="http://studiya-manikyura.lpio.ru/" target="_blank">Студия маникюра и педикюра</a>
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-6.jpg
                    @endslot
                    @slot('link_primer')
                        http://rospis-sten.lpio.ru/
                    @endslot
                    @slot('title')
                        <a href="http://rospis-sten.lpio.ru/" target="_blank">Роспись стен</a>
                    @endslot
                @endcomponent
            </div>

            <div class="d-none d-lg-block">
                <br>
                <br>
            </div>

        </div>

        <div class="container-fluid" id="posadochnaya-stranica-tovary">
            @component('components.header')
                @slot('title')
                    Примеры посадочных страниц для товаров
                @endslot
            @endcomponent
            <div class="row">

                @component('components.card')
                    @slot('image')
                        {{ $image_path}}-7.jpg
                    @endslot
                    @slot('link_primer')
                        http://belyo-calvin-klein.lpio.ru/
                    @endslot
                    @slot('title')
                        <a href="http://belyo-calvin-klein.lpio.ru/" target="_blank">Комплект женского белья Calvin Klein</a>
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-8.jpg
                    @endslot
                    @slot('link_primer')
                        http://pilka-scholl.lpio.ru/
                    @endslot
                    @slot('title')
                        <a href="http://pilka-scholl.lpio.ru/" target="_blank">Электрическая роликовая пилка Scholl Wet & Dry</a>
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-9.jpg
                    @endslot
                    @slot('link_primer')
                        http://magic-tracks.lpio.ru/
                    @endslot
                    @slot('title')
                        <a href="http://magic-tracks.lpio.ru/" target="_blank">Конструктор гоночная трасса Magic Tracks</a>
                    @endslot
                @endcomponent

            </div>

            <div class="d-none d-lg-block">
                <br>
                <br>
            </div>

        </div>

        <div class="container-fluid" id="posadochnaya-stranica-opt">
            @component('components.header')
                @slot('title')
                    Примеры посадочных страниц для оптовых поставщиков
                @endslot
            @endcomponent
            <div class="row">

                @component('components.card')
                    @slot('image')
                        {{ $image_path}}-7.jpg
                    @endslot
                    @slot('link_primer')
                        http://krossovki-opt.lpio.ru/
                    @endslot
                    @slot('title')
                        <a href="http://krossovki-opt.lpio.ru/" target="_blank">Кроссовки оптом</a>
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-8.jpg
                    @endslot
                    @slot('link_primer')
                        http://specii-opt.lpio.ru/
                    @endslot
                    @slot('title')
                        <a href="http://specii-opt.lpio.ru/" target="_blank">Специи и пряности оптом</a>
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-9.jpg
                    @endslot
                    @slot('link_primer')
                        http://detskaya-odezhda-opt.lpio.ru/
                    @endslot
                    @slot('title')
                        <a href="http://detskaya-odezhda-opt.lpio.ru/" target="_blank">Детская одежда оптом</a>
                    @endslot
                @endcomponent

            </div>

            <div class="d-none d-lg-block">
                <br>
                <br>
            </div>

        </div>

        <div class="container-fluid" id="posadochnaya-stranica-proizvodstva">
            @component('components.header')
                @slot('title')
                    Примеры посадочных страниц для производств
                @endslot
            @endcomponent
            <div class="row">

                @component('components.card')
                    @slot('image')
                        {{ $image_path}}-1.jpg
                    @endslot
                    @slot('link_primer')
                        http://ashmedia-ru.lpio.ru/
                    @endslot
                    @slot('title')
                        <a href="http://ashmedia-ru.lpio.ru/" target="_blank">Создание видеороликов для бизнеса</a>
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-2.jpg
                    @endslot
                    @slot('link_primer')
                        http://zakazat-videorolik.lpio.ru/
                    @endslot
                    @slot('title')
                        <a href="http://zakazat-videorolik.lpio.ru/" target="_blank">Сценарии, съемка, монтаж и обработка видеороликов</a>
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-3.jpg
                    @endslot
                    @slot('link_primer')
                        http://remont-holodilnikov-spb.lpio.ru/
                    @endslot
                    @slot('title')
                        <a href="http://remont-holodilnikov-spb.lpio.ru/" target="_blank">Ремонт холодильников в СПб</a>
                    @endslot
                @endcomponent

            </div>

            <div class="d-none d-lg-block">
                <br>
                <br>
            </div>

            <div class="row">
                @component('components.card')
                    @slot('image')
                        {{ $image_path}}-4.jpg
                    @endslot
                    @slot('link_primer')
                        http://remont-stiralnyh-spb.lpio.ru/
                    @endslot
                    @slot('title')
                        <a href="http://remont-stiralnyh-spb.lpio.ru/" target="_blank">Ремонт стиральных машин в СПб</a>
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-5.jpg
                    @endslot
                    @slot('link_primer')
                        http://studiya-manikyura.lpio.ru/
                    @endslot
                    @slot('title')
                        <a href="http://studiya-manikyura.lpio.ru/" target="_blank">Студия маникюра и педикюра</a>
                    @endslot
                @endcomponent

                @component('components.card')
                    @slot('image')
                        {{ $image_path }}-6.jpg
                    @endslot
                    @slot('link_primer')
                        http://rospis-sten.lpio.ru/
                    @endslot
                    @slot('title')
                        <a href="http://rospis-sten.lpio.ru/" target="_blank">Роспись стен</a>
                    @endslot
                @endcomponent
            </div>

            <div class="d-none d-lg-block">
                <br>
                <br>
            </div>

        </div>
    @endslot

    @slot('footer')
        Copyright &#169; 2017 {{ $name }}.lpio.ru
    @endslot

    @slot('footer_phone')
        <a href="tel:88129672763" onclick="yaCounter44736544.reachGoal('clickPhone'); return true;">8 (812) 967 27 63</a>
    @endslot

    @slot('footer_email')
        <a href="mailto:info.lpio.ru@gmail.com" onclick="yaCounter44736544.reachGoal('clickEmail'); return true;">info.lpio.ru@gmail.com</a>
    @endslot

    @slot('footer_address')
        Санкт-Петербург, м. Садовая
    @endslot

    @slot('yandex')
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter44736544 = new Ya.Metrika2({
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
                s.src = "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
            })(document, window, "yandex_metrika_callbacks2");
        </script>
        <!-- /Yandex.Metrika counter -->
    @endslot

@endcomponent