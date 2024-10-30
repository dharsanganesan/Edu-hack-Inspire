<!DOCTYPE html>
<html lang="en">
 <title>Enquiry/Feedback</title>
   <link rel="stylesheet" href="recoversty.css">
   <?php include ('header.php');?>
<body>
    <div class="container-fluid">
        <center>
  <h2 class="text">Enquiry/Feedback</h2>
 </center>
<section>
  <div class="row">
    <div class="col-sm-6">
    <img src="../image/reg.jpg" height="70%" width="70%" class="img">
</div>
    <div class="col-sm-6 form_yet">
        <div class="form">
        <form action ="process.php" method="post">
      <div class="form-item">
       <input class="input" type="text" name="name"id="username" autocomplete="off" required />
        <label for="username">Username</label>
      </div>

      <div class="form-item">
        <input class="input" type="email" name="mail" id="email" autocomplete="off" required />
        <label for="password">E-mail</label>
      </div>

      <div class="form-item">
        <input class="input" type="text" name="phone" id="phone-no" autocomplete="off"maxlength="10" required />
        <label for="password">Phone-no</label>
      </div>

      <div class="form-item">
        <input  class ="input" type="text" name="subject" id="Subject" autocomplete="off" required />
        <label for="password">Subject</label>
      </div>
      <div class="form-item">
        <input  class ="input" type="text" name="description" id="Subject" autocomplete="off" required/>
        <label for="password">Description</label>
      </div>
      <div class="form-item">
        <input  class ="input" type="text" name="feedback" id="Subject" autocomplete="off" required/>
        <label for="password">Feedback</label>
      </div>
<div>
    <input type="submit" value="submit" class="submit">
</div>
    </form>
</div>
</div>
</div>
</body>
<?php include ('footer.php');?>
<style>
  .form_yet{
  background-color:white; margin-top:15vh;
  }
  @media only screen and (max-width: 600px) {
    .form {
    margin-left: 0%;
}
.form-item .input {
    display: block;
    width: 100%;
    height: 55px;
    background: transparent;
    border: solid 1px #ccc;
    transition: all 0.3s ease;
    padding: 0 15px;
    border-radius: 12px;
}
.img {
    width: 70%;
    height: 55%;
    margin-left: 60px;
    margin-top: 90px;
}
.form_yet{
  background-color:white; margin-top:0vh;
  }
  .submit{
    margin-left:15vh !important;
  }
  .text {
    font-size: 30px;
    font-family: cursive;
    color: #ff3f00;
    margin-bottom: -40px;
    font-weight: bold;
}
}
</style>
</html>

