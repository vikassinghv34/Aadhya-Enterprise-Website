<?php
include('conn.php');
$term=$_REQUEST["term"];
$length=3;
if(isset($_REQUEST["term"]) && strlen($term)>=$length){
    // Prepare a select statement
    $sql = "SELECT * FROM products WHERE ProductName LIKE ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term ='%'. $_REQUEST["term"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    // echo "<p>" . $row["ProductName"],$row["ProductID"] . "</p>";
                    ?> <p onClick="window.location='http://localhost/code/SEM%206/testing/bs4/item.php?ProductID=<?= $row["ProductID"]?>'"> <?php echo $row["ProductName"],$row["ProductID"] ?> </p><?php
					// $_SESSION['searchid']=$row["ProductID"];
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
 
// close connection
mysqli_close($conn);
?>