<?php
/**
 * Created by PhpStorm.
 * User: syrin
 * Date: 4/9/2019
 * Time: 7:43 PM
 */
include "connect.php";

 if(isset($_POST["news_id"]))
 {
     $output = '';


     $sql0 = "SELECT id, title, created,body FROM news ";
     $result = $conn->query($sql0);

     $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
     while($row = mysqli_fetch_array($result))
     {
         $output .= '  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["title"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>date</label></td>  
                     <td width="70%">'.$row["date"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>body</label></td>  
                     <td width="70%">'.$row["body"].'</td>  
                </tr>  
              
                ';
     }
     $output .= "</table></div>";
     echo $output;
 }