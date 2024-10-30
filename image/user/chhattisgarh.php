<html>
    <?php include ('header.php');?>
    <head>
    <link rel="stylesheet" href="detail2.css">
</head>
    <body>
      <section>
<div>
<img src="../image/ch11.png" style=" width:95%;" class="banner">
</div>
<section>
  <div>
    <center>
      <h3 class="head">Chhattisgarh</h3>
</center>
  </div>
  <div>
    <h2 class="subtitle">Extra Information</h2><span class="paragrap2"><i class="fa fa-inr" aria-hidden="true" style="padding-right:15px;"><span >Per head:</span><span>4000</span></i><br></span>
    <p class="paragrap">Kanger Valley National Park is home to many geological formations. Some of them are not only unique but also feature in a lot of local legends. The national park enjoys mountains, deep gorges, valleys, some of the most dense forests in the country, and various species of wildlife Kutumsar and Kailash caves are open to the public though. It is believed that many of these caves are yet to be properly explored by researchers. But what we do know is that there are a number of religious connections with Kutumsar and Kailash caves. Tirathgarh Waterfalls is one such beauty. After the caves, it is probably the most popular tourist attraction in the region. The stunning waterfall, when in full capacity, turns white, and is also known locally as Milky Falls. Right next to the waterfall, there is a temple dedicated to Shiva and Parvati.</p>
</div>
</section>
      
</section>
      <section style="margin-left:25px;margin-right:25px;">
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4" >
    <div class="container">
    <img src="../image/ch1.png" style="width:90%" class="img-card image pack1" >
            <div class="middle">
              <div class="text">Water falls</div>
            </div>
          </div></div>
          <div class="col-sm-4" >
    <div class="container">
    <img src="../image/ch2.png"  style="width:90%" class="img-card image pack1" >
            <div class="middle">
              <div class="text">Tower</div>
            </div>
          </div></div>
    <div class="col-sm-4"><div class="container">
        <img src="../image/ch3.png" style="width:90%"  class="img-card image pack1" >
            <div class="middle">
              <div class="text">Caves</div>
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
