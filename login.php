<?php
session_start();
?>
<!DOCTYPE html>
<!-- صفحة تسجيل دخول الادمن -->
<html>
    <head>
        <title> معهد الكفيل لتقنية المعلومات</title>
        <link rel="stylesheet"  href="pcss.css">
    </head>

  <body>
   
    <form action="plogin.php" method="POST" enctype="multipart/form-data">
        <div class="divlog" style=" background: black; opacity: 0.9;margin-top: 0px;width: 420px; height: 230px;position: relative;left: 290px;top:160px; margin-left:80px;padding: 40px;">
        <p style="font-size:36px;color: #ff8a00; opacity:0.8; position: relative;top:-36px;left:43px;"> Login To The Website </p>
        <input type="text" name="username" placeholder="    User Name"  style="padding-bottom:10px;padding-top:10px; width:260px ;position: relative;top: -46px; left:85px">
         <input type="text" name="password"  placeholder="    Password"  style="width:260px ;;padding-bottom:10px;padding-top:10px;position: relative;top: -10px;left:85px">
       <input type="submit" value="  login" name="save" style="font-size:20px;color: #ff8a00;; opacity:0.8;position:relative;width:110px; top:60px;left:-30px;">
    
    </div>
    </form>
   </body>
</html>