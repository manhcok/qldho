<?php 
     require ('connect.php');
     $sql = "SELECT * FROM admin";
     $query = mysqli_query($con,"SELECT * FROM tbl_sanpham");

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
        <img src="../images/dh5.PNG">
        

    </div >
    <div class="list-Porsche" style="width: 800px;
    border: 1px solid #ccc">
         <h3>  chi tiết san pham</h3>
         <table width="800px" border="1" cellpadding="0" cellpadding="0">
            <tr>
                
                <td>id_sanpham</td>
                <!-- <td> nh</td> -->
                <td>tensp</td>
                <td>ngaysx</td>
                
                
                



            </tr>
            <tbody>
            <?php 

            foreach ($query as $key => $value) {

                echo "<tr>";
                echo " <td>".$value['id_sp']."</td>";
              /*  echo " <td>".$value['id_nh']."</td>";*/
                echo " <td>".$value['tensp']."</td>";
                echo " <td>".$value['ngaysx']."</td>";
               /* echo " <td>".$value[' anhsp']."</td>";*/
                
               
                /*echo"<td>  <a href =''>Sửa</a>&nbsp </td>";*/
            }

            ?>

        </tbody>
            

         </table>


    
    </div>

 </body>
 </html>