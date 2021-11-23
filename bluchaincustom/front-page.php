<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>BoomBox</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- Favicon 
        <link href="img/favicon.ico" rel="icon">-->

        <!-- Google Font 
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;600;700;900&display=swap" rel="stylesheet">-->

        <!-- CSS Libraries 
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">-->


        <!-- Template Stylesheet 
        <link href="style.css" rel="stylesheet">
        <link href="css/variables.css" rel="stylesheet">-->

        <?php
        wp_head();
        ?>
    </head>

    <body>
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand"><img src="http://boomboxco.com/wp-content/uploads/2021/07/logo-menu.png" alt="BoomBox logo"></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon">   
                        <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
                    </span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-0">
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="who.html" class="nav-item nav-link">Who Are We?</a>
                        <a href="publishing.html" class="nav-item nav-link">Publishing</a>
                        <a href="support.html" class="nav-item nav-link">Support</a>
                    </div>
                </div>

                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                    <div class="navbar-social mr-0">
                        <a class="navbar-btn" href="https://fb.me/boomboxindie"><i class="fab fa-facebook-f"></i></a>                        
                        <a class="navbar-btn" href="https://twitter.com/boomboxco"><i class="fab fa-twitter"></i></a>
                        <a class="navbar-btn" href="https://instagram.com/boomboxindie"><i class="fab fa-instagram"></i></a>
                        <a class="navbar-btn" href="https://www.youtube.com/channel/UCDJqoemOYbOIb822Wo5H0xQ/"><i class="fab fa-youtube"></i></a>
                        <a class="navbar-btn" href="https://bit.ly/boomboxdiscord"><i class="fab fa-discord"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->

        <!-- Hero BoomBox Start -->
        <div class="hero-boombox" id="home">            
            <div class="hero-boombox-logo"><img src="http://boomboxco.com/wp-content/uploads/2021/07/Boombox-logo-Slider.png"></div>
                <div class="carousel-boombox-filler">
                </div>                
        </div>

        <!-- Hero BoomBox End -->

        <!-- Our Games Start -->
        <div class="our-games" id="our-games">
            <div class="container-fluid">
                <div class="section-header">
                   <div class="our-games-header">
                        <img src="http://boomboxco.com/wp-content/uploads/2021/07/tear.png">
                    </div>
                    <div class="our-games-content d-flex justify-content-center">
                        <img src="http://boomboxco.com/wp-content/uploads/2021/07/our-games-1.png">
                    </div>
                    <!-- <div class="our-games-footer">
                        <img src="assets/home/torn-paper-edge-bottom.svg">
                    </div> -->
                </div>

                <div class="game-buttons row">
                    <div class="col-lg-6 col-md-12">
                        <img class="img-fluid" src="http://boomboxco.com/wp-content/uploads/2021/07/kutm.jpg">
                        <div class="game-content">
                            <div class="game-desc">
                                <h1>King Under The Mountain</h1>
                                <p>A simulation-based settlement-building strategy game set in a fantasy world - build and grow from a humble colony to control of your own kingdom!                                </p>
                            
                                <div class="desc-footer row">
                                    <div class="desc-icons justify-content-end align-items-end col-auto">
                                        <a href="https://store.steampowered.com/app/930230/King_under_the_Mountain/"><img src="http://boomboxco.com/wp-content/uploads/2021/07/steam-logo.png"></a>
                                    </div>

                                    <div class="desc-footer-content d-inline-flex flex-column col-auto">
                                        <p>Genre: <span class="blueat">RPG, Simulation, Strategy</span></p>
                                        <p>Developer: <span class="blueat">Rocket Jump Technology</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <img class="img-fluid" src="http://boomboxco.com/wp-content/uploads/2021/07/button-Terra-Alia.jpg">
                        <div class="game-content">
                            <div class="game-desc">
                                <h1>Terra Alia</h1>
                                <p>You’ve arrived at Terra Alia, a world where magic and technology shape the future. Embark on an adventure and solve a thrilling mystery while practicing a new language in this top-down RPG!
                                </p>
                                
                                <div class="desc-footer row d-flex justify-content-center">
                                    <div class="desc-icons justify-content-end align-items-end col-auto">
                                        <a href="https://store.steampowered.com/app/1183580/Terra_Alia_The_Language_Learning_RPG/"><img src="http://boomboxco.com/wp-content/uploads/2021/07/nintendo-switch-logo.png"></a>
                                        <a href="https://store.steampowered.com/app/1183580/Terra_Alia_The_Language_Learning_RPG/"><img src="http://boomboxco.com/wp-content/uploads/2021/07/steam-logo.png"></a>
                                    </div>

                                    <div class="desc-footer-content d-inline-flex flex-column col-auto">
                                        <p>Genre: <span class="blueat">Action, Learning, RPG</span></p>
                                        <p>Developer: <span class="blueat">30 Parallel</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <img class="img-fluid" src="http://boomboxco.com/wp-content/uploads/2021/07/button-Duck-hunting-challenge.jpg">
                        <div class="game-content">
                            <div class="game-desc">
                                <h1>Duck Hunting Challenge</h1>
                                <p>Duck Hunt Challenge combines classic hunting game elements with engaging play modes to create a unique, fun hunting trip across the US.
                                </p>
                            
                                <div class="desc-footer row">
                                    <div class="desc-icons justify-content-end align-items-end col-auto">
                                        <a href="https://store.steampowered.com/app/934550/Duck_Hunting_Challenge/"><img src="http://boomboxco.com/wp-content/uploads/2021/07/nintendo-switch-logo.png"></a>
                                        <a href="https://store.steampowered.com/app/934550/Duck_Hunting_Challenge/"><img src="http://boomboxco.com/wp-content/uploads/2021/07/steam-logo.png"></a>
                                    </div>

                                    <div class="desc-footer-content d-inline-flex flex-column col-auto">
                                        <p>Genre: <span class="blueat">Action, Casual, Simulation</span></p>
                                        <p>Developer: <span class="blueat">30 Parallel</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <img class="img-fluid" src="http://boomboxco.com/wp-content/uploads/2021/07/button-Jump-gunners.jpg">
                        <div class="game-content">
                            <div class="game-desc">
                                <h1>Jump Gunners</h1>
                                <p>Jump Gunners is the definitive couch multiplayer combat game, matching fast paced hilarious recoil jumping mechanics, with core gameplay that is easy to learn but hard to master. Become the champion among friends, as you fight alone, or team up together against your foes.
                                </p>
                            
                                <div class="desc-footer row">
                                    <div class="desc-icons justify-content-end align-items-end col-auto">
                                        <a href="https://store.steampowered.com/app/697660/Jump_Gunners/"><img src="http://boomboxco.com/wp-content/uploads/2021/07/steam-logo.png"></a>
                                    </div>

                                    <div class="desc-footer-content d-inline-flex flex-column col-auto">
                                        <p>Genre: <span class="blueat">Action, Arcade</span></p>
                                        <p>Developer: <span class="blueat">30 Parallel</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6">
                        <img src="http://boomboxco.com/wp-content/uploads/2021/07/RegionsofRuin.jpg">
                        <div class="game-content">
                            <div class="game-desc">
                                <h1>Regions of Ruin</h1>
                                <p>Regions of Ruin is a 2D pixel side-scrolling RPG with town-building, where you explore, fight and build into an open world.
                                </p>
                            
                                <div class="desc-footer row">
                                    <div class="desc-icons-small justify-content-center col-12">
                                        <a href="https://store.steampowered.com/app/680360/Regions_Of_Ruin/"><img src="http://boomboxco.com/wp-content/uploads/2021/07/steam-logo.png"></a>
                                    </div>

                                    <div class="desc-footer-content d-flex flex-column align-items-center col-12">
                                        <p>Genre: <span class="blueat">Action, Open World, RPG</span></p>
                                        <p>Developer: <span class="blueat">Gameclaw Studio/Poysky Productions</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <img src="http://boomboxco.com/wp-content/uploads/2021/07/Meeple.jpg">
                        <div class="game-content">
                            <div class="game-desc">
                                <h1>Meeple</h1>
                                <p>Build your way to success! Trade your way to the top! Explore your way to infamy! Do it all your way!</p>
                            
                                <div class="desc-footer row">
                                    <div class="desc-icons-small justify-content-center col-12">
                                        <a href="https://store.steampowered.com/app/900010/Meeple_Station"><img src="http://boomboxco.com/wp-content/uploads/2021/07/steam-logo.png"></a>
                                    </div>

                                    <div class="desc-footer-content d-flex flex-column align-items-center col-12">
                                        <p>Genre: <span class="blueat">Strategy, Simulation, RPG</span></p>
                                        <p>Developer: <span class="blueat">Gameclaw Studio/Poysky Productions</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <img src="http://boomboxco.com/wp-content/uploads/2021/07/Travellers.jpg">
                        <div class="game-content">
                            <div class="game-desc">
                                <h1>Traveller's Rest</h1>
                                <p>You are an innkeeper, on a journey to transform a run-down inn into a bustling social space.</p>
                            
                                <div class="desc-footer row">
                                    <div class="desc-icons-small justify-content-center col-12">
                                        <a href="https://store.steampowered.com/app/1139980/Travellers_Rest/"><img src="http://boomboxco.com/wp-content/uploads/2021/07/steam-logo.png"></a>
                                    </div>

                                    <div class="desc-footer-content d-flex flex-column align-items-center col-12">
                                        <p>Genre: <span class="blueat">Adventure, Simulation, RPG</span></p>
                                        <p>Developer: <span class="blueat">Isolated Games/Poysky Productions</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <img src="http://boomboxco.com/wp-content/uploads/2021/07/BetweenTheStars.jpg">
                        <div class="game-content">
                            <div class="game-desc">
                                <h1>Between the Stars</h1>
                                <p>Become the captain of an interstellar cruiser and cross the galaxy to save the Republic.
                                </p>
                            
                                <div class="desc-footer row">
                                    <div class="desc-icons-small justify-content-center col-12">
                                        <a href="https://store.steampowered.com/app/727130/Between_the_Stars/"><img src="http://boomboxco.com/wp-content/uploads/2021/07/steam-logo.png"></a>
                                    </div>

                                    <div class="desc-footer-content d-flex flex-column align-items-center col-12">
                                        <p>Genre: <span class="blueat">Action, Simulation, Strategy</span></p>
                                        <p>Developer: <span class="blueat">Isolated Games/Poysky Productions</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Games End -->

        <!-- Newsletter Start -->
        <div class="newsletter" id="">
            <div class="newsletter-tear"><img src="http://boomboxco.com/wp-content/uploads/2021/07/torn-paper-edge-top-black.png"></div>
            <div class="container-fluid">
                <div class="newsletter-header"><img src="http://boomboxco.com/wp-content/uploads/2021/07/newsletter-1.png"></div>

                <div class="newsletter-content row">
                    <div class="col-sm-12 col-md-4">
                        <p>Give us your email and we'll whisper sweet nothings into your (digital) ear. They are about upcoming games and releases.</p>
                        <img src="http://boomboxco.com/wp-content/uploads/2021/07/characters.png">
                    </div>

                    <div class="col-sm-12 col-md-8">
                        <form class="needsValidation" action="https://formspree.io/f/mwkanjqy" method="POST" novalidate>
                            <div class="form-group">
                                <p>By filling this form, you agree to receive information about the offers, news and events of Boombox Games by e-mail or text messages. For more information please refer to our <a href="privacy.html">Privacy Policy here.</a></p>
                                <label for="inputEmail" class="input-label">Email *</label>
                                <input type="email" name="_replyto" class="form-control" id="email" aria-describedby="emailHelp" required>
                                <div class="invalid-feedback">
                                    Enter a valid email
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-submission d-flex align-items-center justify-content-between">
                                    <button type="submit" id="newsletter-btn" class="newsletter-btn">Send</button>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox" required>
                                        <label class="form-check-label" for="checkbox">
                                            I am 18 years of age or older*
                                        </label>
                                        <div class="invalid-feedback">
                                            You must be 18 years of age or older
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </form>

                    </div>
                </div>
                <hr></hr>

                
            </div>
        </div>

        <!-- Newsletter End -->

        <!-- Footer Start -->
        <div class="footer" id="">
            <div class="container-fluid">
                <div class="links d-flex justify-content-between row">
                    <div class="menu col-sm-12 col-lg-auto">
                        <a href="index.html">Home</a>
                        <a href="who.html">Who Are We?</a>
                        <a href="publishing.html">Publishing</a>
                        <a href="support.html">Support</a>
                    </div>

                    <div class="policy pr-0 col-sm-12 col-lg-auto">
                        <a href="privacy.html">Policy</a>
                    </div>
                </div>

                <div class="copyright row">
                    <div class="col">
                        <p>© 2021 Boombox Games™. All Rights Reserved. Boombox Games™ and the Boombox™ logo are trademarks of Boombox Games, LLC.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer End -->
        
        
        <!-- Back to top button
        <a href="#" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a>
         -->
        
        <!-- Pre Loader 
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        -->
        <!-- JavaScript Libraries 
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>-->
        <!-- <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js"></script>

        -->
        <!-- Contact Javascript File -->
        <!-- Template Javascript
        <script src="js/main.js"></script> -->
    </body>
</html>
