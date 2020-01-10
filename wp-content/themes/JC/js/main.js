$(function () {
	//Яндекс карта 
	if($('#contact').length) { 
		ymaps.ready(init);
	    function init(){
	        var myMap = new ymaps.Map("map", {
	            center: [55.80336172662323,37.586239589965786],
	            zoom: 16,
	            controls: [],
	            behaviors: ['drag']
	        });
	        //яндекс метка
	        var myPlacemark = new ymaps.Placemark(
	        //координаты метки
	        [55.80277556894847,37.58375049999996], {
	        	ballonContent: 'Бутырская улица, 62',
	        	iconCaption: 'Бутырская улица, 62'
	        });
	        //Добавление метки на карту
	        myMap.geoObjects.add(myPlacemark);
	        //Смещение центра карты
	        var position = myMap.getGlobalPixelCenter();
	        myMap.setGlobalPixelCenter([position[0] + 200, position[1]]);
	    };
	};

	// // ПАРАЛЛАКС точек
	if($('#connection').length) {
		var scene = document.getElementById('scene');
		var parallaxInstance = new Parallax(scene);
	};

	//SLIDER SWIPER
	if($('#slide-article').length) { 
		var swiper = new Swiper('#slide-article, .swiper-container', {
			slidesPerView: 1,
			observer: true,
			loop: true,
			loopFillGroupWithBlank: false,
				navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev'
			},
			breakpoints: {
				// when window width is >= 320px
				320: {
					slidesPerView: 1
				},
				// when window width is >= 768px
				768: {
					slidesPerView: 2
				},
				// when window width is >= 768px
				1200: {
					slidesPerView: 3
				}
				// return enableSwiper (); // запустить для маленького разрешения
			},
		});
	};
});

//ВАЛИДАЦИЯ ФОРМЫ И ОТПРАВКА
$(document).ready(function(){

	$('[data-submit]').on('click', function(e){
		e.preventDefault();
		$(this).parents('form.popup-form, form.form').submit();
	})

	$.validator.addMethod(
		"regex",
		function(value, element, regexp) {
			var re = new RegExp(regexp);
			return this.optional(element) || re.test(value);
		},
			"Please check your input."
	);
	 // Функция валидации и вывода сообщений
	function valEl(el){
		el.validate({
			rules:{
				tel:{ /*Проверка по данным атрибута name*/

					required:true,
					regex: '^([\+]+)*[0-9\x20\x28\x29\-]{11,20}$'
				},
				name:{

					required:true,
					regex: '[A-Za-zа-яА-Я`-]{2,20}$'
				},
				email:{

					required:true,
					email:true,
					regex: '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,5}$'
				},
			},
			messages:{
				tel:{

					required:'Поле обязательно для заполнения',
					regex:'Телефон может содержать символы + - ()'
				},
				name:{

					required:'Поле обязательно для заполнения',
					regex:'Некорректное имя'
				},
				email:{

					required:'Поле обязательно для заполнения', 
					email:'Неверный формат Email',
					regex:'Некорректный адрес Email'
				}
			},
		// Начинаем проверку id="" формы
		submitHandler: function (form) {

			$('#loader').fadeIn();// Здесь меняем появление лоадера на необходимые действия

			var $form = $(form);
			var $formId = $(form).attr('id');

			switch($formId){
				// Если у формы id="goToNewPage" - делаем:
				case'goToNewPage':
					$.ajax({

						type: 'POST',
						url: $form.attr('action'),
						data: $form.serialize(),
						})

					.always(function (response) {

						$form.trigger('reset');
						$('input').removeClass('valid');
						location.href='https://wayup.in';
					});

				break;
				// Если у формы id="popup-form" - делаем:
				 case 'popup-form':
	                $.ajax ({

	                        type: 'POST',
	                        url: $form.attr('action'),
	                        data: $form.serialize(),
	                        closeOnEsc: true, //Закрывать окно клик на Esc
	                    })
	                    .always(function(response) {
	                        setTimeout(function() {
	                            $('#exampleModal').arcticmodal('close');
	                        }, 500);

	                        setTimeout(function() {
	                        	$('#loader').fadeOut();
	                        	$('#overlay').fadeIn();
	                            $form.trigger('reset'); //очищает форму после отправки
	                            //строки для остлеживания целей в Я.Метрике и Google Analytics
	                        }, 2500);
	                        
	                        $('#overlay').on('click', function(e) {
	                            $(this).fadeOut();
	                        });
	                    });
	                break;

	                case 'formMessage':
	                $.ajax ({

	                        type: 'POST',
	                        url: $form.attr('action'),
	                        data: $form.serialize(),
	                        closeOnEsc: true, //Закрывать окно клик на Esc
	                    })
	                    .always(function(response) {
	                        setTimeout(function() {
	                        	$('#loader').fadeIn();
	                        }, 900);

	                        setTimeout(function() {
	                        	$('#loader').fadeOut();
	                        	$('#overlayMessage').fadeIn();
	                            $form.trigger('reset'); //очищает форму после отправки
	                            //строки для остлеживания целей в Я.Метрике и Google Analytics
	                        }, 2500);

	                        $('#overlayMessage').on('click', function(e) {
	                            $(this).fadeOut();
	                        });
	                    });
	                break;
			}
			return false; 
		}
	})
}
	$('form.popup-form, form.form').each(function() {
		valEl($(this)); 
	});
});



//ГАМБУРГЕР-МЕНЮ
$('#menuToggle').on('click',function() {
	$('.menu-modal').toggle();
	$('#modal').toggle();
});
$('#menuClouse').on('click',function(){
	$('.menu-modal').hide();
	$('#modal').hide();
});

//закрытие по фону
$('#modal').on('click',function() {
	$('.menu-modal').hide();
	$('#modal').hide();
});

//HEADER FIXED
var navTop = $(window).scrollTop();
if(navTop > 0 && $(document).width() > 1000) {
	$('.navigation').addClass('active-head');
}else if (navTop < 1) {
	$('.navigation').removeClass('active-head');
};

//MODAL WINDOW REQUEST
$('.phone-popup, .popupForm').on('click',function() {
    $('#exampleModal').arcticmodal();
});

//MODAL WINDOW READ-MORE
$('.article__link').on('click',function() {
    $('#readModal').arcticmodal();
});

//SCROLL TOP
$(function() {
	$(window).scroll(function() {
	 
	if($(this).scrollTop() != 0) {
	 
	$('#toTop').fadeIn();
	 
	} else {
	 
	$('#toTop').fadeOut();
	 
	}
	});
	 
	$('#toTop').click(function() {
	 
	$('body,html').animate({scrollTop:0},800);
	 
	});
});
//SCROLL TOP END