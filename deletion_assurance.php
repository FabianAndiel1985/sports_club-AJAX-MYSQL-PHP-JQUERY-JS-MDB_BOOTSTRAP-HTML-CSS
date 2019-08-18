<?php include 'components/head.php';?>


<?php include 'functionalities/update_details_fetch_functionality.php';?>

		<div class='container'>

		<?php

		   	echo "
			   	<div class='card text-center black white-text'>
				  <div class='card-header'>
				    Attention
				  </div>
				  <div class='card-body'>
				    <h5 class='card-title'>Do your really want to delete?</h5>
				    <input id='test' type='' name='' value ='".$data['id']."' class='d-none' readonly>
				    <p class='card-text white-text'>".$data['name']."</p>

		"; ?>



				    	<button id='deleteButton' type='button' class='btn btn-outline-danger waves-effect'>yes, delete</button>

				    <a href='main.php'>

	                	<button type='button' class='btn btn-outline-success waves-effect'>go back</button>

	              	</a>
				  </div>
				</div>
		   	</div>

<?php include 'functionalities/delete_functionality.php'?>

<?php include 'components/scripts.php';?>

</body>
</html>
