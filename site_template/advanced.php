<?php include("top_bit.php");

    $name = mysqli_real_escape_string($dbconnect, $_POST['name']);
    $recieved = mysqli_real_escape_string($dbconnect, $_POST['recieved']);
    $category = mysqli_real_escape_string($dbconnect, $_POST['category']);
    $country = mysqli_real_escape_string($dbconnect, $_POST['country']);

    // gender code (0 = female, 1 = male...)
    if (isset($_POST['gender'])) {
        $gender = 0;
    }

    else {
        $gender = 1;
    }

    // Share
    $share_more_less = mysqli_real_escape_string($dbconnect, $_POST['share_more_less']);
    $share = mysqli_real_escape_string($dbconnect, $_POST['share']);

    if ($share == "") {
        $share = 0;
        $share_more_less = "at least";
    }

    if ($share_more_less == "at most") {
        $share_op = "<=";
    }

    

    else {
        $share_op = ">=";
        
    } // end share if / elseif / else

 // Age
    $age_more_less = mysqli_real_escape_string($dbconnect, $_POST['age_more_less']);
    $age = mysqli_real_escape_string($dbconnect, $_POST['age']);
    
    if ($age == "") {
        $age = 0;
        $age_more_less = "at least"; // set age to 0 if it is blank
    }

    if ($age_more_less == "at most") {
        $age_op = "<=";
    }

    else {
        $age_op = ">=";
        $age = 0;
    } // end rating if / elseif / else

    $find_sql = "SELECT * FROM `game_details`
    JOIN genre ON (game_details.GenreID = genre.GenreID)
    JOIN developer ON (game_details.DeveloperID = developer.developerID)
    WHERE `Name` LIKE '%$app_name%'
    AND `DevName` LIKE '%$developer%'
    AND `Genre` LIKE '%$genre%'
    AND `Price` $cost_op '$cost'
    AND (`In App` = $in_app OR `In App` = 0)
    AND `User Rating` $rate_op '$rating'
    AND `Age` $age_op ''
    ";

    $find_query = mysqli_query($dbconnect, $find_sql);
    $find_rs = mysqli_fetch_assoc($find_query);
    $count = mysqli_num_rows($find_query);

?>            

        <div class="box main">
            <h2>Advanced Search Results</h2>
            
            <?php 
            include ("results.php"); 
            ?>
            
            </div> <!-- / main -->

<?php include("bottom_bit.php") ?>