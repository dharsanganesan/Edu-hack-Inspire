<html>
    <?php include ('header.php');?>
    <head>
    <link rel="stylesheet" href="detail2.css">
</head>
    <body>
      <section>
<div>
<img src="../image/go11.png" style=" width:95%;" class="banner">
</div>
<section>
  <div>
    <center>
      <h3 class="head">Goa</h3>
</center>
  </div>
  <div>
    <h2 class="subtitle">Extra Information</h2><span class="paragrap2"><i class="fa fa-inr" aria-hidden="true" style="padding-right:15px;"><span >Per head:</span><span>7000</span></i><br></span>
    <p class="paragrap">Calangute is a town in the North Goa district of the Indian state of Goa. It is famous for its beach, the largest in North Goa and a popular tourist destination. The peak tourist season is during Christmas and New Year, and during the summer in May. The beach offers water sport activities like parasailing and water skiing, among others. Foreign tourists, mostly from Europe, arrive in Goa in winter, whilst the summer and monsoon seasons see many Indian tourists. Goa handled 2.29% of all foreign tourist arrivals in the country in 2011. This relatively small state is situated on the west coast of India, between the borders of Maharashtra and Karnataka, and is better known to the world as a former Portuguese enclave on Indian soil. Thus, Tourism forms the backbone of Goa's economy</p>
</div>
</section>
      
</section>
      <section style="margin-left:25px;margin-right:25px;">
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4" >
    <div class="container">
    <img src="../image/go1.png" style="width:90%" class="img-card image pack1" >
            <div class="middle">
              <div class="text">Temple</div>
            </div>
          </div></div>
    <div class="col-sm-4"><div class="container">
        <img src="../image/go2.png" style="width:90%"  class="img-card image pack1" >
            <div class="middle">
              <div class="text">Beach</div>
            </div>
          </div></div>
    <div class="col-sm-4" ><div class="container">
        <img src="../image/go3.png" style="width:90%"  class="img-card image pack1" >
            <div class="middle">
              <div class="text">Militry musesum</div>
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
.head {
    font-family: cursive;
    color: #ff3f00;
    font-size: 35px;
    font-weight: bolder;
    margin-top: 20px;
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
