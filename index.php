<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="PNR status">
    <title>Free PNR Alert !!</title>
    <link rel = "stylesheet" href = "bootstrap.css">
	<style type = "text/css">
	#abc {
    position: absolute;
    height: 180px;
    width: 250px;
    margin: -100px 0 0 -150px;
    top: 50%;
    left: 50%;
    }
	</style


	
<script type="text/javascript">
<!--
// Form validation code will come here.
function validate()
{
 
   if( document.pnr.Mobile.value == "" ||
           isNaN( document.pnr.Mobile.value ) ||
           document.pnr.Mobile.value.length != 10 )
   {
     alert( "Please provide valid mobile number." );
     document.pnr.Mobile.focus() ;
     return false;
   }
   
    if( document.pnr.Pnr.value == "" ||
           isNaN( document.pnr.Pnr.value ) ||
           document.pnr.Pnr.value.length != 10 )
   {
     alert( "Please provide valid PNR number." );
     document.pnr.Pnr.focus() ;
     return false;
   }
   
   return( true );
}
//-->
</script>
 
  </head>

  <body>
   
    <div id = "abc" class = "well">
      <form name = "pnr"  onsubmit="return(validate());" action = "index.php" method = "post">
        <label> PNR Number: </label>
        <input name ="Pnr" align = "center" type="text" class="span3" placeholder="Enter PNR number" >
		<label> Mobile Number: </label>
        <input name = "Mobile" align = "center" type="text" class="span3" placeholder="Enter mobile number">
		<br/>
        <button name = "submit" class="btn btn-large btn-primary" type="submit">Register!</button>
      </form>
    </div>
	
	
<?php


if(isset($_POST['submit']) && isset($_POST['Pnr']) && isset($_POST['Mobile']))

{
    $hostname = "localhost";
    $username = "freepnra_sidace1";
    $password = "s10rv#87";
    $Pnr = $_POST['Pnr'];
    $Mobile = $_POST['Mobile'];

    $con = mysql_connect($hostname,$username,$password);

    if(!$con)
    {
            die("Could not connect to Database");
    }

    mysql_select_db("freepnra_userinfo",$con) or die("could not connect to database".mysql_error());

    $sql = "INSERT INTO users (pnr,mobile) VALUES ('$Pnr','$Mobile')";

    mysql_query($sql,$con) or die("insertion error".mysql_error());
	
	mysql_close($con);
}


?>	
	
	
  </body>
</html>
