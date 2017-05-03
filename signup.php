<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript">
        function validate()
{
var pat= /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
var mob1=/^[0-9]{10}$/;
var mail=
var a=document.f1.username.value;
var d=document.f1.password.value;
var 
if((a=="")||(a==null))
{
alert("please enter the user name");
document.f1.uname.value="";
document.f1.uname.focus();
return false;
}
else if((d=="")||(d==null))
{
alert("please enter the password");
document.f1.pass.value="";
document.f1.pass.focus();
return false;
}
else if(d.length<6){  
  alert("Password must be at least 6 characters long.");
document.f1.pass.value="";
document.f1.pass.focus();  
  return false;  
  }  

}
</script>
</head>
<body background="avatar.jpg" style="width:1366px;height:768px;" >




<marquee ><img src="mm.jpeg" width="60" height="60"><font size="10" fontface="italic">Movie Magic</font></marquee>
<marquee>


<font size="6" color="black">sign up to be a part of us</font></marquee>
<form action="servlet2" method="get" name="form2">
<table align="left" border="1" width="350" height="300">


<tr><td >
<font color="red"  size="3">Enter your first name<input type="text" name="username"></font>
</td>



<br>


<tr>
<td>
<font color="red"  size="3"> Enter your password:<input type="password" name="password"></font>

</td>
</tr>

<tr>
<td>
<font color="red"  size="3">Enter your email id:<input type="text" name="email"></font>
</td>
</tr>
<tr>
<td>
<pre><input type="submit" value="signup"></pre>
</td>
</tr>
</tr>
</table>



</form>
<marquee>
<pre>
<br>

<img src="hu.jpg" width="120" height="100"><img src="titanic.jpeg" width="120" height="100"><img src="Fast-and-Furious-7.jpg" width="120" height="100"><img src="sardar.jpeg"width="120" height="100"></pre>


</marquee>

</body>
</html>
