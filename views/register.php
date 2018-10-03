
<?php
    require_once "../controllers/RegisterController.php";
    // use MVC\Controller\RegisterController;

    $regi = new RegisterController();
    $regi->postDangKi();
?>  
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Form</title>
	<style type="text/css">
		li{
			list-style-type: none;
			margin-top: 10px;
            font-family: Arial;
            
		}
        input{
            border-radius: 5px;
            font-size: 10px;
        }
        .container{
            width: 1000px;
        }
        .row{
            width: 100%;
        }
        .col-md-12{
            width: 100%;
        }
        .error{
            color: red;
        }
        ::-webkit-input-placeholder {
   			color: #1E90FF;
   			font-size: 15px;
		}
	</style>
   <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
    <script type="text/javascript">
    // validate form
                    function checkEmail() {
                        var name =document.getElementById("name").value;
                        var sdt =document.getElementById("sdt").value;
                        var password=document.getElementById("password").value;
                        var email=document.getElementById("email").value;
                        var linkfb =document.getElementById("linkfb").value;
                        var acong= email.indexOf('@');
                        var dodai=email.length-1;
                        var daucham= email.lastIndexOf('.');
                        var daucach=email.indexOf(' ');
                       // var res = web.split('.');
                        if (name==""){
                            document.getElementById("errorname").innerHTML = "*Vui lòng nhập tên";
                            return false;
                        }
                        else{
                           document.getElementById("errorname").innerHTML="";
                        }
                         if (sdt==""){
                            document.getElementById("errorsdt").innerHTML = "*Vui lòng nhập số điện thoại";
                            return false;
                        }
                        else{
                           document.getElementById("errorsdt").innerHTML="";
                        }
                         if (password==""){
                            document.getElementById("errorpassword").innerHTML = "*Vui lòng nhập mật khẩu";
                            return false;
                        }
                        else{
                           document.getElementById("errorpassword").innerHTML="";
                        }

                        if (email==""){
                            document.getElementById("erroremail").innerHTML = "*Vui lòng nhập email";
                            return false;
                        }
                        else{
                            if(dodai<=5||acong<1||daucham<=acong+1||daucach!=-1){
                                document.getElementById("erroremail").innerHTML="*Địa chỉ email lỗi.Nhập lại";
                                return false;
                            }
                            else{
                               document.getElementById("erroremail").innerHTML="Nhập đúng";
                            } 
                        }
                         if (linkfb==""){
                            document.getElementById("errorlinkfb").innerHTML = "*Vui lòng nhập link facebook";
                            return false;
                        }
                        else{
                           document.getElementById("errorlinkfb").innerHTML="";
                        }
                        // if (res.length!=3){
                        //     document.getElementById("errorweb").innerHTML = "*Vui lòng nhập lại tên web";
                        //     return false;
                        // }
                        // else{
                        //     if(res[2]!=='com'||res[0]!=='www'||res[1]===
                        //         ''){
                        //    document.getElementById("errorweb").innerHTML="*Vui lòng nhập lại tên web";
                        //     return false;
                        //     }
                        //     else{
                        //         document.getElementById("errorweb").innerHTML="*Nhập đúng";

                        //     }
                        // }
                    }
    </script>
   
</head>
<body>
    <form action="register.php" name="myform" id="form1" method="POST" onsubmit="return checkEmail()" style="padding-left: 430px">
                <ul>
                <li><b>Name:</b><br> <input type="text" style="font-size: 15px;width: 270px;height: 30px" id="name" name="name" value="">
                                    <span id="errorname" class="error"></span>
                </li>
                <li><b>Số điện thoại:</b><br> <input type="text" style="font-size: 15px;width: 270px;height: 30px" id="sdt" name="sdt" value="">
                                    <span id="errorsdt" class="error"></span>
                </li>
                <li><b>Passwword:</b><br> <input type="text" style="font-size: 15px;width: 270px;height: 30px" id="password" name="password" value="">
                                    <span id="errorpassword" class="error"></span>
                </li>
                <li><b>Email:</b><br> <input type="text" style="font-size: 15px;width: 270px;height: 30px" name="email" id="email"  value="" placeholder="Example@gmail.com">
                                    <span id="erroremail" class="error"></span>

                </li>
               
                <li><b>Link Facebook:</b><br> <input type="text" style="font-size: 15px;width: 270px;height: 30px" id="linkfb" name="linkfb" value="">
                                    <span id="errorlinkfb" class="error"></span>
                </li>
                </ul>
                <p><button type="submit", style="background-color: green;color: yellow;margin-left: 116px;padding-top: 17px;width: 100px", name="login", onclick="checkEmail()"  >Submit</p>
                </button>
                </p>
            </form> 
</div>

<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/bootstrap.js"></script>
</body>
</html> 
<?php
// if (isset($_GET['login'])) {

//          $name = $_GET['name'];
//          $sdt = $_GET['sdt'];
//          $password = $_GET['password'];
//          $email = $_GET['email'];
//          $linkfb = $_GET['linkfb'];
         
//          $arr = [
              
//                 'name'=>$name,
//                 'sdt'=> $sdt,
//                 'password'=>$password,
//                 'email'=>$email,
//                 'linkfb'=>$linkfb,
//                 //'img'=>$img,
//             ];
//             $host = 'localhost';
//             $db = 'mvc_post';
//             $username = 'root';
//             $password = '';
                
//             try{


//                 $con = new PDO("mysql:host=$host;dbname=$db",$username ,$password);
//                 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//                 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

//                 $regi = $con->prepare("INSERT INTO user(name,sdt,password,email,linkfb)
//                         VALUES(:name,:sdt,:password, :email, :linkfb)");
//                 $regi->execute($arr);
                    
//             }catch(Exception $e){
//                 echo $e->getMessage();
//             }
//         }
    