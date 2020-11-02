<?php 

session_start();

if(!isset($_SESSION['username']))
{

?>
        <script>alert('Please Login Again');
        location.replace("../index.php");
        </script>
        
        <?php

      }

  
  include '../dbconn.php';


  $id = $_GET['id'];

  $selectquery = " select * from user where id=$id";
  $query = mysqli_query($con, $selectquery);

  $result = mysqli_fetch_assoc($query);



 ?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Quarantine & Fun</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/navbars/">
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">
    <link rel="icon" href="images/logo.png">



    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>


<main role="main">

  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php"><img src="images/logo.png" style="width: 55px; height: 55px"></img> &nbsp; Quarantine and fun</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample04">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">To Do</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="games.php">Games</a>
          <a class="dropdown-item" href="vc.php">Video calls</a>
          <a class="dropdown-item" href="exercise.php">Exercise</a>
          <a class="dropdown-item" href="courses.php">Courses</a>
          <a class="dropdown-item" href="internships.php">Internships</a>
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="covid.php">Covid-19 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academics</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="collpoll.php">Collpoll</a>
          <a class="dropdown-item" href="notes.php">Notes</a>
          <a class="dropdown-item" href="recording.php">Recorded Lectures</a>
          <a class="dropdown-item" href="timetable.php">Lecture schedule</a>
         
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="members.php">Members</a>
          <a class="dropdown-item" href="viewadmin.php">Admins</a>
          <a class="dropdown-item" href="viewsf.php">Suggestion and Feedback</a>
          <a class="dropdown-item" href="viewbugs.php">Bugs</a>
        
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="about.php">About Us <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-md-0">
      <ul class="navbar-nav">
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ffaf7a">Hello <?php echo $_SESSION['username']; ?> </a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="info.php">View account</a>
          <a class="dropdown-item" href="../logout.php">Logout</a>
          
        </div>
      </li>
    </ul>
    </form>
  </div>
</nav>

    <div class="container">
  <div class="py-5 text-center">
    
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      
      
      
          <div>
            
          </div>
          
        
        
          <div>
            
          </div>
          
      
          <div>
            
          </div>
          
      
        
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Update data</h4>
      <form class="needs-validation" method="POST" action="">

          <?php 


if(isset($_POST['submit'])){

  $id = $_GET['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $username = $_POST['username'];
  $gender = $_POST['gender'];
  $year = $_POST['year'];
  $branch = $_POST['branch'];
  $insta = $_POST['insta'];
  $linkedin = $_POST['linkedin'];
  $dob = $_POST['dob'];



$updatequery = " update user set fname='$name', username='$username', email='$email',gender='$gender',mobile='$mobile',year='$year',branch='$branch',insta='$insta',dob='$dob' ,linkedin='$linkedin' where id=$id ";

  

  $query = mysqli_query($con, $updatequery);

  if($query)
{

  ?>
  <script>alert('Updated successfully');
location.replace("members.php");

  </script>
  <?php 

}else{
  ?>
  <script>alert('Updation unsuccessful');
location.replace("members.php");
</script>
  <?php
}

}



 ?>




        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="<?php echo $result['fname']; ?>" name="name">
  
          </div>
          <div class="col-md-6 mb-3">
            
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo $result['username']; ?>">
            
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email </label>
          <input type="email" class="form-control" id="email" name="email" value="<?php echo $result['email']; ?>">
          
        </div>

        <div class="mb-3">
          <label for="address">Mobile number</label>
          <input type="text" class="form-control" name="mobile" value="<?php echo $result['mobile']; ?>">
          
        </div>

        <div class="mb-3">
          <label for="address2">Date of Birth: <span class="text-muted">(DD-MM-YYYY)</span></label>
          <input type="text" class="form-control" id="dob" name="dob" placeholder="" value="<?php echo $result['dob']; ?>">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
          <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Year:<span class="text-muted">(FY/SY/TY/B.tech)</span></label>
            <input type="text" class="form-control" id="cc-name" name="year" placeholder=""  value="<?php echo $result['year']; ?>">
            
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Branch:<span class="text-muted">(IT/COMP/CIVI/MECH)</span></label>
            <input type="text" class="form-control" id="cc-number" name="branch" placeholder=""  value="<?php echo $result['branch']; ?>">
            
          </div>
        </div>
            
          </div>
          
          
        </div>
        
        <div class="col-md-6 mb-3">
            <label for="cc-number">Gender:<span class="text-muted">(M/F/O)</span></label>
            <input name="gender" type="text" class="form-control"  id="gender" placeholder=""  value="<?php echo $result['gender']; ?>">
            
          </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Instagram link</label>
            <input type="text" class="form-control" id="cc-name" name="insta" placeholder=""  value="<?php echo $result['insta']; ?>">
            
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Linkedin Link</label>
            <input type="text" class="form-control" id="cc-number" name="linkedin" placeholder=""  value="<?php echo $result['linkedin']; ?>">
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            
          </div>
          <div class="col-md-3 mb-3">
            
          </div>
        </div>
        <hr class="mb-4">
        <input type="submit" class="btnRegister" name="submit" value="Update">

      </form>
    </div>
  </div>


</div></main>
  <br><br><br><br><br>






<footer class="footer" style="background-color: #878c94; color: white">
      <div class="container">
        <span  style="color: white">Contact Us on <a href="mailto: funqandf@gmail.com" style="color: white">mail@ </a>funqandf@gmail.com</span>
      </div>
    </footer>
 


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="templates/assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
