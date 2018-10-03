<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="user_login.php" name="myform" id="form1" method="GET" onsubmit="return checkEmail()" style="padding-left: 430px">
                <ul>
                <li><b>Name:</b><br> <input type="text" style="font-size: 15px;width: 270px;height: 30px" id="name" name="name" value="">
                                    <span id="errorname" class="error"></span>
                </li>
                  <li><b>Passwword:</b><br> <input type="text" style="font-size: 15px;width: 270px;height: 30px" id="password" name="password" value="">
                                    <span id="errorpassword" class="error"></span>
                </li>
                </ul>
                <p><button type="submit", style="background-color: green;color: yellow;margin-left: 116px;padding-top: 17px;width: 100px", name="user_login", onclick="checkEmail()"  >LOGIN</p>
</body>
</html>