<?php if(!isset($_SESSION)) {session_start();}?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Educo | Home</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="http://educo.epizy.com/educo/assets/img/favicon.ico" />
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Suez+One&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- Hotjar Tracking Code for http://educo.epizy.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2115747,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/47f75fe772a4def200a03c3ce/94154dad66c184ee4f01e64ac.js");</script>
	</head>
	<body>

<button onclick="topFunction()" id="myBtn" title="Go to top">Scroll To Top</button>

		<header class="signup-header">
			<div id="opac-color">
				<div class="navbar">
                    <h3 style="margin-left: 100px;">Educo</h3>
					<a href="#">Home</a>
					<a href="#ft">Features</a>
                    <a href="#about">About Us</a>
										<?php if (isset($_SESSION['username'])) {
												echo '<a href="Forum/User/forum.php">View Forums</a>';
										} else {
												echo '<a href="educo/src/auth/login.php" title="Register / Log In">Register/Log In</a>';
										}
								?>

					<a class="logind" onclick="openSearch()">Search...</a>
                    <div class="dropdown">
          <?php if (isset($_SESSION['username'])) {
              echo "<a class='dropbtn'>".$_SESSION['username']."</a>";
          }?>
            <div class="dropdown-content">
                <a href="educo/src/auth/test_auth.php?logout=1">Logout</a>
            </div></div>
				</div>
				<div id="intro">
					<div id="intro-text">
						<h1 id="intro-logo">Educo</h1>
						<p>An all new and transformative way to learn and enhance skills. The teachers Job is to open doors, entering is all up to the student.</p>
					</div>
				</div>
			</div>
		</header>
		<main>
			<div id="myOverlay" class="overlay">
  		<span class="closebtn" onclick="closeSearch()" title="Close Overlay">x</span>
  		<div class="overlay-content">
    	<form method="post" action="#">
      <input type="text" placeholder="Search.." name="query">
      <button type="submit" name="submit"><i class="fa fa-search"></i></button>
    	</form>
  	</div>
		<?php
		if(isset($_POST['submit'])){
		    header('location:educo/Forum/search/index.php?string='.$_POST['query']);
		}
		?>
		</div>
		<div id="ft">

		</div>
			<div id="welcome">
				<h2 style="color: rgba(22, 180, 180)">Welcome</h2>
				<p>
                    Educo's community has never been happier to have you create an exceptional learning experience. Welvome to educo where you will ask
                    your your first question about a topic way till you're way to being an expert and helping others and making friends along the way.
				</p>
			</div>
			<div class="cards_container">
				<div class="trading_card">
					<img src="img/skye-studios-NDLLFxTELrU-unsplash.jpg" alt="Innovative" class="card-image">
					<div class="description">
						<h3 style="color: rgba(22, 180, 180)">Innovative</h3>
						<p>
                            A transformative platform to help students develop both technical skills and soft skills which are both crucial to
                            succeed in the technology career. By combining a project-based and a peer to peer approach paradigms of learning to
                            help students practice, enhance and hone their understanding.
                        </p>
					</div>
				</div>
				<div class="trading_card">
					<img src="img/jo-szczepanska-9OKGEVJiTKk-unsplash.jpg" alt="Project-based" class="card-image">
					<div class="description">
						<h3 style="color: rgba(22, 180, 180)">Project-based</h3>
						<p>
                            Project-based learning is a proven, alternative learning methodology to the traditional teacher-led lecture and
                            memorization educational method. Through learning by doing and learning how to rapidly adopt new skills and
                            methodologies, you are better prepared to succeed in the ever evolving technology industry.
                        </p>
					</div>
				</div>
				<div class="trading_card">
					<img src="img/john-schnobrich-2FPjlAyMQTA-unsplash.jpg" alt="Collaborative" class="card-image">
					<div class="description">
						<h3 style="color: rgba(22, 180, 180)">Collaborative</h3>
						<p>
                            Peer learning is an educational practice in which you interact with your fellow students to reach your
                            educational goals. Coupled with project-based learning, you are encouraged to unleash your creativity and
                            learn how to solve practical challenges by working as a team.
                        </p>
					</div>
				</div>
			</div>
      <div class="about" id="about">
        <div style="color: rgba(22, 180, 180);padding-left:300px;padding-right:300px;">
          <center><h2 style="color: rgba(22, 180, 180);">About</h2></center>
        </div>

        <div id="rendor" class="cards_container">
          <div class="online">
  					<h3>What is Educo?</h3>
  					<p>
                          Educo goes even further to provide useful statistical data of student participation thus helping future employers
                          select future employees with ease. Employers have a real time data track of how students who want to be employed
                          perform in a team. Ergo have an easier time conducting interviews.
  					</p>
  				</div>
  				<div class="onsite">
  					<h3>Our objectives</h3>
            <p>
              <ul style="list-style-type: circle!important;">
                <li style="list-style-type: circle!important;text-align:left; font-size:30px; font-family:Raleway;">To offer a different approach to learning</li>
                <li style="list-style-type: circle!important;text-align:left; font-size:30px; font-family:Raleway;"> To provide a global reach of  knowledge to users at no cost.</li>
                <li style="list-style-type: circle!important;text-align:left; font-size:30px; font-family:Raleway;">Creating an environment that is both friendly and educating where users
                  are free to ask for help without being judged</li>
              </ul>
            </p>
  				</div>

  			</div>
        <div style="color: rgba(22, 180, 180);padding-left:300px;padding-right:300px;">
          <center><h2 style="color: rgba(22, 180, 180);">Meet the creators</h2></center>
        </div>
        <div id="testimonials">
  				<div class="test-cards">
  					<img src="img/adrians.png" alt="Adrian">
  					<h3>Adrian Mang'are</h3>
  					<p>
              "If you want to lift yourself up, lift up someone else."
  					</p>
  				</div>
  				<div class="test-cards">
  					<img src="img/avatars.png" alt="Rees">
  					<h3>Alumasa Rees</h3>
  					<p>
              "Failure is an event, not a person.”
  					</p>
  				</div>
  				<div class="test-cards">
  					<img src="img/cyprian.jpg" alt="Cyprian">
  					<h3>Cyprian Kyalo</h3>
  					<p>
              “Start where you are. Use what you have. Do what you can.”
  					</p>
  				</div>
          <div class="test-cards">
  					<img src="img/avatar.png" alt="Frank">
  					<h3>Frank Mutwa</h3>
  					<p>
              "No one can whistle a symphony. It takes a whole orchestra to play it"
  					</p>
  				</div>
  				<div class="test-cards">
  					<img src="img/avatarss.png" alt="Kelvin">
  					<h3>Kelvin Ziroh</h3>
  					<p>
              “Tell me and I'll forget; show me and I may remember; involve me and I'll understand.”
  					</p>
  				</div>
  			</div>
      </div>


			<div id="services">
				<h3 style="color: rgba(22, 180, 180)">How it works</h3>
			</div>
			<div id="rendor" class="cards_container">
				<div class="onsite">
					<h3>Onsite</h3>
					<p>
                        Educo provides students and educators a platform in which they can collaborate and work on projects as a team.
                        It provides a students the opportunity to develop robust technical and soft skills which are both essential in
                        succeeding in the evolving technology world.
					</p>
					<a href="">Sign in</a>
				</div>
				<div class="online">
					<h3>Online</h3>
					<p>
                        Educo goes even further to provide useful statistical data of student participation thus helping future employers
                        select future employees with ease. Employers have a real time data track of how students who want to be employed
                        perform in a team. Ergo have an easier time conducting interviews.
					</p>
					<a href="">Sign in</a>
				</div>
			</div>
			<div id="test-intro">
				<h3 style="color: rgba(22, 180, 180)">Testimonials</h3>
				<p>See what people say about Educo's community and it's experience.</p>
			</div>
			<div id="testimonials">
				<div class="test-cards">
					<img src="img/jessica-felicio-_cvwXhGqG-o-unsplash.jpg" alt="Nora Allen">
					<h3>Nora Allen</h3>
					<p>
                        "The vibrant community here is just intoxicating. Fellow students are nice and never shy away from helping each other
                        out. I also appreciate the information it tracks especially on my part. It really helped me get a job during application
                        since it had a live record of my participation hence could give an accurate measure of my experience."
					</p>
				</div>
				<div class="test-cards">
					<img src="img/ivana-cajina-_7LbC5J-jw4-unsplash.jpeg" alt="Ralph Dibny">
					<h3>Ralph Dibny</h3>
					<p>
                        "I just like how fun Educo makes it with the gamification of participation in the entire platform. You get to work with
                        fellow students who are facing the same challenges as you. Ergo, you never feel alone while learning. It just makes the
                        learning process worth the struggle and pretty fulfilling."
					</p>
				</div>
				<div class="test-cards">
					<img src="img/autumn-goodman-vTL_qy03D1I-unsplash.jpeg" alt="Iris West">
					<h3>Iris West</h3>
					<p>
                        "Educo's data combined with Github information is just an awesome way to communicate to future employers without having to
                        draft a long meaningless sections in the resume. In my experience, all I had to show were my accounts from Github and Educo.
                        It just made the process easier and faster."
					</p>
				</div>
			</div>
		</main>
		<footer>
			<h3 class="footer-logo">Educo</h3>
			<div class="footer-subbox">
				<h3 class="footer-headings">Address</h3>
				<p>
					Educo,<br>
					Westlands,<br>
					P.O Box 4400 - 80108,<br>
					Nairobi.
				</p>
			</div>
			<div class="footer-subbox">
				<h3 class="footer-headings">Contact Us</h3>
				<p>
					Email: info@educo.com<br>
					Tel: +254793856704<br>
					Hotline: 0200-220042
				</p>
				<ul>
					<li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-medium" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="footer-subbox">
				<h3 class="footer-headings">Quick Links</h3>
				<p>
					<a href="educo/src/auth/signup.php">Sign Up</a><br>
					<a href="educo/src/auth/login.php">Log In</a><br>
					<a href="aboutus.php">About Us</a>
				</p>
            </div>
		</footer>
		<style media="screen">
		#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #13263a;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color:rgba(22, 180, 180);
}
		/* The overlay effect with black background */
