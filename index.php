<!doctype html>
<html>
	<head>
		<title>CinemaArt</title> 
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="main.css"/>
		<link rel="stylesheet" type="text/css" href="snow.css"/>
		<link rel="stylesheet" type="text/css" href="headertitle.css"/>
		<link rel="stylesheet" type="text/css" href="index_films.css"/>
		<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
		<link href="http://daneden.github.io/animate.css/animate.min.css" rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- for new movies -->
	</head>
	<body>

<header>	
	<section id="snow"></section>
	<form id="registration" style="display: <?=(isset($_COOKIE['auth'])) ? 'none' : 'block' ?>" action="php/auth.php" method="post">				
	<label for="login" style="float:left"> Вход: </label>
	<input type="text" name="login" id="login" required placeholder="Ваш логин" ">
	<input type="password" name="password" id="password" required placeholder="Ваш пароль">
	<input align="center" type=image src="img/loginin_2uv3u.png"></br>
	<a href="registration.php" style="color:white; font-size:9pt">Регистрация</a></p>	
	</form>
	 <!-- <php
		 // if (isset($_COOKIE['error'])) 
		 // {echo '<div align="center" style="color:white;">'.$_COOKIE['error'].'<div>';}
	 // ?> -->
	
	<?php
		if(isset($_COOKIE['login'])){
			echo "<a href='php/logout.php'><span style='color:white; border: 1px dotted silver; padding:9px; font-size: 13px; margin-right:7px; float:right;'> Logout</span></a>";
		}
		?>
	<form id="adminpage" style="display: <?php 
	if(isset($_COOKIE['auth']) && ($_COOKIE['login']=='Iva')){echo 'block';} else {echo 'none';} ?>"><a href="adm.php" style="color:white; font-size: 13px; border: 1px dotted silver; padding:9px; float:right;">Admin Page</a></form>
	<form style="display: <?=(!isset($_COOKIE['auth'])) ? 'none' : 'block' ?>">
	 <div style="color:white; font-size: 13px; border: 1px dotted silver; font-family: 'C'; padding:9px; float:right; font-family: Corbel;">Здравствуйте, <?=$_COOKIE['login']?>&nbsp&nbsp&nbsp
	</div>
	</form>

	
	
	<a href="index.php" style="text-decoration: none"><h1 id="headertitle" style="padding-top:200px;">C i n e m a &nbsp; a r t </h1></a>
	<!--<a href="index.php" style="text-decoration: none"><b id="headertitle_hny" >h a p p y &nbsp;n e w &nbsp; y e a r </b></a> 
	<div id="happyNY">Happy New Year</div>-->

	<nav id="mainmenu">	
	<hr style="margin-left:-20px">
		<div class="MainText"><a href="index.php" class="href">ГЛАВНАЯ</a></div>
		<div class="MainText"><a href="news.php" title="SEO KEYWORDS" class="href">НОВОСТИ</a> </div>
		<div class="MainText"><a href="afisha.php" title="SEO KEYWORDS" class="href">АФИША</a>  </div>
		<div class="MainText"><a href="history.php" title="SEO KEYWORDS" class="href">ИСТОРИЯ</a> </div> 
		<div class="MainText"><a href="interesting_facts.php" title="SEO KEYWORDS" class="href">ИНТЕРЕСНЫЕ ФАКТЫ</a> </div> 
		<div class="MainText"><a href="return_address.php" class="href">ОБРАТНАЯ СВЯЗЬ</a></div>					
	</nav>
	</br></br></br><hr>

	<div id="blok1"><p class="href" align="center" >Г Л А В Н А Я</p></div>
</header>
<article id="TopArticle">

<!-- slide 2 -->

