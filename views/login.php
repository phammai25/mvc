<?php
    require_once'controllers/PostController.php';
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<!-- <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css"> -->
<link rel="stylesheet" type="text/css" href="public/css/test.css">

<head>
    <title>BLOG</title>
</head>
<body>
    <div id="container">
        <nav class="navbar ">
            <div class="container-fluid">
                <ul style="float: left;" class="navbar-header">
                    <li > <a href="#" >HOME</a> </li>
                    <li > <a href="#">POST</a> </li>
                </ul>
                <div style="float: right;" class="dropdown"><a href=""><img src="public/img/login.png" style="width: 40px"></a>
                    <div class="dropdown-content">
                        <table >
                            <tr><td><a href="view/user_login.php">Đăng Nhập</a></td></tr>
                            <tr><td><a href="view/register.php">Đăng kí</a></td></tr>
                        </table>
                    </div>
                </div>
            </div>
        </nav>
        <div>
            <?php foreach ($listPost as $arr):?>
                <p><?php echo $arr['title']?></p><br>
                <p><?php echo $arr['content']?></p><br>
            <?php endforeach; ?>
        </div>
    </div>  
</body>
</html>
