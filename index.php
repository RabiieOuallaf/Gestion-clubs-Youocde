<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&family=IM+Fell+English+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./frontend/Sass/main.css">
    <title>YouCode clubs</title>
</head>
<body class="index_body">

    <!-- header start -->
    <header id="header_container">
        <div class="header_container" >
            <div class="logo">
                <img src="./frontend/Sass/images/logo.png" alt="" width="200px">
            </div>
            <nav class="nav_bar">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#club">Clubs</a></li>
                    <li><a href="#join us">Join Us</a></li>
                    <li><a href="#contact us">Contact Us</a></li>
                </ul>
            </nav>
            <div class="sign_in">
                <button class="sign_btn" onclick="document.location.href = './login.php'">Sign in</button>
            </div>
        </div>
    </header>
    <!-- header end -->
    
    <!-- slider home start -->
    <main class="article" id="home">

        <div class="article_container">

            <div class="background_img"><img src="./frontend/Sass/images/youcodefamily.png" alt=""></div>

            <div class="content">
                <div class="slide_icon"><i class="fa-solid fa-arrow-left"></i></div>
                <div class="club_img">
                    <img src="./frontend/Sass/images/sport 1.png" alt="" width="400px">
                    <div class="info_img">By <span>Unknown</span></div>
                </div>
                <div class="text_content">
                    <h2><span>Y</span>ou<span>C</span>ode Clubs</h2>
                    <p>lorem ipsum est, en imprimerie, une suite de mots sans signification 
                        utilisée à titre provisoire pour calibrer une mise en page, 
                        le texte définitif venant remplacer le faux-texte dès 
                        qu'il est prêt ou que la mise en page est achevée. 
                    </p>
                    <div class="see_more_btn">
                        <button>See More</button>
                    </div>
                </div>
                <div class="slide_icon"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
            <div class="slider_btn">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>

        </div>

    </main>
    <!-- slide home end -->


    <!-- body -->
    <div class="container" id="club">
        <!-- Clubs headder --> 
        <div class="clubs-header">
            <h1>Clubs</h1>
        </div>

        <!-- Clubs content -->
        <div class="Clubs-conent">
            <!-- Clubs Menu -->
            <div class="Clubs-content-menu">
                
                <h2>Wich <span>club</span> you are intrested in ?</h2>
                
                <div class="Menu-buttons">
                    <button id="Menu-btn" value="fotball">Football club</button>
                    <button id="Menu-btn" value="design">Design club</button>
                    <button id="Menu-btn" value="robotique">Robotique</button>
                    <button id="Menu-btn" value="gaming">Gaming club</button>
                    <button id="Menu-btn" value="hack">Hack club</button>
                    <button id="Menu-btn" value="events">Events club</button>
                    <button id="Menu-btn" value="social">Social Club</button>
                    <button id="Menu-btn" value="night">Night club</button>
                </div>

                <div class="Menu-select">
                        <select id="select" class="select">
                            <option>Football Club</option>
                            <option>Design Club</option>
                            <option>Robotique Club</option>
                            <option>Gaming Club</option>
                            <option>Hack Club</option>
                            <option>Events Club</option>
                            <option>Social Club</option>
                            <option>Night Club</option>
                        </select> 
                </div>
            </div>

            <!-- Clubs preview categorie start --> 
            <section class="Clubs-content-preview">
                <div class="Clubs-categories">
                    <input type="search" placeholder="Recherch un club" id="search"></input>
                    <i class="fa-solid fa-search Searchicon"></i>

                    <div class="Clubs-checkbox">
                        <h2><span>C</span>aregories</h2>
                        <div class="Clubs-checkbox-child">
                            <label>Art</label>
                            <input type="checkbox">
                        </div>
                        <div class="Clubs-checkbox-child">
                            <label>Sport</label>
                            <input type="checkbox">
                        </div>
                        <div class="Clubs-checkbox-child">
                            <label>Robotique</label>
                            <input type="checkbox">
                        </div>
                        <div class="Clubs-checkbox-child">
                            <label>Social</label>
                            <input type="checkbox">
                        </div>
                        <div class="Clubs-checkbox-child">
                            <label>Enviremoent</label>
                            <input type="checkbox">
                            
                        </div>
                    </div>
                </div>

                <!-- club section start -->
                <div class="Clubs-sections">
                    <!-- Art clubs --> 
                    <h2 class="Club-headers">Art Clubs</h2>
                    <div class="Art-clubs">
                        <div class="Art-clubs-single before-singl">
                            <img src="./frontend/Sass/images/art 3.png" alt="art">

                            <!-- First art club --> 
                            <div class="Club-content">
                                <h3>Eye catching</h3>
                                <p>Created by : <span>....</span></p>
                                <p>Location : <span>....</span></p>
                                <p>Places left : <span>....</span></p>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi aperiam, <br>
                                    optio iusto iste ratione fuga perferendis corporis assumenda est in dolorum saepe, <br>
                                    
                                </p>
                                <button>Register</button> 
                            </div>
                        </div>
                            <!-- Second Art club --> 
                        <div class="Art-clubs-single">
                            <img src="./frontend/Sass/images/art1.png" alt="art">
                            <div class="Club-content">
                                <h3>Eye Awesome</h3>
                                <p>Created by : <span>....</span></p>
                                <p>Location : <span>....</span></p>
                                <p>Places left : <span>....</span></p>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi aperiam, <br>
                                    optio iusto iste ratione fuga perferendis corporis assumenda est in dolorum saepe, <br>
                                    
                                </p>
                                <button>Register</button> 
                            </div>
                        </div>

                            <!-- Third Art club -->
                        <div class="Art-clubs-single">    
                            <img src="./frontend/Sass/images/art 2.png" alt="art">
                            <div class="Club-content">
                                <h3>Design art</h3>
                                <p>Created by : <span>....</span></p>
                                <p>Location : <span>....</span></p>
                                <p>Places left : <span>....</span></p>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi aperiam, <br>
                                    optio iusto iste ratione fuga perferendis corporis assumenda est in dolorum saepe, <br>
                                    
                                </p>
                                <button>Register</button> 
                            </div>
                        </div>
                    </div>

                    <!-- Sport clubs -->
                    <h2 class="Club-headers">Sport Clubs</h2>
                    <div class="Sport-clubs">
                        <div class="Sport-clubs-single">
                            <img src="./frontend/Sass/images/sport 2.png" alt="art">

                            <!-- First sport club --> 
                            <div class="Club-content">
                                <h3>Eye catching</h3>
                                <p>Created by : <span>....</span></p>
                                <p>Location : <span>....</span></p>
                                <p>Places left : <span>....</span></p>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi aperiam, <br>
                                    optio iusto iste ratione fuga perferendis corporis assumenda est in dolorum saepe, <br>
                                    
                                </p>
                                <button>Register</button> 
                            </div>
                        </div>

                            <!-- Second Sport club --> 
                        <div class="Sport-clubs-single">

                            <img src="./frontend/Sass/images/sport 3.png" alt="art">
                            <div class="Club-content">
                                <h3>Eye catching</h3>
                                <p>Created by : <span>....</span></p>
                                <p>Location : <span>....</span></p>

                                <p>Places left : <span>....</span></p>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi aperiam, <br>
                                    optio iusto iste ratione fuga perferendis corporis assumenda est in dolorum saepe, <br>
                                    

                                </p>
                                <button>Register</button> 
                            </div>
                        </div>

                            <!-- Third Art club -->
                        <div class="Sport-clubs-single">    
                            <img src="./frontend/Sass/images/sport 1.png" alt="art">
                            <div class="Club-content">
                                <h3>Eye catching</h3>
                                <p>Created by : <span>....</span></p>
                                <p>Location : <span>....</span></p>
                                <p>Places left : <span>....</span></p>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi aperiam, <br>
                                    optio iusto iste ratione fuga perferendis corporis assumenda est in dolorum saepe, <br>
                                    
                                </p>
                                <button>Register</button> 
                            </div>
                        </div>
                    </div>

                    <!-- IT clubs -->
                    <h2 class="Club-headers">IT Clubs</h2>
                    <div class="IT-clubs">
                        <div class="IT-clubs-single">
                            <img src="./frontend/Sass/images/sport 2.png" alt="art">

                            <!-- First IT club --> 
                            <div class="Club-content">
                                <h3>Eye catching</h3>
                                <p>Created by : <span>....</span></p>
                                <p>Location : <span>....</span></p>
                                <p>Places left : <span>....</span></p>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi aperiam, <br>
                                    optio iusto iste ratione fuga perferendis corporis assumenda est in dolorum saepe, <br>
                                    
                                </p>
                                <button>Register</button> 
                            </div>
                        </div>

                        <!-- Second IT club --> 
                        <div class="IT-clubs-single">
                            <img src="./frontend/Sass/images/sport 1.png" alt="art">
                            <div class="Club-content">
                                <h3>Eye catching</h3>
                                <p>Created by : <span>....</span></p>
                                <p>Location : <span>....</span></p>
                                <p>Places left : <span>....</span></p>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi aperiam, <br>
                                    optio iusto iste ratione fuga perferendis corporis assumenda est in dolorum saepe, <br>
                                    
                                </p>
                                <button>Register</button> 
                            </div>
                        </div>

                            <!-- Third IT club -->
                        <div class="IT-clubs-single">    
                            <img src="./frontend/Sass/images/sport 3.png" alt="art">
                            <div class="line"></div>
                            <div class="Club-content">
                                <h3>Eye catching</h3>
                                <p>Created by : <span>....</span></p>
                                <p>Location : <span>....</span></p>
                                <p>Places left : <span>....</span></p>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi aperiam, <br>
                                    optio iusto iste ratione fuga perferendis corporis assumenda est in dolorum saepe, <br>
                                    
                                </p>
                                <button>Register</button> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- club section end  -->
            </section>
            <!-- clubs preview categorie end -->
        </div>
    </div>
    <!-- club categorie end  -->
    
    <!-- join us start -->
    <section class="join_us" id="join us">
        <div class="join_container">
            <div class="join_title">
                <h2>Join Us</h2>
            </div>
            <div class="how_to_join">
                <h2>How to Create your own <span>club</span> ?</h2>
                <div class="box_btn">
                    <div class="create_club" onclick="document.location.href = './login.php'">
                        <img src="./frontend/Sass/images/🦆 icon _edit_.png" alt="">
                        <strong>Create a club</strong>
                        <p>You can create you own club by clicking at this button or click here.</p>
                    </div>
                    <div class="join_club" onclick="document.location.href = './login.php'">
                        <img src="./frontendSass/images/🦆 icon _log out_.png" alt="">
                        <strong>Join a club</strong>
                        <p>You can create you own club by clicking at this button or click here.</p>
                    </div>
                </div>
            </div>
            <div class="animate_ball">
                <!-- <img src="./Sass/images/Robot-PNG-Image-HD.png" alt="" width="230px"> -->
                <div class="wonderfull">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    </p>
                    <!-- <button></button> -->
                </div>
            </div>
        </div>
    </section>
    <!-- join us end -->

    <hr>

    <!-- contact us start -->
    <section class="contact_us" id="contact us">
        <div class="contact_container">
            <div class="contact_title">
                <h2>Contact Us</h2>
            </div>
            <div class="contact_sub_title">
                <h2><span>Do</span> you have any problem ?</h2>
                <div class="form">
                    <form action="">
                        <div>
                            <label for="name">Name</label> <br>
                            <input type="text" name="name" id="name" placeholder="Jhon Smith">
                        </div>
                        <div>
                            <label for="email">Email</label> <br>
                            <input type="email" name="email" id="email" placeholder="email@gmail.com">
                        </div>
                        <div>
                            <label for="message">Message</label> <br>
                            <textarea name="message" id="message" cols="30" rows="5" placeholder="Enter your message here..."></textarea>
                        </div>
                        <div class="btn">
                            <input type="submit" value="Send" class="submit_btn">
                        </div>
                    </form>
                </div>
            </div>
            <div class="contact_img">
                <img src="./frontend/Sass/images/contact.png" alt="" width="100%">
            </div>
        </div>
    </section>
    <!-- contact us end -->


    <!-- footer start -->
    <footer>
        <div class="footer_container">
            <div class="tel">
                <p>+81 123-5678-9101</p>
                <p>Privacy Policy</p>
            </div>
            <div class="copyright">
                <img src="./frontend/Sass/images/logo.png" alt="" width="50px">
                <p>&copy;Copyright. Designed And Developed By Anas Rabie Oussama</p>
            </div>
            <div class="social_media">
                <div class="media">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
                
            </div>
        </div>
    </footer>
    <!-- footer end -->



    
</body>
    <script src="https://kit.fontawesome.com/28113ccba1.js" crossorigin="anonymous"></script>
    <script src="./frontend/js/Club.js" ></script>
    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
                document.getElementById("header_container").style.cssText = "padding: 1rem 10rem; background-color: rgba(34 38 43 /1)";

            } else {
                document.getElementById("header_container").style.cssText = "padding:0; background-color: rgba(34 38 43 /.7)";
            }
        }
    </script>
</html>