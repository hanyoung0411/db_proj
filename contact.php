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
	<h3>1. All Department which open any course</h3>
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

                $sql = "SELECT * FROM Course";
                $result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        echo "<table border='2'> <tr> <th>Course#</th> <th>name</th> <th>department</th><th>credit</th> </tr>";
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
	<h3>2. Courses from CSEE(with subquery)</h3>
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

		$sql = "
		select distinct name from Course where department IN (select department from Course where department='CSEE') order by name
		";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                        // output data of each row
			echo "<table border='2'> <tr> <th>name</th> </tr>";
                        while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
		       	echo "<td>".$row["name"]."</td>";
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
	<h3>3. English class which is 3 credits and held in Monday, Thurday 5nd period</h3>
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

		$sql = "select Course.`course#`,Course.name from Course NATURAL JOIN Section where Section.lang='ENG' and Section.period='Mon5Thu5' and Course.credit='3' ";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        echo "<table border='2'> <tr> <th>Course#</th> <th>name</th></tr>";
                        while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$row["course#"]."</td>";
                        echo "<td>".$row["name"]."</td>";
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

	<h3>4. Held in NTH311 and capacity is less than 60 </h3>
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

		$sql = "select Course.name from `Section`,`Room`,`Course` where Section.room=Room.`room#` and Room.`room#`='NTH311' and capacity<=60 and Section.`course#`=Course.`course#`";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        echo "<table border='2'> <tr> <th>name</th></tr>";
                        while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$row["name"]."</td>";
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
	<h3>5. Subject that Pastor run </h3>
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
		$sql = "Select * from Course Natural Join Religious 
where pastor is not null"; 
                $result = mysqli_query($conn, $sql);


                if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        echo "<table border='2'> <tr> <th>Course#</th><th>name</th><th>department</th><th>credit</th><th>Pastor</th></tr>";
                        while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$row["course#"]."</td>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["department"]."</td>";
			echo "<td>".$row["credit"]."</td>";
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


</div>
 <?php include("includes/footer.php");?>

</body>
</html>
