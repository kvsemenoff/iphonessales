<?php require_once('includes/header.php'); ?>

<!-- Клиенты о нас -->

<section class="dd-slider-wrap">
	<div class="dd-container">
		<div class="dd-title_ab">
			<h2>Наши клиенты о нас</h2>
		</div>
		<div id="slider">
			<div class="item">
				<div class="dd-item-wrap">
					<div class="dd-img-box_ab dd-inline-bl">
						<img src="img/f.png" alt="">
					</div>
					<div class="dd-txt_ab dd-inline-bl">
						<span>Николай Тришин</span>
						<p>“ Купил сначала здесь iPhone 5, потом ещё заказал плёнку и чехол. Заказывал в этом магазине, ибо в других таких аксессуаров найти нигде не смог. На следующий день после заказа приехал и забрал чехол, который хотел. К товару и обслуживанию нареканий нет, сервис на уровне =) ”
						</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>	
			<div class="item">
				<div class="dd-item-wrap">
					<div class="dd-img-box_ab dd-inline-bl">
						<img src="img/f.png" alt="">
					</div>
					<div class="dd-txt_ab dd-inline-bl">
						<span>Николай Тришин</span>
						<p>“ Купил сначала здесь iPhone 5, потом ещё заказал плёнку и чехол. Заказывал в этом магазине, ибо в других таких аксессуаров найти нигде не смог. На следующий день после заказа приехал и забрал чехол, который хотел. К товару и обслуживанию нареканий нет, сервис на уровне =) ”
						</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="item">
				<div class="dd-item-wrap">
					<div class="dd-img-box_ab dd-inline-bl">
						<img src="img/f.png" alt="">
					</div>
					<div class="dd-txt_ab dd-inline-bl">
						<span>Николай Тришин</span>
						<p>“ Купил сначала здесь iPhone 5, потом ещё заказал плёнку и чехол. Заказывал в этом магазине, ибо в других таких аксессуаров найти нигде не смог. На следующий день после заказа приехал и забрал чехол, который хотел. К товару и обслуживанию нареканий нет, сервис на уровне =) ”
						</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Конец клиенты о нас -->



<!-- Footer -->

<section class="dd-footer-wrap">
	<div class="dd-container">
		<div class="dd-mobile">
			<span class="dd-top">© Компания "АйфонСейл" 2017.</span>
		</div>
		<div class="dd-foter-box dd-foter-box_1">
			<span><img src="img/dd-logo.png" alt=""></span>
			<span class="dd-top">© Компания "АйфонСейл" 2017.</span>
		</div>
		<div class="dd-foter-box dd-foter-box_2">
			<span>Мы дорожим своей репутацией профессионалов<br>
				и работаем для вас с 2009 года!
			</span>
		</div>
		<div class="dd-foter-box dd-foter-box_3">
			<div class="dd-footer-phone dd-float-left">
				<span>8 (800) 775-43-78</span><br>
				<span>8 (812) 385-43-78</span>
			</div>
			<div class="dd-footer-button dd-float-left">
				<a class="dd-button-1" href="#">Обратный звонок</a>
			</div>
			<div class="clearfix"></div>
			<div class="dd-timeofwork">
				<span>Работаем пн-пт с 10 до 21, сб-вс с 12 до 21</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</section>

<!-- end Footer -->


<!-- Бонусом вы получите -->

<section class="dd-wrap_bonus">
	<div class="dd-container">
		<h2 class="dd-mob_h2_bonus">Бонусы</h2>
		<h2 class="dd-dekstop_h2_bonus">Бонусом вы получите</h2>
		<div class="dd-box_bonus">
			<div class="dd-img_bonus">
				<img src="img/b1.png" alt="">
			</div>
			<div class="dd-txt_bonus">
				<p>Помощь в переносе 
					контактов и данных
					c другого телефона
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="dd-box_bonus">
			<div class="dd-img_bonus">
				<img src="img/b2.png" alt="">
			</div>
			<div class="dd-txt_bonus">
				<p>SIM-карту нужного
					вам размера прямо<br>
					на месте
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="dd-box_bonus">
			<div class="dd-img_bonus">
				<img src="img/b3.png" alt="">
			</div>
			<div class="dd-txt_bonus">
				<p>Помощь в получении
					Apple ID и регистрации<br>
					в iCloud
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="dd-box_bonus">
			<div class="dd-img_bonus">
				<img src="img/b4.png" alt="">
			</div>
			<div class="dd-txt_bonus">
				<p>Настройку телефона
					под ваши нужды,<br>
					установку приложений
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="dd-box_bonus last_bonus">
			<div class="dd-img_bonus">
				<img src="img/b5.png" alt="">
			</div>
			<div class="dd-txt_bonus">
				<p>Информационную
					поддержку в течение
					месяца
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</section>

<!-- Конец бонусом вы получите -->

<?php require_once('includes/footer.php'); ?>

<script>
	var owl = $("#slider");
	owl.owlCarousel({
		loop:true,
		nav:true, 
		autoplay:false,
		smartSpeed:1000,
		margin:25,
        center:false,     //если нужны обрезаные края
        navText:['<span class="nav-left"></span>','<span class="nav-right"></span>'],
        responsive:{
        	0:{
        		items:1
        	},
        	480:{
        		items:1 
        	},
        	990:{
        		items:1
        	},      

        	1248:{
        		items:1
        	}
        }
    });
</script>

</body>
</html>

