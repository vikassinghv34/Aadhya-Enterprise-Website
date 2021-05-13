<?php
if(isset($_POST["state"])){
    // Capture selected state
    $state = $_POST["state"];
     
    // Define state and city array
    $stateArr = array(
                    "Bihar" => array("Darbhanga", "Patna", "Siwan"),
                    "Gujarat" => array("Ahmedabad", "Vadodara", "City"),
                    "Madhya Pradesh" => array("Bhopal", "indore", "Ujjain")
                );
     
    // Display city dropdown based on state name
    if($state !== 'Select'){
        echo "<label>City:</label>";
        echo '<select class="form-control" name="city" id="city">';
        foreach($stateArr[$state] as $value){
            echo "<option>". $value . "</option>";
        }
        echo "</select>";
    } 
}
?>