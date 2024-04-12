<?php
$con = mysqli_connect("localhost", "id201800268", "pw201800268", "classDB") or die("MySQL 접속 실패!!");

$className = $_POST["class_name"];

$sql = "DELETE FROM class WHERE class_name='".$className."'";

$ret = mysqli_query($con, $sql);

echo "<H1>수업 삭제</H1>";
if($ret) {
echo $className."의 정보가 성공적으로 삭제되었습니다.";
}
else {
echo "실패하였습니다."."<BR>";
echo "실패 원인 :".mysqli_error($con);
}
mysqli_close($con);

echo "<BR><BR> <A HREF='main.html'>메인 화면</A> ";
?>