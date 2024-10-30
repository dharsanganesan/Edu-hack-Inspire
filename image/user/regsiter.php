<!DOCTYPE html>
<html lang="en">

    
    <head>
 <title>Booking Page</title>
 <link rel="stylesheet" href="recoversty.css">
</head>
 <?php include ('header.php');?>

<body>
<h2 class="head">**Booking**</h2>
    <div class="container-fluid">

  <div class="row">
    
    <div class="col-sm-6">
      <br>
      <br>
      <br>
    <img src="../image/pak1.png" class="img_register">
</div>

    <div class="col-sm-6" style="background-color:white;">
      
      
      
      <br>
      <br>
        <div class="form">
        <form action ="register.php" method="post">
      <div class="form-item">
       <input class="input" type="text" id="Name" name="name_1" autocomplete="off" required />
        <label for="Name">Name</label>
      </div>

      <div class="form-item">
        <input  class ="input" type="text" id="Phone-no" name="phone" autocomplete="off"  maxlength="10" required />
        <label for="Phone no">Phone-no</label>
      </div>

      <div class="form-item">
        <input  class ="input" type="date" id="Phone-no" name="brith" autocomplete="off" maxlength="12" required />
        <label for="Phone no">Date of Brith</label>
      </div>

      <div class="form-item">
      <textarea  class="input" name="address" id="Address" rows="5" cols="7" required style="padding-top:15px;"></textarea>
      <label for="Address">Address</label>
      </div>

      <div class="form-item">
        <input  class ="input" name="aadhar" type="text" id="Aadhar-no" autocomplete="off" maxlength="12" required />
        <label for="Aadhar-no">Aadhar-no</label>
      </div>
      <div class="form-item">
  <select name="package" id="cars" class="input">
    <option value="--">---</option>
    <option value="Andhra Pradesh">Andhra Pradesh</option>
    <option value="Tamil Nadu">Tamil Nadu</option>
    <option value="Kerala">Kerala</option>
    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
    <option value="Assam">Assam</option>
    <option value="Bihar">Bihar</option>
    <option value="Chhattisgarh">Chhattisgarh</option>
    <option value="New Delhi">New Delhi</option>
    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
    <option value="Goa">Goa</option>
    <option value="Gujarat">Gujarat</option>
    <option value="Haryana">Haryana</option>
    <option value="Madhya Pradesh">Madhya Pradesh</option>
    <option value="Jharkhand ">Jharkhand </option>
    <option value="Himachal Pradesh">Himachal Pradesh</option>
    <option value="Andhra Pradesh">Andhra Pradesh</option>
    <option value="Karnataka">Karnataka</option>
    <option value="Madhya Pradesh">Madhya Pradesh</option>
    <option value="Maharashtra">Maharashtra</option>
    <option value="Manipur">Manipur</option>
    <option value="Meghalaya">Meghalaya</option>
    <option value="Mizoram">Mizoram</option>
    <option value="Nagaland">Nagaland</option>
    <option value="Odisha">Odisha</option>
    <option value="Punjab">Punjab</option>
    <option value="Rajasthan">Rajasthan</option>
    <option value="Sikkim">Sikkim</option>
    <option value="Telangana">Telangana</option>
    <option value="Tripura">Tripura</option>
    <option value="Uttar Pradesh">Uttar Pradesh</option>
    <option value="Uttarakhand">Uttarakhand</option>
    <option value="West Bengal">West Bengal</option>
    <option value="Andaman and Nicobar">Andaman and Nicobar</option>
    <option value="Chandigarh ">Chandigarh </option>
    <option value=" Dadra and Nagar"> Dadra and Nagar</option>
    <option value="Ladakh">Ladakh</option>
    <option value="Lakshadweep">Lakshadweep</option>
    <option value=" Puducherry"> Puducherry</option>
  </select>
  <label for="cars">Choose a Package:</label>
      </div>
         <div class="form-item" style="margin-top:20px;">
        <input  class ="input" name="f_date" type="date" id="From Date" autocomplete="off"style="width:27vh;" required />
        <label for="From Date">From Date</label>
      </div>

      <div class="form-item to_date">
        <input  class ="input" name="t_date" type="date" id="To Date" autocomplete="off" style="width:27vh;" required />
        <label for="To Date">To Date</label>
      </div>
     <div class="form-item" style="margin-top:20px;">
    <select name="vehicle" id="cars" class="input">
  <option value="--">---</option>
    <option value="Car">Car</option>
    <option value="Bike">Bike</option>
    <option value="Train">Train</option>
    <option value="Boat">Boat</option>
    <option value="Aeroplane">Aeroplane</option>
  </select>
  <label for="cars">Choose your vehicle:</label>
