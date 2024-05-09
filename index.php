<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> quicksilvermakeovers.com</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./css/navebar.css">
  <link rel="stylesheet" href="./css/contact.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/home.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .carousel-inner>.item>img,
    .carousel-inner>.item>a>img {
      width: 100%;
      margin: auto;
    }
  </style>
</head>

<body>
  <header>
    <div class=' h-full justify-between flex border-b'>
      <div class=" overflow-hidden flex place-items-center  place-content-start p-4 ">
        <img src="./img/logo-01.png" class="w-28 h-28" alt="" />
      </div>

      <div class="w-screen place-content-end overflow-hidden flex place-items-center place-content-start p-4  ">
        <div class=" flex justify-between place-items-center place-content-start w-cover btn5" id="btn5">
          <ul class='flex place-items-center place-content-start gap-10 font-medium '>
            <a href="./index.php">
              <li class="cursor-pointer hover:text-yellow-800 text-yellow-600">HOME</li>
            </a>
            <a href="./php/about.php">
              <li class="cursor-pointer hover:text-yellow-600">ABOUT US</li>
            </a>
            <!--    <li  onmousedown="serviceOpen()" class="cursor-pointer hover:text-yellow-600">SERVICES
            </li> -->
            <select class="text-2xl outline-none font-medium" name="forma" onchange="location = this.value;">
              <option value="#skin">Skin</option>
              <option value="./php/hair.php">Heir</option>
              <option value="./php/mehandi.php">Mehandi</option>
            </select>
            <a href="./php/makeup.php">
              <li class="cursor-pointer hover:text-yellow-600">MAKEUP ACADEMY</li>
            </a>
            <a href="./php/gallery.php">
              <li class="cursor-pointer hover:text-yellow-600">GALLERY</li>
            </a>
            <a href="./php/contact.php"> <span class="cursor-pointer hover:text-yellow-600">CONTACT</span></a>
          </ul>
        </div>
        <div class="jbtn2 flex ml-16 place-items-center place-content-start ">
          <div class="w-60  flex place-content-center place-items-center">
           <a href="./php/unisex.php"> <span class='pl-2 text-yellow-800 hover:text-yellow-800 font-semibold cursor-pointer'>UNISEX SALON</span></a>
          </div>
          <div class="w-1/3 cursor-pointer rounded-tl-3xl rounded-br-3xl shadow-lg bg-yellow-600 hover:shadow-black hover:shadow pl-2 pr-2 text-white active:bg-yellow-800"><a href="./php/offers.php">OFFERS</a></div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" onmouseover="menuBtnOpen()" width="28" height="28" fill="currentColor" class="bi bi-border-width text-black ml-6 openBtn" viewBox="0 0 16 16">
          <path d="M0 3.5A.5.5 0 0 1 .5 3h15a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5zm0 5A.5.5 0 0 1 .5 8h15a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5" />
        </svg>

      </div>
    </div>


    <dialog id="menuBtn" class="z-10 ">
      <button onclick="menuBtnClose()" class='float-right border border-black rounded-xl hover:bg-black hover:text-white active:bg-green-500' onClick={closeModal}>
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
          <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
        </svg>
      </button>

      <div class='h-full gap-2 mt-8'>
        <ul class='place-items-start text-start place-content-start gap-16 '>
          <a href="./index.php">
            <li class="border-b p-2 border-green-500  hover:shadow-lg cursor-pointer hover:text-blue-600">HOME</li>
          </a>
          <a href="./php/about.php">
            <li class="border-b p-2 border-green-500  hover:shadow-lg cursor-pointer hover:text-blue-600">ABOUT US</li>
          </a>
          <select class="text-2xl outline-none mb-1 border-b border-green-500 p-2" name="forma" onchange="location = this.value;">
            <option value="#skin">Skin</option>
            <option value="./php/hair.php">Heir</option>
            <option value="./php/mehandi.php">Mehandi</option>
          </select>
          <a href="./php/mekeup.php">
            <li class="border-b p-2 border-green-500  hover:shadow-lg cursor-pointer hover:text-blue-600">MAKEUP ACADEMY</li>
          </a>
          <a href="./php/contact.php">
            <li class="border-b p-2 border-green-500  hover:shadow-lg cursor-pointer hover:text-blue-600">GALLERY</li>
          </a>
        </ul>
      </div>
    </dialog>
  </header>
  <script>
      //menu btn

    let menuBtn = document.getElementById("menuBtn");

    function menuBtnOpen() {
      menuBtn.open = true;
    };

    function menuBtnClose() {
      menuBtn.open = false;
    };
  </script>


  <!--slider img code -->
  <div>
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        <div class="item active ">
          <img src="./img/sliderImg1.jpg" alt="Chania" width="cover" height="auto">

        </div>

        <div class="item">
          <img src="./img/sliderImg2.jpg" alt="Chania" width="cover" height="auto">
          <div class="carousel-caption">
            <h3>Chania</h3>
            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
          </div>
        </div>

        <div class="item">
          <img src="./img/sliderImg1.jpg" alt="Flower" width="cover" height="auto">
          <div class="carousel-caption">
            <h3>Flowers</h3>
            <p>Beautiful flowers in Kolymbari, Crete.</p>
          </div>
        </div>

        <div class="item">
          <img src="./img/sliderImg2.jpg" alt="Flower" width="cover" height="auto">
          <div class="carousel-caption">
            <h3>Flowers</h3>
            <p>Beautiful flowers in Kolymbari, Crete.</p>
          </div>
        </div>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

 <!--start main content here-->
  <!--About us-->
  <div class="p-4 pb-16 flexBox">
    <div class="border-8 border-yellow-500">
      <img src="./img/aboutImg.jpg" alt="">
    </div>

    <div class="p-10 text-start gap-6">
      <h1 class="text-6xl mb-16 font-bold mt-10 text-yellow-600 font-serif">ABOUT US</h1>
      <p class="text-3xl font-sans ">New look makeup studio, is a professional establishment for makeup and skincare since 2017. We comprehend transformation and makeover are major magnetism for all individuals. The concept of looking good is what we take forward and proclaim specialized makeup techniques. Shakal Deep is the epitome makeup artist; who has been dominating the industry for quite a while and leads the studio by her conviction & massive experience.</p>
      <p class="text-3xl font-sans mt-6">She is a renowned name that one can trust for makeup and beauty needs. We offer brilliant bridal makeup artists in Indira Nagar Lucknow who is proficient and fanatic towards their work. Our team of ace makeup artists is an apt choice for not weddings but other unforgettable moments too.</p>
      <p class="text-3xl font-sans mt-6">Our mavens have been converting millions of pretty faces into gorgeous bridals and charming grooms.</p>
      <div class="text-3xl mt-10 bg-yellow-600 text-white p-3 font-semibold hover:bg-yellow-700 active:bg-yellow-900 cursor-pointer">Book Apointment</div>
    </div>
  </div>
  <!--over aboutus-->
  <!--drop shadow 1 img rounde -->
  <div class="pt-20 pb-20 pl-4 pr-4 text-center overflow-hidden pl-40 pr-40 bg-gray-200">
    <h1 class="text-5xl font-bold mb-8 text-yellow-600 font-serif">Our Services</h1>
    <div style="padding:1% 5%;" class="text-start">
      <p class="text-3xl font-sans">New look makeup studio renders flawless services of making you appealing and beautiful. We enhance your personality with our makeup skills giving you that stunning look.</p>
    </div>
    <div class=" h-96 mt-4  pr-40 mb-10 w-cover " style="overflow-x:hidden; overflow-y:hidden; white-space: nowrap;">

      <div class="  m-1 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white " id="scrollBox" style="display:inline-block; width:300px;">
        <div class="w-60 bg-black rounded-full h-60 overflow-hidden ml-28 imgSlid"> <img src="./img/img1.jpeg" class="w-cover position-center" alt=""> </div>
        <h1 class="text-3xl font-bold text-yellow-700 mt-2"> quicksilver</h1>
      </div>
      <div class="  m-1 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white " style="display:inline-block; width:300px;">
        <div class="w-60 bg-black rounded-full h-60 overflow-hidden ml-28 imgSlid"> <img src="./img/img2.jpeg" class="w-cover position-center" alt=""> </div>
        <h1 class="text-3xl font-bold text-yellow-700 mt-2"> quicksilver</h1>
      </div>
      <div class="  m-1 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white " style="display:inline-block; width:300px;">
        <div class="w-60 bg-black rounded-full h-60 overflow-hidden ml-28 imgSlid"> <img src="./img/img3.jpeg" class="w-cover position-center" alt=""> </div>
        <h1 class="text-3xl font-bold text-yellow-700 mt-2"> quicksilver</h1>
      </div>

      <div class="  m-1 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white " style="display:inline-block; width:300px;">
        <div class="w-60 bg-black rounded-full h-60 overflow-hidden ml-28 imgSlid"> <img src="./img/img4.jpeg" class="w-cover position-center" alt=""> </div>
        <h1 class="text-3xl font-bold text-yellow-700 mt-2"> quicksilver</h1>
      </div>
      <div class="  m-1 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white " style="display:inline-block; width:300px;">
        <div class="w-60 bg-black rounded-full h-60 overflow-hidden ml-28 imgSlid"> <img src="./img/img5.jpeg" class="w-cover position-center" alt=""> </div>
        <h1 class="text-3xl font-bold text-yellow-700 mt-2"> quicksilver</h1>
      </div>
      <div class="  m-1 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white " style="display:inline-block; width:300px;">
        <div class="w-60 bg-black rounded-full h-60 overflow-hidden ml-28 imgSlid"> <img src="./img/img6.jpeg" class="w-cover position-center" alt=""> </div>
        <h1 class="text-3xl font-bold text-yellow-700 mt-2"> quicksilver</h1>
      </div>
      <div class="  m-1 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white " style="display:inline-block; width:300px;">
        <div class="w-60 bg-black rounded-full h-60 overflow-hidden ml-28 imgSlid"> <img src="./img/img1.jpeg" class="w-cover position-center" alt=""> </div>
        <h1 class="text-3xl font-bold text-yellow-700 mt-2"> quicksilver</h1>
      </div>
      <div class="  m-1 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white " style="display:inline-block; width:300px;">
        <div class="w-60 bg-black rounded-full h-60 overflow-hidden ml-28 imgSlid"> <img src="./img/img2.jpeg" class="w-cover position-center" alt=""> </div>
        <h1 class="text-3xl font-bold text-yellow-700 mt-2"> quicksilver</h1>
      </div>
      <div class="  m-1 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white " style="display:inline-block; width:300px;">
        <div class="w-60 bg-black rounded-full h-60 overflow-hidden ml-28 imgSlid"> <img src="./img/img3.jpeg" class="w-cover position-center" alt=""> </div>
        <h1 class="text-3xl font-bold text-yellow-700 mt-2"> quicksilver</h1>
      </div>

      <div class="  m-1 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white " style="display:inline-block; width:300px;">
        <div class="w-60 bg-black rounded-full h-60 overflow-hidden ml-28 imgSlid"> <img src="./img/img4.jpeg" class="w-cover position-center" alt=""> </div>
        <h1 class="text-3xl font-bold text-yellow-700 mt-2"> quicksilver</h1>
      </div>
      <div class="  m-1 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white " style="display:inline-block; width:300px;">
        <div class="w-60 bg-black rounded-full h-60 overflow-hidden ml-28 imgSlid"> <img src="./img/img5.jpeg" class="w-cover position-center" alt=""> </div>
        <h1 class="text-3xl font-bold text-yellow-700 mt-2"> quicksilver</h1>
      </div>
      <div class="  m-1 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white " style="display:inline-block; width:300px;">
        <div class="w-60 bg-black rounded-full h-60 overflow-hidden ml-28 imgSlid"> <img src="./img/img6.jpeg" class="w-cover position-center" alt=""> </div>
        <h1 class="text-3xl font-bold text-yellow-700 mt-2"> quicksilver</h1>
      </div>
      <div class="  m-1 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white " style="display:inline-block; width:300px;">
        <div class="w-60 bg-black rounded-full h-60 overflow-hidden ml-28 imgSlid"> <img src="./img/img1.jpeg" class="w-cover position-center" alt=""> </div>
        <h1 class="text-3xl font-bold text-yellow-700 mt-2"> quicksilver</h1>
      </div>
      <div class="  m-1 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white " style="display:inline-block; width:300px;">
        <div class="w-60 bg-black rounded-full h-60 overflow-hidden ml-28 imgSlid"> <img src="./img/img2.jpeg" class="w-cover position-center" alt=""> </div>
        <h1 class="text-3xl font-bold text-yellow-700 mt-2"> quicksilver</h1>
      </div>
      <div class="  m-1 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white " style="display:inline-block; width:300px;">
        <div class="w-60 bg-black rounded-full h-60 overflow-hidden ml-28 imgSlid"> <img src="./img/img3.jpeg" class="w-cover position-center" alt=""> </div>
        <h1 class="text-3xl font-bold text-yellow-700 mt-2"> quicksilver</h1>
      </div>

      <div class="  m-1 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white " style="display:inline-block; width:300px;">
        <div class="w-60 bg-black rounded-full h-60 overflow-hidden ml-28 imgSlid"> <img src="./img/img4.jpeg" class="w-cover position-center" alt=""> </div>
        <h1 class="text-3xl font-bold text-yellow-700 mt-2"> quicksilver</h1>
      </div>
      <div class="  m-1 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white " style="display:inline-block; width:300px;">
        <div class="w-60 bg-black rounded-full h-60 overflow-hidden ml-28 imgSlid"> <img src="./img/img5.jpeg" class="w-cover position-center" alt=""> </div>
        <h1 class="text-3xl font-bold text-yellow-700 mt-2"> quicksilver</h1>
      </div>
      <div class="  m-1 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white " style="display:inline-block; width:300px;">
        <div class="w-60 bg-black rounded-full h-60 overflow-hidden ml-28 imgSlid"> <img src="./img/img6.jpeg" class="w-cover position-center" alt=""> </div>
        <h1 class="text-3xl font-bold text-yellow-700 mt-2"> quicksilver</h1>
      </div>

    </div>
  </div>

  <script>
    //for scroll of about Down boxex

    var scrollBox = document.getElementById("scrollBox");
    var c = 1;
    var scrollMar = 300;
    var mar = 0;
    const set = setInterval(() => {
      mar = scrollMar + mar;
      scrollBox.style.transition = '2s';
      scrollBox.style.marginLeft = -mar + 'px';
      c++;
      if (c % 10 === 0) {
        mar = -300;
        //clearInterval(set);
      }
    }, 3000);
    //end scrolls
  </script>

  <!--6 IMAGES CODE -->
  <div class="h-auto p-10 gallary1">
    <div class="overflow-hidden gallaryImg"><img src="./img/img1.jpeg" alt="" class="m-4 "></div>
    <div class="overflow-hidden gallaryImg"><img src="./img/img2.jpeg" alt="" class="m-4 "></div>
    <div class="overflow-hidden gallaryImg"><img src="./img/img3.jpeg" alt="" class="m-4 "></div>
  </div>

  <div class="h-auto p-10 gallary1">
    <div class="overflow-hidden gallaryImg"><img src="./img/img4.jpeg" alt="" class="m-4 "></div>
    <div class="overflow-hidden gallaryImg"><img src="./img/img5.jpeg" alt="" class="m-4 "></div>
    <div class="overflow-hidden gallaryImg"><img src="./img/img6.jpeg" alt="" class="m-4 "></div>
  </div>

