
<h1><a href="?module=Themuon&action=loadThemuon&id=<?php echo $student['id'] ?>">Đăng ký mượn sách</a></h1>
<a href="?module=Students&index">Trở về trang danh sách</a>
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
           </tr>  

            <?php $i=1; foreach ($themuons as $themuon): ?>
            <tr>
                <td><?php echo $i;?></td>
                <td>Tên sách đã mượn</td>
  	            <td><?php echo $themuon['sohieusach'] ?></td>
  	            <td><?php echo $themuon['ngaymuon'] ?></td>
  	            <td><?php echo $themuon['hantra'] ?></td>
            </tr>   
             <?php $i++; endforeach; ?>
   </table> 