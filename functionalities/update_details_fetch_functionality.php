  <?php 

    if ($_GET['id']) {
       $id = $_GET['id'];
       // echo $id;

       $sql = "SELECT * FROM courses WHERE id = {$id}";

       $result = $conn->query($sql);

       $data = $result->fetch_assoc();

       $conn->close();
     }

     else {
     	echo "attention talk to your system admin";
     }

?>