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
    ManWinterChoose.classList.add('hidden');
    kidscard.classList.add('hidden');
    shoescard.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    ManAutumnChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    womanchoose.classList.remove('hidden');
    WomanSpringChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    womanCards.classList.remove('hidden');
});

manBtn.addEventListener('click', function() {
    womanCards.classList.add('hidden');
    manchoose.classList.remove('hidden');
    ManWinterChoose.classList.add('hidden');
    shoescard.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    ManAutumnChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    manCards.classList.remove('hidden');
});

kidsbtn.addEventListener('click',function(){
    manCards.classList.add('hidden');
    womanCards.classList.add('hidden');
    shoescard.classList.add('hidden');
    manchoose.classList.add('hidden');
    ManAutumnChoose.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    ManWinterChoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    kidscard.classList.remove('hidden');
})
shoesbtn.addEventListener('click',function(){
    manCards.classList.add('hidden');
    womanCards.classList.add('hidden');
    kidscard.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    ManAutumnChoose.classList.add('hidden');
    ManWinterChoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    manchoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    shoescard.classList.remove('hidden');

})

// 

let ManSummer = document.getElementById('Man-Summer');
let ManSummerChoose = document.getElementById('Man-Summer-choose');
let ManWinter = document.getElementById('Man-Winter');
let ManWinterChoose = document.getElementById('Man-Winter-choose');
let ManSpring = document.getElementById('Man-Spring');
let ManSpringChoose = document.getElementById('Man-Spring-choose');
let ManAutumn = document.getElementById('Man-Autumn');
let ManAutumnChoose = document.getElementById('Man-Autumn-choose');

ManSummer.addEventListener('click',function(){
    manCards.classList.add('hidden');
    womanCards.classList.add('hidden');
    shoescard.classList.add('hidden');
    ManAutumnChoose.classList.add('hidden');
    kidscard.classList.add('hidden');
    womanchoose.classList.add('hidden');
    ManWinterChoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    ManSummerChoose.classList.remove('hidden');
})

ManWinter.addEventListener('click',function(){
    manCards.classList.add('hidden');
    womanCards.classList.add('hidden');
    shoescard.classList.add('hidden');
    kidscard.classList.add('hidden');
    ManAutumnChoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    ManWinterChoose.classList.remove('hidden');
})

ManSpring.addEventListener('click',function(){
    manCards.classList.add('hidden');
    womanCards.classList.add('hidden');
    shoescard.classList.add('hidden');
    kidscard.classList.add('hidden');
    ManWinterChoose.classList.add('hidden');
    ManAutumnChoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    ManSpringChoose.classList.remove('hidden');
})

ManAutumn.addEventListener('click',function(){
    manCards.classList.add('hidden');
    womanCards.classList.add('hidden');
    shoescard.classList.add('hidden');
    kidscard.classList.add('hidden');
    ManWinterChoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    ManAutumnChoose.classList.remove('hidden');
})

let WomanSummer = document.getElementById('Woman-Summer');
let WomanSummerChoose = document.getElementById('Woman-Summer-choose');
let WomanWinter = document.getElementById('Winter');
let WomanWinterChoose = document.getElementById('Woman-Winter-choose');
let WomanSpring = document.getElementById('Woman-Spring');
let WomanSpringChoose = document.getElementById('Woman-Spring-choose');
let WomanAutumn = document.getElementById('Woman-Autumn');
let WomanAutumnChoose = document.getElementById('Woman-Autumn-choose');

WomanSummer.addEventListener('click',function(){
    manCards.classList.add('hidden');
    womanCards.classList.add('hidden');
    shoescard.classList.add('hidden');
    kidscard.classList.add('hidden');
    ManWinterChoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    womanchoose.classList.remove('hidden');
    WomanSummerChoose.classList.remove('hidden');
})

WomanWinter.addEventListener('click',function(){
    manCards.classList.add('hidden');
    womanCards.classList.add('hidden');
    shoescard.classList.add('hidden');
    kidscard.classList.add('hidden');
    ManWinterChoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    womanchoose.classList.remove('hidden');
    WomanWinterChoose.classList.remove('hidden');
})

WomanSpring.addEventListener('click',function(){
    manCards.classList.add('hidden');
    womanCards.classList.add('hidden');
    shoescard.classList.add('hidden');
    kidscard.classList.add('hidden');
    ManWinterChoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    womanchoose.classList.remove('hidden');
    WomanSpringChoose.classList.remove('hidden');
})

WomanAutumn.addEventListener('click',function(){
    manCards.classList.add('hidden');
    womanCards.classList.add('hidden');
    shoescard.classList.add('hidden');
    kidscard.classList.add('hidden');
    ManWinterChoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    womanchoose.classList.remove('hidden');
    WomanAutumnChoose.classList.remove('hidden');
})