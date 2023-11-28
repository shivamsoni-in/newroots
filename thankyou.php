<?php 
  
$url =  isset($_SERVER['HTTPS']) &&
    $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";  
 
$url .= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="New Roots Hair Clinic is the Best Hair Transplant And Hair Loss Treatment Clinic In Mumbai. Hair transplantation by experienced surgeons. Affordable hair transplant in India. Offering FUE Hair Transplant, Sapphire & DHI Hair Transplant Services">
      <meta name="keywords" content="Hair Transplant in Mumbai, Best Hair Transplant clinic in Mumbai, Best Hair transplant in Mumbai, hair transplant cost, DHI in Mumbai, Hair Transplant in Navi Mumbai">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="canonical" href="<?php echo $url;?>">
      <meta property="og:title" content="India’s Most Trusted Hair Transplant Clinic | Permanent Treatment for Baldness"  />
      <meta property="og:site_name" content="New Roots Hair Clinic"  />
      <meta property="og:url" content="https://www.newrootshairtransplant.com/"  />
      <meta property="og:description" content="New Roots Hair Clinic is India's Most Trusted Hair Transplant Clinic. New Roots Hair Clinic is located in Mumbai, Kolkata, Nashik, Nagpur, Raipur, Aurangabad, Latur, Hyderabad"  />
     
      
      
    <title>India’s Most Trusted Hair Transplant Clinic | New Roots Hair Clinic </title>


    <link rel="stylesheet" href="assets/css/maicons.css">

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.16/css/intlTelInput.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;0,700;0,800;0,900;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap');
html,body {
    font-family: 'Raleway', sans-serif;  
}
.thankyou-page ._header {
    background: #d7b961;
    padding: 100px 30px;
    text-align: center;
    /* background: #fee028 url(https://codexcourier.com/images/main_page.jpg) center/cover no-repeat; */
}
.thankyou-page ._header .logo {
    max-width: 200px;
    margin: 0 auto 50px;
}
.thankyou-page ._header .logo img {
    width: 100%;
}
.thankyou-page ._header h1 {
    font-size: 65px;
    font-weight: 800;
    color: white;
    margin: 0;
}
.thankyou-page ._body {
    margin: -70px 0 30px;
}
.thankyou-page ._body ._box {
    margin: auto;
    max-width: 80%;
    padding: 50px;
    background: white;
    border-radius: 3px;
    box-shadow: 0 0 35px rgba(10, 10, 10,0.12);
    -moz-box-shadow: 0 0 35px rgba(10, 10, 10,0.12);
    -webkit-box-shadow: 0 0 35px rgba(10, 10, 10,0.12);
}
.thankyou-page ._body ._box h2 {
    font-size: 32px;
    font-weight: 600;
    color: #2a2a2a;
}
.thankyou-page ._footer {
    text-align: center;
    padding: 50px 30px;
}

.thankyou-page ._footer .btn {
    background: #4ab74a;
    color: white;
    border: 0;
    font-size: 14px;
    font-weight: 600;
    border-radius: 0;
    letter-spacing: 0.8px;
    padding: 20px 33px;
    text-transform: uppercase;
}

