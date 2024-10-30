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

    body {
      background-color:white !important;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}

#chartdiv {
  width: 100%;
  height:100%;
  margin-top:15vh;
}
.inframe{
  width: 100%;
  height: 100%;
}
</style>
<body>
  <iframe src="http://localhost:3000/react-india-region-selector" class="inframe"></iframe>
    <section class="action">
    <a class="action" href="weather_dbms.php" target="_blank"><img src="../image/climate.png" alt="climate" class="img_weather"></a>
</section>
    <section>
    <!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="bot.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
  <script src="script.js" defer></script>
</head>

<body>
  <button class="chatbot-toggler">
    <span class="material-symbols-rounded">mode_comment</span>
    <span class="material-symbols-outlined">close</span>
  </button>
  <div class="chatbot">
    <header>
      <h2>Chatbot</h2>
      <span class="close-btn material-symbols-outlined">close</span>
    </header>
    <ul class="chatbox">
      <li class="chat incoming">
        <span class="material-symbols-outlined">smart_toy</span>
        <p>Hi there 👋<br>How can I help you today?</p>
      </li>
    </ul>
    <div class="chat-input">
      <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
      <span id="send-btn" class="material-symbols-rounded">send</span>
    </div>
  </div>

</body>

</html>
</section>
</body>
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
/* Import Google font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

/* body {
  background: #E3F2FD;
} */

.chatbot-toggler {
  position: fixed;
  bottom: 30px;
  right: 35px;
  outline: none;
  border: none;
  height: 50px;
  width: 50px;
  display: flex;
  cursor: pointer;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  background: black; 
  transition: all 0.2s ease;
}

body.show-chatbot .chatbot-toggler {
  transform: rotate(90deg);
}

.chatbot-toggler span {
  color: #ff3f00;
  position: absolute;
}

.chatbot-toggler span:last-child,
body.show-chatbot .chatbot-toggler span:first-child {
  opacity: 0;
}

body.show-chatbot .chatbot-toggler span:last-child {
  opacity: 1;
}

.chatbot {
  position: fixed;
  right: 35px;
  bottom: 90px;
  width: 420px;
  background: #fff;
  border-radius: 15px;
  overflow: hidden;
  opacity: 0;
  pointer-events: none;
  transform: scale(0.5);
  transform-origin: bottom right;
  box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1),
    0 32px 64px -48px rgba(0, 0, 0, 0.5);
  transition: all 0.1s ease;
}

body.show-chatbot .chatbot {
  opacity: 1;
  pointer-events: auto;
  transform: scale(1);
}

