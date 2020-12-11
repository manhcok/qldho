<?php 
     require ('connect.php');
     $sql = "SELECT * FROM admin";
     $query = mysqli_query($con,"SELECT * FROM admin");

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head> 
 	<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum=scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/dldh.css">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>ql dh</title>
   
 </head>
 <body>
    <div class="form-Porsche">
        <h3> Thông tin Admin </h3>
        <label > Id_Admin </label>
        <input type="text" id = "fullname" />
        <span id="fullname-error" class="error"></span>
        <br/>

        <label > name </label>
        <input type="text" id = "soluong" />
        <br/>
        
        <label > SoDienThoai </label>
        <input type="text" id = "mausac" />
        <br/>

        <label > DiaChi </label>
        <input type="text" id = "dongia" />
        <br/>
        
        <label > ngaydangnhap</label>
        <input type="text" id = "aa" />
        <br/>

        <label > tendangnhap</label>
        <input type="text" id = "aa" />
        <br/>

        <label > matkhau </label>
        <input type="text" id = "aa" />
        <br/>

        
        <label></label>
        
        <button onclick="save()"> Lưu Lại </button>
        

    </div >
    <div class="list-Porsche" style="width: 800px;
    border: 1px solid #ccc">
         <h3> Danh sách Admin </h3>
         <table width="800px" border="1" cellpadding="0" cellpadding="0">
            <tr>
                
                <td>id_Admin</td>
                <td> name</td>
                <td>SoDienThoai</td>
                <td>email</td>
                <td> DiaChi </td>
                <td>ngaydangnhap</td>
                <td>tendangnhap</td>
                <td>matkhau</td>
                



            </tr>
            <tbody>
            <?php 

            foreach ($query as $key => $value) {

                echo "<tr>";
                echo " <td>".$value['id']."</td>";
                echo " <td>".$value['name']."</td>";
                echo " <td>".$value['SoDienThoai']."</td>";
                echo " <td>".$value['Email']."</td>";
                echo " <td>".$value['DiaChi']."</td>";
                echo " <td>".$value['ngaydangnhap']."</td>";
                 echo " <td>".$value['tendangnhap']."</td>";
                  echo " <td>".$value['MatKhau']."</td>";
               
                /*echo"<td>  <a href =''>Sửa</a>&nbsp </td>";*/
            }

            ?>

        </tbody>
            

         </table>


    
    </div>

 </body>
 </html>