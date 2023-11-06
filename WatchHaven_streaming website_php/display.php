<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM fileup;";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Images and Videos of WatchHaven</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('background.gif') no-repeat center center/cover;
            background-size: cover;
            height: 100vh;
        }

        h1 {
            color: white;
            text-align: center;
        }

        .card {
            border-radius: 10px;
        }

        .card video {
            width: 100%;
            height: auto;
        }

        .download-btn {
            margin-top: 10px;
        }
    </style>
    <link rel="icon" type="image/png" href="task.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
    <div class="card" align="center">
    <a class="btn btn-danger" href="movies.php">Home Page</a>
    </div>
        <h1 style="color:red">Movies and TV Shows</h1>
        <div class="row">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $media_path = 'images/' . $row['image'];
                $title = $row['title'];
            ?>
            <div class="col-md-4 mt-3">
                <div class="card">
                    <?php
                    $file_extension = pathinfo($media_path, PATHINFO_EXTENSION);
                    if (in_array($file_extension, ['jpg', 'jpeg', 'png', 'gif'])) {
                        echo '<img src="' . $media_path . '" alt="' . $title . '" class="card-img-top rounded">';
                    } elseif (in_array($file_extension, ['mp4', 'webm', 'ogg'])) {
                        echo '<video controls><source src="' . $media_path . '" type="video/' . $file_extension . '"></video>';
                    }
                    ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $title; ?></h5>
                        <a href="<?php echo $media_path; ?>" class="btn btn-primary download-btn" download>Download</a>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