.overlay {
height: 100%;
width: 100%;
display: none;
position: fixed;
z-index: 1;
top: 0;
left: 0;
background-color: rgb(0,0,0);
background-color: rgba(0,0,0, 0.9); /* Black with a little bit see-through */
}

/* The content */
.overlay-content {
position: relative;
top: 46%;
width: 80%;
text-align: center;
margin-top: 30px;
margin: auto;
}

/* Close button */
.overlay .closebtn {
position: absolute;
top: 20px;
right: 45px;
font-size: 40px;
cursor: pointer;
color:  rgba(22, 180, 180);;
font-family: arial;
}

.overlay .closebtn:hover {
color: #ccc;
}

/* Style the search field */
.overlay input[type=text] {
padding: 15px;
font-size: 17px;
border: none;
float: left;
width: 70%;
background: white;
}

.overlay input[type=text]:hover {
background: #f1f1f1;
}
.description{
	text-align: center;
}
/* Style the submit button */
.overlay button {
float: left;
width: 20%;
padding: 15px;
background:  rgba(22, 180, 180);;
font-size: 17px;
border: none;
cursor: pointer;
color: #fff;
}

.overlay button:hover {
background: #d73851;
}
body {
    margin: auto;
}

h3 {
    font-size: 1.5em;
  }

