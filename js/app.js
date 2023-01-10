import AOS from 'aos';

const header = document.getElementsByTagName('header')[0]
const nav = document.getElementsByTagName('nav')[0]
const toggle = document.getElementById('btn_menu')
const btnMenuProducts = document.getElementById('btn_menu_products')
const contentProducts = document.getElementById('content_products')
const arrowProduct = document.getElementById('arrow_product')

var url = window.location.pathname;
var filename = url.substring(url.lastIndexOf('/')+1);

AOS.init({
  // Global settings:
  // disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  // startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  // initClassName: 'aos-init', // class applied after initialization
  // animatedClassName: 'aos-animate', // class applied on animation
  // useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  // disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  // debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  // throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  
  // // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  // delay: 0, // values from 0 to 3000, with step 50ms
  // duration: 400, // values from 0 to 3000, with step 50ms
  // easing: 'ease', // default easing for AOS animations
  once: false, // si la animación debe ocurrir solo una vez, mientras se desplaza hacia abajo
  // mirror: false, // whether elements should animate out while scrolling past them
  // anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});

btnMenuProducts.addEventListener('click', function(){
	contentProducts.classList.toggle('open')
	arrowProduct.classList.toggle('rotate')
});

toggle.addEventListener('click', function(){
	menuToggle()
});

function menuToggle() {
	nav.classList.toggle('active')
	toggle.classList.toggle('active')
	
	if (toggle.classList.contains("fa-bars")) {
		toggle.classList.remove('fa-bars')
		toggle.classList.add('fa-times')
	} else {
		toggle.classList.add('fa-bars')
		toggle.classList.remove('fa-times')
	}
}
/*HABILITAR ESTA FUNCION PARA QUE EL HEADER APAREZCA Y DESAPAREZCA EN FUNCION
DEL SCROLL HACIA ARRIBA O ABAJO
*/
var scrollVar = -200;
window.addEventListener('scroll', function() {
	if ( document.body.getBoundingClientRect().top >= scrollVar )
		showlHeader()
	else {
		hidelHeader()
	}
});

function showlHeader() {
	header.classList.remove('fixed')
}

function hidelHeader() {
	header.classList.add('fixed')
}

function validateForm() {
	// Validacion del Formulario
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.getElementsByClassName('needs-validation');
  // Loop over them and prevent submission
  var validation = Array.prototype.filter.call(forms, function(form) {
    if (form.checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
      return true
    }
    form.classList.add('was-validated');
      return false
  });
}

if ( filename === '' || filename === 'index.php' ) { 
  
  let btnsLines = document.querySelectorAll('.btn_line');
  let contentsLines = document.querySelectorAll('.content_line');

  btnsLines.forEach(function (btn) {
    btn.addEventListener('click', function() {

      contentsLines.forEach(function (contentLine) {
        contentLine.classList.remove('active')
      })

      btnsLines.forEach(function (btnLine) {
        btnLine.classList.remove('active')
      })

      btn.classList.add('active')
      eval(btn.dataset.line).classList.add('active')

    })
  })

}

if ( filename === '' || filename === 'index.php' || filename === 'empresa.php' ) {
  // Plugin Slick (Carrousel logos) Funcion
  $('.galeria').slick({
    autoplay: true,
    autoplaySpeed: 1500,
    infinite: true,
    speed: 500,
    arrows: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

}



