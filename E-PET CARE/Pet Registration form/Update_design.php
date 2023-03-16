<?php include("connection.php"); 

$id = $_GET['id'];

$query = "SELECT * FROM form where id= '$id'"; 
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>


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
      Update Booking Detail
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Pet Name</label>
          <input type="text" class="input" name="Pname"
          value="<?php echo $result['Pname']?>">
       </div>   
       <div class="inputfield">
          <label>Search Breeds</label>
          <div class="custom_select">
            <select name="Sbreeds">
              <option value="Not Selected">Select</option>
              <option value="Beagles"
              <?php
                   if($result['Sbreeds'] == 'Beagles')
                     {
                        echo "selected";
                     }
                ?>
              >Beagles</option>
              <option value="German Shepherd"
              <?php
                   if($result['Sbreeds'] == 'German Shepherd')
                     {
                        echo "selected";
                     }
                ?>
              >German Shepherd</option>
              <option value="Great Dane"
              <?php
                   if($result['Sbreeds'] == 'Great Dane')
                     {
                        echo "selected";
                     }
                ?>
              >Great Dane</option>
              <option value="Boxer"
              <?php
                   if($result['Sbreeds'] == 'Boxer')
                     {
                        echo "selected";
                     }
                ?>
              >Boxer</option>
              <option value="Labrador Retriever"
              <?php
                   if($result['Sbreeds'] == 'Labrador Retriever')
                     {
                        echo "selected";
                     }
                ?>
              >Labrador Retriever</option>
              <option value="Rottweiler"
              <?php
                   if($result['Sbreeds'] == 'Rottweiler')
                     {
                        echo "selected";
                     }
                ?>
              >Rottweiler</option>
              <option value="Pug"
              <?php
                   if($result['Sbreeds'] == 'Pug')
                     {
                        echo "selected";
                     }
                ?>
              >Pug</option>
              <option value="Golden Retriever"
              <?php
                   if($result['Sbreeds'] == 'Golden Retriever')
                     {
                        echo "selected";
                     }
                ?>
              >Golden Retriever</option>
              <option value="Cocker Spaniel"
              <?php
                   if($result['Sbreeds'] == 'Cocker Spaniel')
                     {
                        echo "selected";
                     }
                ?>
              >Cocker Spaniel</option>
              <option value="Dachshund"
              <?php
                   if($result['Sbreeds'] == 'Dachshund')
                     {
                        echo "selected";
                     }
                ?>
              >Dachshund</option>
            </select>
          </div>
       </div>  
      <div class="inputfield">
          <label>Weight</label>
          <div class="custom_select">
            <select name="Weight">
              <option value="Not Selected">Select</option>
              <option value="20 - 40 kgs"
               <?php
                   if($result['Weight'] == '20 - 40 kgs')
                     {
                        echo "selected";
                     }
                ?>
               >
                20 - 40 kgs
              </option>
             <option value="40 - 60 kgs"
              <?php
             if($result['Weight'] == '40 - 60 kgs')
             {
                 echo "selected";
             }
              ?>
              >40 - 60 kgs</option>
              <option value="60 - 80 kgs"
              <?php
             if($result['Weight'] == '60 - 80 kgs')
             {
                 echo "selected";
             }
              ?>
              >60 - 80 kgs</option>
              <option value="80 - 110 kgs"
              <?php
             if($result['Weight'] == '80 - 110 kgs')
             {
                 echo "selected";
             }
              ?>
              >80 - 110 kgs</option>
              <option value="more than 110kgs"
              <?php
             if($result['Weight'] == 'more than 110kgs')
             {
                 echo "selected";
             }
             ?>
              >more than 110kgs</option>
            </select>
          </div>
       </div>  
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name="address"><?php echo $result['address'];?></textarea>
       </div> 
       <div class="inputfield">
        <label>City</label>
        <input type="text" class="input" name="City"
        value="<?php echo $result['City']?>">
     </div> 
      <div class="inputfield">
          <label>Postal Code</label>
          <input type="text" class="input" name="Pcode"
          value="<?php echo $result['Pcode']?>">
       </div> 
       <div class="inputfield">
        <label>Phone Number</label>
        <input type="text" class="input" name="Pnumber"
        value="<?php echo $result['Pnumber']?>">
     </div>
     <div class="inputfield">
      <label>Select Services</label>
      <div class="custom_select">
        <select name="Sservices">
          <option value="Not Selected">Select</option>

            <option value="Dogwalking"
             <?php
             if($result['Sservices'] == 'Dogwalking')
             {
                 echo "selected";
             }
             ?>
            >Dogwalking</option>
          <option value="Longdaycare"
          <?php
             if($result['Sservices'] == 'Longdaycare')
             {
                 echo "selected";
             }
             ?>
          >LongDayCare</option>
          <option value="PetTraining"
          <?php
             if($result['Sservices'] == 'PetTraining')
             {
                 echo "selected";
             }
             ?>
          >PetTraining</option>
          <option value="Medical Treatment"
          <?php
             if($result['Sservices'] == 'Medical Treatment')
             {
                 echo "selected";
             }
             ?>
          >Medical Treatment</option>
        </select>
      </div>
   </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Update Details" class="btn" name="update">
      </div>
    </div>
  </form>
</div>		
</body>
</html>

<?php
    if($_POST['update'])
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

       
      

       $query = "UPDATE form set Pname='$Pname',Sbreeds='$Sbreeds',Weight='$Weight',address='$address',City='$City',Pcode='$Pcode',Pnumber='$Pnumber',Sservices='$Sservices' WHERE id='$id'";
       $data = mysqli_query($conn,$query);

       if($data)
       {
         echo "<script>alert('Record Updated')</script>";
         ?>

         <meta http-equiv = "refresh" content = "0; url = http://localhost/shubham/e-pet%20care/pet%20Registration%20form/display.php" />

         <?php
       }
       else
       {
         echo "Failed to Updated";
       }
      }
      else
      {
        echo "<script>alert('Please fill the form');</script>";
      }

    }

?>    