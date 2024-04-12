<?php
$con = mysqli_connect("localhost", "id201800268", "pw201800268", "classDB") or die("MySQL 접속 실패!!");
$sql = "DELETE FROM registration WHERE cust_id='".$_GET['cust_id']."' AND class_name='".$_GET['class_name']."'";
$ret = mysqli_query($con, $sql);

echo "<H1>수업 신청 삭제</H1>";
if($ret) {
echo "삭제되었습니다.";
}
else {
echo "실패하였습니다."."<BR>";
echo "실패 원인 :".mysqli_error($con);
}
mysqli_close($con);
echo "<BR> <A HREF='main.html'>메인 화면</A> ";
?>