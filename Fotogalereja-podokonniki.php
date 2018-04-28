<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>portfolio</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
    <!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->
    
    <!-- Ativando o jQuery lightBox plugin -->
    <script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();
    });
    </script>
   	<style type="text/css">
	/* jQuery lightBox plugin - Gallery style */
	#gallery {
		background-color: #f1eace;
		padding: 10px;
		width: 980px;
	}
	#gallery ul { list-style: none; }
	#gallery ul li { display: inline; }
	#gallery ul img {
		border: 5px solid #c3bc98;
		border-width: 5px 25px 5px 20px;
	}
	#gallery ul a:hover img {
		border: 5px solid #4e4a38;
		border-width: 5px 25px 5px 20px;
		color: #f1eace;
	}
	#gallery ul a:hover { color: #c3bc98; }
	</style>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="block_header">
      <div class="logo"><a href="index.html"><img src="images/logo.gif" width="343" height="135" border="0" alt="logo" /></a></div>
      <div class="search">
        <form id="form1" name="form1" method="post" action="">
          <label>
            <input name="q" type="text" class="keywords" id="textfield" maxlength="50" />
            <input name="b" type="image" src="images/search.gif" class="button" />
          </label>
        </form>
      </div>
<div class="clr"></div>
      <div class="menu">
        <ul>
          <li><a href="../index.php">Главная</a></li>       
          <li><a href="../Tehnologoia.php">Технология</a></li>
          <li><a href="../Cvet.php">Цвет</a></li>
          <li><a href="../Forma.php">Форма</a></li>
           <li><a href="../Stoimost.php">Стоимость</a></li>
            <li><a href="../Fotogalereja-stoleshnicy-dlja-kuhni.php"class="active">Фотогалерея</a></li>
             <li><a href="../contact.php">Контакты</a></li>
          
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="slider">
    <div class="header_text7">
      <h2 align="right">Фотогалерея <span>подоконники<br />
        из литого </span>мрамора и гранита </h2>
      <div class="clr"></div>
    </div>
  </div>
  <div class="body_resize">


<div class="content">

 <?php
  require_once "bloks/foto_menu.php";
