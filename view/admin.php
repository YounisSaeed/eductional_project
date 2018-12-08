<?php
    session_start();
    include_once 'connection.php';
?>

<?php
    $query = "select * from `usertype` where typ!='admin' ";
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
<link rel="stylesheet" type="text/css" href="styles/admin.css">

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
<!--									<li class="active"><a href="index.php">Home</a></li>
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
                   <input type="checkbox" id = "pagename" value="Home" name="pagename[]" > Home
                  <input type="checkbox" id = "pagename" value="Courses" name="pagename[]" > Courses
                  <input type="checkbox" id = "pagename" value="Single_Courses" name="pagename[]" > Single_Courses

                  <input type="checkbox" id = "pagename" value="Blog" name="pagename[]" > Blog <br> <br>
                  <input type="checkbox" id = "pagename" value="Single_Blog" name="pagename[]" style="margin-left:75px;"> Single_Blog
                  
                  <input type="checkbox" id = "pagename" value="Contact" name="pagename[]" > Contact 
                  <input type="checkbox" id = "pagename" value="Instructors" name="pagename[]" > Instructors
               </div>
               
               <button  name="send"> Submit</button>
           </form>
      
       </div>
        
       <div class="ins">
            <form action="Privilege.php" method="post">
<<<<<<< HEAD
                <P style="color: #fff">Instructor Privillege :</P>
=======
                <P>Instructor Privilege :</P>
>>>>>>> 2f07de5432d77f3e4d34cfc646868a5f398871ac
                <div class="radio">
                    <input type="radio" name="upload" value="yes" > yes
                    <input type="radio" name="upload" value="no" >  NO 
                </div>
                 <button name="done">done</button>

            </form> 
       </div>   
          
  </div>
</body>
</html>