<?php



$a=-1;

if(isset($_POST["a"])){
    $a = $_POST["a"];
}
$i=0;
$sql = "select * from lab2.guys2 ";
$conn = new mysqli("localhost", "root", "", "lab2");
if($result = $conn->query($sql)){
echo "<table style='border: 1px solid pink'>";
    while($row = $result->fetch_array()){
      $i++;
      echo "<tr id='tr".$i."' onmousedown='down(\"tr".$i."\")'' onclick='down2(\"tr".$i."\")'>";
      echo "<td>";
      echo "<input readonly type=\"text\" value=\"".$row["id"]."\">";
      echo "</td>";
      echo "<td>";
      echo "<input readonly type=\"text\" value=\"".$row["name"]."\">";
      echo "</td>";
      echo "<td>";
      echo "<input readonly type=\"text\" value=\"".$row["surname"]."\">";
      echo "</td>";
      echo "<td>";
      echo "<input readonly type=\"text\" value=\"".$row["age"]."\">";
      echo "</td>";
      echo "</tr>";
    }
}echo "</table>";

?>
