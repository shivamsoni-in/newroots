<html>
<head>
 <?php include_once('headertitle.php')?>
<style>
    * {
  padding: 0;
  margin: 0;
  color: #1a1f36;
  box-sizing: border-box;
  word-wrap: break-word;
  font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto,
    Helvetica Neue, Ubuntu, sans-serif;
}
body {
  min-height: 100%;
  background-color: #ffffff;
}
h1 {
  letter-spacing: -1px;
}
a {
  color: #5469d4;
  text-decoration: unset;
}
.login-root {
  background: #fff;
  display: flex;
  width: 100%;
  min-height: 100vh;
  overflow: hidden;
}
.loginbackground {
  min-height: 692px;
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  top: 0;
  z-index: 0;
  overflow: hidden;
}
.flex-flex {
  display: flex;
}
.align-center {
  align-items: center;
}
.center-center {
  align-items: center;
  justify-content: center;
}
.box-root {
  box-sizing: border-box;
}
.flex-direction--column {
  -ms-flex-direction: column;
  flex-direction: column;
}
.loginbackground-gridContainer {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: [start] 1fr [left-gutter] (86.6px) [16] [left-gutter] 1fr
    [end];
  grid-template-columns: [start] 1fr [left-gutter] repeat(16, 86.6px) [left-gutter] 1fr [end];
  -ms-grid-rows: [top] 1fr [top-gutter] (64px) [8] [bottom-gutter] 1fr [bottom];
  grid-template-rows: [top] 1fr [top-gutter] repeat(8, 64px) [bottom-gutter] 1fr [bottom];
  justify-content: center;
  margin: 0 -2%;
  transform: rotate(-12deg) skew(-12deg);
}
.box-divider--light-all-2 {
  box-shadow: inset 0 0 0 2px #e3e8ee;
}
.box-background--blue {
  background-color: #d7b961;
}
.box-background--white {
  background-color: #ffffff;
}
.box-background--blue800 {
  background-color: #d7b961;
}
.box-background--gray100 {
  background-color: #e3e8ee;
}
.box-background--cyan200 {
  background-color: #d7b961;
}
.padding-top--64 {
  padding-top: 64px;
}
.padding-top--24 {
  padding-top: 24px;
}
.padding-top--48 {
  padding-top: 48px;
}
.padding-bottom--24 {
  padding-bottom: 44px;
}
.padding-horizontal--48 {
  padding: 48px;
}
.padding-bottom--15 {
  padding-bottom: 15px;
}

.flex-justifyContent--center {
  -ms-flex-pack: center;
  justify-content: center;
}
.title{
    text-align:center;
}
.subtitle{
    text-align:center;
    border-bottom:2px;
}
.formbg {
     margin: 0px auto;
    width: 100%;
    max-width: 50%;
    background: white;
    border-radius: 17px; 
    
    box-shadow: rgb(60 66 87 / 17%) 0px 7px 14px 11px, rgb(0 0 0 / 17%) 0px 3px 6px 3px;
}

@media only screen and (max-width: 600px) {
  .formbg {
     margin: 0px auto;
    width: 100%;
    max-width: 90%;
    background: white;
    border-radius: 17px; 
    
    box-shadow: rgb(60 66 87 / 17%) 0px 7px 14px 11px, rgb(0 0 0 / 17%) 0px 3px 6px 3px;
}
}
span {
  display: block;
  font-size: 20px;
  line-height: 28px;
  color: #1a1f36;
}
label {
  margin-bottom: 10px;
}
.reset-pass a,
label {
  font-size: 14px;
  font-weight: 600;
  display: block;
}
.reset-pass > a {
  text-align: right;
  margin-bottom: 10px;
}
.grid--50-50 {
  display: grid;
  grid-template-columns: 50% 50%;
  align-items: center;
}

.field input,.btn {
  font-size: 16px;
  line-height: 28px;
  padding: 8px 16px;
  width: 100%;
  min-height: 44px;
  border: unset;
   text-align:left;
  border-radius: 4px;
  outline-color: rgb(84 105 212 / 0.5);
  background-color: rgb(255, 255, 255);
  box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px,
    rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(60, 66, 87, 0.16) 0px 0px 0px 1px,
    rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px,
    rgba(0, 0, 0, 0) 0px 0px 0px 0px;
}
.field textarea {
  font-size: 16px;
  line-height: 28px;
  padding: 8px 16px;
  width: 100%;
  min-height: 44px;
  border: unset;
  border-radius: 4px;
  outline-color: rgb(84 105 212 / 0.5);
  background-color: rgb(255, 255, 255);
  box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px,
    rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(60, 66, 87, 0.16) 0px 0px 0px 1px,
    rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px,
    rgba(0, 0, 0, 0) 0px 0px 0px 0px;
}
.head_title_pic_center   {
    width: 150px;
    display: contents;
    height: 14px;
}.img-fluid {
    max-width: 100%;
    height: auto;
}
.field select {
  font-size: 16px;
  line-height: 28px;
  padding: 8px 16px;
  width: 100%;
  min-height: 44px;
  border: unset;
  border-radius: 4px;
  outline-color: rgb(84 105 212 / 0.5);
  background-color: rgb(255, 255, 255);
  box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px,
    rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(60, 66, 87, 0.16) 0px 0px 0px 1px,
    rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px,
    rgba(0, 0, 0, 0) 0px 0px 0px 0px;
}
.btn {
  background-color: #d7b961;
  box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px,
    rgba(0, 0, 0, 0.12) 0px 1px 1px 0px, #d7b961 0px 0px 0px 1px,
    rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px,
    rgba(60, 66, 87, 0.08) 0px 2px 5px 0px;
  color: #fff;
  font-weight: 600;
  cursor: pointer;
  text-align:center;
}
.field-checkbox input {
  width: 20px;
  height: 15px;
  margin-right: 5px;
  box-shadow: unset;
  min-height: unset;
}
.field-checkbox label {
  display: flex;
  align-items: center;
  margin: 0;
}
a.ssolink {
  display: block;
  text-align: center;
  font-weight: 600;
}
.footer-link span {
  font-size: 14px;
  text-align: center;
}
.listing a {
  color: #697386;
  font-weight: 600;
  margin: 0 10px;
}

