<h1>Danh sách sinh viên</h1>
<h3><a href="?module=Students&action=addData">Thêm mới sinh viên</a></h3>
<div class="list-students">
   <table class="table table-hover">

            <tr>
               <th>STT</th>
               <th>Họ Tên</th>
               <th>Năm sinh</th>
               <th>Tuổi</th>
               <th>Lớp</th>
               <th>Hành động</th>
           </tr>
         
            <?php $i=1; foreach ($students as $student): ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $student['name'] ?></td>
                    <td><?php echo $student['years'] ?></td>
                    <td><?php echo $student['yearold'] ?></td>
                    <td><?php echo $student['class'] ?></td>
                    <td>
                        <a class="edit fas fa-info-circle text-info" href="?module=Students&action=showDetail&id=<?php echo $student['id'] ?>">Xem chi tiết</a>
                        <a class="edit fas fa-edit text-warning" href="?module=Students&action=editStudent&id=<?php echo $student['id'] ?>">Sửa</a>
                        <a class="edit far fa-times-circl text-danger" href="?module=Students&action=delete&id=<?php echo $student['id'] ?>">Xóa</a>
                    </td>
                </tr>
            <?php $i++; endforeach; ?>
     
   </table>


</div>