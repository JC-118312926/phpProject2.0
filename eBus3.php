<!DOCTYPE html>
<html>
<body>
    
     <style>
         body{
                Background-color: grey;
                Background: Linear-gradient(to bottom left,grey,blueviolet)fixed; 
            }
         
                .button {
                background-color:black;
                border: none;
                border-radius: 15px;
                color: white;
                padding: 15px 25px;
                text-align: center;
                font-size: 12px;
                cursor: pointer;
            }
            
     </style> 
     
     
<center>
    <h1><b><u>Purchase Receipt</u></b></h1>
    <br />
    <br />
    
<!--    //Starting session to get the variable from the last page -->
<?php
session_start();
    $totalValue = $_POST['txtTotal'];      
    $fullNameValue = $_POST['txtName'];
    $Email = $_POST['txtEmail'];
        echo "The name is : ".$fullNameValue.".";
        echo "<br></br>";       
        echo "The total value is $".$totalValue.".";
        echo "<br><br>";
        echo "Email is : ".$Email.".";
        

?>
<br/>
<br/>
<br/>
<a href="Consulting.html">
<button  class="button" type="button">Back to Consulting Services.</button>
</a>
<a href="eBus1.php">
<button  class="button" type="button">To purchase another service.</button>
</a>
</center>
</body>
</html>