.card-image {
    width: 324px;
    height: 200px;
    margin: 0px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}

span {
    font-weight: bold;
}

li {
    list-style: none;
    font-family: 'Dosis';
}

ul {
    padding-left: 0pt;
}

p {
    font-family: 'Raleway';
    font-size: 20px;
}

footer {
    display: flex;
    background-image: linear-gradient(180deg, white, silver);
    margin-top: 30px;
    padding: 50px;
    text-align: center;
}

footer ul {
  position: relative;
  top: 30px;
}

footer li {
    list-style: none;
    display: inline-block;
    color: rgba(22, 180, 180);
    font-size: 30px;
    margin-right: 15px;
}

.menu-welcome {
    background-image: url(img/mockup-photos-5nUNdLueQio-unsplash.jpg);
    background-size: cover;
    height: 270px;
    color: #cf9206;
    position: relative;
    bottom: 37px;
}

.menu-welcome h2{
    background-image: linear-gradient(45deg, rgb(0, 0, 0, 0.8), rgb(0, 0, 0, 0.35));
    height: 200px;
    padding-left: 40px;
    padding-top: 70px;
    font-size: 45px;
}

.breakfast-container, .maincourse-container, .drinks-container {
    display: flex;
}

.breakfast-content {
    padding-left: 60px;
    background-image: linear-gradient(90deg, rgba(87, 86, 84, 0.5), rgb(255, 255, 255, 0));
}

