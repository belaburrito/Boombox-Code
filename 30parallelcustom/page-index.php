<?php get_header(); ?>   
<body data-spy="scroll" data-target=".navbar" data-offset="51">
        <!-- Nav Bar Start -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="https://30parallelgames.com/wp-content/uploads/2021/08/Logo_blackBG_v1.png" alt="30 Parallel logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#who">About Us</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#newsletter">Newsletter</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
                    <button class="buy-button"><a href="https://store.steampowered.com/app/1183580/Terra_Alia/">Buy Game</a></button>
                </div>
            </div>
        </nav>


        <!-- Nav Bar end-->


        <!-- Hero Start -->
        <div class="hero container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>A sci-fi fantasy RPG where language is power</h1>
                </div>

                <div class="col-12">
                    <p>You’ve arrived at Terra Alia, a world where magic and technology shape the future. Embark on an adventure and solve a thrilling mystery while practicing a new language in this top-down RPG!</p>
                </div>

                <div class="col-12">
                    <button class="buy-button"><a href="https://store.steampowered.com/app/1183580/Terra_Alia/">Buy Game</a></button>
                </div>
            </div>
        </div>

        <!-- Hero End -->


        <!-- Who We Are Start -->
        <div class="who container-fluid" id="who">
            <div class="border-divider"><img src="https://30parallelgames.com/wp-content/uploads/2021/08/Border.png"></div>
            <div class="row who-row">
                <div class="col-sm-12 col-md-6 p-0 m-0 who-img">
                    <img src="https://terraalia.com/wp-content/uploads/2020/04/The-World-Gif.gif">
                </div>

                <div class="col-sm-12 col-md-6 who-we-are">
                    <h1>Who we are</h1>
                    <p>We are a team of experienced and passionate game developers spread throughout the 30 lattitude line! From California to North Carolina to Spain to France, we all have one major thing in common: We love making games that we want to play!</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6 our-games">
                    <h1>Our games</h1>
                    <p>Terra Alia - You've arrived at Terra Alia, a world where magic and technology shape the future. Embark on an adventure and solve a thrilling mystery while practicing a new language in this top-down RPG!</p>
                    <div class="games-icons">
                        <img src="https://30parallelgames.com/wp-content/uploads/2021/08/Logo-1463x495-1.png">
                        <a href="https://store.steampowered.com/app/1183580/Terra_Alia/"><i class="fab fa-steam"></i></a>
                    </div>
                    <button class="buy-button">More Games</button>
                </div>

                <div class="col-sm-12 col-md-6 p-0 m-0 who-img">
                    <img src="https://terraalia.com/wp-content/uploads/2020/05/language.gif">
                </div>
            </div>
        </div>

        <!-- Who We Are End -->


        <!-- Carousel Start 
        <div class="carousel container-fluid d-flex">-->
        <?php
 
 // The Query
 $args = array(
 'p'         => 1204, // ID of a page, post, or custom type
 'post_type' => 'any'
 );
 $the_query = new WP_Query( $args );

 // The Loop
 if ( $the_query->have_posts() ) {
     echo '<div class="carousel container-fluid">';
     while ( $the_query->have_posts() ) {
         $the_query->the_post();
         echo the_content();
         
     }
     echo '</div>';
 } else {
     // no posts found
 }
 /* Restore original Post Data */
 wp_reset_postdata();
?>

            <!--<div class="row d-flex p-0">
                <div class="col-4 p-0">
                    <img class="w-100" src="https://cdn.cloudflare.steamstatic.com/steam/apps/1183580/ss_1e36ecb8a93b1ce5727cea8fdded9125db194a77.600x338.jpg">
                </div>

                <div class="col-4 p-0">
                    <img class="w-100" src="https://cdn.cloudflare.steamstatic.com/steam/apps/1183580/ss_55c8185d8d3a5df07ee88f2b9024b1f1c3975b83.600x338.jpg">
                </div>

                <div class="col-4 p-0">
                    <img class="w-100" src="https://cdn.cloudflare.steamstatic.com/steam/apps/1183580/ss_fd094b64bc89617bbc426cae90e8775993876835.600x338.jpg">
                </div>
            </div>
        </div>-->

        <!-- Carousel End-->

        <!-- Newsletter Start -->
        <div class="newsletter container-fluid" id="newsletter">
            <div class="row">
                <div class="col-md-6 p-0">
                    <img class="w-100" src="https://terraalia.com/wp-content/uploads/2020/05/spells.gif">
                </div>

                <div class="col-md-6 newsletter-content">
                    <h1>Newsletter</h1>
                    <p>Give us your email and we'll whisper sweet nothings into your (digital) ear. They are about upcoming games and releases.</p>
                
                    <?php
 
 // The Query
 $args = array(
 'p'         => 1188, // ID of a page, post, or custom type
 'post_type' => 'any'
 );
 $the_query = new WP_Query( $args );

 // The Loop
 if ( $the_query->have_posts() ) {
     echo '<div class="form-group">';
     while ( $the_query->have_posts() ) {
         $the_query->the_post();
         echo the_content();
         
     }
     echo '</div>';
 } else {
     // no posts found
 }
 /* Restore original Post Data */
 wp_reset_postdata();
?>

                </div>
            </div>
        </div>

        <!-- Newsletter End -->

        <!--Contact Start-->
        <div class="contact container-fluid" id="contact">
            <div class="row w-100">
                <div class="col-12 d-flex justify-content-center">
                    <div class="border-contact"><img src="https://30parallelgames.com/wp-content/uploads/2021/08/Border.png"></div>

                </div>

                <div class="col contact-content d-flex flex-column justify-content-center">
                    <div class="contact-icons">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-discord"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-reddit"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-steam"></i></a>
                    </div>
                    <div>
                        <p>© 2021 30 Parallel Games. All Rights Reserved. 30 Parallel Games ™ and the 30 Parallel Games™ logo are trademarks of 30 Parallel Games, LLC</p>
                    </div>
                </div>

            </div>
        </div>

        <!--Contact End-->
        
        <!-- Back to top button -->
        
        
        <!-- Pre Loader -->
        
        <!-- JavaScript Libraries 

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
-->
    </body>
    <?php get_footer(); ?>