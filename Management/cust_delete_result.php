<?php
$con = mysqli_connect("localhost", "id201800268", "pw201800268", "classDB") or die("MySQL 접속 실패!!");

$custID = $_POST["cust_id"];

$sql = "DELETE FROM customer WHERE cust_id='".$custID."'";

$ret = mysqli_query($con, $sql);

echo "<H1>회원 삭제</H1>";
if($ret) {
echo $custID."의 정보가 성공적으로 삭제되었습니다.";
}
else {
echo "실패하였습니다."."<BR>";
echo "실패 원인 :".mysqli_error($con);
}
mysqli_close($con);

echo "<BR><BR> <A HREF='main.html'>메인 화면</A> ";
?>

