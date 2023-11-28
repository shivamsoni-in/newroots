<?php
   session_start();
   require('db_connect.php');
   
   if(isset($_SESSION['ADMIN_LOGIN']))
   {
      
   }
   else
    {
      header('location:login.php');
      die();
    }
?>
<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>New Roots - Admin</title>
        <link rel="icon" href="img/newrootlogo.png" type="image/png" />

        <link rel="stylesheet" href="css/bootstrap1.min.css" />

        <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

        <link rel="stylesheet" href="vendors/select2/css/select2.min.css" />

        <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css" />
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

        <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />


        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bulma.min.css" />
    
        <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

        <link rel="stylesheet" href="css/style1.css" />
        <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS" />
    </head>
    <body class="crm_body_bg">
            <nav class="sidebar">
                <div class="logo d-flex justify-content-between">
                    <a href="javascript:void(0);"><img src="img/newrootlogo.png" alt="" class="w-75"/></a>
                    <div class="sidebar_close_icon d-lg-none">
                        <i class="ti-close"></i>
                    </div>
                </div>
                <ul id="sidebar_menu">
                    <li class="side_menu_title">
                    <!-- <span>Dashboard</span> -->
                </li>
                <li class="mm-active">
                    <a class="has-arrow-1" href="javascript:void(0)" aria-expanded="false">

                    <img src="img/menu-icon/1.svg" alt="">

                    <span>Dashboard</span>
                    </a>
                <ul>

                </ul>

                  
            </ul>
        </nav>

        <section class="main_content dashboard_part">
            <div class="container-fluid g-0">
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="header_iner d-flex justify-content-between align-items-center">
                            <div class="sidebar_icon d-lg-none">
                                <i class="ti-menu"></i>
                            </div>
                            <div class="serach_field-area">
                                <div class="search_inner">
                                   
                                </div>
                            </div>
                            <div class="header_right d-flex justify-content-between align-items-center">
                                <div class="profile_info">
                                    <img src="img/newrootlogo.png" alt="#" />
                                    <div class="profile_info_iner">
                                        <h5><?php echo $_SESSION['ADMIN_USERNAME'];?></h5>
                                        <div class="profile_info_details">
                                            <a href="logout.php">Log Out <i class="ti-shift-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main_content_iner">
                <div class="container-fluid p-0">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="single_element">
                                <div class="quick_activity">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="quick_activity_wrap">
                                                <div class="single_quick_activity d-flex">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-wallet fa-5x text-danger fa-flip" style="--fa-animation-duration: 3s;" ></i>
                                                    </div>
                                                    <?php 
                                                        require('db_connect.php');
                                                        $paymentCount = mysqli_query($conn,'SELECT * FROM payments;') or die('Query Failed');
                                                        $countPayment = mysqli_num_rows($paymentCount);
                                                    ?>  
                                                    <div class="count_content">
                                                        <h3><span class=""><?php echo $countPayment ;?></span></h3>
                                                        <p>Total Payments</p>
                                                    </div>
                                                </div>

                                                <div class="single_quick_activity d-flex">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-indian-rupee-sign fa-5x text-info fa-flip" style="--fa-animation-duration: 3s;" ></i>
                                                    </div>
                                                    <?php 
                                                        require('db_connect.php');
                                                        $totalpayment = mysqli_query($conn,'SELECT SUM(amount) as totalamount FROM payments;') or die('Query Failed');
                                                        $amount = mysqli_fetch_assoc($totalpayment);
                                                    ?>  
                                                    <div class="count_content">
                                                        <h3><span class=""><?php echo $amount['totalamount'] ;?></span></h3>
                                                        <p>Total Amount</p>
                                                    </div>
                                                </div>

                                                <!-- <div class="single_quick_activity d-flex">
                                                    <div class="icon">

                                                        <i class="fa-solid fa-file-arrow-down fa-bounce fa-5x text-success" style=" --fa-bounce-start-scale-x: 1; --fa-bounce-start-scale-y: 1; --fa-bounce-jump-scale-x: 1; --fa-bounce-jump-scale-y: 1; --fa-bounce-land-scale-x: 1; --fa-bounce-land-scale-y: 1; --fa-bounce-rebound: 0;"></i>
                                                    </div>
                                                    <div class="count_content">
                                                        <h3><span class="">Export</span></h3>
                                                        <h5><a href="javascript:void(0);" class="btn btn-success">Download Excel</a></h5>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                       <!-- table -->

                       <div class="main_content_iner">
                <div class="container-fluid p-0">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="QA_section">
                                <div class="white_box_tittle list_header">
                                    <h4>Payment Details</h4>
                                    <div class="box_right d-flex lms_block">
                                        <div class="serach_field_2">
                                            <!-- <div class="search_inner">
                                                <form Active="#">
                                                    <div class="search_field">
                                                        <input type="text" placeholder="Search content here..." />
                                                    </div>
                                                    <button type="submit"><i class="ti-search"></i></button>
                                                </form>
                                            </div> -->
                                        </div>
                                        <div class="add_button ms-2">
                                            <a href="excelReport/index.php" data-bs-toggle="modal" class="btn_1 btn-success"><i class="fa-solid fa-file-arrow-down fa-bounce" style=" --fa-bounce-start-scale-x: 1; --fa-bounce-start-scale-y: 1; --fa-bounce-jump-scale-x: 1; --fa-bounce-jump-scale-y: 1; --fa-bounce-land-scale-x: 1; --fa-bounce-land-scale-y: 1; --fa-bounce-rebound: 0;"></i>Download Excel Report</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb_30">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-center">Sr. No</th>
                                                    <th scope="col" class="text-center">Username</th>
                                                    <th scope="col" class="text-center">Phone</th>
                                                    <th scope="col" class="text-center">Email</th>
                                                    <th scope="col" class="text-center">Address</th>
                                                    <th scope="col" class="text-center">Location</th>
                                                    <th scope="col" class="text-center">Amount</th>
                                                    <th scope="col" class="text-center">Order ID</th>
                                                    <th scope="col" class="text-center">Razorpay ID</th>
                                                    <th scope="col" class="text-center">Payment Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                    require('db_connect.php');
                                                    $studentQuery = mysqli_query($conn,'SELECT * FROM payments') or die('Query Failed');
                                                    if(mysqli_num_rows($studentQuery) >0)
                                                    {
                                                        $rowCount = 1;
                                                        while($row = mysqli_fetch_assoc($studentQuery))
                                                        {
                                                    ?>
                                                    <tr>
                                                        <th scope="row" class="text-center"><?php echo $rowCount;?></th>
                                                        <td class="text-center"><?php echo $row['username'];?></td>
                                                        <td class="text-center"><?php echo $row['phone'];?></td>
                                                        <td class="text-center"><?php echo $row['email'];?></td>
                                                        <td class="text-center"><?php echo $row['address'];?></td>
                                                        <td class="text-center"><?php echo $row['location'];?></td>
                                                        <td class="text-center"><?php echo $row['amount'];?></td>
                                                        <td class="text-center"><?php echo $row['order_id'];?></td>
                                                        <td class="text-center"><?php echo $row['razorpayid'];?></td>
                                                        <td class="text-center"><?php echo $row['paymentdate'];?></td>
                                                    </tr>
                                                <?php
                                                    $rowCount++;
                                                    }
                                                    }
                                    
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                       <!-- table -->   
                        
                    </div>
                </div>
            </div>

            <div class="footer_part">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer_iner text-center">
                                <p>
                                    <?php echo date('Y'); ?> © - Designed by <a href="javascript:void(0);"> <i class="ti-heart"></i> </a><a href="https://www.magicalballoons.in/"> Magical Balloons</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="js/jquery1-3.4.1.min.js"></script>
        <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

        <script src="js/popper1.min.js"></script>

        <script src="js/metisMenu.js"></script>

        <script src="vendors/count_up/jquery.waypoints.min.js"></script>

        <script src="vendors/count_up/jquery.counterup.min.js"></script>

        <script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>

        <script src="vendors/tagsinput/tagsinput.js"></script>
        <script src="js/custom.js"></script>
    </body>

</html>
<script>
    $(document).ready(function () {
    $('.table').DataTable({
        autoWidth: false,
        columnDefs: [
            {
                targets: ['_all'],
                className: 'mdc-data-table__cell',
            },
        ],
    });
});
</script>