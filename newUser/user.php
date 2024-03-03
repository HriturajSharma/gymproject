<!-- <?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "newmember";

$conn = new mysqli($server, $username, $password, $dbname);

if (!$conn) {
    echo "connection error";
}

// $name = $_POST["Name"];
// $name = $_POST["Surname"];
// $name = $_POST["Email"];
// $name = $_POST["Number"];
// $name = $_POST["DOB"];
// $name = $_POST["DOB"];





?> -->

<?php

$server = "localhost";
$servername = "root";
$password = "";
$dbname = "newmember";


$conn = mysqli_connect($server, $servername, $password, $dbname);

$name = $_POST["Name"];
$surname = $_POST["Surname"];
$email = $_POST["Email"];
$number = $_POST["Number"];
$dob = $_POST["DOB"];
$gender = $_POST["Gender"];
// $file =$_FILES["profile"]["name"];
// $tempfile= $_FILES['profile']['tmp_name'];
// $folder = "userData/".$file;

// Image Store in Folder
// $base_url = "http://localhost/gym_project/myproject/";
$target_dir = "newUser/uploads/";
$file = $target_dir . basename($_FILES["profile"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    echo "Test";
    $check = getimagesize($_FILES["profile"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    // Check if file already exists
    if (file_exists($file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) 
    {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["profile"]["tmp_name"], $file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

}
// Check if file already exists


$sql = "INSERT INTO member_data(Name,Surname,Email,Mobile,Birth,Gender,Profile) VALUES('$name','$surname','$email','$number','$dob','$gender','$file')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<h1> Wellcome $name </h1>";
} else {
    echo "<h1> Something went Wrong </h1>";
}
