<?php
ini_set("display_startup_errors", "1");
ini_set("display_errors", "1");
error_reporting(E_ALL);
$conn = mysqli_connect('localhost', 'root', '', 'webprojectdb');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

session_start();


?>

<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>sign up</title>

    <!-- Icons font CSS-->
    <link href="css/signUp/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="css/signUp/select2.min.css" rel="stylesheet" media="all">
    <link href="css/signUp/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/signUp/signUp.css" rel="stylesheet" media="all">
</head>

<body>
  
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">انشاء حساب</h2>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">الاسم الاول</label>
                                    <input class="input--style-4" type="text" name="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">الاسم الأخير</label>
                                    <input class="input--style-4" type="text" name="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">العمر</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 " type="number" name="age">
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">الجنس</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">
                                            ذكر<input type="radio" checked="checked" name="gender" value="male">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">
                                            أنثى<input type="radio" name="gender" value="female">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-1">
                                <div class="input-group">
                                    <label class="label">الايميل</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">كلمة السر</label>
                                    <input class="input--style-4" type="password" name="password">
                                </div>
                                <!-- <div class="input-group">
                                    <label class="label">كرر كلمة السر</label>
                                    <input class="input--style-4" type="password" name="pass2">
                                </div> -->
                            </div>
                        </div>

                        <div class="input-group">
                            <label class="label">هل تريد انشاء حساب ك:</label>
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">
                                    زائر<input id="person" type="radio" checked="checked" name="accountType"
                                        value="person" onclick="docORper()">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">
                                    طبيب<input id="doctor" type="radio" name="accountType" value="doctor"
                                        onclick="docORper()">
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            <div id="doctorBox" class="row row-space" style="margin-top: 3%; display:none">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <label class="label">اسم الجامعة</label>
                                        <input class="input--style-4" type="text" name="university">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <label class="label">سنة التخرج</label>
                                        <input class="input--style-4" type="number" min="1948" step="1" name="gradYear">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <label class="label">مكان العمل</label>
                                        <input class="input--style-4" type="text" name="placeOfWork">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <label class="label">ادخل صورة شخصية</label>
                                        <input class="input--style-4" type="file" name="imge">
                                    </div>
                                </div>
                            </div>


                            <div class="p-t-25" style="transform: translateX(-35%); margin-top: 5%;">
                                <button class="btn btn--radius-2 btn--blue" type="submit" name="submit">انشاء
                                    حساب</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Jquery JS-->
    <script src="js/signUp/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="js/signUp/select2.min.js"></script>
    <script src="js/signUp/moment.min.js"></script>
    <script src="js/signUp/daterangepicker.js"></script>
    <script src="js/signUp/signUp.js"></script>

</body>

</html>
<!-- end document-->
<?php
echo '<script> console.log("hi")</script> ';

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $name = $first_name;
    $name .= " ";
    $name .= $last_name;
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $age = $_POST['age'];
    $accountType = $_POST['accountType'];
    echo '<script> console.log("inside post")</script> ';
    echo "<script> console.log('$accountType')</script> ";
    if ($accountType == "person") {
        $q = "INSERT INTO patient (name, email, password,gender,age)
        VALUES ('$name','$email','$pass','$gender','$age')";
        if ($conn->query($q) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $q . "<br>" . $conn->error;
        }
    } elseif ($accountType == "doctor") {
        $university = $_POST['university'];
        $imgName = $_FILES["imge"]["name"];
        $placeOfWork = $_POST['placeOfWork'];
        $gradYear = $_POST['gradYear'];
        $p = $_FILES['imge']['name'];
        echo "<script> console.log('$p')</script> ";

        // ==================== upload img ========================================
        $target_dir = "imgs/";
        $target_file = $target_dir . basename($_FILES["imge"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["imge"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["imge"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            $photoName=$_FILES['imge']['name'];
                $q = "INSERT INTO doctor (name, email, password,gender,age,university,placeOfWork,photo,gradYear)
                VALUES ('$name','$email','$pass','$gender','$age','$university','$placeOfWork','$photoName','$gradYear')";
                if ($conn->query($q) === TRUE) {
                    echo "New record created successfully";
                    if (move_uploaded_file($_FILES["imge"]["tmp_name"], $target_file)) {
                        echo "The file " . htmlspecialchars(basename($_FILES["imge"]["name"])) . " has been uploaded.";
                        echo "<script> window.location.assign('index.php'); </script>";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            
        }
        // ==========================================================================
        // $q = "INSERT INTO doctor (name, email, password,gender,age,university,placeOfWork,img,gradYear)
        // VALUES ('$name','$email','$pass','$gender','$age','$university','$placeOfWork','$imgName','$gradYear')";
        // if ($conn->query($q) === TRUE) {
        //     echo "New record created successfully";
        // } else {
        //     echo "Error: " . $sql . "<br>" . $conn->error;
        // }
    } 
}




?>