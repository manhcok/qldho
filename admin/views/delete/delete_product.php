<?php 
	if(isset($_GET['id']))
	{
		$id = (int) $_GET['id'];
		$sql = mysqli_query($conn,"DELETE FROM tbl_sanpham WHERE id_sp=$id");		
		if(!$sql)
		{
			echo "<script>alert('K có thông tin sản phẩm cần xoá');</script>";
		}
		else
		{
			echo "<script>alert('Xoá sản phẩm thành công');</script>";
			header('Location:index.php?page=view_product');
		}
	}
	else
	{
		header('Location:index.php?page=404');
	}
 ?>