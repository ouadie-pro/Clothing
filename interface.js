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
let Kidschoose = document.getElementById('Kids-choose')
let kidscard = document.getElementById('kids-cards')
let shoesbtn = document.getElementById('shoes');
let shoescard = document.getElementById('shoes-cards')
let shoeschoose = document.getElementById('Shoes-choose')

womanBtn.addEventListener('click', function() {
    manCards.classList.add('hidden');
    manchoose.classList.add('hidden');
    ManWinterChoose.classList.add('hidden');
    kidscard.classList.add('hidden');
    shoescard.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    ManAutumnChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    Kidschoose.classList.add('hidden');
    shoeschoose.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    KidsSpringChoose.classList.add('hidden');
    KidsWinterChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    KidsSummerChoose.classList.add('hidden');
    ShoesWomenChoose.classList.add('hidden');
    ShoesSportChoose.classList.add('hidden');
    ShoesKidsChoose.classList.add('hidden');
    womanchoose.classList.remove('hidden');
    ShoesMenChoose.classList.add('hidden');
    KidsAutumnChoose.classList.add('hidden');
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
    KidsSummerChoose.classList.add('hidden');
    ManAutumnChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    shoeschoose.classList.add('hidden');
    Kidschoose.classList.add('hidden');
    KidsSpringChoose.classList.add('hidden');
    KidsWinterChoose.classList.add('hidden');
    KidsAutumnChoose.classList.add('hidden');
    ShoesWomenChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    ShoesSportChoose.classList.add('hidden');
    ShoesKidsChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    ShoesMenChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    manCards.classList.remove('hidden');
});

kidsbtn.addEventListener('click',function(){
    manCards.classList.add('hidden');
    womanCards.classList.add('hidden');
    shoescard.classList.add('hidden');
    manchoose.classList.add('hidden');
    shoeschoose.classList.add('hidden');
    ManAutumnChoose.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    ManWinterChoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    KidsWinterChoose.classList.add('hidden');
    KidsSpringChoose.classList.add('hidden');
    KidsAutumnChoose.classList.add('hidden');
    ShoesMenChoose.classList.add('hidden');
    ShoesWomenChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    ShoesKidsChoose.classList.add('hidden');
    ShoesSportChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    KidsSummerChoose.classList.add('hidden');
    Kidschoose.classList.remove('hidden');
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
    KidsSpringChoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    KidsAutumnChoose.classList.add('hidden');
    KidsSummerChoose.classList.add('hidden');
    Kidschoose.classList.add('hidden');
    ShoesWomenChoose.classList.add('hidden');
    ShoesKidsChoose.classList.add('hidden');
    ShoesMenChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    ShoesSportChoose.classList.add('hidden');
    KidsWinterChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    shoeschoose.classList.remove('hidden');
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
    Kidschoose.classList.add('hidden');
    kidscard.classList.add('hidden');
    womanchoose.classList.add('hidden');
    shoeschoose.classList.add('hidden');
    ManWinterChoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    KidsSummerChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    KidsAutumnChoose.classList.add('hidden');
    ShoesMenChoose.classList.add('hidden');
    ShoesWomenChoose.classList.add('hidden');
    KidsWinterChoose.classList.add('hidden');
    ShoesSportChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    ShoesKidsChoose.classList.add('hidden');
    KidsSpringChoose.classList.add('hidden');
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
    KidsSummerChoose.classList.add('hidden');
    Kidschoose.classList.add('hidden');
    ShoesSportChoose.classList.add('hidden');
    shoeschoose.classList.add('hidden');
    KidsWinterChoose.classList.add('hidden');
    ShoesWomenChoose.classList.add('hidden');
    KidsAutumnChoose.classList.add('hidden');
    ShoesKidsChoose.classList.add('hidden');
    KidsSpringChoose.classList.add('hidden');
    ShoesMenChoose.classList.add('hidden');
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
    Kidschoose.classList.add('hidden');
    shoeschoose.classList.add('hidden');
    KidsWinterChoose.classList.add('hidden');
    ShoesSportChoose.classList.add('hidden');
    KidsSpringChoose.classList.add('hidden');
    KidsSummerChoose.classList.add('hidden');
    KidsAutumnChoose.classList.add('hidden');
    ShoesKidsChoose.classList.add('hidden');
    ShoesMenChoose.classList.add('hidden');
    ShoesWomenChoose.classList.add('hidden');
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
    shoeschoose.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    Kidschoose.classList.add('hidden');
    KidsWinterChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    KidsSummerChoose.classList.add('hidden');
    KidsSpringChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    ShoesKidsChoose.classList.add('hidden');
    ShoesSportChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    ShoesMenChoose.classList.add('hidden');
    ShoesWomenChoose.classList.add('hidden');
    KidsAutumnChoose.classList.add('hidden');
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
    Kidschoose.classList.add('hidden');
    ManWinterChoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    shoeschoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    KidsWinterChoose.classList.add('hidden');
    KidsSummerChoose.classList.add('hidden');
    ShoesSportChoose.classList.add('hidden');
    KidsSpringChoose.classList.add('hidden');
    ShoesKidsChoose.classList.add('hidden');
    ShoesWomenChoose.classList.add('hidden');
    ShoesMenChoose.classList.add('hidden');
    KidsAutumnChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    womanchoose.classList.remove('hidden');
    WomanSummerChoose.classList.remove('hidden');
})

