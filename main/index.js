//const { compileString } = require("sass");

const firstCase = document.getElementById('case-one');
const twoCase = document.getElementById('case-two');
const threeCase = document.getElementById('case-three');
const foorCase = document.getElementById('case-foor');
const fiveCase = document.getElementById('case-five');

const first = document.getElementById("first");
const two = document.getElementById('second');
const three = document.getElementById('three');
const foor = document.getElementById('foor');
const five = document.getElementById('five');







twoCase.addEventListener('click', () => {
    first.style = "display:none";
    two.style = "display:block";
    three.style = "display:none";
    foor.style = "display:none";
    five.style = "display:none";
})
threeCase.addEventListener('click', () => {
    first.style = "display:none";
    two.style = "display:none";
    three.style = "display:block"
    foor.style = "display:none";
    five.style = "display:none";
})
firstCase.addEventListener('click', () => {
    two.style = "display:none";
    three.style = "display:none";
    first.style = "display:block";
    foor.style = "display:none";
    five.style = "display:none";
})
foorCase.addEventListener('click', () => {
    two.style = "display:none";
    three.style = "display:none";
    first.style = "display:none";
    foor.style = "display:block";
    five.style = "display:none";
})
fiveCase.addEventListener('click', () => {
    two.style = "display:none";
    three.style = "display:none";
    first.style = "display:none";
    foor.style = "display:none";
    five.style = "display:block";
})

const heropanel = document.querySelector('.heropanel');
const sectionNews = document.querySelector('.news');

window.addEventListener('scroll', function() {
  if (sectionNews.getBoundingClientRect().top < heropanel.offsetHeight) {
    heropanel.classList.add('active');
  } else {
    heropanel.classList.remove('active');
  }
});




// SMOOTH SCROLL










// Modale 

var modal = document.getElementById('modal');

var img = document.querySelectorAll('.img1');
var modalImg = document.getElementById("img01");
document.getElementById("caption");

for (var i = 0; i < img.length; i++) {
  
  const element = img[i];
  element.onclick = function(){
    if (modal) {
      modal.style.display = "block";
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
    }
    
  }
}

var span = document.querySelectorAll(".close");

for (var index = 0; index < span.length; index++) {
  const element1 = span[index];
  element1.onclick = function () {
    modal.style.display = "none";
  }
}

// BURGER

const burger = document.querySelector('.header-burger');
const menu = document.querySelector('.header-navList');
const hide = document.querySelector('.hide');
const bar = document.querySelector('.header-navListItem')
const burgerImage = document.querySelector('.header-burger img');


const fichesSection = document.querySelector('.fichesPratiques');

burger.addEventListener('click', function() {
 

  if (menu.classList.contains('menuOpen')) {
    menu.classList.remove('menuOpen');
    burgerImage.src = 'img/burger-menu-open.svg.png';
  } else {
    menu.classList.add('menuOpen');
    burgerImage.src = 'img/burger-menu-close.png';
  }

});

