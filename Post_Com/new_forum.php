<?php
include "config.php";
if(!isset($_SESSION)) {session_start();}
include "config.php";
if (isset($_SESSION["user_id"])) {
  if(isset($_POST['submit'])){

  		$title = $_POST['topic_subject'];
  		$short_desc = $_POST['topic_description'];
  		$long_desc = $_POST['topic_category'];

  		if($title != ''){

  			mysqli_query($con, "INSERT INTO contents(title,short_desc,long_desc) VALUES('".$title."','".$short_desc."','".$long_desc."') ");
  			//header('location: index.php');
  		}
  	}
}else {
  echo "You are Not Loggen in";
}
// Insert record


?>

<!DOCTYPE html>
<html>
<head>
	<title>Integrate CKeditor to HTML page and save to MySQL with PHP</title>

	<!-- CSS -->
	<style type="text/css">
	.cke_textarea_inline{
		border: 1px solid black;
	}
	</style>

	<!-- CKEditor -->
	<script src="ckeditor/ckeditor.js" ></script>
</head>
<body>

	<form id="form1" method='post'>
		Title :
		<input type="text" name="title" ><br>

		Short Description:
		<textarea id='short_desc' name='short_desc' style='border: 1px solid black;'  ></textarea><br>

		Long Description:
		<textarea id='long_desc' name='long_desc' ></textarea><br>

		<input type="submit" name="submit" value="Submit">
	</form>
	<script>
		$(function () {
			$('#form1').bind('submit', function (event) {
			// using this page stop being refreshing
			event.preventDefault();

				$.ajax({
					type: 'POST',
					url: 'post.php',
					data: $('form').serialize(),
					success: function () {
						alert('form was submitted');
					}
				});
			});
		});
	</script>

	<!-- Script -->
	<script type="text/javascript">
	//config.extraPlugins = 'codesnippetgeshi';
		// Initialize CKEditor
		CKEDITOR.inline( 'short_desc');

		CKEDITOR.replace('long_desc',{
      extraPlugins: 'uploadimage',
			uploadUrl: 'apps/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',

		 // Configure your file manager integration. This example uses CKFinder 3 for PHP.
		 filebrowserBrowseUrl: 'apps/ckfinder/ckfinder.html',
		 filebrowserImageBrowseUrl: 'apps/ckfinder/ckfinder.html?type=Images',
		 filebrowserUploadUrl: 'apps/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		 filebrowserImageUploadUrl: 'apps/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		 // Configure the Enhanced Image plugin to use classes instead of styles and to disable the
		 // resizer (because image size is controlled by widget styles or the image takes maximum
		 // 100% of the editor width).
		 image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
		 image2_disableResizer: true
,
			width: "100%",
        	height: "200px"

		});


	</script>
</body>
</html>
