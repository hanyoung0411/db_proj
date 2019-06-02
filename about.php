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
	<h2>Whole table</h2>
	<hr/>
	<h3>Courses</h3>
        <p>
                 <?php
                $servername = "localhost";
                $username = "root";
                $password = "YOUR_PASSWORD";
                $dbname = "dbproj";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connectio
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT *
                        FROM Course; 
                        ";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        echo "<table border='2'> <tr> <th>Course#</th> <th>name</th><th>department</th><th>credit</th></tr>";
                        while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$row["course#"]."</td>";
			echo "<td>".$row["name"]."</td>";
                        echo "<td>".$row["department"]."</td>";
			echo "<td>".$row["credit"]."</td>";

                        echo "</tr>";
                    }
                echo "</table>";
                } else {
                    echo "0 results";
                }

                mysqli_close($conn);
                ?>

        </p>
        <hr/>
 	<h3>Religious</h3>
        <p>
                 <?php
                $servername = "localhost";
                $username = "root";
                $password = "YOUR_PASSWORD";
                $dbname = "dbproj";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connectio
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT *
                        FROM Religious; 
                        ";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        echo "<table border='2'> <tr> <th>Course#</th> <th>Pastor</th></tr>";
                        while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$row["course#"]."</td>";
                        echo "<td>".$row["Pastor"]."</td>";

                        echo "</tr>";
                    }
                echo "</table>";
                } else {
                    echo "0 results";
                }

                mysqli_close($conn);
                ?>

        </p>
        <hr/>
	
	<h3>Room</h3>
        <p>
                 <?php
                $servername = "localhost";
                $username = "root";
                $password = "YOUR_PASSWORD";
                $dbname = "dbproj";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connectio
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT *
                        FROM Room; 
                        ";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        echo "<table border='2'> <tr> <th>room#</th> <th>capacity</th></tr>";
                        while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$row["room#"]."</td>";
                        echo "<td>".$row["capacity"]."</td>";

                        echo "</tr>";
                    }
                echo "</table>";
                } else {
                    echo "0 results";
                }

                mysqli_close($conn);
                ?>

        </p>
        <hr/>

	<h3>Section</h3>
        <p>
                 <?php
                $servername = "localhost";
                $username = "root";
                $password = "YOUR_PASSWORD";
                $dbname = "dbproj";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connectio
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT *
                        FROM Section; 
                        ";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        echo "<table border='2'> <tr> <th>course#</th> <th>sec#</th> <th>lang</th> <th>period</th> <th>room</th></tr>";
                        while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";                        
			echo "<td>".$row["course#"]."</td>";
                        echo "<td>".$row["sec#"]."</td>";
                        echo "<td>".$row["lang"]."</td>";
			echo "<td>".$row["period"]."</td>";
			echo "<td>".$row["room"]."</td>";

                        echo "</tr>";
                    }
                echo "</table>";
                } else {
                    echo "0 results";
                }

                mysqli_close($conn);
                ?>

        </p>
        <hr/>


</div>

<?php include("includes/footer.php");?>

</body>
</html>
