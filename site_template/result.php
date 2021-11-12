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
                <?php echo $find_rs['Firstname']; echo $find_rs['Surname']; ?>
                </span>
                    </div> <!-- /Name -->
                    
                    
                </div>
                
                    
                      
                    
                
                    
                <!-- Price -->
                    
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
                <p>
                    <!--Date of birth, recieved date, category... -->
                    <b>Date of Birth: </b> <?php echo $find_rs['Born'] ?> <br />
                    <b>Affiliation / City / Country: </b> <?php echo $find_rs['Affiliation'] ?>, <?php echo $find_rs['City'] ?>, <?php echo $find_rs['Country'] ?> <br />
                    <b>Recieved award in: </b> <?php echo $find_rs['Year'] ?><br/>
                    <b>Category: </b><?php echo $find_rs['Category'] ?>
                </p>
                <p>
                    <b>Motivation: </b><i><?php echo $find_rs['Motivation']; ?></i>
                </p>
            </div> <!-- /results -->
            <br/>
                
            <?php
                } // end results 'do'
                
                while($find_rs=mysqli_fetch_assoc($find_query));
            } // end else
                
            ?>
            

            
        