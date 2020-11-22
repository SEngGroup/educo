<?php //include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>educo | About Us</title>
        <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Suez+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body class="page-color">
        <?php if (isset($_SESSION["Uname"])): ?>
            <header>
                <div class="navbar">
  					<h3>educo</h3>
                    <a href="index.php">Forums</a>
                    <a href="Orders.php">Chat</a>
					<a href="gallery.php">About us</a>
					<a href="aboutus.php" style="margin-right: 350px;">About Us</a>
					<div class="dropdown">
                        <button class="dropbtn"><?php echo $_SESSION['Uname']; ?><i class="fa fa-caret-down"></i></button>
                        <div class="dropdown-content">
                            <a href="profile.php">My Profile</a>
                            <a href="index.php?logout='1'">Logout</a>
                        </div> 
                    </div> 
                </div>
            </header>
        <?php else: ?>
            <header>
                <div class="navbar">
  					<h3>educo</h3>
					<a href="index.php">Forums</a>
					<a href="gallery.php">Chat</a>
					<a href="aboutus.php">About Us</a>
					<a href="login.php" >Log in</a> 
				</div>
            </header>
        <?php endif ?>
        <main>
            <h1 style="text-align: center; font-family: 'Anton', sans-serif; margin: 30px auto 15px auto;">About Us</h1>
            <div class ="paragraphs">
                <div class = "paragraph">
                    <h2>What is Educo</h2>
                    <p>
                    Educo was created in the year 2020 as part of a school based project. It is a
                    community application that promotes collaboration between students and tutors.
                    It is intended to improve the learning experience for both the tutors and the 
                    learners.

                    </p>
                </div>

                <div class = "paragraph">
                    <h2>Our objectives</h2>
                    <p>
                 
                     To offer a different approach to learning
                <br>     To provide a global reach of  knowledge to its users at no cost.
                 <br>    It aims at creating an environment that is both friendly and educating where users
                      are free to ask for help without being judged.

                    </p>
                </div>

                
            </div>
            <div class="comm-img">
                <div class="comm-container">
                    <h1 style="text-align: center; color: #add8e6; font-family: 'Kaushan Script', cursive; font-size: 60px; margin: 0px;">educo</h1>
                    <h3 style="font-family: 'Bree Serif', serif; text-align: center; color: white; font-size: 40px; margin: 0px;">We are all about the community</h3>
                    <p style="text-align: center; color: white; margin: 10px;">
                        <a href="http://educo.epizy.com/" style="color: #add8e6; text-decoration: none;">Visit our website</a> and get a feel of what it's like to be part of our great ever growing community.
                    </p>
                </div>
            </div>
           
            </div>
            
        <div class="creator">

        </div >
        <h2>Meet the creators</h2>
        <div class = "Reece">
                    <h4>Rees Alumasa</h4>
                    <img src="avatars.png" alt="Avatar" class="avatar">
                </div>
                
        </div>
        
        <div class = "Reece">
                    <h4>Cyprian Kyalo</h4>
                    <img src="cyprian.jpg" alt="Avatar" class="avatar">
                </div>
                
        </div>
        
        <div class = "Reece">
                    <h4>Kelvin Ziroh</h4>
                    <img src="avatarss.png" alt="Avatar" class="avatar">
                </div>
                
        </div>
        
        <div class = "Reece">
                    <h4>Adrian Mang'are</h4>
                    <img src="adrians.png" alt="Avatar" class="avatar">
                </div>
                
        </div>
       
        <div class = "Reece">
                    <h4>Frank Mutwa</h4>
                    <img src="avatar.png" alt="Avatar" class="avatar">
                </div>
   

                
        </main>
        
        <div style="clear:both;"></div>
        <footer style="margin-top: 0px;">
            <h3 class="footer-logo">educo</h3>
			<div class="footer-subbox">
				<h3 class="footer-headings">Address</h3>
				<p>
					educo,<br>
					Westlands,<br>
					P.O Box 4400 - 00100,<br>
					Nairobi.
				</p>
			</div>
			<div class="footer-subbox">
				<h3 class="footer-headings">Contact Us</h3>
				<p>
					Email: educo@gmail.com<br>
					Tel: +254722375804<br>
					Hotline: 0200-220042
				</p>
				
			</div>
			<div class="footer-subbox">
				<h3 class="footer-headings">Quick Links</h3>
				<p>
					<a href="#">Sign Up</a><br>
					<a href="#">Log In</a><br>
					<a href="#">Forums</a><br>
					<a href="#">About Us</a>
				</p>
            </div>
        </footer>
    </body>
</html>