<!doctype html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Juriën Waijenberg">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/svg+xml" href="images/favicon.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
    <!-- <meta name="theme-color" content="#E63226" /> -->
    <script src="https://kit.fontawesome.com/5c7d6381f7.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <!--header-top-->
        <section class="rood-bg">
            <section class="max-width">
                <ul>
                    <li><h4>NL</h4><i class="fa-solid fa-chevron-down"></i></li><!--pijl beneden-->
                    <li><i class="fa-solid fa-heart"></i></li>
                    <li>
                        <i class="fa-solid fa-user"></i>
                        <a href="#">
                            <h4>Inloggen</h4>
                        </a>
                    </li>
                </ul>
            </section>
        </section>
        <!--header-bottom-->
        <section class="max-width">
            
            <a href="#"><i class="fa-solid fa-user"></i></a>
            <a href="/"><img src="https://interselektie.bofesto.nl/wp-content/uploads/2024/06/Logo-Interselektie.png" alt="Logo Interselektie"></a>
            <!-- <a href="#"><i class="fa-solid fa-user"></i></a> -->
            <nav class="menu-desktop">
                <ul>
                    <li><a href="#"><h4>Over Interselektie</h4><i class="fa-solid fa-chevron-down"></i></a></li>
                    <li><a href="#"><h4>Werknemer</h4><i class="fa-solid fa-chevron-down"></i></a></li>
                    <li><a href="#"><h4>Werkgever</h4><i class="fa-solid fa-chevron-down"></i></a></li>
                    <!-- <li><a href="#"><h4>Berichten</h4></a></li> -->
                    <li><a href="https://interselektie.bofesto.nl/vacatures/"><h4>Vacatures</h4></a></li>
                    <li><a href="#"><h4>Contact</h4><i class="fa-solid fa-chevron-down"></i></a></li>
                </ul>
            </nav>
            <section class="mobile-nav">
                <nav>
                    <div class="navbar">
                        <div class="container nav-container">
                            <input class="checkbox" type="checkbox" name="" id="" />
                            <div class="hamburger-lines">
                                <span class="line line1"></span>
                                <span class="line line2"></span>
                                <span class="line line3"></span>
                            </div>
                            <div class="menu-items">
                                <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
                            </div>
                        </div>
                    </div>
                </nav>
            </section>
        </section>
        <script>document.addEventListener("touchstart", function() {}, true);</script>
    </header>
    <main>