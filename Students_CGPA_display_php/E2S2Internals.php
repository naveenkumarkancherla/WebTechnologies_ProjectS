<!DOCTYPE html>
<html>

<head>
    <title>R19 E2S2 Internals</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        

        .custom-card {
            background-color: rgb(84, 2, 84);
            color: white;
        }

        .custom-table {
            background-color: white;
            color: black;
        }

        .custom-table th,
        .custom-table td {
            padding: 10px;
        }

        .custom-table th {
            background-color: #343a40;
            color: white;
        }
        .custom-container {
          box-shadow: 0 0 20px 50px rgba(0, 0, 0, 0.2);
        }

    </style>
</head>

<body>

<div class="container">
    <div style="color:white;border-radius:20px;" class="custom-card custom-container shadow m-3">
        <div class="card-body">
            <h2 align="center">R19 E2S2 Internals</h2>

            <!-- User Input Form -->
            <form action="" method="post">
                <div class="form-group row">
                    <label for="registration_id" class="col-sm-2 col-form-label">Enter Your ID:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="registration_id" name="registration_id" required>
                    </div>
                    <div class="col-sm-6">
                        <input type="submit" class="btn btn-primary" value="Fetch Data">
                    </div>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-bordered custom-table">
                    <thead>
                        <tr align="center">
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
                    </thead>
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

            $name = ""; 
            $id = "";
            if (isset($_POST['registration_id'])) {
                $specific_reg_id = $_POST['registration_id'];

                $sql = "SELECT * FROM `Internals` WHERE `Reg.Id` = '$specific_reg_id'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {    
                    while ($row = $result->fetch_assoc()) {        
                        echo "<tr align='center'>";
                        // echo "<td>" . $row["Reg.Id"] . "</td>";
                        // echo "<td>" . $row["Name"] . "</td>";
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
                        echo "<td>" . $row["MID(BOM)"] . "</td>";
                        echo "<td>" . $row["Total Internals"] . "</td>";
                        if ($row['GRADE'] == 'R') {
                            echo "<td style='background-color: red;'>" . $row["GRADE"] . "</td>";
                        } else {
                            echo "<td>" . $row["GRADE"] . "</td>";
                        }
                        echo "<td>" . $row["Batch"] . "</td>";
                        echo "</tr>";

                        $name = $row["Name"];
                        $branch = $row["BRANCH"];
                        $id = $row["Reg.Id"];
                    }

                } else {
                    echo "<tr><td colspan='12'>No records found for the given Id</td></tr>";
                }
            }
            ?>
        </tbody>
    </table>

    <div class="form-group row">
        <?php
        if (isset($_POST['registration_id']) && $result->num_rows > 0) {
            echo '<label for="inputName"  font-weight:700;" class="col-sm-2 col-form-label">ID No:</label>';
            echo '<div class="col-sm-4">';
            echo '<input type="text" class="form-control" style="background-color:purple;color:white;font-size:18px" id="inputName" value="' . $id . '" disabled>';
            echo '</div>';
            echo '<label for="inputName"  font-weight:700;" class="col-sm-2 col-form-label">Name:</label>';
            echo '<div class="col-sm-4">';
            echo '<input type="text" class="form-control" style="background-color:purple;color:white;font-size:18px" id="inputName" value="' . $name . '" disabled>';
            echo '</div>';
        }
        ?>
           </div>
        </div>
        <a href="E2S1.php" style="font-size: 18px;"><b>For <strong style="font-size: 20px; color: white">E2S1</strong> Results Click here!</b></a>&nbsp;
<a href="E2S2.php" style="font-size: 18px;"><b>For <strong style="font-size: 20px; color: white">E2S2</strong> Results Click here!</b></a>
    </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>


