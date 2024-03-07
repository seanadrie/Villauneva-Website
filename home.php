<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== LINE ICONS ===============-->
    <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="style.css">
    
<style>
    .nav__item.logout {
  margin-left: 100px;
}
    </style>
    <title>Sean Villanueva - Personal Website</title>
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
        <!-- nav -->
        <nav class="nav container padd-15">
            <!-- nav logo -->
            <a href="#home" class="nav-logo">
                <h2>Sean</h2>
            </a>
            <!-- nav menu -->
            <div class="nav-menu" id="nav-menu">
                <!-- nav list -->
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#home" class="nav-link active-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#skills" class="nav-link">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a href="#experience" class="nav-link">Education</a>
                    </li>
                  
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                    <li class="nav__item logout">
                        <a href="index.php" class="nav-link">Logout</a>
                    </li>
                </ul>
                
                    
                <!-- nav close -->
                <div class="nav-close" id="nav-close">
                    <i class="lni lni-close"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--=============== MAIN ===============-->
    <main class="main-content">
        <!--=============== HOME ===============-->
        <section class="home" id="home">
            <div class="container">
                <!-- intro -->
                <div class="intro">
                    <!-- avatar image -->
                    <img src="mebg.jpg" alt="sean">
                    <!-- info -->
                    <h1>Sean Villanueva</h1>
                    <span>I'm a <span class="info-text">BSIT - MI Student</span></span>
                    <!-- social icons -->
                    <ul class="social-icons">
                        <li><a href="https://www.instagram.com/seanfrnc/"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="https://www.facebook.com/SeanAdrie" target="_blank"><i class="lni lni-facebook-original"></i></a></li>
                        <li><a href="https://github.com/seanadrie" target="_blank"><i class="lni lni-github-original"></i></a></li>                        
                    </ul>
                    
                
                </div>
            </div>
        </section>
        <!--=============== About ===============-->
        <section class="about section" id="about">
            <div class="container">
                <!-- section title -->
                <h2 class="section-title padd-15">About Me</h2>
                <div class="row">
                    <div class="about-img padd-15">
                        <!-- avatar img -->
                        <img src="avatar-2.svg" alt="">
                    </div>
                    <div class="about-content padd-15">
                        <div class="rounded">
                            <div class="row">
                                <div class="about-text padd-15">
                                    <!-- about text -->
                                    <p>I am Sean Adrie Villanueva, currently pursuing my BSIT-MI degree at National University Fairview, Philippines. As a web developer, 
                                        I specialize in coding and have a strong foundation in languages like Java. With a keen interest in website design and development, 
                                        I bring valuable experience in crafting dynamic and responsive websites. Alongside my proficiency in coding, 
                                        I am adept at utilizing various technologies to create effective and efficient online solutions.
                                    </p>
                                    <div>
                                        <a href="Sean.pdf" class="btn btn-default" download="Sean_CV.pdf">Download CV</a>
                                    </div>
                                </div>
                                <div class="skills padd-15">
                                    <div class="row">
                                        <!-- skill item -->
                                        <div class="skill-item">
                                            <h4>Development</h4>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 95%; background: rgb(255,209,92);"></div>
                                                <div class="skill-percent">95%</div>
                                            </div>
                                        </div>
                                        <!-- skill item -->
                                        <div class="skill-item">
                                            <h4>Programming</h4>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 75%; background: rgb(255,76,96);"></div>
                                                <div class="skill-percent">75%</div>
                                            </div>
                                        </div>
                                        <!-- skill item -->
                                        <div class="skill-item">
                                            <h4>UI/UX design</h4>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 85%; background: rgb(108,108,229);"></div>
                                                <div class="skill-percent">85%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        <!--=============== Services ===============-->
        <section class="services section" id="skills">
            <div class="container">
                <!-- section title -->
                <h2 class="section-title padd-15">Skills</h2>
                <div class="row">
                    <!-- service item -->
                    <div class="service-item padd-15">
                        <div class="service-item-inner" style="background: rgb(108,108,229);">
                            <img src="service-1.svg" alt="">
                            <h3>UI/UX design</h3>
                            <p>I learn to do UI/UX design as part of my university curriculum, where I acquire knowledge and skills to create engaging and user-friendly digital experiences. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt sapiente dolore.</p>
                        </div>
                    </div>
                    <!-- service item -->
                    <div class="service-item padd-15">
                        <div class="service-item-inner" style="background: rgb(249,215,76);">
                            <img src="service-2.svg" alt="">
                            <h3>Web Development</h3>
                            <p>I am currently studying web development as part of my university program, where I explore the intricacies of creating dynamic and responsive websites. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt sapiente dolore.</p>
                        </div>
                    </div>
                    <!-- service item -->
                    <div class="service-item padd-15">
                        <div class="service-item-inner" style="background: rgb(249,123,139);">
                            <img src="assets/img/service-3.svg" alt="">
                            <h3>Photography</h3>
                            <p>I have a deep passion for photography, and my journey involves self-learning and gaining experience in capturing moments and expressing stories through my lens.</p>
                        </div>
                    </div>
                </div>
                <div class="text padd-15">
                    <p>Looking for a custom job? <a href="#contact">Click here</a> to contact me! 👋</p>
                </div>
            </div>
        </section>
        <!--=============== Experience ===============-->
        <section class="section" id="experience">
            <div class="container">
                <!-- section title -->
                <h2 class="section-title padd-15">Education</h2>
                <div class="row">
                    <!-- education -->
                    <div class="education padd-15">
                        <div class="row">
                            <div class="timeline-box">
                                <div class="timeline">
                                    <!-- timeline item -->
                                    <div class="timeline-item">
                                        <i class="lni lni-graduation timeline-icon"></i>
                                        <h3 class="timeline-date">
                                            <i class="lni lni-calendar"></i> 2021 - present
                                        </h3>
                                        <h3 class="timeline-title">National University</h3>
                                        <p class="timeline-text">SM Fairview Complex, Quirino Hwy, corner Regalado Hwy, Quezon City, Metro Manila
                                        </p>
                                    </div>
                                     <!-- timeline item -->
                                     <div class="timeline-item">
                                        <i class="lni lni-graduation timeline-icon"></i>
                                        <h3 class="timeline-date">
                                            <i class="lni lni-calendar"></i> 2015 - 2021
                                        </h3>
                                        <h3 class="timeline-title">Mater Carmeli School Of Novaliches</h3>
                                        <p class="timeline-text">Fr. Francisco Palau St., Sacred Heart Village, Novaliches, Quezon City, Metro Manila, Philippines</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                   
        </section>
       
        
        <!--=============== Contact ===============-->
        <section class="contact section" id="contact">
            <div class="container">
                <!-- section title -->
                <h2 class="section-title padd-15">Contact Me</h2>
                <div class="row">
                    <!-- contact box -->
                    <div class="contact-box padd-15">
                        <div class="contact-data">
                            <!-- contact information -->
                            <div class="contact-information">
                                <h3 class="contact-subtitle">Call Me</h3>
                                <span class="contact-description">
                                    <i class="lni lni-phone contact-icon"></i>
                                    +63 9216591365

                                </span>
                            </div>
                             <!-- contact information -->
                             <div class="contact-information">
                                <h3 class="contact-subtitle">Write us by mail</h3>
                                <span class="contact-description">
                                    <i class="lni lni-user contact-icon"></i>
                                    seanvillanueva30@yahoo.com
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- contact form -->
                    <form action="" class="contact-form padd-15">
                        <div class="contact-inputs">
                            <!-- contact content -->
                            <div class="contact-content">
                                <input type="email" class="contact-input">
                                <label for="" class="contact-label">Email</label>
                                <span></span>
                            </div>
                            <!-- contact content -->
                            <div class="contact-content">
                                <input type="text" class="contact-input">
                                <label for="" class="contact-label">Subject</label>
                                <span></span>
                            </div>
                            <!-- contact content -->
                            <div class="contact-content contact-area">
                                <textarea name="" id="" cols="30" rows="10" class="contact-input"></textarea>
                                <label for="" class="contact-label">Message</label>
                                <span></span>
                            </div>
                        </div>
                        <a href="#" class="btn btn-default">Send Message</a>
                    </form>
                </div>
            </div>
        </section>
        <!--=============== Footer ===============-->
        <footer class="footer">
            <div class="container">
                <div class="footer-text padd-15">
                    <p>&copy; SEANVILLANUEVA <script>document.write(new Date().getFullYear())</script></p>
                </div>
            </div>
        </footer>
    </main>
    

    <!--=============== SWIPER JS ===============-->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    
    <!--=============== JS ===============-->
    <script src="main.js"></script>
</body>
</html>
