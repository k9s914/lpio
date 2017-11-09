@component('components.landing-page-bullet')

    @slot('bg_image')
        /files/remont-stiralnyh/remont-stiralnyh.jpg
    @endslot

    @slot('brand')
        REIN
    @endslot

    @slot('description')
        Ремонт стиральных машин по Санкт-Петербургу
    @endslot

    @slot('phone')
        88129672763
    @endslot

    @slot('phone_view')
        8 (812) 967 27 63
    @endslot

    @slot('email')
        info.lpio@ya.ru
    @endslot

    @slot('offer')
        Узнайте причину поломки стиральной машины и стоимость ремонта за 3 минуты
    @endslot

    @slot('details')
        Уточним детали и диагностируем вероятную причину поломки по телефону
    @endslot

    @slot('form_inputs')
        <div class="form-group">
            <input type="text" class="form-control" id="phone" placeholder="Телефон" name="phone" required>
        </div>
    @endslot

    @slot('form_cta')
        Узнать бесплатно
    @endslot

    @slot('legal')
        remont-stiralnyh.lpio.ru
    @endslot

    @slot('google')
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-99764557-1', 'auto');
          ga('send', 'pageview');
        </script>
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
