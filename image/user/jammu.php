<html>
    <?php include ('header.php');?>
    <head>
    <link rel="stylesheet" href="detail2.css">
</head>
    <body>
      <section>
<div>
<img src="../image/ja11.png" style=" width:95%;" class="banner">
</div>
<section>
  <div>
    <center>
      <h3 class="head">Jammu and Kashmir</h3>
</center>
  </div>
  <div>
    <h2 class="subtitle">Extra Information</h2><span class="paragrap2"><i class="fa fa-inr" aria-hidden="true" style="padding-right:15px;"><span >Per head:</span><span>5000</span></i><br></span>
    <p class="paragrap">Srinagar, the summer capital of Jammu & Kashmir (J&K), is split into two by the river Jhelum. The star attraction here is the idyllic Dal Lake, having been ranked TripAdvisor’s top travellers’ choice for 2020. You can take a shikara ride in the daytime or a midnight cruise for a romantic evening. You will also spot Asia’s most extensive Tulip Garden and India’s only floating market here. Hotels in Kashmir cater to all kinds of travellers, so you can book your accommodation accordingly Pahalgam is a visual treat with its breathtaking vistas of lush greenery, vast Himalayan ranges, and pristine mountain rivers. Stretched along the Lidder River, it is a popular spot for adventure junkies to try trout fishing, trekking, and angling among others. It serves as the base camp for popular trekking getaways to Amarnath, Aru Valley, Kohaloi Glacier, and other Kashmir tourist places. Pahalgam is a wonderland that is dotted with prominent attractions like the Aru Valley and Betaab Valleys. You can either explore Pahalgam on foot or opt for a pony ride. Don’t forget to bargain!</p>
</div>
</section>
      
</section>
      <section style="margin-left:25px;margin-right:25px;">
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4" >
    <div class="container">
    <img src="../image/ja1.png" style="width:90%" class="img-card image pack1" >
            <div class="middle">
              <div class="text">Spring</div>
            </div>
          </div></div>
    <div class="col-sm-4"><div class="container">
        <img src="../image/ja2.png" style="width:90%"  class="img-card image pack1" >
            <div class="middle">
              <div class="text">Snow slider</div>
            </div>
          </div></div>
    <div class="col-sm-4" ><div class="container">
        <img src="../image/ja3.png" style="width:90%"  class="img-card image pack1" >
            <div class="middle">
              <div class="text">Valley</div>
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