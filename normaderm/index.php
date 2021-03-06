<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8"/>
    <title>Normaderm</title>
       <link href="css/main.060f.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/stylev3.css" type="text/css" media="screen, projection"/><link href="../common/message.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/animate.css">
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
	 <script type="text/javascript" src="js/cookie.js"></script>
       <script type="text/javascript" src="js/preloader.js"></script>
<script type="text/javascript" src="../common/message.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	$('#button').on('click', function() {
        $.ajax({
			url: 'click.php',
			method: 'get',
			dataType: 'json',
			data: {id: '3'},     //id счетчика
			success: function(data){
				$('#count').html(data.count);
				//alert(data.ip);
				if(data.ip){
					$('#button').prop('disabled', true);
				}
			}
		});

	});


});
</script>
  </head>
  <body>
    <div class="preloader">
        <div class="start__cube">
          <div class="start__cube-box start__cube-box-center">
            <div class="logo-text">
              <div>ACD</div>
              <div>КОНГРЕСС</div>
            </div>
            <a data-id="center" class="cube cube--center">
              <div class="cube__side cube__side--front"></div>
              <div class="cube__side cube__side--back"></div>
              <div class="cube__side cube__side--left"></div>
              <div class="cube__side cube__side--right"></div>
              <div class="cube__side cube__side--top"></div>
              <div class="cube__side cube__side--bottom"></div>
              <div class="cube-shadow"></div>
            </a>
          </div>
        </div>
      </div>
    <div class="wrap">
      <div class="common-bg hide"></div>
      <div class="over-wrap">
        <div id="page">
          <nav class="abs main-m">
            <a href="../labs/labvichy/index.html" class="prev-move"></a>
            <a href="../index.html" class="home-move"></a>
            <a href="#" class="next-move"></a>
              <div class="tooltip" style=""><span class="tooltiptext">Пройти дальше</span></div>
          </nav>
          <div class="sl sl1 _show">
            <div class="abs like">
				<?php
	$id_counter = "3"; //id счетчика
	require_once "select_count.php";
