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

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Exercise</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/navbars/">
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">
    <link rel="icon" href="images/logo.png">



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
        <a class="nav-link " href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">To Do</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="games.php">Games</a>
          <a class="dropdown-item" href="article.php">Articles</a>
          <a class="dropdown-item" href="article.php">Articles</a>
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
      <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #45b6fe">Hello <?php echo $_SESSION['username']; ?> </a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="info.php">View account</a>
          <a class="dropdown-item" href="../logout.php">Logout</a>
          
        </div>
      </li>
    </ul>
    
  </div>
</nav></main>
    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        
      </div>
      <div class="col-4 text-center">
        
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        
          
        </a>
        
      </div>
    </div>
  </header>

 

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark" style="background-image: url('images/c3.svg');">
    <div class="col-md-5 px-0">
      <h1 class="display-4 font-italic">Just 30 minutes of exercise a day</h1>
      <p class="lead my-3" style=" position: relative;">Physical activity and exercise can have immediate and long-term health benefits. Most importantly, regular activity can improve your quality of life. A minimum of 30 minutes a day can allow you to enjoy these benefits. If you are regularly physically active, you may: feel better – with more energy, a better mood, feel more relaxed and sleep better.</p>
      
    </div>
  </div>


<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        Benefits:
      </h3>

      <div class="blog-post">
 

      
       
        <p>The benefits of regular exercise are numerous and important. It’s not necessary to become a professional athlete or to follow the regimens of high-achieving body-builders in order to see results. Even exercising for 30 minutes every day and just getting your body moving will do the trick.
        </p>
        <blockquote>
          <p>The list of benefits of dedicating a half an hour daily to exercise also includes mental health advantages, in addition to physical ones. That includes boosting your mood and preventing depression.</p>
        </blockquote>
        <p>
        Since the positive effects of regular exercise are well-known and proven, it’s essential to keep at it and stay strong. It’s easy to fall short of your goals early on, but if you stick it out and achieve them, the results could be amazing.</p>
        <h2></h2>
        
<iframe width="700" height="350" src="https://www.youtube.com/embed/p1ElntiJmME" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br>
<iframe width="700" height="350" src="https://www.youtube.com/embed/Q-NbcgLN22o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


        <br><br>
        <h3>Keeping your brain in shape</h3>
        <p>Physical fitness gets plenty of attention, and for good reason. A healthy body can prevent conditions such as heart disease and diabetes, and help you maintain independence as you age.</p>
       
        <p>Mental fitness is just as important as physical fitness, and shouldn’t be neglected. Including mental dexterity exercises into your daily routine can help you reap the benefits of a sharper mind and a healthier body for years to come.</p>
        <h3>Mind-body connection</h3>
        <p>It’s no surprise that the more you help your body, the more you help your mind. Physical activity increases the flow of oxygen to your brain. It also increases the amount of endorphins, the “feel-good” chemicals, in your brain. For this reason, it’s not surprising that people who are in good physical shape also tend to enjoy a higher level of mental agility.</p>
        <ul>
          <li>Reading</li>
          <li>Day dreaming</li>
          <li>Finding Humour in life</li>
        </ul>
        <p>Affirmation, or talking to yourself in a positive way, involves strengthening neural pathways to bring your self-confidence, well-being, and satisfaction to a higher level.</p>
        
        
      </div><!-- /.blog-post -->

      <div class="blog-post">
       

        
      </div><!-- /.blog-post -->

      <div class="blog-post">
        
        
      </div><!-- /.blog-post -->

      

    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">Quarantine exercise tips</h4>
        <p class="mb-0"><em>1.</em> Drink a lot of water</p>
        <p class="mb-0"><em>2.</em> Use your own body weiht for warm up exercises</p>
        <p class="mb-0"><em>3.</em> Use the bags as weights for exercises like bicep curls and much more</p>
        <p class="mb-0"><em>4.</em> Try Youtube workout sessions</p>
        <p class="mb-0"><em>2.</em> Use your own body weiht for warm up exercises</p>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Some influencial Fitness freaks:</h4>
        <ol class="list-unstyled mb-0">
          <li><a href="https://www.instagram.com/fitmuscletv/" target="blank">Flying Beast</a></li>
          <li><a href="https://www.instagram.com/therock/">therock</a></li>
          <li><a href="https://www.instagram.com/menshealthmag">Men health magazine</a></li>
          <li><a href="https://www.instagram.com/emilyskyefit">Emily skye fit</a></li>
 
        </ol>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Related blogs:</h4>
        <ol class="list-unstyled">
          <li><a href="https://www.bornfitness.com/blog/">Bornfitness</a></li>
          <li><a href="https://www.reebok.com/us/blog?SSAID=314743&cm_mmc=Rbkaffiliates_SAS-_-314743-_-None-_-banner-_-dv%3AeCom-_-cn%3A450685-_-pc%3ANone&cm_mmc1=US&cm_mmc2=reebok-NA-eCom-Affiliates-314743-None-None-US-450685-None&dclid=CNaPmuq41uwCFRp1aAodUzwA5Q&sscid=a1k4_suj6o">Rebook</a></li>
          <li><a href="https://carrotsncake.com/category/fitness/">Carrot and cake</a></li>
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container --></div></main><br><br>


<footer class="footer" style="background-color: #878c94; color: white">
      <div class="container">
        <span  style="color: white">Contact Us on <a href="mailto: funqandf@gmail.com" style="color: white">mail@ </a>funqandf@gmail.com</span>
      </div>
    </footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="templates/assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
