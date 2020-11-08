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

                <li class="side-links" style="background-color: rgba(0, 255, 255, 0.2);"><a href="dasboard.php" style="color: #00ffff;"><i class="fa fa-signal side-nav" aria-hidden="true"></i>Dashboard</a></li>
                <li class="side-links"><a href="profile.php"><i class="fa fa-user side-nav" aria-hidden="true"></i>Your Profile</a></li>
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
    <div class="head-dash">
        <h2>Dashboard</h2>
    </div>

        <section class="graph">
            <div class="graph-posts">
                <h3>Total posts</h3>
            </div>
            <div class="graph-reply">
                <h3>Total replies</h3>
            </div>
            <div class="graph-graph"> 
                <h3>Contributions</h3>
                <script>
                    
                </script>
            </div>
        </section>  

        <section class="posts">
            <div class="posts-recent">
                <h3>Recent Posts</h3>
            </div>
            <div class="posts-calendar">
                <p id="monthName"></p>
                <p id="dayName"></p>
                <p id="dayNumber"></p>
                <p id="year"></p>
            </div>
            <script>
                const lang = navigator.language;
                let date = new Date();
                let dayNumber = date.getDate();
                let month = date.getMonth();
                let dayName = date.toLocaleString(lang, {weekday: 'long'});
                let monthName = date.toLocaleString(lang, {month: 'long'})
                let year = date.getFullYear();

                document.getElementById('monthName').innerHTML = monthName;
                document.getElementById('dayName').innerHTML = dayName;
                document.getElementById('dayNumber').innerHTML = dayNumber;
                document.getElementById('year').innerHTML = year;

            </script>       
        </section> 

</body>
</html>