?>
              <p>
                Я рекомендую<br>
                <b>NORMADERM</b> PHYTOSOLUTION<br>
                <b><span id="count"><?php echo $count; ?></span> коллег</b> рекомендуют
              </p>
               <input id="input_count" type="hidden" value="0">
       			<form class="abs">
				 <input type="button" id="button" value="" >
              </form>
            </div>
            <div class="abs tub"></div>
            <h1 class="abs">NORMADERM<span>PHYTOSOLUTION</span></h1>
            <h2 class="abs">
              Корректирующий уход двойного<br>действия
              <span>Эффективен против акне,<br>восстанавливает барьерную<br>функцию кожи</span>
            </h2>
          </div>
          <div class="sl sl2">
            <div class="abs tub"></div>
            <a href="#normaderm-update" class="abs sl2-links sl2-link1">
              <span class="abs">актуализация</span>
            </a>
            <a href="#normaderm-key" class="abs sl2-links sl2-link2">
              <span class="abs">ключевой<br />ингредиент</span>
            </a>
            <a href="#normaderm-gamma" class="abs sl2-links sl2-link3">
              <span class="abs">гамма</span>
            </a>
            <a href="#normaderm-scheme" class="abs sl2-links sl2-link4">
              <span class="abs">схема<br />применения</span>
            </a>
            <div class="abs ovec vec1">
              <div class="abs cube cube1"></div>
              <p class="abs text text1"><b>интервью проф.<br>brigitte dreno</b></p>
              <a href="#normaderm-video1" class="abs"></a>
            </div>
            <div class="abs ovec vec2">
              <div class="abs cube cube2"></div>
              <p class="abs text text2">КЛЮЧЕВЫЕ<br><b>ИНГРЕДИЕНТЫ</b></p>
              <a href="#normaderm-key2" class="abs"></a>
            </div>
            <div class="abs ovec vec3">
              <div class="abs cube cube3"></div>
              <p class="abs text text3">Гамма<br><b>Normaderm</b></p>
              <a href="#normaderm-gamma2" class="abs"></a>
            </div>
            <div class="abs ovec vec4">
              <div class="abs cube cube4"></div>
              <p class="abs text text4">скачать<br><b>схему<br>применения</b></p>
              <a href="https://lorealcongress.ru/files/scheme_normaderm.pdf" target="_blank" class="abs"></a>
            </div>
          </div>
          <div class="abs m_pop1">
            <div class="abs x"></div>
            <p class="abs m_pop1-p1">Какие экспозом факторы в первую очередь влияют на кожный барьер при акне?</p>
            <p class="abs m_pop1-p2">проф. Brigitte Dreno</p>
            <iframe id='player1' width="1024" height="575" src="https://www.youtube.com/embed/D7g50_WFfbA?enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="abs m_pop2">
            <div class="abs x"></div>
            <p class="abs q1">NORMADERM <span>PHYTOSOLUTION</span></p>
            <p class="abs q2">ПРОТИВ АКНЕ</p>
            <p class="abs q3">ВОССТАНОВЛЕНИЕ<br>БАРЬЕРНОЙ ФУНКЦИИ КОЖИ</p>
            <p class="abs q4">Салициловая кислота 2%</p>
            <p class="abs q5">ПРОБИОТИК BIFIDUS 1%<br>лизат Bifidobacterium longum</p>
            <p class="abs q6">Оказывает противовоспалительное<br>и кератолитическое действие</p>
            <p class="abs q7">Укрепляет защитный барьер кожи</p>
            <p class="abs q8">среднее значение</p>
            <p class="abs q9">максимально<br>возможное значение</p>
            <p class="abs q10">
              TECT IN VIVO
              <span><b>Протокол:</b> 20 человек (14-30 лет) с кожей, склонной<br>к акне. Нанесение 2% крема 2 раза в день в течение<br>4 недель</span>
            </p>
            <p class="abs q11">
              TECT IN VIVO
              <span><b>Протокол:</b> Bifidus lysate или плацебо наносили на кожу<br>2 раза в день, в течение 2-х месяцев. Уровень<br>повреждения рогового слоя оценивали при помощи тест-полосок, которые клеились на кожу и удалялись</span>
            </p>
            <div class="abs g1">
              <span>-44%</span>
            </div>
            <div class="abs g2"></div>
            <div class="abs g3">
              <span>-18%</span>
            </div>
            <div class="abs g4"></div>
            <div class="abs g5">
              <span>-26%</span>
            </div>
            <div class="abs g6"></div>
            <div class="abs g7">
              <span>-14%</span>
            </div>
            <div class="abs g8"></div>
            <div class="abs g9">
              <span>-12%</span>
            </div>
            <div class="abs g10"></div>
            <div class="abs g11"></div>
            <div class="abs g12"></div>
            <div class="abs g13"></div>
            <div class="abs g14"></div>
            <div class="abs g15"></div>
            <div class="abs g16"></div>
            <div class="abs arrow"></div>
            <p class="abs q12">+48<span>%</span></p>
          </div>
          <div class="abs m_pop3">
            <div class="abs x"></div>
            <p class="abs w1">Гамма <b>NORMADERM</b> <span>PHYTOSOLUTION</span></p>
            <p class="abs w3">очищение</p>
            <p class="abs w4">основной УХОД</p>
            <p class="abs w5">дополнительный уход</p>

            <p class="abs w12">
              Очищающий гель<br>для умывания
            </p>
            <p class="abs w13">
              Корректирующий уход<br>двойного действия
            </p>
            <p class="abs w14">
              Матирующий гель<br>для умывания
            </p>
            <p class="abs w15">
              Очищающий<br>лосьон
            </p>
            <p class="abs w16">
              Матирующий<br>спрей
            </p>
            <div class="abs o o1"></div>
            <div class="abs o o2"></div>
            <div class="abs o o3"></div>
            <div class="abs o o4"></div>
            <div class="abs o o5"></div>
          </div>
          <div class="abs m_pop4">
            <div class="abs x"></div>
            <p class="abs e1">NORMADERM <span>PHYTOSOLUTION</span></p>
            <p class="abs e2">Корректирующий уход двойного действия</p>
            <ul class="abs list list1">
              <li>0,2% гиалуроновая кислота</li>
              <li>1% пробиотик BIFIDUS</li>
              <li>Вулканическая вода VICHY</li>
            </ul>
            <ul class="abs list list2">
              <li>2% салициловая кислота</li>
              <li>0,2% витамин GG</li>
              <li>2% фикосахарид</li>
            </ul>
            <p class="abs plsh plsh1">УМЕНЬШАЕТ ПОЯВЛЕНИЕ АКНЕ</p>
            <p class="abs plsh plsh2">СНИЖАЕТ ВЫРАЖЕННОСТЬ<br>ПОСТВОСПАЛИТЕЛЬНОЙ<br>ГИПЕРПИГМЕНТАЦИИ</p>
            <p class="abs plsh plsh3">ПОВЫШАЕТ БАРЬЕРНЫЕ ФУНКЦИИ<br>КОЖИ</p>
            <p class="abs plsh plsh4">УЛУЧШАЕТ КАЧЕСТВО КОЖИ</p>
            <div class="abs tub"></div>
          </div>
          <div class="abs m_pop5">
            <div class="abs x"></div>
            <p class="abs e1">NORMADERM <span>PHYTOSOLUTION</span></p>
            <p class="abs e2">Матирующий гель для умывания с вулканическим перлитом</p>
            <ul class="abs list list1">
              <li>Ниацинамид</li>
              <li>Древесный уголь</li>
            </ul>
            <ul class="abs list list2">
              <li>10% каолин + перлит</li>
              <li>0,5% салициловая кислота</li>
            </ul>
            <p class="abs plsh plsh1">Эффективно очищает</p>
            <p class="abs plsh plsh2">Абсорбирует себум и<br>атмосферные поллютанты</p>
            <p class="abs plsh plsh3">Оказывает себорегулирующее<br>действие</p>
            <div class="abs tub"></div>
          </div>
          <div class="abs m_pop6">
            <div class="abs x"></div>
            <p class="abs e1">NORMADERM <span>PHYTOSOLUTION</span></p>
            <p class="abs e2">Очищающий гель для умывания</p>
            <ul class="abs list list1">
              <li>Цинк</li>
              <li>Медь</li>
              <li>Пробиотик BIFIDUS</li>
            </ul>
            <ul class="abs list list2">
              <li>Салициловая кислота</li>
              <li>Вулканическая вода VICHY</li>
            </ul>
            <p class="abs plsh plsh1">ГЛУБОКО ОЧИЩАЕТ КОЖУ</p>
            <p class="abs plsh plsh2">ЗНАЧИТЕЛЬНО УМЕНЬШАЕТ<br>КОЛИЧЕСТВО ВОСПАЛИТЕЛЬНЫХ<br>И РЕТЕНЦИОННЫХ ЭЛЕМЕНТОВ</p>
            <p class="abs plsh plsh3">ПОДДЕРЖИВАЕТ ЕСТЕСТВЕННЫЙ<br>УРОВЕНЬ pH</p>
            <div class="abs tub"></div>
          </div>
          <div class="abs m_pop7">
            <div class="abs x"></div>
            <p class="abs e1">NORMADERM <span>PHYTOSOLUTION</span></p>
            <p class="abs e2">Очищающий лосьон, сужающий поры</p>
            <ul class="abs list list1">
              <li>Салициловая кислота</li>
              <li>Гликолевая кислота</li>
              <li>Вулканическая вода VICHY</li>
            </ul>
            <ul class="abs list list2">
              <li>Глицерин</li>
              <li>Спирт</li>
            </ul>
            <p class="abs plsh plsh1">ОЧИЩАЕТ И СУЖАЕТ ПОРЫ</p>
            <p class="abs plsh plsh2">Обладает кератолитическим<br>действием</p>
            <div class="abs tub"></div>
          </div>
          <div class="abs m_pop9">
            <div class="abs x"></div>
            <p class="abs e1">NORMADERM <span>PHYTOSOLUTION</span></p>
            <p class="abs e2">Матирующий спрей — контроль жирности</p>
            <ul class="abs list list1">
              <li>Ниацинамид</li>
              <li>Глицерин</li>
              <li>Вулканическая вода VICHY</li>
            </ul>
            <p class="abs plsh plsh1">ОКАЗЫВАЕТ МГНОВЕННОЕ<br>МАТИРУЮЩЕЕ ДЕЙСТВИЕ</p>
            <p class="abs plsh plsh2">УСПОКАИВАЕТ КОЖУ</p>
            <div class="abs tub"></div>
          </div>
          <div class="abs m_pop8">
            <p class="abs y1">СХЕМА ПРИМЕНЕНИЯ средств <b>normaderm</b></p>
            <p class="abs y1s">в терапии акне</p>
            <p class="abs y2">утро</p>
            <p class="abs y3">вечер</p>
            <!-- <p class="abs y4">дополнительный<br>уход</p> -->
            <p class="abs y5">легкая степень акне поддерживающая терапия</p>
            <p class="abs y6">от средней до тяжелой степени</p>

            <p class="abs y y7"><b>normaderm</b><br><span>phytosolution</span><br>очищающий гель</p>
            <p class="abs y y8"><b>normaderm</b><br>корректирующий<br>уход</p>
            <p class="abs y y9"><b>normaderm</b><br><span>phytosolution</span><br>корректирующий<br>уход двойного<br>действия</p>
            <p class="abs y y10"><b>normaderm</b><br>корректирующий<br>уход</p>
            <p class="abs y y11"><b>normaderm</b><br><span>phytosolution</span><br>корректирующий<br>уход двойного<br>действия</p>
            <p class="abs y y12">наружная<br>терапия</p>
            <p class="abs y y13">в сочетании<br>с медикаментозным<br>лечением</p>
            <p class="abs y y14"><b>normaderm</b><br><span>phytosolution</span><br>очищающий гель</p>
            <p class="abs y y15"><b>normaderm</b><br>корректирующий<br>уход</p>
            <p class="abs y y16"><b>normaderm</b><br><span>phytosolution</span><br>корректирующий<br>уход двойного<br>действия</p>
            <p class="abs y y17"><b>normaderm</b><br>корректирующий<br>уход</p>
            <p class="abs y y18"><b>normaderm</b><br><span>phytosolution</span><br>корректирующий уход<br>двойного действия</p>
          </div>
        </div>
      </div>
    </div>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

ym(69093577, "init", {
clickmap:true,
trackLinks:true,
accurateTrackBounce:true,
webvisor:true
});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/69093577" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script type="text/javascript" src="https://www.youtube.com/player_api"></script>
<script>
            var player;
            function onYouTubePlayerAPIReady() {
                player = new YT.Player('player1');
            }
            $(".m_pop1 .abs.x").click(function(){
                player.stopVideo();
            });

     </script>
  </body>
</html>
