<!--<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">-->
<!--TODO: flip-imagesAfterProfilePic-byscroll-->

<?php
    include('head.php');
    ?>
<?php
    include_once'header.php';
    ?>
        
        <div class="title">
            <h1>Kotryna<br>Maldutytė</h1>
            <div class="button-more-mobile" onclick="accordionFunction(this), AFunction()"><a href="#about"><b>[+]</b></a></div>
        </div>
        
        <div class="gif-container2">
            <div id="gif-click-more2">
                <img id="headOfGif" src="imageGallery/flippedgiphy.gif" width="480" height="480">
            </div>
        </div>
        
        <div class="profile-image-box">
            <div>
                <div id="profile-img">
                    <img src="imageGallery/profilepic.png" class="center">
                </div>
            </div>
        </div> 
        
        <div class="homePage-box">
            
            <div class="accordion-container">
                <div class="title-box">
                    <div id="titleWeb">
                        <h1>Kotryna<br>Maldutytė</h1>
                        <div class="button-more" onclick="ani(), ani2(), accordionFunction(this), AFunction(), hidegif2(), hideGifbox()">[+]
                        </div>
                    </div>
                </div>

                    <div id="accordion">
                        <div id="about"><h2>+hello</h2>
                            <p>I am wide profile visual artist.  Developing my skills and knowledge in fields of scenography, performative art, installation art and also digital art forms…</p>

                            <br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>

                    </div>
                
                <!--TODO: FlipImg animation, maybe with AoS library-->
                    <div class="imageFlip">
                        <div id="row">
                            <div class="main-pics-container" data-aos="flip-down">
                                <img src="imageGallery/96.jpg" alt="image96">
                            </div>

                            <div class="main-pics-container" data-aos="flip-down">
                                <img src="imageGallery/93.jpg" alt="image93">
                            </div> 
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
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
            function ani(){
                document.getElementById('profile-img').classList.add('classname');  
            }
            function ani2(){
                document.getElementById('titleWeb').classList.add('classname2');
            }
            function hidegif2(){
                document.getElementById('headOfGif').classList.add('gifmove2');
            }
        </script>
        
        <script>
            function AFunction() {
                var x = document.getElementById("accordion");
                if (x.style.display === "block") {
                x.style.display = "none";
                } else {
                x.style.display = "block";
                }
            }
            function accordionFunction(x) {
                x.classList.toggle("change");
            }
            
            function hideGifbox() {
            var x = document.getElementById("gif-click-more2");
            if (x.style.display === "none") {
            x.style.display = "block";
            } else {
            x.style.display = "none";
            }
        }
            
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>

        <script src="plugins/aos/aos.js"></script>
        <script type="text/javascript">
            AOS.init({
                duration: 2400,
            });
        </script>
    </body>
</html>