<h1 id="title" style="margin-right:140px;">П О С Л Е Д Н И Е &nbsp; Н О В О С Т И</h1>
<ul class="adaptive-slider" style="margin-right:150px; padding-bottom: 50px;">    
  <!-- Slider Item -->
  <li>
    <figure>
      <img src="img/666830.jpg">
	  <a href="new4.php">
	  <figcaption>
        <h1>Сойка-пересмешница</h1>
        <p>
          «Голодные игры: Сойка-пересмешница. Часть 2» остаётся лидером американского проката. За три недели в прокате финальная часть франшизы заработала $227,11 млн — больше «Марсианина» ($220,81 млн за десять недель) и «007: СПЕКТР» ($184,52 млн за пять). 
		  За минувший уикенд (третий в прокате) фильм Фрэнсиса Лоуренса заработал $18,6 млн. С учётом сборов за рубежом — $296,8 млн в международном прокате (больше, чем у первой части) — картина освоила $523,91 млн. В общем табеле франшизы фильм занимает пока последнее место, уступая первым «Голодным играм» более $170 млн. 
        </p>
      </figcaption>
	  </a>
    </figure>
  </li>
  <!-- End Slider Item 

  <!-- Slider Item -->  
  <li>

    <figure>
      <img src="img/news1-980-400.jpg">
	  <a href="new1.php">
      <figcaption>
        <h1>67-Я ПРЕМИЯ "ЭММИ": ПОБЕДИТЕЛИ</h1>
        <p>
         20 сентября в лос-анджелесском Nokia Theatre прошла 67-я церемония вручения премии «Эмми» — самой престижной награды мирового телевидения. Вел шоу комик Энди Сэмберг. Лучшим драматическим сериалом признана «Игра престолов», победившая в половине из имевшихся у нее номинаций.
        </p>
      </figcaption>
	  </a>
    </figure> 
  </li>
 
  <!-- End Slider Item -->

  <!-- Slider Item -->
  <li>
    <figure>
      <img src="img/new2-980-400.jpg">
	  <a href="new2.php">
      <figcaption>
        <h1>Премьера трейлера «В сердце моря» с Крисом Хемсвортом</h1>
        <p>
          Крис Хемсворт променял молот Тора на гарпун и вступил в битву с легендарным китом. КиноПоиск представляет новый дублированный трейлер картины Рона Ховарда «В сердце моря», основанной на реальных событиях, которые вдохновили Германа Мелвилла на «Моби Дика».
        </p>
      </figcaption>
	  </a>
    </figure>
  </li>
  <!-- End Slider Item -->

  <!-- Slider Item -->
  <li>
    <figure>
      <img src="http://lorempixel.com/980/400/nightlife/1/">
      <figcaption>
        <h1>This one has no description</h1>

      </figcaption>
    </figure>
  </li>
  </ul>
  <!-- End Slider Item -->

<!-- End adaptive slider demo -->

<!-- slider for movies -->
<h1 id="title" style="margin-right:140px;">Н О В И Н К И &nbsp; К И Н О </h1>

<section>
<div class="tiles" style="margin-bottom: 100px;">
<a href="afisha3.php" class="tile"><img src="img/afisha3.jpg" style="height: 350px; width:230px;">
<div class="details"><span class="title">ЭВЕРЕСТ</span><span class="info">США, Великобритания, Исландия, 2015</br>
Жанр: триллер, драма, приключения</br>
Режиссёр: Бальтасар Кормакур</span></div></a>

<a href="afisha1.php" class="tile"><img src="img/cinema1.jpg" style="height: 350px; width:230px;">
<div class="details"><span class="title">КУНГ-ФУ КРОЛИК: ПОВЕЛИТЕЛЬ ОГНЯ</span><span class="info">Китай 2015 (мультфильм, комедия)</br>
Режиссёр: Дейк Донг</span></div></a>

<a href="afisha2.php" class="tile"><img src="img/cinema2.jpg" style="height: 350px; width:230px;"/>
<div class="details"><span class="title">ПЕРЕВОЗЧИК</span><span class="info">Франция, Китай, Бельгия, 2015</br>
Жанр: боевик, триллер, криминал</br>
Режиссёр: Камиль Деламарр</span></div></a>

<a href="afisha4.php" class="tile">"><img src="img/cinema5.jpg" style="height: 350px; width:230px;"/>
<div class="details"><span class="title">ОЧЕНЬ МУРЕЕВСКОЕ РОЖДЕСТВО</span><span class="info">США, 2015</br>
Жанр: мюзикл, комедия, музыка</br>
Режиссёр: София Коппола</span></div></a>
</div>
</section>
<!-- end slider for movies-->


<script src="jquery-2.1.4.min.js">
      </script>
	  	  <script src='headertitle.js'></script>

	  <script src='rgbaster.js'></script>
	  <script src='adaptiveslider.js'></script>
<script>
jQuery(function() {
  jQuery('.adaptive-slider').adaptiveSlider({
    opacity: 0.7,
    normalizedTextColors: {
      light: '#f1f1f1',
      dark: '#222'
    }
  });
});
				
				// var imgs = new Array("img/42.jpg","img/headerfon1.jpg");

// function changeBg() {
    // var imgUrl = imgs[Math.floor(Math.random()*imgs.length)];
    // jQuery('body').css('background-image', 'url(' + imgUrl + ')');
// }

// setInterval(changeBg,3000);
</script>

			
	<footer id="footer" class="footerStyle" style="float:left; bottom:0;">
			<div style="padding:30px"><img src="img/videokamera-42.png" align="middle" width="40px" height="40px"/>Cinema Art Platform. © cinema-art.ua. For people with an art in a blood.
			<iframe src="logo.svg"  name="myframe"  width="250"  height="100"  frameborder="0" align="right" style="margin-top:-30px; margin-right: 505px"></iframe></div> 
		</footer>	

</article>
	
	</body>
</HTML> 