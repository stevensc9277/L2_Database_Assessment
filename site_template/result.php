<?php
            
            if($count < 1){
                
                ?>
            
            <div class = "error">
            
            Sorry! There are no results that match your search. Please use the search box in the side bar to try again.
                
            </div> <!-- end error -->
            
            
            
            <?php
            }
            
            else{
                do
                {
                   
                    ?>
            <!-- Results go here -->
            <div class="results">
                <!-- Heading and subtitle -->
                
                <div class = "flex-container">
                    <div>
                <span class="sub_heading">
                <?php echo $find_rs['Firstname'];?> <?php echo $find_rs['Surname']; ?>
                </span>
                    </div> <!-- /Name -->
                    
                    
                </div>     
                
                <p>
                    <!-- Gender -->
                    
                    <?php if($find_rs['Gender'] == 0){
                        ?>
                        <b>Gender: </b><?php echo 'Female'; ?>
                                        
                    
                    <?php
                    } // end gender if
                    else{
                        ?>
                    <b>Gender:</b> <?php echo 'Male'; ?>
                <?php
                    } //end gender else
                    
                    
                    ?>
            <!-- / Gender -->
                    <br/>
                    
                    <!--Date of birth, recieved date, category... -->
                    <b>Date of Birth: </b> <?php echo $find_rs['Born'] ?> <br />
                    
                    <b>Recieved award in: </b> <?php echo $find_rs['Year'] ?><br/>
                    <b>Category: </b><?php echo $find_rs['Category'] ?>
                </p>
                <p>
                    <?php if($find_rs['Motivation'] == ""){
                        ?>
                    <i><b>Motivation: </b><?php echo 'No motivation'; ?></i>             
                    
                    <?php
                    } // end motivation if
                    else{
                        ?>
                    <b>Motvation:</b> <?php echo $find_rs['Motivation']; ?>
                <?php
                    } //end motivation else
                    ?>
                    
                    <br />
                    <?php if($find_rs['Affiliation'] == "" || $find_rs['City'] == ""){
                        ?>
                    
                    <b>Affiliation / City / Country: </b> <?php echo 'No affiliation' ?>, <?php echo 'No city' ?>, <?php echo $find_rs['Country'] ?>
                    <?php
                    } // end affiliation/city/country if
                    else{
                        ?>
                    <b>Affiliation / City / Country: </b> <?php echo $find_rs['Affiliation'] ?>, <?php echo $find_rs['City'] ?>, <?php echo $find_rs['Country'] ?>
                    <?php
                    }  // end affiliation/city/country else
                    ?>
                </p>
            </div> <!-- /results -->
            <br/>
                
            <?php
                } // end results 'do'
                
                while($find_rs=mysqli_fetch_assoc($find_query));
            } // end else
                
            ?>
            

            
        