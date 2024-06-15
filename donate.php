<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blood Donation</title>
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

</head>

<body> 
    <div class="main">
     <div class="navbar">
      <div class="icon">
        <h3 class="logo">LifeSaVeRs</h3>
    </div>
    <div class="menu" >
        <ul class="menuPage" > 
            <li class="menuItem"><a href="index.php">HOME</a></li>
            <li class="menuItem"><a class="active" href="donate.php">DONATE</a></li>
            <li class="menuItem"><a href="donors.php">DONORS</a></li>
            <li class="menuItem"><a href="search.php">SEARCH</a></li>
            <li class="menuItem"><a href="aboutus.php">ABOUTUS</a></li>
        </ul>
        </div>
        </div>
        <br>
<div><h1 class="text_5">Donate</h1>
<span class="dividerrr"></span></div>
<br><br>






<div style="margin: 0 auto; width: 500px;">
    <h4 class="headingg">Sign Up</h4>
    <hr style="border-color: red; border:2px solid">
    <form action="signup.php" method="POST">
       <label Full Name>Full Name</label><br>
       <input type="text" id="fullname" name="fullname" placeholder="Full Name"><br>

       <label Blood Group>Blood Group</label><br>
       <select style="margin-left: 1px;" class="bgrpp" id="bloodgroup" name="bloodgroup"  aria-label="blood group">
        <option selected>select blood group</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
      </select><br>

       <label>Gender</label><br>
       <input type="radio" id="gender"  name="gender" value="male"> Male &nbsp;&nbsp;&nbsp;
       <input type="radio" id="gender" name="gender" value="female" >Female<br>

       <label>Religion</label><br>
       <input type="radio" id="religion"  name="religion" value="islam"> Islam &nbsp;&nbsp;&nbsp;
       <input type="radio" id="religion" name="religion" value="hindu" >Hindu  &nbsp;&nbsp;&nbsp;
       <input type="radio" id="religion" name="religion" value="buddhist">Buddhist  &nbsp;&nbsp;&nbsp;
       <input type="radio" id="religion" name="religion" value="christian" > Christian <br>
      
       <label>Date Of Birth</label><br>
       <input id="dateofbirth" type="date" name="dateofbirth"><br>

       <label>Age</label><br>
       <input id="age" type="age" name="age"><br>

       <label>Last Date Of Blood Donation</label><br>
       <input id="lastdateofblooddonation" type="date" name="lastdateofblooddonation"><br>

       <label>Division</label><br>
       <textarea id="address" name="address"></textarea><br>

       <label>District</label><br>
       <select class="slct" aria-label="search" id="district" name="district">
                                <option  selected>select district</option>
                                <option  value="Dhaka">Dhaka</option>
                                <option  value="Faridpur">Faridpur</option>
                                <option  value="Gazipur">Gazipur</option>
                                <option  value="Gopalganj">Gopalganj</option>
                                <option  value="Jamalpur">Jamalpur</option>
                                <option  value="Kishoreganj">Kishoreganj</option>
                                <option  value="Madaripur">Madaripur</option>
                                <option  value="Manikganj">Manikganj</option>
                                <option  value="Munshiganj">Munshiganj</option>
                                <option  value="Mymensingh">Mymensingh</option>
                                <option  value="Narayanganj">Narayanganj</option>
                                <option  value="Narsingdi">Narsingdi</option>
                                <option  value="Netrokona">Netrokona</option>
                                <option  value="Rajbari">Rajbari</option>
                                <option  value="Shariatpur">Shariatpur</option>
                                <option  value="Sherpur">Sherpur</option>
                                <option  value="Tangail">Tangail</option>
                                <option  value="Bogra">Bogra</option>
                                <option  value="Joypurhat">Joypurhat</option>
                                <option  value="Naogaon">Naogaon</option>
                                <option  value="Natore">Natore</option>
                                <option  value="Nawabganj">Nawabganj</option>
                                <option  value="Pabna">Pabna</option>
                                <option  value="Rajshahi">Rajshahi</option>
                                <option  value="Sirajgonj">Sirajgonj</option>
                                <option  value="Dinajpur">Dinajpur</option>
                                <option  value="Gaibandha">Gaibandha</option>
                                <option  value="Kurigram">Kurigram</option>
                                <option  value="Lalmonirhat">Lalmonirhat</option>
                                <option  value="Nilphamari">Nilphamari</option>
                                <option  value="Panchagarh">Panchagarh</option>
                                <option  value="Rangpur">Rangpur</option>
                                <option  value="Thakurgaon">Thakurgaon</option>
                                <option  value="Barguna">Barguna</option>
                                <option  value="Barishal">Barishal</option>
                                <option  value="Bhola">Bhola</option>
                                <option  value="Jhalokati">Jhalokati</option>
                                <option  value="Patuakhali">Patuakhali</option>
                                <option  value="Pirojpur">Pirojpur</option>
                                <option  value="Bandarban">Bandarban</option>
                                <option  value="Brahmanbaria">Brahmanbaria</option>
                                <option  value="Chandpur">Chandpur</option>
                                <option  value="Chittagong">Chittagong</option>
                                <option  value="Comilla">Comilla</option>
                                <option  value="Coxsbazar">Cox's bazaz</option>
                                <option  value="Feni">Feni</option>
                                <option  value="Khagrachari">Khagrachari</option>
                                <option  value="Lakshmipur">Lakshmipur</option>
                                <option  value="Noakhali">Noakhali</option>
                                <option  value="Rangamati">Rangamati</option>
                                <option  value="Habiganj">Habiganj</option>
                                <option  value="Maulvibazar">Maulvibazar</option>
                                <option  value="Sunamganj">Sunamganj</option>
                                <option  value="Sylhet">Sylhet</option>
                                <option  value="Bagerhat">Bagerhat</option>
                                <option  value="Chuadanga">Chuadanga</option>
                                <option  value="Jessore">Jessore</option>
                                <option  value="Jhenaidah">Jhenaidah</option>
                                <option  value="Khulna">Khulna</option>
                                <option  value="Kushtia">Kushtia</option>
                                <option  value="Magura">Magura</option>
                                <option  value="Meherpur">Meherpur</option>
                                <option  value="Narail">Narail</option>
                                <option  value="Satkhira">Satkhira</option>

        </select><br>

       
        <label>Email</label><br>
       <input id="email" type="email" name="email" placeholder="Enter Your Email..."><br>
       
       <label>Contact No</label><br>
       <input id="contact" type="contact" name="contact" placeholder="01*********"><br>

       <label>Password</label><br>
       <input id="password" type="password" name="password" placeholder="password"><br>
      
       <label>Confirm Password</label><br>
       <input id="confirmpassword" type="confirm password" name="confirmpassword" placeholder="confirm password"><br><br><br>

       <a> 
        <button type="submit" value="button" name="button" class="button">Sign Up</button>
       </a>
