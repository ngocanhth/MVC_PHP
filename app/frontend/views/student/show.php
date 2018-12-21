
<h3><a href="?module=Themuon&action=loadThemuon&id=<?php echo $student['id'] ?>">Đăng ký mượn sách</a></h3>

<table class="table table-hover">

            <tr>
        
               <th>Họ Tên</th>
               <th>Năm sinh</th>
               <th>Tuổi</th>
               <th>Lớp</th>
               <th>Tên sách đã mượn</th>
               <th>Số hiệu sách</th>
               <th>Ngày mượn</th>
               <th>Hạn trả</th>
           </tr>                 
            <tr>
            
                <td><?php echo $student['name'] ?></td>
                <td><?php echo $student['years'] ?></td>
                <td><?php echo $student['yearold'] ?></td>
                <td><?php echo $student['class'] ?></td>
                <td>Tên sách đã mượn</td>
	            <td>Số hiệu sách</td>
	            <td>Ngày mượn</td>
	            <td>Hạn trả</td>
            </tr>   
   </table> 