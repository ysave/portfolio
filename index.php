<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio | Nick </title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="favicon" href="favicon.ico" />
</head>
<body>
<header>
    <div class="nav container">
        <a href="#" class="logo">Nick.</a>
        <ul class="navbar">
            <li><a href="#home" class="nav-link">Home</a> </li>
            <li><a href="#about" class="nav-link">About</a> </li>
            <li><a href="#projects" class="nav-link">Projects</a> </li>
            <li><a href="#skills" class="nav-link">Skills</a> </li>
            <li><a href="#contact" class="nav-link">Contact</a> </li>
        </ul>
        <div class="menu-icon">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </div>
</header>
<section class="home container" id="home">
    <div class="home-content">
        <div class="home-img">
            <!-- Image -->
        </div>
        <div class="home-text">
            <h3>Hello</h3>
            <h2>I'm <span class="color">Nick</span> </h2>
            <p>
                ....
            </p>
        </div>
    </div>
</section>
<section class="about container" id="about">
    <h2 class="heading">About</h2>
    <div class="about-content">
        <div class="about-data">
            <span>About Me</span>
            <h2>Computer Scientist</h2>
        </div>
        <div class="about-text">
            <p>Hello. My Name is Nick.</p>
            <p>I'm a Swiss Student, making an apprenticeship as a computer scientist in Zürich.</p>
            <p>My main program languages are Java and JavaScript, but im open to learn new languages.</p>
        </div>
    </div>
</section>
<section class="projects container" id="projects">
    <h2 class="heading">Projects</h2>
    <div class="projects-content">
        <div class="project-box">
            <!--img -->
            <div class="overlay">
                <h2>Monopoly</h2>
                <div class="links">
                    <a href="https://github.com/nickforster/monopoly">
                        <i class='bx bxl-github'></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="project-box">
            <img src="img/ecommerce.PNG" alt="picture of the school-project website about shopping" class="project-img">
            <div class="overlay">
                <h2>School-project<br>about Shopping</h2>
                <div class="links">
                    <a href="https://online-vs-normal.vercel.app/">
                        <i class="bx bx-link-alt"></i>
                    </a>
                    <a href="https://github.com/ysave/Wirtschaftprojekt">
                        <i class='bx bxl-github'></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="project-box">
            <img src="img/flagquiz.png" alt="picture of the school-project website about shopping" class="project-img">
            <div class="overlay">
                <h2>Flag Quiz</h2>
                <div class="links">
                    <a href="https://worldflag-quiz.netlify.app/">
                        <i class="bx bx-link-alt"></i>
                    </a>
                    <a href="https://github.com/ysave/flag-quiz">
                        <i class='bx bxl-github'></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="project-box">
            <img src="img/wordle.png" alt="picture of the school-project website about shopping" class="project-img">
            <div class="overlay">
                <h2>Wordle</h2>
                <div class="links">
                    <a href="https://save-wordle.netlify.app/">
                        <i class="bx bx-link-alt"></i>
                    </a>
                    <a href="https://github.com/ysave/Wordle">
                        <i class='bx bxl-github'></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="project-box">
            <img src="img/ecommerce.PNG" alt="picture of the school-project website about shopping" class="project-img">
            <div class="overlay">
                <h2>School-project <br>about Shopping</h2>
                <div class="links">
                    <a href="https://online-vs-normal.vercel.app/">
                        <i class="bx bx-link-alt"></i>
                    </a>
                    <a href="https://github.com/ysave/Wirtschaftprojekt">
                        <i class='bx bxl-github'></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="project-box">
            <img src="img/GitHub-logo.jpg" alt="picture of GitHub Logo" class="project-img">
            <div class="overlay">
                <h2>More...</h2>
                <a href="https://github.com/ysave">
                    <i class="bx bxl-github"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="skills container" id="skills">
    <h2 class="heading">Skills</h2>
    <div class="skills-content">
        <div class="skill">
            <div class="skill-name">Java</div>
            <div class="skill-bar">
                <div class="skill-per" per="90%" style="max-width: 85%;"></div>
            </div>
        </div>
        <div class="skill">
            <div class="skill-name">JavaScript</div>
            <div class="skill-bar">
                <div class="skill-per" per="80%" style="max-width: 80%;"></div>
            </div>
        </div>
        <div class="skill">
            <div class="skill-name">Python</div>
            <div class="skill-bar">
                <div class="skill-per" per="60%" style="max-width: 60%;"></div>
            </div>
        </div>
        <div class="skill">
            <div class="skill-name">HTML</div>
            <div class="skill-bar">
                <div class="skill-per" per="75%" style="max-width: 75%;"></div>
            </div>
        </div>
        <div class="skill">
            <div class="skill-name">CSS</div>
            <div class="skill-bar">
                <div class="skill-per" per="70%" style="max-width: 70%;"></div>
            </div>
        </div>
        <div class="skill">
            <div class="skill-name">MySQL</div>
            <div class="skill-bar">
                <div class="skill-per" per="65%" style="max-width: 65%;"></div>
            </div>
        </div>
    </div>
</section>
<section class="contact container" id="contact">
    <?php
    $firstnameErr = $emailErr = $messageErr = '';
    $firstname = $email = $message = '';

    // validation when the submit button is pressed
    if (isset($_POST['submit'])) {
        $valid = true;
        $firstname = test_input($_POST['name']);
        $email = test_input($_POST['email']);
        $message = test_input($_POST['message']);


        if (strlen($firstname) >= 40 || strlen($firstname) <= 2) {
            $valid = false;
            $firstnameErr = 'Please enter a correct Name';
        }
        if (strlen($message) <= 5) {
            $valid = false;
            $messageErr = 'Please enter a correct Message';
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $valid = false;
            $emailErr = 'Please enter a correct E-Mail';
        }

        // sending the mail when everything is valid
    if ($valid) {
        $finalMessage = $firstname.' '.$email.'<br>'.$message;
        mail('#', 'Message from Portfolio', $finalMessage);
        $firstnameErr = $emailErr = $messageErr = '';
        $firstname = $email = $message = '';
        ?> <script>history.pushState({}, "", "")</script> <?php
    }
    ?>
        <script>window.location += '#contact' </script>
        <?php
    }

    function test_input($data): string
    {
        $data = trim($data);
        $data = stripslashes($data);
        return htmlspecialchars($data);
    }
    ?>
    <h2 class="heading">Contact</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="contact-form" id="contact-form">
        <span>Contact Me</span>
        <input type="text" name="name" placeholder="Your Name" class="name" id="name" required>
        <input type="email" name="email" id="email" placeholder="example@example.ch" class="email" required>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Text here ...." class="message" required></textarea>
        <input type="submit" value="Send" id="submit" name="submit" class="send-btn">
    </form>
</section>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>