</div> 
<div >
        <!-- <input class="input" type="number" id="Age" name="age" autocomplete="off" maxlength="2" required /> -->
        <labeL for="password" class="hotel_booking">If you want Hotel/Restaurants or not ?</label><br>
        <label class="hotel_booking">
        <input type="radio" name="showContent" onclick="toggleContent('yes')" > Yes
    </label>
    <label class="hotel_booking">
        <input type="radio" name="showContent" onclick="toggleContent('no')"> No
    </label>
    <div id="content_hotel">
    <input type="radio" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1" class="choice ">The Taj Mahal Palace, Mumbai</label><br>
  <input type="radio" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2" class="choice "> Rambagh Palace - Jaipur</label><br>
  <input type="radio" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3" class="choice ">Nika House</label><br><br>
  <a href="https://www.google.com/travel/search?q=most%20popular%20hotel%20in%20india&g2lb=4814050%2C4874190%2C4893075%2C4899568%2C4899569%2C4965990%2C4969803%2C72277293%2C72302247%2C72317059%2C72406588%2C72414906%2C72421566%2C72470899%2C72471280%2C72472051%2C72473841%2C72481459%2C72485658%2C72486593%2C72494250%2C72536387%2C72569093%2C72570850%2C72602734%2C72614661%2C72616120%2C72619927%2C72620306%2C72628719%2C72647020%2C72648289%2C72658035%2C72663438%2C72671093%2C72686036%2C72686823%2C72691805%2C72697770%2C72708435%2C72710128%2C72722842&hl=en-IN&gl=in&ssta=1&ts=CAESCAoCCAMKAggDGhwSGhIUCgcI6A8QCRgMEgcI6A8QCRgNGAEyAhAAKgcKBToDSU5S&qs=CAE4BkIJEX9gtd8aTlFTQgkR0qjwMbAr_8xCCRHKqJRFmAVo4VpgMl6qAVsQASoWIhJtb3N0IHBvcHVsYXIgaG90ZWwoADIeEAEiGlfbws13JjxNApFASIc2zkyb6Mue7NAkaxOXMh8QAiIbbW9zdCBwb3B1bGFyIGhvdGVsIGluIGluZGlh&ap=KigKEgmnCyaSNwsXQBF7eM-B3QxRQBISCQOi3LI4sz1AEXt4z4HtQVdAMABoAQ&ictx=111&ved=0CAAQ5JsGahgKEwjAkP_Zs5qIAxUAAAAAHQAAAAAQqwE">
    <label class="choice ">For More Hotel/Restaurants</label></a>
    </div>
      </div>
<div class="form-item">
       <input class="input" type="text" id="number" name="name_1" autocomplete="off" required />
        <label for="Name">Per-Head Amount</label>
      </div>
<div class="form-item">
        <input class="input" type="number"  id="Number" autocomplete="off" maxlength="2" required />
        <labeL for="password">No.of person</label>
      </div>
<div class="form-item">
		<input type="button" onClick="multiplyBy()" Value="How Much" class="multi" /><br>
</div>
	<p><span style="color:#ff3f00;font-family:cursive;">The Amount to be Paypaid: </span><br>
	<h4 class="result"><span id="result" ></span></h4><br>
	</p>


      <div>
      <h2 class="pay qrcode">You can scan this code for online payment</h2>
        <img src="../image/lo_log.png" class="qr">
</div>
      <div class="form-item">
        <h2 class="pay">Upload Payment Screenshot</h2>
        <input type="file" name="upload" id="Upload Payment Proof" style="margin-left:35px;" autocomplete="off" required />
      </div>
      <br>
      <input class="input" type="checkbox" id="checkbox" required > <b> I here by accept the terms and conditions of Tourism in India</b></input>
      
      <br>
      <br>
        <input type="submit" class="submit" value="submit">
      

    </form>
    </div>
  
</div>
    
  </div>

</div>
    
</body>
<style>
    .submit,.multi{
    width: 70%;
    margin-left: 27px;
    margin-top: 38px;
    height: 48px;
    box-shadow: 0 0 20px -8px black !important;
    border-color:#ff3f00;
    background-color: #ff3f00;
    border-radius: 23px;
    color: white;
    font-family: cursive;
    font-weight: 700;
}
.hotel_booking {
    font-family: cursive;
    font-size: 20px;
    font-weight: bold;
    background: #fff;
    padding: 0 10px;
    color: #999;
    transition: all 0.3s ease;
}
.choice {
    font-family: cursive;
    font-size: 15px;
    font-weight:600;
    background: #fff;
    padding: 0 10px;
    color: #999;
    transition: all 0.3s ease;
}
.choice:hover {
  color:#ff2100;
}
#content_hotel {
            display: none;
            margin-top: 10px;
        }
.pay{
    font-size: 22px;
    font-family: cursive;
    font-weight: 700;
    color: #7e7e7e;
    margin-bottom: 20px;
    padding-left: 20px;
}
.head{
    color: red;
    text-align: center;
    font-size: 50px;
    font-family: cursive;
    font-weight: 700;
}
.qr{
    width: 50%;
    border-radius: 25px;
    margin-left: 73px;
    margin-bottom: 25px;
}
.to_date{margin-left:35vh;margin-top:-11vh;}
.qrcode{
    padding-left: 0px;
    padding-right: 75px;
    text-align: center;
}
.multi{
    width: 25%;
    margin-top: 10px;
}
.result{
    color: #ff3f00;
    font-family: cursive;
    text-align: center;
    font-weight: bold;
}
.img_register {
  height:800px;
  width:700px;
  margin-top:32vh;
}
@media only screen and (max-width: 600px) {


.img_register  {
    margin-top: 0vh;
    width: 100%;
    height: 95%;
}
.form{
  margin-left:0%;
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
.multi {
    width: 50%;
    margin-top: 10px;
}
.to_date {
    margin-left: 28vh;
    margin-top: -13vh;
}
}
    </style>
    <?php include ('footer.php');?>
    <script>
		function multiplyBy() {
			num1 = document.getElementById(
				"number").value;
			num2 = document.getElementById(
				"Number").value;
			document.getElementById(
				"result").innerHTML = num1 * num2;
		}
	</script>
  <script>
        function toggleContent(answer) {
            const content = document.getElementById('content_hotel');
            if (answer === 'yes') {
                content.style.display = 'block'; // Show the content
            } else {
                content.style.display = 'none'; // Hide the content
            }
        }
    </script>
</html>

