<HTML>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
	
<style>
.center {
 position: absolute;
 left: 38%;
 top: 12%;
}
</style>
</HEAD>
<BODY>
<div class="center">
<img class="mb-4" src="book.svg" alt="" width="300" height="300">
<H1>수능올림픽</H1>
<h2 class="h3 mb-3 fw-normal">등록하실 정보를 입력해주세요.</h2>
<FORM METHOD="post" ACTION="class_insert_result.php">
 <input type="text" NAME="class_name" class="form-control" placeholder="CLASS NAME" style="width:300px" style="height:100px">
<br>
 <input type="text" NAME="class_sub" class="form-control" placeholder="CLASS SUB" style="width:300px" style="height:100px">
<br>
  <input type="text" NAME="class_week" class="form-control" placeholder="CLASS WEEK" style="width:300px" style="height:100px">
<br>
  <input type="time" NAME="class_stime" class="form-control" style="width:300px" style="height:100px">
<br>
  <input type="time" NAME="class_etime" class="form-control" style="width:300px" style="height:100px">
<br>
  <input type="text" NAME="teacher_id" class="form-control" placeholder="TEACHER" style="width:300px" style="height:100px">
<br>

<BR><BR>
<INPUT TYPE="submit" class="btn btn-outline-dark" value="등록"></button>
</FORM>
</div>

</BODY>
</HTML>
