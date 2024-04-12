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
<h2 class="h3 mb-3 fw-normal">추가하실 교사에 대한 정보를 입력해주세요.</h2>
<FORM METHOD="post" ACTION="teacher_insert_result.php">
 <input type="text" NAME="teacher_id" class="form-control" placeholder="ID" style="width:300px" style="height:100px">
<br>
 <input type="text" NAME="teacher_name" class="form-control" placeholder="NAME" style="width:300px" style="height:100px">
<br>
  <input type="text" NAME="teacher_age" class="form-control" placeholder="AGE" style="width:300px" style="height:100px">
<br>
  <input type="text" NAME="entry_year" class="form-control" placeholder="ENTRY YEAR" style="width:300px" style="height:100px">
<br>

<BR><BR>
<INPUT TYPE="submit" class="btn btn-outline-dark" value="등록"></button>
</FORM>
</div>

</BODY>
</HTML>