<!DOCTYPE html>
<html lang="en">
<head>
<title>Instructors</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Lingua project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/instructors.css">
<link rel="stylesheet" type="text/css" href="styles/instructors_responsive.css">
<!---->
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">	
</head>
<body>
<?php
$con= mysqli_connect("localhost", "root", "", "educational");

        if(isset($_POST['btn_upload'])){
        $filetmp = $_FILES["file"]["tmp_name"];
	$filetype = $_FILES["file"]["type"];
        $filename=$_POST["C_name"];
        $file_desc=$_POST["desc"];
        $file_sub=$_POST["sub"];
	$filepath = "../Uploaded_Courses/".$filename;
	move_uploaded_file($filetmp,$filepath);
        $ins_usr_qu="select username from `users` where username = 'wa11'";
        if(mysqli_query($con, $ins_usr_qu)){
            if($row = mysqli_fetch_assoc(mysqli_query($con, $ins_usr_qu))){
                $ins_usr=$row['username'];
            }
        }
	$sql = "INSERT INTO file_upload (file_name,upload_on,status,subject,description,ins_usr) VALUES ('$filename','$filepath','$filetype','$file_sub','$file_desc','$ins_usr')";
	mysqli_query($con, $sql);
}


    ?>
<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<div class="top_bar_phone"><span class="top_bar_title">phone:</span>+44 300 303 0266</div>
								<div class="top_bar_right ml-auto">

						
									<!-- Social -->
									<div class="top_bar_social">
										<span class="top_bar_title social_title">follow us</span>
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container mr-auto">
								<a href="#">
									<div class="logo_text">Lingua</div>
								</a>
							</div>
							<nav class="main_nav_contaner">
								<ul class="main_nav">
									<li><a href="index.php">Home</a></li>
									<li><a href="courses.php">Courses</a></li>
									<li><a href="instructors.php">Instructors</a></li>
									<!--<li><a href="#">Events</a></li>-->
									<li><a href="blog.php">Blog</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</nav>
							<div class="header_content_right ml-auto text-right">
								<div class="header_search">
									<div class="search_form_container">
										<form action="#" id="search_form" class="search_form trans_400">
											<input type="search" class="header_search_input trans_400" placeholder="Type for Search" required="required">
											<div class="search_button">
												<i class="fa fa-search" aria-hidden="true"></i>
											</div>
										</form>
									</div>
								</div>

								<!-- Hamburger -->

								<div class="user"><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i></a></div>
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">Home</a></li>
				<li class="menu_mm"><a href="courses.php">Courses</a></li>
				<li class="menu_mm"><a href="instructors.php">Instructors</a></li>
				<li class="menu_mm"><a href="#">Events</a></li>
				<li class="menu_mm"><a href="blog.php">Blog</a></li>
				<li class="menu_mm"><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_phone"><span class="menu_title">phone:</span>+44 300 303 0266</div>
			<div class="menu_social">
				<span class="menu_title">follow us</span>
				<ul>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	
	
				
					
						
<center>
<div class="container" style="clear: both;margin-top:180px; text-align: center">

<?php
    $sql = "Select upload from `privilage` where usr_id= 3" ;
    $result = mysqli_query($con,$sql);
    $x = mysqli_fetch_array($result);
