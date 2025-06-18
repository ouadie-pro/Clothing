const menuIcon = document.querySelector('.fa-bars');
const mobileMenu = document.getElementById('modii');
menuIcon.addEventListener('click', function() {
    mobileMenu.classList.toggle('hidden');
});

let manBtn = document.getElementById('man');
let manchoose = document.getElementById('man-choose');
let womanBtn = document.getElementById('woman');
let womanchoose = document.getElementById('woman-choose'); 
let manCards = document.getElementById('man-cards');
let womanCards = document.getElementById('woman-cards');
let kidsbtn = document.getElementById('kids');
let kidscard = document.getElementById('kids-cards')
let shoesbtn = document.getElementById('shoes');
let shoescard = document.getElementById('shoes-cards')

womanBtn.addEventListener('click', function() {
    manCards.classList.add('hidden');
    manchoose.classList.add('hidden');
    kidscard.classList.add('hidden');
    shoescard.classList.add('hidden');
    womanchoose.classList.remove('hidden');
    womanCards.classList.remove('hidden');
});

manBtn.addEventListener('click', function() {
    womanCards.classList.add('hidden');
    manchoose.classList.remove('hidden');
    womanchoose.classList.add('hidden');
    manCards.classList.remove('hidden');
});

kidsbtn.addEventListener('click',function(){
    manCards.classList.add('hidden');
    womanCards.classList.add('hidden');
    shoescard.classList.add('hidden');
    manchoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    kidscard.classList.remove('hidden');
})
shoesbtn.addEventListener('click',function(){
    manCards.classList.add('hidden');
    womanCards.classList.add('hidden');
    kidscard.classList.add('hidden');
    manchoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    shoescard.classList.remove('hidden');
})