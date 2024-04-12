<?php
$con = mysqli_connect("localhost", "id201800268", "pw201800268", "classDB") or die("MySQL 접속 실패!!");

$custID = $_POST["cust_id"];
$custName = $_POST["cust_name"];
$custAge = $_POST["cust_age"];
$mDate = date("Y-m-j");

$sql =" INSERT INTO customer VALUES ('".$custID."','".$custName."',".$custAge.",'".$mDate."')";

$ret = mysqli_query($con, $sql);

echo "<H1>신규 회원 입력</H1>";
if($ret) {
echo $custID. "의 관한 정보가 성공적으로 입력되었습니다.";
}
else {
echo "실패하였습니다."."<BR>";
echo "실패 원인 :".mysqli_error($con);
}
mysqli_close($con);
echo "<BR> <A HREF='main.html'>메인 화면</A> ";
?>