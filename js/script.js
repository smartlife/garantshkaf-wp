/* Parallax home section */
$(window).scroll(function(e){
	var scrolled = $(window).scrollTop();
	$('.parallax-home-section').css('top',(-(scrolled*.35) )+'px'); // 35 - скорость прокрутки
});
/* End parallax home section */



/* Функция "Выезжало */	
function vyezjalo() {
	onscroll = function() {
		var prokrutka = window.pageYOffset;
		if ( window.screen.width >= 992 ) {
			if ( prokrutka > 400) {
				document.getElementById('sliding-header').style.top = '0px';
			} else if ( prokrutka <= 400 ) {
				document.getElementById('sliding-header').style.top = '-100px';
			}
		}
		/* Убираем меню при прокрутке */
		document.getElementById( 'sliding-header-collapse' ).classList.remove('show');
	}
	
}

/* Функция "Прилипало" */
function prilipalo() {
	onscroll = function() {
		var prokrutka = window.pageYOffset;
		if ( window.screen.width >= 769 ) {
			if ( prokrutka > 50 ) {
				document.getElementById('top-menu-2').classList.add('fixed-top');
				document.getElementById('top-menu-2').style.position = 'fixed';
				document.getElementById('top-menu-2').style.top = 0;
			} else {
				document.getElementById('top-menu-2').classList.remove('fixed-top');
				document.getElementById('top-menu-2').style.position = 'absolute';
				document.getElementById('top-menu-2').style.top = '57px';
			}
		} else {
			document.getElementById('top-menu-2').style.position = '';
			document.getElementById('top-menu-2').style.top = 0;
			document.getElementById('top-menu-2').classList.add('fixed-top');
		}
	}
}