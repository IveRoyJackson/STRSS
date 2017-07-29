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
    <form method="post" action="check.php">
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
            <button class="btn waves-effect waves-light loginbtn" type="submit" name="action">
              登陆
            </button>
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
                <p>易上手的教学资源共享系统</p>
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