<!DOCTYPE html>
<html>
<head>
        <title> معهد الكفيل لتقنية المعلومات</title>
        <link rel="stylesheet"  href="pcss.css">
        <link  href="padmin.php">

</head>
<body>
    <!-- صفحة الاخبار -->
    <table>
     <tr>
      <td colspan="2"><img src="img/header.jpg"></td>
       </tr>
        <tr>
          <td style="width: 250px;vertical-align: top ; ">
          <?php include"include/list.php"; ?>
</td>
                <td style="width: 750px; vertical-align: top;  padding:10px">
                  
                <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "db_news";

            $conn = new mysqli($servername, $username, $password, $dbname);
            mysqli_set_charset($conn, "utf8");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM tnews where type=1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                $datee = strtotime($row["date"]);
                  ?>  
                 <div class="textim1">
                     <img  src="<?php echo $row['imge'];?>">
                     <h2  id="id_head"><?php echo $row["title"]; ?> </h2>
                     <p id="id_date"><?php echo date('h:m:Y', $datee); ?> </p>
                     <p><?php echo $row["news"]; ?></p>
                  </div>
                  <?php
                }
            } else {
                echo "<p style='color: darkblue;font-size:30px; text-align:center;margin-top: 200px;'>لا توجد دورات حاليا</p>";
            }
            $conn->close();
            ?>
                 
                </td>
       </tr>
       <tr>
         <td colspan="2"><img src="img/trailer.jpg" width="100%"> </td>
        </tr>
    </table>
</body>
</html>
            