<!DOCTYPE html>
<html lang="en">
<head>
    <title>DBMS</title>
    <link rel="shortcut icon" type="image/png" href="../image/logo1.jpg">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="home.css">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="bot.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <section>
        <div class="body hide_dbms view_home">
            <div>
                <img src="../image/tour.png" width="100px" height="100px">
            </div>
            <ul>
    <li><a href="home.php">Home</a></li>
    <li><a href="map.php">Map</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="package_list.php">Tour Package</a></li>
    <li><a href="condition.php">Terms & Condition</a></li>
    <li><a href="contact.php">Our Team</a></li>
    <li><a href="recover.php">Enquiry</a></li>
  </ul>
  <div class="icon">

    <a href="#" style="color:black;"><i class="fa fa-user" aria-hidden="true"></i></a>
    <a href="log.php" style="color:black;"><i class="fa fa-sign-out icon-home" aria-hidden="true"></i></a>
  </div>
 
        </div>
    </section>
    <section>
    <div class="view_dbms hide_home">
    <div>
                <img src="../image/tour.png" width="100px" height="100px">
            </div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="home.php">Home</a>
  <a href="map.php">Map</a>
  <a href="about.php">About</a>
  <a href="package_list.php">Tour Package</a>
  <a href="condition.php">Terms & Condition</a>
  <a href="contact.php">Our Team</a>
  <a href="recover.php">Enquiry</a>
</div>
<span class="colse" onclick="openNav()">&#9776;</span>
</div>
</section>
<style>
  .hide_home{
	visibility: hidden;
	display: none;
}
ul {
    padding: 0;
    margin: 0;
    display: flex;
    flex-wrap: wrap;
    margin-left: 30px;
}
.body {
    align-items: center;
    font-family: times;
    background-color: white;
    display: flex;
    margin-left: 30px;
}
.view_home{
	visibility: visible;
}
  /* for footer end */
  @media only screen and (max-width: 600px) {
	.hide_dbms{
		visibility: hidden;
		display: none;
	}
	.view_dbms{
		visibility: visible;
        display: block;
	}
  .sidenav {
	height: 100%;
	width: 0;
	position: fixed;
	z-index: 5;
	top: 0;
  right: 0;
	background-color: black !important;
	overflow-x: hidden;
	transition: 0.5s;
	padding-top: 60px;
  }
  
  .sidenav a {
	padding: 8px 8px 8px 32px;
	text-decoration: none;
	font-size: 25px;
	color: #ff3f00;
  font-family:cursive !important;
	display: block;
	transition: 0.3s;
  }
  
  .sidenav a:hover {
	color: #f1f1f1;
  }
  
  .sidenav .closebtn {
	position: absolute;
	top: 0;
	right: 25px;
	font-size: 36px;
	margin-left: 50px;
  }
  .colse{
  font-size: 30px;
    cursor: pointer;
     margin-top:-10vh; 
        float: right;
   margin-right: 20px; 
    margin-bottom: 18px; 
}
/*   

  @media screen and (max-height: 450px) {
	.sidenav {padding-top: 15px;}
	.sidenav a {font-size: 18px;}
  } */
}

  </style>
      <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>