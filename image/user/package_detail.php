<html>
    <?php include ('header.php');?>
    <head>
    <link rel="stylesheet" href="detail2.css">
</head>
    <body>
      <section>
<div>
<img src="../image/banner1.png" style=" width:95%;" class="banner">
</div>
<section>
  <div>
    <center>
      <h3 class="head">Kerala</h3>
</center>
  </div>
  <div>
    <p class="paragrap">The backwaters of Alappuzha are one of the most popular tourist attractions in India which attracts millions of domestic and international tourists also known as Alleppey, is the administrative headquarters of Alappuzha district in the state of Kerala, India.Alleppey is a city and a municipality in Kerala with an urban population of 174,164 and ranks third among the districts in literacy rate in the state. In 2016, the Centre for Science and Environment rated Alappuzha as the cleanest town in India.It is an important tourist destination in India. It connects Kumarakom and Cochin to the North and Kollam to the South.</p>
    <h2 class="subtitle">Extra Information</h2><span class="paragrap2"><i class="fa fa-inr" aria-hidden="true"><span style="padding-left:5px;" class="para_dbms">Per head:</span><span>20000</span></i><br></span>
</div>
</section>
      
</section>
      <section style="margin-left:25px;margin-right:25px;">
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4" >
    <div class="container">
    <img src="../image/k-1.png" style="width:90%" class="img-card image pack1" >
            <div class="middle">
              <div class="text">Festival</div>
            </div>
          </div></div>
    <div class="col-sm-4"><div class="container">
        <img src="../image/k-2.png" style="width:90%"  class="img-card image pack1" >
            <div class="middle">
              <div class="text">Waterfalls</div>
            </div>
          </div></div>
    <div class="col-sm-4" ><div class="container">
        <img src="../image/k-3.png" style="width:90%"  class="img-card image pack1" >
            <div class="middle">
              <div class="text">Boat House</div>
            </div>
          </div></div>
  </div>
</div>
<center class="button_dbms ">
  <h5><b>Before You Book Your Tour Please Read<a href="condition.php"> Terms and Conditions</a><span style="color:#ff3f00;">**</span></b></h5>
</center>
<center class="button_dbm">
<div class="button-1">
                           <button class="button" onclick="button()"><span>Book</span></button>
                        </div>
</center>

                        <?php include ('footer.php');?>
</section>
    </body>
    <script>
      function button(){
  location.replace("regsiter.php")
}
      </script>
      <style>
        .button_dbms{margin-bottom:10px;margin-top:20px;}
        .button_dbm{margin-top:30px; margin-left:70vh;}
         @media only screen and (max-width: 600px) {
          .paragrap2 {
    float: right;
    margin-top: 0px;
    margin-right: 125px;
    font-size: 25px;
    color: #ff3f00;
    font-family: cursive;
    font-weight: bold;
}
.paragrap{
  padding-top:55px;
}
.button-1 {
    text-align: left;
    margin-left: 7vh;
}
.button_dbm{margin-top:30px; margin-left:0vh;}
      
.banner {
    width: 90% !important;
    max-height: 50vh;
    margin-left: 16px;
    border-radius: 20px;
    height: 95px;
}
         .pack1 {
    margin-left: 17px;
    height: 35vh;
    padding-top: 15px;
    padding-bottom: 15px;
}
}
        </style>
</html>
