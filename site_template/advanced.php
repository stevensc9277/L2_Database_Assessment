<?php include("topbit.php");

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

    $find_sql = "SELECT * FROM `laureate_details`
    JOIN category ON (laureate_details.CategoryID = category.CategoryID)
    JOIN country ON (laureate_details.CountryID = country.CountryID)
    WHERE `Firstname` LIKE '%$name%'
    AND `Country` LIKE '%$country%'
    AND `Category` LIKE '%$category%'
    AND `Share` $share_op '$share'
    AND (`Gender` = $gender OR `Gender` = 0)
    AND `Year` LIKE '%$recieved%'
    ";

    $find_query = mysqli_query($dbconnect, $find_sql);
    $find_rs = mysqli_fetch_assoc($find_query);
    $count = mysqli_num_rows($find_query);

?>            

        <div class="box main">
            <h2>Advanced Search Results</h2>
            
            <?php 
            include ("result.php"); 
            ?>
            
            </div> <!-- / main -->

<?php include("bottombit.php") ?>