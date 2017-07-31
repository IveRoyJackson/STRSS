<?php
function post($str){
    $val = !empty($_POST[$str]) ? $_POST[$str] : null;
    return $val;
}
function get($str){
    $val = !empty($_GET[$str]) ? $_GET[$str] : null;
    return $val;
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
      <!--Import Google Icon Font-->
      <link href="http://fonts.useso.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link href="css/style.css" rel="stylesheet">
        <title>教学资源共享系统STRSS</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo center">教学资源共享系统STRSS</a>
      </div>
    </nav>
    
<?php
if(post("submit")){
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PWD','Buttest123!');
    define('DB_NAME','strss');

    //连接数据库
    $connect = mysql_connect(DB_HOST,DB_USER,DB_PWD) or die('数据库连接失败，错误信息：'.mysql_error());

    //选择指定数据库
    mysql_select_db(DB_NAME,$connect) or die('数据库连接错误，错误信息：'.mysql_error());

	define('US_NAME',post('name'));
	define('US_PAWD',post('password'));
	$ISQL = "select * from test where name='" . US_NAME . "'";
	$IRES = mysql_query($ISQL) or die("数据库连接失败，错误信息：" . mysql_error());
	$INUM = mysql_num_rows($IRES);
if($INUM == 0){
	echo "<script>alert('识别码不存在');</script>";
	}
while($IRET=mysql_fetch_object($IRES))
{
	if($IRET->password != md5(US_PAWD))
	{
		echo "<script>alert('密码不正确');</script>";
	}
	else 
	{
		echo "<script>alert('登录成功');</script>";
		}
	}
}
?>
       <form action="" method="post" id="submit">
     <div class="loginmod">
         <div class="card-panel hoverable">
           <div class="row">
             <div class="input-field col s12">
              <input id="last_name" type="text" class="validate" name="name">
              <label for="last_name">识别码</label>
             </div>
            <div>
            <div class="row">
             <div class="input-field col s12">
              <input id="password" type="password" class="validate" name="password">
              <label for="password">密码</label>
             </div>
            </div>
            <center>
            <input type="submit" name="submit" id="submit" class="btn waves-effect waves-light loginbtn" value="登录">
            </center>
         </div>
     </div>
     </div>
     </div>
     </form>
     <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">版本信息</h5>
                <p class="grey-text text-lighten-4">教学资源共享系统STRSS V0.1.0 测试版</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">介绍</h5>
                <p class="white-text">易上手的教学资源共享系统</p>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 Copyright 教学资源共享系统STRSS
            <a class="grey-text text-lighten-4 right">By:TianZiheng</a>
            </div>
          </div>
        </footer>     
     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>