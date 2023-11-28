<?php 
  
$url =  isset($_SERVER['HTTPS']) &&
    $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";  
 
$url .= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];    

?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="description" content="It is important to take care of your hair after your hair transplant procedure. Things to Avoid after Hair Transplant, Post-op Haircare, Tips for post hair transplant care">
      <meta name="keywords" content="Pre and Post Hair Transplant Care, Hair Transplant Care, What to eat after hair transplant, hair transplant day by day, hair transplant dos and don'ts, 7 days after hair transplant, 1 month after hair transplant">
      <link rel="canonical" href="<?php echo $url;?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <meta content="India’s Most Trusted Hair Transplant Clinic | Permanent Treatment for Baldness" property="og:title" />
       <meta content="New Roots Hair Clinic" property="og:site_name" />
        <meta content="https://www.newrootshairtransplant.com/" property="og:url" />
         <meta content="New Roots Hair Clinic is India's Most Trusted Hair Transplant Clinic. New Roots Hair Clinic is located in Mumbai, Kolkata, Nashik, Nagpur, Raipur, Aurangabad, Latur, Hyderabad" property="og:description" />
      <meta name="geo.region" content="IN" />   
      <meta name="geo.position" content="20.593684, 78.96288" />
      <meta name="ICBM" content="20.593684, 78.96288" /> 
    <title>Pre and Post Hair Transplant Care | New Roots Hair Clinic</title>
    <link rel="shortcut icon" href="assets/img/logo/New-Root-Logo-on-Black.png">

    <link rel="stylesheet" href="assets/css/maicons.css">

    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.16/css/intlTelInput.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;0,700;0,800;0,900;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-227991003-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-227991003-1');
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11134810420"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11134810420');
</script>



</head>
<style>


/* .video-cover {
    width: 100%;
    height: auto;
    float: left;
    border-radius: 30px;
    overflow: hidden;
    position: relative;
    cursor: pointer;
} */

/* picture img {
    width: 100%;
    object-fit: cover;
    display: flex;
} */

/* .video-cover .video-detail {
    display: flex;
    align-items: flex-end;
    padding: 30px;
    background: rgb(0, 0, 0);
    background: -moz-linear-gradient(0deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 0) 100%);
    background: -webkit-linear-gradient(0deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 0) 100%);
    background: linear-gradient(0deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 0) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#000000", endColorstr="#000000", GradientType=1);
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}

.video-cover .video-detail .video-text {
    display: flex;
    align-items: center;
}

.video-cover .video-detail .video-text * {
    color: var(--color-white);
    display: inline-block;
} */





/* .btn-play {
    position: absolute;
    z-index: 1;
    top: 3%;
    left: 5%;
    transform: translateX(-50%) translateY(-50%);
    box-sizing: content-box;
    display: block;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    border: none;
    outline: none;
    padding: 27px 20px 18px 28px;
} */
<style>
@mixin tablet-and-up {
    @media screen and (min-width: 769px) {
        @content;
    }
}

@mixin mobile-and-up {
    @media screen and (min-width: 601px) {
        @content;
    }
}

@mixin tablet-and-down {
    @media screen and (max-width: 768px) {
        @content;
    }
}

@mixin mobile-only {
    @media screen and (max-width: 600px) {
        @content;
    }
}



.wrapper {
    background: #f5ead0;
    padding: 2rem;
    border-radius: 15px;
}

.sessions {
    margin-top: 2rem;
    border-radius: 12px;
    position: relative;
}

.sessions li {
    padding-bottom: 1.5rem;
    border-left: 1px solid #d7b961;
    position: relative;
    padding-left: 20px;
    margin-left: 10px;

    &:last-child {
        border: 0px;
        padding-bottom: 0;
    }

    &:before {
        content: '';
        width: 15px;
        height: 15px;
        background: white;
        border: 1px solid #d7b961;
        box-shadow: 3px 3px 0px #d7b961;
        box-shadow: 3px 3px 0px #d7b961;
        border-radius: 50%;
        position: absolute;
        left: -10px;
        top: 0px;
    }
}

.sessions p {
    color: #4f4f4f;
    font-family: sans-serif;
    line-height: 1.5;
    margin-top: 0.4rem;

    @include mobile-only {
        font-size: .9rem;
    }
}

.sessions li:before {
    content: "";
    width: 15px;
    height: 15px;
    background: white;
    border: 1px solid #d7b961;
    box-shadow: 3px 3px 0px #d7b961;
    box-shadow: 3px 3px 0px #d7b961;
    border-radius: 50%;
    position: absolute;
    left: -10px;
    top: 0px;
}


/* -------------------------------- 

Main Components 

-------------------------------- */
.cd-horizontal-timeline .events-content {
    position: relative;
    width: 100%;
    margin: 2em 0;
    padding: 120px 44px 10px 10px;
    -webkit-transition: height 0.4s;
    -moz-transition: height 0.4s;
    transition: height 0.4s;
}

.cd-horizontal-timeline {
    opacity: 0;
    margin: 2em auto;
    -webkit-transition: opacity 0.2s;
    -moz-transition: opacity 0.2s;
    transition: opacity 0.2s;
}

.cd-horizontal-timeline::before {
    /* never visible - this is used in jQuery to check the current MQ */
    content: 'mobile';
    display: none;
}

.cd-horizontal-timeline.loaded {
    /* show the timeline after events position has been set (using JavaScript) */
    opacity: 1;
}

.cd-horizontal-timeline .timeline {
    position: relative;
    height: 100px;
    width: 90%;
    max-width: 800px;
    margin: 0 auto;
}

.cd-horizontal-timeline .events-wrapper {
    position: relative;
    height: 100%;
    margin: 0 40px;
    overflow: hidden;
}

.cd-horizontal-timeline .events-wrapper::after,
.cd-horizontal-timeline .events-wrapper::before {
    /* these are used to create a shadow effect at the sides of the timeline */
    content: '';
    position: absolute;
    z-index: 2;
    top: 0;
    height: 100%;
    width: 20px;
}

