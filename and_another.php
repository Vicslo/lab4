<?php



$a=-1;

if(isset($_POST["json"])){
    $a = $_POST["json"];
}
$arr = json_decode(stripslashes($a), true);
$sql = "update lab2.guys2 set name='".$arr["name"]."', surname='".$arr["surname"]."', age='".$arr["age"]."' where id='".$arr["id"]."'";
$conn = new mysqli("localhost", "root", "", "lab2");
$conn->query($sql);


?>
