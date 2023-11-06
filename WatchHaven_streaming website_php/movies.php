<?php
session_start();

if(!isset($_SESSION['user_email']) || !isset($_SESSION['user_name'])) {
    header("Location: signin.html");
    exit();
}

$user_email = $_SESSION['user_email'];
$user_name = $_SESSION['user_name'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    echo("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit_image'])) {
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === UPLOAD_ERR_OK) {
        $file_tmp = $_FILES['profile_image']['tmp_name'];
        $file_name = $_FILES['profile_image']['name'];
        $file_type = $_FILES['profile_image']['type'];

        $target_dir = "profile_images/";
        $target_file = $target_dir . basename($file_name);

        if (move_uploaded_file($file_tmp, $target_file)) {
            $update_query = "UPDATE form SET profile_image = ? WHERE email = ?";
            $stmt_update = mysqli_prepare($conn, $update_query);
            mysqli_stmt_bind_param($stmt_update, "ss", $target_file, $user_email);

            if (mysqli_stmt_execute($stmt_update)) {
                mysqli_stmt_close($stmt_update);
                header("Location: movies.php");
                exit();
            } else {
                echo "Error updating profile image: " . mysqli_error($conn);
            }
        } else {
            echo "Error uploading image. Please try again.";
        }
    }
}

