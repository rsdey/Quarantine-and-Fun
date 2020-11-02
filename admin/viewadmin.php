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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
    <link href="css/carousel.css" rel="stylesheet">



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
    <style>
*{

  margin:0; padding: 0; box-sizing: border-box;

}

.main-div {

  width: 100% ;height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;

}

.center-div{

  width: 90%;
  height: 80vh;
  background: -webkit-linear-gradient(left, #0d325f, #0d325f);
  padding: 20px 0 0 0 ;
  box-shadow: 0 10px 20px 0 rbga(0,0,0,0.03);
  border-radius: 10px;
}

h1{
font-size: 18px;
color: #000;
text-align: center;
margin-top: -20px;
margin-bottom: 20px;
text-transform: capitalize;
}

table{

  border-collapse: collapse;
  background-color: #fff;
  box-shadow: 0 10px 20px 0 rbga(0,0,0,0.03);
  border-radius: 10px;
  margin: auto;
}

th,td{

  border: 1px solid #f2f2f2;
  padding: 8px 30px;
  text-align: center;
  color: grey;

}
th{

  text-transform: uppercase;
  font-weight: 500;
  text-align: center;

}

td{font-size: 13px}

.email-style{

  font-size: 14px;
  color: grey;
  display: inline-block;
  background: #f2f2f2;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
  line-height: 30px;
  padding: 0 14px;

}


.post-class{

  text-transform: uppercase;
}

.fa{

  font-size: 18px;
}

.fa-edit{

  color: #6c376a;
}

.fa-trash{

  color: #ff0000;
}

a{

  text-decoration: none; display: flex; justify-content: center; text-align: center;
}

.register{

  background: -webkit-linear-gradient(left, #3931af, #00c6ff);
  margin-top: 3%
  padding: 3%; 
  box-shadow: 0 10px 20px 0 rbga(0,0,0,0.03);
}

.register-left{

  text-align: center;
  color: #fff;
  margin-top: 4%;
}

.register-left a{
  text-decoration: none;
  border: none;
  border-radius: 1.5rem;
  padding: 2%;
  width: 60%;
  background: #f8f9fa;
  font-weight: bold;
  color: #383d41;
  margin: auto;
  cursor: pointer;
}


.register-right{

  background: #f8f9fa;
  border-top-left-radius: 10% 50%;
  border-bottom-left-radius: 10% 50%;
  box-shadow: 0 10px 20px 0 rbga(0,0,0,0.03); 
}

.register-left img{

  margin-top: 15%;
  margin-bottom: 15%;
  width: 55%;
  -webkit-animation: mover 2s infinite alternate;
  animation: mover 1s infinite alternate;

}

@-webkit-keyframes mover{
  0%{transform: translateY(0);}
  100%{transform: translateY(-20px);}
}

@keyframes mover{
  0%{transform: translateY(0);}
  100%{transform: translateY(-20px);}
}

.register-left p{

  font-weight: lighter;
  padding: 12%;
  margin-top: -5%
}

.register .register-form{

  padding: 10%;
  margin-top: 10%;
}

.btnRegister{

  float: right;
  margin-top: 10%;
  border:none;
  border-radius: 1.5rem;
  padding: 2%;
  background: #0062cc;
  color: #fff;
  font-weight: 600;
  width: 50%;
  cursor: pointer;
}

.register .nav-tabs .nav-link:hover{
  border: none;
}

.register .nav-tabs .nav-link.active{
  width: 100px;
  border: 2px solid #0062cc;
  border-top-left-radius: 1.5rem;
  border-bottom-left-radius: 1.5rem;
  color: #0062cc;
}

.register-heading{

  font-size: 20px;
  text-align: center;
  margin-top: 8%;
  margin-bottom: -15%;
  color: #495057;
  text-transform: capitalize;
}

::placeholder{

  font-size: 14px;
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
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academics</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="collpoll.php">Collpoll</a>
          <a class="dropdown-item" href="notes.php">Notes</a>
          <a class="dropdown-item" href="recording.php">Recorded Lectures</a>
          <a class="dropdown-item" href="timetable.php">Lecture schedule</a>
         
        </div>
      </li>
      <li class="nav-item dropdown active">
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
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #45b6fe">Hello <?php echo $_SESSION['username']; ?> </a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="info.php">View account</a>
          <a class="dropdown-item" href="../logout.php">Logout</a>
          
        </div>
      </li>
    </ul>
    </form>
  </div>
</nav>

<br><br>
  <div class="main-div">
    <h1>List of Admins</h1><br>
    <h1>
            
            <input type="search" placeholder="Search..." class="form-control search-input" data-table="member-list"/>
        </h1>
    <div class="center-div">
      <div class="table-responsive">
        <table class="member-list">
          <thead>
            <th>id</th>
            <th>Name</th>
            <th>username</th>
            <th>email</th>
            <th>Mobile no.</th>
            
            <th>Operations</th>
          </thead>
          <tbody>

    <?php 

      include '../dbconn.php';
      $selectquery = " select * from admin ";
      $query = mysqli_query($con, $selectquery);
      

      while ($result = mysqli_fetch_assoc($query)) {
        
    
        ?>

            
            <tr>
              <td><?php echo $result['id']; ?></td>
              <td><?php echo $result['fname']; ?></td>
              <td><?php echo $result['username']; ?></td>
              <td><?php echo $result['email']; ?></td>
              <td><?php echo $result['mobile']; ?></td>
          
              
              <td><a href="../deleteadmin.php?id=<?php echo $result['id']; ?>"><i class="fa fa-trash" aria-hidden="true">
             
            </tr>
    

    <?php         

        }


     ?>





          </tbody>
        </table>
      </div>
    </div>
  </div>

<script>
        (function(document) {
            'use strict';

            var TableFilter = (function(myArray) {
                var search_input;

                function _onInputSearch(e) {
                    search_input = e.target;
                    var tables = document.getElementsByClassName(search_input.getAttribute('data-table'));
                    myArray.forEach.call(tables, function(table) {
                        myArray.forEach.call(table.tBodies, function(tbody) {
                            myArray.forEach.call(tbody.rows, function(row) {
                                var text_content = row.textContent.toLowerCase();
                                var search_val = search_input.value.toLowerCase();
                                row.style.display = text_content.indexOf(search_val) > -1 ? '' : 'none';
                            });
                        });
                    });
                }

                return {
                    init: function() {
                        var inputs = document.getElementsByClassName('search-input');
                        myArray.forEach.call(inputs, function(input) {
                            input.oninput = _onInputSearch;
                        });
                    }
                };
            })(Array.prototype);

            document.addEventListener('readystatechange', function() {
                if (document.readyState === 'complete') {
                    TableFilter.init();
                }
            });

        })(document);
    </script>


</i></a></td></tr></tbody></table></div></div></div></main>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="templates/assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
