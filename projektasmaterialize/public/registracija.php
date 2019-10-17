<?php
   require __DIR__ . '/../app/src/app.php';
?>

   <!DOCTYPE html>
<html lang="">

   <head>

      <meta charset="utf-8">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link rel="stylesheet" href="../app/css/master.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>PHP Contact Form</title>

   </head>

   <body>

      <nav class="blue-grey lighten-1">
         <div class="nav-wrapper">
            <a href="pagrindinis.php" class="brand-logo">"Natos"</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
               <li><a href="pagrindinis.php">pagrindinis</a></li>
               <li><a href="bendra_informacija.php">bendra informacija</a></li>
               <li><a href="registracija.php">registracija</a></li>
               <li><a href="gallery.php">galerija</a></li>
               <li><a href="#contacts">kontaktai</a></li>
            </ul>
         </div>
      </nav>

      <ul class="sidenav" id="mobile-demo">
         <li><a href="pagrindinis.php">pagrindinis</a></li>
         <li><a href="bendra_informacija.php">bendra informacija</a></li>
         <li><a href="registracija.php">registracija</a></li>
         <li><a href="gallery.php">galerija</a></li>
         <li><a href="#contacts">kontaktai</a></li>
      </ul>

      <main>
         <h3 class="black-text">Registracija:</h3>
         <div class="row">
            <form id="contact" action="registracija.php" method="post" class="col l4">
               <div class="row">
                  <div class="input-field col s12">
                     <input type="text" name="vardas"  autofocus>
                     <label for="first_name" class="black-text">Jūsų vardas</label>
                  </div>
               </div>
               <div class="row">
                  <div class="input-field col s12">
                     <input type="email" name="email" required>
                     <label for="email" class="black-text">Jūsų el.pašto adresas</label>
                  </div>
               </div>
               <div class="row">
                  <div class="input-field col s12">
                     <textarea id="textarea1" class="materialize-textarea" name="message" required></textarea>
                     <label  class="black-text">Jūsų žinutė...</label>
                  </div>
               </div>
               <div class="row">
                  <div class="col s1">
                     <button class="btn waves-effect waves-light" name="submit" type="submit" id="contact-submit">Siųsti</button>
                  </div>
               </div>
            </form>
         </div>
      </main>

      <footer class="page-footer blue-grey lighten-1">
         <div class="container">
            <div class="row">
               <div class="col l6 s12">
                  <h5 id="contacts" class="white-text">Su mumis galite susisiekti:</h5>
                  <p class="grey-text text-lighten-4"><a class="grey-text text-lighten-3" href="https://www.facebook.com/vilniuscoding/">Facebook</a></p>
                  <p class="grey-text text-lighten-4"><a class="grey-text text-lighten-3" href="https://www.vilniuscoding.lt">info@vilniuscoding.lt</a></p>
                  <p class="grey-text text-lighten-4"><a class="grey-text text-lighten-3" href="tel:+370 606 75071">tel.nr. +370 606 75071</a></p>
                  <h5 id="contacts" class="white-text">Arba atvykti adresu:</h5>
                  <p><a class="grey-text text-lighten-3" href="https://www.google.com/maps/place/Ulonų+g.,+Vilnius/@54.7090637,25.2896589,17z/data=!4m5!3m4!1s0x46dd96ae109703e7:0x6f3be29852b0a444!8m2!3d54.7097455!4d25.2915472" >Ulonų g. 125</a></p>
                  <div class="cols12 colm6 coll4">
                     <div class="footer-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2232.8498451780947!2d25.28462591590176!3d54.71178018028786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96b2867727cd%3A0x8d87d0b007cd61ff!2sVilnius+coding+school!5e1!3m2!1slt!2slt!4v1564504841297!5m2!1slt!2slt" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                  </div>
               </div>

               <div class="col l4 offset-l2 s12">
                  <h5 class="white-text">Menu:</h5>
                  <p class="grey-text text-lighten-4"><a class="grey-text text-lighten-3" href="pagrindinis.php">pagrindinis</a></p>
                  <p class="grey-text text-lighten-4"><a class="grey-text text-lighten-3" href="bendra_informacija.php">bendra informacija</a></p>
                  <p class="grey-text text-lighten-4"><a class="grey-text text-lighten-3" href="registracija.php">registracija</a></p>
                  <p class="grey-text text-lighten-4"><a class="grey-text text-lighten-3" href="gallery.php">galerija</a></p>
               </div>
            </div>
         </div>
         <div class="footer-copyright">
            <div class="container">
            </div>
         </div>
      </footer>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

      <script>
         document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, {});
         });

         document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.datepicker');
            var instances = M.Datepicker.init(elems, {});
         });
      </script>

</body>
</html>

