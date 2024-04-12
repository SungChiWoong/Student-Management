<?php
$con = mysqli_connect("localhost", "id201800268", "pw201800268", "classDB") or die("MySQL 접속 실패!!");

$teacherID = $_POST["teacher_id"];
$teacherName = $_POST["teacher_name"];
$teacherAge = $_POST["teacher_age"];
$entryYear = $_POST["entry_year"];

$sql =" INSERT INTO teacher VALUES ('".$teacherID."','".$teacherName."','".$teacherAge."','".$entryYear."')";

$ret = mysqli_query($con, $sql);

echo "<H1>교사 입력</H1>";
if($ret) {
echo $teacherID. "의 정보가 입력되었습니다.";
}
else {
echo "실패하였습니다."."<BR>";
echo "실패 원인 :".mysqli_error($con);
}
mysqli_close($con);
echo "<BR> <A HREF='main.html'>메인 화면</A> ";
?>