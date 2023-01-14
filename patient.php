<?php
$conn = mysqli_connect('localhost', 'root', '', 'webprojectdb');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width: device-width, initial-scale=1">
    <!--  title and icons-->
    <title>Care</title>
    <link rel="shortcut icon" href="imgs/icon.PNG">
    <!--  libraries  -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />



    <link href="css/magnific/magnific-popup.css" rel="stylesheet " type="text/css">
    <link href="css/owlCarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owlCarousel/owl.theme.default.min.css" rel="stylesheet">
    <!--font awesome-->
    <!--    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--------------Animation---------------->
    <link rel="stylesheet" href="css/animate/animate.min.css">
    <link rel="stylesheet" href="css/animate/animate.css">
    <!--  style css  -->
    <link rel="stylesheet" href="css/index.css">
    <!--responsive style -->
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body data-spy="scroll" data-target=".navbar-fixed-top" data-offset="85">
    <header dir="rtl" lang="ar">
        <nav class="navbar   navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="care-nav-wrapper">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#care-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" id="logo" href="#home">
                            CARE
                        </a>
                    </div>
                    <div id="care-menu" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <!--              ========new add smooth class for all anchors ==========              -->
                            <li><a class="smooth-scroll ref active " data-scroll="home" href="#home"> الصفحة
                                    الرئيسية</a></li>
                            <li><a class="smooth-scroll ref" data-scroll="exercise" href="#exercise">تمارين</a></li>
                            <li><a class="smooth-scroll ref" data-scroll="report" href="#report">مقالات</a></li>
                            <li><a class="smooth-scroll ref" data-scroll="doctors" href="#doctors">الاطباء</a></li>
                            <li><a class="smooth-scroll ref" data-scroll="about" href="#about">حول</a></li>
                            <li><a class="smooth-scroll ref" data-scroll="stats" href="#stats">الحالة</a></li>
                            <li><a class="smooth-scroll ref" data-scroll="contact" href="#contact">تواصل معنا</a></li>
                            <li><a class="smooth-scroll ref" data-scroll="login" href="index.php">تسجيل
                                    الخروح</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
    </header>
    <!----------HOME--------------->

    <section id="home">
        <div id="home-cover" class="bg-parallax animated fadeIn ">
            <div style="height: 100%; width: 100% ; background-color: rgba(0,0,0,0.4)">

                <div id="home-content-box">
                    <div id="home-content-box-inner" class="text-center">
                        <div id="home-heading" class="animated zoomIn">
                            <h3> أعتني بنفسك<br> لا تترد قم بالاعتناء بصحتك النفسية</h3>

                        </div>
                        <div id="home-btn" class="animated zoomIn">
                            <a class="btn btn-lg btn-general btn-white" href="#" role="button" title="log-in"
                                onclick="open_pop()">سجل دخولك الآن</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- --------------------------تمارين--------------------------------- -->
    <section id="exercise">
        <div class="content-box">
            <div class="content-title wow animated bounceInDown" data-wow-duration="2s" data-wow-delay="0.5">
                <h3> التمارين </h3>
                <div class="content-title-underline"></div>
            </div>

            <div class="container">
                <!--===================================new class col-sm-6===========================================================-->
                <div class="row wow animated bounceInUp" data-wow-duration="2s" data-wow-delay="0.5">



                    <?php
                    $ql = "select * from exc;";
                    $data = mysqli_query($conn, $ql);
                    while ($row = mysqli_fetch_assoc($data)) {
                        $t = $row['name'];
                        $icon = $row['icon'];
                        echo "     <a href=\"exercises.php\" style=\"display: block;text-decoration: none;\">
                    <div class=\"col-md-4 col-sm-6\">
                           <div class=\"exercise-item\">

                            <div class=\"exercise-item-icon\" >
                                <img src=\"imgs/"
                            . $icon .
                            "\" alt=\"face\">
                            </div>
                            <div class=\"exercise-item-title\">
                                <h3>" . $t . "</h3>
                            </div>
                            <div class=\"exercise-item-desc\">
                                <!--
                                <p>أظهرت إحدى الدراسات التي نشرت مؤخرا  ان الصداقة تحميك من الاكتئاب . كما أن الأصدقاء يساعدون أيضا في التقليل من خطر الإصابة بأمراض القلب ويعملون على تعزيز نظام المناعة . فالأصدقاء يشكلون حماية من الإجهاد والاكتئاب .
                                </p>
-->
                                <p>انقر لمشاهدة تمارين ونصائح تساعدك في تحطي
                                 " . $t . "
                                  </p>
                            </div>

                        </div>
                    </div>
                    </a>";
                    }
                    ?>

                </div>

            </div>
        </div>





    </section>

    <!---------------------------- حول----------------------------------    -->
    <section id="about">
        <!-------------  img  ------------>
        <div id="about-bg-diagonal" class="bg-parallax"></div>
        <!---------------  content    ------------------------------->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div id="about-content-box">
                        <div id="about-content-box-outer">
                            <div id="about-content-box-inner">
                                <div class="content-title wow animated bounceInDown" data-wow-duration="2s"
                                    data-wow-delay="0.5">
                                    <h3> نبدة عنا </h3>
                                    <div class="content-title-underline">
                                    </div>
                                </div>
                                <div id="about-desc" class="content-title wow animated bounceInUp"
                                    data-wow-duration="2s" data-wow-delay="0.5s">
                                    <p>عليك الاعتناء جيدا بصحتك انفسية زلقد تم تصميم هدا الموقع لتستطيع التحدث الى
                                        الاطباء النفسيين بكل سرية </p>
                                </div>
                                <div id="about-btn">
                                    <a class="smooth-scroll btn btn-lg btn-general btn-blue" href="#doctors"
                                        role="button">أطبائنا</a>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>
    <!----------------------------------------  مقالات--------------------------  -->
    <br>
    <section id="report" dir="ltr" lang="ar">
        <div class="content-box">
            <div class="content-title wow animated bounceInDown" data-wow-duration="2s" data-wow-delay="0.5">
                <h3> المقالات</h3>
                <div class="content-title-underline"></div>

            </div>
        </div>
        <div class="c">
            <div class="container">
                <div id="report-items" class="row img-design wow animated bounceInUp owl-theme owl-carousel"
                    data-wow-duration="2s" data-wow-delay="0.5">


                    <?php
                    $ql = "select * from articl;";
                    $data = mysqli_query($conn, $ql);
                    while ($row = mysqli_fetch_assoc($data)) {
                        $t = $row['content'];

                        echo "
                                            <div class=\"col-md-12\">
                                            <div class=\"img-wrapper\">
                    
                                                 <a href=\"imgs/" .
                            $t
                            . "\" title=\"rebort disc\">
                                                      <img  src=\"imgs/" .
                            $t
                            . "\" class=\"img-responsive\" >
                                                </a>
                                                <a class=\"smooth-scroll btn btn-lg btn-general btn-blue\" href=\"#\" role=\"button\" title=\"log-in\" onclick=\"open_pop()\">مشاهدة المقال</a>
                                            </div>
                                        </div>
                                        ";
                    }
                    ?>

                </div>
            </div>


        </div>
    </section>

    <!---------------------------------------- لاطباء--------------------------  -->
    <section id="doctors" dir="ltr" lang="ar">
        <div class="content-box">
            <div class="content-title wow animated bounceInDown" data-wow-duration="2s" data-wow-delay="0.5">
                <h3> أطباؤنا</h3>
                <div class="content-title-underline"></div>
            </div>
        </div>
        <div class="container">
            <div class="row wow animated  bounceInUp" data-wow-duration="2s" data-wow-delay="0.5">
                <div class="col-md-12">
                    <div id="doctors_team" class="owl-carousel owl-theme">


                        <?php

                        $ql = "select * from doctor;";
                        $data = mysqli_query($conn, $ql);
                        $count = 0;
                        while ($row = mysqli_fetch_assoc($data)) {
                            $name = $row['name']; //
                            $age = $row['age']; //
                            $email = $row['email']; //
                            $photo = $row['photo'];
                            $uni = $row['university']; //
                            $year = $row['gradYear']; //
                            $work = $row['placeOfWork']; //
                            // $date = $row['enterDate']; //
                        
                            $content = "يبلغ من العمر " . $age . "<br>" .
                                $uni . "تخرج من جامعة " . "<br>" .
                                "في سنة " . $year . "<br>"
                                . "يعمل لدى " . $work . "<br>" .
                                "<br>" .
                                " البريد الالكتروني للتواصل معه" . "<br>" . $email;

                            if (($count % 2) == 0) {
                                echo "<div class=\"doctors_member animated owl-animated-in \">
                        <img class =\"img-resize\"src=\"imgs/" .
                                    $photo
                                    . "\" class=\"img-responsive\">
                        <div class=\"doctors_member-info text-center\">
                            <h4>" .
                                    $name
                                    . "</h4>
                            <p class=\"doctors_member-about\">" .
                                    $content
                                    . "</p>
                            <div class=\"about-btn\">
                                <a class=\"btn btn-lg btn-general btn-blue\" href=\"chat.php\" role=\"button\">تواصل مع الطبيب</a>
                            </div>


                        </div>
                    </div>
                            ";

                            } else if (($count % 2) != 0) {
                                echo " <div class=\"doctors_member animated owl-animated-out \">
                            <img class =\"img-resize\" src=\"imgs/".
                            $photo."\" class=\"img-responsive\">
                            <div class=\"doctors_member-info text-center\">
                                <h4>" .
                                    $name
                                    . "</h4>
                                <p class=\"doctors_member-about\">" .
                                    $content
                                    . "</p>
                                <div class=\"about-btn\">
                                    <a class=\"btn btn-lg btn-general btn-blue\" href=\"chat.php\" role=\"button\">تواصل مع الطبيب</a>
                                </div>


                            </div>
                        </div>
                            ";
                            }
                            $count = $count + 1;
                        }


                        ?>






                    </div>
                </div>
            </div>
        </div>

    </section>

    <br><br>
    <!---------------------------------------المشاهدات وكزاااا--------------------------  -->
    <section id="stats">
        <div id="stat-cover" class="bg-parallax">
            <div class="content-box">
                <div class="content-title content-title-white wow animated bounceInDown" data-wow-duration="2s"
                    data-wow-delay="0.5">
                    <h3> تمتع براحة نفسية على الدوام</h3>
                    <div class="content-title-underline"></div>
                </div>
                <div class="container">
                    <!-- ==============================new class col-sm-6======================================-->
                    <div class="row text-center wow animated  bounceInLeft" data-wow-duration="2s" data-wow-delay="0.5">
                        <div class="col-md-3 col-sm-6">
                            <div class="stats-item">
                                <i class="fa fa-eye fa-5x"></i>
                                <h2><span class="counter">1999</span><span>+</span></h2>
                                <p>مشاهدات</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="stats-item">
                                <i class="fa fa-star-o fa-5x"></i>
                                <h2><span class="counter">1343</span><span>+</span></h2>
                                <p>مكافئات</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="stats-item">
                                <i class="fa fa-heart-o fa-5x"></i>
                                <h2><span class="counter">1999</span><span>+</span></h2>
                                <p>أعجابات</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="stats-item">
                                <i class="fa fa-check fa-5x"></i>
                                <h2><span class="counter">1999</span><span>+</span></h2>
                                <p>توصيات</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>

    <br>
    <!--------------------------------------التواصل    --------------------------------->
    <footer>
        <div id="contact" dir="rtl" lang="ar">
            <div class="container" dir="rtl" lang="ar">
                <div class="row">

                    <div class="col-md-12" dir="rtl" lang="ar">
                        <div id="contact-left">
                            <h3>care</h3>
                            <p>ان هدا الموقع يهتم بصحتك النفسيةويساعدك على الاسترخاء والتخلص من القلق</p>
                            <div id="contact-info">
                                <address>
                                    <strong style="color: white; font-size: medium;">العنوان</strong>
                                    <p>Palestien<br>
                                       Tubas </p>
                                </address>
                                <div id="phone-fax-email">
                                    <p><strong>الهاتف:</strong> <span>0943435</span><br>
                                        <strong>الأيميل:</strong> <span>info@care.com</span><br>
                                        <strong>الفاكس</strong> <span>0943435</span>
                                    </p>
                                </div>

                            </div>
                            <div class="social-list" dir="rtl" lang="ar">
                                <ul>
                                    <li><a href="#" class="social-icon icon-white"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-icon icon-white"><i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li><a href="#" class="social-icon icon-white"><i
                                                class="fa fa-youtube-play"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="footer-bottom" dir="rtl" lang="ar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="footer-copyrights" lang="ar">
                            <p>حقوق النشر محفوظه 2022</p>
                        </div>
                    </div>
                    <!--                    ================new class hidden-sm  hidden-xs==============================-->
                    <div class="col-md-6 hidden-sm hidden-xs">
                        <div id="footer-copyleft">
                            <ul>
                                <li><a class="smooth-scroll" href="#home"> الصفحة الرئيسية</a>/</li>
                                <li><a class="smooth-scroll" href="#exercise">تمارين</a>/</li>
                                <li><a class="smooth-scroll" href="#report">مقالات</a>/</li>
                                <li><a class="smooth-scroll" href="#doctors">الاطباء</a>/</li>
                                <li><a class="smooth-scroll" href="#about">حول</a>/</li>
                                <li><a class="smooth-scroll" href="#" onclick="open_pop()">تسجيل الدخول</a>/</li>
                                <li><a class="smooth-scroll" href="#">انشاء حساب</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!--===================================================================
                 login
