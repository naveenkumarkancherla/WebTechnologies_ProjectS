<!DOCTYPE html>
<html>
<head>
    <title>User Data Display</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        echo("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_GET['ID'])) {
        $id = $_GET['ID'];

        if (!filter_var($id, FILTER_VALIDATE_INT) || $id <= 0) {
            echo("Invalid ID.");
        }
        $delete_sql = "DELETE  FROM form WHERE ID = $id;";
        if (mysqli_query($conn, $delete_sql)) {
            echo '<div class="alert alert-success" role="alert">Data with ID ' . $id . ' has been deleted successfully.</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Error deleting data: ' . mysqli_error($conn) . '</div>';
        }
    }
    $sql = "SELECT * FROM form;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo '<h2 class="mb-3" style="color: green;">Users Data in the \'form\' table:</h2>';
        echo '<table class="table table-bordered">';
        echo '<tr><th>Name</th><th>Email</th><th>Phone number</th><th>Password</th><th>Action</th></tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['Name'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['phone'] . '</td>';
            echo '<td>' . $row['password'] . '</td>';
            echo '<td><a class="btn btn-danger" href="?ID=' . $row['ID'] . '">Delete</a></td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo '<div class="alert alert-warning" role="alert">No data found in the \'form\' table.</div>';
    }

    mysqli_close($conn);
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
