<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!--========== BOX ICONS ==========-->

    <link rel="stylesheet" href="view/assets/css/boxicons.min.css">

    <!--========== CSS ==========-->




    <title>Movietime</title>
    <link rel="icon" href="assets/img/icons8-film-reel-50.png">

</head>

<link rel="stylesheet" href="view/assets/css/bootstrap.min.css">

<link rel="stylesheet" href="view/assets/css/main.css">
<?php


?>

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
                        <input type="text" style=" color : whitesmoke; " name="uname" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" style=" color : whitesmoke; " name="psw" required>

                        <button class="blr" type="submit" name="login">Login</button>
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

                <form class="modal-content animate" action="?action=addUser" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <h1>Create account</h1>
                    </div>

                    <div class="container">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" style=" color : whitesmoke; " name="uname" required>

                        <label for="psw"><b>Email</b></label>
                        <input type="email" style=" color : whitesmoke; " name="email" required>

                        <label for="psw"><b>Password </b></label>
                        <input type="password" style=" color : whitesmoke; " placeholder="at least 8 charcters" name="psw" required>

                        <label for="psw"><b>Password Confirm</b></label>
                        <input type="password" style=" color : whitesmoke; " name="psw1" required>



                        <button class="blr" type="submit" name="regist">Sign Up</button>

                    </div>



                </form>
            </div>




            <a href="#" class="header__logo">Movie<span class="col">time</span> </a>

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
                <a href="#" class="nav__link nav__logo">
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
                </div>
            </div>

            <a href="#" class="nav__link nav__logout">
                <i class='bx bx-cog nav__icon'></i>
                <span class="nav__name">Customize</span>
            </a>

        </nav>
    </div>

    <!--========== CONTENTS ==========-->
    <main>
        <?php
        $conx = conect();
        $sql = "SELECT * FROM movies_tv ORDER BY date";
        $mv = $conx->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        foreach ($mv as $row) { ?>
            <section class="banner">
                <div class="banner-card">
                    <img src="view/image/<?= $row['image'] ?>" class=" banner-img" alt="">

                    <div class="card-content">
                        <h2 class="card-title"><?= $row['title']; ?></h2>

                        <div class="card-info">

                            <div class="genre">
                                <ion-icon name="film"></ion-icon>
                                <span><?= $row['type']; ?></span>
                            </div>

                            <div class="year">
                                <ion-icon name="calender"></ion-icon>
                                <span><?= $row['date']; ?></span>
                            </div>

                            <div class="duration">
                                <ion-icon name="time"></ion-icon>
                                <span><?= $row['time']; ?></span>
                            </div>

                            <div class="quality">HD</div>
                        </div>

                        <div class="description">
                            <p><?= $row['describe']; ?></p>
                        </div>

                        <div class="butn">
                            <button class="sbn1">
                                <i class='bx bx-sm bx-play icon' style='color:#00acc1'></i> Watch trailer </button>
                            <button class="sbn2">
                                <i class='bx bx-sm bx-plus' style='color:#778a88'></i> <a href="" name="addList">My List</a> </button>
                        </div>
                    </div>
                </div>
            <?php
        } ?>


            </section>

            <section class="movie-grid">


                <!-- movies grid -->
                <?php
                $con = conect();
                $sql = 'SELECT * FROM movies_tv';
                $tab = $con->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                foreach ($tab  as $row) {

                ?>

                    <form action="" method="post">
                        <div class="card bg-dark rounded row" style="width: 12rem;">

                            <a href="view/movie.php"> <img src="view/image/<?= $row['image'] ?>" alt=""> </a>
                            <div class="card-body">
                                <a href="view/movie.php?$_POST['idMovies']">
                                    <h3 class="card-text fs-5"><?= $row['title'] ?></h3>
                                </a>
                                <span class="card-text .text-secondary"><?= $row['type'] ?></span>
                                <span class="card-text .text-secondary"><?= $row['time'] ?></span>

                                <a href="#"><button type="button" class="btn btn-primary"><i class='bx bx-plus'></i>Addlist</button></a>
                                <a href=""><button type="button" class="btn btn-light"> <i class='bx bx-play'></i>Trailer</button></a>
                            </div>





                        </div>
                    <?php
                }
                    ?>


                    </form>









    </main>

    <!--========== MAIN JS ==========-->


    <script>
        // Get the modal
        var modal1 = document.getElementById('id01');
        var modal2 = document.getElementById('id02');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal1) {
                modal1.style.display = "none";

            }

            if (event.target == modal2) {
                modal2.style.display = "none";

            }
        }
    </script>



</body>

</html>