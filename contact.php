<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Контактная информация | Производитель искусственного камня на заказ.</title>
<meta name="description" content="Фирма занимающаяся изготовлением столешниц и подоконников из искусственного камня и гранита, адрес, телефон"/>
<meta name="keywords" content="Где заказать столешницу, где заказать подоконники"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript">

// <![CDATA[
jQuery(document).ready(function(){
	$('#contactform').submit(function(){				  
		var action = $(this).attr('action');
		$.post(action, { 
			name: $('#name').val(),
			email: $('#email').val(),
			company: $('#company').val(),
			subject: $('#subject').val(),
			message: $('#message').val()
		},
			function(data){
				$('#contactform #submit').attr('disabled','');
				$('.response').remove();
				$('#contactform').before('<p class="response">'+data+'</p>');
				$('.response').slideDown();
				if(data=='Message sent!') $('#contactform').slideUp();
			}
		); 
		return false;
	});
});
// ]]>
</script>
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
            <li><a href="../Fotogalereja-stoleshnicy-dlja-kuhni.php">Фотогалерея</a></li>
             <li><a href="../contact.php"class="active">Контакты</a></li>
          
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="slider">
    <div class="header_text8">
      <h2 align="right">Свяжитесь <span>с нами<br />
        и сделайте  </span>заказ сегодня
      </h2>
      <div class="clr"></div>
    </div>
  </div>
   <div class="body_resize">
    <div class="Services3">
    <h2>Отправить сообщение</h2>
    <form action="contact.php" method="post" id="contactform">
            <ol>
              <li>
                <label for="name">Ваше имя <span class="red">*</span></label>
                <input id="name" name="name" class="text" />
              </li>
              <li>
                <label for="email">Ваша почта <span class="red">*</span></label>
                <input id="email" name="email" class="text" />
              </li>
              <li>
                <label for="company">Компания </label>
                <input id="company" name="company" class="text" />
              </li>
              <li>
                <label for="subject">Тема </label>
                <input id="subject" name="subject" class="text" />
              </li>
              <li>
                <label for="message">Сообщение <span class="red">*</span></label>
                <textarea id="message" name="message" rows="6" cols="50"></textarea>
              </li>
              <li class="buttons">
                <input type="image" name="imageField" id="imageField" src="images/send.gif" />
              </li>
            </ol>
          </form>
    </div>
	
    <div class="Our4">
      <h2>Адрес</h2>
      <p>www.mra-mor.ru</p>
        <p>г. Москва, ул. Профсоюзная, д. 83 к.2</p>
      <p>Телефон: +7 (495) 055-53-53</p>
      <p>Телефон: +7 (926) 758-92-63</p>
            <p>E-mail: <a href="#">info@mra-mor.ru</a></p>
			<p>E-mail: <a href="#">89267589263.ap@gmail.com</a></p>
			
      
      <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=Z2yxrgUraV2dbnUW_fk30bKHqHMrOdei&width=280&height=400"></script>
    </div>
      
      <div class="clr"></div>
  </div>
<?php
  require_once "bloks/podval.php";
?>
</div>
</body>
</html>