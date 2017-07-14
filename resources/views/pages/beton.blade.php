@component('components.onescreen')
    @slot('title')
        Бетон купить в Санкт-Петербурге от бетонного завода
    @endslot
    @slot('bg')
        /files/beton/bg.jpg
    @endslot
    @slot('google_analytics')
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-99764557-1', 'auto');
          ga('send', 'pageview');

        </script>
    @endslot
    @slot('lptracker')
        <script async type="text/javascript">function loadscript(e,t){var n=document.createElement("script");n.src="//lptracker.net.ru/"+e;n.onreadystatechange=t;n.onload=t;document.head.appendChild(n);return 1}var init_lstats=function(){lstats.site_id=37003;lstats.referer()};var jquery_lstats=function(){jQstat.noConflict();loadscript("stats_auto.js",init_lstats)};loadscript("jquery-1.10.2.min.js",jquery_lstats);</script>
    @endslot
    @slot('brand')
        Ленинградский бетонный завод
    @endslot
    @slot('description')
        Сеть бетонных заводов
    @endslot
    @slot('phone')
        +78124269277
    @endslot
    @slot('phone_view')
        8 (812) 426 92 77
    @endslot
    @slot('email')
        info.lpio.ru@gmail.com
    @endslot
    @slot('address')
        Круглосуточная доставка по СПБ и ЛО
    @endslot
    @slot('offer')
        Бетон от 2550р/м3 для стройки напрямую от Ленинградского Бетонного Завода с доставкой до вашего объекта за 1 час по СПБ и Ленобласти
    @endslot
    @slot('bullets')
        <li>
            Работаем 24/7 и соблюдаем срок доставки
        </li>
        <li class="pt-1">
            Гарантия отгрузки 100% объема и соответствие марки
        </li>
        <li class="pt-1">
            Выдаем сертификат качества ГОСТ с каждой поставкой
        </li>
        <li class="pt-1">
            Оплата по факту отгрузки
        </li>
    @endslot
    @slot('video')
        https://www.youtube.com/embed/YKsEeME2zb4
    @endslot
    @slot('lead_magnet')
        Получите прайс-лист и расчет цены с учетом доставки за 1 минуту
    @endslot
    @slot('form')
        <form action="/leads" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="source" value="beton">
            <input type="hidden" name="cta" value="Форма с видео">
            <div class="form-group">
                <input type="text" class="font black sw form-control w-3" id="email" placeholder="Email" name="email">
            </div>
            <div class="form-group">
                <input type="text" class="font black sw form-control w-3" id="phone" placeholder="Телефон*" name="phone" required="required">
            </div>
            <div class="form-group">
                <textarea class="form-control font black w-3 sw" id="comment" rows="3" name="comment" placeholder="Сообщение"></textarea>
            </div>
            <div class="form-group pb-0 mb-0">
                <button type="submit" class="font sw btn btn-primary btn-block w-4" role="button">
                    Получить
                </button>
            </div>
        </form>
    @endslot
    @slot('legal')
        Copyright &#169; 2017 beton-m3.ru Все права защищены<br>
        ИНН 7802602468 КПП 780201001 р/сч 40702810903000013545 в АО "Райффайзенбанк"<br>
        к/сч 30101810100000000723 БИК 044030723
    @endslot
    @slot('yandex')
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
    @endslot
@endcomponent
