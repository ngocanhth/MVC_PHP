<h2>Thông tin sinh viên</h2>

<table class="table table-hover">
            <tr>
               <th>Tên sách đã mượn</th>
               <th>Số phiếu</th>
               <th>Ngày mượn</th>
               <th>Hạn trả</th>
               <th>Số hiệu sách</th>
           </tr>
 <?php $i=1; foreach ($themuons as $themuon): ?> 
     
          <tr>
            <td colspan="5">
              <span> Họ tên: <?php echo $themuon['name'] ?>  </span>
              <span> Năm sinh: <?php echo $themuon['years'] ?>  </span>
              <span> Tuổi: <?php echo $themuon['yearold'] ?></span>
              <span> Lớp: <?php echo $themuon['class'] ?></span>
              <span> 
                <a href="?module=Students&action=showDetail&id=<?php echo $themuon['id'] ?>">Xem thông tin chi tiết</a>
              </span>
            </td>
          </tr>
        <?php
          $themuons = explode(",", $themuon['themuon']);
          foreach ($themuons as $th_muuon) {
             list($sophieu, $ngaymuon, $hantra, $sohieusach) = explode(":", $th_muuon);
           ?>
                <tr>
                <td>Tên sách đã mượn</td>
                <td><?php echo $sophieu; ?></td>
                <td><?php echo $ngaymuon; ?></td>
                <td><?php echo $hantra; ?></td>
                <td><?php echo $sohieusach; ?></td>
            </tr> 
        <?php
          }
        ?>
    <?php $i++; endforeach; ?>   
   </table> 
