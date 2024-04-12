<?php
$con = mysqli_connect("localhost", "id201800268", "pw201800268", "classDB") or die("MySQL 접속 실패!!");
$sql = "SELECT * FROM class WHERE class_name='".$_GET['class_name']."'";
$ret = mysqli_query($con, $sql);
if($ret) {
$count = mysqli_num_rows($ret);
if($count==0) {
echo $_GET['class_name']."라는 이름의 수업이 존재하지 않습니다."."<BR>";
echo "<BR> <A HREF='main.html'> 메인 화면</A> ";
exit();
}
}
else {
echo "실패하였습니다."."<BR>";
echo "실패 원인 :".mysqli_error($con);
echo "<BR> <A HREF='main.html'> 메인 화면</A> ";
exit();
}

$row = mysqli_fetch_array($ret);
$className = $row['class_name'];
$classSub = $row['class_sub'];
$classWeek = $row['class_week'];
$classStime = $row['class_stime'];
$classEtime = $row['class_etime'];
$teacherID = $row['teacher_id'];
?>

<HTML>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
<style>
@import url(//fonts.googleapis.com/earlyaccess/hanna.css);
.center {
 position: absolute;
 left: 38%;
 top: 12%;
}
h1 {
font-family : 'Hanna', sans-serif;
}
</style>
</HEAD>
<BODY>

<div class="center">
<img class="mb-4" src="book.svg" alt="" width="300" height="300">
<H1>수업 정보 수정</H1>
<FORM METHOD="post" ACTION="class_update_result.php">
<input type="text" NAME="class_name" class="form-control" placeholder="NAME" style="width:300px" style="height:100px" value=<?php echo $className ?> READONLY><br>
<input type="text" NAME="class_sub" class="form-control" placeholder="SUB" style="width:300px" style="height:100px" value=<?php echo $classSub ?>><br>
<input type="text" NAME="class_week" class="form-control" placeholder="WEEK" style="width:300px" style="height:100px" value=<?php echo $classWeek ?>><br>
<input type="time" NAME="class_stime" class="form-control" style="width:300px" style="height:100px" value=<?php echo $classStime ?>><br>
<input type="time" NAME="class_etime" class="form-control" style="width:300px" style="height:100px" value=<?php echo $classEtime ?>><br>
<input type="text" NAME="teacher_id" class="form-control" placeholder="TEACHER ID" style="width:300px" style="height:100px" value=<?php echo $teacherID ?>><br><BR>
<INPUT TYPE="submit" class="btn btn-outline-dark" value="수정"></button>
</FORM>
</div>

</BODY>
</HTML>
