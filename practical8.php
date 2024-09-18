<!-- Write a PHP program to prepare student Mark sheet using Switch statement.  -->
<html>
 <head>
 <title>Practical-8 Marksheet</title>
 </head>
 <body>
 <form name="demo" action="practical8.php" method="post" >
 <fieldset>
 <legend align="center">Enter Your Name with Marks Detail</legend>
 <table width="250px" border="2" align="center">
 <tr>
 <td align="right">Name</td>
 <td><input type="text" name="txtname"></td>
 </tr>
 <tr>
 <td align="right">Subject-1</td>
 <td><input type="text" name="txtsub1"></td>
 </tr>
 <tr>
 <td align="right">Subject-2</td>
 <td><input type="text" name="txtsub2"></td>
 </tr>
 <tr>
 <td align="right">Subject-3</td>
 <td><input type="text" name="txtsub3"></td>
 </tr>
 <tr>
 <td align="right">Subject-4</td>
 <td><input type="text" name="txtsub4"></td> 
 </tr>
 <tr>
 <td colspan="2" align="center">
<input type="submit" name="submit" value="Submit"></td>
 </tr>
 </table>
 </fieldset>
 </form>
 </body>
 <?php

 if(isset($_REQUEST['submit']))
 {
 $name=$_REQUEST['txtname'];
 $sub1=$_REQUEST['txtsub1'];
 $sub2=$_REQUEST['txtsub2'];
 $sub3=$_REQUEST['txtsub3'];
 $sub4=$_REQUEST['txtsub4'];

 echo "<b>Your Name is: </b>" . $name . "<br>";
 echo "<b>Your Marks Detail: </b> <br>";
 echo "Subject-1: " . $sub1 . "<br>";
 echo "Subject-2: " . $sub2 . "<br>";
 echo "Subject-3: " . $sub3 . "<br>";
 echo "Subject-4: " . $sub4 . "<br>";

 $total=$sub1+$sub2+$sub3+$sub4;
 echo "Total Marks: " . $total . "<br>";

 $per=$total/4;
 echo "Percentage: " . $per . "%<br>";

 switch($per)
 {
 case $per<35:
 echo "Grade: F" . "<br>";
 break;
 case $per>=35 && $per<=50:
 echo "Grade: D" . "<br>";
 break;
 case $per>50 && $per<=60:
 echo "Grade: C" . "<br>";
 break;
 case $per>60 && $per<=70:
 echo "Grade: B" . "<br>";
 break;
 case $per>70 && $per<100:
 echo "Grade: A" . "<br>";
 break;
 default:
 echo "Invalid.... or out of limit";
 break;
 }
 }
 else
 {
 echo "Go Back and Press Submit button";
 }
?>
</html> 