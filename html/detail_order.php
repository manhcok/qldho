<?php 
$count = count($_SESSION['cart']); 
if ($count > 0)
{
	?>
	<h3 class="title">
		Shopping Cart
	</h3>
	<div id = "detail_order"class="table-responsive|table-responsive-sm|table-responsive-md|table-responsive-lg|table-responsive-xl">
		<form action="index.php?page=update_cart" method="POST" name="frm_update_cart">
			<table class="table table-striped|table-dark|table-bordered|table-borderless|table-hover|table-sm">
				<caption>List of users</caption>
				<thead class="thead-dark|thead-light">
					<tr>
						<th scope="col">STT</th>
						<th scope="col">Image</th>
						<th scope="col">Dtails</th>
						<th scope="col">Price</th>
						<th scope="col">Quantity</th>
						<th scope="col">Sum Price</th>
						<th scope="col">Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php  
					$_SESSION['total_price'] = 0;
					$stt=0;
					foreach ($_SESSION['cart'] as $id => $pro) {
						?>
						<tr>
							<td><?php echo $stt+=1; ?></td>
							<td><img style="width: 200px;"src="../images/<?php echo $pro['img']; ?>" alt=""></td>
							<td style="margin: auto"><?php echo $pro['tensp']; ?></td>
							<td ><?php echo $pro['gia']; ?></td>
							<td><input name="<?php echo $pro['id_product']; ?>" type="number" min="1" max="<?php echo $pro['quantity']; ?>" 
								value="<?php echo $pro['qty'];?>" /></td>
							<td><h5>
								<strong class="red">
									<?php  
									$sum_price = $pro['gia'] * $pro['qty'];
									$_SESSION['total_price'] += $sum_price;
									echo number_format($sum_price);
									?>
								</strong>
							</h5></td>
							<td>
								<a style="text-align: center;color: red;"onclick="return confirm('Bạn có muốn xóa sản phẩm này khỏi giỏ hàng không? ');" href="index.php?page=delete&id=<?php echo $pro['id_sp']; ?>">
									<img src="../images/1175088.png"style="width: 30px;" alt="">
								</a>
							</td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
			<div class="container">	
			<div class="row">
				<div class="continue_shopping"><input name="shopping" style="background: #67D985;" type="submit"value="Mua sắm"></div>
				<!-- <div class="update_cart"><input type="submit" name="submit_cart" value="Cập nhật"></div> -->
			</div>
		</div>	
		</form>
<!-- 		<div class="col-md-3 col-sm-6" style="float: right">
			<hr>
			<h5>
				Tổng tiền 
			</h5>
			<span style="font-size: 20px !important;">
				<?php echo number_format($_SESSION['total_price']).' đ'; ?>
			</span>
		</div> -->
	</div>
	<div class="row">
				<div class="col-md-8 col-sm-6">
					<div class="shippingbox">
						
						<form action="index.php?page=orders" method="POST" role="form">
							<legend style="color: red; font-size: 20px;">ĐẶT HÀNG</legend>
							<hr>
							<div class="form-group">
								<label for="name">Họ tên khách hàng</label>
								<input type="text" required="" name="name" class="form-control" id="name" placeholder="Họ tên...">
							</div>

							<div class="form-group">
								<label for="phone">Số điện thoại</label>
								<input type="number" required="" name="phone" class="form-control" id="phone">
							</div>

							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" class="form-control" id="email" placeholder="Email...">
							</div>

							<div class="form-group">
								<label for="addres">Địa chỉ giao hàng</label>
								<input type="text" name="address" class="form-control" id="addres">
							</div>

							<div class="form-group">
								<label for="note">Ghi chú đơn hàng</label>
								<textarea class="form-control" name="note" id="note" cols="30" rows="5"></textarea>
							</div>
						
							<button type="submit" name="order_ex" class="btn btn-primary">
								Đặt hàng
							</button>
						</form>
						
					</div>
				</div>
					
				<div class="col-md-4 col-sm-6">
					<div class="shippingbox">
						<div class="grandtotal">
							<hr>
							<h5>
								Tổng tiền 
							</h5>
							<span style="font-size: 20px !important;">
								<?php echo number_format($_SESSION['total_price']).' đ'; ?>
							</span>
						</div>
					</div>
				</div>
			</div>
	<?php

}

else{
	echo "<script>
		window.location.href = 'index.php';</script>";
}
?>