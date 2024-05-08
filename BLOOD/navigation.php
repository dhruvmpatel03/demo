<?php 
include 'LoginModal.php';
include 'SignupModal.php';
include 'UpdateModal.php';
?>
<style>
.navbar.fixed-top {
 transition: top 0.3s;
}
body.modal-open .navbar.fixed-top {
 top: 0 !important;
}
.dropdown-item:hover {
 color: white;
 background-color: #dc3545 !important;
 border-radius: 2px;
}
</style>
<body>
 <!-- Navigation starts -->
 <nav id="mainNav" class="navbar fixed-top navbar-default navbar-expand-lg navbar-light bg-light 
">
 <a class="navbar-brand" href="./index.php">Blood Donor Directory</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#navbarTogglerDemo02"
 aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
 <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
 </ul>
 <ul class="navbar-nav form-inline my-2 my-lg-0">
 <li class="nav-item">
 <a class="nav-link" href="index.php">Home</a>
 </li>
 <?php 
 if(isset($_SESSION['userlogin']) && $_SESSION['userlogin'] == true){
 
 if(isset($_SESSION['donated_form']) && $_SESSION['donated_form'] == "true"){
 }else{
 echo '<li class="nav-item">
 <a class="nav-link" href="donate.php">Donate</a>
 </li>';}
 }else{
 
 echo '<li class="nav-item">
 <a class="nav-link" href="" id="donorsLink">Donate</a>
 </li>';
 
 }
 ?>
<li class="nav-item">
 <a class="nav-link" href="donor.php">Donors</a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="search.php">Search</a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="about.php">About Us</a>
 </li>
 <?php 
 if(isset($_SESSION['userlogin']) && $_SESSION['userlogin'] == true){
 if((isset($_SESSION['donated_form']) && $_SESSION['donated_form'] == "true") || 
(isset($_SESSION['hide_donate_nav']) && $_SESSION['hide_donate_nav'] == "true")){
 echo '
 <div class="dropdown">
 <button class="btn btn-outline-danger dropdown-toggle ml-2" type="button" 
id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
 '.$_SESSION['user_name_'].'
 </button>
 <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
 <a class="dropdown-item" href="dashboard.php">Dashboard</a>
 <a class="dropdown-item" href="#updateProfileModal" datatoggle="modal">Donor update</a>
 <a class="dropdown-item" href="userchat.php">Recive Chats</a>
 <a class="dropdown-item" href="include/logout.php" ">Logout</a>
 </div>
 </div>
 ';
 }else{
 echo '
 <div class="dropdown">
 <button class="btn btn-outline-danger dropdown-toggle ml-2" type="button" 
id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
 '.$_SESSION['user_name_'].'
 </button>
 <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
 <a class="dropdown-item" href="userchat.php">Recive Chats</a>
 <a class="dropdown-item" href="include/logout.php" ">Logout</a>
 </div>
 </div>
 ';
 }
 }else{
 
 echo ' <li class="nav-item">
 <button type="button" class="btn btn-outline-danger ml-2" data-toggle="modal" 
 data-target="#signupModal" style="
 ">Sign up</button>
 </li>
 
 <li class="nav-item">
 <button type="button" class="btn btn-outline-danger ml-2" data-toggle="modal" 
data-target="#loginModal" 
 >Login </button>
 </li>';
 }
 ?>
 </ul>
 </div>
 </nav>
 <script>
 // Get the "Donors" link
 var donorsLink = document.getElementById("donorsLink");
 // Add a click event listener to the link
 donorsLink.addEventListener("click", function(e) {
 e.preventDefault(); // prevent the link from navigating to donor.php
 $('.modal').modal('hide');
 var alertHTML =
 '<div style="margin:0;"class="alert alert-warning alert-dismissible fade show" role="alert">' +
 'Please login to access the Donote page' +
 '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
 '<span aria-hidden="true">&times;</span>' +
 '</button>' +
 '</div>';
 $('#alertContainer').html(alertHTML);
 $('#loginModal').modal('show');
 $('#loginModal').on('hidden.bs.modal', function() {
 $('#alertContainer').html('');
 });
 });
 </script>
</body>
