<h2>Thông tin sinh viên</h2>

<table class="table table-hover">
            <tr>
               <th>Tên sách đã mượn</th>
               <th>Số hiệu sách</th>
               <th>Ngày mượn</th>
               <th>Hạn trả</th>
           </tr>
 <?php $i=1; foreach ($students as $student): ?> 
     
          <tr>
            <td colspan="4">
              <span> Họ tên: <?php echo $student['name'] ?>  </span>
              <span> Năm sinh: <?php echo $student['years'] ?>  </span>
              <span> Tuổi: <?php echo $student['yearold'] ?></span>
              <span> Lớp: <?php echo $student['class'] ?></span>
              <span> 
                <a href="?module=Students&action=showDetail&id=<?php echo $student['id'] ?>">Xem thông tin chi tiết</a>
              </span>
            </td>
          </tr>
 
         <?php $i=1; foreach ($themuons as $themuon): ?>              
            <tr>
                <td>Tên sách đã mượn</td>
                <td><?php echo $themuon['sohieusach'] ?></td>
                <td><?php echo $themuon['ngaymuon'] ?></td>
                <td><?php echo $themuon['hantra'] ?></td>
            </tr>  
              <?php $i++; endforeach; ?> 
    <?php $i++; endforeach; ?>   
   </table> 
