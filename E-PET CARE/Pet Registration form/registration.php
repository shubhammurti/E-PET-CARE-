<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pet Registration</title>
	<link rel="stylesheet" href="registration.css">
</head>
<body>
<div class="wrapper">
  <form action="" method="post">
    <div class="title">
      Registration Form
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Pet Name</label>
          <input type="text" class="input" name="Pname" required>
       </div>   
       <div class="inputfield">
          <label>Search Breeds</label>
          <div class="custom_select">
            <select name="Sbreeds" required>
              <option value="Not Selected">Select</option>
              <option value="Beagles">Beagles</option>
              <option value="German Shepherd">German Shepherd</option>
              <option value="Great Dane">Great Dane</option>
              <option value="Boxer">Boxer</option>
              <option value="Labrador Retriever">Labrador Retriever</option>
              <option value="Rottweiler">Rottweiler</option>
              <option value="Pug">Pug</option>
              <option value="Golden Retriever">Golden Retriever</option>
              <option value="Cocker Spaniel">Cocker Spaniel</option>
              <option value="Dachshund">Dachshund</option>
            </select>
          </div>
       </div>  
      <div class="inputfield">
          <label>Weight</label>
          <div class="custom_select">
            <select name="Weight" required>
              <option value="Not Selected">Select</option>
              <option value="20 - 40 kgs">20 - 40 kgs</option>
              <option value="40 - 60 kgs">40 - 60 kgs</option>
              <option value="60 - 80 kgs">60 - 80 kgs</option>
              <option value="80 - 110 kgs">80 - 110 kgs</option>
              <option value="more than 110kgs">more than 110kgs</option>
            </select>
          </div>
       </div>  
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name="address" required></textarea>
       </div> 
       <div class="inputfield">
        <label>City</label>
        <input type="text" class="input" name="City" required>
     </div> 
      <div class="inputfield">
          <label>Postal Code</label>
          <input type="text" class="input" name="Pcode" required>
       </div> 
       <div class="inputfield">
        <label>Phone Number</label>
        <input type="text" class="input" name="Pnumber" required>
     </div>
     <div class="inputfield">
      <label>Select Services</label>
      <div class="custom_select">
        <select name="Sservices" required>
          <option value="Not Selected">Select</option>
          <option value="Dogwalking">Dogwalking</option>
          <option value="Longdaycare">LongDayCare</option>
          <option value="PetTraining">PetTraining</option>
          <option value="Medical Treatment">Medical Treatment</option>
        </select>
      </div>
   </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox" required>
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Register" class="btn" name="register" required>
      </div>
    </div>
  </form>
</div>		
</body>
</html>

<?php
    if($_POST['register'])
    {
      $Pname     = $_POST['Pname'];
      $Sbreeds   = $_POST['Sbreeds'];
      $Weight    = $_POST['Weight'];
      $address   = $_POST['address'];
      $City      = $_POST['City'];
      $Pcode     = $_POST['Pcode'];
      $Pnumber   = $_POST['Pnumber'];
      $Sservices = $_POST['Sservices'];

      if($Pname != "" && $Sbreeds != "" && $Weight != "" && $address != "" && $City != "" && $Pcode != "" && $Pnumber != "" && $Sservices != "")
      {

       $query= "INSERT INTO Form (Pname,Sbreeds,Weight,address,City,Pcode,Pnumber,Sservices) values('$Pname','$Sbreeds','$Weight','$address','$City','$Pcode','$Pnumber','$Sservices')";
      
       $data = mysqli_query($conn,$query);

       if($data)
       {
         echo "<script>alert('Successfully Registered');</script>";
         ?>

            <meta http-equiv = "refresh" content = "0; url = http://localhost/shubham/e-pet%20care/" /> 

         <?php
       }
       else
       {
         echo "Failed";
       }
      }
      else
      {
        echo "<script>alert('Please fill the form');</script>";
      }

    }

?>    