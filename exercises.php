<!-- 
<?php
$conn = mysqli_connect('localhost', 'root', '', 'webprojectdb');
error_reporting(0);
mysqli_set_charset($conn, 'utf8');
$errors = array('password' => "", 'all' => "");
session_start();
?> -->

<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width:device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
    <!--  title and icons-->
    <title>Care</title>
    <link rel="shortcut icon" href="imgs/icon.PNG">
    <!--  libraries  -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/magnific/magnific-popup.css" rel="stylesheet " type="text/css">
    <link href="css/owlCarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owlCarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="FlipClock/compiled/flipclock.css"> -->

    <!--font awesome-->
    <!--    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--------------Animation---------------->
    <link rel="stylesheet" href="css/animate/animate.min.css">
    <link rel="stylesheet" href="css/animate/animate.css">
    <!--  style css  -->
    <link rel="stylesheet" href="css/exercises.css">


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
                            <li><a class="smooth-scroll" href="#home"> الصفحة الرئيسية</a></li>
                            <li><a class="smooth-scroll" href="#sadness">الأكتئاب</a></li>
                            <li><a class="smooth-scroll" href="#angry">العصبية</a></li>
                            <li><a class="smooth-scroll" href="#fearless">الخوف</a></li>
                            <li><a class="smooth-scroll" href="#worry">القلق</a></li>
                            <li><a class="smooth-scroll" href="#effuse">الأرق</a></li>
                            <li><a class="smooth-scroll" href="#bipolar">اضطراب ثنائي القطب</a></li>
                            <li><a class="smooth-scroll" href="#pictures">صور</a></li>
                            <li><a class="smooth-scroll" href="#videos">فيديوهات</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </nav>
    </header>

    <section id="home">
        <!-- background image  -->
        <div id="home-cover" class="bg-parallax animated fadeIn ">
            <div style="height: 100%; width: 100% ; background-color: rgba(0,0,0,0.4)">
                <div id="home-content-box">
                    <div id="home-content-box-inner" class="text-center">
                        <div id="home-heading" class="animated zoomIn">
                            <h3> نحن هنا لنهتم بك<br> ستجد هنا خليطاً من التمارين لمعالجة امراض مختلفة</h3>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="sadness">
        <div class="content-box">
            <div class="content-title wow animated bounceInDown" data-wow-duration="2s" data-wow-delay="0.5">
                <h3> الأكتئاب </h3>
                <div class="content-title-underline"></div>
            </div>

        </div>
        <div class="container">
            <div class="row wow animated  bounceInUp" data-wow-duration="2s" data-wow-delay="0.5">
                <div class="col-md-6">
                    <img src="imgs/friend.jpg" id="friend" class="all img-responsive bg-parallax ">
                </div>
                <div class="col-md-6">
                    <div class="all-content-box">
                        <div class="all-content-box-outer">
                            <div class="all-content-box-inner">
                                <div class="content-title wow animated bounceInUp  all-desc" data-wow-duration="2s"
                                    data-wow-delay="0.5s all-desc">
                                    <p> أظهرت إحدى الدراسات التي نشرت مؤخرا ان الصداقة تحميك من الاكتئاب, كما أن
                                        الأصدقاء يساعدون أيضا في التقليل من خطر الإصابة بأمراض القلب ويعملون على تعزيز
                                        نظام المناعة , فالأصدقاء يشكلون حماية من الإجهاد والاكتئاب</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h2>اليك بعض التمارين </h2>

            <button type="button" class="btn btn-info btn_generic" data-toggle="collapse" data-target="#demo"
                onclick="document.getElementById('txt').innerText=convTS(600);">التمرين الاول</button>
            <div id="demo" class="collapse">
                <p>تعد الرياضة من افضل التمارين لمكافحة الاكتئاب والامراض الاخرى <br> هيا لنمارس الرياضة </p>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <form name="form1"
                                style="overflow: hidden;  background-color: #34a4d0;width: 200px;height: 200px;border-radius: 50%;/*! align-content: center; */position: absolute;">
                                <div class="timer">
                                    <p id="txt" class="time-display"
                                        style="text-align: center;color: white;font-size: 35px;font-weight: 800;">
                                        10m:00s</p>
                                    <button type="button" value="start" class="btn btn-lg btn-timer"
                                        onclick="startT('txt',600)">أبدأ</button>
                                    <button type="button" value="stop" class="btn btn-lg  btn-timer"
                                        onclick="stopT()">توقف</button>
                                    <button type="button" value="stop" class="btn btn-lg  btn-timer"
                                        onclick="repeatT()">اعادة</button>
                                </div>

                            </form>

                        </div>
                        <div class="col-md-8">
                            <p>قم بالركض لمدة عشر دقائق</p>
                            <img src="imgs/sport/run.gif" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-info btn btn_generic" data-toggle="collapse"
                data-target="#demo2">التمرين الثاني</button>
            <div id="demo2" class="collapse">
                <p>تعد الرياضة من افضل التمارين لمكافحة الاكتئاب والامراض الاخرى <br> هيا لنمارس الرياضة </p>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <form name="form2"
                                style="overflow: hidden;  background-color: #34a4d0;width: 200px;height: 200px;border-radius: 50%;/*! align-content: center; */position: absolute;">
                                <div class="timer">
                                    <p id="counter1" class="time-display"
                                        style="text-align: center;color: white;font-size: 35px;font-weight: 800;"></p>
                                    <p style="text-align: center;color: white;font-size: 25px;font-weight: 500;"
                                        id="message1"></p>

                                    <button type="button" id="bt" value="start" class="btn btn-lg btn-timer"
                                        onclick="startC()" style="margin-right: 25px;">ابدأ</button>
                                    <!--                                    <button type="button" value="stop" class="btn btn-lg  btn-timer"onclick="stopT()">توقف</button>-->
                                    <button type="button " id="btn" value="counter_1" class="btn btn-lg  btn-timer"
                                        onclick="counter_1();" style="margin-right: 25px;">اعادة</button>
                                </div>

                            </form>
                        </div>
                        <div class="col-md-8">
                            <p>قم بعمل التمرين التاي 10 مرات</p>
                            <img src="imgs/sport/sport3.gif" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="angry">
        <div class="content-box">
            <div class="content-title wow animated bounceInDown" data-wow-duration="2s" data-wow-delay="0.5">
                <h3> العصبية </h3>
                <div class="content-title-underline"></div>
            </div>

        </div>
        <div class="container">
            <div class="row wow animated  bounceInUp" data-wow-duration="2s" data-wow-delay="0.5">
                <div class="col-md-6">
                    <img src="imgs/talk.jpg" id="talk" class="all img-responsive bg-parallax ">
                </div>
                <div class="col-md-6">
                    <div class="all-content-box">
                        <div class="all-content-box-outer">
                            <div class="all-content-box-inner">
                                <div class="content-title wow animated bounceInUp all-desc" data-wow-duration="2s"
                                    data-wow-delay="0.5s">
                                    <p>احرص على التفريغ النفسي من خلال التعبير عما بداخلك من هموم ومخاوف لشخص مقرب
                                        تستطيع أن تتحدث معه عما بداخلك.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <h2>اليك بعض التمارين </h2>

            <button type="button" class="btn btn-info btn_generic" data-toggle="collapse" data-target="#demo6"
                onclick="document.getElementById('txt2').innerText=convTS(300)">التمرين الاول</button>
            <div id="demo6" class="collapse">
                <p> 1- قم بتحديد أهدافك وأعطيها الوقت الكافى من التركيز.
                    <br>

                    2- أعط نفسك الوقت الكافى للتفكير بشكل إيجابى أثناء اتخاذك لأى قرار فى حياتك، ولا تستلم للتوتر والضغط
                    النفسى.
                    <br>
                    3- يجب عليك أن تفهم جيدا أن العصبية لا تساعد على حل أى مشكلة، وأن هذه المشكلة ليست دائما، ولذلك عليك
                    التدبر باتخاذ القرار السليم فى حياتك.
                    <br>
                    4- قم باختيار الأشخاص الإيجابيين فى حياتك، وابتعد عن الأشخاص الذين يسببون لك الأذى.
                    <br>
                    5- تنزه مع الأشخاص المقربين لك، والذين تشعر معهم بالراحة، فهذا يساعدك على التخلص من الضغوط اليومية
                    ويخلصك
                </p>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-8">
                            <p></p>
                            <img src="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-info btn btn_generic" data-toggle="collapse" data-target="#demo5"
                onclick=" document.getElementById('txt2').innerText=convTS(300);">التمرين الثاني</button>
            <div id="demo5" class="collapse">
                <p> </p>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <form name="form1"
                                style="overflow: hidden;  background-color: #34a4d0;width: 200px;height: 200px;border-radius: 50%;/*! align-content: center; */position: absolute;">
                                <div class="timer">
                                    <p id="txt2" class="time-display"
                                        style="text-align: center;color: white;font-size: 35px;font-weight: 800;">
                                        10m:00s</p>
                                    <button type="button" value="start" class="btn btn-lg btn-timer"
                                        onclick="startT('txt2',300)">أبدأ</button>
                                    <button type="button" value="stop" class="btn btn-lg  btn-timer"
                                        onclick="stopT()">توقف</button>
                                    <button type="button" value="stop" class="btn btn-lg  btn-timer"
                                        onclick="repeatT()">اعادة</button>
                                </div>

                            </form>
                        </div>
                        <div class="col-md-8">
                            <p> أن يدخل الشخص في حالة من التخيل يضع فيها صورة ذهنية لنفسه يرى فيها مثلا أنه لا يغضب،
                                وأنه هادئ، ويغمض عينيه ويتخيلها لمدة خمس دقائق أو سبع دقائق.</p>
                            <img src="imgs/sport/sport6.gif" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fearless">
        <div class="content-box">
            <div class="content-title wow animated bounceInDown" data-wow-duration="2s" data-wow-delay="0.5">
                <h3> الخوف </h3>
                <div class="content-title-underline"></div>
            </div>

        </div>
        <div class="container">
            <div class="row wow animated  bounceInUp" data-wow-duration="2s" data-wow-delay="0.5">
                <div class="col-md-6">
                    <img src="imgs/breath.jpg" id="confront" class="all img-responsive bg-parallax ">
                </div>
                <div class="col-md-6">
                    <div class="all-content-box">
                        <div class="all-content-box-outer">
                            <div class="all-content-box-inner">
                                <div class="content-title wow animated bounceInUp all-desc" data-wow-duration="2s"
                                    data-wow-delay="0.5s">
                                    <h2>التنفس العميق</h2>
                                    <p> تُعتبر ممارسة تمرين التنفّس العميق من التمارين التي تُساعد على التخلّص من الخوف،
                                        وتأتي هذه النتيجة من منطلق أنّه أثناء تطبيقه
                                        لا بدّ للفرد من التركيز على حالة الذعر التي يمر بها، فبذلك سيُدرّب عقله على
                                        التعايش مع هذه الحالات،
                                        وبالتالي سيكون قادراً على التخلّص من الخوف،
                                        ولتطبيق هذه الممارسة يُراعى أن توضع راحة اليد على منطقة المعدة، ثمّ تُمارس عملية
                                        التنفس بشكل بطيء وعميق.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <h2>اليك بعض التمارين </h2>

            <button type="button" class="btn btn-info btn_generic" data-toggle="collapse" data-target="#demo3">التمرين
                الاول</button>
            <div id="demo3" class="collapse">
                <h4>التنفس العميق</h4>
                <p> تُعتبر ممارسة تمرين التنفّس العميق من التمارين التي تُساعد على التخلّص من الخوف،
                    وتأتي هذه النتيجة من منطلق أنّه أثناء تطبيقه
                    لا بدّ للفرد من التركيز على حالة الذعر التي يمر بها، فبذلك سيُدرّب عقله على التعايش مع هذه الحالات،
                    وبالتالي سيكون قادراً على التخلّص من الخوف،
                    ولتطبيق هذه الممارسة يُراعى أن توضع راحة اليد على منطقة المعدة، ثمّ تُمارس عملية التنفس بشكل بطيء
                    وعميق.
                    <strong>تنفس بعمق كما في الشكل التالي من خمس الى سبع مرات</strong>
                </p>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <!--                            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#timer" onclick="setup();">أبدأ</button>-->
                            <p id="timer3"></p>
                        </div>
                        <div class="col-md-8">
                            <p>ق</p>
                            <img src="imgs/sport/breath.gif" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-info btn btn_generic" data-toggle="collapse"
                data-target="#demo4">التمرين الثاني</button>
            <div id="demo4" class="collapse">
                <p> </p>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <!--                            ==============================================================-->
                        </div>
                        <div class="col-md-8">
                            <p> أن يدخل الشخص في حالة من التخيل يضع فيها صورة ذهنية لنفسه يرى فيها مثلا أنه لا يغضب،
                                وأنه هادئ، ويغمض عينيه ويتخيلها لمدة خمس دقائق أو سبع دقائق.</p>
                            <img src="imgs/sport/sport6.gif" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="worry">
        <div class="content-box">
            <div class="content-title wow animated bounceInDown" data-wow-duration="2s" data-wow-delay="0.5">
                <h3> القلق </h3>
                <div class="content-title-underline"></div>
            </div>

        </div>
        <div class="container">
            <div class="row wow animated  bounceInUp" data-wow-duration="2s" data-wow-delay="0.5">
                <div class="col-md-6">
                    <img src="imgs/laugh.jpg" id="worrying" class="all img-responsive bg-parallax ">
                </div>
                <div class="col-md-6">
                    <div class="all-content-box">
                        <div class="all-content-box-outer">
                            <div class="all-content-box-inner">
                                <div class="content-title wow animated bounceInUp all-desc" data-wow-duration="2s"
                                    data-wow-delay="0.5s">
                                    <p>الضّحك؛ حيث يساعد الضّحك على إفراز هرمون التستوستيرون وهو هرمون السعادة، ويساعد
                                        على الاسترخاء، ويحسّن تدفّق الدم في الأوعية الدمويّة، ويحسّن المزاج.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <h2>اليك بعض النصائح للتخفيف من القلق </h2>

            <button type="button" class="btn btn-info btn_generic" data-toggle="collapse"
                data-target="#exe">الغزاء</button>
            <div id="exe" class="collapse">
                <p>الحرص على تناول غذاءٍ صحيٍّ متنوّعٍ ومتوازن
                </p>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <!--                            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#timer4" onclick="setup();">أبدأ</button>-->
                            <p id="timer4"></p>
                        </div>
                        <div class="col-md-8">
                            <p></p>
                            <img src="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-info btn btn_generic" data-toggle="collapse" data-target="#exe2">خذ قسط
                من الراحة والترفيه</button>
            <div id="exe2" class="collapse">
                <p> </p>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            w2
                        </div>
                        <div class="col-md-8">
                            <p>الحرص على زيادة الوقت المخصَّص للرّاحة والتّرفيه، والتّفكير بالعطلات، وعمل تغيير؛
                                فالأشخاص الذين يُعانون من الضّغوطات النفسيّة يحتاجون إلى قسطٍ أكبر من الرّاحة والتّرفيه
                                عن النفس أكثر من غيرهم، لذلك يجب إيجاد جوٍّ من الاسترخاء، وإسعاد النّفس بعيدًا عن جوّ
                                الضّغوطات النفسيّة</p>
                            <!--                            <img src="imgs/sport/sport6.gif" class="img-responsive">-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="effuse">
        <div class="content-box">
            <div class="content-title wow animated bounceInDown" data-wow-duration="2s" data-wow-delay="0.5">
                <h3> الأرق </h3>
                <div class="content-title-underline"></div>
            </div>

        </div>
        <div class="container">
            <div class="row wow animated  bounceInUp" data-wow-duration="2s" data-wow-delay="0.5">
                <div class="col-md-6">
                    <img src="imgs/sleep-.jpg" id="sleep" class="all img-responsive bg-parallax ">
                </div>
                <div class="col-md-6">
                    <div class="all-content-box">
                        <div class="all-content-box-outer">
                            <div class="all-content-box-inner">
                                <div class="content-title wow animated bounceInUp all-desc" data-wow-duration="2s"
                                    data-wow-delay="0.5s">
                                    <p>هناك الكثير من الأشخاص الذين يعانون بصفة مستمرة من مشكلة الأرق واضطراب النوم،
                                        خاصة إذا كان الشخص
                                        يعاني من مشكلة ما أو تفكر في موضوع مُعين، مما يقل عدد ساعات النوم، ويشعر
                                        بمعاناته الحقيقية مع الأرق
                                        ، ولا يستطيع النوم بطريقة طبيعية.<br> <strong>هنا بعض النصائح لتساعدك بالتمتع
                                            بنوم هادئ </strong>
                                    </p></strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <h2>اليك بعض النصائح </h2>

            <button type="button" class="btn btn-info btn_generic" data-toggle="collapse" data-target="#exe3">اعداد غرفة
                النوم</button>
            <div id="exe3" class="collapse">
                <button type="button" class="btn btn-info btn_generic" data-toggle="collapse" data-target="#room1">أن
                    تكون غرفة نومك هادئة</button>
                <div id="room1" class="container collapse">
                    <div class="row">
                        <div class="col-md-4">
                            <!--                            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#timer5" onclick="setup();">أبدأ</button>-->
                            <p id="timer5"></p>
                        </div>
                        <div class="col-md-8">
                            <p>تساعد غرفة النوم الهادئة فى النوم والاسترخاء بشكل أفضل وأسرع، بالإضافة إلى أنه يجب أن
                                تكون درجة حرارة الغرفة ملائمة للنوم، وعادة ما تكون ما بين 65 إلى 85 درجة، وذلك للاستمتاع
                                بنوم هادئ عميق.
                                وإن كنت ممن يعانون من مشكلة التعرق الليلي عليك في هذه الحالة البحث عن طريقة تبريد
                                الوسادة والحفاظ على رطوبتها، علاوة علي أن تقوم بتجهيز الأغطية المناسبة.</p>
                            <!--                            <img src="imgs/sport/run.gif" class="img-responsive">-->
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-info btn_generic" data-toggle="collapse" data-target="#room2">إطفاء
                    الأنوار وجميع الأجهزة الموجودة بالغرفة</button>
                <div id="room2" class="container collapse">
                    <div class="row">
                        <div class="col-md-4">
                            <!--                            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#timer5" onclick="setup();">أبدأ</button>-->
                            <p></p>
                        </div>
                        <div class="col-md-8">
                            <p>الظلام يساعد بشكل كبير العقل على الاسترخاء، وطلب النوم، وإفراز الهرمونات التي تعمل على
                                تحفيز العقل والجسد على النوم، وإن تركت الأجهزة تعمل وظللت تُحدق في التلفاز لفترة طويلة،
                                يقوم العقل على الفور بإصدار مجموعة من الهرمونات تعمل على عدم وصول النوم، وبالتالي يجب أن
                                تكون غرفتك مظلمة، وتغلق كافة الأجهزة قبل النوم على الأقل بـ60 دقيقة حتى تستطيع</p>
                            <!--                            <img src="imgs/sport/run.gif" class="img-responsive">-->
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-info btn_generic" data-toggle="collapse" data-target="#room3">تأكد
                    من أن الفراش مناسب للنوم</button>
                <div id="room3" class="container collapse">
                    <div class="row">
                        <div class="col-md-4">
                            <!--                            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#timer5" onclick="setup();">أبدأ</button>-->
                            <p></p>
                        </div>
                        <div class="col-md-8">
                            <p>يجب أيضاً أن تقوم بالاستغناء عن جميع الأجهزة الإلكترونية بغرفتك، مثل التلفزيون أو جهاز
                                البلاى ستيشن، وعدم استخدام جهاز الحاسب الآلي أو أي جهاز لوحي وأنت على السرير، وذلك لأن
                                غرفة النوم معروف عنها أنها مكان للراحة، علاوة على أنه يجب أن تقوم بإغلاق هاتفك بمجرد
                                ذهابك إلى النوم، أو على الأقل ضبطه في وضع عدم الإزعاج وعدم وضعه بجوارك على السرير، حتى
                                لا يكون مصدر للإغراء، وتقوم بفتح الإنترنت والتصفح ويذهب عنك النوم، وتعود من جديد إلى
                                الأرق.</p>
                            <!--                            <img src="imgs/sport/run.gif" class="img-responsive">-->
                        </div>
                    </div>
                </div>

            </div>
            <button type="button" class="btn btn-info btn btn_generic" data-toggle="collapse" data-target="#exe4">تهيئة
                الجسم للنوم</button>
            <div id="exe4" class="collapse">
                <button type="button" class="btn btn-info btn_generic" data-toggle="collapse" data-target="#self1">ضرورة
                    أخذ دش دافئ</button>
                <div id="self1" class="container collapse">
                    <div class="row">
                        <div class="col-md-4">
                            <!--                            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#timer5" onclick="setup();">أبدأ</button>-->
                            <p id="timer7">ب أخذ حمام دافئ لأنه يعد إحدى الطرق المقاومة للأرق، والتي تساعد على النوم
                                بشكل سريع، حيث أن العقل يكون مستعد لوضع الهدوء وتقليل عامل التوتر والقلق، وهذه العوامل
                                إذا اختفت تكون مساعدة على عدم حدوث الأرق، الحمام الدافئ يكون عامل مساعد على رفع حرارة
                                الجسم، مما يساعد بصورة كبيرة العقل على إفراز هرمونات النوم.

                                يمكنك أن تقوم بوضع قطرات بسيطة من الزيوت العطرية إلى الماء، مثل البابونج أو اللافندر،
                                والتي لها تأثير كبير على عملية الاسترخاء.
                                من الأفضل البقاء في الماء مدة لا تقل عن ثلث الساعة، على أن تكون درجة حرارة الماء 100
                                درجة.
                            </p>
                        </div>
                        <div class="col-md-8">
                            <p></p>
                            <!--                            <img src="imgs/sport/run.gif" class="img-responsive">-->
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-info btn_generic" data-toggle="collapse" data-target="#self2">تناول
                    مشروب خفيف دافئ قبل الذهاب إلى النوم</button>
                <div id="self2" class="container collapse">
                    <div class="row">
                        <div class="col-md-4">
                            <!--                            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#timer5" onclick="setup();">أبدأ</button>-->
                            <p></p>
                        </div>
                        <div class="col-md-8">
                            <p> تناول الوجبات الدسمة قبل الذهاب إلي النوم من الأمور غير المُستحبة والتي تدفع إلى الأرق،
                                وبالتالي يُفضل أن يتم الامتناع عن تناول الوجبات الدسمة قبل النوم مُباشر، علي أن لا تقوم
                                بالذهاب إلى الفراش وأنت جائع، وبالتالي فأفضل الحلول في هذه الحالة أن تقوم بتناول وجبة
                                خفيفة مكونة من الفاكهة أو الزبادي منزوع الدسم أو قليل الدسم، أو تناول الشاي الأخضر، أو
                                كوب كبير من الحليب خالي الدسم، كل هذه الوجبات تساعد في إفراز هرمونات النوم وتحد من
                                الأرق.

                                إذا أردت أن تتناول وجبة خفيفة قبل النوم لابد أن تحتوي على الكربوهيدرات المعقدة، مثل خبز
                                الحبوب الكاملة، والتي تساهم بصورة كبيرة في إنتاج هرمون السيروتونين، وهو هرمون السعادة
                                الذي يعمل على تعزيز عملية الاسترخاء، وبالتالي يكون دافع لاستدعاء النوم.
                                من الوجبات الخفيفة اللوز، البسكويت حليب دافئ منزوع الدسم، وكوب من الفشار بزيت خفيف، قطعة
                                جبن قريش.
                            </p>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-info btn_generic" data-toggle="collapse"
                    data-target="#self3">ارتداء ملابس نوم مريحة</button>
                <div id="self3" class="container collapse">
                    <div class="row">
                        <div class="col-md-4">
                            <!--                            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#timer5" onclick="setup();">أبدأ</button>-->
                            <p>قبل الذهاب إلى النوم يجب البحث عن ملابس نوم مريحة، لأن الراحة في النوم تكون سبب أصيلاً
                                للتخلص من الأرق ومواصلة النوم بكل هدوء، وبالتالي فإن من الضروري ارتداء "بيجامة" تكون
                                مناسبة للنوم ومصنوعة من مواد قطنية.</p>
                        </div>
                        <div class="col-md-8">
                            <p></p>
                            <!--                            <img src="imgs/sport/run.gif" class="img-responsive">-->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="bipolar">
        <div class="content-box">
            <div class="content-title wow animated bounceInDown" data-wow-duration="2s" data-wow-delay="0.5">
                <h3> اضطراب ثنائي القطب</h3>
                <div class="content-title-underline"></div>
            </div>

        </div>
        <div class="container">
            <div class="row wow animated  bounceInUp" data-wow-duration="2s" data-wow-delay="0.5">
                <div class="col-md-6">
                    <img src="imgs/sports.jpg" id="ppp" class="all img-responsive bg-parallax">
                </div>
                <div class="col-md-6">
                    <div class="all-content-box">
                        <div class="all-content-box-outer">
                            <div class="all-content-box-inner">
                                <div class="content-title wow animated bounceInUp all-desc" data-wow-duration="2s"
                                    data-wow-delay="0.5s">
                                    <p>النشاط البدني هو علاج طبيعي فعال ضد الاكتئاب ومشاكل النوم وحتى لتقوية جهاز
                                        المناعة ومكافحة الالام، ودمج النشاط البدني مع الروتين اليومي وسيلة رائعة لعلاج
                                        الاضطراب الثنائي القطب دون أدوية.

                                        الروتين اليومي، النشاط البدني، الوقت المخصص للعائلة والأصدقاء والنوم الجيد في
                                        الليل جميعها أطراف معادلة ناجحة للحفاظ على حالة مزاجية مستقرة، والحد من تكرار
                                        نوبات الهوس والاكتئاب.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <h2>اليك بعض التمارين </h2>

            <button type="button" class="btn btn-info btn_generic" data-toggle="collapse" data-target="#exe5">التمرين
                الاول</button>
            <div id="exe5" class="collapse">
                <p>تى <br> هيا لنمارس الرياضة </p>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#timer6"
                                onclick="setup();">أبدأ</button>
                            <p id="timer6"></p>
                        </div>
                        <div class="col-md-8">
                            <p>قم بعمل التمرين التالي من عشر الى عشرين مرة</p>
                            <img src="imgs/sport/sport2.gif" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-info btn btn_generic" data-toggle="collapse"
                data-target="#exe6">التمرين الثاني</button>
            <div id="exe6" class="collapse">
                <p> </p>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            العداد هنااااااااا
                        </div>
                        <div class="col-md-8">
                            <p>قم بعم التمرين لمدة خمس دقائق</p>
                            <img src="imgs/sport/sport4.gif" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pictures" dir="ltr" lang="ar">
        <div class="content-box">
            <div class="content-title wow animated bounceInDown" data-wow-duration="2s" data-wow-delay="0.5">
                <h3> صور مريحة للنفس</h3>
                <div class="content-title-underline"></div>

            </div>
        </div>
        <div class="c">
            <div class="container">
                <div id="pictures-items" class="row img-design wow animated bounceInUp owl-theme owl-carousel"
                    data-wow-duration="2s" data-wow-delay="0.5">
                    <div class="col-md-12">
                        <div class="img-wrapper">
                            <a href="imgs/blue/1.jpg" title="report disc">
                                <img src="imgs/blue/1.jpg" class="img-responsive" alt="الاكتئاب">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="img-wrapper">
                            <a href="imgs/blue/2.jpg" title="report disc">
                                <img src="imgs/blue/2.jpg" class="img-responsive" alt="الاكتئاب">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="img-wrapper">
                            <a href="imgs/blue/3.jpg" title="rebort disc">
                                <img src="imgs/blue/3.jpg" class="img-responsive" alt="الاكتئاب">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="img-wrapper">
                            <a href="imgs/blue/4.jpg" title="report disc">
                                <img src="imgs/blue/4.jpg" class="img-responsive" alt="الاكتئاب">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="img-wrapper">
                            <a href="imgs/blue/5.jpg" title="report disc">
                                <img src="imgs/blue/5.jpg" class="img-responsive" alt="الاكتئاب">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="img-wrapper">
                            <a href="imgs/blue/6.jpg" title="rebort disc">
                                <img src="imgs/blue/6.jpg" class="img-responsive" alt="الاكتئاب">
                            </a>
                        </div>
                    </div>


                </div>
            </div>


        </div>
    </section>

    <section id="videos" dir="ltr" lang="ar">
        <div class="content-box">
            <div class="content-title wow animated bounceInDown" data-wow-duration="2s" data-wow-delay="0.5">
                <h3>فيديوهات مريحة للنفس</h3>
                <div class="content-title-underline"></div>

            </div>
        </div>
        <div class="c">
            <div class="container">
                <div id="videos-items" class="row img-design wow animated bounceInUp owl-theme owl-carousel"
                    data-wow-duration="2s" data-wow-delay="0.5">
                    <div class="col-md-12">
                        <div class="img-wrapper">
                            <a href="https://www.youtube.com/embed/H3X4ySpOgyA" title="report disc">
                            </a> <iframe width="80%" height="400" src="https://www.youtube.com/embed/H3X4ySpOgyA"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="img-wrapper">
                            <a href="https://www.youtube.com/embed/fMQuQQpuptc" title="report disc">
                                <iframe width="80%" height="400" src="https://www.youtube.com/embed/fMQuQQpuptc"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="img-wrapper">
                            <a href="https://www.youtube.com/embed/gTeGLGPP9WY" title="rebort disc">
                                <iframe width="80%" height="315" src="https://www.youtube.com/embed/gTeGLGPP9WY"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe> </a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>





    <!-------------libraries-------- -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="js/exercises.js"></script> -->
    <script src="js/animate/jquery.min.js"></script>

    <script src="js/popper.js/dist/popper.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/animate/wow.min.js"></script>
    <script src="js/magnific/jquery.magnific-popup.min.js"></script>
    <script src="js/owlCarousel/owl.carousel.min.js"></script>
    <!-- ===============index.js===============-->
    <script src="js/counterUp/jquery.waypoints.min.js"></script>
    <script src="js/counterUp/jquery.counterup.min.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/exercises.js"></script>
    <!-- <script src="FlipClock/compiled/flipclock.min.js"></script> -->
</body>

</html>