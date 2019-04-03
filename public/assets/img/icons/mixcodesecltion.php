<?php
$link = mysqli_connect("localhost", "root", "", "navy");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$var1;
$var2;
$var3;
$var4;
$var5;
$var6;
$var7;
$var8;
$var9;
$var10;
$var11;
$var12;

 
 $sql = "SELECT * from registration where reg_Id=8";
	
$result = $link->query($sql);

if ($result->num_rows > 0) {

  
while($row = $result->fetch_assoc()) {
        echo "id: " . $row["reg_Id"]. " - Branch: " . $row["branch"]. " -Status" . $row["status"]. " " . $row["name"]." ".$row["fname"]."".$row["gender"]." ".$row["dob"]." ".$row["checkbox"]."".$row["h"]."".$row["marital_status"]." ".$row["mobile"]."".$row["rel"]. "<br>";
   			
	
	$var1=$row["reg_Id"];
	$var2=$row["branch"];
	$var3=$row["status"];
	$var4=$row["name"];
	$var5=$row["fname"];
	$var6=$row["gender"];
	$var7=$row["dob"];
	$var8=$row["checkbox"];
	$var9=$row["h"];
	$var10=$row["marital_status"];
	$var11=$row["mobile"];
	$var12=$row["rel"];

	
	}
} else {
    echo "0 results";
}
 
mysqli_close($link);



?>


<html>
<head>


<title>Registration Form</title>
<style>
div {
   
    background-color: 171975;
    padding-top: 2px;
    padding-right: 30px;
    padding-bottom: 2px;
    padding-left: 80px;
color: white;

}


          
</style>
</head>
<body style="background-color:LightSkyBlue;">
<div><h3  >Pakistan Navy Online Registration Form</h3></div>

<form action ="navycon.php"method="post">
<h3>Fill it now</h3>
<center>
<table border="1" width="400"height="300" >
<tr>
<td colspan ="5" align="center" style= "background-color:171975; height:30px;width:100px ; color: white;border:ridge">Pakistan Navy Online Registration Form</td>
</tr> 
<tr>
<td align ="right">Id:</td><td><input type="text"name="reg_Id"style= "background-color:LightSkyBlue;border:ridge" value=<?php echo $var1;?>></td>
</tr>
<tr>
<td align ="right">Branch:</td><td><input type="text"name="branch"style= "background-color:LightSkyBlue;border:ridge" value=<?php echo $var2;?>></td>
</tr>
<tr>
<td align ="right">Mention Status</td><td ><input type="radio" name="status" value=<?php echo $var3;?>>Service <input type="radio" name="status" value=<?php echo $var3;?>>Civilian </td></tr>


</tr>
<tr>
<td align ="right">Full Name:</td><td><input type="text"name="name"style= "background-color:LightSkyBlue ;border:ridge"value=<?php echo $var4;?>></td>
</tr>
<tr>
<td align ="right"> Father Name:</td><td><input type="text"name="fname"style= "background-color:LightSkyBlue;border:ridge"value=<?php echo $var5;?>></td>
</tr>

<tr>
<td align ="right">Gender:</td><td ><input type="radio" name="gender" value=<?php echo $var6;?>>Male<input type="radio" name="gender" value=<?php echo $var6;?>">Female</td></td>
</tr>

<tr>
<td align ="right">Date of Birth:</td><td><input type="text"name="dob"style= "background-color:LightSkyBlue ;border:ridge"value=<?php echo $var7;?>></td>
</tr>
<tr>
<td align ="right">Age Relaxation:</td><td><input type="checkbox"name="checkbox"value=<?php echo $var8;?>></td>
</tr>
<tr>
 <td align ="right">Height</td><td>&nbsp;<select name="h"style= "background-color:LightSkyBlue;border:ridge"value=<?php echo $var9;?>>
<option ></option>
<option value="5.5">5.5;</option>
<option value="5.4">5.4</option>
<option value="5.5">5.5;</option>
<option value="5.3">5.3</option>
<option value="5.2">5.2</option>
<option value="5.1">5.1</option>
<option value="5.0">5.0</option>
<option value="4.4">4.4</option>
</select></td>
</tr>

<tr>
<td align ="right"> Marital Status:</td><td><input type="checkbox"name="MS" <?php echo $var9;?>>Single<input type="checkbox"name="MS" <?php echo $var10;?>>Married</td>
</tr>
<tr>
<td align ="right">Mobile No:</td><td><input type="text"name="mobile"style= "background-color:LightSkyBlue ;border:ridge"value=<?php echo $var11;?>></td>
</tr>
<tr>


<tr>
 <td align ="right">Religion</td><td>&nbsp;<select name="rel"style= "background-color:LightSkyBlue;border:ridge"value=<?php echo $var12;?>>
<option ></option>
<option value="Islam">Islam;</option>
<option value="other">Other</option>
</select></td>
</tr>




<tr>
 <td colspan ="5" align="center"><input type="submit" value="Submit"></td>
</tr>









</center>
</table>
</form>
</body>
</html>

