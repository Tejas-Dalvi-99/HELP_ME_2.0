<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Helpme</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
       <link rel="stylesheet" href="css/owl.carousel.min.css"> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
   </head>
   <!-- body -->
   <body class="main-layout inner_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- top -->
                    <!-- header -->
         <header class="header-area">
            <div class="right">
               <a href="signin.html"><i class="fa fa-user" aria-hidden="true"></i></a>
            </div>
            <div class="container">
               <div class="row d_flex">
                  <div class="col-sm-3 logo_sm">
                     <div class="logo">
                        <a href="index.html"></a>
                     </div>
                  </div>
                  <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
                     <div class="navbar-area">
                        <nav class="site-navbar">
                           <ul>
                           <li><a href="index.html">Home</a></li> 
                           <li><a class="active" href="info panel.php">INFO PANEL</a></li>       
                             <li><a href="contact.html">Contact </a></li>  
                           </ul>
                           <button class="nav-toggler">
                           <span></span>
                           </button>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </header>
      <!-- end header -->
    
    <!-- cases -->
      <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>Information Panel</h2>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                   <!--  <figure><img src="images/cases1.png" alt="#"/></figure>-->
                     <div class="nostrud">
                        <h3>Case 1</h3>
                        <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam animi, odit ducimus illum distinctio nobis doloribus, corporis labore vitae numquam corrupti ipsum consequuntur perferendis molestias aliquam, fugit dicta cum incidunt.</p> -->
                        <?php 
                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $database = "login";

                          $conn = mysqli_connect($servername, $username, $password, $database);
                        
                          if (!$conn){
                           die("Sorry we failed to connect: ". mysqli_connect_error());
                           }
                           // else{
                           //    echo "Connection was successful<br>";
                           // }

                           $sql = "SELECT * FROM `newstable`";
                           $result = mysqli_query($conn, $sql);

                           $num = mysqli_num_rows($result);

                           if($num> 0){
                              echo "<br>";
                              while($row = mysqli_fetch_assoc($result)){
                                 echo $row['news1']; 
                             }
                             echo "<br>";
                             echo "<br>";
                             echo "<br>";
                           }
                           
                        ?>
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                    <!-- <figure><img src="images/cases2.png" alt="#"/></figure>-->
                     <div class="nostrud">
                        <h3>Cases 02</h3>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam fugit inventore atque maxime qui consectetur officiis, possimus vel optio eum. Eos rerum necessitatibus dolore tempora velit quis facere explicabo exercitationem.</p> -->
                        <?php 
                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $database = "login";

                          $conn = mysqli_connect($servername, $username, $password, $database);
                        
                          if (!$conn){
                           die("Sorry we failed to connect: ". mysqli_connect_error());
                           }
                           // else{
                           //    echo "Connection was successful<br>";
                           // }

                           $sql = "SELECT * FROM `newstable`";
                           $result = mysqli_query($conn, $sql);

                           $num = mysqli_num_rows($result);

                           if($num> 0){
                              echo "<br>";
                              while($row = mysqli_fetch_assoc($result)){
                                 echo $row['news2']; 
                             }
                             echo "<br>";
                             echo "<br>";
                             echo "<br>";
                           }
                           
                        ?>
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <!--  <figure><img src="images/cases3.png" alt="#"/></figure>-->
                     <div class="nostrud">
                        <h3>Cases 03</h3>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, a doloremque sequi possimus corrupti sed modi optio iusto vero, nulla minima numquam error officiis eveniet ipsa veniam nemo debitis laborum?</p> -->
                        <?php 
                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $database = "login";

                          $conn = mysqli_connect($servername, $username, $password, $database);
                        
                          if (!$conn){
                           die("Sorry we failed to connect: ". mysqli_connect_error());
                           }
                           // else{
                           //    echo "Connection was successful<br>";
                           // }

                           $sql = "SELECT * FROM `newstable`";
                           $result = mysqli_query($conn, $sql);

                           $num = mysqli_num_rows($result);

                           if($num> 0){
                              echo "<br>";
                              while($row = mysqli_fetch_assoc($result)){
                                 echo $row['news3']; 
                             }
                             echo "<br>";
                             echo "<br>";
                             echo "<br>";
                           }
                           
                        ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end cases -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                              <h3>Resources</h3>
                              <ul class="menu_footer">
                                 <li><a href="index.html">Home</a><li>
                                 <li><a href="javascript:void(0)">What we do</a><li>
                                 <li> <a href="javascript:void(0)">Media</a><li>
                                 <li> <a href="javascript:void(0)">Travel Advice</a><li>
                                 <li><a href="javascript:void(0)">Protection</a><li>
                                 <li><a href="javascript:void(0)">Care</a><li>
                              </ul>
                             
           
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                             <h3>About</h3>
                              <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various</p>
                           </div>
                        </div>
                     
                
                       
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="hedingh3  text_align_left">
                              <h3>Contact  Us</h3>
                                <ul class="top_infomation">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                           Making this the first true  
                        </li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>
                           Call : +01 1234567890
                        </li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>
                           <a href="Javascript:void(0)">Email : demo@gmail.com</a>
                        </li>
                     </ul>
                            
                           
                     </div>
                  </div>
                     <div class="col-lg-4 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                              <h3>countrys</h3>
                              <div class="map">
                                <img src="images/map.png" alt="#"/>
                              </div>
                           </div>
                        </div>
                    
               </div>
            </div>
            <!-- <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-8 offset-md-2">
                        <p>© 2020 All Rights Reserved. Design by <a href="https://html.design/"> Free html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div> -->
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>