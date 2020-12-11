<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="../css/Test.css">
	<title>sanpham</title>
	<link rel="stylesheet" href="">
	<style >
		p img{
			border:1px solid white;
		}
		p img:hover{

			border:1px solid red;
			cursor: pointer;
		}
		/*.right {
			display: flex;
		}*/






	</style>
</head>
<body>
	<div style="display: flex;">
		<div>
			<img src="../images/dh8.PNG" width="300px" id="main-img"   />


		<div class="button">
		<p><a href="" style="padding-right: 20px;">30.000.000đ</a></p>
		<button style="width: 60px " >Mua</button>
    	</div>
		<p>
			<img src="../images/dh7.PNG" width="150px"   />
			<img src="../images/dh6.PNG" width="150px"  />
			<img src="../images/dh8.PNG" width="150px"   />
			<img src="../images/dh5.PNG" width="150px"    />
		</p>
		</div>
		<div style="padding-left: 100px; padding-top: 100px;" >
			<h2>Chi tiết sản phẩm</h2>
			
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
	<script>
		$( () => {
			$('p img').click(function(){
				let imgPath = $(this).attr('src');
				$('#main-img').attr('src', imgPath);
		    })
			})
		
	</script>
	
</body>
</html>