.breakfast-content h3 {
    margin-top: 0px;
    margin-bottom: 0px;
    color: #cf9206;
}

.breakfast-content p {
    margin-top: 0px;

}

.maincourse-container {
    background-image: linear-gradient(90deg, rgb(0, 0, 0, 0.9), rgb(0, 0, 0, 0.2));
    border-top-left-radius: 20px;
    border-bottom-right-radius: 20px;
}

.drinks-container {
    background-image: linear-gradient(90deg, rgb(0, 0, 0, 0.9), rgb(0, 0, 0, 0.4), rgb(0, 0, 0, 0.9));
    border-top-left-radius: 20px;
    border-bottom-right-radius: 20px;
}

.maincourse-container h2, .maincourse-container p , .drinks-container p {
    color: white;
}

.maincourse-container h3, .drinks-container h2, .drinks-container h3 {
    color: #cf9206;
}

.maincourse-content {
    margin-left: 120px;
}

.backpic {
    background-image: url(img/edgar-castrejon-1SPu0KT-Ejg-unsplash.jpg);
    background-size: cover;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
    box-shadow: 10px 10px 8px rgb(192, 192, 192);
    border-top-left-radius: 20px;
    border-bottom-right-radius: 20px;
}

.drinks-background {
    background-image: url(img/brooke-lark-t7wg7BJU2-s-unsplash.jpg);
    background-size: cover;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
    box-shadow: 10px 10px 8px rgb(192, 192, 192);
    border-top-left-radius: 20px;
    border-bottom-right-radius: 20px;
}

.drinks-content {
    margin-left: 50px;
    width: 30%;
}

.img_div {
    /* border: 1px solid black; */
    margin-left: auto;
    margin-right: auto;
    box-shadow: 0px 0px 10px 2px grey;
    border-radius: 5px;
    margin-bottom: 30px;
}

.img_div p, .img_div h3, .img_div input{
    padding: 0px 10px;
}

.posted-images {
    /* box-shadow: 10px 10px 8px rgb(192, 192, 192); */
    width: 324px;
    height: 200px;
    margin-left: auto;
    margin-right: auto;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}

.footer-headings {
    color: rgba(22, 180, 180);
    font-family: 'Suez One', serif;
    margin-bottom: 0px;
}

.footer-logo {
    position: relative;
    top: 30px;
    margin-right: 35px;
    color: rgba(22, 180, 180);
    font-size: 35px;
    font-family: 'Permanent Marker', cursive;
}

.footer-subbox {
    margin-left: 100px;
}

footer p {
    margin-bottom: 0px;
    font-weight: bolder;
    color: black;
}

footer a{
    text-decoration: none;
    font-family: 'Raleway';
    color: black;
    margin-top: 40px;
}

.signup-header {
    background-image: url(img/marvin-meyer-SYTO3xs06fU-unsplash.jpg);
    background-size: cover;
    height: 760px;
}

main h2 {
    font-family: 'Suez One', serif;
    font-size: 30px;
}

main h3 {
    font-family: 'Suez One', serif;
}

#services {
    margin-top: 50px;
    text-align: center;
}

#welcome {
    text-align: center;
    padding-right: 300px;
    padding-left: 300px;
}

#test-intro {
    text-align: center;
    margin-top: 50px;
}

#rendor {
    display: flex;
    margin-top: 40px;
}

.onsite {
  padding: 15px 5px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px 2px silver;
  margin: 20px;
}

.online {
    padding: 15px 5px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px 2px silver;
    margin: 20px;
}


.onsite a, .online a{
    background-image: linear-gradient(to bottom left, rgba(22, 180, 180), rgba(22, 180, 180));
    border: 1px solid rgba(22, 180, 180);
    color: white;
}

