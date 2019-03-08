<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";

/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;



/**
 * Allocate The Mobile number session variable to a text box
 */

?>

<!DOCTYPE html>
<html>
    <Head>
        <title>eBusiness 2</title>
    </Head>
    <body>
        <style>
         body{
                Background-color: grey;
                Background: Linear-gradient(to bottom left,grey,blueviolet)fixed; 
            }
        </style> 
        <div class="form">
            <form name="Details" method="post" action="eBus3.php">
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Enter in your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" required=""/></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" id="txtEmail" name="txtEmail" value=""  required=""/></td>
                        </tr>
                        <tr>
                            <td>Pin</td>
                            <td><input type="Password" id="txtPassword" name="txtPin" value="" pattern="[0-9]{4}" required=""/></td>
                        </tr>
                        <tr>
                            
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /></td>
                        </tr>
                    </table>
                </center>
        <center>
                     
                  <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="continue"/>          
         </center>                   
        </div>
       </form>
    </body>
</html>