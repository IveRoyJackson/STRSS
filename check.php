<?php  
require_once("ms_index.php");  
//require_once ("mysql_connect.php");  
$name=$_POST['name'];  
$password=$_POST['password'];  
if($name == "")  
{  
  
    echo "请填写用户名<br>";  
     echo"<script type='text/javascript'>alert('请填写用户名');location='index.php';  
            </script>";  
      
      
       
  
}  
elseif($password == "")  
{  
  
     //echo "请填写密码<br><a href='index.php'>返回</a>";  
    echo"<script type='text/javascript'>alert('请填写密码');location='index.php';</script>";  
      
}  
else  
{   
    $colum=collect_data();  
     if(($colum['name'] == $name) && ($colum['password'] == $password))  
  
        {  
  
         //echo "验证成功！<br>";  
            echo"<script type='text/javascript'>alert('登陆成功');location='huanying.html';</script>";  
  
         }  
           
     else  
  
         //echo "密码错误<br>";  
        echo"<script type='text/javascript'>alert('密码错误');location='index.php';</script>";  
  
     //echo "<a href='index.php'>返回</a>";  
  
}  
?>  