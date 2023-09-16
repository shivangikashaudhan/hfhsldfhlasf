<div class="container">
    <div class="row">
        <div class="col-md-4" >
            <?php
          include 'config.php';

         $sql = "SELECT * FROM finee";
         $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

         if(mysqli_num_rows($result) > 0) 
	     {
          ?>
          <?php while($row = mysqli_fetch_array($result))
		     { ?>
                <div class="img-box">
                    <img src="form/<?php echo $row['image'];?>" alt="finee">
                </div>
          
			    
              <?php } ?>

             <?php }
             else
             {
             echo "<h2>No Record Found</h2>";
             }
           mysqli_close($conn);
          ?>
            
        </div>
    </div>
</div>