.chatbot header {
  padding: 16px 0;
  position: relative;
  text-align: center;
  color:#ff3f00 ;
  background: black;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.chatbot header span {
  position: absolute;
  right: 15px;
  top: 50%;
  display: none;
  cursor: pointer;
  transform: translateY(-50%);
}

header h2 {
  font-size: 1.4rem;
}

.chatbot .chatbox {
  overflow-y: auto;
  height: 510px;
  padding: 30px 20px 100px;
}

.chatbot :where(.chatbox, textarea)::-webkit-scrollbar {
  width: 6px;
}

.chatbot :where(.chatbox, textarea)::-webkit-scrollbar-track {
  background: #fff;
  border-radius: 25px;
}

.chatbot :where(.chatbox, textarea)::-webkit-scrollbar-thumb {
  background: #ccc;
  border-radius: 25px;
}

.chatbox .chat {
  display: flex;
  list-style: none;
}

.chatbox .outgoing {
  margin: 20px 0;
  justify-content: flex-end;
}

.chatbox .incoming span {
  width: 32px;
  height: 32px;
  color:#ff3f00 ;
  cursor: default;
  text-align: center;
  line-height: 32px;
  align-self: flex-end;
  background: black;
  border-radius: 4px;
  margin: 0 10px 7px 0;
}

.chatbox .chat p {
  white-space: pre-wrap;
  padding: 12px 16px;
  border-radius: 10px 10px 0 10px;
  max-width: 75%;
  color: #fff;
  font-size: 0.95rem;
  background: black;
}

.chatbox .incoming p {
  border-radius: 10px 10px 10px 0;
}

.chatbox .chat p.error {
  color: #721c24;
  background: #f8d7da;
}

.chatbox .incoming p {
  color:#ff3f00;
  background: #f2f2f2;
  font-weight:700;
}

.chatbot .chat-input {
  display: flex;
  gap: 5px;
  position: absolute;
  bottom: 0;
  width: 100%;
  background: #fff;
  padding: 3px 20px;
  border-top: 1px solid #ddd;
}

.chat-input textarea {
  height: 55px;
  width: 100%;
  border: none;
  outline: none;
  resize: none;
  max-height: 180px;
  padding: 15px 15px 15px 0;
  font-size: 0.95rem;
}

.chat-input span {
  align-self: flex-end;
  color: #724ae8;
  cursor: pointer;
  height: 55px;
  display: flex;
  align-items: center;
  visibility: hidden;
  font-size: 1.35rem;
}

.chat-input textarea:valid~span {
  visibility: visible;
}
.action:link, .action:visited {
    background-color: #f44336;
    color: white;
    /* padding: 14px 25px; */
    text-align: center;
    text-decoration: none;
    display: inline-block;
    position: fixed;
    bottom: 25px;
    left: 55px;
    z-index: 1;
    border-radius: 75px;
}
/* .action:hover, .action:active {
  width:95%;
} */
.img_weather{
  width:50px;
}
.img_weather:hover{
  width:80px;
}
@media (max-width: 490px) {
  .chatbot-toggler {
    right: 20px;
    bottom: 20px;
  }

  .chatbot {
    right: 0;
    bottom: 0;
    height: 100%;
    border-radius: 0;
    width: 100%;
  }

  .chatbot .chatbox {
    height: 90%;
    padding: 25px 15px 100px;
  }

  .chatbot .chat-input {
    padding: 5px 15px;
  }

  .chatbot header span {
    display: block;
  }
}
   @media only screen and (max-width: 600px) {
	.button-1 {
		text-align: left;
		margin-left: 5vh;
	}
  .card-let {
     margin-left: 0vh; 
}
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
<section style="margin-top: 55px;">
          <div style="background-color: black; color: white;">
          <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4 foot" style="padding-left: 7%; padding-top:65px ;">
          <h5 class="head_1"><b>Contact Us</b></h5>
          <i class="fa fa-envelope-o right-1" aria-hidden="true" style="font-size: 25px; margin-top: 5vh;"></i>
          <h6 class="col_31">toruism-234@gmail.com<br>
            sema5543@gmail.com</h6>
           <span> <i class="fa fa-map-marker right-2" aria-hidden="true" style="font-size: 28px; padding-top: 29px;"></i></span>
            <h6 class="col_3"> Athreya HouseNo.1,<br>
              Thiruvalluvar nagar,<br>
              Salem district,<br>
              Mettur dam - 636456,<br>
              Tamil Nadu, India</h6>
              <div style="margin-top: 40px;">
                <i class="fa fa-phone right-3" aria-hidden="true" style="font-size: 28px;"></i>  
              <h6 class="col_3">+91-7653455635<br>
                +91-6404875230</h6>
              </div>
              
        </div>
      
        <div class="col-sm-4 foot  quick" >
          <h5 class="head_1"><b>Quick Links</b></h5>
          <div class="footer-1">
            <h6 class="h6"><a href="home.php" style="color:white;">Home</a></h6>
          <h6 class="h6"><a href="about.php"style="color:white;">About Us</a></h6>
          <h6 class="h6"><a href="package_list.php"style="color:white;">Tour Package</a></h6>
          <h6 class="h6"><a href="condition.php" style="color:white;">Term & Condition</a></h6>
          <h6 class="h6"><a href="contact.php" style="color:white;">Our Team</a></h6>
          <h6 class="h6"><a href="recover.php" style="color:white;">Enquiry</a></h6>

          </div>
                  </div>
        
        <div class="col-sm-4 foot footer_dbms">
          <h5 class="head_1">Available at</h5>
          <div id="footer-icon2">
            <a href=""><i class="fa fa-facebook footer-icon " id="footer-icon1"  aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-twitter footer-icon" aria-hidden="true"></i></a>
           <a href=""><i class="fa fa-instagram footer-icon" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-linkedin footer-icon" aria-hidden="true"></i></a>
          </div>
        </div>
        </div>
      </div>
          </div>
        </section>
        <style>
          .quick{
          padding-top:65px ;padding-left: 20vh;
          }
          .footer_dbms{
            padding-top: 65px;
          }
   @media only screen and (max-width: 600px) {
	.quick {
    padding-top:65px ;padding-left: 5vh;
	}
 .footer_dbms {
    padding-top: 65px;
    padding-bottom: 45px;
}
 }
  </style>