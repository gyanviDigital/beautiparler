<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> quicksilvermakeovers.com</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../css/navebar.css">
  <link rel="stylesheet" href="../css/contact.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/home.css">
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
        <img src="../img/logo-01.png" class="w-28 h-28" alt="" />
      </div>

      <div class="w-screen place-content-end overflow-hidden flex place-items-center place-content-start p-4  ">
        <div class=" flex justify-between place-items-center place-content-start w-cover btn5" id="btn5">
          <ul class='flex place-items-center place-content-start gap-10 font-medium '>
            <a href="../index.php">
              <li class="cursor-pointer hover:text-yellow-800 text-yellow-600">HOME</li>
            </a>
            <a href="./about.php">
              <li class="cursor-pointer hover:text-yellow-600">ABOUT US</li>
            </a>
            <!--    <li  onmousedown="serviceOpen()" class="cursor-pointer hover:text-yellow-600">SERVICES
            </li> -->
            <select class="text-2xl outline-none font-medium" name="forma" onchange="location = this.value;">
              <option value="#skin">Skin</option>
              <option value="./hair.php">Heir</option>
              <option value="./mehandi.php">Mehandi</option>
            </select>
            <a href="./makeup.php">
              <li class="cursor-pointer hover:text-yellow-600">MAKEUP ACADEMY</li>
            </a>
            <a href="./gallery.php">
              <li class="cursor-pointer hover:text-yellow-600">GALLERY</li>
            </a>
            <a href="./contact.php"> <span class="cursor-pointer hover:text-yellow-600">CONTACT</span></a>
          </ul>
        </div>
        <div class="jbtn2 flex ml-16 place-items-center place-content-start ">
          <div class="w-60  flex place-content-center place-items-center">
           <a href="./unisex.php"> <span class='pl-2 text-yellow-800 hover:text-yellow-800 font-semibold cursor-pointer'>UNISEX SALON</span></a>
          </div>
          <div class="w-1/3 cursor-pointer rounded-tl-3xl rounded-br-3xl shadow-lg bg-yellow-600 hover:shadow-black hover:shadow pl-2 pr-2 text-white active:bg-yellow-800"><a href="./offers.php">OFFERS</a></div>
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
          <a href="../index.php">
            <li class="border-b p-2 border-green-500  hover:shadow-lg cursor-pointer hover:text-blue-600">HOME</li>
          </a>
          <a href="./about.php">
            <li class="border-b p-2 border-green-500  hover:shadow-lg cursor-pointer hover:text-blue-600">ABOUT US</li>
          </a>
          <select class="text-2xl outline-none mb-1 border-b border-green-500 p-2" name="forma" onchange="location = this.value;">
            <option value="#skin">Skin</option>
            <option value="./hair.php">Heir</option>
            <option value="./mehandi.php">Mehandi</option>
          </select>
          <a href="./mekeup.php">
            <li class="border-b p-2 border-green-500  hover:shadow-lg cursor-pointer hover:text-blue-600">MAKEUP ACADEMY</li>
          </a>
          <a href="./contact.php">
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
          <img src="../img/sliderImg1.jpg" alt="Chania" width="cover" height="auto">

        </div>

        <div class="item">
          <img src="../img/sliderImg2.jpg" alt="Chania" width="cover" height="auto">
          <div class="carousel-caption">
            <h3>Chania</h3>
            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
          </div>
        </div>

        <div class="item">
          <img src="../img/sliderImg1.jpg" alt="Flower" width="cover" height="auto">
          <div class="carousel-caption">
            <h3>Flowers</h3>
            <p>Beautiful flowers in Kolymbari, Crete.</p>
          </div>
        </div>

        <div class="item">
          <img src="../img/sliderImg2.jpg" alt="Flower" width="cover" height="auto">
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