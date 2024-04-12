<?php
$con = mysqli_connect("localhost", "id201800268", "pw201800268", "classDB") or die("MySQL 접속 실패!!");

$className = $_POST["class_name"];
$classSub = $_POST["class_sub"];
$classWeek = $_POST["class_week"];
$classStime = $_POST["class_stime"];
$classEtime = $_POST["class_etime"];
$teacherID = $_POST["teacher_id"];
$sql =" INSERT INTO class VALUES ('".$className."','".$classSub."','".$classWeek."','".$classStime."','".$classEtime."','".$teacherID."')";

$ret = mysqli_query($con, $sql);

echo "<H1>수업 입력</H1>";
if($ret) {
echo $className. "의 관한 정보가 입력되었습니다.";
}
else {
echo "실패하였습니다."."<BR>";
echo "실패 원인 :".mysqli_error($con);
}
mysqli_close($con);
echo "<BR> <A HREF='main.html'>메인 화면</A> ";
?>