<section class="section section_padding mape-block">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>Как нас найти</h2>
		</div>
	</div>
</div>
	<div class="map clearfix">
		<div class="map-img" id="map" style="width: 100%; height: 640px;">
			<script src="https://api-maps.yandex.ru/2.1/?lang=tr_TR" type="text/javascript"></script>
	    <script type="text/javascript">
	        ymaps.ready(init);
	        var myMap, 
	            myPlacemark;

	        function init(){ 
	            myMap = new ymaps.Map("map", {
	                center: [59.931783871627715, 30.350078891509984],
	                zoom: 16,
	                controls: []
	            },
	            {suppressMapOpenBlock: true}); 
	            
	            myPlacemark = new ymaps.Placemark([59.93175156418616, 30.35331899999999], {
	                hintContent: 'Москва!',
	                balloonContent: 'Столица России'
	            }, {
		            // Опции.
		            // Необходимо указать данный тип макета.
		            iconLayout: 'default#image',
		            // Своё изображение иконки метки.
		            iconImageHref: 'img/mape-ic.png',
		            // Размеры метки.
		            iconImageSize: [30, 42],
		            // Смещение левого верхнего угла иконки относительно
		            // её "ножки" (точки привязки).
		            iconImageOffset: [-5, -38]
		        }
	            );
	            myMap.behaviors.disable('scrollZoom');
	            myMap.geoObjects.add(myPlacemark);
	        }
	    </script>
		</div>
		<div class="container">
			<div class="map-contact">
				<div class="title-block">
					<span class="call">Позвоните нам</span>
					<span class="phone">8 (800) 775-43-78</span>
				</div>
				<div class="inner">
					<span class="title">Или оставьте заявку!</span>
					<p>Мы перезвоним вам и расскажем еще <br> больше про iPhone!</p>
					<div class="form-wrap">
						<form action="#">
							<div class="input-wrap">
								<input type="text" class="leave-input" placeholder="Имя">
							</div>
							<div class="input-wrap">
								<input type="text" class="leave-input" placeholder="Номер телефона">
							</div>
							<div class="input-wrap input-wrap-btn">
								<input type="submit" class="leave-submit" value="Отправить заявку">
							</div>
						</form>
					</div>
					<span class="descr">м. Маяковская, Невский пр-т, д. 65, 5 этаж,<br> вход с Невского проспекта через парадную дверь</span>
				</div>
			</div>
		</div>
	</div>
</section>
