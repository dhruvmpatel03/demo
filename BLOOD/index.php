<?php 
 include ('include/alert.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel="stylesheet" href="css/extra.css">
</head>
<style>
#alertContainer {
 position: fixed;
 top: 0;
 left: 0;
 width: 100%;
 z-index: 9999;
}
::-webkit-scrollbar {
 width: 0px;
 background-color: transparent;
}
</style>
<body>
 <body>
 <!-- Login Error -->
 <div class="container-fluid header-img">
 <?php 
 include ('include/header.php');
 if(isset($_SESSION['alert_success'])){ echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>'.$_SESSION['alert_success'].'</strong>
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
 <span aria-hidden="true">&times;</span>
 </button>
 </div>';
 unset($_SESSION['alert_success']);
}
 if(isset($_SESSION['alert_error'])){ echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong>'.$_SESSION['alert_error'].'</strong>
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
 <span aria-hidden="true">&times;</span>
 </button>
 </div>';
 unset($_SESSION['alert_error']);
}
 
 ?>

 <div class="row">
 <div class="col-md-6 offset-md-3">
 <div class="header">
 <h1 class="text-center">Donate the blood, save the life</h1>
 <p class="text-center">Donate the blood to help the others.</p>
 </div>
 <h1 class="text-center">Search The Donors</h1>
 <hr class="white-bar text-center">
 <form action="search.php" method="get" class="form-inline text-center"
 style="padding: 40px 0px 0px 5px; display: flex; justify-content: space-evenly;">
 <div class="form-group text-center justify-content-center">
 <select style="width: 210px; height: 45px;" name="city" id="city"
 class="form-control demo-default" required>
 <option value="">-- Select --</option>
 <option value="Ahmedabad">Ahmedabad</option>
 <option value="Surat">Surat</option>
 <option value="Vadodara">Vadodara</option>
 <option value="Rajkot">Rajkot</option>
 <option value="Bhavnagar">Bhavnagar</option>
 <option value="Jamnagar">Jamnagar</option>
 <option value="Junagadh">Junagadh</option>
 <option value="Anand">Anand</option>
 <option value="Navsari">Navsari</option>
 <option value="Morbi">Morbi</option>
 <option value="Gandhidham">Gandhidham</option>
 <option value="Nadiad">Nadiad</option>
 <option value="Surendranagar">Surendranagar</option>
 <option value="Bharuch">Bharuch</option>
 <option value="Mehsana">Mehsana</option>
 <option value="Bhuj">Bhuj</option>
 <option value="Anjar">Anjar</option>
 <option value="Porbandar">Porbandar</option>
 <option value="Godhra">Godhra</option>
 <option value="Palanpur">Palanpur</option>
 <option value="Valsad">Valsad</option>
 <option value="Himmatnagar">Himmatnagar</option>
 </select>
 </div>
 <div class="form-group justify-content-center">
 <select name="blood_group" id="blood_group"
 style="padding: 0 20px; width: 210px; height: 45px; margin: 10px 0px"
 class="form-control demo-default">
 <option value="A+">A+</option>
 <option value="A-">A-</option>
 <option value="B+">B+</option>
 <option value="B-">B-</option>
 <option value="AB+">AB+</option>
 <option value="AB-">AB-</option>
 <option value="O+">O+</option>
 <option value="O-">O-</option>
 </select>
 </div>
 <div class="form-group center-aligned " style="width: 100%; margin-top: 10px;">
 <button type="submit" class="btn btn-lg btn-danger"
 style="margin: auto; width: 200px;">Search</button>
 </div>
 </form>
 </div>
 </div>
 </div>
 <!-- header ends -->
 <!-- donate section -->
 <div class="container-fluid red-background">
 <div class="row">
 <div class="col-md-12">
 <h1 class="text-center"
 style="color: white; font-weight: 700;padding: 10px 0 0 0; margin-top: 30px;">Donate 
The Blood
 </h1>
 <hr class="white-bar">
 <p class="text-center pera-text">
 We are a group of exceptional programmers; our aim is to promote education. If you 
are a
 student, then
 contact us to secure your future. We deliver free international standard video lectures 
and
 content. We
 are also providing services in Web & Software Development.
 We are a group of exceptional programmers; our aim is to promote education. If you 
are a
 student, then
 contact us to secure your future. We deliver free international standard video lectures 
and
 content. We
 are also providing services in Web & Software Development.
 </p>
 <div class=" row d-flex justify-content-center align-content-center ">
 <a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life 
Saver!</a>
 </div>
 </div>
 </div>
 </div>
 <!-- end doante section -->
 <div class="container">
 <div class="row">
 <div class="col-md-4 ">
 <div class="card ">
 <h3 class="text-center red">Our Vision</h3>
 <img src="img/binoculars.png" alt="Our Vision" class="img img-responsive" 
width="168"
 height="168">
 <p class="text-center">
 Our vision is to create a world where blood donation is easily accessible to those in 
need, and where every person has the opportunity to become a blood donor and make a positive 
impact in their community. We believe in leveraging technology to make the donation process more 
efficient, secure, and user-friendly, ultimately contributing to the overall health and wellbeing of our 
society.
 </p>
 </div>
 </div>
 <div class="col-md-4">
 <div class="card">
 <h3 class="text-center red">Our Goal</h3>
 <img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" 
height="168">
 <p class="text-center">Our goal is to create a robust blood donation platform that 
connects donors and seekers seamlessly. We strive to promote a culture of blood donation and help
bridge the gap between those in need of blood and those willing to donate. By doing so, we aim to 
contribute to the overall health and wellbeing of our community and make a positive impact on 
society.
 </p>
 </div>
 </div>
 <div class="col-md-4">
 <div class="card">
 <h3 class="text-center red">Our Mission</h3>
 <img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" 
height="168">
 <p class="text-center">
 Our mission is to save lives by connecting blood donors with those in need through a 
user-friendly that allows donors to easily register and donate blood, and secure platform. We strive 
to promote the importance of blood donation and make the process as efficient and effective as 
possible, ultimately contributing to the overall health and wellbeing of our community.
 </p>
 </div>
 </div>
 </div>
 </div>
 </body>
</html>
<?php
//include footer file
include ('include/footer.php');
?>