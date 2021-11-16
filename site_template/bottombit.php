
<div class="box side">
           
           <h2><a href="add_entry.php">Add a Laureate</a> | <a class="side" href="showall.php">Show All</a></h2>
           
            <form class="searchform" method="post" action="name_win.php" enctype="multipart/form-data">
                
                <input class="search" type="text" name="win_name" size="40" value="" required placeholder="Name / Country..."/>

                <input class="submit" type="submit" name="find_win_name" value="&#xf002;"/>
                
            </form>
                
        
            
            <br />
            <hr />
            <br/>
        
            <div class="advanced-frame">
                <h2>Advanced Search</h2>
                
                <form class="searchform" method="post" action="advanced.php" enctype="multipart/form-data">
                
                    <input class="adv" type="text" name="name" size="40" value ="" placeholder=" Name..."/>
                    
                    <input class="adv" type="text" name="country" size="40" value ="" placeholder=" Country..."/>
                    
                    <input class="adv" type="text" name="recieved" size="40" value="" placeholder="Recieved award in..." />
                    <!-- Category Dropdown -->
                
                    <select class="search adv" name="category">
                    
                    <option value="" >Category...</option>
                    
                    <!-- get options from database -->
                    <?php
                        $category_sql="SELECT * FROM `category` ORDER BY `category`.`Category` ASC";
                        $category_query=mysqli_query($dbconnect, $category_sql);
                        $category_rs=mysqli_fetch_assoc($category_query);
                    
                        do {
                            ?>
                    <option value="<?php echo $category_rs['Category']; ?>"><?php echo $category_rs['Category']; ?></option>
                    
                    <?php
                        } //end category do loop
                        while($category_rs=mysqli_fetch_assoc($category_query))
                    ?>
                    </select>
                    
                    <!-- Gender -->
                    <input class="adv-txt" type="checkbox" name="gender" value="0">Female
                    
                    <!-- Share -->
                <div class="flex-container">
                    <div class="adv-txt">
                        Share:
                    </div> <!-- / share label -->
                    
                    <div>
                        <select class="search adv" name="share_more_less">
                            <option value="" disabled>Choose...</option>
                            <option value="at least">At Least</option>
                            <option value="at most"> At Most</option>
                        </select>
                    </div> <!-- / share drop down -->
                    
                    <div>
                        <input class="adv" type="text" name="share" size="2" value="" placeholder=""/>
                        
                    </div> <!-- / share amount -->
                </div>
                    
                    <!-- Search button is below -->
                 <input class="submit advanced-button" type="submit" name="advanced" value="Search &nbsp; &#xf002;" />
                    
                </form>
    </div>
        </div> <!-- / side bar -->
        
        <div class="box footer">
            CC CS 2021
        </div> <!-- / footer -->
                
        
    </div> <!-- / wrapper -->
    
            
</body>