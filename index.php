<?php 
$result="";
if(isset($_POST['submit'])){
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->Host='mail.team-fahmi.my.id';
    $mail->Port=465;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='ssl';
    $mail->Username='customercare@team-fahmi.my.id';
    $mail->Password='';
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('customercare@team-fahmi.my.id');
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    $mail->isHTML(true);
    $mail->Subject='Form Client : ' .$_POST['name'];
    $mail->Body='<h3>Nama   : '.$_POST['name'].'<br> Email  : '.$_POST['email'].'<br>No HP  : '.$_POST['hp'].'<br>Alamat    : '.$_POST['alamat'].'<br>Kebutuhan : '.$_POST['msg'].'</h3>';
    if(!$mail->send()){
    $result = "Something went worng. Please try again.";
    }
    else {
        $result="Thanks " .$_POST['name']. " for contacting us. We'll get back to you soon! See you..!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
    <!-- Component -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fahmi Net - IT Consultant</title>
    <meta
    name="description"           
    content="Kami adalah sebuah team yang bergerak di bidang IT Consultant.
    Phone: +62-897-9023-149. Email: customercare@team-fahmi.my.id 
    Copyrights © 2021 Fahmi Technology - All Rights Reserved"/>
    <meta name="robots" content="index,follow" />
    <meta name="DC.title" content="Fahmi Net - IT Consultant" />
    <meta
    name="keywords"
    content="team-fahmi,
    fahmi net,
    fahmi,
    team-fahmi.my.id,
    website fahmi net,
    website fahmi,
    bikin website murah,
    buat web murah,
    harga desain web,
    harga desain website,
    web design murah,
    jasa aplikasi web,
    jasa bikin web"/>
    <meta
    name="author"
    content="Fahmi Rinaldi"/>
    <meta http-equiv="Content-Type" content="text/html"/>
    <link rel="icon" type="image/svg" sizes="32x32" href="/img/favicon.svg">
    <link rel="icon" type="image/svg" sizes="96x96" href="/img/favicon.svg">
    <link rel="icon" type="image/svg" sizes="16x16" href="/img/favicon.svg">
    <!-- Close Component -->
    <link rel="canonical" href="https://team-fahmi.my.id/" />
    <link rel="stylesheet" href="./css/style.css" />
<!-- Google Font -->
    <!-- Truculenta Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Truculenta:wght@100;200;300;400;500;600;700;800;900&display=swap">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<!-- Javascript -->    
    <!-- jQuery library -->
    <script type="text/javascript" rel="preconnect" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script type="text/javascript" rel="preconnect" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script type="text/javascript" rel="preconnect" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Typed JS -->
    <script type="text/javascript" rel="preconnect" src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.8/typed.min.js"></script>
    <!-- Wow JS -->
    <script type="text/javascript" rel="preconnect" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
</head>
<!-- Close Head -->

<!-- Body -->
<body>
    <!-- Pre Loader -->
    <div class="Loader" id="Loader">
        <div class="LoaderWrapper">
            <div class="circleBall"></div>
            <div class="circleBall"></div>
            <div class="circleBall"></div>
        </div>
    </div>
    <!-- Close Pre Loader -->

    <!-- Go to top Button -->
    <a href="#Home">
        <div class="Gototop">
            <i class="fa fa-angle-double-up text-white" aria-hidden="true"></i>
        </div>
    </a>
    <!-- Close Go to top Button -->

    <!-- Header Section -->
    <div class="Header" id="Home">
        <nav class="navbar fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="./img/logonew.png" class="logo-fahmi" alt="logo fahmi">
                    Fahmi Net
                </a>
                <div class="collapse_menu deactive">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    <i class="fa fa-times" aria-hidden="true"></i>
                    <ul class="nav">
                        <li class="nav-item active hvrcenter" aria-current="page">
                            <a class="nav-link" href="#Home">Home</a>
                        </li>
                        <li class="nav-item hvrcenter">
                            <a class="nav-link" href="#About">About</a>
                        </li>
                        <li class="nav-item hvrcenter">
                            <a class="nav-link" href="#Service">Services</a>
                        </li>
                        <li class="nav-item hvrcenter">
                            <a class="nav-link" href="#Portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item hvrcenter">
                            <a class="nav-link" href="#Pricing">Pricing</a>
                        </li>
                        <li class="nav-item hvrcenter">
                            <a class="nav-link" href="#Team">Team</a>
                        </li>
                        <li class="nav-item hvrcenter">
                            <a class="nav-link" href="#Contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="banner">
            <div class="layer">
                <div class="row Section">
                    <div class="col">
                        <div class="box wow bounceInLeft">
                            <div class="Heading">
                                <div class="word">
                                    <h1>
                                        <span>F</span><span>a</span><span>h</span><span>m</span><span>i&nbsp;</span><span>N</span><span>e</span><span>t</span>
                                    </h1>
                                </div>    
                                <h2>Our Team Skills is <br><span class="animate"></span></h2>
                                <p>Kami adalah sebuah team yang bergerak di bidang IT Consultant. Saat ini kami fokus sebagai jasa penyedia jaringan internet murah dan jasa pembuatan web dan apps, sekaligus UI/UX Designer.</p>
                            </div>
                            <div class="MainBtn">
                                <a href="#Contact" class="btn Btn Bg" role="button" >Get Started</a>
                                <!-- Button trigger modal -->
                                <a href="#myModal" class="btn Btn" data-toggle="modal"><i class="fa fa-play-circle"></i> Watch Video</a>
                            </div>
                        </div>
                    </div>
                    <div class="col headerImg wow jello"></div>
                    <div class="col-12 Dicover_Parent">
                        <a href="#Contact" class="btn Discover" role="button">
                            <i class="fa fa-angle-double-down text-white" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Close Header -->

    <!-- Modal Video -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">YouTube Video</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" id="RTvideo" src="https://www.youtube.com/embed/pDsaiGMlE78" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowFullScreen="allowFullScreen"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Close Modal Video -->

    <!-- About Section -->
    <section class="about wow fadeInUp" id="About">
        <div class="Section">
            <div class="HeadingContent Center wow bounceInDown">
                <h2>ABOUT US</h2>
                <div class="subHeading">
                    Saat ini kami fokus sebagai jasa penyedia jaringan internet murah dan jasa pembuatan web dan apps, sekaligus UI/UX Designer.
                </div>
            </div>
            <div class="content">
                <div class="row justify-content-center align-items-center">
                    <div class="col-4 col-lg-4 wow fadeInLeft">
                        <img src="./img/favicon.svg" class="logo-about" alt="logo fahmi net">
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInRight">
                        <p class="skill">Internet Service <span class="val float-lg-right">75%</span></p>
                        <div class="progress">
                            <div class="progress-bar wow fadeInLeft progress-bar-striped bg-info" data-wow-duration="5s" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                        <p class="skill">Network Engineering <span class="val float-lg-right">75%</span></p>
                        <div class="progress">
                            <div class="progress-bar wow fadeInLeft progress-bar-striped bg-info" data-wow-duration="5s" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                        <p class="skill">Troubleshooting PC<span class="val float-lg-right">95%</span></p>
                        <div class="progress">
                            <div class="progress-bar wow fadeInLeft progress-bar-striped bg-info" data-wow-duration="5s" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                        <p class="skill">Front-End Web & Apps Developer<span class="val float-lg-right">80%</span></p>
                        <div class="progress">
                            <div class="progress-bar wow fadeInLeft progress-bar-striped bg-info" data-wow-duration="5s" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                        <p class="skill">UI/UX Designer<span class="val float-lg-right">75%</span></p>
                        <div class="progress">
                            <div class="progress-bar wow fadeInLeft progress-bar-striped bg-info" data-wow-duration="5s" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row accor justify-content-center align-items-center">
                    <div class="col-md-4 col-lg-8 wow fadeInRight">
                        <h2>Kenapa harus memilih <b>kami</b><br>sebagai penyedia jasa di bidang IT ?</h2>
                        <div class="accordion" id="dataSample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <button class="btn" data-toggle="collapse" data-target="#collapseOne"><i class="fa fa-plus"></i><b>Harga Terjangkau</b></button>	
                                </div>      
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#dataSample">
                                    <div class="card-body">
                                        <p>Untuk harga yang ditawarkan pada layanan internet service sangat terjangkau bagi pengguna individu maupun bersama. Untuk layanan lainnya bisa hubungi kami.<a href="https://api.whatsapp.com/send?phone=628979023149&text=Saya%20Tertarik%20Untuk%20Mendaftar%20Sebagai%20Client%20Fahmi."> Learn more.</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>     
                        <div class="accordion" id="dataSample">
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"><i class="fa fa-plus"></i><b>Good Service</b></button>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#dataSample">
                                    <div class="card-body">
                                        <p>Kami sangat mengutamakan pelayanan yang terbaik kepada client yang menggunakan jasa kami.<a href="https://api.whatsapp.com/send?phone=628979023149&text=Saya%20Tertarik%20Untuk%20Mendaftar%20Sebagai%20Client%20Fahmi."> Learn more.</a></p>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="accordion" id="dataSample">
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"><i class="fa fa-plus"></i><b>Tanpa FUP &amp; Kuota</b></button>                     
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#dataSample">
                                    <div class="card-body">
                                        <p>Khusus nya di penyedia jasa internet service, Kami tidak membatasi kuota ataupun fup yang dipakai. Akses 24 jam Non Stop.<a href="https://api.whatsapp.com/send?phone=628979023149&text=Saya%20Tertarik%20Untuk%20Mendaftar%20Sebagai%20Client%20Fahmi." > Learn more.</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5 col-lg-3 wow fadeInRight">
                        <img src="./img/network.webp" class="logo-about" alt="logo fahmi">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close About -->
    
    <!-- Service Section -->
    <div class="Service" id="Service">
        <div class="Section">
            <div class="HeadingContent Center wow bounceInDown">
                <h2>OUR SERVICES</h2>
                <div class="subHeading">
                    Berlangganan internet dan, Membangun Aplikasi dan Website Custom Sesuai dengan Kebutuhan Anda.
                </div>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow bounceInLeft">
                        <div class="card">
                            <img class="card-img-top" src="./img/responsive.svg" alt="responsive" width="75%" height="75%">
                            <div class="body">
                                <div class="title">Responsive</div>
                                <p>Pembuatan Website yang responsive.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow bounceInDown">
                        <div class="card">
                            <img class="card-img-top" src="./img/animation.svg" alt="animasi" width="75%" height="75%">
                            <div class="body">
                                <div class="title">Animative</div>
                                <p>Menerapkan Animate pada desain prototype, pembuatan website dan aplikasi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow bounceInDown">
                        <div class="card">
                            <img class="card-img-top" src="./img/affordable.svg" alt="terjangkau" width="75%" height="75%">
                            <div class="body">
                                <div class="title">Affordable</div>
                                <p>Harga terjangkau sesuai kebutuhan client.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow bounceInRight">
                        <div class="card">
                            <img class="card-img-top" src="./img/innovation.svg" alt="inovasai" width="75%" height="75%">
                            <div class="body">
                                <div class="title">Creative</div>
                                <p>Kreatifitas pada desain mengikuti tren yang ada.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow bounceInLeft">
                        <div class="card">
                            <img class="card-img-top" src="./img/toolbox.svg" alt="troubleshooting" width="75%" height="75%">
                            <div class="body">
                                <div class="title">Troubleshooting</div>
                                <p>Kami juga mengatasi permasalahan pada komputer seperti Smartphone, PC, Laptop, DLL.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow bounceInUp">
                        <div class="card">
                            <img class="card-img-top" src="./img/wifi-router.svg" alt="wifi" width="75%" height="75%">
                            <div class="body">
                                <div class="title">Internet Service</div>
                                <p>Kami menyediakan akses internet skala RT/RW untuk kebutuhan keluarga.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow bounceInUp">
                        <div class="card">
                            <img class="card-img-top" src="./img/tv.svg" alt="televisi" width="75%" height="75%">
                            <div class="body">
                                <div class="title">Smart TV</div>
                                <p>Smart TV kini bisa digunakan di berbagai jenis TV.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow bounceInRight">
                        <div class="card">
                            <img class="card-img-top" src="./img/consulting.svg" alt="konsultasi" width="75%" height="75%">
                            <div class="body">
                                <div class="title">Consulting</div>
                                <p>Kami juga menerima konsultasi seputar rancangan atau kebutuhan strategi bisnis di bidang IT.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Close Service Section -->

    <!-- Portfolio Section -->
    <div class="Portfolio" id="Portfolio">
        <div class="Section">
            <div class="HeadingContent Center wow fadeInUp">
                <h2>OUR PORTFOLIO</h2>
                <div class="subHeading">
                    Di bawah ini adalah portfolio kami selama ini.
                </div>
            </div>
            <div class="content">
                <div class="Filter_List">
                    <ul class="inline-list wow rubberBand">
                        <li class="active" filter="All">All</li>
                        <li class="" filter="Web">Website</li>
                        <li class="" filter="Application">Application</li>
                        <li class="" filter="Trouble">Troubleshooting PC</li>
                        <li class="" filter="Internet">Internet Service</li>
                        <li class="" filter="Design">UI/UX Design</li>
                    </ul>
                </div>
                <div class="Portfolio_projects wow rubberBand">
                    <div class="row gallery">
                        <!-- For Responsive -->
                        <div class="col-md-6 col-lg-4 col-xl-3 Design Web ">
                            <img src="img/web1.webp" class="wow fadeInLeft d-block" alt="website fahmi net" width="100%" height="100%">
                            <div class="Layer img-fluid" data-toggle="modal" data-bigimage="img/web1.webp" data-content="UI Website Fahmi Net" data-target="#myiModal">
                                <div class="text">
                                    Website Fahmi Net
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 Web">
                            <img src="img/captureweb.webp" class="wow fadeInUp d-block" alt="aplikasi fahmi net" width="100%" height="100%">
                            <div class="Layer img-fluid" data-toggle="modal" data-bigimage="img/captureweb.webp" data-content="Performance Website Fahmi Net" data-target="#myiModal">
                                <div class="text">
                                    Performance Website
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 Application Design">
                            <img src="img/app2.webp" class="wow fadeInUp d-block" alt="aplikasi fahmi net" width="100%" height="100%">
                            <div class="Layer img-fluid" data-toggle="modal" data-bigimage="img/app2.webp" data-content="UI/UX Aplikasi Pantau Covid" data-target="#myiModal">
                                <div class="text">
                                    Aplikasi Pantau Covid
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 Application Design">
                            <img src="img/app1.webp" class="wow fadeInRight d-block" alt="aplikasi fahmi net" width="100%" height="100%">
                            <div class="Layer img-fluid" data-toggle="modal" data-bigimage="img/app1.webp" data-content="UI/UX Aplikasi Pricelist Smartphone" data-target="#myiModal">
                                <div class="text">
                                    Aplikasi Pricelist Smartphone
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 Internet">
                            <img src="img/isp1.webp" class="wow fadeInLeft d-block" alt="internet fahmi net" width="100%" height="100%">
                            <div class="Layer img-fluid" data-toggle="modal" data-bigimage="img/isp1.webp" data-content="Pemasangan Tiang" data-target="#myiModal">
                                <div class="text">
                                    Pemasangan Tiang
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 Internet">
                            <img src="img/isp2.webp" class="wow fadeInLeft d-block" alt="internet fahmi net" width="100%" height="100%">
                            <div class="Layer img-fluid" data-toggle="modal" data-bigimage="img/isp2.webp" data-content="Client PMP Blok D-12" data-target="#myiModal">
                                <div class="text">
                                    Fiber Optik Internet Service
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 Internet">
                            <img src="img/isp3.webp" class="wow fadeInRight d-block" alt="internet fahmi net" width="100%" height="100%">
                            <div class="Layer img-fluid" data-toggle="modal" data-bigimage="img/isp3.webp" data-content="Pemasangan Antenna Voucher-an" data-target="#myiModal">
                                <div class="text">
                                    Wireless Internet Service
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 Internet">
                            <img src="img/isp4.webp" class="wow fadeInRight d-block" alt="internet fahmi net" width="100%" height="100%">
                            <div class="Layer img-fluid" data-toggle="modal" data-bigimage="img/isp4.webp" data-content="Maintenance Kabel Fiber Optik Client" data-target="#myiModal">
                                <div class="text">
                                    Fiber Optik Internet Service
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 Internet">
                            <img src="img/isp5.webp" class="wow fadeInLeft d-block" alt="internet fahmi net" width="100%" height="100%">
                            <div class="Layer img-fluid" data-toggle="modal" data-bigimage="img/isp5.webp" data-content="Client PMP Blok D-01" data-target="#myiModal">
                                <div class="text">
                                    Fiber Optik Internet Service 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 Internet">
                            <img src="img/isp6.webp" class="wow fadeInDown d-block" alt="internet fahmi net" width="100%" height="100%">
                            <div class="Layer img-fluid" data-toggle="modal" data-bigimage="img/isp6.webp" data-content="Client PMP Blok D-06" data-target="#myiModal">
                                <div class="text">
                                    Fiber Optik Internet Service
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 Internet">
                            <img src="img/isp7.webp" class="wow fadeInDown d-block" alt="internet fahmi net" width="100%" height="100%">
                            <div class="Layer img-fluid" data-toggle="modal" data-bigimage="img/isp7.webp" data-content="Client PMP Blok D-08" data-target="#myiModal">
                                <div class="text">
                                    Fiber Optik Internet Service
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 Internet">
                            <img src="img/isp8.webp" class="wow fadeInRight d-block" alt="internet fahmi net" width="100%" height="100%">
                            <div class="Layer img-fluid" data-toggle="modal" data-bigimage="img/isp8.webp" data-content="Client PMP Blok D-11" data-target="#myiModal">
                                <div class="text">
                                    Fiber Optik Internet Service
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 Internet">
                            <img src="img/isp9.webp" class="wow fadeInLeft d-block" alt="internet fahmi net" width="100%" height="100%">
                            <div class="Layer img-fluid" data-toggle="modal" data-bigimage="img/isp9.webp" data-content="Client PMP Blok D-12" data-target="#myiModal">
                                <div class="text">
                                    Fiber Optik Internet Service
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 Trouble">
                            <img src="img/trb1.webp" class="d-block" alt="trouble fahmi net" width="100%" height="100%">
                            <div class="Layer img-fluid" data-toggle="modal" data-bigimage="img/trb1.webp" data-content="Perakitan PC PMP Blok D-08" data-target="#myiModal">
                                <div class="text">
                                    Perakitan PC
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 Trouble">
                            <img src="img/trb2.webp" class="d-block" alt="trouble fahmi net" width="100%" height="100%">
                            <div class="Layer img-fluid" data-toggle="modal" data-bigimage="img/trb2.webp" data-content="Perakitan PC PMP Blok D-08" data-target="#myiModal">
                                <div class="text">
                                    Perakitan PC
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 Trouble">
                            <img src="img/trb3.webp" class="wow fadeInRight d-block" alt="trouble fahmi net" width="100%" height="100%">
                            <div class="Layer img-fluid" data-toggle="modal" data-bigimage="img/trb3.webp" data-content="Troubleshooting Laptop PMP Blok D-09" data-target="#myiModal">
                                <div class="text">
                                    Troubleshooting Laptop
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 Trouble">
                            <img src="img/trb4.webp" class="wow fadeInLeft d-block" alt="trouble fahmi net" width="100%" height="100%">
                            <div class="Layer img-fluid" data-toggle="modal" data-bigimage="img/trb4.webp" data-content="Troubleshooting Apmlifier PMP Blok D-08" data-target="#myiModal">
                                <div class="text">
                                    Troubleshooting Amplifier
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"></h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">    
                        <img src="#" alt="" id="image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <!-- Close Portfolio -->
    <!-- Pricing Table -->
    <div class="Pricing" id="Pricing">
        <div class="Section">
            <div class="HeadingContent Center wow fadeInUp">
                <h2>PRICING TABLE</h2>
                <div class="subHeading">
                    Harga yang tertera dibawah sewaktu-waktu akan berubah.
                </div>
            </div>
            <div class="content">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-3 wow bounceInLeft">
                        <div class="card">
                                <div class="PlanType">
                                        Standart
                                </div>
                                <div class="line"></div>
                                <div class="PlanPrice">
                                    <div class="First"><small>Rp</small> 120.000.-</div>
                                    <small><del>Rp 130.000.-</del></small>
                                </div>
                                <div class="validity">per Bulan</div>
                                <div class="line"></div>
                            <div class="col PlanDetails">
                                <div class="Detail">
                                    <i class="fa fa-check" aria-hidden="true"></i> Download Up To 3 Mbps.
                                </div>
                                <div class="Detail">
                                    <i class="fa fa-check" aria-hidden="true"></i> Upload Up To 3 Mbps.
                                </div>
                                <div class="Detail">
                                    <i class="fa fa-check" aria-hidden="true"></i> Kuota Unlimited.
                                </div>
                                <div class="Detail">
                                    <i class="fa fa-check" aria-hidden="true"></i> Cocok Digunakan 1-3 Orang.
                                </div>
                            </div>
                            <div class="MainBtn price">
                                <a href="#Contact" class="btn Btn Bg" role="button" >Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow bounceInDown">
                        <div class="card Premium">
                                <div class="Advertise">
                                    Popular
                                </div>
                                <div class="PlanType">
                                    Premium
                                </div>
                                <div class="line"></div>
                                <div class="PlanPrice">
                                    <div class="First"><small>Rp</small> 140.000.-</div>
                                    <small><del>Rp 150.000.-</del></small>
                                </div>
                                <div class="validity">per Bulan</div>
                                <div class="line"></div>
                            <div class="col PlanDetails">
                                <div class="Detail">
                                    <i class="fa fa-check" aria-hidden="true"></i> Download Up To 4 Mbps.
                                </div>
                                <div class="Detail">
                                    <i class="fa fa-check" aria-hidden="true"></i> Upload Up To 4 Mbps.
                                </div>
                                <div class="Detail">
                                    <i class="fa fa-check" aria-hidden="true"></i> Kuota Unlimited.
                                </div>
                                <div class="Detail">
                                    <i class="fa fa-check" aria-hidden="true"></i> Cocok Digunakan 2-4 Orang.
                                </div>
                            </div>
                            <div class="MainBtn price">
                                <a href="#Contact" class="btn Btn Bg" role="button" >Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow bounceInUp">
                        <div class="card Premium">
                                <div class="Advertise">
                                    Popular
                                </div>
                                <div class="PlanType">
                                    Smart TV
                                </div>
                                <div class="line"></div>
                                <div class="PlanPrice">
                                    <div class="First"><small>Rp</small> 350.000.-</div>
                                    <small><del>Rp 400.000.-</del></small>
                                </div>
                                <div class="validity">per Alat</div>
                                <div class="line"></div>
                            <div class="col PlanDetails">
                                <div class="Detail">
                                    <i class="fa fa-check" aria-hidden="true"></i> Support Channel Digital.
                                </div>
                                <div class="Detail">
                                    <i class="fa fa-check" aria-hidden="true"></i> Support TV apa saja.
                                </div>
                            </div>
                            <div class="MainBtn price">
                                <a href="#Contact" class="btn Btn Bg" role="button" >Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow bounceInRight">
                        <div class="card">
                                <div class="PlanType">
                                    High
                                </div>
                                <div class="line"></div>
                                <div class="PlanPrice">
                                    <div class="First"><small>Rp</small> 165.000.-</div>
                                    <small><del>Rp 180.000.-</del></small>
                                </div>
                                <div class="validity">per Bulan</div>
                                <div class="line"></div>
                            <div class="col PlanDetails">
                                <div class="Detail">
                                    <i class="fa fa-check" aria-hidden="true"></i> Download Up To 5 Mbps.
                                </div>
                                <div class="Detail">
                                    <i class="fa fa-check" aria-hidden="true"></i> Upload Up To 5 Mbps.
                                </div>
                                <div class="Detail">
                                    <i class="fa fa-check" aria-hidden="true"></i> Kuota Unlimited.
                                </div>
                                <div class="Detail">
                                    <i class="fa fa-check" aria-hidden="true"></i> Cocok Digunakan 4-7 Orang.
                                </div>
                            </div>
                            <div class="MainBtn price">
                                <a href="#Contact" class="btn Btn Bg" role="button" >Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Close Pricing -->

    <!-- Testimonial -->
    <div id="Testimonial" class="container mt-5 Section">
        <div class="HeadingContent Center wow fadeInUp">
            <h2>TESTIMONIALS</h2>
            <div class="subHeading">
                Dibawah ini adalah beberapa testimonial dari client.
            </div>
        </div>
        <div class="content">
            <div id="testimonial_095" class="carousel slide testimonial_095_indicators testimonial_095_control_button thumb_scroll_x swipe_x ps_easeOutSine wow rubberBand" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
                <!-- Header of Slider -->
                <div class="testimonial_095_header">
                    <h5>what people<span>say</span></h5>
                </div> 
                <!-- /Header of Slider -->
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#testimonial_095" data-slide-to="0" class="active"></li>
                    <li data-target="#testimonial_095" data-slide-to="1"></li>
                    <li data-target="#testimonial_095" data-slide-to="2"></li>
                    <li data-target="#testimonial_095" data-slide-to="3"></li>
                    <li data-target="#testimonial_095" data-slide-to="4"></li>
                    <li data-target="#testimonial_095" data-slide-to="5"></li>
                </ol> 
                <!-- Wrapper For Slides -->
                <div class="carousel-inner">
                    <!-- First Slide -->
                    <div class="carousel-item active">
                        <!-- Text Layer -->
                        <div class="testimonial_095_slide"> 
                            <img src="img/man1.svg" class="d-block" alt="fahmi net" width="100%" height="100%">
                            <p>"Kualitas Internet Baik, dipakai 4-5 device juga masih tetap lancar-lancar aja."</p>
                            <h5>pak ali<br>client pmp blok d-08</h5>
                        </div> 
                        <!-- /Text Layer -->
                    </div> <!-- /item -->
                    <!-- End of First Slide -->
                    <!-- Second Slide -->
                    <div class="carousel-item">
                        <!-- Text Layer -->
                        <div class="testimonial_095_slide">
                            <img src="img/human1.svg" class="d-block" alt="fahmi net" width="100%" height="100%">
                            <p>"Lebih irit biaya per bulan nya, kualitas internet baik."</p>
                            <h5>pak jalu<br>client pmp blok b-12</h5>
                        </div> <!-- /Text Layer -->
                    </div> <!-- /item -->
                    <!-- End of Second Slide -->
                    <!-- Third Slide -->
                    <div class="carousel-item">
                        <!-- Text Layer -->
                        <div class="testimonial_095_slide">
                            <img src="img/man2.svg" class="rounded-circle d-block" alt="fahmi net" width="100%" height="100%">
                            <p>"Lancar sekali, saat bermain game ping normal walaupun lagi hujan. Per bulan juga jadi irit."</p>
                            <h5>pak john<br>client pmp blok d-12</h5>
                        </div> <!-- /Text Layer -->
                    </div> <!-- /item -->
                    <!-- End of Third Slide -->
                    <!-- Third Slide -->
                    <div class="carousel-item">
                        <!-- Text Layer -->
                        <div class="testimonial_095_slide">
                            <img src="img/man3.svg" class="rounded-circle d-block" alt="fahmi net" width="100%" height="100%">
                            <p>"Kualitas Internet Baik, apalagi unlimited tanpa batasan kuota 24 jam Non Stop."</p>
                            <h5>pak maruli<br>client pmp blok c-06</h5>
                        </div> <!-- /Text Layer -->
                    </div> <!-- /item -->
                    <!-- End of Thirs Slide -->
                    <!-- Four Slide -->
                    <div class="carousel-item">
                        <!-- Text Layer -->
                        <div class="testimonial_095_slide">
                            <img src="img/man4.svg" class="rounded-circle d-block" alt="fahmi net" width="100%" height="100%">
                            <p>"Lebih irit dibandingkan dengan kuota paket data selama per bulan nya."</p>
                            <h5>pak pramono<br>client pmp blok d-06</h5>
                        </div> <!-- /Text Layer -->
                    </div> <!-- /item -->
                    <!-- End of FourSlide -->
                    <!-- Five Slide -->
                    <div class="carousel-item">
                        <!-- Text Layer -->
                        <div class="testimonial_095_slide">
                            <img src="img/man5.svg" class="rounded-circle d-block" alt="fahmi net" width="100%" height="100%">
                            <p>"Kualitas Internet lumayan baik, apalagi untuk dipakai di banyak device."</p>
                            <h5>pak salman<br>client pmp blok d-01</h5>
                        </div> <!-- /Text Layer -->
                    </div> <!-- /item -->
                    <!-- End of FiveSlide -->
                </div> <!-- End of Wrapper For Slides -->
                <!-- Left Control --> <a class="carousel-control-prev" href="#testimonial_095" data-slide="prev"> <span class="fa fa-chevron-left"></span> </a> <!-- Right Control --> <a class="carousel-control-next" href="#testimonial_095" data-slide="next"> <span class="fa fa-chevron-right"></span> </a>
            </div> <!-- End Paradise Slider -->
        </div>
    </div>
    <!-- Close Testimonial -->

    <!-- Team Section -->
    <div class="Team" id="Team">
        <div class="Section">
            <div class="HeadingContent Center wow fadeInUp">
                <h2>OUR TEAMS</h2>
            </div>
            <div class="content">
                <div class="team row justify-content-center">
                    <div class="team-member col-md-6 col-lg-4 col-xl-3 wow bounceInLeft">
                        <div class="card">
                            <div class="TopImg">
                                <img src="img/team1.webp" class="rounded-circle d-block" alt="tim fahmi" width="100%" height="100%">
                            </div>
                            <div class="TeamInfo text-center">
                                <div class="Name">Fahmi Rinaldi</div>
                                <div class="Job"><b>Technician, Programmer, and Designer</b></div>
                                <div class="social_links">
                                    <div class="social">
                                        <a class="nav-link" href="tel:+628979023149"><i class="fa fa-phone-alt" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="social">
                                        <a class="nav-link" href="https://api.whatsapp.com/send?phone=628979023149&text=Saya%20Tertarik%20Untuk%20Mendaftar%20Sebagai%20Client%20Fahmi."><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="social">
                                        <a class="nav-link" href="https://www.instagram.com/fahmi_rinaldi/"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-member col-md-6 col-lg-4 col-xl-3 wow bounceInRight">
                        <div class="card">
                            <div class="TopImg">
                                <img src="img/team2.svg" class="rounded-circle d-block" alt="tim fahmi" width="100%" height="100%">
                            </div>
                            <div class="TeamInfo text-center">
                                <div class="Name">Muhammad Taufik</div>
                                <div class="Job"><b>Marketter</b></div>
                                <div class="social_links">
                                    <div class="social">
                                        <a class="nav-link" href="tel:+628979023149"><i class="fa fa-phone-alt" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="social">
                                        <a class="nav-link" href="https://api.whatsapp.com/send?phone=628979023149&text=Saya%20Tertarik%20Untuk%20Mendaftar%20Sebagai%20Client%20Fahmi."><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="social">
                                        <a class="nav-link" href="https://www.instagram.com/fahmi_rinaldi/"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section -->
    <div class="Contact" id="Contact">
        <div class="Section">
            <div class="HeadingContent Center wow fadeInUp">
                <h2>CONTACT US</h2>
                <div class="subHeading">
                    Ingin bertanya lebih lanjut ?<br> Silahkan hubungi kami dengan kontak di bawah ini.
                </div>
                <div class="content">
                    <div class="row wow rubberBand">
                        <div class="col-md-6" style="overflow: hidden;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.1057585504814!2d106.81345301382672!3d-6.508295395292202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c3d5c7b9943d%3A0x56a84124889bfbd3!2sPURI%20MAS%20PERKASA%20BLOK%20B20!5e0!3m2!1sid!2sid!4v1616599547531!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                            <div class="col-md-6 ">
                                <form action="./index.php" method="POST">
                                    <h5 class="text-center text-success"> <?=$result; ?></h5>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" name="name" id="Inputname" class="form-control" placeholder="Nama">
                                    </div>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <input type="email" name="email" id="Inputemail" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="nohp" name="hp" id="Inputnohp" class="form-control" placeholder="Nomor HP">
                                    </div>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-map-marked"></i></span>
                                        </div>
                                        <input type="text" name="alamat" id="Inputaddress" class="form-control" placeholder="Alamat">
                                    </div>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-shopping-cart"></i></span>
                                        </div>
                                        <textarea name="msg" id="Message" class="form-control" placeholder="Kebutuhan"></textarea>
                                    </div>
                                    <div class="form-group button1" >
                                        <input type="submit" name="submit" id="submit" class="btn Btn w-50 Bg center-block" value="Send">
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section -->
    <div class="Footer" id="Footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="FooterHeading text-center">
                        About Us
                    </div>
                    <div class="Explain ">
                        Kami adalah sebuah team yang bergerak di bidang IT Consultant. Saat ini kami fokus sebagai jasa penyedia jaringan internet murah dan jasa pembuatan web dan apps, sekaligus UI/UX Designer.
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="FooterHeading text-center">
                        Social Media
                    </div>
                    <div class="Explain d-flex justify-content-center">
                        <div class="social">
                            <a class="nav-link" href="tel:+628979023149"><i class="fa fa-phone-alt" aria-hidden="true"></i></a>
                        </div>
                        <div class="social">
                            <a class="nav-link" href="https://api.whatsapp.com/send?phone=628979023149&text=Saya%20Tertarik%20Untuk%20Mendaftar%20Sebagai%20Client%20Fahmi."><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                        </div>
                        <div class="social">
                            <a class="nav-link" href="https://www.linkedin.com/in/fahmi-rinaldi-185ab3185/"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                        <div class="social">
                            <a class="nav-link" href="https://www.instagram.com/fahmi_rinaldi/"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        </div>
                        <div class="social">
                            <a class="nav-link" href="https://github.com/fahmirinaldi"><i class="fab fa-github" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line"></div>
            <div class="row">
                <div class="col-12 text-center my-3">
                    Copyrights &copy; 2021 <a href="#" class="list-unstyled">Fahmi Technology</a> - All Rights Reserved
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="js/script.js"></script>
</html>