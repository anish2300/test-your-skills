<?php
$servername='localhost';
$username='root';
$password='';
$dbname = 'project';
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}


?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Select Subject</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap');

*{
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
}
body{
  font-family: montserrat;
  background-image: url(quiz52.jpg);
}
nav{
  background: #0082e6;
  height: 80px;
  width: 100%;
}
label.logo{
  color: white;
  font-size: 35px;
  line-height: 80px;
  padding: 0 100px;
  font-weight: bold;
}
nav ul{
  float: right;
  margin-right: 20px;
}
nav ul li{
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}
nav ul li a{
  color: white;
  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
}
a.active,a:hover{
  background: #1b9bff;
  transition: .5s;
}
.checkbtn{
  font-size: 30px;
  color: white;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}
#check{
  display: none;
}
@media (max-width: 952px){
  label.logo{
    font-size: 30px;
    padding-left: 50px;
  }
  nav ul li a{
    font-size: 16px;
  }
}
@media (max-width: 858px){
  .checkbtn{
    display: block;
  }
  ul{
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #2c3e50;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
  }
  nav ul li{
    display: block;
    margin: 50px 0;
    line-height: 30px;
  }
  nav ul li a{
    font-size: 20px;
  }
  .navbar:hover,.navbar.active{
    background: none;
    color: #0082e6;
  }
  #check:checked ~ ul{
    left: 0;
  }

}

.primary-colors {
  color: #000;
  background: #DFF4F3;
}

.section-head {
  padding: 12px 16px;
  padding-top: 15px;
  width: 450px;
  text-align: center;
  box-shadow: 4px 4px 16px rgba(0, 0, 0, 0.3);
}

#main{
  display: flex;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.3);
}

.accordion {
  margin: 10px;
  font-weight: bolder;
  text-align: center;
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 30%;
  margin-left: 530px;
  border: none;
  outline: none;
  font-size: 28px;
  transition: 0.5s;
  font-family: 'Caveat', cursive;
}


.sec1{
  margin-top: 50px;
}

h2{
  padding-top: 50px;
  font-size: 50px;
  text-align: center;
  color: white;
  font-family: 'Caveat', cursive;

}

.active, .accordion:hover {
  background-color: #DEB887 ;
}

@media (max-width: 1500px){
  .accordion{

    float: center;
    margin-left: 35%;
    font-size: 22px;

  }
}

@media (max-width:751px ){

  body{
    min-height: 1000px;
  }
}

#footer{
  margin-top: 150px;
  position: relative;
  text-align: center;
  background-color: #0082e6;
  padding: 4% 15%;
}

  .social-icon{
    color: white;
    margin: 5px 10px;
    cursor: pointer;
    
  }
  .copyright{
    color: white;
    font-size: 17px;
  }
    </style>

  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">TYS</label>
      
      <ul>
        <li ><a href="user_details.php" class="navbar" style="font-size: 22px;"><i class='fas fa-user-circle'></i></a></li>
        <li><a class=" navbar" href="#">Home</a></li>
        <li><a class="navbar" href="user_history.php">History</a></li>
        <li><a class="navbar" href="#footer">Contact</a></li>
        <li><a class="navbar" href="index.php">Logout</a></a></li>
      </ul>
    </nav>




        <section >
            <h2>WELCOME <?php 
            session_start();
            echo strtoupper($_SESSION['username'])?> SELECT TOPIC OF YOUR CHOICE</h2>

          <br>

          	<button class="sec1 accordion "><a style="color: black;" href="user_java.php">JAVA</a></button>
            <!-- <a><input type="button" class="sec1 accordion" value="JAVA"></a>; -->
          	<button class="accordion"><a style="color: black;"href="user_python.php">PYTHON</a></button>
          	<button class="accordion"><a style="color: black;"href="user_dbms.php">DBMS</a></button>
          	<button class="accordion"><a style="color: black;"href="user_ds.php">DATA STRUCTURES</a></button>
          	<button class="accordion"><a style="color: black;" href="user_aptitude.php">APTITUDE TEST</a></button>

        </section>


        <footer id="footer">
      <a href="https://www.linkedin.com/in/anish-verliani-0426861b7/"><i class="social-icon fab fa-linkedin fa-lg"></i></a>
      <a href="https://www.facebook.com/profile.php?id=100011682423431"><i class="social-icon fab fa-facebook-f fa-lg"></i></a>
      <a href="https://www.instagram.com/jayesh_.21/?hl=fr"><i class="social-icon fab fa-instagram fa-lg"></i></a>
      <a href="mailto:anishverliani@gmail.com"><i class="social-icon fa fa-envelope fa-lg"></i></a>
      <p style="color: white;">Contact No: 9075526235</p>
      <p class="copyright">© Copyright 2020 TYS</p>
  
    </footer>

  </body>
</html>