WomanWinter.addEventListener('click',function(){
    manCards.classList.add('hidden');
    womanCards.classList.add('hidden');
    shoescard.classList.add('hidden');
    Kidschoose.classList.add('hidden');
    kidscard.classList.add('hidden');
    ManWinterChoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    shoeschoose.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    KidsWinterChoose.classList.add('hidden');
    KidsSummerChoose.classList.add('hidden');
    ShoesKidsChoose.classList.add('hidden');
    KidsAutumnChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    ShoesWomenChoose.classList.add('hidden');
    ShoesMenChoose.classList.add('hidden');
    ShoesSportChoose.classList.add('hidden');
    KidsSpringChoose.classList.add('hidden');
    womanchoose.classList.remove('hidden');
    WomanWinterChoose.classList.remove('hidden');
})

WomanSpring.addEventListener('click',function(){
    manCards.classList.add('hidden');
    womanCards.classList.add('hidden');
    shoescard.classList.add('hidden');
    kidscard.classList.add('hidden');
    ManWinterChoose.classList.add('hidden');
    shoeschoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    Kidschoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    KidsAutumnChoose.classList.add('hidden');
    ShoesKidsChoose.classList.add('hidden');
    KidsWinterChoose.classList.add('hidden');
    ShoesSportChoose.classList.add('hidden');
    ShoesWomenChoose.classList.add('hidden');
    KidsSummerChoose.classList.add('hidden');
    KidsSpringChoose.classList.add('hidden');
    ShoesMenChoose.classList.add('hidden');
    womanchoose.classList.remove('hidden');
    WomanSpringChoose.classList.remove('hidden');
})

WomanAutumn.addEventListener('click',function(){
    manCards.classList.add('hidden');
    womanCards.classList.add('hidden');
    shoescard.classList.add('hidden');
    kidscard.classList.add('hidden');
    ManWinterChoose.classList.add('hidden');
    shoeschoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    Kidschoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    KidsWinterChoose.classList.add('hidden');
    KidsSummerChoose.classList.add('hidden');
    ShoesSportChoose.classList.add('hidden');
    ShoesKidsChoose.classList.add('hidden');
    ShoesWomenChoose.classList.add('hidden');
    KidsAutumnChoose.classList.add('hidden');
    KidsSpringChoose.classList.add('hidden');
    ShoesMenChoose.classList.add('hidden');
    womanchoose.classList.remove('hidden');
    WomanAutumnChoose.classList.remove('hidden');
})

