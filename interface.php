<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="fontawesome-free-6.7.2-web/css/all.css">
    <style>   
    .font-dancing {
        font-family: 'Dancing Script', cursive;
    }
    </style>
</head>
<body style="font-family: Arial, Helvetica, sans-serif;" class="overflow-x-hidden">
    <div class="w-full min-h-screen bg-lime-50">
        <header class="border-b-3 border-lime-600">
            <nav class="flex justify-between py-5 px-3 items-center ">
                <div class="flex gap-2 items-center">
                    <span class="w-5 h-5 bg-lime-900 rotate-50"></span>
                    <h1 class="font-dancing capitalize font-[800] text-2xl text-lime-900">clothing<span class="capitalize text-lime-600">Store</span></h1>
                </div>
                <div class="flex items-center bg-lime-100 py-2 px-5 rounded-[50px]">
                    <i class="fa fa-search"></i>
                    <input type="search" class="border-none " placeholder="Search">
                </div>
                <div id="modii" class="hidden md:flex gap-2">
                    <a href="#" class="capitalize hover:bg-lime-600 px-2 py-1 rounded-lg">sing in</a>
                    <a href="#" class="bg-lime-600 px-2 capitalize py-1 rounded-lg">sing up</a>
                </div>
                <div class="xl:hidden">
                    <i class="fa-solid fa-bars text-2xl"></i>
                </div>
            </nav>
        </header>

        <main class="flex flex-col mt-3 px-4 gap-5">
            <div class="flex flex-row gap-4 ">
                <a href="#" class="capitalize bg-lime-600 px-4" id="man">man</a>
                <a href="#aa1" class="capitalize hover:bg-lime-600 px-1 focus:bg-lime-600 px-1" id="woman">woman</a>
                <a href="#" class="capitalize hover:bg-lime-600 px-4 focus:bg-lime-600 px-4" id="kids">kids</a>
                <a href="#" class="capitalize hover:bg-lime-600 px-3 focus:bg-lime-600 px-3" id="shoes">shoes</a>
            </div>
            <!--choose Man-->
            <div class="grid-cols-4 gap-2 mt-1 px-4 border-3 border-lime-900 py-2 rounded-xl shadow-xl grid xl:grid-cols-4 gap-2  lg:grid-cols-4 gap-2 md:grid-cols-4 gap-2 sm:grid-cols-4 gap-2 " id="man-choose">
                <a href="#" class="relative hover:-translate-y-2"  id="Man-Summer">
                    <img src="colthingImage/ManImage/ManSummer/ManSummer12.jpg" alt="" class="xl:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg lg:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg md:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg sm:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg">
                    <div class="absolute bottom-0 left-2  bg-opacity-40 flex items-center justify-center text-white text-sm p-2 xl:text-2xl left-8 lg:text-2xl left-8 md:text-2xl left-8 sm:absolute bottom-0 left-5 text-2xl ">Man-Summer</div>
                </a>
                <a href="#" class="relative hover:-translate-x-2" id="Man-Winter">
                    <img src="colthingImage/ManImage/ManWinter/ManWinter10.png" alt="" class="xl:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg lg:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg md:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg sm:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg">
                    <div class="absolute bottom-0 left-2  bg-opacity-40 flex items-center justify-center text-white text-sm p-2 xl:text-2xl left-8 lg:text-2xl left-8 md:text-2xl left-8 sm:absolute bottom-0 left-5 text-2xl ">Man-Winter</div>
                </a>
                <a href="#" class="relative hover:-translate-y-2" id="Man-Spring">
                    <img src="colthingImage/ManImage/ManSpring/ManSpring4.jpg" alt="" class="xl:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg lg:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg md:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg sm:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg">
                    <div class="absolute bottom-0 left-2  bg-opacity-40 flex items-center justify-center text-white text-sm p-2 xl:text-2xl left-8 lg:text-2xl left-8 md:text-2xl left-8 sm:absolute bottom-0 left-5 text-2xl">Man-Spring</div>
                </a>
                <a href="#" class="relative hover:-translate-x-2" id="Man-Autumn">
                    <img src="colthingImage/ManImage/ManAutumn/ManAutumn8.webp" alt="" class="xl:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg lg:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg md:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg sm:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg">
                    <div class="absolute bottom-0 left-2  bg-opacity-40 flex items-center justify-center text-white text-sm p-2 xl:text-2xl left-8 lg:text-2xl left-8 md:text-2xl left-8 sm:absolute bottom-0 left-5 text-2xl">Man-Autumn</div>
                </a>
            </div>
            <!--Menu Man-->
            <ul class="grid grid-cols-2 md:grid-cols-4 xl:grid-cols-6 gap-4 sm:grid-cols-4 lg:grid-cols-6 w-full" id="man-cards">
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/ManImage/ManSummer/ManSummer12.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">T-shirt classique</small>
                    <h3 class="text-base font-semibold text-lime-900">Summer Style</h3>
                    <div>
                        <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    </div>
                    <div class="mt-3 flex justify-between items-center">
                        <span class="font-bold">177.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/ManImage/ManSummer/ManSummer11.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Chemise blanche</small>
                    <h3 class="text-base font-semibold text-lime-900">Urban Elegance</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">150.75$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/ManImage/ManWinter/ManWinter12.png" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Polo bleu marine</small>
                    <h3 class="text-base font-semibold text-lime-900">Classic Polo</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">119.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/ManImage/ManWinter/ManWinter11.png" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Hoodie casual gris</small>
                    <h3 class="text-base font-semibold text-lime-900">Street Comfort</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <i class="fa-regular fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">99.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/ManImage/ManSpring/ManSpring12.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">T-shirt graphique noir</small>
                    <h3 class="text-base font-semibold text-lime-900">Bold Statement</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-regular fa-star text-yellow-300"></i>
                    <i class="fa-regular fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">127.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/ManImage/ManSpring/ManSpring11.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Chemise bleue ciel</small>
                    <h3 class="text-base font-semibold text-lime-900">Smart Fit</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">149.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/ManImage/ManAutumn/ManAutumn12.webp" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Sweat-shirt col rond</small>
                    <h3 class="text-base font-semibold text-lime-900">Weekend Vibes</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">133.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/ManImage/ManAutumn/ManAutumn11.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">T-shirt sport noir</small>
                    <h3 class="text-base font-semibold text-lime-900">Active Wear</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">109.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/ManImage/ManSummer/ManSummer10.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Polo rayé gris/blanc</small>
                    <h3 class="text-base font-semibold text-lime-900">Casual Lines</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">120$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/ManImage/ManWinter/ManWinter10.png" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">T-shirt orange vif</small>
                    <h3 class="text-base font-semibold text-lime-900">Bright Day</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">144.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/ManImage/ManSpring/ManSpring10.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Pull col roulé noir</small>
                    <h3 class="text-base font-semibold text-lime-900">Winter Essential</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">199.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/ManImage/ManAutumn/ManAutumn10.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Débardeur d'été</small>
                    <h3 class="text-base font-semibold text-lime-900">Beach Fit</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-regular fa-star text-yellow-300"></i>
                    <i class="fa-regular fa-star text-yellow-300"></i>
                    <i class="fa-regular fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">89.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
            </ul>

            <?php include('ManChoose.php') ?>
            <!--choose woman-->
            <div class="hidden mt-1 px-4 border-3 border-lime-900 py-2 rounded-xl grid xl:grid-cols-4 gap-2 shadow-xl" id="woman-choose">
                <a href="#" class="relative hover:-translate-y-2" id="Woman-Summer">
                    <img src="colthingImage/WomanImage/WomanSummer/WomanSummer7.jpg" alt="" class="xl:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg">
                    <div class="absolute bottom-0 left-8  bg-opacity-40 flex items-center justify-center text-white text-2xl p-2 xl:text-2xl ">Woman-Summer</div>
                </a>
                <a href="#" class="relative hover:-translate-x-2" id="Winter">
                    <img src="colthingImage/WomanImage/WomanWinter/WomanWinter8.jpg" alt="" class="xl:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg">
                    <div class="absolute bottom-0 left-8  bg-opacity-40 flex items-center justify-center text-white text-2xl p-2 xl:text-2xl ">Woman-Winter</div>
                </a>
                <a href="#" class="relative hover:-translate-y-2" id="Woman-Spring">
                    <img src="colthingImage/WomanImage/WomanSpring/WomanSpring11.jpg" alt="" class="xl:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg">
                    <div class="absolute bottom-0 left-8  bg-opacity-40 flex items-center justify-center text-white text-2xl p-2 xl:text-2xl ">Woman-Spring</div>
                </a>
                <a href="#" class="relative hover:-translate-x-2" id="Woman-Autumn">
                    <img src="colthingImage/WomanImage/WomanAutumn/WomanAutumn11.webp" alt="" class="xl:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg">
                    <div class="absolute bottom-0 left-8  bg-opacity-40 flex items-center justify-center text-white text-2xl p-2 xl:text-2xl ">Man-Autumn</div>
                </a>
            </div>
            <!--Menu Woman-->
            <ul class="hidden grid grid-cols-2 md:grid-cols-4 xl:grid-cols-6 gap-4 sm:grid-cols-4 lg:grid-cols-6 w-full" id="woman-cards">
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/WomanImage/WomanSpring/WomanSpring3.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Elegant long-</small>
                    <h3 class="text-base font-semibold text-lime-900">Floral Print </h3>
                    <div>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    </div>
                    <div class="mt-3 flex justify-between items-center">
                        <span class="font-bold">169.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/WomanImage/WomanSummer/WomanSummer12.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Soft pink high-waist </small>
                    <h3 class="text-base font-semibold text-lime-900">Pleated Midi </h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">139.95$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/WomanImage/WomanSummer/WomanSummer5.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Light blue satin</small>
                    <h3 class="text-base font-semibold text-lime-900">Satin Belted </h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">114.50$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/WomanImage/WomanWinter/WomanWinter12.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Feminine </small>
                    <h3 class="text-base font-semibold text-lime-900">White Lace </h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <i class="fa-regular fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">94.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/WomanImage/WomanWinter/WomanWinter11.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Trendy red shirt</small>
                    <h3 class="text-base font-semibold text-lime-900">Casual Red </h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-regular fa-star text-yellow-300"></i>
                    <i class="fa-regular fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">119.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/WomanImage/WomanSpring/WomanSpring12.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Comfortable and</small>
                    <h3 class="text-base font-semibold text-lime-900">Mint Green Two-</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">139.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/WomanImage//WomanSpring/WomanSpring11.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Classic long wool</small>
                    <h3 class="text-base font-semibold text-lime-900">Brown Wool</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">124.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/WomanImage/WomanAutumn/WomanAutumn12.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Shiny sequin skirt</small>
                    <h3 class="text-base font-semibold text-lime-900">Silver Sequin</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">112.00$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/WomanImage/WomanAutumn/WomanAutumn11.webp" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Timeless beige</small>
                    <h3 class="text-base font-semibold text-lime-900">Beige Trench</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">120$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/WomanImage/WomanSummer/WomanSummer10.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Simple and</small>
                    <h3 class="text-base font-semibold text-lime-900">Light Blue</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">134.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/WomanImage/WomanWinter/WomanWinter10.webp" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Chic white ruffle</small>
                    <h3 class="text-base font-semibold text-lime-900">White Ruffle</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">104.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/WomanImage/WomanSpring/WomanSpring10.webp" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Comfortable</small>
                    <h3 class="text-base font-semibold text-lime-900">Classic Blue</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-regular fa-star text-yellow-300"></i>
                    <i class="fa-regular fa-star text-yellow-300"></i>
                    <i class="fa-regular fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">79.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
            </ul>

            <?php include('WomanChoose.php') ?>

            <!--choose Kids-->
            <div class="hidden mt-1 px-4 border-3 border-lime-900 py-2 rounded-xl grid xl:grid-cols-4 gap-2 shadow-xl" id="Kids-choose">
                <a href="#" class="relative hover:-translate-y-2" id="Kids-Summer">
                    <img src="colthingImage/KidsImage/KidsSummer/KidsSummer7.jpg" alt="" class="xl:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg">
                    <div class="absolute bottom-0 left-8  bg-opacity-40 flex items-center justify-center text-white text-2xl p-2 xl:text-2xl ">Kids-Summer</div>
                </a>
                <a href="#" class="relative hover:-translate-x-2" id="Kids-Winter">
                    <img src="colthingImage/KidsImage/KidsWinter/KidsWinter7.jpg" alt="" class="xl:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg">
                    <div class="absolute bottom-0 left-8  bg-opacity-40 flex items-center justify-center text-white text-2xl p-2 xl:text-2xl ">Kids-Winter</div>
                </a>
                <a href="#" class="relative hover:-translate-y-2" id="Kids-Spring">
                    <img src="colthingImage/KidsImage/KidsSpring/KidsSpring7.jpg" alt="" class="xl:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg">
                    <div class="absolute bottom-0 left-8  bg-opacity-40 flex items-center justify-center text-white text-2xl p-2 xl:text-2xl ">Kids-Spring</div>
                </a>
                <a href="#" class="relative hover:-translate-x-2" id="Kids-Autumn">
                    <img src="colthingImage/KidsImage/KidsAutumn/KidsAutumn7.jpg" alt="" class="xl:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg">
                    <div class="absolute bottom-0 left-8  bg-opacity-40 flex items-center justify-center text-white text-2xl p-2 xl:text-2xl ">Kids-Autumn</div>
                </a>
            </div>
            <!--Menu Kids-->
            <ul class="hidden grid grid-cols-2 md:grid-cols-4 xl:grid-cols-6 gap-4 sm:grid-cols-4 lg:grid-cols-6 w-full" id="kids-cards">
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/KidsImage/KidsSpring/KidsSpring11.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Elegant long-</small>
                    <h3 class="text-base font-semibold text-lime-900">Floral Print </h3>
                    <div>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    </div>
                    <div class="mt-3 flex justify-between items-center">
                        <span class="font-bold">169.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/KidsImage/KidsSpring/KidsSpring12.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Soft pink high-waist </small>
                    <h3 class="text-base font-semibold text-lime-900">Pleated Midi </h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">139.95$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/KidsImage/KidsWinter/KidsWinter12.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Light blue satin</small>
                    <h3 class="text-base font-semibold text-lime-900">Satin Belted </h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">114.50$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/KidsImage/KidsWinter/KidsWinter11.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Feminine </small>
                    <h3 class="text-base font-semibold text-lime-900">White Lace </h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <i class="fa-regular fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">94.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/KidsImage/KidsSpring/KidsSpring12.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Trendy red shirt</small>
                    <h3 class="text-base font-semibold text-lime-900">Casual Red </h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-regular fa-star text-yellow-300"></i>
                    <i class="fa-regular fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">119.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/KidsImage/KidsSpring/KidsSpring11.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Comfortable and</small>
                    <h3 class="text-base font-semibold text-lime-900">Mint Green Two-</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">139.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/KidsImage/KidsAutumn/KidsAutumn12.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Classic long wool</small>
                    <h3 class="text-base font-semibold text-lime-900">Brown Wool</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">124.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/KidsImage/KidsAutumn/KidsAutumn11.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Shiny sequin skirt</small>
                    <h3 class="text-base font-semibold text-lime-900">Silver Sequin</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">112.00$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/KidsImage/KidsSummer/KidsSummer10.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Timeless beige</small>
                    <h3 class="text-base font-semibold text-lime-900">Beige Trench</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">120$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/KidsImage/KidsWinter/KidsWinter10.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Simple and</small>
                    <h3 class="text-base font-semibold text-lime-900">Light Blue</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">134.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/KidsImage/KidsSpring/KidsSpring10.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Chic white ruffle</small>
                    <h3 class="text-base font-semibold text-lime-900">White Ruffle</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">104.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/KidsImage/KidsAutumn/KidsAutumn10.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Comfortable</small>
                    <h3 class="text-base font-semibold text-lime-900">Classic Blue</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-regular fa-star text-yellow-300"></i>
                    <i class="fa-regular fa-star text-yellow-300"></i>
                    <i class="fa-regular fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">79.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
            </ul>

            <?php include('KidsChoose.php') ?>

            <!--choose Shoes-->
            <div class="hidden mt-1 px-4 border-3 border-lime-900 py-2 rounded-xl grid xl:grid-cols-4 gap-2 shadow-xl" id="Shoes-choose">
                <a href="#" class="relative hover:-translate-y-2" id="Shoes-men">
                    <img src="colthingImage/ShoesImage/ShoesMen/ShoesMen7.jpg" alt="" class="xl:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg">
                    <div class="absolute bottom-0 left-8  bg-opacity-40 flex items-center justify-center text-white text-2xl p-2 xl:text-2xl ">Shoes-men</div>
                </a>
                <a href="#" class="relative hover:-translate-x-2" id="Shoes-women">
                    <img src="colthingImage/ShoesImage/ShoesWomen/ShoesWomen4.jpg" alt="" class="xl:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg">
                    <div class="absolute bottom-0 left-8  bg-opacity-40 flex items-center justify-center text-white text-2xl p-2 xl:text-2xl ">Shoes-women</div>
                </a>
                <a href="#" class="relative hover:-translate-y-2" id="Shoes-kids">
                    <img src="colthingImage/ShoesImage/ShoesKids/ShoesKids7.webp" alt="" class="xl:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg">
                    <div class="absolute bottom-0 left-8  bg-opacity-40 flex items-center justify-center text-white text-2xl p-2 xl:text-2xl ">Shoes-kids</div>
                </a>
                <a href="#" class="relative hover:-translate-x-2" id="Shoes-sport">
                    <img src="colthingImage/ShoesImage/ShoesSport/ShoesSport7.jpg" alt="" class="xl:w-[80%] mx-auto h-[20vh] rounded-xl shadow-lg">
                    <div class="absolute bottom-0 left-8  bg-opacity-40 flex items-center justify-center text-white text-2xl p-2 xl:text-2xl ">Shoes-sport</div>
                </a>
            </div>
            <!--Menu shoes-->
            <ul class="hidden grid grid-cols-2 md:grid-cols-4 xl:grid-cols-6 gap-4 sm:grid-cols-4 lg:grid-cols-6 w-full" id="shoes-cards">
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/ShoesImage/ShoesMen/ShoesMen12.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Elegant long-</small>
                    <h3 class="text-base font-semibold text-lime-900">Floral Print </h3>
                    <div>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    </div>
                    <div class="mt-3 flex justify-between items-center">
                        <span class="font-bold">169.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/ShoesImage/ShoesMen/ShoesMen11.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Soft pink high-waist </small>
                    <h3 class="text-base font-semibold text-lime-900">Pleated Midi </h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">139.95$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/ShoesImage/ShoesWomen/ShoesWomen12.webp" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Light blue satin</small>
                    <h3 class="text-base font-semibold text-lime-900">Satin Belted </h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">114.50$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/ShoesImage/ShoesWomen/ShoesWomen11.webp" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Feminine </small>
                    <h3 class="text-base font-semibold text-lime-900">White Lace </h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <i class="fa-regular fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">94.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/ShoesImage/ShoesKids/ShoesKids12.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Trendy red shirt</small>
                    <h3 class="text-base font-semibold text-lime-900">Casual Red </h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-regular fa-star text-yellow-300"></i>
                    <i class="fa-regular fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">119.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/ShoesImage/ShoesKids/ShoesKids11.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Comfortable and</small>
                    <h3 class="text-base font-semibold text-lime-900">Mint Green Two-</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">139.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/ShoesImage/ShoesSport/ShoesSport12.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Classic long wool</small>
                    <h3 class="text-base font-semibold text-lime-900">Brown Wool</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">124.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/ShoesImage/ShoesSport/ShoesSport11.webp" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Shiny sequin skirt</small>
                    <h3 class="text-base font-semibold text-lime-900">Silver Sequin</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">112.00$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/ShoesImage/ShoesMen/ShoesMen10.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Timeless beige</small>
                    <h3 class="text-base font-semibold text-lime-900">Beige Trench</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">120$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/ShoesImage/ShoesWomen/ShoesWomen10.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Simple and</small>
                    <h3 class="text-base font-semibold text-lime-900">Light Blue</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <i class="fa-solid fa-star-half-stroke text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">134.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/ShoesImage/ShoesKids/ShoesKids10.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Chic white ruffle</small>
                    <h3 class="text-base font-semibold text-lime-900">White Ruffle</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">104.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
                <li class="bg-lime-100 py-3 px-2 rounded-xl border-3 border-lime-800 shadow-lg hover:-translate-y-2">
                    <img src="colthingImage/ShoesImage/ShoesSport/ShoesSport10.jpg" alt="" class="rounded-lg w-full  h-[30vh] sm:h-[15vh] xl:h-[25vh] object-cover">
                    <small class="text-sm text-gray-600 block text-lime-900">Comfortable</small>
                    <h3 class="text-base font-semibold text-lime-900">Classic Blue</h3>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-solid fa-star text-yellow-300"></i>
                    <i class="fa-regular fa-star text-yellow-300"></i>
                    <i class="fa-regular fa-star text-yellow-300"></i>
                    <i class="fa-regular fa-star text-yellow-300"></i>
                    <div class="mt-3 flex justify-between items-center">
                        <span  class="font-bold">79.99$</span>
                        <a href="#" class="bg-lime-300 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-cart-shopping text-lime-600 "></i></a>
                    </div>
                </li>
            </ul>

            <?php include('ShoesChoose.php') ?>
        </main>
    </div>
    <script src="interface.js"></script>
</body>
</html>