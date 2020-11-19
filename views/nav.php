<div class="container" id="container">
        <div class="header">
            <div class="logo">
                 <img src="../resource/img/logo.png" alt="">
                <h1><small style="font-size: 14px; color:black;">   Solution for many problem</small></h1>
            </div>
            <div class="sign">
                <?php if(!isset($_SESSION['email'])){echo '<a href="../controller/logingController.php?click1">Sign In <i class="fa fa-sign-in-alt"></i></a>';}?>
                <?php if(isset($_SESSION['email'])){ 
                    if($_SESSION['level']=='administrator'){echo '<a href="../controller/adminPanelCon.php?admin"> Dash Board &nbsp</a>'; }
                    ?>

                    <div class="notification">
                        <i class="fa fa-bell"></i>
                        <div class="notification-box" >
                            <ul>
                                <li><i class="fas fa-times"></i></li>
                                <a href="#"><li>You have notification</li></a>
                                <a href="#"><li>You have notification</li></a>
                                <a href="#"><li>You have notification</li></a>
                                <a href="#"><li>You have notification</li></a>
                                <a href="#"><li>You have notification</li></a>
                            </ul>
                        </div>
                    </div>
                    <div class="profile"><a href="profilepage.php"> <i  class="fa fa-user-circle"></a></i></div>
                <?php
                    echo '<div class="user">Hi '.$_SESSION['first_name'].'</div>'; 
                    echo '<a href="../controller/logoutController.php">Sign out <i class="fa fa-sign-out-alt"></i></a>';}
                ?> 
                
            </div>
        </div>
        <div class="nav">
            <ul class="nav_bar">
                <div class="burger">
                        <div>
                            <div class="line1"></div>
                            <div class="line2"></div>
                            <div class="line3"></div>
                        </div>
                </div>
                <li class="nav_item " onclick="window.location='../index.php'"><i class=" fa fa-home"></i>Home</li>
                <li class="nav_item " onclick="window.location='boardings.php'"><i class="fa fa-bed"></i> Boardings</li>
                <li class="nav_item " onclick="window.location='foodposts.php'"><i class="fas fa-hamburger"></i> Order Foods</li>
                <li class="nav_item " onclick="window.location='about.php'"><i class="fa fa-address-card"></i> About us</li>
                <li class="nav_item " onclick="window.location='contact_us.php'"><i class="fa fa-address-book"></i> Contact Us</li>
            </ul>
            <div class="slide-nav">
            <ul><?php if(isset($_SESSION['email'])){?> 
                    <li onclick="window.location='profilepage.php'">Profile</li>

                    <li>Chat</li>
                    <?php if($_SESSION['level']=='food_supplier'){?>
                        <li onclick='window.location="orders.php"'>Orders </li>
                       
                   <?php } ?>
                    <?php if($_SESSION['level']=='boardings_owner'){?>
                        <li onclick='window.location="ConBODealIshan.php"'>Confirm Deal </li>
                        <li onclick='window.location="TBOReqIshan.php"'>Request</li>
                   <?php } ?>
                   <?php if($_SESSION['level']=='boardings_owner' || $_SESSION['level']=='boarder'){?>
                    <li onclick='window.location="paymentFood_pending.php"'>My food Orders</li>
                    <?php } ?>
                    <li onclick="window.location='../controller/logoutController.php'">Log out</li>
                <?php } else{?>
                    <h4>Plase sign in first to system.</h4>
                        <h3 class="nav-sign" onclick="window.location='user_loging.php'">Sign in </h3>
                        
                <?php } ?>
                </ul>
        </div>
        </div>

        <!-- <b style="color: rgb(13, 13, 189)">B</b>odima -->