let KidsSummer = document.getElementById('Kids-Summer');
let KidsSummerChoose = document.getElementById('Kids-Summer-choose');
let KidsWinter = document.getElementById('Kids-Winter');
let KidsWinterChoose = document.getElementById('Kids-Winter-choose');
let KidsSpring = document.getElementById('Kids-Spring');
let KidsSpringChoose = document.getElementById('Kids-Spring-choose');
let KidsAutumn = document.getElementById('Kids-Autumn');
let KidsAutumnChoose = document.getElementById('Kids-Autumn-choose');

KidsSummer.addEventListener('click',function(){
    manCards.classList.add('hidden');
    womanCards.classList.add('hidden');
    shoescard.classList.add('hidden');
    kidscard.classList.add('hidden');
    ManWinterChoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    shoeschoose.classList.add('hidden');
    Kidschoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    ShoesSportChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    KidsSpringChoose.classList.add('hidden');
    ShoesKidsChoose.classList.add('hidden');
    ShoesWomenChoose.classList.add('hidden');
    KidsWinterChoose.classList.add('hidden');
    KidsAutumnChoose.classList.add('hidden');
    ShoesMenChoose.classList.add('hidden');
    Kidschoose.classList.remove('hidden');
    KidsSummerChoose.classList.remove('hidden');
})

KidsWinter.addEventListener('click',function(){
    manCards.classList.add('hidden');
    womanCards.classList.add('hidden');
    shoescard.classList.add('hidden');
    kidscard.classList.add('hidden');
    ManWinterChoose.classList.add('hidden');
    shoeschoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    Kidschoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    ShoesSportChoose.classList.add('hidden');
    KidsSpringChoose.classList.add('hidden');
    KidsAutumnChoose.classList.add('hidden');
    ShoesKidsChoose.classList.add('hidden');
    ShoesWomenChoose.classList.add('hidden');
    ShoesMenChoose.classList.add('hidden');
    KidsSummerChoose.classList.add('hidden');
    Kidschoose.classList.remove('hidden');
    KidsWinterChoose.classList.remove('hidden');
})

KidsSpring.addEventListener('click',function(){
    manCards.classList.add('hidden');
    womanCards.classList.add('hidden');
    shoescard.classList.add('hidden');
    kidscard.classList.add('hidden');
    ManWinterChoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    shoeschoose.classList.add('hidden');
    Kidschoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    KidsSummerChoose.classList.add('hidden');
    ShoesKidsChoose.classList.add('hidden');
    ShoesSportChoose.classList.add('hidden');
    KidsAutumnChoose.classList.add('hidden');
    ShoesMenChoose.classList.add('hidden');
    ShoesWomenChoose.classList.add('hidden');
    KidsWinterChoose.classList.add('hidden');
    Kidschoose.classList.remove('hidden');
    KidsSpringChoose.classList.remove('hidden');
})

KidsAutumn.addEventListener('click',function(){
    manCards.classList.add('hidden');
    womanCards.classList.add('hidden');
    shoescard.classList.add('hidden');
    kidscard.classList.add('hidden');
    ManWinterChoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    shoeschoose.classList.add('hidden');
    Kidschoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    ShoesKidsChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    KidsSummerChoose.classList.add('hidden');
    KidsWinterChoose.classList.add('hidden');
    KidsSpringChoose.classList.add('hidden');
    ShoesSportChoose.classList.add('hidden');
    ShoesWomenChoose.classList.add('hidden');
    ShoesMenChoose.classList.add('hidden');
    Kidschoose.classList.remove('hidden');
    KidsAutumnChoose.classList.remove('hidden');
})

