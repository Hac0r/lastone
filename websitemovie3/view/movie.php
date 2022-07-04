<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== BOX ICONS ==========-->

    <link rel="stylesheet" href="../view/assets/css/boxicons.min.css">

    <!--========== CSS ==========-->
    <!--==========  Bootstrp 5 ==========-->
    <link rel="stylesheet" href="../view/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../view/assets/css/main.css">
    <link rel="stylesheet" href="../view/assets/css/mstyle.css">
    <title></title>
</head>

<body>

    <!--========== HEADER ==========-->
    <header class="header">
        <div class="header__container">
            <div class="header__login">
                <input onclick="document.getElementById('id02').style.display='block'" class="header_btn" type="button" value="Register" />
                <input onclick="document.getElementById('id01').style.display='block'" class="header_btn" name="login" type="button" value="Login" />
            </div>
            <!-- Login form -->
            <div id="id01" class="modal">

                <form class="modal-content animate" action="?action=auth" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <h1>Sign In</h1>
                    </div>

                    <div class="container">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" name="uname" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" name="psw" required>

                        <button class="blr" type="submit">Login</button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                        <span class="psw"><a href="#"> Forgot password?</a></span>
                    </div>

                    <h5>Don't have an account? <a href=""> Sign up here!</a> </h5>

                </form>

            </div>

            <!-- Resister form -->
            <div id="id02" class="modal">

                <form class="modal-content animate" action="" method="">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <h1>Create account</h1>
                    </div>

                    <div class="container">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" name="uname" required>

                        <label for="psw"><b>Email</b></label>
                        <input type="password" name="psw" required>

                        <label for="psw"><b>Password </b></label>
                        <input type="password" placeholder="at least 8 charcters" name="psw" required>

                        <label for="psw"><b>Password Confirm</b></label>
                        <input type="password" name="psw" required>



                        <button class="blr" type="submit">Sign Up</button>

                    </div>



                </form>
            </div>




            <a href="../index.php" class="header__logo">Movie<span class="col">time</span> </a>

            <div class="header__search">
                <input type="search" placeholder="Search" class="header__input">
                <i class='bx bx-search'></i>
            </div>

            <div class="header__toggle">
                <i class="fa-solid fa-bars" id="header-toggle"></i>

            </div>
        </div>
    </header>
    <!--========== NAV ==========-->
    <div class="nav" id="navbar">
        <nav class="nav__container">
            <div>
                <a href="../index.php" class="nav__link nav__logo">
                    <i class='fa-solid fa-compact-disc nav__icon'></i>
                    <span class="nav__logo-name">Movie<span class="col">time</span></span>
                </a>

                <div class="nav__list">
                    <div class="nav__items">
                        <h3 class="nav__subtitle">Discover</h3>


                        <div class="nav__dropdown">
                            <a href="#" class="nav__link">
                                <i class='bx bx-camera-movie nav__icon'></i>
                                <span class="nav__name">Movies</span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>

                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="#" class="nav__dropdown-item">Popular</a>
                                    <a href="#" class="nav__dropdown-item">Upcoming</a>
                                    <a href="#" class="nav__dropdown-item">Top Reted</a>
                                </div>
                            </div>
                        </div>

                        <div class="nav__dropdown">
                            <a href="#" class="nav__link">
                                <i class='bx bx-tv nav__icon'></i>
                                <span class="nav__name">TV Shows</span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>

                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="#" class="nav__dropdown-item">Popular </a>
                                    <a href="#" class="nav__dropdown-item">On TV</a>
                                    <a href="#" class="nav__dropdown-item">Top Reted</a>
                                </div>
                            </div>
                        </div>


                        <div class="nav__dropdown">
                            <a href="#" class="nav__link">
                                <i class='bx bx-face nav__icon'></i>
                                <span class="nav__name">People</span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>

                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="#" class="nav__dropdown-item">Popular People</a>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="nav__link">
                            <i class='bx bxs-chat nav__icon'></i>
                            <span class="nav__name">Discussions</span>
                        </a>
                    </div>

                    <div class="nav__items">
                        <h3 class="nav__subtitle">Manage</h3>



                        <a href="#" class="nav__link">

                            <i class='bx bx-list-ul bx- nav__icon'></i>
                            <span class="nav__name" onclick>Lists</span>
                        </a>
                        <a href="#" class="nav__link">
                            <i class='bx bx-heart nav__icon'></i>

                            <span class="nav__name">Favorite</span>
                        </a>
                        <a href="#" class="nav__link">
                            <i class='bx bx-bookmark nav__icon'></i>
                            <span class="nav__name">Watchlist</span>
                        </a>
                        <a href="#" class="nav__link">
                            <i class='bx bx-star nav__icon'></i>
                            <span class="nav__name">Rate</span>
                        </a>
                    </div>
                </div>
            </div>

            <a href="#" class="nav__link nav__logout">
                <i class='bx bx-cog nav__icon'></i>
                <span class="nav__name">Customize</span>
            </a>

        </nav>
    </div>

    <!--========== CONTENTS ==========-->
    <?php
    include_once('../modele/conect.php');
    $con = conect();
    $sql = "SELECT * FROM movies_tv WHERE idMovies=" . $_GET['id'];
    $tab = $con->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    foreach ($tab  as $row) {


    ?>
        <main>
            <section class="content">
                <div class="movie_card">
                    <div class="info_section">
                        <div class="movie_header">
                            <img class="locandina" src="../view/image/<?= $row['image'] ?>" />
                            <h1><?= $row['title'] ?><span> (<?= $row['date'] ?>)</span> </h1>
                            <span class="cat"><?= $row['MorS'] ?></span>
                            <p class="type"><?= $row['type'] ?></p>
                            <span class="point">.</span>
                            <span class="duration"><?= $row['type'] ?></span>
                            <div class="movie_manage">
                                <span class="circle-icon"> <i class='bx bx-list-ul  nav__icon'></i> </span>
                                <span class="circle-icon"> <i class='bx bx-heart nav__icon'></i></span>
                                <span class="circle-icon"> <i class='bx bx-bookmark nav__icon'></i></span>
                                <span class="circle-icon"> <i class='bx bx-star nav__icon'></i></span>
                                <span class="tariler"><i class='bx bx-play nav__icon ' onclick="document.getElementById('trv').style.display='block'">Watch trailer</i></span>
                                <div id="trv" class="modal">

                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/JwXfVGjSz-4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                        <span onclick="document.getElementById('trv').style.display='none'" class="close" title="Close Modal">&times;</span>
                                    </iframe>
                                </div>
                            </div>
                        </div>
                        <div class="movie_desc">

                            <h1>Overview</h1>
                            <p class="text">
                                <?= $row['describe'] ?></p>
                            <h1 class="dirctor"><b>Steven Knight</b></h1>
                            <h6>Creator</h6>
                        </div>
                        <div class="movie_social">
                            <img class="icon-n" src="assets/img/Netflix_icon..png" alt="">

                            <a href="https://www.netflix.com/ma-fr/title/80002479" target="_blank">
                                <h4 class="src-movie"><i>Now Streaming <br> <b>Watch Now</b></i></h4>
                            </a>

                        </div>
                    </div>
                    <div class="blur_back ave_back">
                        <img src="assets/img/pickyimg.jpg" alt="">
                    </div>
                </div>
            <?php
        }
            ?>
















            <!--                          
            

         <div class="content-info">

      
             
                    
             <div class="card-content">
             <img src="assets/img/pickyimg.jpg" class="banner-img" alt="" >


                    <h2 class="title">Peaky Blinders  <span>(2022)</span> </h2>

                        <div class="info">

                            <div class="genre">
                            <ion-icon name="film"></ion-icon>
                            <span>TV-MA</span>
                            <span>Drama, Crime</span>
                            </div>
                         
                            <div class="year">
                            <ion-icon name="calender"></ion-icon>
                            <span>2022</span>
                            </div>

                            <div class="duration">
                            <ion-icon name="time"></ion-icon>
                            <span>1h 46m</span>
                            </div>

                            <div class="quality">HD</div>


                          


                        </div>
                        
                        <div class="description">
                                <p>After accidentally crash-landing in 2022, time-traveling fighter pilot <br> Adam Reed teams up with his 12-year-old self on a mission to save the future.</p>
                        </div> -->

            <!-- <div class="butn">
                             <button  class="sbn1">
                                <i class='bx bx-sm bx-play icon' style='color:#00acc1'  ></i>  Watch trailer </button>
                                <button class="sbn2">
                                <i class='bx bx-sm bx-plus' style='color:#778a88'  ></i> <a href="">My List</a> </button>
                            </div> -->

            </section>



            <!--========== MAIN JS ==========-->


            <script>
                // Get the modal
                var modal1 = document.getElementById('trv');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal1) {
                        modal1.style.display = "none";

                    }


                }
            </script>



</body>

</html>
</body>

</html>