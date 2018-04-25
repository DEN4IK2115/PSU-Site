<!DOCTYPE html>
<html>
<body>
			<header>
				<div id="logo">
					<a href="http://travelperm.000webhostapp.com" title="На главную">
						<img src="img/Logo.jpg" title="Путевод" alt="Путевод">
						<span>Путевод</span>
					</a>
				</div>
<!--				
				<div id="about">
					<a href="" title="Узнать больше о достопримечательностях">Достопримечательности</a>
					<a href="" title="Где поесть">Рестораны</a>
				</div>
-->				
<!--				
                <div id="reg_auth">
					<a href="" title="Войти в кабинет пользователя">
						<div id="btn">
							Войти
						</div>
					</a>
					<a href="" title="Зарегистрироваться на сайте">
						<div id="btn">
							Регистрация
						</div>
					</a>
				</div>
-->
			</header>
			<nav>
				<div id="menuShow"><i class="fa fa-bars" aria-hidden="true"></i></div>
				<div id="hideMenu">
					<a href="/lions">Достопримечательности</a>
					<a href="/place">Интересные места</a>
					<a href="/restaurant">Поесть</a>
					<a href="/relax">Отдохнуть</a>
				</div>
<!--				
				<div id="search">
					<span>Поиск</span>
					<i class="fas fa-search"></i>
				</div>
-->				
			</nav>
	
	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script>
		$('#menuShow').click (function () {
			if ($('mobileMenu').is(':visible'))
				$('mobileMenu').hide();
			else
				$('mobileMenu').show();
		});
		
		$(document).scroll (function () {
			if($(document).scrollTop() > $('header').height () + 10)
				$('nav').addClass('fixed');
			else
				$('nav').removeClass('fixed');
		});
	</script>
</body>
</html>