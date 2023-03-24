<!DOCTYPE html>
<html lang="En">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--box icons-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <!--Boostrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!--custom css-->
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <header class="header">
            <a href="#" class="logo" > Portfolio </a>

            <i class='bx bx-menu' id="menu-icon"></i>

            <nav class="navbar">
                <a href="#home" class="active">Home </a>
                <a href="#about">About </a>
                <a href="#services">Services </a>
                <a href="#portfolio">Portfolio </a>
                <a href="#contact">Contact </a>
            </nav>
        </header>
        <!--home section design-->
        <section class="home" id="home">
            <div class="home-content">
                <h3>Hello, It's Me</h3>
                <h1>Tamesh Jayawardana</h1>
                <h3>And I'm an <span>UNDERGRADUATE</br></span>
                    BSc in Applied Data Science Communication</br></h3>
                    <h3>
                    General Sir John Kotelawala Defence University</h3>
                    <p>

                    </p>
                    <div class="social-media">
                        <a href="https://www.facebook.com/profile.php?id=100008573148744&mibextid=LQQJ4d"><i class='bx bxl-facebook'></i></a>
                        <a href="https://instagram.com/tamesh_jayawardana?igshid=YmMyMTA2M2Y="><i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="https://www.linkedin.com/in/tamesh-jayawardana/"><i class='bx bxl-linkedin'></i></a>
                    </div>
                    <a href="cv.pdf" class="btn">Download CV</a>
            </div>
            <div class="home-img">
                <img src="tamesh.png" class="homeimage" alt="">
            </div>
        </section>
        <!--about section design-->
        <section class="about" id="about">
            <div class="about-img">
                <img src="tamesh.png" class="aboutimage" alt="">
            </div>
            <div class="about-content">
                <h2 class="heading">About <span>Me</span></h2>
                <h3>Undergraduate</h3>
                <p>Hi there! I'm an undergraduate who loves finding patterns and connecting dots: be it ideas from different industries, people from different backgrounds and teams, or applications from different industries. 
                    I have strong technical skills, particularly in databases and machine learning, and an academic background in applied data science and communication.
                </br>I love solving business problems with unique algorithms and communicating complex ideas to business stakeholders.

                </br>   I'm graduating in 2024 and I'm interested in full-time or contract data science or machine learning roles. Please feel free to get in touch with me.</p>
                <a href="#" class="btn2">Read More</a>
            </div>
        </section>

        <!--services section design-->
        <section class="services" id="services">
            <h2 class="heading">Our <span>Services</span></h2>

            <div class="service-container">
                <div class="services-box">
                    <i class='bx bx-code-alt' ></i>
                    <h3>SQL Development</h3>
                    <p>Configure and maintain database servers and processes, including monitoring 
                        of system health and performance, to ensure high levels of performance, availability, 
                        and security. Independently analyze, solve, and correct issues in real time, providing problem 
                        resolution end-to-end.</p>
                    <a href="#" class="btn">Read More</a>
                </div>

                <div class="services-box">
                    <i class='bx bxs-dashboard'></i>
                    <h3>Data Visualization</h3>
                    <p>representation of data through use of common graphics, such as charts, plots,
                         infographics, and even animations. These visual displays of information communicate 
                         complex data relationships and data-driven insights in a way that is easy to understand.</p>
                    <a href="#" class="btn">Read More</a>
                </div>

                <div class="services-box">
                    <i class='bx bx-analyse' ></i>
                    <h3>Data Analyzing</h3>
                    <p>the process of cleaning, analyzing, and visualizing data, 
                        with the goal of discovering valuable insights and driving smarter business decisions.</p>
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>
        </section>
        <!--portfolio section design-->
        <section class="portfolio" id="portfolio">
            <h2 class="heading">Latest <span>Project</span></h2>

            <div class="portfolio-container">
                <div class="portfolio-box">
                    <img src="sdg.png" alt="">
                    <div class="portfolio-layer">
                        <h4>SQL Development and Data Visualization</h4>
                        <p>Exploring and visualizing data using 
                            microsoft powerbi dashboards
                            and sql.
                        </p>
                        <a href="#"><i class='bx bx-link-external' ></i></a>
                    </div>
                </div>
                <div class="portfolio-box">
                    <img src="crime1.png" alt="">
                    <div class="portfolio-layer">
                        <h4>SQL Development </h4>
                        <p>Exploring the data about crimes and devoloping sql databses.
                        </p>
                        <a href="#"><i class='bx bx-link-external' ></i></a>
                    </div>
                </div>
                <div class="portfolio-box">
                    <img src="ARM.png" alt="">
                    <div class="portfolio-layer">
                        <h4>Data Mining</h4>
                        <p>Exploring the data and using the association role mining technique to analyze data
                        </p>
                        <a href="#"><i class='bx bx-link-external' ></i></a>
                    </div>
                </div>
            </div>
        </section>

        <?php

            if (!empty($_POST["submit"])) {
                $Username = $_POST["Username"];
                $Useremail = $_POST["Useremail"];
                $phone = $_POST["phone"];
                $subject = $_POST["subject"];
                $message = $_POST["message"];
                $toEmail = "tameshj0523@gmail.com";

                $mailHeaders = "Name : " . $Username .
                "\r\n Email : " . $Useremail .
                "\r\n Phone : " . $phone .
                "\r\n Message : " . $message . "\r\n";

                if (mail($toEmail, $Username, $mailHeaders)) {
                    $message = "Your Information Received Successfully.";
                }
            }

            ?>
      
        <!--contact section design-->
        <sction class="contact" id="contact">
            <h2 class="heading">Contact <span>Me!</span></h2>

            <form method="post" name="emailform">
                <div class="input-box">
                    <input type="text" name="Username" placeholder="Full Name">
                    <input type="text" name="Useremail" placeholder="Email Address">
                </div>
                <div class="input-box">
                    <input type="number" name="phone" placeholder="Mobile Number">
                    <input type="text" name="subject" placeholder="Email Subject">                 
                </div>
                <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                <input type="submit" name="submit" value="Send Message" class="btn"> 
                  <?php if (!empty($message)) { ?>
                    <strong> <?php echo $message;  ?>  </strong>
                    <?php } ?>
            </form>
        </sction>
    <!-- Contact End -->




  

        <!--footer design-->
        <footer class="footer">
            <div class="footer-text">
                <p>Copyright &copy; 2023 | All Rights Reserved.</p>
            </div>

            <div class="footer-iconTop">
                <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
            </div>
        </footer>

        <!--scroll reveal-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--typed js-->

        <!--custom js-->
        <script src="script.js"></script>
    </body>

</html>