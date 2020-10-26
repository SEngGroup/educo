<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.9/angular.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/10.1.0/decoupled-document/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.7.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Forums</title>
</head>
<body>
    <div class="container">
        <div class="side-nav-bar">
            <ul class="chat-side-nav">
                <a href="#exampleModal-4" rel="modal:open" id="create-user"><li id="create-chat"><i class="fa fa-pencil side-nav" aria-hidden="true" ></i>Create New</li></a>
                <li class="side-links"><a href=""><i class="fa fa-signal side-nav" aria-hidden="true"></i>Dashboard</a></li>
                <li class="side-links"><a href=""><i class="fa fa-user side-nav" aria-hidden="true"></i>Your Profile</a></li>
                <li class="side-links" style="background-color: rgba(0, 255, 255, 0.2);"><a href="forum.php" style="color: #00ffff;"><i class="fa fa-users side-nav" aria-hidden="true"></i>Forum</a></li>
                <li class="side-links"><a href="chat.php" ><i class="fa fa-comments side-nav" aria-hidden="true"></i>Chat</a></li>
                <li class="side-links"><a href=""><i class="fa fa-globe side-nav" aria-hidden="true"></i>Help Center</a></li>
                <li class="side-links cog"><a href=""><i class="fa fa-cog side-nav" aria-hidden="true"></i>Settings</a></li>
                <li class="side-links"><a href=""><i class="fa fa-sign-out side-nav" aria-hidden="true"></i>Logout</a></li>
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
            <div class="chat-area" style="height: 636px;">
                <div class="topics-bar">
                    <h3 style="padding: 5px; padding-left: 15px;">Topics</h3>
                    <b><p style="color: brown;" class="topic">Importing DataFrames</p></b>
                    <p class="topic">How to create a db</p>
                    <p class="topic">Disk part not working</p>
                </div>
                <div class="chat-view">
                    <h1>Importing DataFrames - no such file or directory</h1>

                    <article>
                      I am trying to import a csv file as a dataframe into a Jupyter notebook.<br>
                      <code>rest_relation = pd.read_csv('store_id_relation.csv', delimiter=',')</code><br>
                      But I get this error
                      <code>FileNotFoundError: [Errno 2] No such file or directory: 'store_id_relation.csv'</code><br>
                      The store_id_relation.csv is definitely in the data folder, and I have tried adding data\ to the file location but I get the same error. Whats going wrong here?
                    </article>

                    <p><b>By: <i>Rees Alumasa</i></b></p>
                    <p><b>Posted on: <i>25 October 2020 2:05pm</i></b></p>
                    <p><b>Category: <i>C++</i></b></p>


                    <div id="com" class="box_comment col-md-11">
                      <h2>Type Your answer</h2>
                      <div ng-app="editorApp">
                        <div ng-controller="editorCtrl">
                          <div id="toolbar-container"></div>
                          <div id="editor">
                            <textarea  name="editor" id="editor" placeholder="Add a comment..."></textarea>
                          </div>
                        </div>
                      </div>
          					  <div class="box_post">
                      <div class="pull-left">
                        <span>
          							<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar" />
          							<i style="font-size:12px">Posting as <b>Your Name<b></i>
          						  </span>
                      </div>
          						<div class="pull-right">

          						  <button style="width: 100px; height: 40px; font-size: 15px; border-radius: 25px; border: none; margin: 5px; color: white; background-color: rgba(22, 180, 180);" onclick="submit_comment()" type="button" value="1">Post</button>
          						</div>
          					  </div>
          					</div>
                    <div class="row">
                      <h3>Responses</h3>
            					<ul id="list_comment" class="col-md-12">

                        <li class="box_result row">
                        <div class="avatar_comment col-md-1">
                        <img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
                        </div>
                        <div class="result_comment col-md-11">
                        <h4>Silvia Kaveza</h4>
                        <p>Always try to pass the full path whenever possible

                        By default, read_csv looks for the file in the current working directory

                        Provide the full path to the read_csv function

                        However in your case , `data` and `Data` are different , and file paths are case sensitive

                        You can try the below path to fetch the file and convert it into a dataframe

                        <code> rest_relation = pd.read_csv('Data\\store_id_relation.csv', delimiter=',')</code></p>
                        <div class="tools_comment">
                        <a class="like" >Like</a>
                        <span aria-hidden="true"> · </span>
                        <a class="replay" >Reply</a>
                        <span aria-hidden="true"> · </span>
                        <i class="fa fa-thumbs-o-up"></i> <span class="count">1</span>
                        <span aria-hidden="true"> · </span>
                        <span>9m</span>
                        </div>
                        <ul class="child_replay"></ul>
                        </div>
                        </li>

                        <li class="box_result row">
							<div class="avatar_comment col-md-1">
								<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
							</div>
							<div class="result_comment col-md-11">
								<h4>Clinton Walker</h4>
								<p>Confirm that store_id_relation.csv is in the same folder with your program.</p>
								<div class="tools_comment">
									<a class="like" >Like</a>
									<span aria-hidden="true"> · </span>
									<a class="replay" >Reply</a>
									<span aria-hidden="true"> · </span>
									<i class="fa fa-thumbs-o-up"></i> <span class="count">1</span>
									<span aria-hidden="true"> · </span>
									<span>26m</span>
								</div>
								<ul class="child_replay">
									<li class="box_reply row">
										<div class="avatar_comment col-md-1">
											<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
										</div>
										 <div class="result_comment col-md-11">
											<h4>Hellena Yudikov</h4>
											<p>Yes, its in the same folder</p>
											<div class="tools_comment">
												<a class="like" >Like</a>
												<span aria-hidden="true"> · </span>
												<a class="replay" >Reply</a>
												<span aria-hidden="true"> · </span>
												<i class="fa fa-thumbs-o-up"></i> <span class="count">1</span>
												<span aria-hidden="true"> · </span>
												<span>20m</span>
											</div>
                      <ul class="child_replay"></ul>
										</div>
									</li>
								</ul>
							</div>
						</li>

                      </ul>
                    </div>
            </div>
        </div>
        <?php include 'newpost.php'; ?>
    </div>
    <script>
    window.CKEDITOR_BASEPATH = '../ckeditor/';
    var app = angular.module('editorApp', []);
    app.controller('editorCtrl', function($scope) {
      DecoupledEditor
      .create(document.querySelector('#editor'), {
        ckfinder: {
          uploadUrl: 'img/'
        }
      })
      .then(editor => {
        const toolbarContainer = document.querySelector('#toolbar-container');
        toolbarContainer.appendChild(editor.ui.view.toolbar.element);
      })
      .catch(error => {
        console.error(error);
      });
    });
    
    function submit_comment(){

      CKEDITOR.replace( 'editor');
      var comment = CKEDITOR.instances['editor'].getData();
      el = document.createElement('li');
      el.className = "box_result row";
      el.innerHTML =
       '<div class=\"avatar_comment col-md-1\">'+
         '<img src=\"https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg\" alt=\"avatar\"/>'+
       '</div>'+
       '<div class=\"result_comment col-md-11\">'+
       '<h4><?php echo "Your Name";?></h4>'+
       '<p>'+ comment +'</p>'+
       '<div class=\"tools_comment\">'+
       '<a class=\"like\" >Like</a><span aria-hidden=\"true\"> · </span>'+
       '<i class=\"fa fa-thumbs-o-up\"></i> <span class=\"count\">0</span>'+
       '<span aria-hidden=\"true\"> · </span>'+
       '<a class=\"replay\" >Reply</a><span aria-hidden=\"true\"> · </span>'+
         '<span>1m</span>'+
       '</div>'+
       '<ul class="child_replay"></ul>'+
       '</div>';
     document.getElementById('list_comment').prepend(el);
     document.getElementById('com').innerHTML="Your answer has been posted";
     $('.commentar').val('');
    }
    $(document).ready(function() {
     $('#list_comment').on('click', '.like', function (e) {
       $current = $(this);
       var x = $current.closest('div').find('.like').text().trim();
       var y = parseInt($current.closest('div').find('.count').text().trim());

       if (x === "Like") {
         $current.closest('div').find('.like').text('Unlike');
         $current.closest('div').find('.count').text(y + 1);
       } else if (x === "Unlike"){
         $current.closest('div').find('.like').text('Like');
         $current.closest('div').find('.count').text(y - 1);
       } else {
         var replay = $current.closest('div').find('.like').text('Like');
         $current.closest('div').find('.count').text(y - 1);
       }
     });

     $('#list_comment').on('click', '.replay', function (e) {
       cancel_reply();
       $current = $(this);
       el = document.createElement('li');
       el.className = "box_reply row";
       el.innerHTML =
         '<div class=\"col-md-12 reply_comment\">'+
           '<div class=\"row\">'+
             '<div class=\"avatar_comment col-md-1\">'+
               '<img src=\"https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg\" alt=\"avatar\"/>'+
             '</div>'+
             '<div class=\"box_comment col-md-10\">'+
               '<textarea class=\"comment_replay\" placeholder=\"Add a comment...\"></textarea>'+
               '<div class=\"box_post\">'+
               '<div class=\"pull-right\">'+
                 '<span>'+
                 '<img src=\"https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg\" alt=\"avatar\" />'+
                 '<i class=\"fa fa-caret-down\"></i>'+
                 '</span>'+
                 '<button class=\"cancel\" onclick=\"cancel_reply()\" type=\"button\">Cancel</button>'+
                 '<button onclick=\"submit_reply()\" type=\"button\" value=\"1\">Reply</button>'+
               '</div>'+
               '</div>'+
             '</div>'+
           '</div>'+
         '</div>';
       $current.closest('li').find('.child_replay').prepend(el);
     });
    });

    function submit_reply(){
      var comment_replay = $('.comment_replay').val();
      el = document.createElement('li');
      el.className = "box_reply row";
      el.innerHTML =
       '<div class=\"avatar_comment col-md-1\">'+
         '<img src=\"https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg\" alt=\"avatar\"/>'+
       '</div>'+
       '<div class=\"result_comment col-md-11\">'+
       '<h4><?php echo "Your Name";?></h4>'+
       '<p>'+ comment_replay +'</p>'+
       '<div class=\"tools_comment\">'+
       '<a class=\"like\" >Like</a><span aria-hidden=\"true\"> · </span>'+
       '<i class=\"fa fa-thumbs-o-up\"></i> <span class=\"count\">0</span>'+
       '<span aria-hidden=\"true\"> · </span>'+
       '<a class=\"replay\" >Reply</a><span aria-hidden=\"true\"> · </span>'+
         '<span>1m</span>'+
       '</div>'+
       '<ul class="child_replay"></ul>'+
       '</div>';
     $current.closest('li').find('.child_replay').prepend(el);
     $('.comment_replay').val('');
     cancel_reply();
    }

    function cancel_reply(){
     $('.reply_comment').remove();
    }

    </script>
</body>
</html>
