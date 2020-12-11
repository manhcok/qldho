		<div class="login" style="margin:0px auto">
			
				
				<form method="POST" >
					<fieldset class="form-group" style="width: 500px; height: 300px; border:1px solid grey; border-radius: 10px; text-align: center">
						<!-- <label for="exampleInputEmail1">User name</label> -->
						<h2 style="color: #868787; font-family: sans-serif; padding-top: 50px">  Đăng nhập thông tin</h2>
						<input type="text" name="txtname" placeholder="username" style="width: 200px;height: 40px;margin-bottom: 10px" placeholder="Tên đăng nhập">
					
				
						<!-- <label for="exampleInputPassword1">Password</label> -->

						<input type="password " placeholder="password" name ="pass" style="width: 200px; height: 40px;margin-bottom: 10px;" class="form-control" >
					
					<button type="submit" name="submit"  class="btn " style="width: 200px; height: 40px;margin-bottom: 10px" >Đăng nhập</button>
					</fieldset>
				</form>
				<?php 
					if(isset($_POST['submit']))
					{
						$name = $_POST["txtname"];
						$pass = $_POST["pass"];
						$rows = mysqli_query($conn,"SELECT*FROM admin WHERE tendangnhap='$name' AND MatKhau='$pass'");
						$arr = mysqli_fetch_array($rows);
						$count = mysqli_num_rows($rows);
						if($count==1)
						{
							$_SESSION['img'] = $arr['img'];
							$_SESSION['name'] = $name;
							echo "<script>alert('đăng nhập thành công');</script>";
							header('location:index.php?page=home');
						}
						else
						{
							echo "<script>alert('đăng nhập mật khẩu sai');</script>";
						}
					}
				 ?>
		</div>
