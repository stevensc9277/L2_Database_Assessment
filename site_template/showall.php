<?php include("topbit.php");


    $find_sql = "SELECT * FROM `laureate_details` 
    JOIN category ON (laureate_details.CategoryID = category.CategoryID)
    JOIN country ON (laureate_details.CountryID = country.CountryID) 
    
    ";
    $find_query = mysqli_query($dbconnect, $find_sql);
    $find_rs = mysqli_fetch_assoc($find_query);
    $count = mysqli_num_rows($find_query);

?>            

        <div class="box main">
            <h2>All Results</h2>
            
            <?php 
            include ("result.php"); 
            ?>
            
            </div> <!-- / main -->

<?php include("bottombit.php") ?>