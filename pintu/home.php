<?php 
include("include/db_conf.php");
include("include/db_functions.php");
$conn=db_connect();

if(!isset($_SESSION['username']))
{
     echo "<script> window.location.href='login.php'; </script>";
}else
{
    $username = $_SESSION['username'];
    $sql="select account_details.id,account_details.accnum,account_details.amount,bank_account.name from bank_account join account_details ON account_details.accnum=bank_account.accnum where username='$username'";
    $query=mysqli_query($conn, $sql);
    $data=mysqli_fetch_assoc($query);
    $name=$data['name'];
    $accnum=$data['accnum'];
    $amount=$data['amount'];
}
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>DAVE BANK| Account Home</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

    
    
    <style>
        #container{
        margin-left: 380px;
        border:3px solid #f1f1f1;    
        }
        input[type=text], input[type=password] 
        {
              width: 100%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              box-sizing: border-box;
        }
        
        button 
        {
              background-color: #4c7faf;
              color: white;
              padding: 14px 20px;
              margin: 8px 0;
              border: none;
              cursor: pointer;
              width: 100%;
        }
        </style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->

        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="index.php">Logout</a></li>
                                    
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Contact -->
                        <div class="contact">
                            <a href="#"><img src="img/core-img/call2.png" alt=""> +91 9545551386</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>WELCOME TO DAVE BANK</h2>
                    </div>
                    <p>Welcome <?php echo $name ?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### About Area Start ###### -->
    <section class="about-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-content mb-100">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <h6>Account Detail</h6>
                            <table class="table" style="margin-left: 230px;">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Account Number</th>
                                        <th scope="col">Amount</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $accnum; ?></td>
                                    <td><?php echo $amount; ?></td>
                                </tr>
                            </table>
                        </div>
                        
                        
                       
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="about-thumbnail mb-100">
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>