<!DOCTYPE html>
<html lang="en">
<head>
<title>Judge</title>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script src="/user/login.js"></script>
<script src="/user/register.js"></script>
</head>
<body>
	<div id="debug"></div>
<div class="login">
	<h2>Simple OJ</h2>
	<div class="login-top">
		<h1>登 录</h1>
		<form>
			<input id="usr" type="text" value="用户名" onfocus="this.value = '';" onblur="if (this.value == '') ">
			<input id="pwd" type="password" value="" onfocus="this.value = '';" onblur="if (this.value == '') ">
	    </form>
	    <div class="forgot">
			<input type="submit" onclick="login()" value="登录" >
	    </div>
	</div>
	<div class="login-bottom">
		<h3>没有账号？ &nbsp;点这里 &nbsp;<a href="#" onclick="register()">注册</a></h3>
	</div>
</div>	

</body>
</html>