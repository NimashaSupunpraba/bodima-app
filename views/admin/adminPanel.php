<?php require_once ('../../config/database.php');
      require_once ('../../models/adminModel.php');
session_start(); ?>
<?php 
$userCount=$_GET['student']+$_GET['boarding_owner']+$_GET['boarder']+$_GET['food_supplier'];
$bConut=$_GET['boarding_count'];
$fConut=$_GET['food_count'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../resource/css/admin.css">
    <link rel="stylesheet" href="../../resource/css/all.css">
    <title>Document</title>
   <?php include 'chart.php' ?>
</head>
<body onload="checked('order')">
    <div class="container">
        <div class="wrapper">
        <?php include 'slide-bar.php' ?>
            <div class="content" style="overflow:hidden">
                                <!-- dashboard card -->
            <div class="background">
            <h3>Dash Board</h3>
                    <div class="numbers">
                        <div class="num1">
                            <h2>Users</h2>
                            <div  class="num-format">
                                <div style="text-align: center;"><img src="https://img.icons8.com/pastel-glyph/64/bdc3ff/business-group--v1.png"/></div>
                                <h1><?php echo $userCount; ?></h1>
                            </div>
                        </div>
                        <div class="num2">
                            <h2>Boarding Posts</h2>
                            <div  class="num-format">
                                <div style="text-align: center;"><img src="https://img.icons8.com/fluent-systems-regular/64/67ff84/cottage.png"/></div>
                                <h1><?php echo $bConut; ?></h1>
                            </div>
                        </div>
                        <div class="num3">
                            <h2>Food posts</h2>
                            <div  class="num-format">
                                <div style="text-align: center;"><img src="https://img.icons8.com/wired/64/f3f9af/kawaii-french-fries.png"/></div>
                                <h1><?php echo $fConut; ?></h1>
                            </div>
                        </div>
                        <div class="num4">
                            <h2>Complaint</h2>
                             <div class="num-format">
                                <div style="text-align: center;"><img src="https://img.icons8.com/wired/64/ff9393/strike.png"/></div>
                                <h1><?php echo $userCount; ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="charts">
                    <div class="chart1">
                        <h3><i class="fa fa-chart-pie"></i> Users</h3>
                        <div id="chart1" style="width: 400px; height: 200px;background-color:white;"></div>
                    </div>
                    <div class="chart2">
                        <h3><i class="fa fa-chart-bar"></i> New  Users Registration</h3>
                        <div id="chart2" style="width: 100%; height: 200px;"></div>
                    </div>
                </div>
                                <!-- Bar chart -->
                <div class="charts-2">
                    <div class="chart3">
                        <h3><i class="fa fa-chart-bar"></i> Boarding Requests</h3>
                        <div id="chart3" style="width: 100%; height: 100px;"></div>
                    </div>
                    <div class="chart3">
                        <h3><i class="fa fa-chart-bar"></i> Food orders</h3>
                        <div id="chart4" style="width: 100%; height: 100px;"></div>
                    </div>
                    <div class="chart3">
                        <h3><i class="fa fa-chart-bar"></i> Payments</h3>
                        <div id="chart5" style="width: 100%; height: 100px;"></div>
                    </div>
                </div>
            
            
            </div>
        </div>
    </div>
    
</body>
<script src="../../resource/js/admin.js"></script>
<script src="../../resource/js/jquery.js"></script>
</html>

