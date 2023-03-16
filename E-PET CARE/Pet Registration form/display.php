<html>
    <head>
        <title>Display</title>
        <style>
            body
            {
                background: #DC143C;

            }
            table
            {
                background-color: white;
            }
            .update, .delete
            {
                background-color: Green;
                color: white;
                border: 0;
                Outline: none;
                border-radius: 5px;
                height: 22px;
                width: 80px;
                font-weight: bold;
                cursor: pointer;
            }

            .delete
            {
                background-color: #FF0000;
           
            }

        </style>



<?php 
include("Connection.php");
error_reporting(0);

$query = "SELECT * FROM FORM"; 
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);



// echo $total;

if($total != 0)
{
    ?>

    <h2 align="center"><mark>Displaying all Booking's</mark></h2>

    <center><table border="1" cellspacing="7" width="100%" >
        <tr>
        <th width="3%">ID</th>
        <th width="8%">Pet name</th>
        <th width="10%">Breed</th>
        <th width="7%">Weight</th>
        <th width="28%">Address</th>
        <th width="5%">City</th>
        <th width="8%">Postal Code</th>
        <th width="7%">Phone No.</th>
        <th width="10%">Services</th>
        <th width="14%">Operation</th>
        </tr>
    

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
       echo "<tr>
             <td>".$result[id]."</td>
             <td>".$result[Pname]."</td>
             <td>".$result[Sbreeds]."</td>
             <td>".$result[Weight]."</td>
             <td>".$result[address]."</td>
             <td>".$result[City]."</td>
             <td>".$result[Pcode]."</td>
             <td>".$result[Pnumber]."</td>
             <td>".$result[Sservices]."</td>

             <td><a href='Update_design.php?id=$result[id]'><input type='submit'value ='Update' class='update'></a>
            
             <a href='Delete.php?id=$result[id]'><input type='Submit'value ='Delete' class='delete' onclick = 'return checkdelete()'></a></td>
             </tr>
            ";
    }
}
else
{
    echo "No records found";
}
// ?>
</table>
</center>

<script>
    function checkdelete()
    {
        return confirm('Are you sure you want to delete this record ?');
    }
</script>

