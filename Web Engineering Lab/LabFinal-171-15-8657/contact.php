<?php 
  if(isset($_POST['submit'])){
   $servername = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect("localhost", "root", "", "labfinal");
   $sql="INSERT INTO contactform(firstName, lastName, email, country, message) VALUES('$_POST[fName]', '$_POST[lName]', '$_POST[email]','$_POST[country]','$_POST[message]')";
     mysqli_query($con, $sql);
     echo "Inserted successfully!";
}
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body style="border: 1px solid black">
    
   
  <nav class="navbar navbar-expand-lg navbar-light p-0 m-0"  id="navColor">
    <img src="images/iqbal.jpg" style="width:30px;height: 30px;">
  <a class="navbar-brand pl-2 text-light" href="#"> Contact Me</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto" style="background: #564CA2;">
      
      <li class="nav-item">
        <a class="nav-link text-light" href="index.html">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">About Us</a>
      </li>
     
    </ul>
  </div>
</nav>
<div class="text-light text-center" id="heading">
  <div style="padding-top: 30px;">Contact Me</div>
  <div>Contact with your information</div>
</div>
<div class="content1">
  <div class="px-5 pt-3">
    <form action="" method="POST">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="">First Name</label>
            <input type="text" name="fName" class="form-control">
         </div>
        </div>
         <div class="col-md-6">
          <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" name="lName" class="form-control">
         </div>
        </div>
      </div>
      <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control">
      </div>
      <div class="form-group">
            <label for="">Country</label>
            <select name="country" id="" class="form-control">
              <option value="Bangladesh">Bangladesh</option>
              <option value="India">India</option>
              <option value="">Pakistan</option>
              <option value="Pakistan">Srilanka</option>
              <option value="Nepal">Nepal</option>
              <option value="China">China</option>
            </select>
      </div>
      <div class="form-group">
            <label for="">Message</label>
         <textarea class="form-control" name="message" id="" cols="30" rows="5"></textarea>
      </div>
      <div class="row">
        <div class="col-md-10"></div>
        <div class="col-md-2"><button name="submit" class="btn btn-success pull-right">Send</button></div>
      </div>
    </form>
    <br>
  </div>
</div>
<footer class="p-2" id="footerColor">
  <p class="text-center text-light">Contact me at</p>
  <p class="text-center text-light">rabbil@diu.edu.bd</p>
</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
