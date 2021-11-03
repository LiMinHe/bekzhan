<html>
<body>
     <style>
          body {
               background: #574ed3 url(csc-20a/kyrgyzstanflag.jpg); /*Цвет фона и путь к файлу */
               color: #fff; /*Цвет текста*/
          }
          </style>
     <style>
     .rihgtimg{
           float: right;
           marging: 7px 0 7px 7px;
     }   
     
     
     
     
     
     
     
</style>     
<pre><h1 syle="text-align: center;">                                         About me:
<pre><h2>Name:  Bekjan Myrzaev</h2></pre>
<pre><h2>Info: I live in Bishkek. 17 years old</h2></pre>                  
<pre><h2>Phone number: 0501408508</h2></pre>
<pre><h2>Hobby: I'm play football and basketball
<img src="sisa.jpg" alt="Anime" class="mev">
<pre><h1;">
</body>
</html>
<html>
<head>
<title>Login Page</title>
</head>
<body>
<form name="loginForm" method="post" action="login.php">
<table width="20%" bgcolor="0099CC" align="center">

<tr>
<td colspan=2><center><font size=4><b>HTML Login Page</b></font></center></td>
</tr>

<tr>
<td>Username:</td>
<td><input type="text" size=25 name="userid"></td>
</tr>
	
<tr>
<td>Password:</td>
<td><input type="Password" size=25 name="pwd"></td>
</tr>

<tr>
<td ><input type="Remember me"></td>
<td><input type="submit" onclick="return check(this.form)" value="Login"></td>
</tr>

</table>
</form>
<script language="javascript">
function check(form)
{
if(form.userid.value == "Roseindia" && form.pwd.value == "Roseindia")
{
	return true;
}
else
{
	alert("Error Password or Username")
	return false;
}
}
</script>

</body>
</html>
