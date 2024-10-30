<html>
    <?php include ('header.php');?>
    <head>
    <link rel="stylesheet" href="detail2.css">
</head>
    <body>
      <section>
<div>
<img src="../image/as11.png" style=" width:95%;" class="banner">
</div>
<section>
  <div>
    <center>
      <h3 class="head">Mizoram</h3>
</center>
  </div>
  <div>
    <p class="paragrap">Mizoram, a northeastern state in India, is a land of breathtaking natural beauty, rich cultural heritage, and warm hospitality. Visit the scenic hill station of Aizawl, with its picturesque views and vibrant markets; explore the stunning waterfalls of Vantawng Falls and Tuirial Falls; trek to the Phawngpui Blue Mountain, the highest peak in Mizoram; experience the serene beauty of the Tam Dil Lake and Rih Dil Lake; discover the ancient caves and rock formations of Pukzing and Lamsial; and learn about the state's history and culture at the Mizoram State Museum and Berawtlang Tourist Complex. These destinations showcase Mizoram's unique blend of natural beauty, culture, and adventure, making it an offbeat yet captivating destination for travelers. </p>
    <h2 class="subtitle">Extra Information</h2> <span class="paragrap2"><i class="fa fa-inr" aria-hidden="true" style="padding-right:15px;"><span >Per head:</span><span>20000</span></i><br></span>
</div>
</section>
      
</section>
      <section style="margin-left:25px;margin-right:25px;">
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4" >
    <div class="container">
    <img src="../image/as1.png" style="width:90%" class="img-card image pack1" >
            <div class="middle">
              <div class="text">Photos</div>
            </div>
          </div></div>
    <div class="col-sm-4"><div class="container">
        <img src="../image/as2.png" style="width:90%"  class="img-card image pack1" >
            <div class="middle">
              <div class="text">Boat Travel</div>
            </div>
          </div></div>
    <div class="col-sm-4" ><div class="container">
        <img src="../image/as3.png" style="width:90%"  class="img-card image pack1" >
            <div class="middle">
              <div class="text">Mountain Side</div>
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
