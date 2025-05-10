<?php
if(isset($_REQUEST['Save']))
{
	$c=mysqli_connect("localhost","root","","form")or die ("Connection Fail");
	extract($_POST);
	mysqli_query($c,"insert into form_data (name,address,city,mobile,gender,dob,passw)values ('$nm','$add','$sel','$mob','$gender','$db','$psw')")or die ("Query Fail");
	echo "Data Saved";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="form.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="">	
  <table width="50%" border="1" align="center">
    <tr>
      <td colspan="3"><div align="center">Form</div></td>
    </tr>
    <tr>
      <td>Name</td>
      <td>:</td>
      <td><input name="nm" type="text" id="nm" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td>:</td>
      <td><textarea name="add" id="add"></textarea></td>
    </tr>
    <tr>
      <td>City</td>
      <td>:</td>
      <td><select name="sel" id="sel">
        <option value="select city">select city</option>
        <option value="Bhavnagar">Bhavnagar</option>
        <option value="Surat">Surat</option>
        <option value="Mahuva">Mahuva</option>
        <option value="Talaja">Talaja</option>
      </select></td>
    </tr>
    <tr>
      <td>Mobile</td>
      <td>:</td>
      <td><input name="mob" type="text" id="mob"  pattern="[6-9]{1}[0-9]{9}"/></td>
    </tr>
    <tr>
      <td height="52">Gender</td>
      <td>:</td>
      <td><input name="gender" type="radio" value="Male" checked="checked" />
      Male
        <input name="gender" type="radio" value="Female" />
        Female</td>
    </tr>
    <tr>
      <td>DOB</td>
      <td>:</td>
      <td><input name="db" type="date" id="db" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td>:</td>
      <td><input type="password" name="psw" id="psw" /></td>
    </tr>
    <tr>
      <td>
        <div align="right">
          <input name="Reset" type="reset" id="Reset" value="Reset" />
        </div></td>
      <td>:</td>
      <td>
        <div align="center">
          <input name="Save" type="submit" id="Save" value="Submit" onclick="return f1();" />
        </div></td>
    </tr>
  </table>	
</form>
</body>
</html>
<script>
function f1()
{
	if(form1.nm.value=="")
	{
		alert("Enter Name");
		form1.nm.focus();
		return false;
	}
	else if(form1.add.value=="")
	{	
		alert("Enter your address.");
		form1.add.focus();
		return false;
	}
	else if(form1.sel.value=="select city")
	{	
		alert("select your city.");
		form1.sel.focus();
		return false;
	}
	else if(form1.mob.value=="")
	{	
		alert("Enter your mobile.");
		form1.mob.focus();
		return false;
	}
	else if(form1.mob.value.length!=10)
	{
		alert("Enter valid your mobile.");
		form1.mob.focus();
		return false;
	}
	else if(isNaN(form1.mob.value))
	{
		alert("Enter valid your mobile. (char not allowed)");
		form1.mob.focus();
		return false;
	}
	else if(form1.db.value=="")
	{	
		alert("Enter date of birth.");
		form1.db.focus();
		return false;
	}
	else if(form1.psw.value=="")
	{	
		alert("Enter your pasward.");
		form1.psw.focus();
		return false;
	}
}
</script>