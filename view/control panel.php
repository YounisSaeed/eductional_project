<?php
include_once 'connection.php';
?>

<?php
    $query = "select * from `usertype`";
    $result = mysqli_query($conn, $query); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Lingua</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Lingua project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/control panel.css">
</head>
<body>

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
									<div class="top_bar_lang">
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
									<li class="active"><a href="index.php">Home</a></li>
									<li><a href="courses.php">Courses</a></li>
									<li><a href="instructors.php">Instructors</a></li>
									<li><a href="#">Events</a></li>
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

								<div class="user"><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></div>
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
 <div class="privlege">
     <form method="post" action='Privilege.php'>
             <select name="usertype" id="usertype" value="usertype">
                
                <option> -- Select Usertype -- </option>
                 <?php while($row1 = mysqli_fetch_array($result)):;?>
                 <option> <?php echo $row1[1]; ?></option>   
                 <?php endwhile ;?> 
              <!-- <option value="Admin">Admin</option>
               <option value="Instructor">Instructor</option>
               <option value="Student">student</option> -->
               </select>
               
               <div class="check">
                  <input type="checkbox" id = "pagename" value="pageName_1" name="pagename"> Home
                  <input type="checkbox" id = "pagename" value="pageName_2" name="pagename"> Courses
                  <input type="checkbox" id = "pagename" value="pageName_3" name="pagename"> Instructor
               </div>
               
               <button name="submit"> Submit</button>
           </form>
      
   </div>
        
        
  <div class="admin">
      <p> Create New Admin </p>
     <form method="post" action='Privilege.php'>
          <input type ="text" name="f_name" placeholder="First name"> <br>
          <input type ="text" name="l_name" placeholder="Last name"> <br>
          <input type ="email" name="email" placeholder="E_mail"> <br><br>
          Experience :
          <input type ="radio" name="experience" value="medium"> medium
          <input type ="radio" name="experience" value="good"> good
          <input type ="radio" name="experience" value="very good"> very good
          <button name="add"> Add </button>
          
      </from>
  </div>
        
        
        
        
        
        
 </div>
</body>
</html>