?>
 <?php if( $x[0] == "yes"  ) :?>

                <div class="col-md-12">	
                        <h1 class="text-center margin-bottom-15">Upload Course</h1>		
                        <form class="form-horizontal templatemo-contact-form-2 templatemo-container" enctype="multipart/form-data" role="form" action="" method="post">
                                <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">				          		          	
                                                <div class="col-sm-12">
                                                <div class="templatemo-input-icon-container">
                                                        <i class="fa fa-user"></i>
                                                        <input type="text" class="form-control" name="C_name" id="name" placeholder="Course Name" required="">
                                                </div>		            		            		            
                                                </div>              
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="templatemo-input-icon-container">
                                                        <i class="fa fa-info-circle"></i>
                                                        <input type="text" class="form-control" id="subject" name="sub" placeholder="Subject" required="">
                                                </div>
                                                </div>
                                        </div>
                                        <div class="form-group" style="float: left">
                                            <div class="col-sm-12">
                                                <div class="templatemo-input-icon-container">
                                                    <label class="btn btn-warning pull-right" style="width: 430px ;text-align: center;padding: 20px;">Choose file<center><input type="file" name="file" style="" required="no file chosen !"></center></label>
                                                </div>
                                                </div>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                          <div class="col-md-12">
                                            <div class="templatemo-input-icon-container">
                                                <i class="fa fa-pencil-square-o"></i>
                                                <textarea rows="10" cols="50" class="form-control" id="message" name="desc" placeholder="Description of Coures" required=""></textarea>
                                            </div>
                                          </div>
                                        </div>
                                        </div>					
                                </div>	        
                        <div class="form-group">
                          <div class="col-md-12">		            
                            <input type="submit" value="Upload" class="btn btn-warning pull-right" name ="btn_upload">		            
                          </div>
                        </div>		    	
                      </form>		 
                </div>
                                            <?php else:?>
                <h1 class="text-center margin-bottom-15">Sorry !! , You are not permitted to upload files now</h1>

                                    <?php endif ;?>
        </div>
</center>
<!--						<div class="instructor_title">AI</div>
                                                <div class="instructor_title">machine learing</div>
                                                <div class="instructor_title">advanced database</div>
                                                <div class="instructor_title">introduction of computer vision</div>
                                                <div class="instructor_title">complex data structures</div>
                                                <div class="instructor_title">Algorithms</div>
                                                <div class="instructor_title">information security</div>
                                                <div class="instructor_title">data storage</div>
                                                <div class="instructor_title">concept</div>-->
                                                

<br>
<br>
<br>
	<!-- Top Teachers -->

	<div class="teachers">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="section_title text-center">Your Courses</h2>
				</div>
			</div>
			<div class="row teachers_row">
                            <?php 
                            $qu="select * from file_upload where ins_usr='wa11' ";
                            //mysqli_query($con,$qu);
                            $result=mysqli_query($con,$qu);
                            while($row = mysqli_fetch_assoc($result)){
                                echo '<!-- Instructor -->
				<div class="col-lg-4 col-md-6">
					<div class="teacher d-flex flex-row align-items-center justify-content-start">
						<div class="teacher_image"><div><img src="images/book.png" alt=""></div></div>
						<div class="teacher_content">
							<div class="teacher_name"><a href="instructors.php">'.$row['file_name'].'</a></div>
							<div class="teacher_title">'.$row['subject'].'</div>
						</div>
					</div>
				</div>';
                            }
                            
                                ?>
				<!-- Instructor 
				<div class="col-lg-4 col-md-6">
					<div class="teacher d-flex flex-row align-items-center justify-content-start">
						<div class="teacher_image"><div><img src="images/instructor_5.jpg" alt=""></div></div>
						<div class="teacher_content">
							<div class="teacher_name"><a href="instructors.php">Sarah Parker</a></div>
							<div class="teacher_title">Teacher</div>
						</div>
					</div>
				</div>

				<!-- Instructor 
				<div class="col-lg-4 col-md-6">
					<div class="teacher d-flex flex-row align-items-center justify-content-start">
						<div class="teacher_image"><div><img src="images/instructor_6.jpg" alt=""></div></div>
						<div class="teacher_content">
							<div class="teacher_name"><a href="instructors.php">Sarah Parker</a></div>
							<div class="teacher_title">Teacher</div>
						</div>
					</div>
				</div>

				<!-- Instructor 
				<div class="col-lg-4 col-md-6">
					<div class="teacher d-flex flex-row align-items-center justify-content-start">
						<div class="teacher_image"><div><img src="images/instructor_7.jpg" alt=""></div></div>
						<div class="teacher_content">
							<div class="teacher_name"><a href="instructors.php">Sarah Parker</a></div>
							<div class="teacher_title">Teacher</div>
						</div>
					</div>
				</div>

				<!-- Instructor 
				<div class="col-lg-4 col-md-6">
					<div class="teacher d-flex flex-row align-items-center justify-content-start">
						<div class="teacher_image"><div><img src="images/instructor_8.jpg" alt=""></div></div>
						<div class="teacher_content">
							<div class="teacher_name"><a href="instructors.php">Sarah Parker</a></div>
							<div class="teacher_title">Teacher</div>
						</div>
					</div>
				</div>

				<!-- Instructor 
				<div class="col-lg-4 col-md-6">
					<div class="teacher d-flex flex-row align-items-center justify-content-start">
						<div class="teacher_image"><div><img src="images/instructor_9.jpg" alt=""></div></div>
						<div class="teacher_content">
							<div class="teacher_name"><a href="instructors.php">Sarah Parker</a></div>
							<div class="teacher_title">Teacher</div>
						</div>
					</div>
				</div>

				<!-- Instructor 
				<div class="col-lg-4 col-md-6">
					<div class="teacher d-flex flex-row align-items-center justify-content-start">
						<div class="teacher_image"><div><img src="images/instructor_10.jpg" alt=""></div></div>
						<div class="teacher_content">
							<div class="teacher_name"><a href="instructors.php">Sarah Parker</a></div>
							<div class="teacher_title">Teacher</div>
						</div>
					</div>
				</div>

				<!-- Instructor 
				<div class="col-lg-4 col-md-6">
					<div class="teacher d-flex flex-row align-items-center justify-content-start">
						<div class="teacher_image"><div><img src="images/instructor_11.jpg" alt=""></div></div>
						<div class="teacher_content">
							<div class="teacher_name"><a href="instructors.php">Sarah Parker</a></div>
							<div class="teacher_title">Teacher</div>
						</div>
					</div>
				</div>

				<!-- Instructor 
				<div class="col-lg-4 col-md-6">
					<div class="teacher d-flex flex-row align-items-center justify-content-start">
						<div class="teacher_image"><div><img src="images/instructor_12.jpg" alt=""></div></div>
						<div class="teacher_content">
							<div class="teacher_name"><a href="instructors.php">Sarah Parker</a></div>
							<div class="teacher_title">Teacher</div>
						</div>
					</div>
				</div>
