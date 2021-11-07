<?php include("topbit.php");

    $name_win = $_POST['win_name'];

    $find_sql = "SELECT * FROM `laureate_details`
    JOIN category ON (laureate_details.CategoryID = category.CategoryID)
    JOIN country ON (laureate_details.CountryID = country.CountryID)
    WHERE `Firstname` LIKE '%$name_win%' OR  `SurName` LIKE '%$name_win%'
    
    ";
    $find_query = mysqli_query($dbconnect, $find_sql);
    $find_rs = mysqli_fetch_assoc($find_query);
    $count = mysqli_num_rows($find_query);

?>            

        <div class="box main">
            <h2>Name Results</h2>
            
            <?php 
            include ("result.php"); 
            ?>
            
            </div> <!-- / main -->

<?php include("bottombit.php") ?>