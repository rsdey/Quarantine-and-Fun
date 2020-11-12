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

 ?>

<html \>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Courses</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/navbars/">
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">
    <link rel="icon" href="images/logo.png">
    <link href="../blog/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>


  <link href="../blog/css/clean-blog.min.css" rel="stylesheet">

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="templates/album/album.css" rel="stylesheet">

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
      <li class="nav-item dropdown active">
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
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academics</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="collpoll.php">Collpoll</a>
          <a class="dropdown-item" href="notes.php">Notes</a>
          <a class="dropdown-item" href="recording.php">Recorded Lectures</a>
          <a class="dropdown-item" href="timetable.php">Lecture schedule</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Support</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="members.php">Members</a>
          <a class="dropdown-item" href="sf.php">Suggestion and Feedback</a>
          <a class="dropdown-item" href="bugs.php">Report Bugs</a>
        
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="about.php">About Us <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-md-0">
      <ul class="navbar-nav">
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #45b6fe">Hello <?php echo $_SESSION['username']; ?> </a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="#">View account</a>
          <a class="dropdown-item" href="../logout.php">Logout</a>
          
        </div>
      </li>
    </ul>
    </form>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light " >
    <div class="container">
      <a class="navbar-brand" >Categories</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="internships.php">Internships</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="courses.php">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="nonac.php">Non - Academic</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
<header class="masthead" style="background-image: url('../images/cbg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Explore Learn </h1>
            <span class="subheading">Grow :)</span>
          </div>
        </div>
      </div>
    </div>
  </header>

    <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h2 class="post-title">
              In the air:
            </h2>
            <hr></div></div></div>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <title>Placeholder</title><img src="images/google.png" height="225">
            <div class="card-body">
              <p>Listing of all Free Google certifications</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://digitaldefynd.com/best-google-courses/" target="blank"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <title>Placeholder</title><img src="images/data.png" height="225">
            <div class="card-body">
              <p>Listing of all Data science certifications</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://digitaldefynd.com/best-data-science-certification-course-tutorial/" target="blank"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <title>Placeholder</title><img src="images/html.jpg" height="225">
            <div class="card-body">
            <p>All frontend essestials covered</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://digitaldefynd.com/web-development-courses/front-end-development-courses/" target="blank"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                </div>
            
              </div>
            </div>
          </div>
        </div>


  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h2 class="post-title">
              Categorized:
            </h2>
            <hr></div></div></div>

  <main role="main">

  
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <title>Placeholder</title><img src="images/ai.png" height="225">
            <div class="card-body">
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://www.coursera.org/courses?query=artificial%20intelligence" target="blank"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <title>Placeholder</title><img src="images/py.jpg" height="225">
            <div class="card-body">
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://www.codecademy.com/learn/paths/data-science?g_acctid=243-039-7011&g_keywordid=kwd-78752915383123:loc-90&g_adid=&g_keyword=best%20python%20course&g_campaign=ROW+Language%3A+Basic+-+Exact&g_adtype=search&g_network=o&g_adgroupid=1260040947303392&g_campaignid=370314517&utm_id=t_kwd-78752915383123:loc-90:ag_1260040947303392:cp_370314517:n_o:d_c&hsa_acc=2430397011&hsa_cam=10074200771&hsa_grp=1260040947303392&hsa_ad=&hsa_src=o&hsa_tgt=kwd-78752915383123:loc-90&hsa_kw=best%20python%20course&hsa_mt=e&hsa_net=adwords&hsa_ver=3&msclkid=aeb111dbc1181ff813374e4415492f29&utm_source=bing&utm_medium=cpc&utm_campaign=ROW%20Language%3A%20Basic%20-%20Exact&utm_term=best%20python%20course&utm_content=python" target="blank"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <title>Placeholder</title><img src="images/sql.png" height="225">
            <div class="card-body">
          
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://www.coursera.org/specializations/big-data?ranMID=40328&ranEAID=vedj0cWlu2Y&ranSiteID=vedj0cWlu2Y-qh9cvEFLLnX4utqYg8O30g&siteID=vedj0cWlu2Y-qh9cvEFLLnX4utqYg8O30g&utm_content=10&utm_medium=partners&utm_source=linkshare&utm_campaign=vedj0cWlu2Y" target="blank"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                </div>
            
              </div>
            </div>
          </div>
        </div>

        

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <title>Placeholder</title><img src="images/cp.png" height="225">
            <div class="card-body">
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://developers.google.com/edu/c++/" target="blank"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <title>Placeholder</title><img src="images/app.png" height="225">
            <div class="card-body">
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://www.udemy.com/course/devslopes-android-kotlin/?LSNPUBID=vedj0cWlu2Y&ranEAID=vedj0cWlu2Y&ranMID=39197&ranSiteID=vedj0cWlu2Y-pZqwsyLFUHtTpNCw2kRh1Q&utm_medium=udemyads&utm_source=aff-campaign"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <title>Placeholder</title><img src="images/aws.jpg" height="225">
            <div class="card-body">
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://www.coursera.org/learn/aws-fundamentals-building-serverless-applications?ranMID=40328&ranEAID=vedj0cWlu2Y&ranSiteID=vedj0cWlu2Y-3J6w5Q9OBOQ_tmp9krAB0w&siteID=vedj0cWlu2Y-3J6w5Q9OBOQ_tmp9krAB0w&utm_content=10&utm_medium=partners&utm_source=linkshare&utm_campaign=vedj0cWlu2Y" target="blank"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
</main>
</div></div></div></main>

<br></br>
<footer class="footer" style="background-color: #878c94; color: white">
      <div class="container">
        <span  style="color: white">Contact Us on <a href="mailto: funqandf@gmail.com" style="color: white">mail@ </a>funqandf@gmail.com</span>
      </div>
    </footer>
 


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="templates/assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
