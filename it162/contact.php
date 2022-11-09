<?php include 'includes/header.php';?>
 <h2 class="pageID">CONTACT ME</h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 
 <p>CONTACT FORM GOES HERE</p>
 <!DOCTYPE html>
<html lang="en">
 <head>
  <title>William Anderson IT161 Portal Website</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />

 </head>

 <body>
    <!-- navigation goes here: welcome/rates/vehicles/about/contact --->
     
   <div class="wrapper">
     
     <img class="desktop" src="images/desktop.jpg" alt="Photo of William doing a photo op at Safeco Field." />
       
     <img class="tablet" src="images/tablet.jpg" alt="Photo of men in black suit/ representing me a professional." />
       
     <img class="phone" src="images/phone.jpg" alt="Photo of a Puma which is my aka name/ go get it." />
       
       <h2 class="subheader">About Us!</h2>
       
       <p>Our goal is to give you the best experience possible while traveling throughout the great northwest while relaxing in our luxury vehicles driven by experience drivers  bonded and insured to reasure your comfort during your stay in the Puget sound.  Our payment options are: VISA / AMERICAN EXPRESS / CASHAPP / VENMO / SQUARE and many more. BOOK HERE IN THE FORMS BELOW OR CALL 206-579-4063 or email us with booking dates. </p>

       <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "sstar691969@gmail.com";  //place your/your client's email address here
        $toName = "Will"; //place your client's name here
        $website = "Elgante Transportation luggage Service";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
     <footer>
      <p><small>&copy; 2022 by 
          <a href="contact.php">William Anderson</a>, All Rights Reserved ~ 
          <a id="html-checker" href="#">Check HTML</a> ~ 
          <a id="css-checker" href="#">Check CSS</a></small>
     </p>
    </footer>
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    //https://tinyurl.com/dynamic-html-checker
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
      
    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  
    
    //manages mobile nav 
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
     
 </body>
</html>
 <p></p>
</section>
<!-- END LEFT COL -->
<!-- HEADER STARTS CUT ABOVE </section> -->

<!-- START RIGHT COL -->
<aside>

</aside>
<!-- END RIGHT COL -->
 
<?php include 'includes/footer.php';?>