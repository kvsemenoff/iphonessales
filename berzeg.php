<?php require_once('includes/header.php'); ?>

<!-- Клиенты о нас -->

<section class="dd-slider-wrap">
	<div class="dd-container">
		<div class="dd-title_ab">
			<h1>Наши клиенты о нас</h1>
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
		<div class="dd-foter-box dd-foter-box_1">
			<span>iPhonessale</span>
			<span>© Компания "АйфонСейл" 2017.</span>
		</div>
		<div class="dd-foter-box dd-foter-box_2">
			<span>Мы дорожим своей репутацией профессионалов<br>
				и работаем для вас с 2009 года!
			</span>
		</div>
		<div class="dd-foter-box dd-foter-box_3">
			<div class="dd-footer-phone">
				<span>8 (800) 775-43-78</span>
				<span>8 (812) 385-43-78</span>
			</div>
			<div class="dd-footer-button">
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

