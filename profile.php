<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Profile</title>
</head>
<body>

	<div class="container">
        <div class="side-nav-bar">
            <ul class="chat-side-nav">
              <a href="#exampleModal-4" data-toggle="modal" data-target="#exampleModal-4" data-whatever="@fat" id="create-user"><li id="create-chat"><i class="fa fa-pencil side-nav" aria-hidden="true" ></i>Create New</li></a>

                <li class="side-links"><a href=""><i class="fa fa-signal side-nav" aria-hidden="true"></i>Dashboard</a></li>
                <li class="side-links" style="background-color: rgba(0, 255, 255, 0.2);"><a href="profile.php" style="color: #00ffff;"><i class="fa fa-user side-nav" aria-hidden="true"></i>Your Profile</a></li>
                <li class="side-links"><a href="forum.php"><i class="fa fa-users side-nav" aria-hidden="true"></i>Forum</a></li>
                <li class="side-links"><a href="chat.php"><i class="fa fa-comments side-nav" aria-hidden="true"></i>Chat</a></li>
                <li class="side-links"><a href=""><i class="fa fa-globe side-nav" aria-hidden="true"></i>Help Center</a></li>
                <li class="side-links cog"><a href=""><i class="fa fa-cog side-nav" aria-hidden="true"></i>Settings</a></li>
                <li class="side-links"><a href="auth/test_auth.php?logout='1"><i class="fa fa-sign-out side-nav" aria-hidden="true"></i>Logout</a></li>
            </ul>
      </div>

    <div class="main" style="width: 83%;">
        <div class="top-nav" style="border-bottom: 1px solid rgba(192, 192, 192, 0.2);">
                <i class="fa fa-search" aria-hidden="true"></i>
                <input type="text" placeholder="Search" class="search-bar">
                <ul class="chat-top-nav">
                    <li class="top-links"><a href="">Home</a></li>
                    <li class="top-links"><a href="">Chats</a></li>
                    <li class="top-links"><a href="">About Us</a></li>
                </ul>
                <img src="https://picsum.photos/id/237/75/30" alt="User Profile" class="session-profile">
        </div>
    </div>
</div>

    <!--<div class="content">
                <div class="user-bio">
                    <div class="pic-section">
                        <img src="img/autumn-goodman-vTL_qy03D1I-unsplash.jpeg" alt="maria Hernandez" class="profile-pic" style="height: 30px; width: 30px; border-radius: 50%;">
                        <div style="border-radius: 50px; background-color: rgba(22, 180, 180); width: 142px; padding-top: 15px; padding-bottom: 15px; padding-left: 30px; padding-right: 10px;">
                            <i class="fa fa-pencil" aria-hidden="true" style="color: white;"></i> <a href="#" style="text-decoration: none; margin-left: 10px; color: white;">Edit Profile</a>
                        </div>  
                </div>
                    <div class="info-section">
                        <h2>Maria Hernandez</h2>
                        <p>San Mateo</p>
                        <div style="display: flex;">
                            <i class="fa fa-facebook bio-list" aria-hidden="true" style="font-size: 30px;"></i>
                            <i class="fa fa-twitter bio-list" aria-hidden="true" style="font-size: 30px;"></i>
                            <i class="fa fa-google bio-list" aria-hidden="true" style="font-size: 30px;"></i>
                        </div>
                    </div>
                </div>
    </div>-->

    <div class="content">
    	<div class="pic-section">
    		<img src="img/autumn-goodman-vTL_qy03D1I-unsplash.jpeg">
    		<!--<div id="icon">
	    		<i class="fa fa-pencil"></i>
	    		<i class="fa fa-trash"></i>
    		</div>-->

            <div style="border-radius: 50px; background-color: rgba(22, 180, 180); width: 120px; padding-top: 15px; padding-bottom: 15px; padding-left: 30px; padding-right: 13px; margin-left: 0.8rem; margin-top: 1rem;">
                            <i class="fa fa-pencil" aria-hidden="true" style="color: white;"></i> <a href="edit-profile.php" style="text-decoration: none; margin-left: 10px; color: white;">Edit Profile</a>

            </div>

            <div style="border-radius: 50px; background-color: rgba(22, 180, 180); width: 200px; padding-top: 15px; padding-bottom: 15px; padding-left: 30px; padding-right: 10px; margin-top: 2rem; margin-left: -1.4rem;">
                            <i class="fa fa-key" aria-hidden="true" style="color: white;"></i> <a href="passwd.php" style="text-decoration: none; margin-left: 10px; color: white;">Change Password</a>
            </div>
    	</div>

    	<div class="profile-info" style="width: 40%;">
    		<h2>John Doe</h2>
            <h3>Freeco@123</h3><br>
            <h4>About</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    		<!--<br><a href="#">Change Password</a>
    		<a href="#">Save</a>
    		<div style="border-radius: 50px; background-color: rgba(22, 180, 180); width: 120px; padding-top: 15px; padding-bottom: 15px; padding-left: 30px; padding-right: 10px;">
                            <i class="fa fa-floppy-o" aria-hidden="true" style="color: white;"></i> <a href="edit-profile.php" style="text-decoration: none; margin-left: 10px; color: white;">Edit Profile</a>

            </div>

            <div style="border-radius: 50px; background-color: rgba(22, 180, 180); width: 200px; padding-top: 15px; padding-bottom: 15px; padding-left: 30px; padding-right: 10px; margin-top: -3rem; margin-left: 15rem;">
                            <i class="fa fa-key" aria-hidden="true" style="color: white;"></i> <a href="#" style="text-decoration: none; margin-left: 10px; color: white;">Change Password</a>
            </div> -->
            
    	</div>
    </div>

</body>
</html>