let ShoesSummer = document.getElementById('Shoes-men');
let ShoesMenChoose = document.getElementById('Shoes-Summer-choose');
let ShoesWomen = document.getElementById('Shoes-women');
let ShoesWomenChoose = document.getElementById('Shoes-women-choose');
let ShoesKids = document.getElementById('Shoes-kids');
let ShoesKidsChoose = document.getElementById('Shoes-Spring-choose');
let ShoesSport = document.getElementById('Shoes-sport');
let ShoesSportChoose = document.getElementById('Shoes-Sport-choose');

ShoesSummer.addEventListener('click',function(){
    manCards.classList.add('hidden');
    womanCards.classList.add('hidden');
    shoescard.classList.add('hidden');
    kidscard.classList.add('hidden');
    ManWinterChoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    shoeschoose.classList.add('hidden');
    Kidschoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    KidsSummerChoose.classList.add('hidden');
    KidsWinterChoose.classList.add('hidden');
    KidsSpringChoose.classList.add('hidden');
    ShoesKidsChoose.classList.add('hidden');
    ShoesSportChoose.classList.add('hidden');
    KidsAutumnChoose.classList.add('hidden');
    ShoesWomenChoose.classList.add('hidden');
    shoeschoose.classList.remove('hidden');
    ShoesMenChoose.classList.remove('hidden');
})

ShoesWomen.addEventListener('click',function(){
    manCards.classList.add('hidden');
    womanCards.classList.add('hidden');
    shoescard.classList.add('hidden');
    kidscard.classList.add('hidden');
    ManWinterChoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    shoeschoose.classList.add('hidden');
    Kidschoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    KidsSummerChoose.classList.add('hidden');
    KidsWinterChoose.classList.add('hidden');
    ShoesKidsChoose.classList.add('hidden');
    ShoesSportChoose.classList.add('hidden');
    KidsSpringChoose.classList.add('hidden');
    KidsAutumnChoose.classList.add('hidden');
    ShoesMenChoose.classList.add('hidden');
    shoeschoose.classList.remove('hidden');
    ShoesWomenChoose.classList.remove('hidden');
})

ShoesKids.addEventListener('click',function(){
    manCards.classList.add('hidden');
    womanCards.classList.add('hidden');
    shoescard.classList.add('hidden');
    kidscard.classList.add('hidden');
    ManWinterChoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    shoeschoose.classList.add('hidden');
    Kidschoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    KidsSummerChoose.classList.add('hidden');
    KidsWinterChoose.classList.add('hidden');
    KidsSpringChoose.classList.add('hidden');
    KidsAutumnChoose.classList.add('hidden');
    ShoesWomenChoose.classList.add('hidden');
    ShoesSportChoose.classList.add('hidden');
    ShoesMenChoose.classList.add('hidden');
    shoeschoose.classList.remove('hidden');
    ShoesKidsChoose.classList.remove('hidden');
})

ShoesSport.addEventListener('click',function(){
    manCards.classList.add('hidden');
    womanCards.classList.add('hidden');
    shoescard.classList.add('hidden');
    kidscard.classList.add('hidden');
    ManWinterChoose.classList.add('hidden');
    womanchoose.classList.add('hidden');
    ManSummerChoose.classList.add('hidden');
    shoeschoose.classList.add('hidden');
    Kidschoose.classList.add('hidden');
    ManSpringChoose.classList.add('hidden');
    WomanSummerChoose.classList.add('hidden');
    WomanWinterChoose.classList.add('hidden');
    WomanSpringChoose.classList.add('hidden');
    WomanAutumnChoose.classList.add('hidden');
    KidsSummerChoose.classList.add('hidden');
    KidsWinterChoose.classList.add('hidden');
    KidsSpringChoose.classList.add('hidden');
    KidsAutumnChoose.classList.add('hidden');
    ShoesWomenChoose.classList.add('hidden');
    ShoesKidsChoose.classList.add('hidden');
    ShoesMenChoose.classList.add('hidden');
    shoeschoose.classList.remove('hidden');
    ShoesSportChoose.classList.remove('hidden');
})