========================================================================-->
    <div id="login-pop" class="logpop" dir="rtl" lang="ar">
        <div class="loginBox" id="login">
            <a class="btn btn-lg btn-general " id="close-pop" href="#" role="button" title="log-in"
                onclick="close_pop()">
                <i class="fa fa-close" style="color:black; font-size: 22px;" aria-hidden="true"></i>
            </a>
            <img src="imgs/user.png" alt="user" class="avatar">
            <h1 class="loginbox">تسجيل الدخول</h1>
            <form dir="rtl" lang="" method="POST" action="">
                <p>اسم المستخدم</p>
                <input type="email" name="email" placeholder="ادخل البريد الالكتروني هنا" required>
                <p style="margin-bottom:5px;margin-top: 5px ">كلمة السر</p>
                <input type="password" name="password" placeholder="أدخل كلمة السر هنا" required>
                <input type="submit" name="submit" value="تسجيل الدخول">
                <p id="logEr" style="color: red; font-size: smaller; width: max-content; margin-top: 0; display: none">
                    هناك خطأ في كلمة السر او البريد الالكتروني</p>
                <!-- <a id="loginlink1" href="#">هل نسيت كلمة السر؟</a><br> -->
                <a id="loginlink2" href="signUp.php"> ليس لديك حساب؟</a>
            </form>


        </div>
    </div>




    <!-- ======================================================================== 
                            Chat
