<!DOCTYPE html>
<html>
<head>
    <title>All Students Data</title>
</head>
<body>

<h1>All Students Data</h1>

<table border="1">
<tr align="center">
                            <th>Id No</th>
                            <th>Name </th>
                            <th>Subject Name</th>
                            <th>Subject Credits</th>
                            <th>YoP</th>
                            <th>AT-1</th>
                            <th>AT-2</th>
                            <th>ATs(BOA)</th>
                            <th>MID-1</th>
                            <th>MID-2</th>
                            <th>MID-3</th>
                            <th>Mid(BOM)</th>
                            <th>Internal</th>
                            <th>Grade</th>
                            <th>Batch</th>
                        </tr>
    <tbody>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "student";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM `e2s1_results`";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr align='center'>";
                        echo "<td>" . $row["Reg.Id"] . "</td>";
                        echo "<td align='left'>" . $row["Name"] . "</td>";
                        // echo "<td>" . $row["BRANCH"] . "</td>";
                        // echo "<td>" . $row["YEAR"] . "</td>";
                        // echo "<td>" . $row["Semester"] . "</td>";
                        echo "<td align='left'>" . $row["Subject Name"] . "</td>";
                        echo "<td>" . $row["SUBJECT_CREDITS"] . "</td>";
                        echo "<td>" . $row["YoP"] . "</td>";
                        echo "<td>" . $row['AT1'] . "</td>"; 
                        echo "<td>" . $row['AT2'] . "</td>"; 
                        echo "<td>" . $row["ATs"] . "</td>";
                        echo "<td>" . $row['MID1'] . "</td>"; 
                        echo "<td>" . $row['MID2'] . "</td>"; 
                        echo "<td>" . $row['MID3'] . "</td>";
                        echo "<td>" . $row["Mid Internals"] . "</td>";
                        echo "<td>" . $row["Total Internals"] . "</td>";
                        if ($row['GRADE'] == 'R') {
                            echo "<td style='background-color: red;'>" . $row["GRADE"] . "</td>";
                        } else {
                            echo "<td>" . $row["GRADE"] . "</td>";
                        }
                        echo "<td>" . $row["Batch"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No records found.</td></tr>";
        }

        $conn->close();
        ?>
    </tbody>
</table>

</body>
</html>











