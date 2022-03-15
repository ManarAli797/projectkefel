<?php
session_start();
if(isset($_SESSION['user'])&&isset($_SESSION['pass']))
{

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> معهد الكفيل لتقنية المعلومات</title>
        <link rel="stylesheet"  href="pcss.css">
    </head>
    <body>
        <!--  صفحة الادمن لاضافة الاخبار-->
        <table>
            <tr>
                <td colspan="2"><img src="img/header.jpg"></td>
            </tr>
            <tr>
                <td style="width: 250px;vertical-align: top ; ">
                <?php include"include/list.php"; ?>
               </td>
               
               <td style="width: 750px; vertical-align: top;  padding:10px">

                    <form action="padmin.php" method="POST" enctype="multipart/form-data">

                    
                     <div class="div1" style="position: relative;margin-right:90px">
                     <input type="submit" value=" تسجيل خروج" name="logout" style="font-size:12px;color:white;;background: blue;position: relative; top:10px;width:74px;padding-top:5px;padding-bottom:5px;float:left;">

                     <label style="font-size: 17px;padding-left:60px;position: relative;top: 86px;float: right;">العنوان</label>
                     <input type="text" name="title"  style="direction: rtl;width:520px;padding-top:12px;position: relative;top: 80px;">

                     <label style="font-size: 17px;position: relative;top: 300px;float: right; left:95px;">المحتوى</label>
                     <textarea rows="20" cols="72" name="news"  style="margin-left:127px ;position: relative;top: 120px;float: left;"> </textarea>
                     
                     <label style="font-size: 17px;position: relative;top: 504px;float: right;">التأريخ </label>
                     <input type="date" name="date"  style="font-size:18px;width:525px;position: relative;top: 190px;float: left;left:128px;">
                     
                     <label style="font-size: 17px;position: relative;top: 284px;float: right;">الصورة </label>
                     <input type="file" name="image"  style="font-size:18px;padding-right:345px;position: relative;top: 245px;float: left;left:318px;">
                    <div class="radi">
                        
                     <input type="radio" name="rad" value="1"  > اخبار
                     <input type="radio" name="rad" value="2"> مقالات
                     <input type="radio" name="rad"value="3" > دورات
                    
                    </div>
                     <input type="submit" value=" حفظ الخبر" name="save" style="font-size:20px;position: relative; top:350px;width:537px;padding-top:11px;padding-bottom:11px;right:133px;">
                     </div>
                    </form>
                </td>
                  
            </tr>
             <tr>
                <td colspan="2"><img src="img/trailer.jpg" width="100%"> </td>
            </tr>
        </table>
    </body>
</html> 

<?php
}
else
header('location:login.php');
?>