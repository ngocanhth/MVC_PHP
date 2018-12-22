
<h1><a href="?module=Students&action=loadThemuon&id=<?php echo $student['id'] ?>">Đăng ký mượn sách</a></h1>
<h3><a href="?module=Students&action=showAllinfor">Xem toàn bộ thông tin mượn sách</a></h3>
<a href="?module=Students&index">Trở về trang danh sách sinh viên</a>
<h2>Thông tin mượn sách của sinh viên</h2>
  <h3><?php echo "Họ tên: ".$student['name'] ?></h3>
  <h3><?php echo "Năm sinh: ".$student['years'] ?></h3>
  <h3><?php echo "Tuổi: ".$student['yearold'] ?></h3>
  <h3><?php echo "Lớp: ".$student['class'] ?></h3>


<table class="table table-hover">
            <tr>
               <th>STT</th>
               <th>Tên sách đã mượn</th>
               <th>Số hiệu sách</th>
               <th>Ngày mượn</th>
               <th>Hạn trả</th>
               <th>Thực hiện trả sách</th>
           </tr>  

            <?php $i=1; foreach ($themuons as $themuon): ?>
            <tr>
                <td><?php echo $i;?></td>
                <td>Tên sách đã mượn</td>
  	            <td><?php echo $themuon['sohieusach'] ?></td>
  	            <td><?php echo $themuon['ngaymuon'] ?></td>
                <td><?php echo $themuon['hantra'] ?></td>
  	            <td>
                  <a href="?module=Students&action=deleBook&id=<?php echo $student['id'] ?>">
                    Trả sách
                  </a>
                </td>
            </tr>   
             <?php $i++; endforeach; ?>
   </table> 