.cd-horizontal-timeline .events-wrapper::before {
    left: 0;
    background-image: -webkit-linear-gradient(left, #f8f8f8, rgba(248, 248, 248, 0));
    background-image: linear-gradient(to right, #f8f8f8, rgba(248, 248, 248, 0));
}

.cd-horizontal-timeline .events-wrapper::after {
    right: 0;
    background-image: -webkit-linear-gradient(right, #f8f8f8, rgba(248, 248, 248, 0));
    background-image: linear-gradient(to left, #f8f8f8, rgba(248, 248, 248, 0));
}

.cd-horizontal-timeline .events {
    /* this is the grey line/timeline */
    position: absolute;
    z-index: 1;
    left: 0;
    top: 49px;
    height: 4px;
    /* width will be set using JavaScript */
    background: #dfdfdf;
    -webkit-transition: -webkit-transform 0.4s;
    -moz-transition: -moz-transform 0.4s;
    transition: transform 0.4s;
}

.cd-horizontal-timeline .filling-line {
    /* this is used to create the green line filling the timeline */
    position: absolute;
    z-index: 1;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background-color: #d2b255;
    -webkit-transform: scaleX(0);
    -moz-transform: scaleX(0);
    -ms-transform: scaleX(0);
    -o-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transform-origin: left center;
    -moz-transform-origin: left center;
    -ms-transform-origin: left center;
    -o-transform-origin: left center;
    transform-origin: left center;
    -webkit-transition: -webkit-transform 0.3s;
    -moz-transition: -moz-transform 0.3s;
    transition: transform 0.3s;
}

.cd-horizontal-timeline .events a {
    position: absolute;
    bottom: 0;
    z-index: 2;
    text-align: center;
    font-size: 1.3rem;
    padding-bottom: 15px;
    color: #383838;
    /* fix bug on Safari - text flickering while timeline translates */
    -webkit-transform: translateZ(0);
    -moz-transform: translateZ(0);
    -ms-transform: translateZ(0);
    -o-transform: translateZ(0);
    transform: translateZ(0);
}

.cd-horizontal-timeline .events a::after {
    /* this is used to create the event spot */
    content: '';
    position: absolute;
    left: 50%;
    right: auto;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%);
    bottom: -5px;
    height: 12px;
    width: 12px;
    border-radius: 50%;
    border: 2px solid #dfdfdf;
    background-color: #f8f8f8;
    -webkit-transition: background-color 0.3s, border-color 0.3s;
    -moz-transition: background-color 0.3s, border-color 0.3s;
    transition: background-color 0.3s, border-color 0.3s;
}

.no-touch .cd-horizontal-timeline .events a:hover::after {
    background-color: #d2b255;
    border-color: #d2b255;
}

.cd-horizontal-timeline .events a.selected {
    pointer-events: none;
}

.cd-horizontal-timeline .events a.selected::after {
    background-color: #d2b255;
    border-color: #d2b255;
}

.cd-horizontal-timeline .events a.older-event::after {
    border-color: #d2b255;
}

@media only screen and (min-width: 1100px) {
    .cd-horizontal-timeline {
        margin: 6em auto;
    }

    .cd-horizontal-timeline::before {
        /* never visible - this is used in jQuery to check the current MQ */
        content: 'desktop';
    }
}

.cd-timeline-navigation a {
    /* these are the left/right arrows to navigate the timeline */
    position: absolute;
    z-index: 1;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    height: 34px;
    width: 34px;
    border-radius: 50%;
    border: 2px solid #dfdfdf;
    /* replace text with an icon */
    overflow: hidden;
    color: transparent;
    text-indent: 100%;
    white-space: nowrap;
    -webkit-transition: border-color 0.3s;
    -moz-transition: border-color 0.3s;
    transition: border-color 0.3s;
}

.cd-timeline-navigation a::after {
    /* arrow icon */
    content: '';
    position: absolute;
    height: 16px;
    width: 16px;
    left: 50%;
    top: 50%;
    bottom: auto;
    right: auto;
    -webkit-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -ms-transform: translateX(-50%) translateY(-50%);
    -o-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    background: url('assets/img/back/right-arrow.png') no-repeat 0 0;
}

.cd-timeline-navigation a.prev {
    left: 0;
    -webkit-transform: translateY(-50%) rotate(180deg);
    -moz-transform: translateY(-50%) rotate(180deg);
    -ms-transform: translateY(-50%) rotate(180deg);
    -o-transform: translateY(-50%) rotate(180deg);
    transform: translateY(-50%) rotate(180deg);
}

.cd-timeline-navigation a.next {
    right: 0;
}

.no-touch .cd-timeline-navigation a:hover {
    border-color: #d2b255;
}

.cd-timeline-navigation a.inactive {
    cursor: not-allowed;
}

.cd-timeline-navigation a.inactive::after {
    background-position: 0 -16px;
}

.no-touch .cd-timeline-navigation a.inactive:hover {
    border-color: #dfdfdf;
}

.cd-horizontal-timeline .events-content {
    position: relative;
    width: 100%;
    margin: 2em 0;

    -webkit-transition: height 0.4s;
    -moz-transition: height 0.4s;
    transition: height 0.4s;
}

.cd-horizontal-timeline .events-content li {
    position: absolute;
    z-index: 1;
    width: 100%;
    left: 0;
    top: 0;
    -webkit-transform: translateX(-100%);
    -moz-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    -o-transform: translateX(-100%);
    transform: translateX(-100%);
    padding: 0 5%;
    opacity: 0;
    -webkit-animation-duration: 0.4s;
    -moz-animation-duration: 0.4s;
    animation-duration: 0.4s;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
}

.cd-horizontal-timeline .events-content li.selected {
    /* visible event content */

    z-index: 2;
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}

.cd-horizontal-timeline .events-content li.enter-right,
.cd-horizontal-timeline .events-content li.leave-right {
    -webkit-animation-name: cd-enter-right;
    -moz-animation-name: cd-enter-right;
    animation-name: cd-enter-right;
}

.cd-horizontal-timeline .events-content li.enter-left,
.cd-horizontal-timeline .events-content li.leave-left {
    -webkit-animation-name: cd-enter-left;
    -moz-animation-name: cd-enter-left;
    animation-name: cd-enter-left;
}

.cd-horizontal-timeline .events-content li.leave-right,
.cd-horizontal-timeline .events-content li.leave-left {
    -webkit-animation-direction: reverse;
    -moz-animation-direction: reverse;
    animation-direction: reverse;
}

.cd-horizontal-timeline .events-content li>* {
    max-width: 50%;
    margin: 0 auto;
}

.cd-horizontal-timeline .events-content h2 {
    font-weight: bold;
    font-size: 2.6rem;
    font-family: "Playfair Display", serif;
    font-weight: 700;
    line-height: 1.2;
}

.cd-horizontal-timeline .events-content em {
    display: block;
    font-style: italic;
    margin: 10px auto;
}

.cd-horizontal-timeline .events-content em::before {
    content: '- ';
}

.cd-horizontal-timeline .events-content p {
    font-size: 1.4rem;
    color: #000000;
}

.cd-horizontal-timeline .events-content em,
.cd-horizontal-timeline .events-content p {
    line-height: 1.6;
}

@media only screen and (min-width: 768px) {
    .cd-horizontal-timeline .events-content h2 {
        font-size: 7rem;
    }

    .cd-horizontal-timeline .events-content em {
        font-size: 2rem;
    }

    .cd-horizontal-timeline .events-content p {
        font-size: 12px;

    }

    .cd-horizontal-timeline .events-content li>* {
        max-width: 100%;
        margin: 0 auto;
    }
}

@-webkit-keyframes cd-enter-right {
    0% {
        opacity: 0;
        -webkit-transform: translateX(100%);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateX(0%);
    }
}

@-moz-keyframes cd-enter-right {
    0% {
        opacity: 0;
        -moz-transform: translateX(100%);
    }

    100% {
        opacity: 1;
        -moz-transform: translateX(0%);
    }
}

@keyframes cd-enter-right {
    0% {
        opacity: 0;
        -webkit-transform: translateX(100%);
        -moz-transform: translateX(100%);
        -ms-transform: translateX(100%);
        -o-transform: translateX(100%);
        transform: translateX(100%);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateX(0%);
        -moz-transform: translateX(0%);
        -ms-transform: translateX(0%);
        -o-transform: translateX(0%);
        transform: translateX(0%);
    }
}

@-webkit-keyframes cd-enter-left {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-100%);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateX(0%);
    }
}

@-moz-keyframes cd-enter-left {
    0% {
        opacity: 0;
        -moz-transform: translateX(-100%);
    }

    100% {
        opacity: 1;
        -moz-transform: translateX(0%);
    }
}

@keyframes cd-enter-left {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-100%);
        -moz-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
        -o-transform: translateX(-100%);
        transform: translateX(-100%);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateX(0%);
        -moz-transform: translateX(0%);
        -ms-transform: translateX(0%);
        -o-transform: translateX(0%);
        transform: translateX(0%);
    }
}