<br><br><br><br><br><br>
       
    </form>
    </div>
    

    </div>
   </div>
   
  </div>

  <footer class="footer-basic pt-3 ps-3 pe-3">
    <div class="row row-cols-lg-3 row-cols-md-3 row-cols-2">
        <div class="col">
            <ul class="footer-list">
                <li class="list-head footer-item">Quick Links</li>
                <li class="footer-item"><a href="index.php">Home</a></li>
                <li class="footer-item"><a class="actiive" href="donate.php">Donate</a></li>
                <li class="footer-item"><a href="donors.php">Donors</a></li>
                <li class="footer-item"><a href="search.php">Search</a></li>
                <li class="footer-item"><a href="aboutus.php">About Us</a></li>
            </ul>
        </div>
        <div class="col">
            <ul class="footer-list">
                <li class="list-head footer-item">Contact Us</li>
                <li class="footer-item"><a href="#"><i class="fas fa-phone"></i> 01729367891</a></li>
                <li class="footer-item"><a href="#"><i class="fas fa-phone"></i> 01745723896</a></li>
                <li class="footer-item"><a href="#"><i class="fas fa-envelope"></i> urmidhar08@gmail.com</a></li>
                <li class="footer-item"><a href="#"><i class="fas fa-envelope"></i>  zarintasnimsima2101@gmail.com</a></li>
                
            </ul>
          </div>
        <div class="col">
            <div class="list-head">Follow Us</div>
  
            <div class="row row-cols-lg-3 row-cols-3 row-cols-md-3">
                <div class="col"><a href="https://www.facebook.com/profile.php?id=100084184670169"><i class="fab fa-facebook-f"></i></a></div>
                <div class="col"><a href="https://www.instagram.com/invites/contact/?i=15f99defrca1b&utm_content=mf5lpmn"><i class="fab fa-instagram"></i></a></div>
                <div class="col"><a href="https://www.linkedin.com/feed/?trk=eml-email_security_successful_login_01-hero-0-login"><i class="fab fa-linkedin-in"></i></a></div>
            </div>
        </div>
  
    </div>
     
  
    <div class="terms" ><a href="terms&conditions.php">Terms & Conditions</a><a href="privacypolicy.php">|Privacy policy</a><a href="accessibilitystatement.php">|Accessibility Statement|</a></div><br>
  
  </footer>
  
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
      
</body>

</html>