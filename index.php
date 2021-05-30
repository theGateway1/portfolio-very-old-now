<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mohit's Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">My Profile<span></span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Teams</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
      <div class="max-width">
          <div class="row">
            <div class="home-content">
                <div class="text-1">Hello There!</div>
                <div class="text-2">I'm Mohit</div>
                <div class="text-3">I'm a <span class="typing"></span></div>
                <a href="#contact">Contact Me</a>
            </div>
          </div>
      </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <span class="imageHolder">
                    <img src="images/pic2.png" alt="" />
                    <span class="caption"><br>Hi, it's Me! 😎</span>
                    </span>
                    <!-- <img src="images/pic2.png" alt=""> -->
                </div>
                <div class="column right">
                    <div class="text">I'm Mohit and I'm a <span class="typing-2"></span></div>
                    <p>I am a pre-final year B.tech CSE student at ABES EC. I love development, that's what I do all day. 
                        <br />For a year, I have worked as an ethical hacker in the field of cybersecurity and I am a Certified Ethical Hacker (CEH v10).</p>
                    <a href="resume.pdf">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">What can I do?</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                    <i class="fab fa-react"></i>
                        <div class="text">Frontend Development</div>
                        <p>I develop web application frontend using React and Flutter</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fab fa-python"></i>
                        <div class="text">Backend Development</div>
                        <p>I develop web application backend using Django</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <span><i class="fab fa-apple"></i></span>
                        
                        <span class="text" style=";font-size:15px;">&nbsp;  &nbsp;</span> 
                        <span><i class="fas fa-times" style="font-size:19px;padding-bottom:12px"></i></i></span>
                        <span class="text" style=";font-size:15px;">&nbsp;  &nbsp;</span> 
                        <span> <i class="fab fa-android"></i></span>
                        <div class="text">Mobile <br />App Development</div>
                        <p>I develop cross-platform mobile applications using Flutter</p>
                        
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>I develop fullstack mobile and web applications, that not only have great look n feel, but also have amazing performance.</p>
                    <a href="#teams">View Projects</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>Flutter</span>
                            <span>93%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Django</span>
                            <span>85%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>90%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>React JS</span>
                            <span>87%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>C++</span>
                            <span>88%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Communication</span>
                            <span>94%</span>
                        </div>
                        <div class="line comm"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Personal Projects</h2>
            <div class="carousel owl-carousel">
            
                <div class="card" >
                    <div class="box">
                        <!-- <img src="images/hand.jpg" alt=""> -->
                        <div class="text"><a href="https://github.com/codedog001/sign_language_translator_ml_flutter" style="color:rgb(255, 234, 45)" target="_blank" rel="noopener noreferrer">Sign Language Translator</a></div>
                        <p><a href="https://github.com/codedog001/sign_language_translator_ml_flutter" style="color:white">A mobile application that translates American Sign Language into English in realtime. It works without the presence of an internet connection, performing on-device machine learining.</a></p>
                    </div>
                    
                </div>
                <div class="card" >
                    <div class="box">
                        <!-- <img src="images/profile-2.jpeg" alt=""> -->
                        <div class="text"><a href="https://github.com/codedog001/sign_language_translator_ml_flutter" style="color:rgb(255, 234, 45)" target="_blank" rel="noopener noreferrer">Coordinates Tagger</a></div>
                        <p><a href="https://github.com/codedog001/flutter_MySQL_app" style="color:white">A mobile application that tags the image with current location coordinates, and stores them in a Firebase storage, the link of these images is stored in a MySQL database, hosted on an Ubuntu server.</a></p>
                    </div>
                </div>
                <div class="card" >
                    <div class="box">
                        <!-- <img src="images/profile-2.jpeg" alt=""> -->
                        <div class="text"><a href="https://github.com/codedog001/sign_language_translator_ml_flutter" style="color:rgb(255, 234, 45)" target="_blank" rel="noopener noreferrer">Today's Tiffin</a></div>
                        <p><a href="https://github.com/codedog001/flutter_MySQL_app" style="color:white">A mobile application created for Om Sai tiffin service. It is available for evryone who is registered with their service, it shows menu that is updated on daily basis, a push notification is delivered in case of delay.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <!-- <form
                action="https://formspree.io/f/meqvgzqa"
                method="POST"
            >
                <label>
                    Your email:
                    <input type="email" name="_replyto">
                </label>
                <label>
                    Your message:
                    <textarea name="message"></textarea>
                </label>

                your other form fields go here

                <button type="submit">Send</button>
        </form> -->
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Am I the right fit for your team? <br /> If yes, then contact me!</p>
                    <div class="icons">
                        <div class="row">
                        <i class="fab fa-github"></i>
                            <div class="info">
                                <div class="head">GitHub</div>
                                <div class="sub-title"><a href="https://github.com/codedog001">View My GitHub Profile</a></div>
                            </div>
                        </div>
                        <div class="row">
                        <i class="fab fa-linkedin"></i>
                            <div class="info">
                                <div class="head">LinkedIn</div>
                                <div class="sub-title"><a href="https://www.linkedin.com/in/mohit-jain0901/">View My LinkedIn Profile</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">mohit.jain9924@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="https://formspree.io/f/meqvgzqa" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="_name" class="fullname" placeholder="Name">
                            </div>
                            <div class="field email">
                                <input type="email" name="_replyto" class="email-input" placeholder="Email" >
                            </div>
                        </div>
                        <!-- <div class="field"> -->
                            <input type="hidden" value="Message From Portfolio!" name="_subject">
                        <!-- </div> -->
                        <div class="field textarea">
                            <textarea name="message" class="message" cols="30" rows="10" placeholder="Message.."></textarea>
                        </div>
                        <div class="button-area">
                            <button class="send-msg" type="submit" name="send">Send message</button>
                            <div class="error-box"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </section>

    <!-- footer section start -->
    <footer>
        <span>Thanks for visiting my portfolio, have a great day!
    </footer>

    <script src="script.js"></script>
</body>
</html>