ul {
    margin: 0px;
    padding: 0px;
}
.footer-section {
  background: #151414;
  position: relative;
}
.footer-cta {
  border-bottom: 1px solid #373636;
}
.single-cta i {
     color: #d9ba6a;
    font-size: 30px;
    float: left;
    margin-top: 8px;
    margin-right: 19px;
}
.cta-text {
  /* padding-left: 15px; */
  display: flow-root;
}
.cta-text h4 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 2px;
}
.cta-text span {
  color: #757575;
  font-size: 15px;
}
.footer-content {
  position: relative;
  z-index: 2;
}
.footer-pattern img {
  position: absolute;
  top: 0;
  left: 0;
  height: 330px;
  background-size: cover;
  background-position: 100% 100%;
}
.footer-logo {
  margin-bottom: 30px;
}
.footer-logo img {
    max-width: 200px;
}
.footer-text p {
  margin-bottom: 14px;
  font-size: 14px;
      color: #7e7e7e;
  line-height: 28px;
}
.footer-social-icon span {
  color: #fff;
  display: block;
  font-size: 20px;
  font-weight: 700;
  font-family: 'Poppins', sans-serif;
  margin-bottom: 20px;
}
.footer-social-icon a {
  color: #fff;
  font-size: 16px;
  margin-right: 15px;
}
.footer-social-icon i {
  height: 40px;
  width: 40px;
  text-align: center;
  line-height: 38px;
  border-radius: 50%;
}
.facebook-bg{
  background: #3B5998;
}
.twitter-bg{
  background: #55ACEE;
}
.google-bg{
  background: #DD4B39;
}
.footer-widget-heading h3 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 40px;
  position: relative;
}
.footer-widget-heading h3::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -15px;
  height: 2px;
  width: 50px;
  background: #ff5e14;
}
.footer-widget ul li {
  display: inline-block;
  float: left;
  width: 50%;
  margin-bottom: 12px;
}
.footer-widget ul li a:hover{
  color: #ff5e14;
}
.footer-widget ul li a {
  color: #878787;
  text-transform: capitalize;
}
.subscribe-form {
  position: relative;
  overflow: hidden;
}
.subscribe-form input {
  width: 100%;
  padding: 14px 28px;
  background: #2E2E2E;
  border: 1px solid #2E2E2E;
  color: #fff;
}
.subscribe-form button {
    position: absolute;
    right: 0;
    background: #ff5e14;
    padding: 13px 20px;
    border: 1px solid #ff5e14;
    top: 0;
}
.subscribe-form button i {
  color: #fff;
  font-size: 22px;
  transform: rotate(-6deg);
}
.copyright-area{
  background: #202020;
  padding: 25px 0;
}
.copyright-text p {
  margin: 0;
  font-size: 14px;
  color: #878787;
}
.copyright-text p a{
  color: #ff5e14;
}
.footer-menu li {
  display: inline-block;
  margin-left: 20px;
}
.footer-menu li:hover a{
  color: #ff5e14;
}
.footer-menu li a {
  font-size: 14px;
  color: #878787;
}



    .iti--allow-dropdown input  {
    
    padding-left: 80px !important;
    
}
    .item_img {
        margin: 0px 20px 0px 0px;
    }
    .bh-widget-page-wrapper{
        bottom: 30px !important;
}.bh-w-powered-by {
    display: none !important;
    font-size: 12px;
    line-height: 16px;
    font-style: normal;
    letter-spacing: .4px;
    font-weight: 300;
    color: #9f9f9f;
}
.bh-w-call-to-action {
    display: flex;
    position: relative;
    padding: 6px 12px;
    background: #d7b961!important;
    border-radius: 20px;
    color: #000;
    cursor: pointer;
    font-size: 14px;
    line-height: 20px;
    letter-spacing: .25px;
    min-width: 60px;
    max-width: 100%;
    align-items: center;
    word-break: break-word;
}
    </style>
    
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-236371638-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-236371638-1');
</script>

<!-- Global site tag (gtag.js) - Google Ads: AW-702660873 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-702660873"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-702660873');
</script>

<!-- Event snippet for Thank you page viw conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-702660873/4Zc6CIno594DEImCh88C'});
</script>


</head>
 
<body>
 
<?php include_once('header.php')?>


<div class="thankyou-page">
    <div class="_header">
        <div class="logo">
            <!-- <img src="https://codexcourier.com/images/banner-logo.png" alt=""> -->
        </div>
        <h1>Thank You!</h1>
    </div>
    <div class="_body">
        <div class="_box">
            <h2>
                <strong>Thank You For Your Details,</strong> Our Executive Will Call You Back...
            </h2>
        </div>
    </div>
</div>

<?php include_once('footer.php')?>
              