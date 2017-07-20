@component('components.onescreen')
    @slot('title')
        Трафик и упаковка бизнеса
    @endslot
    @slot('bg')
        /files/trafik-upakovka-biznesa/bg.jpg
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
        Павел Рейн
    @endslot
    @slot('description')
        Маркетолог
    @endslot
    @slot('phone')
        +79219672763
    @endslot
    @slot('phone_view')
        8 921 967 27 63
    @endslot
    @slot('email')
        reincontent@gmail.com
    @endslot
    @slot('address')
        Санкт-Петербург, м. Невский проспект
    @endslot
    @slot('offer')
        Сделаю презентацию вашего бизнеса, повышу доверие с помощью видеомаркетинга и настрою трафик на результат
    @endslot
    @slot('bullets')
        <li>
            Цель - добиться увеличения прибыли
        </li>
        <li class="pt-1">
            Увеличить продажи, доверие, рекомендации
        </li>
        <li class="pt-1">
            Построить ростущую в прибыли систему
        </li>
    @endslot
    @slot('video')
        https://www.youtube.com/embed/YKsEeME2zb4
    @endslot
    @slot('lead_magnet')
        Получите презентацию заполнив форму
    @endslot
    @slot('form')
        <form action="/leads" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="source" value="beton">
            <input type="hidden" name="cta" value="Форма с видео">
            <div class="form-group">
                <input type="text" class="font black sw form-control w-3" id="name" placeholder="Имя" name="name">
            </div>
            <div class="form-group">
                <input type="text" class="font black sw form-control w-3" id="email" placeholder="Email" name="email">
            </div>
            <div class="form-group">
                <input type="text" class="font black sw form-control w-3" id="phone" placeholder="Телефон" name="phone">
            </div>
            <div class="form-group">
                <input type="text" class="font black sw form-control w-3" id="comment" placeholder="Сфера деятельности" name="comment">
            </div>
            <div class="form-group pb-0 mb-0">
                <button type="submit" class="font sw btn btn-primary btn-block w-4" role="button">
                    Получить
                </button>
            </div>
        </form>
    @endslot
    @slot('legal')
        Copyright &#169; 2017 lpio.ru Все права защищены
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
