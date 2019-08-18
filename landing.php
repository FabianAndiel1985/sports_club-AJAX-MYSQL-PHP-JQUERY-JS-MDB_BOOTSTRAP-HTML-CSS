
<?php include 'components/head.php';?>


<!-- prevent logged in user from accessing this page -->

<?php

	if(isset($_SESSION['user_status']) != "" )
	{
	 header("Location: main.php" ); 
	};

?>


<body id="landing_body">

	<div class="container">

	<!-- <a href=""> Enter as a customer </a>

	<a href=""> Enter as a trainer </a> -->

		<div id="landing_row_hor">
			<div id="landing_row_ver" class="">
				
				<div id="landing_links_container" class="mt-5">
				
					<div class="landing_link_container"> 
						<a href="login.php" class="landing_link"> Enter your gym</a>
					</div>

				</div> <!-- ending links container	 -->

			</div> <!-- ending landing row ver -->
		</div>

	</div>

  <?php include 'components/scripts.php';?>
	

</body>
</html>