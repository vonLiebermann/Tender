<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8"/>
    <title>VitaminE</title>
      <link href="css/main.060f.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/stylev3.css" type="text/css" media="screen, projection"/><link href="../common/message.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/animate.css" type="text/css" media="screen, projection"/>

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
			data: {id: '1'},     //id счетчика
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
            <a href="../labs/lablrp/index.html" class="prev-move"></a>
            <a href="../index.html" class="home-move"></a>
            <a href="#" class="next-move"></a>
              <div class="tooltip" style=""><span class="tooltiptext">Пройти дальше</span></div>
          </nav>
          <div class="sl sl1 _show">
            <div class="abs drop"></div>
            <div class="abs like">
				<?php
	$id_counter = "1"; //id счетчика
	require_once "select_count.php";
?>
              <p>
                Я рекомендую СЫВОРОТКУ <b>VITAMIN C10</b><br>
                <b><span id="count"><?php echo $count; ?></span> коллег</b> рекомендуют
              </p>
              <input id="input_count" type="hidden" value="0">
       			<form class="abs">
				 <input type="button" id="button" value="" >
              </form>
            </div>
            <div class="abs tub"></div>
            <h1 class="abs">сыворотка <span>vitamin c10</span></h1>
            <h2 class="abs">
              <b>Антиоксидантная сыворотка<br>для обновления и сияния кожи,</b><br> сочетающая в себе эффективность<br>и хорошую переносимость
            </h2>
          </div>
          <div class="sl sl2">
            <div class="abs tub"></div>
            <a href="#vitamine-update" class="abs sl2-links sl2-link1">
              <span class="abs">актуализация</span>
            </a>
            <a href="#vitamine-key" class="abs sl2-links sl2-link2">
              <span class="abs">ключевой<br />ингредиент</span>
            </a>
            <a href="#vitamine-gamma" class="abs sl2-links sl2-link3">
              <span class="abs">гамма</span>
            </a>
            <a href="#vitamine-scheme" class="abs sl2-links sl2-link4">
              <span class="abs">схема<br />применения</span>
            </a>
            <div class="abs ovec vec1">
              <div class="abs cube cube1"></div>
              <p class="abs text text1"><b>интервью д.м.н.,<br>проф.<br>аравийской е.а.</b></p>
              <a href="#vitamine-video1" class="abs"></a>
            </div>
            <div class="abs ovec vec2">
              <div class="abs cube cube2"></div>
              <p class="abs text text2">КЛЮЧЕВОЙ<br><b>АКТИВНЫй<br>ИНГРЕДИЕНТ</b></p>
              <a href="#vitamine-key2" class="abs"></a>
            </div>
            <div class="abs ovec vec3">
              <div class="abs cube cube3"></div>
              <p class="abs text text3">Гамма<br><b>антивозрастных<br>средств</b></p>
              <a href="#vitamine-gamma2" class="abs"></a>
            </div>
            <div class="abs ovec vec4">
              <div class="abs cube cube4"></div>
              <p class="abs text text4">скачать<br><b>схему<br>применения</b></p>
              <a href="https://lorealcongress.ru/files/scheme_aa.pdf" target="_blank" class="abs"></a>
            </div>
          </div>
          <div class="abs m_pop1">
            <div class="abs x"></div>
            <p class="abs m_pop1-p1">Какова роль антиоксидантов в коже?</p>
            <p class="abs m_pop1-p2">д.м.н, проф. Аравийская Е.А.</p>
            <iframe id='player1' width="1024" height="575" src="https://www.youtube.com/embed/CtufiZ-IhaU?enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="abs m_pop2">
            <div class="abs x"></div>
            <p class="abs q1">сыворотка <span>vitamin c10</span></p>
            <p class="abs q2">эффективность против признаков старения<br>благодаря комбинации активных ингредиентов</p>
            <p class="abs q3">10% ВЫСОКООЧИЩЕННЫЙ<br>ВИТАМИН С</p>
            <p class="abs q4">САЛИЦИЛОВАЯ КИСЛОТА</p>
            <p class="abs q5">
              <span>Нейтрализует свободные радикалы</span>
              <span>Стимулирует синтез коллагена</span>
              <span>Стимулирует активность<br>фибробластов</span>
            </p>
            <p class="abs q6">
              Бережно отшелушивает<br>
              Ускоряет клеточное обновление<br>
              Выравнивает поверхность кожи
            </p>
            <p class="abs q7">
              СОКРАЩАЕТ<br>ВЫРАЖЕННОСТЬ МОРЩИН<br>ОБЕСПЕЧИВАЕТ СИЯНИЕ КОЖИ
            </p>
            <p class="abs q8">
              УМЕНЬШАЕТ ГИПЕРПИГМЕНТАЦИЮ<br>УСИЛИВАЕТ ЭФФЕКТИВНОСТЬ<br>ИНГРЕДИЕНТОВ
            </p>
            <img src="images/02/tub.gif" alt="" class="abs" style="top: 100px; left: -128px;">
          </div>
          <div class="abs m_pop3">
            <div class="abs x"></div>
            <p class="abs w1">гамма <b>АНТИВОЗРАСТНЫХ СРЕДСТВ</b></p>
            <p class="abs w2">в качестве домашнего ухода и/или в до/пост процедурный период</p>
            <p class="abs w3">HYALU B5</p>
            <p class="abs w4">VITAMIN C</p>
            <p class="abs w5">REDERMIC RETINOL</p>
            <p class="abs w6">HYALU <span>B5</span></p>
            <p class="abs w7">HYALU <span>B5</span></p>
            <p class="abs w8">HYALU <span>B5</span><br>EYES</p>
            <p class="abs w9">СЫВОРОТКА<br>vitamin <span>c10</span></p>
            <p class="abs w10">REDERMIC<br><span>RETINOL</span></p>
            <p class="abs w11">REDERMIC <span>R</span><br>YEUX</p>
            <p class="abs w12">
              УВЛАЖНЯЮЩАЯ<br>КОНЦЕНТРИРОВАННАЯ<br>СЫВОРОТКА ПРОТИВ<br>МОРЩИН
            </p>
            <p class="abs w13">
              УВЛАЖНЯЮЩИЙ<br>УХОД ПРОТИВ<br>МОРЩИН
            </p>
            <p class="abs w14">
              УВЛАЖНЯЮЩИЙ УХОД<br>ДЛЯ КОНТУРА ГЛАЗ<br>ПРОТИВ МОРЩИН
            </p>
            <p class="abs w15">
              АНТИОКСИДАНТНАЯ<br>СЫВОРОТКА ДЛЯ<br>ОБНОВЛЕНИЯ КОЖИ
            </p>
            <p class="abs w16">
              ИНТЕНСИВНЫЙ<br>КОНЦЕНТРИРОВАННЫЙ<br>АНТИВОЗРАСТНОЙ УХОД
            </p>
            <p class="abs w17">
              ИНТЕНСИВНЫЙ<br>КОНЦЕНТРИРОВАННЫЙ<br>АНТИВОЗРАСТНОЙ УХОД<br>ДЛЯ КОНТУРА ГЛАЗ
            </p>
            <div class="abs o o1"></div>
            <div class="abs o o2"></div>
            <div class="abs o o3"></div>
            <div class="abs o o4"></div>
          </div>
          <div class="abs m_pop4">
            <div class="abs x"></div>
            <p class="abs e4"><b>HYALU <span>B5</span></b> SERUM</p>
            <p class="abs e5">УВЛАЖНЯЮЩАЯ КОНЦЕНТРИРОВАННАЯ СЫВОРОТКА<br>ПРОТИВ МОРЩИН с двумя видами гиалуроновой кислоты</p>
            <div class="abs tub1"></div>
            <div class="abs plsh plsh1">Повышает тонус, упругость,<br>эластичность</div>
            <div class="abs plsh plsh2">Уменьшает выраженность<br>морщин</div>
            <div class="abs plsh plsh3">Увлажняет</div>
            <div class="abs plsh plsh4">Стимулирует репаративные<br>процессы и синтез коллагена</div>
            <div class="abs mlist">
              <p>
                + [ Гиалуроновая кислота ]
                <span>[ 0,2% высокомолекулярная ]</span>
                <span>[ 0,1% низкомолекулярная ]</span>
              </p>
              <p>+ [ Витамин В5 ]</p>
              <p>+ [ Мадекассосид ]</p>
            </div>
          </div>
          <div class="abs m_pop5">
            <div class="abs x"></div>
            <p class="abs e4"><b>HYALU <span>B5</span></b></p>
            <p class="abs e5">УВЛАЖНЯЮЩИЙ УХОД ПРОТИВ МОРЩИН<br>с двумя видами гиалуроновой кислоты</p>
            <div class="abs tub1"></div>
            <div class="abs plsh plsh1">Повышает тонус, упругость,<br>эластичность</div>
            <div class="abs plsh plsh2">Уменьшает выраженность<br>морщин</div>
            <div class="abs plsh plsh3">Увлажняет</div>
            <div class="abs plsh plsh4">Стимулирует репаративные<br>процессы</div>
            <div class="abs mlist">
              <p>
                + [ Гиалуроновая кислота ]
                <span>[ 0,2% высокомолекулярная ]</span>
                <span>[ 0,1% низкомолекулярная ]</span>
              </p>
              <p>+ [ Витамин В5 ]</p>
            </div>
            <p class="abs e6">уход для лица</p>
            <p class="abs e7">уход для контура глаз</p>
          </div>
          <div class="abs m_pop6">
            <div class="abs x"></div>
            <p class="abs e4"><b>СЫВОРОТКА <span>VITAMIN c10</span></b></p>
            <p class="abs e5">АНТИОКСИДАНТНАЯ СЫВОРОТКА<br>ДЛЯ ОБНОВЛЕНИЯ КОЖИ </p>
            <div class="abs tub1"></div>
            <div class="abs plsh plsh1">Нейтрализует свободные<br>радикалы</div>
            <div class="abs plsh plsh2">Сокращает выраженность<br>морщин</div>
            <div class="abs plsh plsh3">Стимулирует синтез коллагена</div>
            <div class="abs plsh plsh4">Ускоряет обновление клеток<br>эпидермиса</div>
            <div class="abs plsh plsh5">Уменьшает гиперпигментацию</div>
            <div class="abs mlist">
              <p>+ [ 10% высокоочищенный<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;витамин С ]</p>
              <p>+ [ Салициловая кислота ]</p>
              <p>+ [ Нейросенсин ]</p>
              <p>+ [ Термальная вода<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;La Roche-Posay ]</p>
            </div>
          </div>
          <div class="abs m_pop7">
            <div class="abs x"></div>
            <p class="abs e4"><b>REDERMIC</b> <span><span>R</span>ETINOL</span></p>
            <p class="abs e5">ИНТЕНСИВНЫЙ КОНЦЕНТРИРОВАННЫЙ<br>АНТИВОЗРАСТНОЙ УХОД с ретинолом</p>
            <div class="abs tub1"></div>
            <div class="abs plsh plsh1">уменьшает выраженность<br>морщин</div>
            <div class="abs plsh plsh2">Выравнивает рельеф кожи</div>
            <div class="abs plsh plsh3">Осветляет и выравнивает<br>тон кожи</div>
            <div class="abs mlist">
              <p style="margin-bottom: 0;">+ [ 0,1% ретинол ]</p>
              <p>+ [ 0,2% ретинол последовательного<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;высвобождения ]</p>
              <p style="margin-bottom: 0;">+ [ Нейросенсин ]</p>
              <p>+ [ Хепес ]</p>
              <p>+ [ Кофеин ]</p>
            </div>
            <p class="abs e6">уход для лица</p>
            <p class="abs e7">уход для контура глаз</p>
          </div>
          <div class="abs m_pop8">
            <p class="abs y1">СХЕМА ПРИМЕНЕНИЯ <b>антивозрастных средств</b></p>
            <p class="abs y2">В качестве домашнего ухода и/или в до/пост процедурный период</p>
            <p class="abs y3">Тусклый цвет лица, неровный тон, морщины</p>
            <p class="abs y4">Потеря упругости, Эластичности, тонуса</p>
            <p class="abs y5">Признаки фотостарения: морщины,<br>неоднородный рельеф кожи, пигментация</p>
            <p class="abs y6">
              <b>СЫВОРОТКА<br>
              vitamin</b> <span>c10</span><br>
              антиоксидантная сыворотка<br>для обновления кожи
            </p>
            <p class="abs y7">
              <b>anthelios</b><br>
              невидимый флюид<br>
              spf 50+/ppd 46
            </p>
            <p class="abs y8">
              <b>HYALU <span>B5</span></b><br>
              УВЛАЖНЯЮЩАЯ<br>КОНЦЕНТРИРОВАННАЯ<br>СЫВОРОТКА ПРОТИВ МОРЩИН
            </p>
            <p class="abs y9">
              <b>anthelios</b><br>
              невидимый флюид<br>
              spf 50+/ppd 46
            </p>
            <p class="abs y10">
              <b>СЫВОРОТКА<br>
              vitamin</b> <span>c10</span><br>
              антиоксидантная сыворотка<br>для обновления кожи
            </p>
            <p class="abs y11">
              <b>anthelios</b><br>
              невидимый флюид<br>
              spf 50+/ppd 46
            </p>
            <p class="abs y12">
              <b>HYALU <span>B5</span></b><br>
              УВЛАЖНЯЮЩАЯ<br>КОНЦЕНТРИРОВАННАЯ СЫВОРОТКА<br>ПРОТИВ МОРЩИН
            </p>
            <p class="abs y13">
              <b>HYALU <span>B5</span></b><br>
              УВЛАЖНЯЮЩАЯ<br>КОНЦЕНТРИРОВАННАЯ<br>СЫВОРОТКА ПРОТИВ МОРЩИН
            </p>
            <p class="abs y14">
              <b>HYALU <span>B5</span></b><br>
              УВЛАЖНЯЮЩИЙ УХОД<br>ПРОТИВ МОРЩИН
            </p>
            <p class="abs y15">
              <b>HYALU <span>B5</span></b> eyes<br>
              УВЛАЖНЯЮЩИЙ УХОД<br>ДЛЯ КОНТУРА ГЛАЗ<br>ПРОТИВ МОРЩИН
            </p>
            <p class="abs y16">
              <b>REDERMIC <span>RETINOL</span></b><br>
              ИНТЕНСИВНЫЙ КОНЦЕНТРИРОВАННЫЙ<br>АНТИВОЗРАСТНОЙ УХОД
            </p>
            <p class="abs y17">
              <b>REDERMIC <span>R</span></b>
              YEUX/eyes<br>
              ИНТЕНСИВНЫЙ КОНЦЕНТРИРОВАННЫЙ<br>
              АНТИВОЗРАСТНОЙ УХОД ДЛЯ КОНТУРА ГЛАЗ
            </p>
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
