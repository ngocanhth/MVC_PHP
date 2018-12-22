<h3><?php echo $tittle ?></h3>


<div class="sign-up">
	<form action="?module=Students&action=addThemuon" method="post">
		<input type="hidden" name="id_student" value="<?php echo $id_student; ?>">
	  <div class="form-group">
	    <label for="sophieu">Số phiếu mượn</label>
	    <input type="text" name="sophieu" class="form-control" id="sophieu" aria-describedby="sophieu" placeholder="Nhập số phiếu" required>
	  </div>
	  <div class="form-group">
	    <label for="ngaymuon">Ngày mượn</label>
	    <input type="date" name="ngaymuon" class="form-control" id="ngaymuon" aria-describedby="ngaymuon" placeholder="Nhập ngày mượn" required>
	  </div>
	  <div class="form-group">
	    <label for="hantra">Hạn trả</label>
	    <input type="date" name="hantra" class="form-control" id="hantra" aria-describedby="hantra" placeholder="Nhập hạn trả" required>
	  </div>
	  <div class="form-group">
	    <label for="sohieusach">Số hiệu sách</label>
	    <input type="text" name="sohieu" class="form-control" id="sohieusach" aria-describedby="sohieusach" placeholder="Nhập số hiệu sách" required>
	  </div>
	  <div class="form-group">
	  	<button type="submit" name="addnewThemuon" class="btn btn-primary">Đăng ký mượn sách</button>
	  </div>
	</form>
</div>