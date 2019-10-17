<!DOCTYPE html>
<html lang="">

   <head>

      <meta charset="utf-8">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link rel="stylesheet" href="../app/css/master.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

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
         <div class="col m12 center">
            <h2>Bendra informacija</h2>
            <p>Muzikos mokyklos buveinė – Ulonų g. 125</p>
            <p>Telefonas +370 606 75071</p>
            <p>Elektroninis paštas:<br>
               info@vilniuscoding.lt</p>
            <p>Interneto svetainė:<br>
            <a class="-text text-lighten-3" href="https://www.vilniuscoding.lt">www.vilniuscoding.lt</a></p>
            <p>Mokymo kalba – lietuvių.<br>
               Mokymo formos – grupinio ir pavienio mokymosi.</p>
            <p>Muzikos mokyklos steigėja – Vilniaus miesto savivaldybės taryba. Muzikos mokyklos veiklą koordinuoja Vilniaus miesto savivaldybės administracijos Švietimo, kultūros ir sporto departamento Švietimo skyrius.</p>
            <p>Mokyklos darbo laikas:<br>
               Pirmadienis – penktadienis: <em>8.00 – 20.30</em><br>
               Šeštadienis: <em>8.30 – 16.00</em><br>
               Sekmadieniais: <em>mokykla nedirba</em></p>
            <p><strong>Priėmimas 2019-2020 mokslo metams:<br>
               spauskite<a class="-text text-lighten-3" href="registracija.php"> ČIA.</a></strong></p>
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
      </script>

   </body>
</html>