.events-content .info {
    font-size: 18px !important;
    text-align: center;
    border: 1px solid black;
    padding: 15px;
    font-weight: bold;
}

element.style {}

.cd-horizontal-timeline .events-content li>* {
    max-width: 50%;
    margin: 0 auto;
}

.events-content .info {
    font-size: 18px !important;
    text-align: center;
    border: 1px solid #f5ead0;
    padding: 15px;
    font-weight: bold;
    /* opacity: 0; */
    /* position: absolute; */
    top: -28px;
    text-align: center;
    margin-top: 80px;
    box-shadow: 0px 2px 1px #f5ead0;
    padding: 30px;
    background: #f5ead0;
    border-radius: 10px;
    transition: all 0.2s;
}
</style>

<body>


    <?php include_once('header.php')?>
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary">
        <div class="container py-5">
            <div class="row align-items-center py-2">
                <div class="col-md-12 text-center text-md-left">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-lg" href="index.php">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-lg  " href="javascript:void(0);">Patient-advisor</a>
                    </div>
                    <h1 class="mb-4 mt-5 mb-md-0 text-primary text-bold text-uppercase">Patient-advisor</h1>
                </div>

            </div>
        </div>
    </div>
    <!-- Page Header Start -->



    <div class="container">
        <div class="row">
            <div class="col-sm">
                <ul class="mt-4">
                    <li class="text-bold patient-adviser"> Investigations Required Before Hair Transplant:
                        <ul class="">
                            <div class="row">
                                <div class="col-sm">
                                    <li class="text-bold"><i class="fa fa-check"></i>CBC </li>
                                    <li class="text-bold"><i class="fa fa-check"></i>RBS </li>
                                    <li class="text-bold"><i class="fa fa-check"></i>TRIDOT </li>
                                    <li class="text-bold"><i class="fa fa-check"></i>HBSAG </li>

                                    <li class="text-bold"><i class="fa fa-check"></i>SR. CREATININE </li>
                                    <li class="text-bold"><i class="fa fa-check"></i>SR. BILIRUBIN </li>
                                    <li class="text-bold"><i class="fa fa-check"></i>ANTI-HCV </li>
                                    <li class="text-bold"><i class="fa fa-check"></i>BT-CT </li>
                                    <li class="text-bold"><i class="fa fa-check "></i>PT-INR </li>


                                </div>
                                <div class="col-sm">
                                    <li class="text-bold"><i class="fa fa-check"></i>URINE ROUTINE </li>
                                    <li class="text-bold"><i class="fa fa-check "></i>HBA1C </li>
                                    <li class="text-bold"><i class="fa fa-check"></i>T3, T4, TSH </li>
                                    <li class="text-bold"><i class="fa fa-check "></i>SERUM FERRITIN </li>

                                    <li class="text-bold"><i class="fa fa-check "></i>FSH </li>
                                    <li class="text-bold"><i class="fa fa-check "></i>LH</li <li class="text-bold"><i
                                        class="fa fa-check "></i>PROLACTIN
                    </li>

                    <li class="text-bold"><i class="fa fa-check "></i>IRON PROFILE </li>
            </div>

        </div>
        </ul>

        </li>
        </ul>
    </div>

    </div>
    </div>

    <div class="container text-content">
        <div class="wrapper">
            <h2 class="subtitle approach wow bounceInUp mt-5"> Important Instructions Before Transplant: </h2>
            <ul class="sessions">
                <li>

                    <p>Wear button shirt and avoid T-shirts.</p>
                </li>
                <li>

                    <p>Have breakfast before surgery.</p>
                </li>
                <li>

                    <p>Do not wear ornaments.</p>
                </li>
                <li>

                    <p>Bring blood test on day of surgery.</p>
                </li>
                <li>

                    <p> Do not cut hairs by own.</p>
                </li>
                <li>

                    <p>Do not travel immediately before or after surgery if you are from out of station.</p>
                </li>
                <li>

                    <p> Tab Fluconazole 400mg - take this 1 tablet orally 3-4 days before surgery.</p>
                </li>
                <li>

                    <p> SET FREE SHAMPOO + CLEAN BUDS SOLUTION - Mix well and apply on the scalp daily until surgery
                        date. </p>
                </li>
                <li>

                    <p>Please bring file/prescription of any ongoing medicine like B.P, Diabetes etc.</p>
                </li>
                <li>

                    <p> Do not drink alcohol for 3 days prior surgery. </p>
                </li>
                <li>

                    <p>If you smoke cigarettes, we advise you to stop/reduce smoking at least a week prior to your
                        scheduled surgery. </p>
                </li>
                <li>

                    <p> Avoid strenuous exercise and/or heavy lifting one week prior surgery. </p>
                </li>
                <li>

                    <p>Wash your hair in the morning of surgery. </p>
                </li>
                <li>

                    <p> Accompanying a relative/ friend is a must.</p>
                </li>
            </ul>
        </div>
    </div>


    <div class="container-fluid text-content ">
        <div class="container">
            <div class="row align-items-center py-4">
                <div class="col-12 ">

                    <h2 class="subtitle approach wow bounceInUp mt-2 mb-4">The Day of Hair Transplant </h2>

                    <ul>
                        <div class="container">
                          <div class="row">
                            <div class="col-sm">
                              <li class="text-bold patient-adviser"> Final consultation </li>
                        <li class="text-bold patient-adviser"> Hair trimming </li>
                        <li class="text-bold patient-adviser"> Washing head </li>
                        <li class="text-bold patient-adviser"> Marking hairline </li>
                        <li class="text-bold patient-adviser"> Paint drape </li>
                        <li class="text-bold patient-adviser"> Local anesthesia </li>
                            </div>
                            <div class="col-sm">
                             <li class="text-bold patient-adviser"> Follicle extraction</li>
                        <li class="text-bold patient-adviser"> Graft preparation </li>
                        <li class="text-bold patient-adviser"> Preparation of slits </li>
                        <li class="text-bold patient-adviser"> Graft implantation </li>
                        <li class="text-bold patient-adviser"> Dressing </li>
                            </div>
                            
                          </div>
                        </div>
                   </ul>


                </div>
            </div>



        </div>
    </div>


    <section class="cd-horizontal-timeline text-content">
        <div class="text-center mb-5">
            <h2 class="subtitle approach wow bounceInUp mt-5">Post Hair Transplant Medications: </h2>
            <span class="text-bold mt-5 ">7 Days: </span>
        </div>

        <div class="timeline">
            <div class="events-wrapper">
                <div class="events">
                    <ol>
                        <li><a href="#0" data-date="1/01/2001" class="selected">Tablet 1</a></li>
                        <li><a href="#0" data-date="1/01/2002">Tablet 2</a></li>
                        <li><a href="#0" data-date="1/01/2003">Tablet 3</a></li>
                        <li><a href="#0" data-date="1/01/2004">Tablet 4</a></li>
                        <li><a href="#0" data-date="1/01/2005">Tablet 5</a></li>
                        <li><a href="#0" data-date="1/01/2006">Tablet 6</a></li>
                        <li><a href="#0" data-date="1/01/2007">Tablet 7</a></li>
                        <li><a href="#0" data-date="1/01/2008">Tablet 8</a></li>


                    </ol>

                    <span class="filling-line" aria-hidden="true"></span>
                </div> <!-- .events -->
            </div> <!-- .events-wrapper -->

            <ul class="cd-timeline-navigation">
                <li><a href="#0" class="prev inactive">Prev</a></li>
                <li><a href="#0" class="next">Next</a></li>
            </ul> <!-- .cd-timeline-navigation -->
        </div> <!-- .timeline -->

        <div class="events-content">
            <ol>
                <li class="selected" data-date="1/01/2001">

                    <p class="info">
                        Tab. Pan 40 - 1-0-1 (Before food) </p>
                </li>

                <li data-date="1/01/2002">

                    <p class="info">
                        Tab. clavum 625 mg / 1gm - 1-0-1 (After food) </p>
                </li>

                <li data-date="1/01/2003">

                    <p class="info">
                        Tab. enzoflam - 1-0-1 (After food) </p>
                </li>

                <li data-date="1/01/2004">

                    <p class="info">
                        Tab. Ivatryp - 1-0-1 (After food) </p>
                </li>

                <li data-date="1/01/2005">

                    <p class="info">
                        Tab. dynaper - (If Pain) </p>
                </li>

                <li data-date="1/01/2006">

                    <p class="info">
                        Fudic cream - (Apply on donor area once in a day) </p>
                </li>

                <li data-date="1/01/2007">

                    <p class="info">
                        Recodine Solution - (Apply with gauze on donor area in morning & evening)
                    </p>
                </li>

                <li data-date="1/01/2008">

                    <p class="info">
                        Club Arginine Sachet - (Twice in a day with 1 glass) <br>
                        For Post Hair Transplant Care +880 1324-167982 </p>
                </li>



            </ol>
        </div> <!-- .events-content -->
    </section>
    <section class="cd-horizontal-timeline text-content">
        <div class="text-center mb-5">
            <h2 class="subtitle approach wow bounceInUp mt-5">Transplant Medicines: </h2>
            <span class="text-bold mt-5 "> Day 10 to 3 months: </span>
        </div>

        <div class="timeline">
            <div class="events-wrapper">
                <div class="events">
                    <ol>
                        <li><a href="#0" data-date="1/01/2001" class="selected">1</a></li>
                        <li><a href="#0" data-date="1/01/2002">2</a></li>
                        <li><a href="#0" data-date="1/01/2003">3</a></li>
                        <li><a href="#0" data-date="1/01/2004">4</a></li>
                        <li><a href="#0" data-date="1/01/2005">5</a></li>
                        <li><a href="#0" data-date="1/01/2006">6</a></li>
                        <li><a href="#0" data-date="1/01/2007">7</a></li>

                    </ol>

                    <span class="filling-line" aria-hidden="true"></span>
                </div> <!-- .events -->
            </div> <!-- .events-wrapper -->

            <ul class="cd-timeline-navigation">
                <li><a href="#0" class="prev inactive">Prev</a></li>
                <li><a href="#0" class="next">Next</a></li>
            </ul> <!-- .cd-timeline-navigation -->
        </div> <!-- .timeline -->

        <div class="events-content">
            <ol>
                <li class="selected" data-date="1/01/2001">

                    <p class="info">
                        Cap. Dutoid 0.5mg - 1-0-0 ( After Breakfast) </p>
                </li>

                <li data-date="1/01/2002">

                    <p class="info">
                        Tab. Folzin - 1-0-0 ( After Breakfast) </p>
                </li>

                <li data-date="1/01/2003">

                    <p class="info">
                        Tab. Calmoury 1-0-0 ( After Breakfast) </p>
                </li>

                <li data-date="1/01/2004">

                    <p class="info">
                        Tab. Hairlyfe - 0-0-1 (After Dinner) </p>
                </li>

                <li data-date="1/01/2005">

                    <p class="info">
                        Cap. Vitaylse - 0-0-1 ( After Dinner) </p>
                </li>

                <li data-date="1/01/2006">

                    <p class="info">
                        Hair Regrowth Solution - Start using from 21st day of surgery (Apply at night & Spread on scalp,
                        can apply 2 times a day if no itching.) </p>
                </li>

                <li data-date="1/01/2007">

                    <p class="info">
                        Set Free + Clean Buds Solution - Twice in a week (From 15th day)
                    </p>
                </li>

            </ol>
        </div> <!-- .events-content -->
    </section>


    <section class="cd-horizontal-timeline text-content">
        <div class="text-center mb-5">
            <h2 class="subtitle approach wow bounceInUp mt-5">Transplant Medicines: </h2>
            <span class="text-bold mt-5 ">4th Month to 6 Months: </span>
        </div>

        <div class="timeline">
            <div class="events-wrapper">
                <div class="events">
                    <ol>
                        <li><a href="#0" data-date="1/01/2001" class="selected">1</a></li>
                        <li><a href="#0" data-date="1/01/2002">2</a></li>
                        <li><a href="#0" data-date="1/01/2003">3</a></li>
                        <li><a href="#0" data-date="1/01/2004">4</a></li>
                        <li><a href="#0" data-date="1/01/2005">5</a></li>


                    </ol>

                    <span class="filling-line" aria-hidden="true"></span>
                </div> <!-- .events -->
            </div> <!-- .events-wrapper -->

            <ul class="cd-timeline-navigation">
                <li><a href="#0" class="prev inactive">Prev</a></li>
                <li><a href="#0" class="next">Next</a></li>
            </ul> <!-- .cd-timeline-navigation -->
        </div> <!-- .timeline -->

        <div class="events-content">
            <ol>
                <li class="selected" data-date="1/01/2001">

                    <p class="info">
                        Cap. Dutoid 0.5mg - 1-0-0 (After Breakfast) </p>
                </li>

                <li data-date="1/01/2002">

                    <p class="info">
                        Tab. Hairlyfe - 0-0-1 (After Dinner) </p>
                </li>

                <li data-date="1/01/2003">

                    <p class="info">
                        Cap. Vitaylse - 0-0-1 ( After Dinner) </p>
                </li>

                <li data-date="1/01/2004">

                    <p class="info">
                        Hair Regrowth Solution - Apply at night & Spread on scalp, can apply 2 times a day if no
                        itching. </p>
                </li>

                <li data-date="1/01/2005">

                    <p class="info">
                        Set Free + Clean Buds Solution - Twice in a week (If Dandruff) </p>
                </li>





            </ol>
        </div> <!-- .events-content -->
    </section>

    <section class="cd-horizontal-timeline text-content">
        <div class="text-center mb-5">
            <h2 class="subtitle approach wow bounceInUp mt-5">Transplant Medicines: </h2>
            <span class="text-bold mt-5 ">6th Month to 12 Months: </span>
        </div>

        <div class="timeline">
            <div class="events-wrapper">
                <div class="events">
                    <ol>
                        <li><a href="#0" data-date="1/01/2001" class="selected">1</a></li>
                        <li><a href="#0" data-date="1/01/2002">2</a></li>
                        <li><a href="#0" data-date="1/01/2003">3</a></li>


                    </ol>

                    <span class="filling-line" aria-hidden="true"></span>
                </div> <!-- .events -->
            </div> <!-- .events-wrapper -->

            <ul class="cd-timeline-navigation">
                <li><a href="#0" class="prev inactive">Prev</a></li>
                <li><a href="#0" class="next">Next</a></li>
            </ul> <!-- .cd-timeline-navigation -->
        </div> <!-- .timeline -->

        <div class="events-content">
            <ol>
                <li class="selected" data-date="1/01/2001">

                    <p class="info">
                        Tab Medishaft – 1-0-0 ( After Breakfast) Note : If no hairfall can take Alternate days. </p>
                </li>

                <li data-date="1/01/2002">

                    <p class="info">
                        Hair Regrowth Solution – Apply at night & Spread on scalp</p>
                </li>

                <li data-date="1/01/2003">

                    <p class="info">
                        NT Hairfall Pro – Apply every morning on scalp. </p>
                </li>




            </ol>
        </div> <!-- .events-content -->
    </section>



    <div class="container-fluid text-content ">
        <div class="container">
            <div class="row align-items-center py-4">
                <div class="col-12 ">

                    <h2 class="subtitle approach   mt-2 mb-4">POST HAIR TRANSPLANT INSTRUCTIONS: </h2>
                   <p class="text-bold mb-4">Day 1 TO Day 7</p>
                    <ul>
                        <li class="text-bold patient-adviser"> DO NOT WORRY much about the pain as mild pain is bound to happen
                        </li>
                        <li class="text-bold patient-adviser"> Take recommended medicines as per prescription. Take adequate
                            milk and/or food before taking medicines. </li>
                        <li class="text-bold patient-adviser"> Do not take medicines empty stomach.</li>
                        <li class="text-bold patient-adviser"> Watching TV or listening to soft music is recommended to help
                            relax. </li>
                        <li class="text-bold patient-adviser"> AVOID any kind of exertion or jerky movements or travelling.</li>
                        <li class="text-bold patient-adviser"> Go early to bed and use soft pillow. Do not sleep side wards.
                        </li>
                        <li class="text-bold patient-adviser"> If you feel pain at any point of time after initial medication,
                            repeat the pain killer as advised by doctor.</li>
                        <li class="text-bold patient-adviser"> Take bath of your body EXCLUDING your head.</li>
                        <li class="text-bold patient-adviser"> Remove the bandage applied on your head on 2nd day</li>
                        <li class="text-bold patient-adviser"> There are few cases where post-operative swelling may occur. This
                            could be visible towards the fore head and be up to 4-5 days. In such cases you are advised
                            to apply ice cubes by putting them in a piece of cloth. Apply these ice cubes 2-3 minutes at
                            least 4-5 times a day. If more swelling take these medicine Tab. Serratiopeptidase (2-0-2) for 3 days
                            and apply Heparin and Benzyl nicotinate Ointment twice a day. </li>
                        <li class="text-bold patient-adviser"> Spray NS every two hourly on transplanted area from second day to
                            7th day. (No need to spray at night)</li>
                        <li class="text-bold patient-adviser"> Remove head band during spray and at night. </li>
                        <li class="text-bold patient-adviser"> Use surgical cap if need to go out doors </li>

                    </ul>


                </div>
            </div>


            <div class="row align-items-center py-4">
                <div class="col-12 ">

                    <h2 class="subtitle approach   mt-2 mb-4">POST HAIR TRANSPLANT INSTRUCTIONS: </h2>
                     <p class="text-bold mb-4">Day 8: </p>
                    <ul>
                        <li class="text-bold patient-adviser"> Apply coconut oil on transplanted area with the help of cotton
                            softly on 7th night of hair transplant and leave it overnight.</li>
                        <li class="text-bold patient-adviser"> Apply body lotion (liquid) in the morning on transplanted area;
                            keep it for 1 hour.Take shower with baby shampoo without rubbing of grafts;(Repeat shower 3
                            times). Soak with clean towel gently. </li>
                        <li class="text-bold patient-adviser"> Use baby shampoo till 15th day for head wash daily. Avoid dust
                            and high sun light till 2 weeks. </li>
                        <li class="text-bold patient-adviser"> Mildjogging or walking is recommended after 8 days. </li>

                    </ul>


                </div>
            </div>

            <div class="row align-items-center py-4">
                <div class="col-12 ">

                    <h2 class="subtitle approach   mt-2 mb-4">POST HAIR TRANSPLANT INSTRUCTIONS: </h2>
                    <p class="text-bold mb-4">Day 10 to 1 Month: </p>
                    <ul>
                        <li class="text-bold patient-adviser"> Itching in whole scalp is bound to happen but avoid scratching
                            with fingers and it will subside by the week. If too much itching take Tab. Fexofenadine (60 mg).</li>
                        <li class="text-bold patient-adviser"> Grafts start to fall during this time but there is nothing to
                            worry as these will re-grow in 3-4 months of time. 1 month to 3 months. </li>
                        <li class="text-bold patient-adviser"> Regular washing of scalp is permissible, use SET FREE SHAMPOO +
                            CLEAN BUDS SOLUTION weekly twice. </li>
                        <li class="text-bold patient-adviser"> Avoid smoking as per as possible. </li>
                        <li class="text-bold patient-adviser"> You can use your regular hair oil or recommended by doctor. </li>
                        <li class="text-bold patient-adviser"> Start using HAIR REGROWTH SOLUTION 5% on scalp from 21st day of
                            hair transplant. You can apply twice a day if no itching.</li>

                    </ul>


                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid ">
        <div class="container">
            <div class="row align-items-center py-4">


                <div class="text-content">

                    <h2 class="subtitle approach wow bounceInUp mt-5">Hair Health & Nutrition</h2>
                    <p class="about_p">The rising case of hair fall & hair loss apart from androgenic alopecia is lack
                        of nutrients. the nutrients which help to hair health are as follows; kindly make a schedule as
                        per your age, weight & exercise. the following things help to maintain micronutrients required
                        for hair. </p>
                    <ul>
                        <li class="text-bold patient-adviser"> IRON is required for hair growth – the food items which contain
                            good
                            amount of hair are as follows:
                            <ul class="mt-4">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <li class="text-bold"><i class="fa fa-check"></i>Spinach</li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Legumes</li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Tofu</li>
                                            <li class="text-bold"><i class="fa fa-check"></i> Pistachios</li>

                                        </div>
                                        <div class="col-sm-3">
                                            <li class="text-bold"><i class="fa fa-check"></i>Chickpeas</li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Collard Greens</li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Chicken Breast</li>
                                        </div>
                                        <div class="col-sm-3">
                                            <li class="text-bold"><i class="fa fa-check"></i>Lean Meat</li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Fish</li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Liver</li>
                                        </div>
                                        <div class="col-sm-3">
                                            <li class="text-bold"><i class="fa fa-check"></i>Egg Yolk</li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Almonds</li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Cashews</li>
                                        </div>
                                    </div>
                                </div>


                            </ul>
                        </li>

                        <li class="text-bold patient-adviser"> ZINC helps in protein synthesis & cell division. The food items
                            having high content of zinc is as follows:
                            <ul>
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <li class="text-bold"><i class="fa fa-check"></i>Pumpkin Seeds </li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Sesame Seeds</li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Watermelon Seeds</li>
                                        </div>
                                        <div class="col-sm-3">
                                            <li class="text-bold"><i class="fa fa-check"></i>Red Meat</li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Shell Fish</li>

                                        </div>

                                    </div>
                                </div>


                            </ul>
                        </li>

                        <li class="text-bold patient-adviser"> BIOTIN helps in hair follicle growth. the food items of biotin
                            content are as follows:
                            <ul>
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <li class="text-bold"><i class="fa fa-check"></i>Sweet Potatoes </li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Mushrooms</li>

                                        </div>
                                        <div class="col-sm-3">
                                            <li class="text-bold"><i class="fa fa-check"></i>Spinach</li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Legumes </li>
                                        </div>

                                    </div>
                                </div>


                            </ul>
                        </li>

                        <li class="text-bold patient-adviser"> OMEGA FATTY ACIDS help in preventing greying of hairs. This
                            content is seen in following items:
                            <ul class="">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <li class="text-bold"><i class="fa fa-check"></i>Salmon</li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Herring</li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Mackerel</li>

                                        </div>

                                    </div>
                                </div>


                            </ul>
                        </li>
                        <li class="text-bold patient-adviser"> VITAMIN D is also essential component which helps in development
                            of hair shaft
                            <ul class="">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <li class="text-bold"><i class="fa fa-check"></i>Whole milk</li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Cheese</li>


                                        </div>
                                        <div class="col-sm-3">

                                            <li class="text-bold"><i class="fa fa-check"></i>Butter</li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Eggs </li>

                                        </div>


                                    </div>
                                </div>


                            </ul>
                        </li>

                        <li class="text-bold patient-adviser"> YOGA helps to reduce toxicity in body at cellular levels. We have
                            found some prana yams beneficial for hair - hastapadasan, trikonasan & viparit karniasan.
                        </li>

                        <li class="text-bold patient-adviser"> KERATIN - Chew 4-5 curry leaves every day helps in improving
                            keratin content in hair.</li>

                        <li class="text-bold patient-adviser"> The diet which helps to reduce DHT levels is as follows:
                            <ul class="">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <li class="text-bold"><i class="fa fa-check"></i>Watermelon</li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Walnuts</li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Wheat Gram</li>
                                            <li class="text-bold"><i class="fa fa-check"></i>White Mushrooms</li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Tuna</li>
                                        </div>
                                        <div class="col-sm-3">

                                            <li class="text-bold"><i class="fa fa-check"></i>Tomatoes</li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Swiss Chard</li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Pumpkin Seeds</li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Peanuts</li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Pecans</li>

                                        </div>
                                        <div class="col-sm-3">
                                            <li class="text-bold"><i class="fa fa-check"></i>Oysters</li>
                                            <li class="text-bold"><i class="fa fa-check"></i>Mangoes</li>
                                            <li class="text-bold"><i class="fa fa-check"></i> Kale</li>
                                            <li class="text-bold"><i class="fa fa-check"></i> Carrots</li>
                                            <li class="text-bold"><i class="fa fa-check"></i> Cashews</li>
                                        </div>
                                        <div class="col-sm-3">


                                            <li class="text-bold"><i class="fa fa-check"></i> Egg Yolks</li>
                                            <li class="text-bold"><i class="fa fa-check"></i> Bananas</li>
                                            <li class="text-bold"><i class="fa fa-check"></i> Almonds</li>
                                            <li class="text-bold"><i class="fa fa-check"></i> NETTLE TEA</li>

                                        </div>
                                    </div>
                                </div>


                            </ul>
                        </li>
                    </ul>


                </div>
            </div>
        </div>
    </div>


    <?php include_once('footer.php')?>
    <script>
    jQuery(document).ready(function($) {
        var timelines = $('.cd-horizontal-timeline'),
            eventsMinDistance = 100;

        (timelines.length > 0) && initTimeline(timelines);

        function initTimeline(timelines) {
            timelines.each(function() {
                var timeline = $(this),
                    timelineComponents = {};
                //cache timeline components 
                timelineComponents['timelineWrapper'] = timeline.find('.events-wrapper');
                timelineComponents['eventsWrapper'] = timelineComponents['timelineWrapper'].children(
                    '.events');
                timelineComponents['fillingLine'] = timelineComponents['eventsWrapper'].children(
                    '.filling-line');
                timelineComponents['timelineEvents'] = timelineComponents['eventsWrapper'].find('a');
                timelineComponents['timelineDates'] = parseDate(timelineComponents['timelineEvents']);
                timelineComponents['eventsMinLapse'] = minLapse(timelineComponents['timelineDates']);
                timelineComponents['timelineNavigation'] = timeline.find('.cd-timeline-navigation');
                timelineComponents['eventsContent'] = timeline.children('.events-content');

                //assign a left postion to the single events along the timeline
                setDatePosition(timelineComponents, eventsMinDistance);
                //assign a width to the timeline
                var timelineTotWidth = setTimelineWidth(timelineComponents, eventsMinDistance);
                //the timeline has been initialize - show it
                timeline.addClass('loaded');

                //detect click on the next arrow
                timelineComponents['timelineNavigation'].on('click', '.next', function(event) {
                    event.preventDefault();
                    updateSlide(timelineComponents, timelineTotWidth, 'next');
                });
                //detect click on the prev arrow
                timelineComponents['timelineNavigation'].on('click', '.prev', function(event) {
                    event.preventDefault();
                    updateSlide(timelineComponents, timelineTotWidth, 'prev');
                });
                //detect click on the a single event - show new event content
                timelineComponents['eventsWrapper'].on('click', 'a', function(event) {
                    event.preventDefault();
                    timelineComponents['timelineEvents'].removeClass('selected');
                    $(this).addClass('selected');
                    updateOlderEvents($(this));
                    updateFilling($(this), timelineComponents['fillingLine'], timelineTotWidth);
                    updateVisibleContent($(this), timelineComponents['eventsContent']);
                });

                //on swipe, show next/prev event content
                timelineComponents['eventsContent'].on('swipeleft', function() {
                    var mq = checkMQ();
                    (mq == 'mobile') && showNewContent(timelineComponents, timelineTotWidth,
                        'next');
                });
                timelineComponents['eventsContent'].on('swiperight', function() {
                    var mq = checkMQ();
                    (mq == 'mobile') && showNewContent(timelineComponents, timelineTotWidth,
                        'prev');
                });

                //keyboard navigation
                $(document).keyup(function(event) {
                    if (event.which == '37' && elementInViewport(timeline.get(0))) {
                        showNewContent(timelineComponents, timelineTotWidth, 'prev');
                    } else if (event.which == '39' && elementInViewport(timeline.get(0))) {
                        showNewContent(timelineComponents, timelineTotWidth, 'next');
                    }
                });
            });
        }

        function updateSlide(timelineComponents, timelineTotWidth, string) {
            //retrieve translateX value of timelineComponents['eventsWrapper']
            var translateValue = getTranslateValue(timelineComponents['eventsWrapper']),
                wrapperWidth = Number(timelineComponents['timelineWrapper'].css('width').replace('px', ''));
            //translate the timeline to the left('next')/right('prev') 
            (string == 'next') ?
            translateTimeline(timelineComponents, translateValue - wrapperWidth + eventsMinDistance,
                wrapperWidth - timelineTotWidth): translateTimeline(timelineComponents, translateValue +
                wrapperWidth - eventsMinDistance);
        }

        function showNewContent(timelineComponents, timelineTotWidth, string) {
            //go from one event to the next/previous one
            var visibleContent = timelineComponents['eventsContent'].find('.selected'),
                newContent = (string == 'next') ? visibleContent.next() : visibleContent.prev();

            if (newContent.length > 0) { //if there's a next/prev event - show it
                var selectedDate = timelineComponents['eventsWrapper'].find('.selected'),
                    newEvent = (string == 'next') ? selectedDate.parent('li').next('li').children('a') :
                    selectedDate.parent('li').prev('li').children('a');

                updateFilling(newEvent, timelineComponents['fillingLine'], timelineTotWidth);
                updateVisibleContent(newEvent, timelineComponents['eventsContent']);
                newEvent.addClass('selected');
                selectedDate.removeClass('selected');
                updateOlderEvents(newEvent);
                updateTimelinePosition(string, newEvent, timelineComponents, timelineTotWidth);
            }
        }

        function updateTimelinePosition(string, event, timelineComponents, timelineTotWidth) {
            //translate timeline to the left/right according to the position of the selected event
            var eventStyle = window.getComputedStyle(event.get(0), null),
                eventLeft = Number(eventStyle.getPropertyValue("left").replace('px', '')),
                timelineWidth = Number(timelineComponents['timelineWrapper'].css('width').replace('px', '')),
                timelineTotWidth = Number(timelineComponents['eventsWrapper'].css('width').replace('px', ''));
            var timelineTranslate = getTranslateValue(timelineComponents['eventsWrapper']);

            if ((string == 'next' && eventLeft > timelineWidth - timelineTranslate) || (string == 'prev' &&
                    eventLeft < -timelineTranslate)) {
                translateTimeline(timelineComponents, -eventLeft + timelineWidth / 2, timelineWidth -
                    timelineTotWidth);
            }
        }

        function translateTimeline(timelineComponents, value, totWidth) {
            var eventsWrapper = timelineComponents['eventsWrapper'].get(0);
            value = (value > 0) ? 0 : value; //only negative translate value
            value = (!(typeof totWidth === 'undefined') && value < totWidth) ? totWidth :
            value; //do not translate more than timeline width
            setTransformValue(eventsWrapper, 'translateX', value + 'px');
            //update navigation arrows visibility
            (value == 0) ? timelineComponents['timelineNavigation'].find('.prev').addClass('inactive'):
                timelineComponents['timelineNavigation'].find('.prev').removeClass('inactive');
            (value == totWidth) ? timelineComponents['timelineNavigation'].find('.next').addClass('inactive'):
                timelineComponents['timelineNavigation'].find('.next').removeClass('inactive');
        }

        function updateFilling(selectedEvent, filling, totWidth) {
            //change .filling-line length according to the selected event
            var eventStyle = window.getComputedStyle(selectedEvent.get(0), null),
                eventLeft = eventStyle.getPropertyValue("left"),
                eventWidth = eventStyle.getPropertyValue("width");
            eventLeft = Number(eventLeft.replace('px', '')) + Number(eventWidth.replace('px', '')) / 2;
            var scaleValue = eventLeft / totWidth;
            setTransformValue(filling.get(0), 'scaleX', scaleValue);
        }

        function setDatePosition(timelineComponents, min) {
            for (i = 0; i < timelineComponents['timelineDates'].length; i++) {
                var distance = daydiff(timelineComponents['timelineDates'][0], timelineComponents[
                        'timelineDates'][i]),
                    distanceNorm = Math.round(distance / timelineComponents['eventsMinLapse']) + 2;
                timelineComponents['timelineEvents'].eq(i).css('left', distanceNorm * min + 'px');
            }
        }

        function setTimelineWidth(timelineComponents, width) {
            var timeSpan = daydiff(timelineComponents['timelineDates'][0], timelineComponents['timelineDates'][
                    timelineComponents['timelineDates'].length - 1
                ]),
                timeSpanNorm = timeSpan / timelineComponents['eventsMinLapse'],
                timeSpanNorm = Math.round(timeSpanNorm) + 4,
                totalWidth = timeSpanNorm * width;
            timelineComponents['eventsWrapper'].css('width', totalWidth + 'px');
            updateFilling(timelineComponents['timelineEvents'].eq(0), timelineComponents['fillingLine'],
                totalWidth);

            return totalWidth;
        }

        function updateVisibleContent(event, eventsContent) {
            var eventDate = event.data('date'),
                visibleContent = eventsContent.find('.selected'),
                selectedContent = eventsContent.find('[data-date="' + eventDate + '"]'),
                selectedContentHeight = selectedContent.height();

            if (selectedContent.index() > visibleContent.index()) {
                var classEnetering = 'selected enter-right',
                    classLeaving = 'leave-left';
            } else {
                var classEnetering = 'selected enter-left',
                    classLeaving = 'leave-right';
            }

            selectedContent.attr('class', classEnetering);
            visibleContent.attr('class', classLeaving).one(
                'webkitAnimationEnd oanimationend msAnimationEnd animationend',
                function() {
                    visibleContent.removeClass('leave-right leave-left');
                    selectedContent.removeClass('enter-left enter-right');
                });
            eventsContent.css('height', selectedContentHeight + 'px');
        }

        function updateOlderEvents(event) {
            event.parent('li').prevAll('li').children('a').addClass('older-event').end().end().nextAll('li')
                .children('a').removeClass('older-event');
        }

        function getTranslateValue(timeline) {
            var timelineStyle = window.getComputedStyle(timeline.get(0), null),
                timelineTranslate = timelineStyle.getPropertyValue("-webkit-transform") ||
                timelineStyle.getPropertyValue("-moz-transform") ||
                timelineStyle.getPropertyValue("-ms-transform") ||
                timelineStyle.getPropertyValue("-o-transform") ||
                timelineStyle.getPropertyValue("transform");

            if (timelineTranslate.indexOf('(') >= 0) {
                var timelineTranslate = timelineTranslate.split('(')[1];
                timelineTranslate = timelineTranslate.split(')')[0];
                timelineTranslate = timelineTranslate.split(',');
                var translateValue = timelineTranslate[4];
            } else {
                var translateValue = 0;
            }

            return Number(translateValue);
        }

        function setTransformValue(element, property, value) {
            element.style["-webkit-transform"] = property + "(" + value + ")";
            element.style["-moz-transform"] = property + "(" + value + ")";
            element.style["-ms-transform"] = property + "(" + value + ")";
            element.style["-o-transform"] = property + "(" + value + ")";
            element.style["transform"] = property + "(" + value + ")";
        }

        //based on http://stackoverflow.com/questions/542938/how-do-i-get-the-number-of-days-between-two-dates-in-javascript
        function parseDate(events) {
            var dateArrays = [];
            events.each(function() {
                var dateComp = $(this).data('date').split('/'),
                    newDate = new Date(dateComp[2], dateComp[1] - 1, dateComp[0]);
                dateArrays.push(newDate);
            });
            return dateArrays;
        }

        function parseDate2(events) {
            var dateArrays = [];
            events.each(function() {
                var singleDate = $(this),
                    dateComp = singleDate.data('date').split('T');
                if (dateComp.length > 1) { //both DD/MM/YEAR and time are provided
                    var dayComp = dateComp[0].split('/'),
                        timeComp = dateComp[1].split(':');
                } else if (dateComp[0].indexOf(':') >= 0) { //only time is provide
                    var dayComp = ["2000", "0", "0"],
                        timeComp = dateComp[0].split(':');
                } else { //only DD/MM/YEAR
                    var dayComp = dateComp[0].split('/'),
                        timeComp = ["0", "0"];
                }
                var newDate = new Date(dayComp[2], dayComp[1] - 1, dayComp[0], timeComp[0], timeComp[
                1]);
                dateArrays.push(newDate);
            });
            return dateArrays;
        }

        function daydiff(first, second) {
            return Math.round((second - first));
        }

        function minLapse(dates) {
            //determine the minimum distance among events
            var dateDistances = [];
            for (i = 1; i < dates.length; i++) {
                var distance = daydiff(dates[i - 1], dates[i]);
                dateDistances.push(distance);
            }
            return Math.min.apply(null, dateDistances);
        }

        /*
        	How to tell if a DOM element is visible in the current viewport?
        	http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
        */
        function elementInViewport(el) {
            var top = el.offsetTop;
            var left = el.offsetLeft;
            var width = el.offsetWidth;
            var height = el.offsetHeight;

            while (el.offsetParent) {
                el = el.offsetParent;
                top += el.offsetTop;
                left += el.offsetLeft;
            }

            return (
                top < (window.pageYOffset + window.innerHeight) &&
                left < (window.pageXOffset + window.innerWidth) &&
                (top + height) > window.pageYOffset &&
                (left + width) > window.pageXOffset
            );
        }

        function checkMQ() {
            //check if mobile or desktop device
            return window.getComputedStyle(document.querySelector('.cd-horizontal-timeline'), '::before')
                .getPropertyValue('content').replace(/'/g, "").replace(/"/g, "");
        }
    });
    </script>