<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./frontend/Sass/header.scss">
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&family=IM+Fell+English+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&family=Itim&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script defer src="js/header.js"></script>
    <title>YouCode Clubs</title>
</head>

<body>
    <header class="container">


        <nav class="nav-bar" id="nav-Bar">
            <span class="menu-icon">
                <img class="burger" src="./frontend/Sass/images/menu.png" alt="burger">
            </span>
            <div class="nav-logo">
                <a href="./header.php"><img src="./frontend/Sass/images/logo.png" alt="YouCode Clubs"></a>
            </div>

            <ul class="nav-list">

                <li><a href="./header.php">Home</a></li>
                <li><a href="#clubs">Clubs</a></li>
                <li><a href="#join us">join Us</a></li>
                <li><a href="#contact">Contact</a></li>
                <span class="close"><img src="./frontend/Sass/images/close.png" alt=""></span>

            </ul>
            <div class="nav-sing">

                <button class="sing">Sing In</button>

            </div>

        </nav>

    </header>
    <main class="article">
        <div class="background">
            <img class="cover" src="./frontend/Sass/images/youcodefamily.png" alt="YouCode Familly">

            <div class="inside-background">
                <div class="left">
                    <i class="fa-solid fa-arrow-left"></i>

                </div>
                <div class="club-article">
                    <img src="./frontend/Sass/images/sport 1.png" alt="football">
                    <h2 class="text-1">by Team</h2>
                </div>
                <div class="context-background">
                    <h1 class="text-background"><span class="lettre-1">Y</span>OU<span class="lettre-2">C</span>ODE <span class="lettre-3"> C</span>LUBS </h1>
                    <p class="article-clubs1">Lorem ipsum dolor, sit amet consectetur adipisicing <br>elit. Ad excepturi iste earum libero! Eos reiciendis animi aperiam cumque corporis sit,<br> deserunt pariatur saepe fuga, necessitatibus est, nihil dicta eligendi reprehenderit.</p>
                    <a class="see-mr" href="#clubs"><button>See more</button></a>
                </div>
                <div class="right">
                    <img src="./frontend/Sass/images/right flesh.png" alt="right button">
                </div>

            </div>
            <div class="slider">
                <div class="selected"></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

    </main>
    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
                document.getElementById("nav-Bar").style.cssText = "padding: 1rem 10rem; background-color: rgba(34 38 43 /1)";

            } else {
                document.getElementById("nav-Bar").style.cssText = "padding:0; background-color: rgba(34 38 43 /.7)";
            }
        }
    </script>
</body>

</html>