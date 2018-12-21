<h3>Sửa danh sách sinh viên</h3>
<div class="sign-up">
	<form action="?module=Students&action=updateStudent&id=<?php echo $student['id']; ?>" method="post">
	  <div class="form-group">
	    <label for="name">Họ Tên</label>
	    <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="<?php echo $student['name'] ?>" required>
	  </div>
	  <div class="form-group">
	    <label for="birthyears">Năm sinh</label>
	    <input type="text" name="birthyears" class="form-control" id="birthyears" aria-describedby="birthyears" placeholder="<?php echo $student['years'] ?>" required>
	  </div>
	  <div class="form-group">
	    <label for="age">Tuổi</label>
	    <input type="number" name="age" class="form-control" id="age" aria-describedby="age" placeholder="<?php echo $student['yearold'] ?>" required>
	  </div>
	  <div class="form-group">
	    <label for="_class">Lớp</label>
	    <input type="text" name="_class" class="form-control" id="_class" aria-describedby="_class" placeholder="<?php echo $student['class'] ?>" required>
	  </div>
	  <div class="form-group">
	  	<button type="submit" name="updateinfor" class="btn btn-primary">Update</button>
	  </div>
	</form>
</div>