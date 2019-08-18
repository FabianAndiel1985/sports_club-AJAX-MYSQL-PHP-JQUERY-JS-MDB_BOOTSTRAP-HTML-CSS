<?php include 'components/head.php';?>


<body>
	
	<?php include 'components/header.php';?>


	<div class="container">

		<h3><span class="white-text d-flex justify-content-center"> So you wanna do business with us???</span></h3>


		     <?php 

        // echo $_SESSION["system_user"];

		        $sql= "SELECT * FROM rooms";
		        $result = mysqli_query($conn,$sql); 

		        if(mysqli_num_rows($result)>0)
          		{

            	while($row = mysqli_fetch_assoc($result)) {

            	echo "   
            	<div class='row'>
				    <div class='test col-md-12 col-lg-6 mt-4'>

				    	<img src='".$row['img']."' class='img-fluid'> </img>

				    </div>
				    
				    <div class='test col-md-12
				    col-lg-6 mt-4'>

						<ul class='list-group list-group-flush'>
						  <li class='list-group-item white-text'>availability: ".$row['availability']." </li>
						  <li class='list-group-item white-text'>rent/hour: ".$row['rent_hour']." € </li>
						  <li class='list-group-item white-text'>size in squaremeters: ".$row['size_sqm']." m </li>
						  <li class='list-group-item white-text'>equipped with mats: ".$row['mats']."</li>
						</ul>
				    </div>
		  		</div> 
				";
            } /* end of while display */
          } /* end of if clause */

      ?>

      	<br>
      	<br>
      	<br>

    	<a class="white-text my-5" href="logout.php?logout"> Logout</a>
    	

	</div> <!-- Ende Container fluid -->



	<?php include 'components/footer.php';?>


</body>
</html>