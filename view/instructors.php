<?php
    session_start();
    include_once 'connection.php';
?>


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
</head>
<body>
<?php
$con= mysqli_connect("localhost", "root", "", "educational");

        if(isset($_POST['btn_upload'])){
           $filetmp = $_FILES["file"]["tmp_name"];
	$filename = $_FILES["file"]["name"];
	$filetype = $_FILES["file"]["type"];
	$filepath = "saved/".$filename;
	move_uploaded_file($filetmp,$filepath);
	$sql = "INSERT INTO file_upload (file_name,upload_on,status) VALUES ('$filename','$filepath','$filetype')";
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

									<!-- Language -->
									<!--<div class="top_bar_lang">
										<span class="top_bar_title">site language:</span>
										<ul class="lang_list">
											<li class="hassubs">
												<a href="#">English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<ul>
													<li><a href="#">Ukrainian</a></li>
													<li><a href="#">Japanese</a></li>
													<li><a href="#">Lithuanian</a></li>
													<li><a href="#">Swedish</a></li>
													<li><a href="#">Italian</a></li>
												</ul>
											</li>
										</ul>
									</div>
-->
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
                                                                    <?php
                                                                        if(isset($_SESSION['user']))
                                                                        {
                                                                            $sess_count = count($_SESSION);
                                                                            for($i = 1 ; $i <= $sess_count - 2 ; $i++)
                                                                            {
                                                                                $sql_pname = "select page_url_header,page_name from `urls` where page_id = '".$_SESSION['page'.$i]."'";
                                                                                $result_pname = mysqli_query($conn, $sql_pname);
                                                                                $array_unpage = array();
                                                                                if($result_pname){
                                                                                    while ($row_n = mysqli_fetch_array($result_pname)){
                                                                                        if($row_n['page_name'] != 'Single_Blog' && $row_n['page_name'] != 'Single_Courses'){
                                                                                            echo '<li><a href="'.$row_n['page_url_header'].'">'.$row_n['page_name'].'</a></li>';
                                                                                        }
                                                                                    }
                                                                                }
                                                                            }
                                                                        } else {
                                                                            echo '<li><a href="index.php">Home</a></li>';
                                                                            echo '<li><a href="courses.php">Courses</a></li>';
                                                                            echo '<li><a href="contact.php">Contact</a></li>';
                                                                            echo '<li><a href="blog.php">Blog</a></li>';
                                                                        }
                                                                    ?>
<!--									<li><a href="index.php">Home</a></li>
									<li><a href="courses.php">Courses</a></li>
									<li><a href="instructors.php">Instructors</a></li>
									<li><a href="#">Events</a></li>
									<li><a href="blog.php">Blog</a></li>
									<li><a href="contact.php">Contact</a></li>-->
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

<<<<<<< HEAD
								<?php
                                                                    if(isset($_SESSION['user'])){
                                                                        echo '<div class="user_log"><a href="logout.php" class="a_log">Logout</a></div>
                                                                              ';
                                                                    }
                                                                    else {
                                                                        echo '<div class="user"><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i></a></div>
                                                                              <div class="hamburger menu_mm">
                                                                              <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                                                                              </div>';
                                                                    }
                                                                ?>
=======
								<div class="user"><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i></a></div>
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
>>>>>>> 995a18aabf13116de4446bf7929a12d0a23affbb
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
	
	<!-- Home -->

	<div class="home"></div>

	<!-- Video -->

	<div class="video">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="video_content">
						<div class="video_container_outer">
							<div class="video_overlay d-flex flex-column align-items-start justify-content-center">
								<div>Be</div><div>The Best</div><div>Teacher</div>
							</div>
							</div>
						</div>

                                    
                                    <?php
                                        $sql = "Select upload from `privilage` where usr_id= 3" ;
                                        $result = mysqli_query($con,$sql);
                                        $x = mysqli_fetch_array($result);
                                    ?>
                                     <?php if( $x[0] == "yes"  ) :?>
                                    <form method="POST" enctype="multipart/form-data" action="">
                                            <input type="file" name="file">
                                            <input type="submit" value="Upload" name ="btn_upload"> 
                                    </form>
                                    <?php endif ;?>
						<div class="instructor_title">AI</div>
                                                <div class="instructor_title">machine learing</div>
                                                <div class="instructor_title">advanced database</div>
                                                <div class="instructor_title">introduction of computer vision</div>
                                                <div class="instructor_title">complex data structures</div>
                                                <div class="instructor_title">Algorithms</div>
                                                <div class="instructor_title">information security</div>
                                                <div class="instructor_title">data storage</div>
                                                <div class="instructor_title">concept</div>
                                                
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Instructors -->

	<div class="instructors">
		<div class="instructors_background" style="background-image:url(images/instructors_background.png)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="section_title text-center">The Best Tutors in Town</h2>
				</div>
			</div>
			<div class="row instructors_row">

				<!-- Instructor -->
				<div class="col-lg-4 instructor_col">
					<div class="instructor text-center">
						<div class="instructor_image_container">
							<div class="instructor_image"><img src="images/instructor_1.jpg" alt=""></div>
						</div>
						<div class="instructor_name"><a href="instructors.php">Sarah Parker</a></div>
						<div class="instructor_title">Teacher</div>
						<div class="instructor_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
						</div>
						<div class="instructor_social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Instructor -->
				<div class="col-lg-4 instructor_col">
					<div class="instructor text-center">
						<div class="instructor_image_container">
							<div class="instructor_image"><img src="images/instructor_2.jpg" alt=""></div>
						</div>
						<div class="instructor_name"><a href="instructors.php">Sarah Parker</a></div>
						<div class="instructor_title">Teacher</div>
						<div class="instructor_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
						</div>
						<div class="instructor_social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Instructor -->
				<div class="col-lg-4 instructor_col">
					<div class="instructor text-center">
						<div class="instructor_image_container">
							<div class="instructor_image"><img src="images/instructor_3.jpg" alt=""></div>
						</div>
						<div class="instructor_name"><a href="instructors.php">Sarah Parker</a></div>
						<div class="instructor_title">Teacher</div>
						<div class="instructor_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
						</div>
						<div class="instructor_social">
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

	<!-- Top Teachers -->

	<div class="teachers">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="section_title text-center">Top Teachers in Every Field</h2>
				</div>
			</div>
			<div class="row teachers_row">

				<!-- Instructor -->
				<div class="col-lg-4 col-md-6">
					<div class="teacher d-flex flex-row align-items-center justify-content-start">
						<div class="teacher_image"><div><img src="images/instructor_4.jpg" alt=""></div></div>
						<div class="teacher_content">
							<div class="teacher_name"><a href="instructors.php">Sarah Parker</a></div>
							<div class="teacher_title">Teacher</div>
						</div>
					</div>
				</div>

				<!-- Instructor -->
				<div class="col-lg-4 col-md-6">
					<div class="teacher d-flex flex-row align-items-center justify-content-start">
						<div class="teacher_image"><div><img src="images/instructor_5.jpg" alt=""></div></div>
						<div class="teacher_content">
							<div class="teacher_name"><a href="instructors.php">Sarah Parker</a></div>
							<div class="teacher_title">Teacher</div>
						</div>
					</div>
				</div>

				<!-- Instructor -->
				<div class="col-lg-4 col-md-6">
					<div class="teacher d-flex flex-row align-items-center justify-content-start">
						<div class="teacher_image"><div><img src="images/instructor_6.jpg" alt=""></div></div>
						<div class="teacher_content">
							<div class="teacher_name"><a href="instructors.php">Sarah Parker</a></div>
							<div class="teacher_title">Teacher</div>
						</div>
					</div>
				</div>

				<!-- Instructor -->
				<div class="col-lg-4 col-md-6">
					<div class="teacher d-flex flex-row align-items-center justify-content-start">
						<div class="teacher_image"><div><img src="images/instructor_7.jpg" alt=""></div></div>
						<div class="teacher_content">
							<div class="teacher_name"><a href="instructors.php">Sarah Parker</a></div>
							<div class="teacher_title">Teacher</div>
						</div>
					</div>
				</div>

				<!-- Instructor -->
				<div class="col-lg-4 col-md-6">
					<div class="teacher d-flex flex-row align-items-center justify-content-start">
						<div class="teacher_image"><div><img src="images/instructor_8.jpg" alt=""></div></div>
						<div class="teacher_content">
							<div class="teacher_name"><a href="instructors.php">Sarah Parker</a></div>
							<div class="teacher_title">Teacher</div>
						</div>
					</div>
				</div>

				<!-- Instructor -->
				<div class="col-lg-4 col-md-6">
					<div class="teacher d-flex flex-row align-items-center justify-content-start">
						<div class="teacher_image"><div><img src="images/instructor_9.jpg" alt=""></div></div>
						<div class="teacher_content">
							<div class="teacher_name"><a href="instructors.php">Sarah Parker</a></div>
							<div class="teacher_title">Teacher</div>
						</div>
					</div>
				</div>

				<!-- Instructor -->
				<div class="col-lg-4 col-md-6">
					<div class="teacher d-flex flex-row align-items-center justify-content-start">
						<div class="teacher_image"><div><img src="images/instructor_10.jpg" alt=""></div></div>
						<div class="teacher_content">
							<div class="teacher_name"><a href="instructors.php">Sarah Parker</a></div>
							<div class="teacher_title">Teacher</div>
						</div>
					</div>
				</div>

				<!-- Instructor -->
				<div class="col-lg-4 col-md-6">
					<div class="teacher d-flex flex-row align-items-center justify-content-start">
						<div class="teacher_image"><div><img src="images/instructor_11.jpg" alt=""></div></div>
						<div class="teacher_content">
							<div class="teacher_name"><a href="instructors.php">Sarah Parker</a></div>
							<div class="teacher_title">Teacher</div>
						</div>
					</div>
				</div>

				<!-- Instructor -->
				<div class="col-lg-4 col-md-6">
					<div class="teacher d-flex flex-row align-items-center justify-content-start">
						<div class="teacher_image"><div><img src="images/instructor_12.jpg" alt=""></div></div>
						<div class="teacher_content">
							<div class="teacher_name"><a href="instructors.php">Sarah Parker</a></div>
							<div class="teacher_title">Teacher</div>
						</div>
					</div>
				</div>

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