.onsite a:hover {
    border: 1px solid rgba(22, 180, 180);
    color: rgba(22, 180, 180);
    background-image: linear-gradient(to left, white, white);
}

.online a:hover {
    border: 1px solid rgba(22, 180, 180);
    color: rgba(22, 180, 180);
    background-image: linear-gradient(to left, white, white);
}

.onsite, .online{
    width: 50%;
    text-align: center;
    height: 580px;
    padding-right: 50px;
    padding-left: 50px;
}
.online h3,.onsite h3{
  color: rgba(22, 180, 180);
}
.onsite p, .online p{
    margin-top: 50px;
    font-size: 30px;
}

.onsite a, .online a{
    font-family: 'Raleway';
    font-size: 20px;
    text-decoration: none;
    border-radius: 5px;
    padding: 5px 10px;
}

#intro form {
    padding: 20px;
    margin: 50px auto;
    text-align: left;
    border: 1px solid #bbbbbb;
    border-radius: 5px;
    background-color: rgb(255, 255, 255, 0.8);
}

#login-logo {
    text-align: center;
}

#login-logo h3 {
    font-family: 'Kaushan Script', cursive;
    color: #cf9206;
}

.page-color {
    background-color: rgb(192,192,192, 0.2);
}

#new-account {
    text-align: center;
    background-color: rgb(192,192,192, 0.1);
    border: solid 1px silver;
    border-radius: 5px;
    width: 27.9%;
    margin-right: auto;
    margin-left: auto;
    margin-top: 20px;
}

#new-account p {
    font-size: 15px;
}

#new-account a {
    text-decoration: none;
    color: #cf9206;
}

#login-form {
    width: 25%;
    margin-right: auto;
    margin-left: auto;
    padding: 20px;
    text-align: left;
    border: 1px solid #bbbbbb;
    border-radius: 5px;
    background-color: rgb(255, 255, 255, 0.8);
}

#testimonials {
    display: flex;
    margin-left: 100px;
    margin-right: 100px;
    margin-top: 40px;
}

.test-cards {
    width: 324px;
    margin-left: auto;
    margin-right: 5px;
    text-align: center;
    padding: 15px 5px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px 2px silver;
}

.test-cards img {
    width: 81px;
    height: 81px;
    border-radius: 50px;
    box-shadow: 0px 0px 10px 2px silver;
}

.test-cards h3 {
    color: rgba(22, 180, 180);
    font-weight: lighter;
    font-size: 20px;
}

.input-group {
    margin: 10px 0px 10px 0px;
}

.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
    font-family: 'Raleway';
}

.input-group input {
    height: 40px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid silver;
}

.btn {
    padding: 10px;
    width: 99%;
    height: 50px;
    font-size: 20px;
    font-family: 'Raleway';
    font-weight: 30px;
    color: white;
    background: #cf9206;
    border: none;
    border-radius: 5px;
}

#intro {
    padding-top: 90px;
    height: 685px;
    display: flex;
}

#opac-color {
    background-image: linear-gradient(to bottom right, rgba(204, 0, 204, 0.75), rgba(153, 0, 255, 0.4), rgba(0, 255, 255, 0.3));
    /* background-color: rgb(0,0,0, 0.3); */
    height: 760px;
}

#intro-form {
    width: 25%;
    margin-right: auto;
    margin-left: 25px;
}

#intro-text {
    width: 30%;
    margin-right: auto;
    margin-left: 100px;
    padding-top: 70px;
    padding-bottom: 50px;
}

#intro-text p {
    font-family: 'Suez One', serif;
    font-size: 30px;
    color: white;
    margin-top: 10px;
}

#intro-logo {
    margin-top: 35px;
    font-family: 'Permanent Marker', cursive;
    font-size: 50px;
    color: white;
}

.login {
    position: relative;
    left: 25%;
}


.fa-caret-down {
    margin-left: 5px;
}

.navbar {
    overflow: hidden;
    background-color: rgb(0, 0, 0, 0);
    display: flex;
    height: 70px;
    margin-bottom: auto;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 23px 16px;
    margin-right: 30px;
    text-decoration: none;
    font-family: 'Raleway';
}

