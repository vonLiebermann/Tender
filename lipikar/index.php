<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8"/>
    <title>Lipikar</title>
           <link href="css/main.060f.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/stylev3.css" type="text/css" media="screen, projection"/><link href="../common/message.css" rel="stylesheet"/>
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
			data: {id: '2'},     //id счетчика
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
      <div class="common-bg1"></div>
      <div class="common-bg hide"></div>
      <div class="common-bg2 hide"></div>
      <div class="common-bg3 hide"></div>
      <div class="common-bg4 hide"></div>
      <div class="over-wrap">
        <div id="page">
          <nav class="abs main-m">
            <a href="../labs/lablrp/index.html" class="prev-move"></a>
            <a href="../index.html" class="home-move"></a>
            <a href="#" class="next-move"></a>
            <div class="tooltip" style=""><span class="tooltiptext">Пройти дальше</span></div>
          </nav>
          <div class="sl sl1 _show">
            <div class="abs like">
				<?php
	$id_counter = "2"; //id счетчика
	require_once "select_count.php";
?>
              <p>
                Я рекомендую <b>LIPIKAR</b> BAUME AP+<b>M</b><br>
                <b><span id="count"><?php echo $count; ?></span> коллег</b> рекомендуют
              </p>
               <input id="input_count" type="hidden" value="0">
       			<form class="abs">
				 <input type="button" id="button" value="" >
              </form>
            </div>
            <h1 class="abs"><b>LIPIKAR</b><br>baume</h1>
            <h2 class="abs">
              Липидовосполняющее средство,<br>эффективно нормализующее<br>микробиом и увеличивающее<br>периоды ремиссии у пациентов<br>с атопическим дерматитом
            </h2>
            <h3 class="abs">
              AP<span class="sp1">+</span><span class="sp2">M</span>
            </h3>
            <h4 class="abs">
              <span class="sp1">LA ROCHE-POSAY</span>
              <span class="sp2">ЭКСПЕРТ</span> в области<br>
              исследований<br>
              <span class="sp2">МИКРОБИОМА КОЖИ</span>
            </h4>
          </div>
          <div class="sl sl2">
            <a href="#lipikar-update" class="abs sl2-links sl2-link1">
              <span class="abs">актуализация</span>
            </a>
            <a href="#lipikar-key" class="abs sl2-links sl2-link2">
              <span class="abs">ключевой<br />ингредиент</span>
            </a>
            <a href="#lipikar-gamma" class="abs sl2-links sl2-link3">
              <span class="abs">гамма</span>
            </a>
            <a href="#lipikar-scheme" class="abs sl2-links sl2-link4">
              <span class="abs">схема<br />применения</span>
            </a>
            <div class="abs ovec vec1">
              <div class="abs cube cube1"></div>
              <p class="abs text text1"><b>интервью д.м.н.,<br>проф.<br>заславского д.в.</b></p>
              <a href="#lipikar-video1" class="abs"></a>
            </div>
            <div class="abs ovec vec2">
              <div class="abs cube cube2"></div>
              <p class="abs text text2">КЛЮЧЕВЫЕ<br><b>АКТИВНЫЕ<br>ИНГРЕДИЕНТЫ</b></p>
              <a href="#lipikar-key2" class="abs"></a>
            </div>
            <div class="abs ovec vec3">
              <div class="abs cube cube3"></div>
              <p class="abs text text3">Гамма<br><b>lipikar</b></p>
              <a href="#lipikar-gamma2" class="abs"></a>
            </div>
            <div class="abs ovec vec4">
              <div class="abs cube cube4"></div>
              <p class="abs text text4">скачать<br><b>схему<br>применения</b></p>
              <a href="https://lorealcongress.ru/files/scheme_lipikar.pdf" target="_blank" class="abs"></a>
            </div>
          </div>
          <div class="abs m_pop1">
            <div class="abs x"></div>
            <p class="abs m_pop1-p1">Не так давно появилось новое понятие "Эмолент +", можно ли отнести Липикар АП+М к этой категории эмолентов?</p>
            <p class="abs m_pop1-p2">д.м.н., проф. Заславский Д.В.</p>
            <iframe id='player1' width="1024" height="575" src="https://www.youtube.com/embed/2l9aqHK6jkw?enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="abs m_pop2">
            <div class="abs radial-gr"></div>
            <img src="./images/02/pop2.png" alt="" class="abs main-bg">
            <div class="abs x"></div>
            <p class="abs q1"><b>LIPIKAR</b> BAUME <span class="sp1">AP+</span><span class="sp2">m</span></p>
            <p class="abs q2">эффективно нормализует микробиом кожи</p>
            <p class="abs q3">AP<span>[ AQUA POSAE FILIFORMIS ]</span></p>
            <p class="abs q4">M<span>[ MICRORESYL ]</span></p>
            <p class="abs q5">лизат непатогенной нитчатой бактерии<br>Vitreoscilla Filiformis </p>
            <p class="abs q6">экстракт натурального происхождения.<br>Получен из корня Ophiopogon japonicus</p>
            <p class="abs q7">УВЕЛИЧИВАЕТ ЭКСПРЕССИЮ АНТИМИКРОБНЫХ<br>ПЕПТИДОВ И УМЕНЬШАЕТ ВОСПАЛЕНИЕ</p>
            <p class="abs q8">ИНГИБИРУЕТ ФОРМИРОВАНИЕ БИОПЛЕНКИ<br>STAPHYLOCOCCUS AUREUS</p>
            <div class="abs f1"></div>
            <div class="abs f2"></div>
          </div>
          <div class="abs m_pop3">
            <div class="abs x"></div>
            <p class="abs w1">гамма <b>LIPIKAR</b></p>
            <p class="abs w2">Регулирует баланс микробиома кожи</p>
            <p class="abs w3">очищение</p>
            <p class="abs w4">основной УХОД</p>
            <p class="abs w5">дополнительный уход</p>

            <p class="abs w6">LIPIKAR<br>syndet <span>Ap+</span></p>
            <p class="abs w7">LIPIKAR<br>cleansing oil <span>Ap+</span></p>
            <p class="abs w8">LIPIKAR<br>baume <span>Ap+m</span></p>
            <p class="abs w9">LIPIKAR<br>stick <span>Ap+</span></p>
            <p class="abs w10">cicaplast<br>baume <span>b5</span></p>
            <!-- <p class="abs w11">REDERMIC <span>R</span><br>YEUX</p> -->

            <p class="abs w12">
              Липидовосполняющий<br>очищающий<br>крем-гель
            </p>
            <p class="abs w13">
              Липидо-<br>восполняющее<br>смягчающее масло<br>для ванны и душа
            </p>
            <p class="abs w14">
              Липидовосполняющий<br>бальзам
            </p>
            <p class="abs w15">
              SOS-средство<br>при возникновении<br>зуда
            </p>
            <p class="abs w16">
              Мульти-<br>восстанавливающий<br>бальзам
            </p>
            <!-- <p class="abs w17">
              ИНТЕНСИВНЫЙ<br>КОНЦЕНТРИРОВАННЫЙ<br>АНТИВОЗРАСТНОЙ УХОД<br>ДЛЯ КОНТУРА ГЛАЗ
            </p> -->
            <div class="abs o o1"></div>
            <div class="abs o o2"></div>
            <div class="abs o o3"></div>
            <div class="abs o o4"></div>
            <div class="abs o o5"></div>
          </div>
          <div class="abs m_pop4">
            <div class="abs x"></div>
            <p class="abs e4"><b>LIPIKAR</b><br>SYNDET</p>
            <p class="abs ep">AP<span>+</span></p>
            <p class="abs e5">липидовосполняющий<br>очищающий крем-гель</p>
            <div class="abs tub1"></div>
            <div class="abs plsh plsh1">бережно очищает</div>
            <div class="abs plsh plsh2">Восстанавливает<br>гидролипидный барьер</div>
            <div class="abs plsh plsh3">Увлажняет</div>
            <div class="abs plsh plsh4">Оказывает<br>противозудное действие</div>
            <div class="abs plsh plsh5">Нормализует микробиом кожи</div>
            <div class="abs mlist">
              <p>+ [ Aqua posae filiformis ]</p>
              <p>+ [ Масло Карите ]</p>
              <p>+ [ Глицерин ]</p>
            </div>
            <p class="abs e6">
              Без отдушек<br>
              Без мыла<br>
              Без парабенов<br>
              Нейтральный pН
            </p>
          </div>
          <div class="abs m_pop5">
            <div class="abs x"></div>
            <p class="abs e4"><b>LIPIKAR</b><br>CLEANSING OIL</p>
            <p class="abs ep">AP<span>+</span></p>
            <p class="abs e5">липидовосполняющее смягчающее масло<br>для ванны и душа</p>
            <div class="abs tub1"></div>
            <div class="abs plsh plsh1">Эффективно очищает<br>и смягчает кожу</div>
            <div class="abs plsh plsh2">Восстанавливает<br>гидролипидный барьер</div>
            <div class="abs plsh plsh3">Уменьшает воспаление</div>
            <div class="abs plsh plsh4">Нормализует микробиом кожи </div>
            <div class="abs mlist">
              <p>+ [ Aqua posae filiformis ]</p>
              <p>+ [ Масло Карите ]</p>
              <p>+ [ Глицерин ]</p>
            </div>
            <p class="abs e6">
              Без отдушек<br>
              Без мыла<br>
              Без парабенов<br>
              Нейтральный pН
            </p>
          </div>
          <div class="abs m_pop6">
            <div class="abs x"></div>
            <p class="abs e4"><b>LIPIKAR</b><br>BAUME</p>
            <p class="abs ep">AP<span>+<b>M</b></span></p>
            <p class="abs e5">липидовосполняющий бальзам</p>
            <div class="abs tub1"></div>
            <div class="abs plsh plsh1">Регулирует баланс микробиома</div>
            <div class="abs plsh plsh2">Восстанавливает<br>гидролипидный барьер</div>
            <div class="abs plsh plsh3">Оказывает<br>противовоспалительное<br>и противозудное действие</div>
            <div class="abs plsh plsh4">Предупреждает рецидивы и<br>увеличивает периоды ремиссии</div>
            <div class="abs mlist">
              <p class="e0" style="margin-bottom: 0;">КОМПЛЕКС <b>AP+<span>M:</span></b></p>
              <p style="margin-bottom: 0;">+ [ Aqua posae filiformis ]</p>
              <p>+ [ Microresyl ]</p>
              <p style="margin-bottom: 0;">+ [ Масло Карите ]</p>
              <p style="margin-bottom: 0;">+ [ Масло Канолы ]</p>
              <p>+ [ Глицерин ]</p>
              <p style="margin-bottom: 0;">+ [ Ниациамид ]</p>
              <p>+ [ Термальная вода]</p>
            </div>
            <p class="abs e6">
              обновленная формула,<br>не вызЫвает жжение при нанесении
            </p>
          </div>
          <div class="abs m_pop7">
            <div class="abs x"></div>
            <p class="abs e4"><b>LIPIKAR</b><br>STICK</p>
            <p class="abs ep">AP<span>+</span></p>
            <p class="abs e5">SOS-средство при возникновении зуда</p>
            <div class="abs tub1"></div>
            <div class="abs plsh plsh1">Восстанавливает<br>гидролипидный барьер</div>
            <div class="abs plsh plsh2">Уменьшает воспаление,<br>Оказывает противозудное<br>действие</div>
            <div class="abs plsh plsh3">Обладает антибактериальным<br>действием</div>
            <div class="abs plsh plsh4">Нормализует<br>микробиом кожи</div>
            <div class="abs mlist">
              <p style="margin-bottom: 0;">+ [ Масло карите ]</p>
              <p>+ [ Масло Канолы ]</p>
              <p>+ [ Мадекассосид ]</p>
              <p>+ [ Медь + Цинк + Марганец ]</p>
              <p>+ [ Aqua posae filiformis ]</p>
            </div>
          </div>
          <div class="abs m_pop9">
            <div class="abs x"></div>
            <p class="abs e4"><b>CICAPLAST</b><br>BAUME</p>
            <p class="abs ep">B5</p>
            <p class="abs e5">мультивосстанавливающий<br>бальзам</p>
            <div class="abs tub1"></div>
            <div class="abs plsh plsh1">Эффективно восстанавливает<br>эпидермис</div>
            <div class="abs plsh plsh2">Увлажняет и успокаивает</div>
            <div class="abs plsh plsh3">Восстанавливает<br>гидролипидный барьер</div>
            <div class="abs plsh plsh4">Оказывает антибактериальное<br>действие</div>
            <div class="abs mlist">
              <p>+ [ Пантенол 5% ]</p>
              <p>+ [ Термальная вода<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;La Roche-Posay ]</p>
              <p>+ [ Медь + Цинк + Марганец ]</p>
              <p>+ [ Мадекассосид ]</p>
              <p>+ [ Масло Карите ]</p>
            </div>
            <p class="abs e6">
              Без парабенов<br>
              без парфюмерных отдушек<br>
              без ланолина<br>
              гипоаллергенно
            </p>
          </div>
          <div class="abs m_pop8">
            <p class="abs y1"><b>СХЕМА ПРИМЕНЕНИЯ</b> ГАММЫ <b>LIPIKAR</b></p>
            <p class="abs y2">ОЧИЩЕНИЕ</p>
            <p class="abs y3">ЕЖЕДНЕВНЫЙ УХОД</p>
            <p class="abs y4">дополнительный<br>уход</p>
            <p class="abs y5"><b>ОБОСТРЕНИЕ АД</b> ИЛИ ДРУГИХ дерматозов, СОПРОВОЖДАЮЩИХСЯ КСЕРОЗОМ</p>
            <p class="abs y6"><b>РЕМИССИЯ дерматозов,</b> СОПРОВОЖДАЮЩИХСЯ КСЕРОЗОМ. сухая кожа</p>
            <p class="abs y y7">LIPIKAR<br>syndet <span>AP+</span></p>
            <p class="abs y y8">1-2 РАЗА В ДЕНЬ</p>
            <p class="abs y y9">МЕДИКАМЕНТОЗНАЯ<br>ТЕРАПИЯ</p>
            <p class="abs y y10">LIPIKAR<br>baume <span>AP+m</span></p>
            <p class="abs y y11">2 РАЗА В ДЕНЬ</p>
            <p class="abs y y12">LIPIKAR<br>stick <span>AP+</span></p>
            <p class="abs y y13">ПРИ ВОЗНИКНОВЕНИИ<br>ЗУДА</p>
            <p class="abs y y14">cicaplast<br>baume <span>b5</span></p>
            <p class="abs y y15">ПО МЕРЕ НЕОБХОДИМОСТИ КАК<br>РАНОЗАЖИВЛЯЮЩЕЕ СРЕДСТВО</p>
            <p class="abs y y16">LIPIKAR<br>syndet <span>AP+</span></p>
            <p class="abs y y17">1-2 РАЗА В ДЕНЬ</p>
            <p class="abs y y18">LIPIKAR OIL <span>AP+</span><br>для ванны и душа</p>
            <p class="abs y y19">1-2 РАЗА В ДЕНЬ</p>
            <p class="abs y y20">LIPIKAR<br>baume <span>AP+m</span></p>
            <p class="abs y y21">1-2 РАЗА В ДЕНЬ</p>
            <p class="abs y y22">LIPIKAR<br>stick <span>AP+</span></p>
            <p class="abs y y23">ПРИ ВОЗНИКНОВЕНИИ ЗУДА<br>В НЕПОЛНОЙ РЕМИССИИ</p>
            <p class="abs y y24">cicaplast<br>baume <span>b5</span></p>
            <p class="abs y y25">ПО МЕРЕ НЕОБХОДИМОСТИ КАК<br>РАНОЗАЖИВЛЯЮЩЕЕ СРЕДСТВО</p>
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