============================================================================= -->

    <!--   temporary space -->


    <!-------------libraries-------- -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="js/animate/jquery.min.js"></script>
    <script src="js/animate/popper.js/dist/popper.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/animate/wow.min.js"></script>
    <script src="js/magnific/jquery.magnific-popup.min.js"></script>
    <script src="js/owlCarousel/owl.carousel.min.js"></script>
    <!-- ===============index.js===============-->
    <script type="text/javascript" src="js/index.js"></script>
    <script src="js/counterUp/jquery.waypoints.min.js"></script>
    <script src="js/counterUp/jquery.counterup.min.js"></script>
    <!-- <script src="JS/easing.js"></script> -->

</body>

</html>




<!-- Log in  -->
<?php
echo '<script> console.log("hi")</script> ';

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $pass = $_POST['password'];

    $qu1 = "select * from patient where email= '$email' && password = '$pass'";
    $qu2 = "select * from doctor where email= '$email' && password = '$pass'";
    $qu3 = "select * from admin where email= '$email' && password = '$pass'";
    echo '<script> console.log("inside post")</script> ';

    if (mysqli_num_rows(mysqli_query($conn, $qu1)) > 0) {
        echo '<script> console.log("patient")</script> ';
        // $_SESSION['email'] = $email;
        echo "<script> window.location.assign('patient.php'); </script>";
        header("Location: patient.php");
    } elseif (mysqli_num_rows(mysqli_query($conn, $qu2)) > 0) {
        // $_SESSION['email'] = $email;
        echo "<script> window.location.assign('doctor.php'); </script>";
        header("Location: doctor.php");
    } elseif (mysqli_num_rows(mysqli_query($conn, $qu3)) > 0) {
        // $_SESSION['email'] = $email;
        echo "<script> window.location.assign('admin.php'); </script>";
        header("Location: admin.php");
    } else {
        echo '<script>
        document.getElementById("login-pop").style.display = "block";
        document.getElementById("logEr").style.display = "block";</script>';
    }
} else if (isset($_POST['signup'])) {

    header("Location:signup.php");

}
?>