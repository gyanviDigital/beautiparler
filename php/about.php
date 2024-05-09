<?php
include("header.php");
?>

  <!--About us-->
  <div class="p-4 pb-16 flexBox">
        <div class="absolute bg-yellow-500 border-8 border-yellow-800 bg-cover" style="width:200px; height:200px; background-image: url('../img/img5.jpeg');"></div>
    <div class="border-8 ml-40 border-yellow-500">
      <img src="../img/aboutImg.jpg" alt="">
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
  <!--why chus us-->
  <div class="flexBox">
    <div class=" bg-yellow-50 text-start p-10">
    <h1 class="text-6xl text-center text-yellow-600 font-serif font-bold mt-20 mb-10">Why Choose Us?</h1>
    <p class="text-3xl font-sans leading-normal">New look Make Up studio has years of experience in Bridal make up, skin health, facial aesthetics, foot care, nail manicures, aromatherapy — even oxygen therapy, mud baths and many other services. And we all know very well that experience is the best teacher. We are expert Bridal makeup artists. Our services make us the best makeup studio in Indira Nagar Lucknow.</p>
   
    <h1 class="text-6xl text-center text-yellow-600 font-serif font-bold mt-20 mb-10">We Know Your Expectations!</h1>
    <p class="text-3xl font-sans leading-normal">New look Make up studio knows your expectations very well as professional wedding makeup artists therefore, we prepare a bride to look like a princess with her true beauty on her most beautiful day.</p>
   
    </div>
    <div class="bg-red-200" style="background-image: url(../img/img4.jpeg);"></div>
  </div>

  <!--salon offer-->
  <div class="bg-blue-50 mt-2 text-center pt-10 pb-8 sallonOferBox">
    <div class="absolute w-screen">
      <h1 style="font-size: 60px; " class=" mt-1 font-serif font-semibold " id="bgText">Sallon Offers</h1>
    </div>
    <h1 class="text-6xl mt-10 font-serif font-semibold text-yellow-500 " id="salonOffer">Sallon Offers</h1>

    <!--drop shadow 2 img -->
    <div class=" mt-4 mb-10 w-cover " style="overflow-x:hidden; overflow-y:hidden; white-space: nowrap; height:400px; ">

      <div class="  m-4 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white scrollImg2" id="scrollBox2" style="display:inline-block;"> <img src="../salonImg/salon1.jpeg" class="w-cover position-center" alt=""> </div>
      <div class="  m-4 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white scrollImg2" style="display:inline-block;"> <img src="../salonImg/salon2.jpeg" class="w-cover position-center" alt=""> </div>
      <div class="  m-4 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white scrollImg2" style="display:inline-block;"> <img src="../salonImg/salon3.jpeg" class="w-cover position-center" alt=""> </div>

      <div class="  m-4 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white scrollImg2" style="display:inline-block;"> <img src="../salonImg/salon4.jpeg" class="w-cover position-center" alt=""> </div>
      <div class="  m-4 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white scrollImg2" style="display:inline-block;"> <img src="../salonImg/salon5.jpeg" class="w-cover position-center" alt=""> </div>
      <div class="  m-4 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white scrollImg2" style="display:inline-block;"> <img src="../salonImg/salon6.jpeg" class="w-cover position-center" alt=""> </div>
      <div class="  m-4 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white scrollImg2" style="display:inline-block;"> <img src="../salonImg/salon7.jpeg" class="w-cover position-center" alt=""> </div>
      <div class="  m-4 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white scrollImg2" style="display:inline-block;"> <img src="../salonImg/salon8.jpeg" class="w-cover position-center" alt=""> </div>
      <div class="  m-4 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white scrollImg2" style="display:inline-block;"> <img src="../salonImg/salon9.jpeg" class="w-cover position-center" alt=""> </div>

      <div class="  m-4 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white scrollImg2" style="display:inline-block;"> <img src="../salonImg/salon1.jpeg" class="w-cover position-center" alt=""> </div>
      <div class="  m-4 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white scrollImg2" style="display:inline-block;"> <img src="../salonImg/salon2.jpeg" class="w-cover position-center" alt=""> </div>
      <div class="  m-4 h-full overflow-hidden rounded-lg shadow-lg grid place-content-center text-center bg-white scrollImg2" style="display:inline-block;"> <img src="../salonImg/salon3.jpeg" class="w-cover position-center" alt=""> </div>

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
          <div class=" grid place-items-center overflow-hidden" style="height: 250px;">
            <img src="../img/img1.jpeg" alt="" style="width: 50%;" class="">
          </div>
          <h1 style="margin-top: -40px;" class="text-3xl font-medium">Sonakshi Sinha</h1>
          <p class="text-2xl" style="margin-top: -30px;">In fact, studies have shown that it takes 50 milliseconds for visitors to decide if they’ll stay on an ecommerce site or not. You get only an instant to impress users, which is why website design is so important for your ecommerce business. </p>
        </div>

        <div class="bg-red-100 p-10 w-cover grid w-1/2 ">
          <div class=" grid place-items-center overflow-hidden" style="height: 250px;">
            <img src="../img/img7.jpeg" alt="" style="width: 50%;" class="">
          </div>
          <h1 style="margin-top: -40px;" class="text-3xl font-medium">Sonakshi Sinha</h1>
          <p class="text-2xl" style="margin-top: -30px;">In fact, studies have shown that it takes 50 milliseconds for visitors to decide if they’ll stay on an ecommerce site or not. You get only an instant to impress users, which is why website design is so important for your ecommerce business. </p>
        </div>

      </div>

      <div class="flex bg-red-200" style="height: 500px;">

        <div class="bg-red-100 p-10 w-cover grid w-1/2 ">
          <div class=" grid place-items-center overflow-hidden" style="height: 250px;">
            <img src="../img/img5.jpeg" alt="" style="width: 50%;" class="">
          </div>
          <h1 style="margin-top: -40px;" class="text-3xl font-medium">Sonakshi Sinha</h1>
          <p class="text-2xl" style="margin-top: -30px;">In fact, studies have shown that it takes 50 milliseconds for visitors to decide if they’ll stay on an ecommerce site or not. You get only an instant to impress users, which is why website design is so important for your ecommerce business. </p>
        </div>

        <div class="bg-red-100 p-10 w-cover grid w-1/2 ">
          <div class=" grid place-items-center overflow-hidden" style="height: 250px;">
            <img src="../img/img3.jpeg" alt="" style="width: 50%;" class="">
          </div>
          <h1 style="margin-top: -40px;" class="text-3xl font-medium">Sonakshi Sinha</h1>
          <p class="text-2xl" style="margin-top: -30px;">In fact, studies have shown that it takes 50 milliseconds for visitors to decide if they’ll stay on an ecommerce site or not. You get only an instant to impress users, which is why website design is so important for your ecommerce business. </p>
        </div>

      </div>

    </div>
    <!--over-->
  </div>
  <!--sutistfied client code over -->

<?php 
include("footer.php");
?>