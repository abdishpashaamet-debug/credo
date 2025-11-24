 <footer>
     <div class="fw">
         <p>Credo<br>Copyright © 2025 Alle rettigheter reservert</p>
         <nav class="footer-nav">
             <a href="#">Aktuelt</a>
             <a href="#">Vårt mål</a>
             <a href="#">Vil du synge med oss?</a>
             <a href="#">Oppdrag</a>
             <a href="#">Konserter</a>
             <a href="#">Mer</a>
         </nav>
     </div>
 </footer>


 <div class="popup__container">
     <div class="bg" onclick="popup_open('popup-auth')"></div>
     <button onclick="popup_open('popup-auth')">X</button>
     <div class="popup popup-auth active">
         <div class="content">
             <p class="p">Skriv inn e-posterdessen din </p>
             <div class="wrapper">
                 <form action="auh.php">
                     <input type="email" placeholder="введите имеил" name="email">
                     <input type="password" placeholder="введите пароль" name="password">
                     <button>LOGG PA ELLER OPPRETT EN KONTO</button>
                 </form>
                 <p>Eller fortsett a bruke</p>
                 <button>Forsett med Facebook</button>
                 <button>Forsett med google</button>
             </div>
         </div>
     </div>
 </div>
 <script src="js/main.js"></script>
 <script src="js/popup.js"></script>