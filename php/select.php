<?php  
require_once 'config.php';
 $output = '';  
 $sql = "SELECT * FROM fruit_survey ORDER BY id DESC";  
 $result = mysqli_query($link, $sql);  
 $output .= '  
      <div class="table-responsive">
        <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
                     <th width="20%">First Name</th>  
                     <th width="20%">Last Name</th>
                     <th width="20%">Favorite Fruit</th>
                     <th width="20%">Use for Fruit</th>  
                     <th width="10%">Delete</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="first_name" data-id1="'.$row["id"].'" contenteditable>'.$row["first_name"].'</td>  
                     <td class="last_name" data-id2="'.$row["id"].'" contenteditable>'.$row["last_name"].'</td>
                     <td class="fav_fruit" data-id3="'.$row["id"].'" contenteditable>'.$row["fav_fruit"].'</td>
                     <td class="fruit_use" data-id4="'.$row["id"].'" contenteditable>'.$row["fruit_use"].'</td>  
                     <td><button type="button" name="delete_btn" data-id5="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="first_name" contenteditable></td>  
                <td id="last_name" contenteditable></td> 
                <td id="fav_fruit" contenteditable></td> 
                <td id="fruit_use" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
					<td id="first_name" contenteditable></td>  
					<td id="last_name" contenteditable></td>
          <td id="fav_fruit" contenteditable></td>
          <td id="fruit_use" contenteditable></td>  
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>