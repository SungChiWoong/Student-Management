<?php
$con = mysqli_connect("localhost", "id201800268", "pw201800268", "classDB") or die("MySQL 접속 실패!!");
$sql = "SELECT * FROM customer WHERE cust_id='".$_GET['cust_id']."'";
$ret = mysqli_query($con, $sql);
$row = mysqli_fetch_array($ret);
$custID = $row['cust_id'];
$custName = $row['cust_name'];
$sql = "SELECT * FROM class WHERE class_name='".$_GET['class_name']."'";
$ret = mysqli_query($con, $sql);
$row = mysqli_fetch_array($ret);
$className = $row['class_name'];
$mDate = date("Y-m-j");

$sql =" INSERT INTO registration VALUES ('".$custID."','".$className."','".$mDate."')";

$ret = mysqli_query($con, $sql);

echo "<H1>수업 등록</H1>";
if($ret) {
echo "등록되었습니다.";
}
else {
echo "실패하였습니다."."<BR>";
echo "실패 원인 :".mysqli_error($con);
}
$sql = "SELECT * FROM registration";
$ret = mysqli_query($con, $sql);
echo "<TH>학생ID</TH> <TH>수업이름</TH> <TH>등록시간</TH>";
	echo "</TR>";
	while($row = mysqli_fetch_array($ret)) {
		echo "<TR>";
		echo "<TD>", $row['cust_id'], "</TD>";
		echo "<TD>", $row['class_name'], "</TD>";
		echo "<TD>", $row['registration_day'], "</TD>";
		echo "</TR>";
	}

mysqli_close($con);
echo "<BR> <A HREF='main.html'>메인 화면</A> ";
?>