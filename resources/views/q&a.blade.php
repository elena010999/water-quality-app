<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />

   <link rel="stylesheet" href="/css/q&a.css">
   <link rel="stylesheet" href="/css/bootstrap.min.css">
   <link rel="Stylesheet" href="/css/banner.css" />


</head>

<body>
   @include('navbar')
   @include('loader')
   <div class="banner">
    <img src="/images/banner.jpg" style="width:100%;height:200px;">
    <div class="centered">Find frequently asked questions here:</div>
  </div>
   <div id="overviews" class="section-lb">
      <div class="container">
         <section>
            <div class="">

               <ul class="faq-list">
                  <li>
                     <h4 class="faq-heading"> Where can I buy required materials? </h4>
                     <p class="read faq-text">
                        You can buy them from many sites worldwide. I bought them from <a href="https://www.dfrobot.com/">this site.</a>
                     </p>
                  </li>
                  <li>
                     <h4 class="faq-heading"> Which language is used to program sensors and </br> Raspberry Pi? </h4>
                     <p class="read faq-text">
                        Python.
                     </p>
                  </li>
                  <li>
                     <h4 class="faq-heading">
                        Which model of Raspberry Pi is used?</h4>
                     <p class="read faq-text">
                        Raspberry Pi 4 Model B+, but you can also use Raspberry Pi 3.
                     </p>
                  </li>
                  <li>
                     <h4 class="faq-heading">
                        Why it is very hard to find Raspberry Pi micro </br> controller?
                     </h4>
                     <p class="read faq-text">
                        There is a global problem because of the increased demand.
                     </p>
                  </li>
                  <li>
                     <h4 class="faq-heading">
                        Is there any shop in Macedonia that sells </br> Raspberry Pi?
                     </h4>
                     <p class="read faq-text">
                        Yes, you can find <a href="https://www.loging.mk/">here.</a>
                     </p>
                  </li>
                  <li>
                     <h4 class="faq-heading">
                        How much time is required to accomplish project?
                     </h4>
                     <p class="read faq-text">
                        For me it takes 2-3 months.
                     </p>
                  </li>
                  <li>
                     <h4 class="faq-heading">
                        Can I use Arduino micro controller? </h4>
                     <p class="read faq-text">
                        Yes..
                     </p>
                  </li>
                  <li>
                     <h4 class="faq-heading">
                        Is additional device for connecting to </br> network required? </h4>
                     <p class="read faq-text">
                        No, Raspberry Pi has inbuilt..
                     </p>
                  </li>
               </ul>
            </div>
         </section>

      </div>
   </div>
   @include('footer')
   <script>
      $('.faq-heading').click(function() {

         $(this).parent('li').toggleClass('the-active').find('.faq-text').slideToggle();
      });
   </script>
   <script src="/js/all.js"></script>
   <script src="/js/modernizer.js"></script>
   <script src="/js/custom.js"></script>
</body>

</html>