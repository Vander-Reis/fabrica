// DOM Document object Model
// abre e fecha o menu quando clicar no icone: hamburguer
const nav = document.querySelector('#header nav')
const toggle = document.querySelectorAll('nav .toggle')
let darkmode = document.querySelector('.dark-mode')
let body = document.querySelector('body')

for (const element of toggle) {
  element.addEventListener('click', function () {
    nav.classList.toggle('show')
  })
}

/* quando clicar em um item do menu, esconder o menu*/
const links = document.querySelectorAll('nav ul li a')

for (const link of links) {
  link.addEventListener('click', function () {
    nav.classList.remove('show')
  })
}

/* mudar o header da página quando der scroll*/

const header = document.querySelector('#header')
const navHeight = header.offsetHeight

function changeHeaderWhenScroll() {
  if (window.scrollY >= navHeight) {
    // scroll é maior que a altura do header
    header.classList.add('scroll')
  } else {
    // menor que a altura do header
    header.classList.remove('scroll')
  }
}

/* Testimonial carousel slider swiper*/

const swiper = new Swiper('.mySwiper', {
  slidesPerView: 1,
  grabCursor: true,
  pagination: {
    el: '.swiper-pagination'
  },
  mousewheel: true,
  Keyboard: true,
  breakpoints: {
    767: {
      slidesPerView: 2,
      setWrapperSize: true,
    }
  }
})

/* ScrollReveal:  mostrar elementos quando der scroll na página */

const scrollReveal = ScrollReveal({
  origin: 'top',
  distance: '30px',
  duration: 700,
  reset: true
})

scrollReveal.reveal(
  `#home .image, #home .text, 
  #about .image, #about .text,
  #exercises header, #exercises .card,
  #testimonials header, #testimonials .testimonials
  #contact .text, #contact .links,
  footer .brand, footer .social
  `,
  { interval: 100 }
)

const backToTopButton = document.querySelector('.back-to-top')

function backToTop() {
  /* Botão para voltar para o topo*/

  if (window.scrollY >= 560 && window.scrollY <= 4300) {
    backToTopButton.classList.add('show')
    backToTopButton.classList.remove('bottom')
  } else if (window.scrollY > 4300) {
    backToTopButton.classList.remove('show')
    backToTopButton.classList.add('bottom')
  } else {
    backToTopButton.classList.remove('show')
    backToTopButton.classList.remove('bottom')
  }
}

/* Menu ativo conforme a seção visível na página*/
const sections = document.querySelectorAll('main section[id]')
function activateMenuAtCurrentSection() {
  const checkpoint = window.pageYOffset + (window.innerHeight / 8) * 4

  for (const section of sections) {
    const sectionTop = section.offsetTop
    const sectionHeight = section.offsetHeight
    const sectionId = section.getAttribute('id')

    const checkpointStart = checkpoint >= sectionTop
    const checkpointEnd = checkpoint <= sectionTop + sectionHeight

    if (checkpointStart && checkpointEnd) {
      document
        .querySelector('nav ul li a[href*=' + sectionId + ']')
        .classList.add('active')
    } else {
      document
        .querySelector('nav ul li a[href*=' + sectionId + ']')
        .classList.remove('active')
    }
  }
}

/* Chamada das funções do scroll da página */
window.addEventListener('scroll', function () {
  changeHeaderWhenScroll()
  backToTop()
  activateMenuAtCurrentSection()
})

// darkmode aqui

darkmode.addEventListener('click', () => {
  if(body.classList == "") {
    body.classList.add('darkmode');
    darkmode.setAttribute('src', './assets/sun.png');
    localStorage.setItem("background", "darkmode");
  } else {
    body.classList.remove('darkmode');
    darkmode.setAttribute('src', './assets/moon.png');
    localStorage.setItem("background", "");
  }
})


document.addEventListener("DOMContentLoaded", () => {
//when loading document
  var background = localStorage.getItem("background");
// get localStorage var background
  if (background) {
// if its not null and empty
    document.body.className += background;
//add class to body
  }
});

