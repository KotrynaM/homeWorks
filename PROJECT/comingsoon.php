<?php
    include('head.php');
    ?>

    <body>
        <div class="comingsoon">
            <header>
                <div class="topnav">
                    <a href="main.php" class="active">home/</a>
                    <div id="myLinks" class="myLinks">
                        <a href="contacts.php">contacts</a>
                        <a href="portfolio.php">portfolio</a>
                        <a href="comingsoon.php">coming soon</a>
                    </div>
                    <div class="containerNav" onclick="menuIconFunction(this), myFunction()">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                    <img class="nav-img" src="imageGallery/2a.png">
                </div>
            </header>

            <div class="fixed-bg"></div>

            <div class="pageBody">
                <div class="comingsoon-title">workINprogress</div>
                <div class="button-more2" onclick="CFunction(),comingsoonFunction(this)">[+]
                </div>
                <div id="coming-soon-body">
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
            
            function CFunction() {
                var x = document.getElementById("coming-soon-body");
                if (x.style.display === "block") {
                x.style.display = "none";
                } else {
                x.style.display = "block";
                }
            }
            function comingsoonFunction(x) {
                x.classList.toggle("change");
            }
        </script>
    </body> 
</html>
