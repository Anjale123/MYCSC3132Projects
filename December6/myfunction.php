<?php
// database connection file
require_once 'dbconf.php';

function user($connect){ 
    try{
        
        $sql = "SELECT user_id, user_name FROM  users";
    
    
        $result = mysqli_query($connect,$sql);
    
        if (mysqli_num_rows($result)>0) {
        
    
            echo "<table border=1> ";
    
        $col = mysqli_fetch_fields($result);
    
        echo "<tr>";
        foreach ($col as $value) {
            
                echo "<td>".$value->name."</td>";
            }

            echo "<td> View details </td>";
            echo "</tr>";
            while($row = mysqli_fetch_assoc($result)){ 
            echo "<tr>";
            foreach ($row as $key => $value) {
                echo "<td>$value</td>";
            }
            $user_id=$row['user_id'];
            //query string
            echo "<td><a href='printtable.php? user_id=$user_id '> View </a> </td>";
            echo "</tr>";
            
            }

            echo "</table>";
        } 
        else{
            echo "No results"; 
        }
    
        }
    
    
    catch(Exception $e){
        die($e->getMessage());
    }
}



 function userdetails($user_id,$connect){
    try{
    
        $sql = "SELECT * FROM  users where  user_id = $user_id ";
    
    
        $result = mysqli_query($connect,$sql);
    
        if (mysqli_num_rows($result)>0) {
        
    
            echo "<table border=1> ";
    
        $col = mysqli_fetch_fields($result);
    
        echo "<tr>";
        foreach ($col as $value) {
            
                echo "<td>".$value->name."</td>";
            }
            echo "</tr>";
            while($row = mysqli_fetch_assoc($result)){
                
            echo "<tr>";
            foreach ($row as $key => $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
            }
            echo "</table>";
        } 
        else{
            echo "No results"; 
        }
    
        }
    
    
    catch(Exception $e){
        die($e->getMessage());
    }
}

?>