.animationRightLeft {
  animation: animationRightLeft 2s ease-in-out infinite;
}
.animationLeftRight {
  animation: animationLeftRight 2s ease-in-out infinite;
}
.tans3s {
  animation: animationLeftRight 3s ease-in-out infinite;
}
.tans4s {
  animation: animationLeftRight 4s ease-in-out infinite;
}
.padding-10{
    padding:10%;
}
@keyframes animationLeftRight {
  0% {
    transform: translateX(0px);
  }
  50% {
    transform: translateX(1000px);
  }
  100% {
    transform: translateX(0px);
  }
}

@keyframes animationRightLeft {
  0% {
    transform: translateX(0px);
  }
  50% {
    transform: translateX(-1000px);
  }
  100% {
    transform: translateX(0px);
  }
}

</style>
</head>

<body>
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <!--<div class="loginbackground box-background--white padding-top--64">-->
      <!--  <div class="loginbackground-gridContainer">-->
      <!--    <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">-->
      <!--      <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">-->
      <!--      </div>-->
      <!--    </div>-->
      <!--    <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">-->
      <!--      <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>-->
      <!--    </div>-->
      <!--    <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">-->
      <!--      <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>-->
      <!--    </div>-->
      <!--    <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">-->
      <!--      <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>-->
      <!--    </div>-->
      <!--    <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">-->
      <!--      <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>-->
      <!--    </div>-->
      <!--    <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">-->
      <!--      <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>-->
      <!--    </div>-->
      <!--    <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">-->
      <!--      <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>-->
      <!--    </div>-->
      <!--    <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">-->
      <!--      <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>-->
      <!--    </div>-->
      <!--    <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">-->
      <!--      <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->
      <!--<div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">-->
        
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-10">
                <div class="box-root   flex-flex flex-justifyContent--center">
                    <a href="https://www.newrootshairtransplant.com/India">
                       <img src="https://www.newrootshairtransplant.com/India/assets/img/logo/New-Root-Logo-on-Black.png" width="100">
                    </a>
                </div>
                 <div class="col-lg-12 col-12 d-lg-block d-sm-none d-block text-center">
                        <h2 class="title approach wow bounceInUp"> Hair Transplant Payment</h2>
                        <P class="text-center subtitle">The payment amount is based upon the number of grafts required by the patient.
                <br>Please consult the clinic before payment.</P>
                       
                    </div>
                    <br>
                    <hr class="solid">
              
              <form id="stripe-login" class="mt-5 padding-top--64" method="post" action="<?php echo base_url(); ?>hair_transplant_payment/pay" enctype="multipart/form-data">
                <div class="field padding-bottom--24">
                  <label for="name">Name</label>
                  <input type="text" name="name" required>
                </div>  
                <div class="field padding-bottom--24">
                  <label for="email">Email</label>
                  <input type="email" name="email" required>
                </div>
                <div class="field padding-bottom--24">
                  <label for="phone">Phone</label>
                  <input type="tel" name="phone" required>
                </div>
                <div class="field padding-bottom--24">
                  <label for="address">Address</label>
                  <textarea name="address" required></textarea>
                </div>
                <div class="field padding-bottom--24">
                  <label for="location">Location</label>
                  <select name="location" required>
                      <option value="">Select location</option>
                      <option value="Mumbai">Mumbai</option>
                      <option value="Navi-Mumbai">Navi Mumbai</option>
                      <option value="Pune">Pune</option>
                      <option value="Hyderabad">Hyderabad</option>
                      <option value="Nagpur">Nagpur</option>
                      <option value="Aurangabad">Aurangabad</option>
                      <option value="Kolkata">Kolkata</option>
                      <option value="Nashik">Nashik</option>
                      <option value="Raipur">Raipur</option>
                      <option value="Nashik Road">Nashik Road</option>
                      <option value="Dhaka (Bangladesh)">Dhaka (Bangladesh)</option>
                       
                      
                  </select>
                </div>
                
                <div class="field padding-bottom--24">
                  <label for="amount">Amout to be paid</label>
                 <input type="number" name="amount" required>
                </div>
                <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                  <label for="checkbox">
                    <input type="checkbox" name="checkbox" required> I have read all the terms and conditions
                  </label>
                </div>
                <div class="field padding-bottom--24 title">
                  <!--<input type="submit" name="submit" class="title" value="Pay">-->
                  <button type="submit" name="submit" class="title btn"  >Pay</button>
                </div>
                
              </form>
              <div class="footer-link padding-top--24">
                  
            <!--<span>Don't have an account? <a href="">Sign up</a></span>-->
            <div class="listing padding-top--24  flex-flex center-center">
              <span><a href="https://www.newrootshairtransplant.com/India/privacy-policy.php">Privacy policy</a></span>
              <span><a href="https://www.newrootshairtransplant.com/India/terms-and-conditions.php">Terms & Conditions</a></span>
              <span><a href="https://www.newrootshairtransplant.com/India/refund-policy.php"> Refund Policy</a></span>
            </div>
          </div>
            </div>
          </div>
            </div>
      </div>
    </div>
  </div>
</body>

</html>