 <?php 
    $sql="SELECT *FROM tbl_sanpham";
    $result=mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result);
 ?>
<div class="right__content">
    <div class="right__title">Sản phẩm</div>
    <div class="right__table">
        <div class="right__tableWrapper">
            <table>
                <?php if ($row>0)
                    {
                 ?>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh</th>
                        <th>Thời gian</th>
                        <th>Sửa</th>
                        <th>Xoá</th>
                    </tr>
                </thead>
        
                <tbody>
                    <?php 
                    $stt=0;
                        while ($arr=mysqli_fetch_array($result)) {
                     ?>
                    <tr>
                        <td data-label="STT"><?php echo $stt+=1; ?></td>
                        <td data-label="Tên sản phẩm"><?php echo $arr['tensp'];?></td>
                         <td data-label="Hình ảnh" style="text-align: center;"><img style="width: 50px;height: 50px; border-radius: 100%; object-fit: cover;" src="../images/<?php echo $arr['img']; ?>" alt=""></td>
                        <td data-label="Thời gian"><?php echo $arr['ngaysx']; ?></td>

                        <td data-label="Sửa" class="right__iconTable"><a href="index.php?page=update_product&id=<?php echo $arr['id_sp']; ?>"><img src="assets/icon-edit.svg" alt=""></a></td>
                        <td data-label="Xoá" class="right__iconTable"><a href="index.php?page=delete_product&id=<?php echo $arr['id_sp']; ?>"><img src="assets/icon-trash-black.svg" alt=""></a></td>
                    </tr>
                    <?php  } ?>
                </tbody>
            <?php } 
            else
                header("Location:index.php?page=404");?>
            </table>
        </div>
    </div>
</div>