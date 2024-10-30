<html>
    <?php include ('header.php');?>
    <head>
    <link rel="stylesheet" href="detail2.css">
</head>
    <body>
      <section>
<div>
<img src="../image/a11.jpeg" style=" width:95%;" class="banner">
</div>
<section>
  <div>
    <center>
      <h3 class="head">Arunachal pradesh</h3>
</center>
  </div>
  <div>
    <h2 class="subtitle">Extra Information</h2><span class="paragrap2"><i class="fa fa-inr" aria-hidden="true" style="padding-right:15px;"><span >Per head:</span><span>7000</span></i><br></span>
    <p class="paragrap">Tawang Monastery: One of the largest monasteries in the world, Tawang Monastery is perched at an altitude of 3,000 meters and offers breathtaking views of the surrounding mountains.
Ziro Valley: Known for its picturesque landscapes and lush greenery, Ziro Valley is a UNESCO World Heritage Site and home to the Apatani tribe.
Bomdila: A charming town known for its Buddhist monasteries, apple orchards, and stunning views of the Himalayan ranges.
Sela Pass: Situated at an altitude of 4,170 meters, Sela Pass is a high-altitude mountain pass that offers panoramic views of snow-capped peaks and a beautiful lake.
Namdapha National Park: A biodiversity hotspot, this national park is home to a wide variety of flora and fauna, including the elusive snow leopard.
Itanagar: The capital city of Arunachal Pradesh, Itanagar boasts attractions like Ita Fort, Ganga Lake, and the State Museum.
Dirang: Known for its hot water springs, apple orchards, and the 500-year-old Dirang Dzong, this town is a peaceful retreat.
Roing: Explore the Mehao Wildlife Sanctuary, Mayudia, and the Bhismaknagar Fort, which reflects the rich history of the region.
Bhalukpong: A gateway to Arunachal Pradesh, Bhalukpong offers opportunities for river rafting, trekking, and bird watching.
Pasighat: Situated on the banks of the Siang River, is known for its scenic beauty and serves as the starting point for exploring the Siang Valley.</p>
</div>
</section>
      
</section>
      <section style="margin-left:25px;margin-right:25px;">
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4" >
    <div class="container">
    <img src="../image/A1.jpeg" style="width:90%" class="img-card image pack1" >
            <div class="middle">
              <div class="text">Temple</div>
            </div>
          </div></div>
    <div class="col-sm-4"><div class="container">
        <img src="../image/A2.png" style="width:90%"  class="img-card image pack1" >
            <div class="middle">
              <div class="text">Village</div>
            </div>
          </div></div>
    <div class="col-sm-4" ><div class="container">
        <img src="../image/A3.png" style="width:90%"  class="img-card image pack1" >
            <div class="middle">
              <div class="text">mountian</div>
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
.pack1 {
    margin-left: 17px;
    height: 35vh;
    padding-top: 15px;
    padding-bottom: 15px;
}
.head {
    font-family: cursive;
    color: #ff3f00;
    font-size: 35px;
    font-weight: bolder;
    margin-top: 20px;
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
