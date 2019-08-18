<?php include 'components/head.php';?>



	<?php 

	if ($_GET['id']) {
	   $id = $_GET['id'];
	   
	   $sql = "DELETE FROM admin_messages WHERE id = {$id}";

	   if($conn->query($sql) === TRUE) {
       	echo "
	   	<div class='container'>
		   	<div class='card text-center black white-text'>
			  <div class='card-header'>
			    Attention
			  </div>
			  <div class='card-body'>
			    <h5 class='card-title'>Deletion sucessful</h5>
			    <p class='card-text white-text'>You may now resume</p>
			    <a href='main.php'>

                	<button type='button' class='btn btn-outline-success waves-effect'>go back</button>

              	</a>
			  </div>
			</div>
	   	</div>
	   	";
	   } 

	   else {
	       echo "Error deleting record : " . $conn->error;
	   }

   $conn->close();

	}
	?>





<?php include 'components/scripts.php';?>

</body>
</html>