<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical-6 Employee Form</title>
</head>
 </head>
 <body>
 <form name="demo" action="practical3.1.php" method="post" enctype="multipart/form-data">
 <fieldset>
 <legend>Shree Hanumat IMT Goraya, Punjab</legend>
 <h1>Employee Card</h1>
 <table width="360px" border="2" align="center">
 <caption><b>Enter Employee Detail...</b></caption>
 <tr>
 <td align="right">Employee Name</td>
 <td><input type="text" name="empname" size="30px"></td>
 </tr>
 <tr>
 <td align="right">Address</td>
 <td><textarea name="empadd" cols="23"></textarea></td> 
 </tr>
 <tr>
 <td align="right">Department</td>
 <td><select name="empdept">
 <option value="BCA" selected>BCA</option>
 <option value="PGDCA">PGDCA</option>
 <option value="M.Sc.(CA&IT)">MSC(CA/IT)</option>
 </select>
 </td>
 </tr>
 <tr>
 <td align="right">Designation</td>
 <td><select name="empdes">
 <option selected="" value="Principal">Principal</option>
 <option value="Professor">Professor</option>
 <option value="Asst.Professor">Asst.Professor</option>
 <option value="Lecturer">Lecturer</option>
 <option value="Clerk">Clerk</option>
 </select>
 </td>
 </tr>
 <tr>
 <td align="right">Male/Female</td>
 <td><select name="empgender">
<input type="radio" name="gender" value="male" checked="checked">Male<br> 
<input type="radio" name="gender" value="female">Female
</select>
 </td>
 </tr>
 <tr>
 <td align="right">Favourite Subjects</td>
 <td><select name="empsub">
 <input type="checkbox" name="favsub[]" value="Hacking" checked="checked" />Hacking<br />
 <input type="checkbox" name="favsub[]" value="Photoshop" />Photoshop<br />
 <input type="checkbox" name="favsub[]" value="Forensic" checked="checked"/>Forensic<br />
 <input type="checkbox" name="favsub[]" value="C Language" />C Language<br />
 <input type="checkbox" name="favsub[]" value="PHP" checked="checked"/>PHP
 </select> 
</td>
 </tr>
 <tr>
 <td align="right">Contact No</td>
 <td><input type="text" name="empcno" size="30px"></td>
 </tr>
 <tr>
 <td align="right">E-Mail</td>
 <td><input type="text" name="empmail" size="30px"></td>
 </tr>
 <tr>
 <td align="right">Password</td>
 <td><input type="password" name="emppass" size="30px"></td>
 </tr>
 <tr>
 <td align="right">Upload Photo</td>
 <td><input type="file" name="empphoto" accept="image/*" size="30px"></td>
 </tr>
 <tr>
 <td colspan="2" align="center">
 <input type="submit" name="submit" value="Submit">
 </td>
 </tr>
 </table>
 </fieldset>
 </form>
 </body>
</htm> 