<!--salon offer-->
  <div class="bg-blue-50 mt-2 text-center pt-10 pb-8 sallonOferBox">
    <div class="absolute w-screen">
      <h1 style="font-size: 60px; " class=" mt-1 font-serif font-semibold " id="bgText">Sallon Offers</h1>
    </div>
    <h1 class="text-6xl mt-10 font-serif font-semibold text-yellow-500 " id="salonOffer">Sallon Offers</h1>

    <!--drop shadow 2 img -->
    <div class=" mt-4 mb-10 w-cover " style="overflow-x:hidden; overflow-y:hidden; white-space: nowrap; height:400px; ">

      <div class="  m-4 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white scrollImg2" id="scrollBox2" style="display:inline-block;"> <img src="./salonImg/salon1.jpeg" class="w-cover position-center" alt=""> </div>
      <div class="  m-4 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white scrollImg2" style="display:inline-block;"> <img src="./salonImg/salon2.jpeg" class="w-cover position-center" alt=""> </div>
      <div class="  m-4 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white scrollImg2" style="display:inline-block;"> <img src="./salonImg/salon3.jpeg" class="w-cover position-center" alt=""> </div>

      <div class="  m-4 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white scrollImg2" style="display:inline-block;"> <img src="./salonImg/salon4.jpeg" class="w-cover position-center" alt=""> </div>
      <div class="  m-4 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white scrollImg2" style="display:inline-block;"> <img src="./salonImg/salon5.jpeg" class="w-cover position-center" alt=""> </div>
      <div class="  m-4 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white scrollImg2" style="display:inline-block;"> <img src="./salonImg/salon6.jpeg" class="w-cover position-center" alt=""> </div>
      <div class="  m-4 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white scrollImg2" style="display:inline-block;"> <img src="./salonImg/salon7.jpeg" class="w-cover position-center" alt=""> </div>
      <div class="  m-4 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white scrollImg2" style="display:inline-block;"> <img src="./salonImg/salon8.jpeg" class="w-cover position-center" alt=""> </div>
      <div class="  m-4 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white scrollImg2" style="display:inline-block;"> <img src="./salonImg/salon9.jpeg" class="w-cover position-center" alt=""> </div>

      <div class="  m-4 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white scrollImg2" style="display:inline-block;"> <img src="./salonImg/salon1.jpeg" class="w-cover position-center" alt=""> </div>
      <div class="  m-4 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white scrollImg2" style="display:inline-block;"> <img src="./salonImg/salon2.jpeg" class="w-cover position-center" alt=""> </div>
      <div class="  m-4 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white scrollImg2" style="display:inline-block;"> <img src="./salonImg/salon3.jpeg" class="w-cover position-center" alt=""> </div>

    </div>
  </div>

  <script>
    //for scroll of about Down boxex

    var scrollBox2 = document.getElementById("scrollBox2");
    var c2 = 1;
    var scrollMar2 = 300;
    var mar2 = 0;
    const set2 = setInterval(() => {
      mar2 = scrollMar2 + mar2;
      scrollBox2.style.transition = '2s';
      scrollBox2.style.marginLeft = -mar2 + 'px';
      c2++;
      if (c2 % 7 === 0) {
        mar2 = -300;
        //clearInterval(set);
      }
    }, 5000);
    //end scrolls
  </script>

  <!--start contact form -->

  <div id="contactBox" class="contactBox p-2 place-items-center pt-20 pb-20 flex " style="padding-right: 10%; padding-left: 10%;">
    <div id="redBox" class="bg-red-500 grid p-4 text-center font-serif text-white rounded absolute" style="width: 20%;height: 400px; z-index: 2; margin-left: 8%;">
      <h1 class="font-semibold text-2xl">Contact Us</h1>
      <addresss>
        <div class=" place-content-start mt-4  flex text-start gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
          </svg>
          <span>quicksilvermakeovers, Basharatpur - Gorakhpur</span>
        </div>
        <div class=" place-content-start mt-4  flex place-items-center place-content-center gap-2"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
          </svg>
          <span>quicksilvermakeovers.com​</span>
        </div>
        <div class=" place-content-start mt-4  flex place-items-center place-content-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
          </svg>
          <span>tel:+91 91## **** 32</span>
        </div>
        <div class=" mt-4  flex place-items-center place-content-center gap-2"> </div>
      </addresss>

    </div>
    <div id="dataBox" class=" bg-gray-100 pl-60 text-start grid rounded shadow-black shadow-xl" style="width:60%; height: 500px; margin-left: 20%; z-index:1;background-image:url(./img/img3.jpeg); background-position:left;  ">
      <h1 class="text-5xl font-semibold text-gray-100 p-4 " style="filter: drop-shadow(1px 2px black);">Request Free Consultation</h1>
      <form action="#" class="text-center">
        <div> <input type="text" class="h-6 mt-2 w-80 p-6 rounded outline-none" placeholder="Username *" required> <br>
          <input type="email" class="h-6 mt-2 w-80 p-6 rounded outline-none" placeholder="Email *" required> <br>
          <input type="number" maxlength="12" min="10" class="h-6 mt-2 w-80 p-6 rounded outline-none" placeholder="Contact *" required>
        </div><br>
        <div>
          <select class="h-auto p-2 outline-none mt-2 w-80 rounded " name="mekup" id="mekup">
            <option value="Party Makup">Party Makup</option>
            <option value="Skin">Skin</option>
            <option value="Hair">Hair</option>
            <option value="Nails">Nails</option>
            <option value="Bridal Packege">Bridal Packege</option>
            <option value="Bridal Mekup">Bridal Mekup</option>
            <option value="Mehandi">Mehandi</option>
          </select>
          <br><br>
        </div>
        <input type="submit" value="Submit" class="w-40 h-12 rounded bg-red-500 text-white active:bg-red-600 mt-10">
      </form>

    </div>
  </div>
  <div id="contactBox2">
    <div class="p-4 text-center bg-red-500 rounded " style="margin: 20%; margin-bottom: -5px; background-image:url(./img/img1.jpeg); background-position:center;">

      <h1 class="text-2xl font-semibold text-white p-4 " style="filter: drop-shadow(2px 1px black);">Request Free Consultation</h1>
      <form action="#" class="text-center">
        <div> <input type="text" class="h-6 mt-2 w-80 p-6 rounded outline-none" placeholder="Username *" required>
          <input type="email" class="h-6 mt-2 w-80 p-6 rounded outline-none" placeholder="Email *" required>
          <input type="number" maxlength="12" min="10" class="h-6 mt-2 w-80 p-6 rounded outline-none" placeholder="Contact *" required>
        </div>
        <input type="submit" value="Submit" class="w-40 h-12 rounded bg-green-400 text-white active:bg-green-500 mt-10">
      </form>

    </div>
  </div>

  <!--drop shadow 3 rating -->
  <div class="pt-20 pb-20 pl-4 pr-4 text-center overflow-hidden pl-40 pr-40 bg-white">
    <div class=" h-40 mt-20 pr-40 mb-10 w-cover " style="overflow-x:hidden; overflow-y:hidden; white-space: nowrap;">

      <div class="  m-1 bg-cover bg-center h-40 bg-red-600 overflow-hidden rounded-lg grid place-content-center text-center bg-white " id="scrollBox3" style="background-image:url(./logoImg/logo1.jpg); display:inline-block; width:150px;"></div>
      <div class="  m-1 bg-cover bg-center h-40 overflow-hidden rounded-lg grid place-content-center text-center bg-white " style="background-image:url(./logoImg/logo2.jpg); display:inline-block; width:150px;"> </div>
      <div class="  m-1 bg-cover bg-center h-40 overflow-hidden rounded-lg grid place-content-center text-center bg-white " style="background-image:url(./logoImg/logo3.jpg); display:inline-block; width:150px;"> </div>
      <div class="  m-1 bg-cover bg-center h-40 overflow-hidden rounded-lg grid place-content-center text-center bg-white " style="background-image:url(./logoImg/logo4.jpg); display:inline-block; width:150px;"> </div>
      <div class="  m-1 bg-cover bg-center h-40 overflow-hidden rounded-lg grid place-content-center text-center bg-white " style="background-image:url(./logoImg/logo5.jpg); display:inline-block; width:150px;"> </div>
      <div class="  m-1 bg-cover bg-center h-40 overflow-hidden rounded-lg grid place-content-center text-center bg-white " style="background-image:url(./logoImg/logo6.jpg); display:inline-block; width:150px;"> </div>
      <div class="  m-1 bg-cover bg-center h-40 overflow-hidden rounded-lg grid place-content-center text-center bg-white " style="background-image:url(./logoImg/logo7.jpg); display:inline-block; width:150px;"> </div>
      <div class="  m-1 bg-cover bg-center h-40 overflow-hidden rounded-lg grid place-content-center text-center bg-white " style="background-image:url(./logoImg/logo8.jpg); display:inline-block; width:150px;"> </div>

      <div class="  m-1 bg-cover bg-center h-40 overflow-hidden rounded-lg grid place-content-center text-center bg-white " style="background-image:url(./logoImg/logo9.jpg); display:inline-block; width:150px;"> </div>
      <div class="  m-1 bg-cover bg-center h-40 overflow-hidden rounded-lg grid place-content-center text-center bg-white " style="background-image:url(./logoImg/logo10.jpg); display:inline-block; width:150px;"> </div>
      <div class="  m-1 bg-cover bg-center h-40 overflow-hidden rounded-lg grid place-content-center text-center bg-white " style="background-image:url(./logoImg/logo4.jpg); display:inline-block; width:150px;"> </div>
      <div class="  m-1 bg-cover bg-center h-40 overflow-hidden rounded-lg grid place-content-center text-center bg-white " style="background-image:url(./logoImg/logo5.jpg); display:inline-block; width:150px;"> </div>
      <div class="  m-1 bg-cover bg-center h-40 overflow-hidden rounded-lg grid place-content-center text-center bg-white " style="background-image:url(./logoImg/logo6.jpg); display:inline-block; width:150px;"> </div>
      <div class="  m-1 bg-cover bg-center h-40 overflow-hidden rounded-lg grid place-content-center text-center bg-white " style="background-image:url(./logoImg/logo7.jpg); display:inline-block; width:150px;"> </div>
      <div class="  m-1 bg-cover bg-center h-40 overflow-hidden rounded-lg grid place-content-center text-center bg-white " style="background-image:url(./logoImg/logo8.jpg); display:inline-block; width:150px;"> </div>
      <div class="  m-1 bg-cover bg-center h-40 overflow-hidden rounded-lg grid place-content-center text-center bg-white " style="background-image:url(./logoImg/logo1.jpg); display:inline-block; width:150px;"> </div>

    </div>
  </div>
  <script>
    //for scroll of logo boxex

    var scrollBox3 = document.getElementById("scrollBox3");
    var c3 = 1;
    var scrollMar3 = 100;
    var mar3 = 0;
    const set3 = setInterval(() => {
      mar3 = scrollMar3 + mar3;
      scrollBox3.style.transition = '3s';
      scrollBox3.style.marginLeft = -mar3 + 'px';
      c3++;
      if (c3 % 7 === 0) {
        mar3 = -100;
        //clearInterval(set);
      }
    }, 5000);
    //end scrolls
  </script>
  <!--sutistfied client -->
  <div class="mt-10 text-center">
    <div class="absolute w-screen">
      <h1 style="font-size: 60px; " class=" mt-1 font-serif font-semibold " id="bgText">Our Client</h1>
    </div>
    <h1 class="text-5xl font-bold mb-12 text-yellow-600 font-serif">Our Happy Clients</h1>


    <!--start-->
    <div class="w-cover p-4">

      <div class="flex " style="height: 500px;">

        <div class="bg-red-100 p-10 w-cover grid w-1/2 ">
          <div class=" grid place-items-center overflow-hidden" style="height: 70%;">
            <img src="./img/img1.jpeg" alt="" style="width: 50%;" class="">
          </div>
          <h1 style="margin-top: -40px;" class="text-3xl font-medium">Sonakshi Sinha</h1>
          <p class="text-2xl" style="margin-top: -30px;">In fact, studies have shown that it takes 50 milliseconds for visitors to decide if they’ll stay on an ecommerce site or not. You get only an instant to impress users, which is why website design is so important for your ecommerce business. </p>
        </div>

        <div class="bg-red-100 p-10 w-cover grid w-1/2 ">
          <div class=" grid place-items-center overflow-hidden" style="height: 70%;">
            <img src="./img/img1.jpeg" alt="" style="width: 50%;" class="">
          </div>
          <h1 style="margin-top: -40px;" class="text-3xl font-medium">Sonakshi Sinha</h1>
          <p class="text-2xl" style="margin-top: -30px;">In fact, studies have shown that it takes 50 milliseconds for visitors to decide if they’ll stay on an ecommerce site or not. You get only an instant to impress users, which is why website design is so important for your ecommerce business. </p>
        </div>

      </div>

      <div class="flex bg-red-200" style="height: 500px;">

        <div class="bg-red-100 p-10 w-cover grid w-1/2 ">
          <div class=" grid place-items-center overflow-hidden" style="height: 70%;">
            <img src="./img/img1.jpeg" alt="" style="width: 50%;" class="">
          </div>
          <h1 style="margin-top: -40px;" class="text-3xl font-medium">Sonakshi Sinha</h1>
          <p class="text-2xl" style="margin-top: -30px;">In fact, studies have shown that it takes 50 milliseconds for visitors to decide if they’ll stay on an ecommerce site or not. You get only an instant to impress users, which is why website design is so important for your ecommerce business. </p>
        </div>

        <div class="bg-red-100 p-10 w-cover grid w-1/2 ">
          <div class=" grid place-items-center overflow-hidden" style="height: 70%;">
            <img src="./img/img1.jpeg" alt="" style="width: 50%;" class="">
          </div>
          <h1 style="margin-top: -40px;" class="text-3xl font-medium">Sonakshi Sinha</h1>
          <p class="text-2xl" style="margin-top: -30px;">In fact, studies have shown that it takes 50 milliseconds for visitors to decide if they’ll stay on an ecommerce site or not. You get only an instant to impress users, which is why website design is so important for your ecommerce business. </p>
        </div>

      </div>

    </div>
    <!--over-->
  </div>
  <!--sutistfied client code over -->

  <footer id="footerBox" class="bg-gray-800 pt-20 pb-28">

    <div class="h-auto m-1 p-4 grid place-items-start text-center">
      <div class=" w-auto h-full">
        <div class="footerLogo w-40 overflow-hidden">
          <img src="./img/logo-01.png" alt=".." />
        </div>
        <div class='flex place-items-center gap-2 text-white mt-10 hover:text-green-600'>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-inbound" viewBox="0 0 16 16">
            <path d="M15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0m-12.2 1.182a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
          </svg>

          <a class='text-3xl hover:text-green-500' href="tel:+917894563120"> +917894563120</a>
        </div>

      </div>
    </div>

    <div class="h-auto ml-1 grid place-items-start mb-10 pl-10 text-white">
      <div class="text-start h-auto">
        <h2 class="text-5xl text-yellow-600 font-semibold mb-10 ">Services</h2>
        <ul class="">
          <a href="#">
            <li class=" mt-4 text-3xl">SKIN</li>
          </a>
          <a href="#">
            <li class=" mt-4 text-3xl">HAIR</li>
          </a>
          <a href="#">
            <li class=" mt-4 text-3xl">NAILS</li>
          </a>
          <a href="#">
            <li class=" mt-4 text-3xl">MEHANDI</li>
          </a>
          <a href="#">
            <li class=" mt-4 text-3xl">PARTY MAKUP</li>
          </a>
          <a href="#">
            <li class=" mt-4 text-3xl">BRIDAL MAKEUP</li>
          </a>
          <a href="#">
            <li class=" mt-4 text-3xl">BRIDG PACKAGE</li>
          </a>
        </ul>
      </div>
    </div>

    <div class="h-auto mb-10 pl-10 m-1 text-white grid place-items-start pl-10 text-start">
      <div class="text-start ">
        <h1 class="text-5xl text-yellow-600 font-semibold mb-10 ">Quick Links</h1>
        <ul class="">
          <a href="#">
            <li class=" mt-4 text-3xl">HOME</li>
          </a>
          <a href="#">
            <li class=" mt-4 text-3xl">GALLERY</li>
          </a>
          <a href="#">
            <li class=" mt-4 text-3xl">CONTACT</li>
          </a>
          <a href="#">
            <li class=" mt-4 text-3xl">ABOUT US</li>
          </a>
          <a href="#">
            <li class=" mt-4 text-3xl">SERVICES</li>
          </a>
          <a href="#">
            <li class=" mt-4 text-3xl">UNISEX SALON</li>
          </a>
          <a href="#">
            <li class=" mt-4 text-3xl">MAKEUP ACADEMY</li>
          </a>
        </ul>
      </div>
    </div>

    <div class="h-auto grid mb-10 place-items-start mr-20 text-white pl-10 text-center">
      <div class="text-start">
        <h2 class='text-5xl text-yellow-600 font-semibold mb-4'>Contact Us</h2>
        <div class='flex mt-10 place-items-center gap-2 text-white hover:text-blue-500 '>
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
          </svg>
          <a class='text-3xl' href="https://web.whatsapp.com/?"> +8010268352</a>
        </div>

        <div class='flex mt-10 place-items-center gap-2 text-white hover:text-blue-500 '>
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
          </svg>
          <span class="text-3xl">quicksilvermakeovers.com</span>
        </div>

        <div class='flex mt-10 place-items-center gap-2 text-white hover:text-blue-500 '>
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
          </svg>
          <span class="text-3xl">Radhika Complex, Medical Road , Gorakhpur 273008</span>
        </div>

        <div class="emailBox text-white hover:text-blue-500 flex place-items-center gap-2">


        </div>
      </div>
    </div>

  </footer>
  <div class="flex place-items-center place-content-center">
    <h3 class="font-lg">@2020 GyanviDigital || All Right Resurve !</h3>
  </div>
</body>

</html>