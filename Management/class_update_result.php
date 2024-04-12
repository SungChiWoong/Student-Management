<?php
$con = mysqli_connect("localhost", "id201800268", "pw201800268", "classDB") or die("MySQL 접속 실패!!");
$className = $_POST["class_name"];
$classSub = $_POST["class_sub"];
$classWeek = $_POST["class_week"];
$classStime = $_POST["class_stime"];
$classEtime = $_POST["class_etime"];
$teacherID = $_POST["teacher_id"];

$sql = "UPDATE class SET class_sub='".$classSub."', class_week='".$classWeek."', class_stime='".$classStime."', class_etime='".$classEtime."', teacher_id='".$teacherID."' WHERE class_name='".$className."'";

$ret = mysqli_query($con, $sql);

echo "<H1>수업 정보 수정</H1>";
if($ret) {
echo $className. "의 관한 정보가 성공적으로 수정되었습니다.";
}
else {
echo "실패하였습니다."."<BR>";
echo "실패 원인 :".mysqli_error($con);
}
mysqli_close($con);
echo "<BR> <A HREF='main.html'>메인 화면</A> ";
?>