<script type="text/javascript">

	document.getElementById("deleteButton").onclick = deleteData;

	function deleteData () {
	
	var deleteRequest = new XMLHttpRequest();

	var course_id = document.getElementById("test").value;

	deleteRequest.open("POST","http://localhost:8080/fProject/server_side_delete.php",true);

	deleteRequest.onreadystatechange = function() {

		if(deleteRequest.readyState === 4 && deleteRequest.status === 200) {
    		// console.log(deleteRequest.responseText);

    		if (deleteRequest.responseText == 1) {
    				 window.location.href = "main.php";
  		  		}	

  		  	else {
  		  		console.log("error ocurred");
  		  		}	

  		} /* end of onreadystate function */

	} /*end of server response function */


	deleteRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	deleteRequest.send("course_id="+course_id);

	}


</script>

