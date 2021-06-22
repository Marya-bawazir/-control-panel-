<html>
<body>

<?php
$connection= new mysqli("localhost","root" ,"","robot");
$stmt = $connection->prepare("select * from engines ");
$stmt -> execute();


$result = $stmt-> get_result();

while($row =$result-> fetch_assoc()){
echo "  Base =" .$row["Base"]."</br>" ;

echo "Shoulder=" .$row["Shoulder"] ."</br>" ;

echo "Elbow=" . $row["Elbow"] ."</br>" ;

echo  "Wrist=" . $row["Wrist"] ."</br>";

echo "Gripper=" .  $row["Gripper"] ."</br>" ;

echo "Engine=" .  $row["Engine"] ."</br>" ;


}

?>


</body>

</html>