?>


   <div class="bloktxtfoto">
    <p align="justify">Подоконник - такая простая и привычня часть квартиры или дома, что даже  не обращаешь на нее внимания. А на самом деле это большая и нужная плоскость - на нее мы ставим цветы и кладем всякую мелочь, или используем как дополнительный стол, особенно небольшой кухне.</p>
    <p align="justify">Современные технологии позволяют сделать подоконник из того же материала что и столешница на кухне или даже объеденить эти два независимых предмета в один. </p>
    <p align="justify">Самое главное - что использование полимербетона в качестве материала для создания подоконников, открывает поистине необозримые горизонты во всевозможных сочетаниях формы и цвета. </p>
   </div>
    </div>
    <p>&nbsp;</p>
	
	



	
	
    <div id="gallery">
      <ul>
        <li>
            <a href="photos/podokonniki/podokonnik_01.jpg" title="Подоконник бежевый гранит.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_01.jpg" width="400"  alt="" />
            </a>
        </li>
        <li>
            <a href="photos/podokonniki/podokonnik_02.jpg" title="Подоконник снабжен ревизией под конвектор.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_02.jpg" width="400"  alt="" />
            </a>
        </li>
                <li>
            <a href="photos/podokonniki/podokonnik_03.jpg" title="Подоконники из искусственного гранита на заказ по размерам заказчика">
                <img src="photos/podokonniki/tumb/mini_podokonnik_03.jpg" width="400"  alt="" />
            </a>
        </li>
                <li>
            <a href="photos/podokonniki/podokonnik_04.jpg" title="Бесшевное соединение эркерных подоконников из камня.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_04.jpg" width="400"  alt="" />
            </a>
        </li>
                <li>
            <a href="photos/podokonniki/podokonnik_05.jpg" title="Огромный выбор цветов подоконников из искусственного камня.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_05.jpg" width="400"  alt="" />
            </a>
        </li>
                <li>
            <a href="photos/podokonniki/podokonnik_06.jpg" title="Литьевой гранит. Подоконники больших размеров.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_06.jpg" width="400"  alt="" />
            </a>
        </li>
                <li>
            <a href="photos/podokonniki/podokonnik_07.jpg" title="Подоконники для квартир и коттеджей из полимербетона.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_07.jpg" width="400"  alt="" />
            </a>
        </li>
                         <li>
            <a href="photos/podokonniki/podokonnik_08.jpg" title="Мрамор в интерьере. Подоконник.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_08.jpg" width="400"  alt="" />
            </a>
        </li>
                         <li>
            <a href="photos/podokonniki/podokonnik_09.jpg" title="Белоснежный однотонный подоконник толщиной 40 мм.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_09.jpg" width="400"  alt="" />
            </a>
        </li>
                <li>
            <a href="photos/podokonniki/podokonnik_10.jpg" title="Однотонный подоконник из полимербетона. Изготовлен по шаблону специально для этого окна. Борт антик-1.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_10.jpg" width="400"  height="300" alt="" />
            </a>
        </li>
		                <li>
            <a href="photos/podokonniki/podokonnik_11.jpg" title="Монтаж подоконников из камня любой сложности.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_11.jpg" width="400"  alt="" />
            </a>
        </li>
                        <li>
            <a href="photos/podokonniki/podokonnik_12.jpg" title="Подоконник и откос из бежевого мрамора.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_12.jpg" width="400"  alt="" />
            </a>
        </li>
                        <li>
            <a href="photos/podokonniki/podokonnik_13.jpg" title="Подоконник с радиусным скруглением углов и античным бортиком. Глянцевое исполнение.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_13.jpg" width="400"  alt="" />
            </a>
        </li>
                        <li>
            <a href="photos/podokonniki/podokonnik_14.jpg" title="Красивый подоконник из полированного искусственного камня.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_14.jpg" width="400"  alt="" />
            </a>
        </li>
                        <li>
            <a href="photos/podokonniki/podokonnik_15.jpg" title="Цвет подоконника подбирается индивидуално по потребностям заказчика.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_15.jpg" width="400"  alt="" />
            </a>
        </li>
                        <li>
            <a href="photos/podokonniki/podokonnik_16.jpg" title="Монолитные эркерные подоконники любого цвета. Полимербетон.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_16.jpg" width="400"  alt="" />
            </a>
        </li>
                        <li>
            <a href="photos/podokonniki/podokonnik_17.jpg" title="Бежевый мрамор для изготовления подоконников.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_17.jpg" width="400"  alt="" />
            </a>

        </li>
                        <li>
            <a href="photos/podokonniki/podokonnik_18.jpg" title="Любой цвет по Вашему выбору. Эксклюзивные подоконники.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_18.jpg" width="400"  alt="" />
            </a>
        </li>
        
        
        
        
        <li>
            <a href="photos/podokonniki/podokonnik_19.jpg" title="Столешница-подоконник в римском стиле, сдвоенный вариант.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_19.jpg" width="400"  alt="" />
            </a>
        </li>
        <li>
            <a href="photos/podokonniki/podokonnik_20.jpg" title="Пристеночный плинтус из искусственного камня в цвет подоконника.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_20.jpg" width="400"  alt="" />
            </a>
        </li>
        <li>
            <a href="photos/podokonniki/podokonnik_21.jpg" title="Стыковка двух фрагментов подоконника без видимого шва.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_21.jpg" width="400"  alt="" />
            </a>
        </li>
        <li>
            <a href="photos/podokonniki/podokonnik_22.jpg" title="Малахитовый подоконник на заказ. Литьевой мрамор.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_22.jpg" width="400"  alt="" />
            </a>
        </li>
        <li>
            <a href="photos/podokonniki/podokonnik_23.jpg" title="Радиусные подоконники высочайшего качества.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_23.jpg" width="400"  alt="" />
            </a>
        </li>
        <li>
            <a href="photos/podokonniki/podokonnik_24.jpg" title="Радиусные монолитные изделия из камня длинной до 6 метров. Полимербетон. Без швов.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_24.jpg" width="400"  alt="" />
            </a>
        </li>
        <li>
            <a href="photos/podokonniki/podokonnik_25.jpg" title="Литой подоконник шоколадного цвета.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_25.jpg" width="400"  alt="" />
            </a>
        </li>
        <li>
            <a href="photos/podokonniki/podokonnik_26.jpg" title="Подоконник в доме из искусственного камня.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_26.jpg" width="400"  alt="" />
            </a>
        </li>
        <li>
            <a href="photos/podokonniki/podokonnik_27.jpg" title="Шов стыковки не виден даже при ближайшем рассмотрении. Шлифовка. Полировка.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_27.jpg" width="400"  alt="" />
            </a>
        </li>
        <li>
            <a href="photos/podokonniki/podokonnik_28.jpg" title="Подоконники любой формы.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_28.jpg" width="400"  alt="" />
            </a>
        </li>
        <li>
            <a href="photos/podokonniki/podokonnik_29.jpg" title="Изготовление подоконников по шаблону.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_29.jpg" width="400"  alt="" />
            </a>
        </li>
         <li>
            <a href="photos/podokonniki/podokonnik_30.jpg" title="Производство подоконников по индивидуальным размерам.">
                <img src="photos/podokonniki/tumb/mini_podokonnik_30.jpg" width="400"  alt="" />
            </a>
        </li>
        

        
        
        
        
        
    </ul>
</div>
  </div>
<?php
  require_once "bloks/podval.php";
?>
</div>
</body>
</html>