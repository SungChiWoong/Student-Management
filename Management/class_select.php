<HTML>
<link href="https://fonts.googleapis.com/css?family=East+Sea+Dokdo:400" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Gugi:400" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Jua:400" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<HEAD>
	<META http-equiv="content-type" content="text/html; charset=utf-8">
<style>
@import url(//fonts.googleapis.com/earlyaccess/nanumpenscript.css);
.center {
 position: absolute;
 left: 38%;
 top: 5%;
}
.b_center{
 position: absolute;
 left: 38%;
 top: 100%;
 button-size=100px;
}
.a_center{
 position: absolute;
 left: 34.5%;
 top: 109%;
 button-size=100px;
}
body {
  font-family : 'Jua';
  font-size : 20px;
}
h1{
  font-family : 'Gugi';
}
h2{
  font-family : 'East Sea Dokdo';
  font-size : 270px;
}
</style>
</HEAD>
<BODY class="center">



<?php
	$con = mysqli_connect("localhost", "id201800268", "pw201800268", "classDB") or die("MySQL 접속 실패!!");

	$sql = "SELECT * FROM class";
 
	$ret = mysqli_query($con, $sql);
	if($ret) { 
	$count = mysqli_num_rows($ret);
	} 
	else { 
		echo "수업테이블에서 데이터 검색에 실패하였습니다"."<br>";
		echo "실패 원인 :".mysqli_error($con);
		exit();
	}
	echo "<H2>수 능</H2>";
 	echo "<img class='mb-4' src='book.svg' width=360 height=300> <br> <br>";
	echo "<H1>수업</H1>";
	echo "<TABLE BORDER=1>";
	echo "<TR>";
	echo "<TH>수업이름</TH> <TH>과목</TH> <TH>요일</TH> <TH>시작시간</TH> <TH>종료시간</TH> <TH>담당선생님</TH>";
	echo "</TR>";
	while($row = mysqli_fetch_array($ret)) {
		echo "<TR>";
		echo "<TD>", $row['class_name'], "</TD>";
		echo "<TD>", $row['class_sub'], "</TD>";
		echo "<TD>", $row['class_week'], "</TD>";
		echo "<TD>", $row['class_stime'], "</TD>";
		echo "<TD>", $row['class_etime'], "</TD>";
		echo "<TD>", $row['teacher_id'], "</TD>";
		echo "<TD>", "<A HREF='class_cust_search.php?class_name=", $row['class_name'], "'>학생 조회</A></TD>";
		echo "<TD>", "<A HREF='class_update.php?class_name=", $row['class_name'], "'>수정</A></TD>";
		echo "<TD>", "<A HREF='class_delete.php?class_name=", $row['class_name'], "'>삭제</A></TD>";
		echo "</TR>";
	}
 
	mysqli_close($con);
	echo "</TABLE><br>";
	echo "<FORM METHOD='get' ACTION='class_group_sub.php'>";
	echo "<div class='input-group mb-3'>";
  	echo "<input type='text' NAME='sub_name' class='form-control' placeholder='과목명' aria-label='Recipient's username' aria-describedby='button-addon2'>";
	echo "<button class='btn btn-outline-secondary' type='submit' id='button-addon2'>과목별 수업 조회</button>";
	echo "</div>";
	echo "</FORM>";
	echo "<BR> <a href='main.html' class='btn btn-outline-dark' role='button' data-bs-toggle='button'>메인 화면</a>";
?>
</BODY> 
</HTML>
