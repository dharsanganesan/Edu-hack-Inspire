<html>
    <?php include ('header.php');?>
    <head>
    <link rel="stylesheet" href="detail2.css">
</head>
    <body>
      <section>
<div>
<img src="../image/tamil1.png" style=" width:95%;" class="banner">
</div>
<section>
  <div>
    <center>
      <h3 class="head">Tamil Nadu</h3>
</center>
  </div>
  <div>
    <h2 class="subtitle">Extra Information</h2><span class="paragrap2"><i class="fa fa-inr" aria-hidden="true" style="padding-right:15px;"><span >Per head:</span><span>2000</span></i><br></span>
    <p class="paragrap">Coutrallam Falls (also called Kutralam/Kuttalam Falls) is located in Tenkasi district in the South Indian state of Tamil Nadu bordering Kollam district, Kerala.<br>
    The falls is located on the Western Ghats on the river Chittar and is considered a "medical spa" on account of the medical smell in the waters.<br>
    It is located 5 km (3.1 mi) from the nearest city Tenkasi. There are a total of nine falls of which Peraruvi, Aintharuvi and Puli Aruvi being the most prominent.<br>
    The falls is the most prominent tourist destination in the region and usually frequented by devotees of the Papanasanathar Temple and Sabarimala<br>
    The season starts with the South West monsoon from July to September.</p>
</div>
</section>
      
</section>
      <section style="margin-left:25px;margin-right:25px;">
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4" >
    <div class="container">
    <img src="../image/t1.png" style="width:90%" class="img-card image pack1" >
            <div class="middle">
              <div class="text">Statu</div>
            </div>
          </div></div>
    <div class="col-sm-4"><div class="container">
        <img src="../image/t2.png" style="width:90%"  class="img-card image pack1" >
            <div class="middle">
              <div class="text">Festival</div>
            </div>
          </div></div>
    <div class="col-sm-4" ><div class="container">
        <img src="../image/t3.png" style="width:90%"  class="img-card image pack1" >
            <div class="middle">
              <div class="text">Forest</div>
            </div>
          </div></div>
  </div>
</div>
<center class="button_dbms">
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
        float: none;
        margin-top: 0px;
        margin-right: 0px;
        font-size: 25px;
        color: #ff3f00;
        font-family: cursive;
        font-weight: bold;
        margin-left: 58px;
    }
.paragrap{
  padding-top:55px;
}
.button-1 {
    text-align: left;
    margin-left: 7vh;
}
.pack1 {
    margin-left: 17px;
    height: 35vh;
    padding-top: 15px;
    padding-bottom: 15px;
}
.banner {
    width: 90% !important;
    max-height: 50vh;
    margin-left: 16px;
    border-radius: 20px;
    height: 95px;
}
.button_dbm{margin-top:30px; margin-left:0vh;}
         }
        </style>
</html>