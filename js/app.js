import AOS from 'aos';
import Swiper from './../node_modules/swiper/swiper-bundle.esm.browser.min.js';
import { CountUp } from 'countup.js';

const header = document.getElementsByTagName('header')[0]
const nav = document.getElementsByTagName('nav')[0]
const toggle = document.getElementById('btn_menu')
const btnMenuProducts = document.getElementById('btn_menu_products')
const contentProducts = document.getElementById('content_products')
const arrowProduct = document.getElementById('arrow_product')

var url = window.location.pathname;
var filename = url.substring(url.lastIndexOf('/')+1);

if ( 
  filename === 'producto-hebe-schiebe.php' ||
  filename === 'producto-inova.php' ||
  filename === 'producto-compact.php' ||
  filename === 'producto-sliding-7400.php' ||
  filename === 'producto-new-elegans.php'
  ) { 

  var options = { // opciones para objetos CountUp
    useEasing: true, 
    useGrouping: true, 
    separator: '.', 
    decimal: '.', 
    enableScrollSpy: true, 
    suffix: '%'
  }

  var acusticoA = new CountUp('acustico_a', 90, options);
  var acusticoB = new CountUp('acustico_b', 30, options);
  var acusticoC = new CountUp('acustico_c', 70, options);

  var termicoA = new CountUp('termico_a', 90, options);
  var termicoB = new CountUp('termico_b', 50, options);
  var termicoC = new CountUp('termico_c', 90, options);

  var extremoA = new CountUp('extremo_a', 90, options);
  var extremoB = new CountUp('extremo_b', 70, options);
  var extremoC = new CountUp('extremo_c', 70, options);
  
}

var swiper = new Swiper(".swiper", {
  slidesPerView: 2,
  // centeredSlides: true,
  spaceBetween: 12,
  autoplay: 
  {
    delay: 2000,
  },
  loop: true,
  breakpoints: {
    640: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    // 768: {
    //   slidesPerView: 4,
    //   spaceBetween: 40,
    // },
    // 1024: {
    //   slidesPerView: 5,
    //   spaceBetween: 50,
    // },
  },
});

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
  // offset: 120, // offset (in px) from the original trigger point
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

// Carrusel Aspiracional Home
function galleryHome(imgs) {

  var expandImg = document.getElementById("expandedImg");
  var numberText = document.getElementById("number_text");

  const srcNew = imgs.src.replace('small','large');
  const text = imgs.getAttribute("data-text")
  const number = imgs.getAttribute("data-number")

  var imgText = document.getElementById("img_text");
  expandImg.src = srcNew; // Remplazamos la imagen
  imgText.innerHTML = text; // Remplazamos el texto
  numberText.innerHTML = number; // Remplazamos el numero

}

window.galleryHome = galleryHome; // hacemos la funcion global por webpack
// Carrusel Aspiracional Home end

if ( filename === '' ) { 
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
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
}



