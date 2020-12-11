<div class="right__content">
    <div class="right__title">Thêm admin</div>
    <div class="right__formWrapper">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="right__inputWrapper">
                <label for="name">Tên admin</label>
                <input type="text" placeholder="Tên admin" name="name">
            </div>
            <div class="right__inputWrapper">
                <label for="email">Phone</label>
                <input type="number" placeholder="Số điện thoại" name="phone">
            </div>
            <div class="right__inputWrapper">
                <label for="password">Địa chỉ</label>
                <input type="text" placeholder="Mật khẩu" name="address">
            </div> 
            <div class="right__inputWrapper">
                <label for="password">Ngày sinh</label>
                <input type="date" name="date">
            </div> 
            <div class="right__inputWrapper">
                <label for="password">Username</label>
                <input type="text" placeholder="Tên đăng nhập" name="username">
            </div> 
            <div class="right__inputWrapper">
                <label for="password">Mật khẩu</label>
                <input type="password" placeholder="Mật khẩu" name = "pass">
            </div>
            <div class="right__inputWrapper">
                <label for="image">Hình ảnh</label>
                <input type="file" name="img">
            </div>
            <button class="btn" type="submit" name = "submit">Thêm</button>
        </form>
    </div>
</div>
<?php 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    //$img = $_POST['img'];
    $upload_image="../img/admin/";
        $file_tmp= isset($_FILES['img']['tmp_name']) ?$_FILES['img']['tmp_name'] :"";
        print_r($file_tmp);
        $file_name=isset($_FILES['img']['name']) ?$_FILES['img']['name'] :"";
        $file_type=isset($_FILES['img']['type']) ?$_FILES['img']['type'] :"";
        $file_size=isset($_FILES['img']['size']) ?$_FILES['img']['size'] :"";
        $file_error=isset($_FILES['img']['error']) ?$_FILES['img']['error'] :"";
        $file__name__=$file_name;
        move_uploaded_file($file_tmp,$upload_image.$file__name__);

    $date = $_POST['date'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];
   $sql = "INSERT INTO admin(name,phone,address,date, username,pass,stt,img)VALUES('$name',' $phone','$address','$date',' $username','$pass',0,' $file__name__')";
   $result=mysqli_query($conn,$sql);

}
else
{
    header("Location:views/404.php");
}
 ?>