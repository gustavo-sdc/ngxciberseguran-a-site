<?php
    $msg_Contato="";

    if(isset($_POST['nome'])){
        require_once("../assets/php/contato.php");
    }

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Tags SEO -->
    <!--twitter og-->
    <meta name="twitter:site" content="@QD7">
    <meta name="twitter:creator" content="@QD7">
    <meta name="twitter:card" content="summary_large_image">
    
    <!--facebook og-->
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    
    <!--meta-->
    <meta name="author" content="QD7">
    
    <meta name="robots" content="index, follow">
    <meta property="publisher" content="QD7">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:region" content="Brasil">
    <meta property="og:author" content="QD7">
    <meta property="og:site_name" content="QD7">
    <meta name="twitter:card" content="summary_large_image">   
    
    <!-- Link da página acessada -->
    <link rel="canonical" href="https://qd7.com.br/en">
    <meta property="og:url" content="https://qd7.com.br/en">
    
    <!-- Title -->
    <title>Cybersecurity in the post-quantum era</title>
    <meta property="og:title" content="Cybersecurity in the post-quantum era">
    <meta name="twitter:title" content="Cybersecurity in the post-quantum era">
    
    <!-- Description -->
    <meta name="description" content="We specialize in cybersecurity. We implement robust end-to-end solutions covering software, hardware and monitoring.">
    <meta property="og:description" content="We specialize in cybersecurity. We implement robust end-to-end solutions covering software, hardware and monitoring.">
    <meta property="og:description" content="We specialize in cybersecurity. We implement robust end-to-end solutions covering software, hardware and monitoring.">
    <meta name="twitter:description" content="We specialize in cybersecurity. We implement robust end-to-end solutions covering software, hardware and monitoring.">
    
    <!-- Link da imagem do banner do produto -->
    <meta name="twitter:image" content="https://qd7.com.br/en/assets/img/back-main.png">
    <meta property="og:image" content="https://qd7.com.br/en/assets/img/back-main.png">
    <meta name="twitter:image" content="https://qd7.com.br/en/assets/img/back-main.png">
    <meta property="og:url" content="https://qd7.com.br/en/assets/img/back-main.png">
    <meta name="thumbnail" content="https://qd7.com.br/en/assets/img/back-main.png">
    <meta property="og:image" content="https://qd7.com.br/en/assets/img/back-main.png">
    <meta property="og:image:secure_url" content="https://qd7.com.br/en/assets/img/back-main.png">

    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16">

    <!--build:css-->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- endbuild -->

    <!--custom css start-->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!--custom css end-->

    <!-- Links WebComponents Start -->
    <script defer src="assets/js/model.js" type='module'></script>
    <!-- Links WebComponents End -->

    <!-- Google tag (gtag.js) --> 
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7LBRT1677Y"></script> 
    <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-7LBRT1677Y'); </script>
    
    <script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/1b6ecfa4-e77f-4899-9340-65b44f1edc77-loader.js"></script>

    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){
            w[l]=w[l]||[];
            w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});
            
            var 
                f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),
                dl= l !='dataLayer' ? '&l='+l :'';
                j.async=true;
                j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
                
                f.parentNode.insertBefore(j,f);
        })
        (window,document,'script','dataLayer','GTM-TTJSVXGX');
    </script>
    <!-- End Google Tag Manager -->
    
</head>

