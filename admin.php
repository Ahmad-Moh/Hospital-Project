<?php

    include "header.php";
?>

<table>
    <th>الرقم</th>
    <th>إسم المريض</th>
    <th>البريدالإلكتروني</th>
    <th>التاريخ</th>

<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbName = "hospital";

    $conn = mysqli_connect($host, $user, $password,$dbName);

    # للتأكد من الاتصال بقاعدة البيانات و ويمكن حذفه لاحقاً

  /*  if(isset($conn)){
      echo "Yes database connected";
    }
    else {
      echo "database not connected";
    }
*/

  # استيراد معلومات المراجعين من قاعدة البيانات

  $query = "SELECT * FROM patients";
 $result = mysqli_query($conn,$query);

 if ($result){
     while($row = mysqli_fetch_assoc($result)){
         echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['date'] . "</td></tr>";
     }
     echo "</table>";
 }
 else{
     echo "يوجد خطأ";
 }


?>
