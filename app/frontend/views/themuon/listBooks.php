<h3>Thông tin sinh viên</h3>

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
           <?php $i=1; foreach ($themuons as $themuon): ?>              
            <tr>
            
                <td>Họ Tên</td>
                <td>Năm sinh</td>
                <td>Tuổi</td>
                <td>Lớp</td>
                <td>Tên sách đã mượn</td>
                <td><?php echo $themuon['sohieusach'] ?></td>
                <td><?php echo $themuon['ngaymuon'] ?></td>
                <td><?php echo $themuon['hantra'] ?></td>
            </tr>  
              <?php $i++; endforeach; ?> 
   </table> 