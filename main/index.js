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