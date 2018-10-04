<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="Public/css/bootstrap.css"> 
<link rel="stylesheet" type="text/css" href="Public/css/test.css">

<head>
    <title>BLOG</title>
</head>
<body>
<center>
    <div id="container">
        <nav class="navbar ">
            <div class="container-fluid">
                <ul style="float: left;" class="navbar-header">
                    <li > <a href="#" >HOME</a> </li>
                    <li > <a href="#">POST</a> </li>
                </ul>
                <div style="float: right;" class="dropdown"><a href=""><img src="public/img/icondki.png" style="width: 40px"><?php echo $_SESSION['name']?></a>
                    <div class="dropdown-content">
                        <table >
                            <tr><td><a href="">My content</a></td></tr>
                            <tr><td><a href="http://localhost/TT%20PHP/MVC_POST/index.php?url=createpost/create">Create Post</a></td></tr>
                            <tr><td>
                            
							<a href="Views/logout.php">Logout</a></td></tr>
                        </table>
                    </div>
                </div>
            </div>
        </nav>
      </center>
            <?php foreach ($data as $arr):?>

               <div style="margin-left: 20px"><p style="color: blue"><a href=""><?php echo $arr['title']?></a></p></div> 
               <div style="margin-left: 20px"><p style="color: red;font-size:10px"><?php echo $arr['date']?></p></div>
                
            <?php endforeach; ?>
      
    </div>
    
</body>
</html>
