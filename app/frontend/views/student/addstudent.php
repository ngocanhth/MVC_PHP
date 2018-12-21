<h3><?php echo $tittle ?></h3>
<?php
// if(isset($_POST['signup'])){
// 	 	$name = $_POST['name'];
//         $password = md5($_POST['password']);
//         $yearsbirth = $_POST['birthyears'];
//         $age = $_POST['age'];
//         $_class = $_POST['_class'];
      
//        $post=array(
//           'name'      => $name,
//           'password'  => $password,
//           'years'     => $yearsbirth,
//           'yearold'   => $age,
//           'class'     => $_class
//        ); 
//        var_dump($post);die();
//       $student = new Students_Controller();
//       $student -> addStuden($post);
//       var_dump($student -> addStuden($post)); die();
// 	}
?>
<div class="sign-up">
	<form action="?module=Students&action=addStuden" method="post">
	  <div class="form-group">
	    <label for="name">Họ Tên</label>
	    <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Nhập họ tên" required>
	  </div>
	  <div class="form-group">
	    <label for="birthyears">Năm sinh</label>
	    <input type="text" name="birthyears" class="form-control" id="birthyears" aria-describedby="birthyears" placeholder="Nhập năm sinh" required>
	  </div>
	  <div class="form-group">
	    <label for="age">Tuổi</label>
	    <input type="number" name="age" class="form-control" id="age" aria-describedby="age" placeholder="Nhập tuổi" required>
	  </div>
	  <div class="form-group">
	    <label for="_class">Lớp</label>
	    <input type="text" name="_class" class="form-control" id="_class" aria-describedby="_class" placeholder="Nhập lớp" required>
	  </div>

	  <div class="form-group">
	    <label for="password">Password</label>
	    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
	  </div>
	  <div class="form-group">
	  	<button type="submit" name="signup" class="btn btn-primary">Đăng ký</button>
	  </div>
	</form>
</div>