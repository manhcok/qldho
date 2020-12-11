<?php 
	$query = mysqli_query($con,"SELECT *FROM tbl_sanpham");

 ?>
	<div class="content" style="text-align: center;" >
		<ul class="class6" >
			<?php 
				while($arr = mysqli_fetch_array($query))
				{
			 ?>
			<li><a href="dong.php"><img src="../images/<?php echo $arr['img']; ?>" />
	    			</br>
	    			<h3><?php echo $arr['tensp']; ?></h3>
	    			<?php echo number_format($arr['gia'])."VND"; ?></a>
	    			<br>
	    			<a href="index.php?page=order&id=<?php echo $arr['id_sp']; ?>" style="background-color: red;width:50px; color: white;height: 90px;">Mua</a>
	    		</li>

	    			<?php } ?>
		</ul>
	</div>


	<div style="text-align: center;" >
		<ul class="class6">
			
		</ul>
	</div>

	
	<div class="container-fluid" >
			<img src="../images/sanphamnoibat.jpg" style="width: 100%; position: relative;">
	</div>
	<?php 
	$query = mysqli_query($con,"SELECT *FROM tbl_sanpham");

 ?>
	<div class="content_hot" style="text-align: center;" >
		<ul class="class6" >
			<?php 
				while($arr = mysqli_fetch_array($query))
				{
			 ?>
			<li><a href="dong.php"><img src="../images/<?php echo $arr['img']; ?>" />
	    			</br>
	    			<h3><?php echo $arr['tensp']; ?></h3>
	    			<?php echo number_format($arr['gia'])."VND"; ?></a></li>
	    			<?php } ?>
		</ul>
	</div>