<body>
    
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TTJSVXGX"
        height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!--preloader start-->
    <div id="preloader" class="bg-light-subtle">
        <div class="container --preloader align-items-center justify-content-center col-12">
            <img id="logoQD7" src="../../assets/img/logo-qd7.png" alt="logo" class="img-fluid col-8 col-lg-1">
        </div>
    </div>
    <!--preloader end-->
    <div class="main-wrapper">

        <!--header start-->
        <header class="main-header position-absolute w-100" id="defPage" page="">

            <nav class="navbar navbar-expand-xl navbar-dark sticky-header z-10">

                <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                    <a href="../" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none col-2">
                        <img id="logoQD7" src="../assets/img/logo-qd7.png" alt="logo" class="img-fluid logo-white col-10 col-lg-6" />
                        <img id="logoQD7" src="../assets/img/logo-qd7.png" alt="logo" class="img-fluid logo-color col-10 col-lg-6" />
                    </a>
                    <a class="navbar-toggler position-absolute right-0 border-0 " href="#offcanvasWithBackdrop">
                        <i class="flaticon-menu text-primary" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop"
                            data-bs-toggle="offcanvas" role="button">
                        </i>
                    </a>
                    <div class="clearfix">
                
                    </div>

                    <div class="collapse navbar-collapse justify-content-center">

                        <ul class="nav col-12 col-md-auto justify-content-center main-menu">

                            <li><a href="../" class="nav-link" id="home">Home</a></li>

                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Solutions</a>

                                <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white width-fullhomepage-list-wrapper">

                                    <div class="dropdown-grid rounded-custom homepage-dropdown">
                                        
                                        <div class="dropdown-grid-item bg-white radius-left-side">
                                            <a id="deepInspection" href="../deep-inspection/" class="dropdown-link col-lg-12">
                                                <span class="demo-list icon-services rounded text-white fw-bold">
                                                    <img id="iconDeepInspection" src="../assets/img/icons/AiOutlineSchedule.png" alt="icon-schedule" class="icon-services">
                                                </span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Deep Inspection</div>
                                                </div>
                                            </a>
                                            <a id="authentication" href="../authentication/" class="dropdown-link">
                                                <span class="demo-list rounded text-white fw-bold">
                                                    <img id="iconAuthentication" src="../assets/img/icons/AiOutlineUnlock.png" alt="icon-auth" class="icon-services">
                                                </span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Authentication</div>
                                                    </p>    
                                                </div>
                                            </a>
                                            <a id="check" href="../check" class="dropdown-link col-lg-12">
                                                <span class="demo-list  rounded text-white fw-bold">
                                                    <img id="iconCheck" src="../assets/img/icons/CgSearchFound.png" alt="icon-search" class="icon-services">
                                                </span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Check</div>
                                                    <p>
                                                    </p>
                                                </div>
                                            </a>
                                            <a id="wan" href="../wan/" class="dropdown-link col-lg-12">
                                                <span class="demo-list  rounded text-white fw-bold">
                                                    <img id="iconWan" src="../assets/img/icons/CgMediaPodcast.png" alt="icon-Network" class="icon-services">
                                                </span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">WAN</div>
                                                </div>
                                            </a>
                                            <a id="analyser" href="../analyser-360/" class="dropdown-link col-lg-12">
                                                <span class="demo-list rounded text-white fw-bold">                                                    
                                                    <img id="iconAnalyser" src="../assets/img/icons/CgEye.png" alt="icon-eye" class="icon-services">
                                                </span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Analyser 360</div>
                                                    </p>
                                                </div>
                                            </a>
                                            <a id="sase" href="../sase+/" class="dropdown-link col-lg-12">
                                                <span class="demo-list  rounded text-white fw-bold">
                                                    <img id="iconSase" src="../assets/img/icons/CgListTree.png" alt="icon-proxy" class="icon-services">
                                                </span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Sase+</div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </li>

                            <!-- Parceiros -->
                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Partners</a>

                                <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white width-fullhomepage-list-wrapper">

                                    <div class="dropdown-grid rounded-custom homepage-dropdown">
                                        
                                        <div class="dropdown-grid-item bg-white radius-left-side">
                                            <a id="nutanix" href="https://lp.qd7.com.br/?page_id=1112" class="dropdown-link col-lg-12">
                                                <span class="demo-list icon-services rounded text-white fw-bold">
                                                    <img id="iconNutanix" src="../assets/img/nutanix/favicon-nutanix.png" alt="icon-schedule" class="icon-services">
                                                </span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Nutanix</div>
                                                </div>
                                            </a>
                                            <a id="palo-alto" href="https://lp.qd7.com.br/?page_id=1141" class="dropdown-link col-lg-12">
                                                <span class="demo-list rounded text-white fw-bold">
                                                    <img id="iconAuthentication" src="../assets/img/palo-alto/icon-paloalto.png" alt="icon-auth" class="icon-services">
                                                </span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Palo Alto</div>
                                                    </p>    
                                                </div>
                                            </a>
                                            <a id="akamai" href="https://lp.qd7.com.br/?page_id=1082" class="dropdown-link col-lg-12">
                                                <span class="demo-list  rounded text-white fw-bold">
                                                    <img id="iconCheck" src="../assets/img/akamai/favicon-akamai.png" alt="icon-search" class="icon-services">
                                                </span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Akamai</div>
                                                    <p>
                                                    </p>
                                                </div>
                                            </a>
                                            <a id="arista" href="https://lp.qd7.com.br/?page_id=1099" class="dropdown-link col-lg-12">
                                                <span class="demo-list  rounded text-white fw-bold">
                                                    <img id="iconWan" src="../assets/img/arista/favicon-arista.png" alt="icon-Network" class="icon-services">
                                                </span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Arista</div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </li>

                            <li><a id="sobre" href="../#sobre" class="nav-link">About</a></li>
                            <li><a id="contato" href="../#contato" class="nav-link">Contact</a></li>
                            <li><a id="news" href="https://blog.qd7.com.br" class="nav-link">News</a></li>

                        </ul>
                    </div>
                    <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block content-buttons-menu">
                        <a href="javascript:void(0)" class="btn btn-link p-1 tt-theme-toggle">
                            <div class="tt-theme-light" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Light"><i class="flaticon-sun-1 fs-lg"></i></div>
                            <div class="tt-theme-dark" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Dark"><i class="flaticon-moon-1 fs-lg"></i></div>
                        </a> 
                        
                        <a id="translate" href="../en/sase+/" class="btn-translate btn btn-link" style=" margin:0% 0% 0% 0% !important; padding:0% !important;">PT-BR</a>
                    
                        <a id="linkApiWhatsApp" href="https://api.whatsapp.com/send?phone=5517997914198&text=Time%20qd7%20agradece%20o%20seu%20contato,%20em%20breve%20retornaremos%20sua%20mensagem" class="btn btn-link" style=" margin:0% 0% 2% 0% !important; padding:0% !important;"><i class="fab fa-whatsapp" data-bs-placement="bottom" data-bs-toggle="tooltip" data-bs-title="WhatsApp" style="font-size: 1.25rem;"></i></a>
                        <a id="linkInstagram" href="https://www.instagram.com/qd7.cybersecurity" class="btn btn-link" style=" margin:0% 0% 2% 0% !important; padding:0% !important;"><i class="fab fa-instagram" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Instagram" style="font-size: 1.25rem;"></i></a>
                    
                    </div>
                </div>
            </nav>


            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
                <div class="offcanvas-header d-flex align-items-center mt-4">
                    <a href="../" class="d-flex align-items-center mb-md-0 text-decoration-none">
                        <img id="logoQD7" src="../assets/img/logo-qd7.png" alt="logo" class="img-fluid logo-color col-4 col-lg-3" />
                    </a>
                    <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="flaticon-cancel"></i>
                    </button>
                </div>
                <div class="offcanvas-body z-10">
                    <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                        <li><a id="home" href="../" class="nav-link">Home</a></li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Solutions
                            </a>
                            <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white homepage-list-wrapper">
                                <div class="dropdown-grid rounded-custom width-full homepage-dropdown">
                                    <div class="dropdown-grid-item w-50">
                                        <a id="check" href="../check" class="dropdown-link col-12">
                                            <div class="dropdown-info">
                                                <div class="drop-title">Check</div>
                                            </div>
                                        </a>
                                        <a id="deepInspection" href="../deep-inspection/" class="dropdown-link col-12">
                                            <div class="dropdown-info">
                                                <div class="drop-title">Deep Inspection</div>
                                                </p>
                                            </div>
                                        </a>
                                        <a id="analyser" href="../analyser-360/" class="dropdown-link col-12">
                                            <div class="dropdown-info">
                                                <div class="drop-title">Analyser-360</div>

                                            </div>
                                        </a>
                                        <a id="sase" href="../sase+/" class="dropdown-link col-12">
                                            <div class="dropdown-info">
                                                <div class="drop-title">Sase+</div>
                                            </div>
                                        </a>
                                        <a id="authentication" href="../authentication/" class="dropdown-link col-12">
                                            <div class="dropdown-info">
                                                <div class="drop-title">Authentication</div>
                                                </p>
                                            </div>
                                        </a>
                                        <a id="wan" href="../wan/" class="dropdown-link col-12">
                                            <div class="dropdown-info">
                                                <div class="drop-title">WAN</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Partners
                            </a>
                            <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white homepage-list-wrapper">
                                <div class="dropdown-grid rounded-custom width-full homepage-dropdown">
                                    <div class="dropdown-grid-item w-50">
                                        <a id="nutanix" href="https://lp.qd7.com.br/?page_id=1112" class="dropdown-link col-7">
                                            <div class="dropdown-info">
                                                <div class="drop-title">Nutanix</div>
                                            </div>
                                        </a>
                                        <a id="palo-alto" href="https://lp.qd7.com.br/?page_id=1141" class="dropdown-link col-7">
                                            <div class="dropdown-info">
                                                <div class="drop-title">Palo Alto</div>
                                            </div>
                                        </a>
                                        <a id="akamai" href="https://lp.qd7.com.br/?page_id=1082" class="dropdown-link col-7">
                                            <div class="dropdown-info">
                                                <div class="drop-title">Akamai</div>
                                            </div>
                                        </a>
                                        <a id="arista" href="https://lp.qd7.com.br/?page_id=1099" class="dropdown-link col-7">
                                            <div class="dropdown-info">
                                                <div class="drop-title">Arista</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a id="sobre" href="../#sobre" class="nav-link">About</a></li>                        
                        <li><a id="contato" href="../#contato" class="nav-link">Contact</a></li>
                        <li><a id="news" href="https://blog.qd7.com.br" class="nav-link">News</a></li>
                        <div class="action-btns text-start me-5 me-lg-0 d-md-block d-lg-block content-buttons-menu">
                            <a href="javascript:void(0)" class="btn btn-link p-1 tt-theme-toggle">
                                <div class="tt-theme-light" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Light"><i class="flaticon-sun-1 fs-lg"></i></div>
                                <div class="tt-theme-dark" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Dark"><i class="flaticon-moon-1 fs-lg"></i></div>
                            </a> 
                            
                            <a id="translate" href="../en/sase+/" class="btn-translate btn btn-link" style=" margin:0% 0% 0% 0% !important; padding:0% !important; color:grey;">PT-BR</a>
                        
                            <a id="linkApiWhatsApp" href="https://api.whatsapp.com/send?phone=5517997914198&text=Time%20qd7%20agradece%20o%20seu%20contato,%20em%20breve%20retornaremos%20sua%20mensagem" class="btn btn-link" style=" margin:0% 0% 2% 0% !important; padding:0% !important;"><i class="fab fa-whatsapp" data-bs-placement="bottom" data-bs-toggle="tooltip" data-bs-title="WhatsApp" style="font-size: 1.25rem;"></i></a>
                            <a id="linkInstagram" href="https://www.instagram.com/qd7.cybersecurity" class="btn btn-link" style=" margin:0% 0% 2% 0% !important; padding:0% !important;"><i class="fab fa-instagram" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Instagram" style="font-size: 1.25rem;"></i></a>
                        
                        </div>
                    </ul>
                </div>
            </div>
        </header>
        <!--header end-->

        <!-- Hero Start  -->
        <section class="hero-section text-white hero-ten" style="background: url('assets/img/back-main.png'); background-repeat:no-repeat; background-position: center center; background-size: cover ">
            <div class="container">
                <div class="row align-items-center main-content">
                    <div class="width col-md-8">
                        <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                            <h1 class="fw-medium display-3 text-white">
                                CyberSecurity
                            </h1>
                            <h6 class="lead white display-6">
                                in the post-quantum age.
                            </h6>
                            <div class="action-btn mt-5 align-items-center d-block d-sm-flex d-lg-flex d-md-flex">
                                <a href="#cyber-about" class="btn btn-primary me-2">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 mt-5">
                        <div class="hero-img position-relative circle-shape-images none">
                            <img src="assets/img/cyber_banner_image.svg" alt="hero img" class="img-fluid position-relative z-5" />
                        </div>
                    </div>
                </div>
                <div class="cyber-down-btn text-center position-relative d-none d-lg-block">
                    <a href="#cyber-about" class="text-primary">
                        <i class="fas fa-arrow-down"></i>
                    </a>
                </div>
            </div>
        </section>
        <!-- Hero End -->

        <!-- Brand Logo Start-->
        <section class="cyber-brand-logo pt-80 mb-5">
            <h2 class="text-primary h3 text-center">Success Cases</h2>
            <p class="text-decoration-none text-center mb-5">In partnership with FORTINET</p>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="align-items-center justify-content-center col-10">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-10 col-lg-2  position-relative text-center m-3">
                                <div class="cyber-brand-logo">
                                    <img src="assets/img/brand-logo/Logo-Usina-Estiva.png" alt="logo" class="img-fluid col-7"/>
                                </div>
                            </div>
                            <div class="col-11 col-lg-3  position-relative text-center m-3">
                                <div class="cyber-brand-logo">
                                    <div class="cyber-brand-logo">
                                        <img src="assets/img/brand-logo/logo-projetoal.png" alt="logo" class="img-fluid col-8"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 col-lg-2  position-relative text-center m-3">
                                <div class="cyber-brand-logo">
                                    <div class="cyber-brand-logo">
                                        <img src="assets/img/brand-logo/logo-cbmm.png" alt="logo" class="img-fluid col-7"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Brand Logo End -->

        <!-- About Start -->
        <section class="counter-with-video pt-80 pb-120">
            <div class="container" id="cyber-about">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="cyber-about-img text-center mb-30 mb-lg-0" style="height: 100%;">
                            <img src="assets/img/img-main.png" alt="VR" class="img-fluid" style="height: 100%;"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="">
                            <div class="section-heading mb-5">
                                <h5 class="h6 text-primary">About Us</h5>
                                <h2>Engineering and Computational Structure</h2>
                                <p>
                                    Experts in cybersecurity, we implement robust end-to-end solutions, including software, hardware, and monitoring.
                                </p>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="bg-white cyber-about-box mb-4 p-4 mb-lg-0">
                                        <div class="cyber-about-icon">
                                            <i class="fas fa-thumbs-up"></i>
                                        </div>
                                        <h5 class="h-6">Successful Projects</h5>
                                        <p>
                                            Learn about implemented projects and their impact on security.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="bg-white cyber-about-box p-4">
                                        <div class="cyber-about-icon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <h5 class="h-6">Our Team</h5>
                                        <p>
                                            Robust lab structure at the service of cybersecurity.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-0">
                                <div class="col-lg-12 col-md-12">
                                    <div class="pe-2">
                                        <div class="cyber-about-count-box d-md-flex bg-white p-4 mt-3">
                                            <div class="pe-3">
                                                <h2>20+</h2>
                                            </div>
                                            <div>
                                                <h5 class="h6">Years of experience</h5>
                                                <p class="mb-0"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->

        <!-- Service Start -->
        <section class="cyber-features pt-100 bg-light-subtle" >
            <div class="container" id="solutions">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <div class="section-heading text-center mb-5">
                            <h5 class="h6 text-primary">Solutions</h5>
                            <h2>Reliable end-to-end cyber security.</h2>
                            <p>
                                Tailored to each type of threat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="cyber-single-service bg-white rounded-custom mb-30">
                            <div class="feature-icon pb-5 rounded bg-primary-soft text-primary mb-4">
                                <i class="fas fa-list"></i>
                            </div>
                            <div class="cyber feature-info-wrap">
                                <h3 class="h5">Check</h3>
                                <p>
                                    Way beyond NAC, smart chacagem rules, with access profile postures, generating more security and traceability.  
                                </p>
                            </div>
                            <a href="check/" class="link-with-icon text-decoration-none">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cyber-single-service bg-white rounded-custom mb-30">
                            <div class="feature-icon pb-5 rounded bg-primary-soft text-primary mb-4">
                                <i class="fas fa-cloud"></i>
                            </div>
                            <div class="cyber feature-info-wrap">
                                <h3 class="h5">Sase+</h3>
                                <p>
                                The complete authentication platform that provides a comprehensive set of security features, ensuring end-to-end protection. 
                                </p>
                            </div>
                            <a href="sase+/" class="link-with-icon text-decoration-none">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cyber-single-service bg-white rounded-custom mb-30">
                            <div class="feature-icon pb-5 rounded bg-primary-soft text-primary mb-4">
                                <i class="fas fa-database"></i>
                            </div>
                            <div class="cyber feature-info-wrap">
                                <h3 class="h5">Deep Inspection</h3>
                                <p>
                                    Complete solution, encompassing engineering, hardware, software for security with a focus on threat prevention.
                                </p>
                            </div>
                            <a href="deep-inspection/" class="link-with-icon text-decoration-none">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cyber-single-service bg-white rounded-custom mb-30">
                            <div class="feature-icon pb-5 rounded bg-primary-soft text-primary mb-4">
                                <i class="fas fa-door-closed"></i>
                            </div>
                            <div class="cyber feature-info-wrap">
                                <h3 class="h5">Analyser 360</h3>
                                <p>
                                    Threat analysis and monitoring with real-time detection, correlated with behavioral analysis of signatures and LOGs.
                                </p>
                            </div>
                            <a href="analyser-360/" class="link-with-icon text-decoration-none">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cyber-single-service bg-white rounded-custom mb-30">
                            <div class="feature-icon pb-5 rounded bg-primary-soft text-primary mb-4">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="cyber feature-info-wrap">
                                <h3 class="h5">Authentication</h3>
                                <p>
                                    A complete and comprehensive authentication platform, thoroughly covering all essential aspects of security from start to finish.                             
                                </p>
                            </div>
                            <a href="authentication/" class="link-with-icon text-decoration-none">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cyber-single-service bg-white rounded-custom mb-30">
                            <div class="feature-icon pb-5 rounded bg-primary-soft text-primary mb-4">
                                <i class="fas fa-server"></i>
                            </div>
                            <div class="cyber feature-info-wrap">
                                <h3 class="h5">WAN</h3>
                                <p>
                                    In addition to the firewall and SDWAN, security plus complete traffic handling and prioritization of critical applications, centrally managed.                                
                                </p>
                            </div>
                            <a href="wan/" class="link-with-icon text-decoration-none">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service End -->

        <!-- CTA Start  -->
        <section class="cyber-cta pb-60">
            <div class="container">
                <div class="cyber-cta-bg p-5 rounded-custom" style="background: black;">
                    <div class="row">
                        <div class="col-lg-9 col-md-9">
                            <div class="cyber-cta-info position-relative">
                                <div class="">
                                    <h2 class="text-white">Is safety a priority?</h2>
                                    <p class="lead fs-2 text-white fw-normal mb-0 h3">
                                        Talk to an expert now!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="cyber-cta-btn">
                                <a href="https://api.whatsapp.com/send/?phone=5517997914198&text=Ol%C3%A1%2C+%0D%0AGostaria+de+saber+mais+sobre+as+solu%C3%A7%C3%B5es+da+QD7&type=phone_number&app_absent=0" class="mt-3 btn btn-primary me-auto">Schedule <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA End -->

        <!-- Counter Start -->
        <section class="counter-with-video pt-60 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="assets/img/img-projects.jpg" class="img-fluid text-decoration-none rounded">
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-5 mt-lg-0">
                            <div class="section-heading mb-5">
                                <h5 class="h6 text-primary">Protect your company</h5>
                                <h2>
                                    Premium cybersecurity for demanding and visionary companies.
                                </h2>
                                <p>
                                    When we implement a security solution, it's not only about technology and high level engineering, we also connect security to the performance and core business of our clients, always ensuring the ROI of the projects.
                                </p>
                            </div>
                            <div class="row width-max">
                                <div class=" col-md-6 width-max">
                                    <div class="bg-white p-4 cyber-count-box mb-30 mb-lg-0">
                                        <h2 class="text-primary">200+</h2>
                                        <h5 class="h-6">Clients served</h5>
                                        <p>
                                            We promptly met the specific and robust needs of most customers impacted by complex pains that required multiple connections.                                
                                        </div>
                                <div class=" col-md-6 width-max">
                                    <div class="bg-white p-4 cyber-count-box">
                                        <h2 class="text-primary">25+</h2>
                                        <h5 class="h-6">Success Stories</h5>
                                        <p>
                                            Some of our major projects that have become references and we are proud to share them.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter End -->

        <!-- Testimonial Start -->
        <section class="cyber-testimonial pt-100" style="background: url('assets/img/back-depoimentos-1.png') no-repeat center center / cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <div class="cyber-testimonial pe-5 mb-30 mb-lg-0">
                            <h5 class="h6 text-primary">Testimonials</h5>
                            <h2 class=" white">What they are saying about us.</h2>
                            <p>
                                Some of our clients have told us a little about the impact of QD7's work in their companies.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="swiper cyber-testimonial-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide position-relative">
                                    <div class="cyber-single-testimonial bg-white shadow-sm m-3">
                                        <div class="cyber-t-q mb-4">
                                            <img src="../assets/img/quoate.png" alt="quoate" />
                                        </div>
                                        <p class="mb-30">
                                            With QD7's help, we adapted to LGPD by implementing an effective cybersecurity framework to protect customer information, overcoming challenges of remote working and risks from uncontrolled devices on the network.                                        
                                        </p>
                                        <div class="cyber-auth-info d-flex">
                                            <div class="cyber-testimonial-author">
                                                <h5 class="h6 text-primary">Fabiano Brito</h5>
                                                <span>CEO, Inspira Capital</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide position-relative">
                                    <div class="cyber-single-testimonial bg-white shadow-sm m-3">
                                        <div class="cyber-t-q mb-4">
                                            <img src="../assets/img/quoate.png" alt="quoate" />
                                        </div>
                                        <p class="mb-30 bg-primary-soft"></p>
                                        With QD7's help, we adapted to LGPD by implementing an effective cybersecurity framework to protect customer information, overcoming challenges of remote working and risks from uncontrolled devices on the network.                                          </p>
                                        <div class="cyber-auth-info d-flex">
                                            <div class="cyber-testimonial-author">
                                                <h5 class="h6 text-primary">Fabiano Brito</h5>
                                                <span>CEO, Inspira Capital</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide position-relative">
                                    <div class="cyber-single-testimonial bg-white shadow-sm m-3">
                                        <div class="cyber-t-q mb-4">
                                            <img src="../assets/img/quoate.png" alt="quoate" />
                                        </div>
                                        <p class="mb-30">
                                            With QD7's help, we adapted to LGPD by implementing an effective cybersecurity framework to protect customer information, overcoming challenges of remote working and risks from uncontrolled devices on the network.
                                        </p>
                                        <div class="cyber-auth-info d-flex">
                                            <div class="cyber-testimonial-author">
                                                <h5 class="h6 text-primary">Fabiano Brito</h5>
                                                <span>CEO, Inspira Capital</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonia Start End -->

        <!-- Blog Start-->
        <section class="home-blog-section pt-60 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-heading text-center">
                            <h4 class="text-primary h5">News</h4>
                            <h2>Our News and Articles</h2>
                            <p>
                                Security is life! Currently there have been more than 1.6 billion cases of personal data theft on the Internet, learn how to protect yourself.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="swiper cyber-blog">
                    <div class="swiper-wrapper">
                            <div class="swiper-slide position-relative">
                                <div class="cyber-single-article mb-4 mb-lg-0 p-3 border">
                                    <a href="https://blog.qd7.com.br/seguranca-online-para-empresas/#" class="cyber-article-img mb-3">
                                        <img src="https://blog.qd7.com.br/wp-content/uploads/2024/01/seguranca-online-para-empresas.jpg" alt="article" class="img-fluid" />
                                    </a>

                                    <div class="article-content">
                                        <a href="https://blog.qd7.com.br/seguranca-online-para-empresas/#" class="text-decoration-none">
                                            <h2 class="h5 article-title limit-2-line-text mt-3">
                                                Online security tips for businesses: protecting your data and digital assets
                                            </h2>
                                        </a>
                                        <a href="https://blog.qd7.com.br/seguranca-online-para-empresas/#" class="link-with-icon text-decoration-none">Read more <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide position-relative">
                                <div class="cyber-single-article mb-4 mb-lg-0 p-3 border">
                                    <a href="https://blog.qd7.com.br/o-que-e-phishing/#" class="cyber-article-img mb-3">
                                        <img src="https://blog.qd7.com.br/wp-content/uploads/2024/01/o-que-e-phishing.jpg" alt="article" class="img-fluid"/>
                                    </a>

                                    <div class="article-content">
                                        <a href="https://blog.qd7.com.br/o-que-e-phishing/#" class="text-decoration-none">
                                            <h2 class="h5 article-title limit-2-line-text mt-3">
                                                Phishing detection tips: how to identify and avoid attacks
                                            </h2>
                                        </a>
                                        <a href="https://blog.qd7.com.br/o-que-e-phishing/#" class="link-with-icon text-decoration-none">Read more <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide position-relative">
                                <div class="cyber-single-article mb-4 mb-lg-0 p-3 border">
                                    <a href="https://blog.qd7.com.br/wan-sd-wan/#" class="cyber-article-img mb-3">
                                        <img src="https://blog.qd7.com.br/wp-content/uploads/2024/01/wan-sd-wan.jpg" alt="article" class="img-fluid" />
                                    </a>
                                    
                                    <div class="article-content">
                                        <a href="https://blog.qd7.com.br/wan-sd-wan/#" class="text-decoration-none">
                                            <h2 class="h5 article-title limit-2-line-text mt-3">
                                                Exploring WAN and SD-WAN: The future of enterprise connectivity
                                            </h2>
                                        </a>
                                        <a href="https://blog.qd7.com.br/wan-sd-wan/#" class="link-with-icon text-decoration-none">Read more <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog End -->

        <!-- Contact Start -->
        <?php include './assets/php/includes/form.php'?>
        <!-- Contact End -->

        <!-- Footer Start -->
        <?php include './assets/php/includes/footer.php'?>
        <!-- Footer End -->
    </div>


    <!--build:js-->
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/swiper-bundle.min.js"></script>
    <script src="assets/js/vendors/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendors/parallax.min.js"></script>
    <script src="assets/js/vendors/aos.js"></script>
    <script src="assets/js/vendors/massonry.min.js"></script>
    <script src="assets/js/app.js"></script>
    <!--endbuild-->
</body>
</html>