

<?php
    include('head.php');
    include_once'header.php';
//    require __DIR__ . '/../form/form.php';
    require 'form/form.php';
    ?>
        
        <div class="gif-container">
            <div id="gif-click-more" onclick="AFunction(), accordionFunction(this), hideGif()">
                <img src="imageGallery/mygiphy.gif" width="220" height="220">
            </div>
        </div>

        <div class="container">
            <div id="letsTalk">
                <div class="fixed-form-bg"></div>
                <form id="contact" action="contacts.php" method="post">
                    <div id="contacts"><h2>lets talk</h2></div>

                    <label for="fname">First Name</label>
                    <p><input type="text" name="fname" placeholder="Your name.." required autofocus></p>

                    <label class="email" for="email">Email Address</label>
                    <p><input type="email" name="email" placeholder="Your email address.." required></p>

                    <label for="message">Message</label>
                    <p><textarea placeholder="Write something.." name="message" required></textarea></p>

                    <p><button name="submit" type="submit" id="contact-submit">Submit</button></p>
                </form> 
                <div class="socialNetworkIcons">
                    <a href="http://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    <a href="mailto:kotryna.maldutyte@gmail.com" target="_blank"><i class="fas fa-envelope-square"></i></a>
                    <a href="https://lt.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </body>
    <script>
        function myFunction() {
            var x = document.getElementById("myLinks");
            if (x.style.display === "block") {
            x.style.display = "none";
            } else {
            x.style.display = "block";
            }
        }
        function menuIconFunction(x) {
            x.classList.toggle("change");
        }
    </script>
    <script>
        function AFunction() {
            var x = document.getElementById("letsTalk");
            if (x.style.display === "block") {
            x.style.display = "none";
            } else {
            x.style.display = "block";
            }
        }
        function accordionFunction(x) {
            x.classList.toggle("change");
        }
        
        function hideGif() {
            var x = document.getElementById("gif-click-more");
            if (x.style.display === "none") {
            x.style.display = "block";
            } else {
            x.style.display = "none";
            }
        }
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</html>