<?php 
	if (isset($_GET['id'])) {
		$id = (int)$_GET['id'];
		unset($_SESSION['cart'][$id]);
	}
	echo "<script>
		window.location.href = 'index.php?page=detail_order';</script>";

?>