$profile_image_query = "SELECT profile_image FROM form WHERE email = ?";
$stmt_image = mysqli_prepare($conn, $profile_image_query);
mysqli_stmt_bind_param($stmt_image, "s", $user_email);
mysqli_stmt_execute($stmt_image);
mysqli_stmt_bind_result($stmt_image, $profile_image_path);
mysqli_stmt_fetch($stmt_image);
mysqli_stmt_close($stmt_image);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Movies - WatchHaven</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
footer {
    background-color: #111;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

footer a {
    color: #fff;
    text-decoration: none;
}

footer a:hover {
    text-decoration: underline;
}

footer .watchhaven-logo {
    display: block;
    margin: 0 auto;
    max-width: 100px;
}

footer .social-icons {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

footer .social-icons a {
    display: inline-block;
    margin: 0 8px;
    color: #fff;
}

footer .social-icons i {
    font-size: 24px;
}
body {
        margin: 0;
        padding: 0;
        background: url('background.gif') no-repeat center center/cover;
        background-size: cover;
        height: 100vh;
        }
.card {
  background-color: rgb(43, 42, 42);
  color: white;
  border: 2px solid white;
}
.fa-instagram {
  background: #125688;
  color: white;
}
.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}
.p1 {
  font-family:Georgia, 'Times New Roman', Times, serif;
}
.navbar-brand .profile-image {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-left: 10px;
        }
.profile-image-update {
            margin-top: 20px;
            max-width: 300px;
        }
.profile-image-update label {
            display: block;
            margin-bottom: 10px;
        }
.profile-image-update input[type="file"] {
            display: block;
            margin-bottom: 10px;
        }
.profile-image-update input[type="submit"] {
            display: block;
        }
body {
            margin: 0;
            padding: 0;
            background: black;
            background-size: cover;
            height: 100vh;
        }
h1 {
            color: white;
            text-align: center;
        }
    </style>
    <link rel="icon" type="image/png" href="task.png">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-nav">
            <a class="navbar-brand" href="index.html">
                <img src="logo.png" alt="WatchHaven Logo" height="65px;" width="120px;">
                <?php
                    
                    if (isset($_SESSION['user_email']) && isset($_SESSION['user_name'])) {
                        $user_email = $_SESSION['user_email'];
                        $user_name = $_SESSION['user_name'];

                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "student";
                        
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        
                        if ($conn) {
                            $profile_image_query = "SELECT profile_image FROM form WHERE email = ?";
                            $stmt_image = mysqli_prepare($conn, $profile_image_query);
                            mysqli_stmt_bind_param($stmt_image, "s", $user_email);
                            mysqli_stmt_execute($stmt_image);
                            mysqli_stmt_bind_result($stmt_image, $profile_image_path);
                            mysqli_stmt_fetch($stmt_image);
                            mysqli_stmt_close($stmt_image);
                            mysqli_close($conn);
                        }
                        if (isset($profile_image_path)) {
                            echo "<img src='$profile_image_path' alt='Profile Image' class='profile-image'>";
                        }
                        
                        echo "<span class='ml-2'>$user_name</span>";
                    } 
                ?><a>
    </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="movies.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tvshows.html">TV Shows</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="movie.html">Movies</a>
                    </li>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search Movies">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </ul>
            </div>
        </nav>
    </header>
<br><br>

<header class="hero">
    <div class="container text-center">
      <h1 style="font-weight:800; font-size:45px;">Welcome to Our Streaming Platform WatchHaven</h1>
      <p class="lead" style="color:white; font-weight:400">Discover the latest movies and TV shows.</p>
      <a href="#" class="btn btn-primary btn-lg">Explore Now</a>
    </div>
  </header>

  <section class="container mt-5">
    <h2 class="mb-4" style="color:white; font-weight:500;">Featured Content</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="movie5.gif" style="width:22rem; height:17rem;" class="card-img-top" alt="Featured Movie">
          <div class="card-body">
            <h3 class="card-title">Chalo bike pe</h3>
            <p class="card-text">Romantic Entertainer</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <video src="tv.mp4" style="width:22rem; height:17rem;" class="card-img-top" alt="Featured Movie" loop autoplay muted>
          <div class="card-body">
            <h3 class="card-title">Watch karo</h3>
            <p class="card-text">Thriller Entertainer</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="pushpa2.gif" style="width:22rem; height:17rem;" class="card-img-top" alt="Featured Movie">
          <div class="card-body">
            <h3 class="card-title">Pushpa-The-Rule2</h3>
            <p class="card-text">Massive blockbuster</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-dark py-5">
    <div class="container">
      <h2 class="mb-4" style="color:white; font-weight:600;">Top Rated Movies</h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="movie1.gif" style="width:22rem; height:17rem;" class="card-img-top" alt="Top Rated Movie 1">
            <div class="card-body">
              <h3 class="card-title">RRR</h3>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="movie8.gif" style="width:22rem; height:17rem;" class="card-img-top" alt="Top Rated Movie 2">
            <div class="card-body">
              <h3 class="card-title">Jai Simha</h3>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="movie4.gif" style="width:22rem; height:17rem;" class="card-img-top" alt="Top Rated Movie 2">
            <div class="card-body">
              <h3 class="card-title">Zindagi ka kharab</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container mt-5">
    <h2 class="mb-4" style="color:white; font-weight:500;">Recently Added</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="movie2.gif" style="width:22rem; height:17rem;" class="card-img-top" alt="Newly Added Movie">
          <div class="card-body">
            <h3 class="card-title">Newly Added Movie</h3>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="movie1.gif" style="width:22rem; height:17rem;" class="card-img-top" alt="Newly Added Movie">
          <div class="card-body">
            <h3 class="card-title">Newly Added Movie</h3>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="movie3.gif" style="width:22rem; height:17rem;" class="card-img-top" alt="Newly Added Movie">
          <div class="card-body">
            <h3 class="card-title">Newly Added Movie</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

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
    <div class="container mt-5">
        <h1 style="color:red; background-color:white; font-weight:800;">Movies and TV Shows</h1>
        <div class="row">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $media_path = 'images/' . $row['image'];
                $title = $row['title'];
            ?>
            <div class="col-md-4 mt-4">
                <div class="card" style="width:22rem; height:22rem;">
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
    </div> <br><br>
<div class="card mx-auto custom-card bg-info" style="max-width: 500px;">
    <h1 style="color:white">Upload File here</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label style="color:white" class="form-label">Title</label>
        <input type="text" class="form-control" name="title"><br>
        <label style="color:white" class="form-label">Upload file here</label>
        <input type="file" class="form-control" name="file" id="file" multiple required accept="video/*">
        <span class="text-danger" id="fileSizeError"></span><br>
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <input type="submit" class="btn btn-success" value="Upload File" name="submit">
            <input type="submit" class="btn btn-primary" value="View uploaded files" onclick="redirectToUploadPage()">
        </div>
    </form>
</div>

<br><br>
<script>
    function redirectToUploadPage() {
        window.location.href = 'display.php';
    }
</script>
    <div class=" card profile-image-update mx-auto text-center">
        <h3>Update Profile Image</h3>
        <form action="movies.php" method="post" enctype="multipart/form-data">
            <label for="profile_image">Choose a new profile image:</label>
            <input type="file" name="profile_image" id="profile_image" accept="image/*" required>
            <input type="submit" name="submit_image" value="Update Profile Image">
        </form>
    </div><br>

    <footer>
        <img class="watchhaven-logo" src="logo.png" alt="WatchHaven Logo">
    
        <nav>
            <a href="movies.html">Home</a>
            <a href="tvshows.html">TV Shows</a>
            <a href="movie.html">Movies</a>
            <a href="#">Contact Us</a>
        </nav>
    
        <p>&copy; 2023 WatchHaven. All rights reserved by Mr. Kancherla Naveenkumar.</p>
    
        <div>
            <a href="https://www.facebook.com/" class="fa fa-facebook"></a>&nbsp;&nbsp;
            <a href="https://www.twitter.com/" class="fa fa-twitter"></a>&nbsp;&nbsp;
            <a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>&nbsp;&nbsp;
            <a href="https://www.youtube.com/" class="fa fa-youtube"></a>&nbsp;&nbsp;
            <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
        </div>
        Remember that the appearance of the WatchHaven footer may change over time, so consider regularly checking the WatchHaven website for any design updates.
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    document.getElementById("file").addEventListener("change", function() {
        const maxFileSize = 2000 * 1024 * 1024;
        const fileInput = this;
        const fileSize = fileInput.files[0].size;
        const fileSizeError = document.getElementById("fileSizeError");

        if (fileSize > maxFileSize) {
            fileSizeError.textContent = "File size exceeds 2000MB limit.";
            fileInput.value = "";
        } else {
            fileSizeError.textContent = "";
        }
    });
</script>
</body>
</html>