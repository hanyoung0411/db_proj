<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>

<div class="container" id="main-content">
	<h3>Delete tuple which has credit 4 </h3>
	<form method="post">
		<input type="submit" name="test" id="test" value="RUN" /><br/>
	</form>
	<?php
	function delete_tuple()
	{
		$servername = "localhost";
		$username = "root";
		$password = "YOUR_PASSWORD";
		$dbname = "dbproj";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}

		// sql to delete a record
		$sql = "DELETE FROM Course WHERE credit=4";

		if (mysqli_query($conn, $sql)) {
		    echo "Record deleted successfully";
		} else {
		    echo "Error deleting record: " . mysqli_error($conn);
		}

		mysqli_close($conn);
	
	}
	if(array_key_exists('test',$_POST)){
   		delete_tuple();
	}
	?>

	<hr/>

	<h3>Create tuple which has credit 4 </h3>
        <form method="post">
                <input type="submit" name="test2" id="test2" value="RUN" /><br/>
        </form>
        <?php
        function delete_tuple2()
        {
                $servername = "localhost";
                $username = "root";
                $password = "YOUR_PASSWORD";
                $dbname = "dbproj";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // sql to delete a record
                $sql = "INSERT INTO `Course` (`course#`, `name`, `department`, `credit`) VALUES ('ECE40093', 'Capstone Design', 'CSEE', '4');";

                if (mysqli_query($conn, $sql)) {
                    echo "Record deleted successfully";
                } else {
                    echo "Error deleting record: " . mysqli_error($conn);
                }

                mysqli_close($conn);

        }
        if(array_key_exists('test2',$_POST)){
                delete_tuple2();
        }
        ?>



	<?php require "templates/footer.php"; ?>


</div>
 <?php include("includes/footer.php");?>

</body>
</html>