.navbar h3 {
    position: relative;
    bottom: 10px;
    height: 40px;
    margin-right: 26%;
    margin-left: 35px;
    font-family: 'Permanent Marker', cursive;
    color: white;
}
.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  float:left;
 background-color:black;
  color:white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-top:20px;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  background-color:black;
}


.dropdown:hover .dropdown-content {display: block;}

.cards_container {
    display: flex;
    margin-left: 100px;
    margin-right: 100px;
    margin-top: 40px;
}

.trading_card {
    border: 1px;
    box-shadow: 0px 0px 10px 2px grey;
    border-radius: 10px;
    width: 324px;
    margin-left: auto;
    margin-right: auto;
}

.trading_card a {
    text-decoration: none;
    color: #cf9206;
}

.trading_card p {
    font-size: 17px;
}

.description {
    border-radius: 5px;
    width: 290px;
    padding: 0.5em 1em 1em 1em;
}

.error {
    width: 98%;
    margin: 0px;
    padding: 5px;
    border: 1px solid #cf9206;
    color: #cf9206;
    background: #e7c882;
    border-radius: 5px;
    text-align: left;
}

.error p {
    font-size: 15px;
    margin: 2px;
}

.content {
    width: 35%px;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid black;
    border-radius: 5px;
}

.admin-form {
    width: 30%;
    padding: 20px;
    margin: 50px auto;
    text-align: left;
    border: 1px solid #bbbbbb;
    border-radius: 5px;
}

table {
    width: 50px;
    margin: 30px auto;
    border-collapse: collapse;
    text-align: left;
}

tr {
    border-bottom: 1px solid #cbcbcb;
    border-top: 1px solid #cbcbcb;
}

th, td {
    border: none;
    height: 30px;
    padding: 10px;
    font-family: 'Raleway';
}

th {
    color: #cf9206;
}

tr:hover {
    background: #F5F5F5;
}

.admin-btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #cf9206 ;
    border: none;
    border-radius: 5px;
    font-family: 'Raleway';
}

.msg {
    margin: 30px auto;
    padding: 10px;
    border-radius: 5px;
    color: #cf9206;
    background: #e7c882;
    border: 1px solid #cf9206;
    width: 50%;
    text-align: center;
}

.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}

.paragraphs {
    display: flex;
    width: 85%;
    margin-right: auto;
    margin-left: auto;
}

.paragraph {
    width: 350px;
    margin-right: auto;
    margin-left: auto;
    text-align: justify;
    border: 1px dotted #cf9206;
    padding: 10px;
}

.paragraph h2{
    text-align: center;
}

.comm-img {
    margin-top: 30px;
    margin-bottom: 0px;
    background-image: url(img/anthony-delanoix-hzgs56Ze49s-unsplash.jpg);
    background-size: cover;
}

.comm-container {
    background-color: rgb(0, 0, 0, 0.5);
    height: 250px;
    padding-top: 200px;
    padding-bottom: 200px;
}

.postings {
    display: flex;
    width: 100%;
}

.profile-welcome {
    background-image: url(img/jason-leem-50bzI1F6urA-unsplash.jpg);
    background-size: cover;
    height: 270px;
    color: #cf9206;
    position: relative;
    bottom: 37px;
}

.profile-welcome h2{
    background-image: linear-gradient(45deg, rgb(0, 0, 0, 0.8), rgb(0, 0, 0, 0.35));
    height: 170px;
    padding-left: 40px;
    padding-top: 100px;
    font-size: 45px;
    text-align: center;
}

.profile-info {
    display: flex;
    position: relative;
    bottom: 140px;
    margin-bottom: 0px;
}

.profile-info img {
    margin-left: 100px;
}

.profile-info h3 {
    margin-top: 120px;
    margin-left: 30px;
}

.posts {
    display: flex;
    flex-wrap: wrap;
    width: 80%;
    margin-right: auto;
    margin-left: auto;
}

		</style>
		<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		mybutton.style.display = "block";
	} else {
		mybutton.style.display = "none";
	}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}
</script>
		<script>
		// Open the full screen search box
function openSearch() {
document.getElementById("myOverlay").style.display = "block";
}

// Close the full screen search box
function closeSearch() {
document.getElementById("myOverlay").style.display = "none";
}
		</script>
	</body>
</html>