-->
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_body">
			<div class="container">
				<div class="row">

					<!-- Newsletter -->
					<div class="col-lg-3 footer_col">
						<div class="newsletter_container d-flex flex-column align-items-start justify-content-end">
							<div class="footer_logo mb-auto"><a href="#">Lingua</a></div>
							<div class="footer_title">Subscribe</div>
							<form action="#" id="newsletter_form" class="newsletter_form">
								<input type="email" class="newsletter_input" placeholder="Email" required="required">
								<button class="newsletter_button"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
							</form>
						</div>
					</div>

					<!-- About -->
					<div class="col-lg-2 offset-lg-3 footer_col">
						<div>
							<div class="footer_title">About Us</div>
							<ul class="footer_list">
								<li><a href="#">Courses</a></li>
								<li><a href="#">Team</a></li>
								<li><a href="#">Brand Guidelines</a></li>
								<li><a href="#">Jobs</a></li>
								<li><a href="#">Advertise with us</a></li>
								<li><a href="#">Press</a></li>
								<li><a href="#">Contact us</a></li>
							</ul>
						</div>
					</div>

					<!-- Help & Support -->
					<div class="col-lg-2 footer_col">
						<div class="footer_title">Help & Support</div>
						<ul class="footer_list">
							<li><a href="#">Discussions</a></li>
							<li><a href="#">Troubleshooting</a></li>
							<li><a href="#">Duolingo FAQs</a></li>
							<li><a href="#">Schools FAQs</a></li>
							<li><a href="#">Duolingo English Test FAQs</a></li>
							<li><a href="#">Status</a></li>
						</ul>
					</div>

					<!-- Privacy -->
					<div class="col-lg-2 footer_col clearfix">
						<div>
							<div class="footer_title">Privacy & Terms</div>
							<ul class="footer_list">
								<li><a href="#">Community Guidelines</a></li>
								<li><a href="#">Terms</a></li>
								<li><a href="#">Brand Guidelines</a></li>
								<li><a href="#">Privacy</a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="copyright_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
							<div class="cr"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
							<div class="cr_right ml-md-auto">
								<div class="footer_phone"><span class="cr_title">phone:</span>+44 300 303 0266</div>
								<div class="footer_social">
									<span class="cr_social_title">follow us</span>
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/video-js/video.min.js"></script>
<script src="plugins/video-js/Youtube.min.js"></script>
<script src="js/instructors.js"></script>
</body>
</html>